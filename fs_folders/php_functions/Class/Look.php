
<?php

use App\Reset;
use App\User;
use App\php_function\Color;

class Look
{

    private $mno = 0;
    private $plno = 0;
    private $where = '';
    private $select = 'plno';
    private $order = '';
    private $limit = 24;
    private $table = 'postedlooks';
    public $totalAllowPostADay = 2;

    function __construct($mno, $db)
    {
        $this->mno = $mno;
        $this->db = $db;
    }

    /**
     * @param $gender
     * @param $plusBlogger
     * @param $style
     * @param $orderBy
     * @param $get
     * @param int $limit
     * @return array
     * Rate look sorting starts here
     */
    public function ratingSort(
        $gender,
        $plusBlogger,
        $style,
        $orderBy,
        $get,
        $limit
    )
    {

        /** Set data */

        if ($gender != 'Men Plus Women') {
            $this->where .= $this->setGender($gender);
        }

        if ($plusBlogger != 'All Blogger') {
            $this->where .= $this->setPlusBlogger($plusBlogger);
        }

        if ($style != 'All Style') {
            $this->where .= $this->setStyle($style);
        }
        $this->order .= $this->setLatest($orderBy);

        $this->limit = $limit;

        echo "<br>";
        echo "where =  " . $this->where . '<br>';
        echo "order =  " . $this->order . '<br>';
        print_r($this->limit);
        echo "<br>limit at the top <br>";


        /** Retrieved data */
        $looks = $this->getLookStatus();
        $ratings = $this->getRatings($get);

        /** Return data and calculate status */
        return $this->finalizeResponse($looks, $ratings, $get);


    }

    /**
     * @return mixed
     * Retrieve looks that are fit with the sorting like where gender = 'male' and style = 'Stretwear' and plus_blogger = 'Yes'
     * order by bla....
     */
    private function getLookStatus()
    {
        $this->db->select('postedlooks', $this->select, null, $this->where, $this->order, $this->limit['base']);
        return $this->db->getResult();
    }

    /**
     * @param $looks
     * @param $ratings
     * @param $get
     * @return array
     * Finalize both response of the other table like fs_favorite_modals, fs_rate_modals, ..... and postedlooks.
     * So here we fetch if the favorited or rated or unrated
     */
    private function finalizeResponse($looks, $ratings, $get)
    {

        $response = array();
        $c = 0;
        $c1 = 0;
        $rated = false;

        echo "looks ";
        print_r($looks);

        echo "rating";
        print_r($ratings);

        echo "get $get
        <br>";

        if ($get == 'Rated' || $get == 'Favorited') {
            for ($i = 0; $i < count($looks); $i++) {
                $plno = $looks[$i]['plno'];
                foreach ($ratings as $key => $val) {
                    //check if plno is in rated or not rated
                    if (in_array($plno, $val)) {
                        //add filter of limit ex: start = 0, end = 5
                        // echo "$c1 >= " . $this->limit['start'] . ' and ' . $c1 . ' < ' . $this->limit['end'] . ' \n';
                        $c1++;
                        if ($c1 >= $this->limit['start'] and $c1 <= $this->limit['end']) {
                            echo "if ";
                            $response[$c]['plno'] = $plno;
                            $response[$c]['stat'] = $get;
                            $c++;
                            break;
                        }
                    }
                }
            }
            return $response;
        } else if ($get == 'Unrated') {
            for ($i = 0; $i < count($looks); $i++) {
                $plno = $looks[$i]['plno'];
                foreach ($ratings as $key => $val) {
                    if (in_array($plno, $val)) {
                        $rated = true;
                    }
                }
                if ($rated == false) {
                    $c1++;
                    if ($c1 >= $this->limit['start'] and $c1 <= $this->limit['end']) {
                        $response[$c]['plno'] = $plno;
                        $response[$c]['stat'] = $get;
                        $c++;
                    }
                } else {
                    $rated = false;
                }
            }
            return $response;
        } else {
        }
    }

    /**
     * @param $gender
     * @return string
     * This is to set the gender as function
     * male or female
     */
    private function setGender($gender)
    {
        $where = "postedlooks.gender = '$gender'";
        return $where;
    }

    /**
     * @param $plusBlogger
     * @return string
     * This is to set if the pluss blogger is Yes or No
     */
    private function setPlusBlogger($plusBlogger)
    {
        $where = ' and ';
        $where .= "postedlooks.plus_blogger = '$plusBlogger'";
        return $where;
    }

    /**
     * @param $style
     * @return string
     * This is to set style like style = 'Streetwear'
     */
    private function setStyle($style)
    {
        $where = ' and ';
        $where .= "postedlooks.style = '$style' ";
        return $where;
    }

    /**
     * @param $orderBy
     * @return string
     * Array value which is row => is the row of the table posted looks and order by is the desc or asc
     */
    private function setLatest($orderBy)
    {
        $order = "postedlooks." . $orderBy['row'] . ' ' . $orderBy['orderBy'];
        return $order;
    }

    /**
     * @param $rating
     * @return int
     * Unrated and Rated is together the data is retrieved from 1 table and the Favorited is retrieved from another table.
     */
    private function getRatings($rating)
    {
        // print_r($response);

        if ($rating == 'Unrated' || $rating == 'Rated') {
            $this->db->select('fs_rate_modals', 'table_id', null, "mno = $this->mno and table_name = 'postedlooks'");
            return $this->db->getResult();
        } else if ($rating == 'Favorited') {
            $this->db->select('fs_favorite_modals', 'table_id', null, "mno = $this->mno and table_name = 'postedlooks'");
            return $this->db->getResult();
        } else {
        }
        return 0;
    }


    /**
     * @param $style
     * @param $limitFrom
     * @param $limitTo
     * @return mixed
     */
    public function getLookByStyle($style, $limitFrom, $limitTo)
    {
        $this->db->select('postedlooks', 'table_id', null, "mno = $this->mno and style = '$style'");
        return $this->db->getResult();
    }


    public function latestShared()
    {
        $response = select_v3($this->table, '*', "plno > 0 order by plno desc limit 1");
        return (!empty($response[0]['plno'])) ? $response[0]['plno'] : 0;
    }


    public function latestRate()
    {
        $response = select_v3($this->table, '*', "plno > 0 order by pltvotes desc limit 1");
        return (!empty($response[0]['plno'])) ? $response[0]['plno'] : 0;
    }

    public function getAllUsedStyle() {

        $response = select_v3( 'postedlooks', 'DISTINCT style', ' plno > 0 order by plno desc limit 8' );

        return $response;

        //echo "<pre>";
          //  print_r($response);
        // echo "</pre>";
    }

    public function Top($category)
    {
        $response = select_v3($this->table, '*', "plno > 0  and style = '$category' order by plno desc limit 1");
        return (!empty($response[0]['plno'])) ? $response[0]['plno'] : 0;
    }

    public function sourceCategoryDropDown($plno)
    {
        if ($plno > 0) {
            $src = "fs_folders/images/uploads/posted looks/home/$plno.jpg";
            if (!file_exists($src)) {
                //echo "not exist $plno ";
                $src = "fs_folders/images/uploads/posted looks/home/default.jpg";
            } else {
                //echo "exist $plno ";
            }
        } else {
            //echo "no look for category $plno ";
            $src = "fs_folders/images/uploads/posted looks/home/default.jpg";
        }
        return $src;
    }

    public function overAllRating($mno)
    {
        //count all the pltvotes in article page
        // where mno = $mno
        // return the total sum of the article query
        $this->db->select($this->table, 'sum(pltvotes) as tlikes');
        $data = $this->db->getResult();
        return $data[0]['tlikes'];
    }

    public function position($plno, $style, $mno)
    {
        $position = 0;
//        $response = select_v3($this->table, '*', "mno = $mno and style = '$style' order by plno desc");
        $response = select_v3($this->table, '*', "mno = $mno order by plno desc");
        for ($i = 0; $i < count($response); $i++) {
            if ($response[$i]['plno'] == $plno) {
                $position = $i + 1;
            }
        }
        return $position;
    }

    public function totalUploaded($style, $mno)
    {
//      $response = select_v3($this->table, 'count(*) as total', "mno = $mno and style = '$style'  order by plno desc");
        $response = select_v3($this->table, 'count(*) as total', "mno = $mno order by plno desc");
        // print_r($response);
        return $response[0]['total'];
    }

    public function totalUploaded1($mno)
    {
        $response = select_v3($this->table, 'count(*) as total', "mno = $mno");
        return $response[0]['total'];
    }

    public function mostLike()
    {
        $response = select_v3($this->table, '*', "plno > 0 order by pltvotes desc limit 1");
        return $response[0]['plno'];
    }

    public function totalLikeByCategory($mno, $style)
    {
        $response = select_v3($this->table, 'sum(pltvotes) as total', "mno = $mno and style = '$style'");
        return $response[0]['total'];
    }


    public function  isAllowPost($mno, $resetDate = null, $allowPost = 2)
    {

        $reset = new Reset();
        $resetDate = $reset->getResetDate('look');

        $response = select_v3($this->table, '*', "mno = $mno order by plno desc limit $allowPost");

        //print_r($response);

        $postAfterReset = 0;

        for ($i = 0; $i < count($response); $i++) {

            //echo " " . $response[$i]['pludate'] . " >=  $resetDate) \n";
            if ($response[$i]['pludate'] >= $resetDate) {
                $postAfterReset++;
                //  echo "new post dan \n";
            } else {
                //   echo "old post \n";
            }
        }

        // echo "total post $postAfterReset \n";

        if ($postAfterReset < $allowPost) {
            return TRUE;
        } else {
            return FALSE;
        }
    }


    public function totalPostInADay($mno, $allowPost = 2)
    {
        $reset = new Reset();
        $resetDate = $reset->getResetDate('look');
        // echo "mno = $mno allow post $allowPost <br>";
        $response = select_v3($this->table, '*', "mno = $mno order by plno desc limit $allowPost");
        // print_r($response);
        $postAfterReset = 0;
        for ($i = 0; $i < count($response); $i++) {
            // echo " " . $response[$i]['pludate'] . " >=  $resetDate) \n";
            if ($response[$i]['pludate'] >= $resetDate) {
                $postAfterReset++;
                // echo "new post dan \n";
            } else {
                // echo "old post \n";
            }
        }
        // echo "total post $postAfterReset \n";
        return $postAfterReset;
    }

    /**
     * @param null $plno
     * @return int
     */
    public function totalView($plno = null) {
        return 0;
    }

    public function totalLike($plno = null) {

        $query= mysql_query("SELECT count(table_id) as total_like FROM fs_rate_modals  WHERE table_name  = 'postedlooks' and table_id = $plno");

        $response = execute_query($query);

        return $response[0]['total_like'];

    }



    public function totalDripped($plno = null) {

        $query= mysql_query("SELECT count(table_id) as total_dripped FROM fs_drip_modals  WHERE table_name  = 'postedlooks' and table_id = $plno");

        $response = execute_query($query);

        return $response[0]['total_dripped'];

    }
    public function totalFavorite($plno = null) {

        $query= mysql_query("SELECT count(table_id) as total_favorite FROM fs_favorite_modals WHERE table_name  = 'postedlooks' and table_id = $plno");

        $response = execute_query($query);

        return $response[0]['total_favorite'];

    }
    public function totalShared($plno = null) {

        return 0;

    }
    public function totalFlagged($plno = null) {

        return 0;

    }


    /**
     * This is to totally delete the modal and it includes
     * activity => fs.activity,
     * posted modal => fs_records.postedlooks,
     * modal likes => fs_records.fs_rate_modals,
     * drip => fs_records.fs_drip_modals,
     * favorite => fs_records.fs_favorite_modals,
     * notification => fs_records.fs_notification,
     * flag => fs_records.fs_flag,
     * pltag => fs_records.fs_pltag,
     * fs_search => fs_records.fs_search,
     * fs_comment => fs_records.fs_comment,
     * fs views => fs_records.fs_view,
     * comment likes  => fs_records.posted_looks_comments_like_dislike,
     * comment dislikes => fs_records.posted_looks_comments_like_dislike,
     * comment, => posted_looks_comments,
     * image(thumbnail, details, home) => fs_folders/images/uploads/posted looks/*,
     * @param $id
     */
    public function destroy($id)
    {

        $user = new User($this->mno, $this->db);

        $url = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $escaped_url = htmlspecialchars($url, ENT_QUOTES, 'UTF-8');
        $url = $escaped_url . '/';//$_SERVER['REQUEST_URI'];
        $url = '../../../';

        //Get look owner mno
        $mno = 1;

        if ($this->db->delete('activity', ' _table_id = ' . $id)) {
            echo "activity successfully deleted <br>";
        } else {
            echo "activity failed to delete <br>";
        }

        if ($this->db->delete('postedlooks', ' plno = ' . $id)) {
            echo "postedlooks successfully deleted <br>";
        } else {
            echo "postedlooks failed to delete <br>";
        }

        if ($this->db->delete('fs_rate_modals', " table_name = '$this->table' and table_id = $id")) {
            echo "fs_rate_modals successfully deleted <br>";
        } else {
            echo "fs_rate_modals failed to delete <br>";
        }

        if ($this->db->delete('fs_drip_modals', " table_name = '$this->table' and table_id = $id")) {
            echo "fs_drip_modals successfully deleted <br>";
        } else {
            echo "fs_drip_modals failed to delete <br>";
        }

        if ($this->db->delete('fs_favorite_modals', " table_name = '$this->table' and table_id = $id")) {
            echo "fs_favorite_modals successfully deleted <br>";
        } else {
            echo "fs_favorite_modals failed to delete <br>";
        }

        if ($this->db->delete('fs_notification', " table_name = '$this->table' and table_id = $id")) {
            echo "fs_notification successfully deleted <br>";
        } else {
            echo "fs_notification failed to delete <br>";
        }

        if ($this->db->delete('fs_flag', " table_name = '$this->table' and table_id = $id")) {
            echo "fs_flag successfully deleted <br>";
        } else {
            echo "fs_flag failed to delete <br>";
        }

        if ($this->db->delete('fs_pltag', " plno = $id")) {
            echo "fs_pltag successfully deleted <br>";
        } else {
            echo "fs_pltag failed to delete <br>";
        }

        if ($this->db->delete('fs_search', " table_name = '$this->table' and table_id = $id")) {
            echo "fs_search successfully deleted <br>";
        } else {
            echo "fs_search failed to delete <br>";
        }

        if ($this->db->delete('fs_comment', " table_name = '$this->table' and table_id = $id")) {
            echo "fs_comment successfully deleted <br>";
        } else {
            echo "fs_comment failed to delete <br>";
        }

        if ($this->db->delete('fs_view', " table_name = '$this->table' and table_id = $id")) {
            echo "fs_view successfully deleted <br>";
        } else {
            echo "fs_view failed to delete <br>";
        }

        //Get all comments and use for loop to delete the like and dis-like of the comments.
        $comments = select_v3('posted_looks_comments', '*', ' plno = ' . $id);
        foreach ($comments as $comment) {
            if ($this->db->delete('posted_looks_comments_like_dislike', " plcno = " . $comment['plcno'])) {
                echo "posted_looks_comments_like_dislike successfully deleted plcno = " . $comment['plcno'] . " <br>";
            } else {
                echo "posted_looks_comments_like_dislike failed to delete plcno = " . $comment['plcno'] . " <br>";
            }
        }

        if ($this->db->delete('posted_looks_comments', " plno = $id")) {
            echo "posted_looks_comments successfully deleted <br>";
        } else {
            echo "posted_looks_comments failed to delete <br>";
        }

        if ($this->db->delete('posted_looks_comments', " plno = $id")) {
            echo "posted_looks_comments successfully deleted <br>";
        } else {
            echo "posted_looks_comments failed to delete <br>";
        }


        if (unlink($url . "fs_folders/images/uploads/posted looks/home/$id.jpg")) {
            echo $url . "fs_folders/images/uploads/posted looks/home/$id.jpg  successfully deleted <br>";
        } else {
            echo $url . "fs_folders/images/uploads/posted looks/home/$id.jpg  successfully deleted <br>";
        }

        if (unlink($url . "fs_folders/images/uploads/posted looks/lookdetails/$id.jpg")) {
            echo $url . "fs_folders/images/uploads/posted looks/lookdetails/$id.jpg  successfully deleted <br>";
        } else {
            echo $url . "fs_folders/images/uploads/posted looks/lookdetails/$id.jpg  successfully deleted <br>";
        }

        if (unlink($url . "fs_folders/images/uploads/posted looks/thumbnail/$id.jpg")) {
            echo $url . "fs_folders/images/uploads/posted looks/thumbnail/$id.jpg  successfully deleted <br>";
        } else {
            echo $url . "fs_folders/images/uploads/posted looks/thumbnail/$id.jpg  successfully deleted <br>";
        }

        $user->resetInformation($user->mno);
    }


    /**
     * @src test/design/postalook-tag/postalook-tag.js
     * @src test/design/postalook-tag/postalook-tag.css
     */
    public function print_tags_includes() {
        ?>
            <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
            <script src="//code.jquery.com/jquery-1.10.2.js"></script>
            <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
            <link rel="stylesheet" href="test/design/postalook-tag/postalook-tag.css"/>
            <script src="test/design/postalook-tag/postalook-tag.js"></script>
        <?php
    }

    public function getHtmlColor($colorName) {
        return array_search ($colorName, $this->getAllHtmlColor());
    }

    public function getAllHtmlColor() {
        return $colors = array(
            '#F0F8FF' => 'AliceBlue',
            '#FAEBD7' => 'AntiqueWhite',
            '#00FFFF' => 'Aqua',
            '#7FFFD4' => 'Aquamarine',
            '#F0FFFF' => 'Azure',
            '#F5F5DC' => 'Beige',
            '#FFE4C4' => 'Bisque',
            '#000000' => 'Black',
            '#FFEBCD' => 'BlanchedAlmond',
            '#0000FF' => 'Blue',
            '#8A2BE2' => 'BlueViolet',
            '#A52A2A' => 'Brown',
            '#DEB887' => 'BurlyWood',
            '#5F9EA0' => 'CadetBlue',
            '#7FFF00' => 'Chartreuse',
            '#D2691E' => 'Chocolate',
            '#FF7F50' => 'Coral',
            '#6495ED' => 'CornflowerBlue',
            '#FFF8DC' => 'Cornsilk',
            '#DC143C' => 'Crimson',
            '#00FFFF' => 'Cyan',
            '#00008B' => 'DarkBlue',
            '#008B8B' => 'DarkCyan',
            '#B8860B' => 'DarkGoldenRod',
            '#A9A9A9' => 'DarkGray',
            '#006400' => 'DarkGreen',
            '#BDB76B' => 'DarkKhaki',
            '#8B008B' => 'DarkMagenta',
            '#556B2F' => 'DarkOliveGreen',
            '#FF8C00' => 'DarkOrange',
            '#9932CC' => 'DarkOrchid',
            '#8B0000' => 'DarkRed',
            '#E9967A' => 'DarkSalmon',
            '#8FBC8F' => 'DarkSeaGreen',
            '#483D8B' => 'DarkSlateBlue',
            '#2F4F4F' => 'DarkSlateGray',
            '#00CED1' => 'DarkTurquoise',
            '#9400D3' => 'DarkViolet',
            '#FF1493' => 'DeepPink',
            '#00BFFF' => 'DeepSkyBlue',
            '#696969' => 'DimGray',
            '#1E90FF' => 'DodgerBlue',
            '#B22222' => 'FireBrick',
            '#FFFAF0' => 'FloralWhite',
            '#228B22' => 'ForestGreen',
            '#FF00FF' => 'Fuchsia',
            '#DCDCDC' => 'Gainsboro',
            '#F8F8FF' => 'GhostWhite',
            '#FFD700' => 'Gold',
            '#DAA520' => 'GoldenRod',
            '#808080' => 'Gray',
            '#008000' => 'Green',
            '#ADFF2F' => 'GreenYellow',
            '#F0FFF0' => 'HoneyDew',
            '#FF69B4' => 'HotPink',
            '#CD5C5C' => 'IndianRed',
            '#4B0082' => 'Indigo',
            '#FFFFF0' => 'Ivory',
            '#F0E68C' => 'Khaki',
            '#E6E6FA' => 'Lavender',
            '#FFF0F5' => 'LavenderBlush',
            '#7CFC00' => 'LawnGreen',
            '#FFFACD' => 'LemonChiffon',
            '#ADD8E6' => 'LightBlue',
            '#F08080' => 'LightCoral',
            '#E0FFFF' => 'LightCyan',
            '#FAFAD2' => 'LightGoldenRodY',
            '#D3D3D3' => 'LightGray',
            '#90EE90' => 'LightGreen',
            '#FFB6C1' => 'LightPink',
            '#FFA07A' => 'LightSalmon',
            '#20B2AA' => 'LightSeaGreen',
            '#87CEFA' => 'LightSkyBlue',
            '#778899' => 'LightSlateGray',
            '#B0C4DE' => 'LightSteelBlue',
            '#FFFFE0' => 'LightYellow',
            '#00FF00' => 'Lime',
            '#32CD32' => 'LimeGreen',
            '#FAF0E6' => 'Linen',
            '#FF00FF' => 'Magenta',
            '#800000' => 'Maroon',
            '#66CDAA' => 'MediumAquaMarin',
            '#0000CD' => 'MediumBlue',
            '#BA55D3' => 'MediumOrchid',
            '#9370DB' => 'MediumPurple',
            '#3CB371' => 'MediumSeaGreen',
            '#7B68EE' => 'MediumSlateBlue',
            '#00FA9A' => 'MediumSpringGre',
            '#48D1CC' => 'MediumTurquoise',
            '#C71585' => 'MediumVioletRed',
            '#191970' => 'MidnightBlue',
            '#F5FFFA' => 'MintCream',
            '#FFE4E1' => 'MistyRose',
            '#FFE4B5' => 'Moccasin',
            '#FFDEAD' => 'NavajoWhite',
            '#000080' => 'Navy',
            '#FDF5E6' => 'OldLace',
            '#808000' => 'Olive',
            '#6B8E23' => 'OliveDrab',
            '#FFA500' => 'Orange',
            '#FF4500' => 'OrangeRed',
            '#DA70D6' => 'Orchid',
            '#EEE8AA' => 'PaleGoldenRod',
            '#98FB98' => 'PaleGreen',
            '#AFEEEE' => 'PaleTurquoise',
            '#DB7093' => 'PaleVioletRed',
            '#FFEFD5' => 'PapayaWhip',
            '#FFDAB9' => 'PeachPuff',
            '#CD853F' => 'Peru',
            '#FFC0CB' => 'Pink',
            '#DDA0DD' => 'Plum',
            '#B0E0E6' => 'PowderBlue',
            '#800080' => 'Purple',
            '#663399' => 'RebeccaPurple',
            '#FF0000' => 'Red',
            '#BC8F8F' => 'RosyBrown',
            '#4169E1' => 'RoyalBlue',
            '#8B4513' => 'SaddleBrown',
            '#FA8072' => 'Salmon',
            '#F4A460' => 'SandyBrown',
            '#2E8B57' => 'SeaGreen',
            '#FFF5EE' => 'SeaShell',
            '#A0522D' => 'Sienna',
            '#C0C0C0' => 'Silver',
            '#87CEEB' => 'SkyBlue',
            '#6A5ACD' => 'SlateBlue',
            '#708090' => 'SlateGray',
            '#FFFAFA' => 'Snow',
            '#00FF7F' => 'SpringGreen',
            '#4682B4' => 'SteelBlue',
            '#D2B48C' => 'Tan',
            '#008080' => 'Teal',
            '#D8BFD8' => 'Thistle',
            '#FF6347' => 'Tomato',
            '#40E0D0' => 'Turquoise',
            '#EE82EE' => 'Violet',
            '#F5DEB3' => 'Wheat',
            '#FFFFFF' => 'White',
            '#F5F5F5' => 'WhiteSmoke',
            '#FFFF00' => 'Yellow',
            '#9ACD32' => 'YellowGreen',
        );

    }

    /**
     * @src test/design/postalook-tag/postalook-tag.php
     * @param $i
     * @param $counter
     */
    public function print_tags($i, $counter, $tags=null)
    {

        $ObjectColor = new Color();

 
        $c = $i-1;
        $tagT = count($tags)-1;
        // echo "counter i = $counter  c = $c T TAG  $tagT <br>";

        if($tagT >= $c) {  
            $colors            = $tags[$c]['plt_color']; 
            $plt_color         = explode(',', $tags[$c]['plt_color'])[1] . ',';
            $plt_brand         = $tags[$c]['plt_brand'] . ',';
            $plt_garment       = $tags[$c]['plt_garment'] . ',';
            $plt_material      = $tags[$c]['plt_material'] . ',';
            $plt_pattern       = $tags[$c]['plt_pattern'] . ',';
            $plt_price         = $tags[$c]['plt_price'] . ',';
            $plt_purchased_at  = $tags[$c]['plt_purchased_at'] . '';
            $plt_x             = $tags[$c]['plt_x'];
            $plt_y             = $tags[$c]['plt_y'];
            $plt_date          = $tags[$c]['plt_date'];

            $colorsString      = $colors;
            $colorsArray       = explode(',', $colors);
        }

//         print_r($colorsArray);

        $j = $counter;

        $colors = $this->getAllHtmlColor();

        /*s
        $itemName = array(
            'Jeans',
            'Bootcut Jeans',
            'Cropped Jeans',
            'Flared Jeans',
            'Skinny Jeans',
            'Straight Jeans',
            'Wide-Leg Jeans',
            'Dresses',
            'Casual Dresses',
            'Cocktail Dresses',
            'Formal Dresses',
            'Gowns',
            'Maxi Dresses',
            'Mini Dresses',
            'Tops',
            'Blouses',
            'Long Sleeved Tops',
            'Shirts',
            'Short Sleeve Tops',
            'Sleeveless Tops',
            'T-Shirts',
        );


        $itemName1 = array(
            'Cocktail Dresses',
            'Formal Dresses',
            'Gowns',
            'Maxi Dresses',
            'Mini Dresses',
            'Tops',
            'Blouses',
            'Long Sleeved Tops',
            'Shirts',
            'Short Sleeve Tops',
            'Sleeveless Tops',
            'T-Shirts',
            'Jeans',
            'Bootcut Jeans',
            'Cropped Jeans',
            'Flared Jeans',
            'Skinny Jeans',
            'Straight Jeans',
            'Wide-Leg Jeans',
            'Dresses',
            'Casual Dresses',
        );

        $itemName2 = array(
            'Beachwear',
            'Bikinis',
            'Kaftans',
            'One-Piece Swimsuits',
            'Sarongs',
            'Towels',
            'Sweats',
            'Hoodies',
            'Sweatpants',
            'Sweatshirts',
            'Tracksuits',
            'Skirts',
            'Knee Length Skirts',
            'Maxi Skirts',
            'Mid Length Skirts',
            'Mini Skirts'
        );

        $garmentItems = array(
            'clothing'=> array(
                'pants' => array(
                    'Cargo Pants',
                    'Cropped Pants',
                    'Full Length Pants',
                    'Harem Pants',
                    'Leggings',
                    'Skinny Pants',
                    'Straight-Leg Pants',
                    'Wide-Leg Pants'
                ),
                'jackets' => array(
                    'Casual Jackets',
                    'Denim Jackets',
                    'Formal Jackets',
                    'Fur Jackets',
                    'Leather Jackets',
                    'Parka Jackets',
                    'Waistcoats'
                ),
                'coats' => array(
                    'Capes',
                    'Fur Coats',
                    'Long Coats',
                    'Parka Coats',
                    'Short Coats',
                    'Trench Coats'
                ),
                'jeans' => array(
                    'Bootcut Jeans',
                    'Cropped Jeans',
                    'Flared Jeans',
                    'Skinny Jeans',
                    'Straight Jeans',
                    'Wide-Leg Jeans'
                ),
                'Dresses' => array(
                    'Casual Dresses',
                    'Cocktail Dresses',
                    'Formal Dresses',
                    'Gowns',
                    'Maxi Dresses',
                    'Mini Dresses'
                ),
                'Tops' => array(
                    'Blouses',
                    'Long Sleeved Tops',
                    'Shirts',
                    'Short Sleeve Tops',
                    'Sleeveless Tops',
                    'T-Shirts'
                ),
                'Knitwear' => array(
                    'Cardigans',
                    'Ponchos',
                    'Sleeveless Sweaters',
                    'Sweaters',
                    'Turtlenecks',
                    'Zipped Sweaters'
                ),
                'Shorts' => array(
                    'Bermuda Shorts',
                    'Cargo Shorts',
                    'Denim Shorts',
                    'Formal Shorts',
                    'Knee Length Shorts',
                    'Mini Shorts'
                ),
                'Lingerie' => array(
                    'Bodysuits',
                    'Bras',
                    'Camisoles',
                    'Corsetry',
                    'Panties',
                    'Sets'
                ),
                'Beachwear' => array(
                    'Bikinis',
                    'Kaftans',
                    'One-Piece Swimsuits',
                    'Sarongs',
                    'Towels'
                ),
                'Sweats' => array(
                    'Hoodies',
                    'Sweatpants',
                    'Sweatshirts',
                    'Tracksuits'
                ),
                'Skirts' => array(
                    'Knee Length Skirts',
                    'Maxi Skirts',
                    'Mid Length Skirts',
                    'Mini Skirts'
                ),
                'Nightwear' => array(
                    'Nightgowns',
                    'Pyjamas',
                    'Robes',
                ),
                'Hosiery' => array(
                    'Socks',
                    'Stockings',
                    'Tights'
                ),
                'Suits' => array(
                    'Pant Suits',
                    'Skirt Suits'
                ),
                'Jumpsuits' => array(
                    'Full Length Jumpsuits',
                    'Playsuits'
                )
            ),
            'shoes'=> array(
                'boots' => array(
                    'Ankle Boots',
                    'Flat Boots',
                    'Heel Boots',
                    'Knee Boots',
                    'Mid-Calf Boots',
                    'Over-The-Knee Boots',
                    'Sandal Boots',
                    'Wedge Boots',
                    'Wellington Boots'
                ),
                'heels' => array(
                    'Clogs',
                    'High Heels',
                    'Low Heels',
                    'Mules',
                    'Platform Heels',
                    'Pumps',
                    'Sandal Heels',
                    'Wedge Sandals',
                    'Wedge Shoes'
                ),
                'flat' => array(
                    'Ballerinas',
                    'Espadrilles',
                    'Flat Sandals',
                    'Flip-Flops',
                    'Lace-Ups',
                    'Loafers',
                    'Slippers'
                ),
                'wedges' => array(
                    'Wedge Boots',
                    'Wedge Sandals',
                    'Wedge Shoes'
                ),
                'sneakers' => array(
                    'High-Top Sneakers',
                    'Low-Top Sneakers'
                )
            ),
            'accessories'=> array(
                'Cases' => array(),
                'Sunglasses' => array(),
                'Belts' => array(),
                'Gloves' => array(),
                'Hair' => array(),
                'Scarves' => array(),
                'Wallets' => array(),
                'Watches' => array(),
                'Hats' => array(),
                'Umbrellas' => array()
            ),
            'bags'=> array(
                'Shoulder Bags' => array(),
                'Backpacks' => array(),
                'Clutches' => array(),
                'Luggage' => array(),
                'Briefcases' => array(),
                'Totes' => array()
            ),
            'jewelry'=> array(
                'Brooches' => array(),
                'Bracelets' => array(),
                'Earrings' => array(),
                'Necklaces' => array(),
                'Rings' => array()
            )
        );

        $patternItems = array(
            'Abstract',
            'Argyle',
            'Camouflage',
            'Stripes',
            'Checkered',
            'Plaid',
            'Floral',
            'Tie Dye',
            'Geometric',
            'Graphic',
            'Cheetah',
            'Snake',
            'Houndstooth',
            'Paisley',
            'Damask',
            'Chevron',
            'Zebra',
            'Polka Dots',
            'Fair Isle',
            'Fleck',
            'Mosaic',
            'Pinstripe',
            'Speckle',
            'Spots',
            'Swirl',
            'Tartan',
            'Zigzag',
            'Gingham',
            'Tartan Plaid',
            'Shepherds ',
            'Windowpane Check',
            'Graph Check',
            'Tattersall',
            'Mini Check',
            'Tiger',
            'Lion',
            'Cow',
            'Leopard'
        );

        $materialItems = array(
            'Cotton',
            'Rayon',
            'Chambray',
            'Denim',
            'Knit',
            'Silk',
            'Satin',
            'Linen',
            'Wool',
            'Flannell',
            'Snake',
            'Gator',
            'Polyester',
            'Nylon',
            'Spandex',
            'Leather',
            'Corduroy',
            'Fur',
            'Felt',
            'Suede',
            'Lace',
            'Hemp',
            'Fleece',
            'Batiste',
            'Velvet',
            'Chiffon',
            'Crepe',
            'Organza',
            'Taffeta',
            'Tweed',
            'Voile',
            'Pleather',
            'Faux Fur',
            'Faux Leather'
        );
        sort($materialItems);
        sort($patternItems); 
        */
        ?>




        <div id="table_container_<?php echo $j; ?>" class="item_<?php echo $j; ?> " style="border-radius: 5px; position: absolute; height: 0px; z-index: 120; margin-top: 227px; margin-left: 220px; display:none">


           <div class="look-tag-container">

           <ul class="tag-menu">
               <li id="tag-tab-color-<?php echo $j ?>"
                   onclick="tag_change_content('color',  '<?php echo $j ?>')"
                   class="active"><span>Color  </span></li>
               <li id="tag-tab-brand-<?php echo $j ?>" onclick="tag_change_content('brand',  '<?php echo $j ?>'); tag_search_data('brand', '<?php echo $j; ?>')">
                   <span>Brand </span></li>
               <li id="tag-tab-pattern-<?php echo $j ?>" onclick="tag_change_content('pattern',  '<?php echo $j ?>'); tag_search_data('pattern', '<?php echo $j; ?>')" ><span>Pattern </span>
               </li>
               <li id="tag-tab-material-<?php echo $j ?>" onclick="tag_change_content('material',  '<?php echo $j ?>'); tag_search_data('material', '<?php echo $j; ?>')"><span>Material </span>
               </li>
               <li id="tag-tab-garment-<?php echo $j ?>" onclick="tag_change_content('garment',  '<?php echo $j ?>'); tag_search_data('garment', '<?php echo $j; ?>')"><span>Garment </span>
               </li>
               <li id="tag-tab-price-<?php echo $j ?>" onclick="tag_change_content('price',  '<?php echo $j ?>')" >
                   <span>Price </span></li>
               <li id="tag-tab-url-<?php echo $j ?>" onclick="tag_change_content('url',  '<?php echo $j ?>')"><span>Url </span>
               </li> 
           </ul>

           <div class="tag-reset-div" id="tag-reset-div-color-<?php echo $j; ?>"    onClick="tag_reset('color', '<?php echo $j; ?>') "      style="display:block"  >Reset  Color</div>
           <div class="tag-reset-div" id="tag-reset-div-brand-<?php echo $j; ?>"    onClick="tag_reset('brand', '<?php echo $j; ?>') "    >Reset  Brand</div>
           <div class="tag-reset-div" id="tag-reset-div-pattern-<?php echo $j; ?>"  onClick="tag_reset('pattern', '<?php echo $j; ?>') "   >Reset  Pattern</div>
           <div class="tag-reset-div" id="tag-reset-div-material-<?php echo $j; ?>" onClick="tag_reset('material', '<?php echo $j; ?>') "  >Reset  Material</div>
           <div class="tag-reset-div" id="tag-reset-div-garment-<?php echo $j; ?>"  onClick="tag_reset('garment', '<?php echo $j; ?>') " >Reset  Garment</div>

           <!-- Tag content -->
           <div class="clear"></div>
               <div class="tag-container-result" >  
                    <div class="tag-result-color" id="tag-result-color" style="display:block; height: 207px;">
                      
                       <div class="tag-row-container" id="tag-row-container-color-<?php echo $j ?>" style="display:block">

                           <div class="tag-search" style="display:none">
                               <input type="text" placeholder="search" class="search-field"/>
                           </div>

                           <div class="clear" style="height:0px;"></div>
                           <div class="tag-content">
                               <ul class="tag-content-ul">
                                   <li>
                                       <div class="tag-color-palette">
                                           <table id="tag-color-table-<?php echo $j ?>">
                                               <?php
                                               $c = 1;
                                               foreach ($colors as $colorCode => $colorName) {
                                                   echo "<td style=\"background-color:$colorCode\" color_name ='$colorName' color_html = '$colorCode' title='$colorName' onclick=\"tag_select_color('color', '$colorName', '$colorCode',  '$j')\" > </td>";
                                                   if ($c % 17 == 0) {
                                                       echo "<tr>";
                                                   }
                                                   $c++;
                                               }
                                               ?>
                                           </table>
                                       </div>
                                   </li>
                                   <li>   
                                       <div class="tag-color-image" id="tag-color-image">
                                           <table id="tag-color-image-table">
                                               <?php $c=0; ?>
                                               <?php for ($i = 0; $i < 5; $i++) { ?>
                                                   <?php $c++; ?>
                                                   <?php $coloHtmlCode = $ObjectColor->getHtmlCode($colorsArray[$c]) ?>
                                                   <?php $colorHtmlName =  $colorsArray[$c]; ?>
                                                   <tr>
                                                       <td style="background-color:<?php echo $coloHtmlCode; ?>" class='tag-selected-color'  id='tag-selected-color-td-<?php echo $j ?>-<?php echo $i ?>' onclick="tag_select_color_enable_edit_mode('<?php echo $j ?>', '<?php echo $i ?>')">
                                                            <?php echo $colorHtmlName; ?>
                                                       </td>
                                                   </tr>
                                               <?php } ?>
                                           </table>
                                       </div>
                                   </li>
                               </ul>
                               <div class="clear"></div>
                           </div>
                           <div class="clear"></div>
                       </div>
                       
                       <div class="tag-row-container" id="tag-row-container-brand-<?php echo $j ?>" style="display:none">
                           <div class="tag-search">
                               <input type="text" placeholder="search" class="search-field" id="tag-search-keyword-brand-<?php echo $j ?>"
                                      onkeyup="tag_search_data('brand', '<?php echo $j ?>')" value="<?php echo str_replace(',','', $plt_brand); ?>"/>
                           </div>
                           <div class="clear"></div>
                           <div class="tag-content">
                               <ul class="tag-content-ul">
                                   <li>
                                       <div class="tag-container-left" id="tag-result-search-brand-<?php echo $j; ?>"   >
                                           <ul>

                                           </ul>
                                       </div>
                                   </li>
                                   <li>
                                       <div class="tag-container-right" id="tag-color-image">
                                           <img class="tag-color-image-preview" id="tag-color-image-brand-<?php echo $j; ?>"
                                                src="<?php echo $_SESSION['tagPath']; ?>/default/default.jpg"/>
                                       </div>
                                   </li>
                               </ul>
                               <div class="clear"></div>
                           </div>
                           <div class="clear"></div>
                       </div>
                       
                       <div class="tag-row-container" id="tag-row-container-pattern-<?php echo $j ?>" style="display:none">
                           <div class="tag-search">
                               <input type="text" placeholder="search" class="search-field"
                                      id="tag-search-keyword-pattern-<?php echo $j ?>"
                                      onkeyup="tag_search_data('pattern', '<?php echo $j ?>')"
                                      value="<?php echo str_replace(',','', $plt_pattern); ?>"
                                   />
                           </div>
                           <div class="clear"></div>
                           <div class="tag-content">
                               <ul class="tag-content-ul">
                                   <li>
                                     
                                       <div class="tag-container-left" id="tag-result-search-pattern-<?php echo $j; ?>">
                                           <ul>  
                                               <?php if(false): ?>
                                                   <?php foreach ($patternItems as $key => $item): ?>
                                                       <li><span
                                                               onclick="tag_select_item('pattern', '<?php echo $item; ?>', '<?php echo rand(767, 780); ?>', '<?php echo $j; ?>')"> <?php echo $item; ?></span>
                                                       </li>
                                                    <?php endforeach; ?> 
                                                <?php endif; ?>
                                           </ul>
                                       </div>

                                     
                                   </li>
                                   <li>
                                       <div class="tag-container-right" id="tag-color-image">
                                           <img class="tag-color-image-preview" id="tag-color-image-pattern-<?php echo $j; ?>"
                                                src="<?php echo $_SESSION['tagPath']; ?>/default/default.jpg"/>
                                       </div>
                                   </li>
                               </ul>

                               <div class="clear"></div>
                           </div>
                           <div class="clear"></div>
                       </div>
                       
                       <div class="tag-row-container" id="tag-row-container-material-<?php echo $j ?>" style="display:none">
                           <div class="tag-search">
                               <input type="text" placeholder="search" class="search-field"
                                      id="tag-search-keyword-material-<?php echo $j ?>"
                                      onkeyup="tag_search_data('material', '<?php echo $j ?>')"
                                      value="<?php echo str_replace(',','', $plt_material); ?>"
                                   />
                           </div>
                           <div class="clear"></div>
                           <div class="tag-content">
                               <ul class="tag-content-ul">
                                   <li> 
                                       <div class="tag-container-left" id="tag-result-search-material-<?php echo $j; ?>">
                                           <ul>
                                                <?php if(false): ?>
                                                   <?php foreach ($materialItems as $key => $item): ?>
                                                       <li><span
                                                               onclick="tag_select_item('material', '<?php echo $item; ?>', '<?php echo rand(767, 780); ?>', '<?php echo $j; ?>')">  <?php echo $item; ?>  </span>
                                                       </li>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                           </ul>
                                       </div> 
                                       
                                   </li>
                                   <li>
                                       <div class="tag-container-right" id="tag-color-image">
                                           <img class="tag-color-image-preview" id="tag-color-image-material-<?php echo $j; ?>"
                                                src="<?php echo $_SESSION['tagPath']; ?>/default/default.jpg"/>

                                       </div>
                                   </li>
                               </ul>

                               <div class="clear"></div>
                           </div>
                           <div class="clear"></div>
                       </div>
                      
                       <div class="tag-row-container" id="tag-row-container-garment-<?php echo $j ?>" style="display:none">
                           <div class="tag-search">
                               <input type="text" placeholder="search" class="search-field"
                                      id="tag-search-keyword-garment-<?php echo $j ?>"
                                      onkeyup="tag_search_data('garment', '<?php echo $j ?>')"
                                      value="<?php echo str_replace(',','', $plt_garment); ?>"
                                   />
                           </div>
                           <div class="clear"></div>
                           <div class="tag-content">
                               <ul class="tag-content-ul">
                                   <li>


                                   
                                       <div class="tag-container-left" id="tag-result-search-garment-<?php echo $j; ?>">
                                            <?php if(false): ?>
                                               <!-- Main garment category  -->
                                               <table id="tag-result-container-category-garment-<?php echo $j; ?>" class="tag-result-container-category-garment" style="display:block">
                                                   <?php foreach($garmentItems as $category => $value): ?>
                                                   <tr>
                                                       <td>
                                                           <span id="tag-result-menu-category-garment-<?php echo $category; ?>-<?php echo $j; ?>" onclick="tag_show_category_garment_data('<?php echo $category; ?>', '<?php echo $j ?>', '<?php echo rand(767, 780);; ?>')"> <?php echo $category; ?> </span>
                                                       </td>
                                                       <?php endforeach; ?>
                                               </table>

                                               <?php
                                               //main category
                                               foreach($garmentItems as $category => $value): ?>
                                                   <!-- sub category -->
                                                   <div class="tag-result-container-garment" id="tag-result-container-garment-<?php echo $category; ?>-<?php echo $j; ?>" style="display:none">
                                                       <table class="tag-result-container-garment-sub-category-table">
                                                           <tr>
                                                               <td>
                                                                   <div class="tag-sub-category-close" title="open categories"
                                                                        onclick=" tag_hide_show('#tag-result-container-category-garment-<?php echo $j; ?>', '#tag-result-container-garment-<?php echo $category; ?>-<?php echo $j; ?>')">
                                                                       x
                                                                   </div>
                                                                   <div><?php echo $category; ?></div>
                                                               </td>
                                                       </table>
                                                       <ul>
                                                           <?php

                                                           //sub category
                                                           foreach($value as $subCategory => $value1): ?>
                                                               <li>
                                                                <span
                                                                    onclick="tag_open_garmennt_sub_category('<?php echo rand(767, 780) ?>', '<?php echo $j ?>', '#tag-result-garment-sub-categories-content-<?php echo $category; ?>-<?php echo $subCategory; ?>-<?php echo $j ?>', '#tag-result-container-garment-<?php echo $category; ?>-<?php echo $j ?>')"> <?php echo $subCategory; ?> </span>
                                                               </li>
                                                           <?php endforeach; ?>

                                                       </ul>
                                                   </div>

                                                   <?php   foreach($value as $subCategory => $value1): ?>
                                                       <!-- sub category content -->
                                                       <div id="tag-result-garment-sub-categories-content-<?php echo  $category;  ?>-<?php echo  $subCategory;  ?>-<?php echo $j ?>" style="display:none">
                                                           <table class="tag-result-container-garment-sub-category-table">
                                                               <tr>
                                                                   <td>
                                                                       <div class="tag-sub-category-close" title="open sub categories"
                                                                            onclick="tag_hide_show('#tag-result-container-garment-<?php echo  $category;  ?>-<?php echo $j; ?>', '#tag-result-garment-sub-categories-content-<?php echo  $category;  ?>-<?php echo  $subCategory;  ?>-<?php echo $j ?>')">
                                                                           x
                                                                       </div>
                                                                       <div id=""><?php echo  $subCategory;  ?></div>
                                                                   </td>
                                                           </table>
                                                           <ul>
                                                               <?php  foreach($value1 as $key2 => $subCategoryContent): ?>
                                                                   <li>
                                                                       <span onclick="tag_select_item('garment', '<?php echo $subCategoryContent; ?>', '<?php echo rand(767, 780); ?>', '<?php echo $j; ?>')"> <?php echo $subCategoryContent; ?>  </span>
                                                                   </li>
                                                               <?php  endforeach; ?>
                                                           </ul>
                                                       </div>
                                                   <?php endforeach; ?>

                                               <?php
                                               endforeach;
                                               ?>
                                           <?php endif; ?>

                                       </div>
                                       <div class="clear"></div>
                                   
                                   </li>
                                   <li>
                                       <div class="tag-container-right" id="tag-color-image">
                                           <img class="tag-color-image-preview" id="tag-color-image-garment-<?php echo $j; ?>"
                                                src="<?php echo $_SESSION['tagPath']; ?>/default/default.jpg"/>

                                       </div>
                                   </li>
                               </ul>

                               <div class="clear"></div>
                           </div>
                           <div class="clear"></div>
                       </div>
                      
                       <div class="tag-row-container" id="tag-row-container-price-<?php echo $j ?>" style="display:none">
                           <input type="text" id="tag-field-price-<?php echo $j ?>" placeholder="Price" class="tag-field-input"
                                  onkeyup="tag_select_item('price', '', '<?php echo rand(767, 780); ?>', '<?php echo $j; ?>')"
                                  value="<?php echo str_replace(',','', $plt_price); ?>"
                               >
                       </div>

                       <div class="tag-row-container" id="tag-row-container-url-<?php echo $j ?>" style="display:none">
                           <input type="text" id="tag-field-url-<?php echo $j ?>" placeholder="Url" class="tag-field-input"
                                  onkeyup="tag_select_item('url', '', '<?php echo rand(767, 780); ?>', '<?php echo $j; ?>')"
                                  value="<?php echo str_replace(',','', $plt_purchased_at); ?>"
                               >
                       </div>
                   </div>
               </div>

           <!-- Tag footer view-->
           <div class="tag-footer-description">
               <div class="tag-view-data">
                   <ul>
                       <li><p> Tag Details: </p></li>
                       <li>
                           <p>
                               <span id="tag-list-data-color-<?php echo $j ?>"><?php echo $plt_color; ?></span>
                               <span id="tag-list-data-brand-<?php echo $j ?>"><?php echo $plt_brand; ?></span>
                               <span id="tag-list-data-pattern-<?php echo $j ?>"><?php echo $plt_pattern; ?></span>
                               <span id="tag-list-data-material-<?php echo $j ?>"><?php echo $plt_material; ?></span>
                               <span id="tag-list-data-garment-<?php echo $j ?>"><?php echo $plt_garment; ?></span>
                               <span id="tag-list-data-price-<?php echo $j ?>"><?php echo $plt_price; ?></span>
                               <span id="tag-list-data-url-<?php echo $j ?>"><?php echo $plt_purchased_at; ?></span>
                           </p>
                       </li>
                   </ul>
               </div> 
               <div class="clear"></div>
           <!--  $colors            = $tags[$c]['plt_color'];
            $plt_color         = explode(',', $tags[$c]['plt_color'])[1] . ',';
            $plt_brand         = $tags[$c]['plt_brand'] . ',';
            $plt_garment       = $tags[$c]['plt_garment'] . ',';
            $plt_material      = $tags[$c]['plt_material'] . ',';
            $plt_pattern       = $tags[$c]['plt_pattern'] . ',';
            $plt_price         = $tags[$c]['plt_price'] . ',';
            $plt_purchased_at  = $tags[$c]['plt_purchased_at'] . '';
            $plt_x             = $tags[$c]['plt_x'];
            $plt_y             = $tags[$c]['plt_y'];
            $plt_date          = $tags[$c]['plt_date'];  -->

               <table class="tag-database-data" cellpadding="0" cellspacing="0" style="display:none">
                   <tr>
                       <td><input type="text" value="<?php echo $colorsString; ?>" placeholder="color"
                                  id="tag-color-database-data-color-<?php echo $j ?>"/></td>
                   <tr>
                       <td><input type="text" value="<?php echo str_replace(',', '', $plt_brand); ?>" placeholder="brand"
                                  id="tag-color-database-data-brand-<?php echo $j ?>"/></td>
                   <tr>
                       <td><input type="text" value="<?php echo str_replace(',', '', $plt_pattern); ?>" placeholder="pattern"
                                  id="tag-color-database-data-pattern-<?php echo $j ?>"/></td>
                   <tr>
                       <td><input type="text" value="<?php echo str_replace(',', '', $plt_material); ?>" placeholder="material"
                                  id="tag-color-database-data-material-<?php echo $j ?>"/></td>
                   <tr>
                       <td><input type="text" value="<?php echo str_replace(',', '', $plt_garment); ?>" placeholder="garment"
                                  id="tag-color-database-data-garment-<?php echo $j ?>"/></td>
                   <tr>
                       <td><input type="text" value="<?php echo str_replace(',', '', $plt_price); ?>" placeholder="price"
                                  id="tag-color-database-data-price-<?php echo $j ?>"/></td>
                   <tr>
                       <td><input type="text" value="<?php echo str_replace(',', '', $plt_purchased_at); ?>" placeholder="url" id="tag-color-database-data-url-<?php echo $j ?>"/>
                       </td>
                   <tr>
                       <td><input type="text" value="" placeholder="url" id="pos_x_y<?php echo $j ?>"/>
                       </td>
               </table>
           </div>
           </div>
        </div>
    <?php
    }  

    public function designPostAlookStyle($style=null) {  ?>

        <input type="text" value="<?php echo $style; ?>" placeholder="Which style is this look?"  id="tag-color-database-data-style" onclick="tag_hide_show('#table_container_', '#table_container_1a, #table_container_2a', '#tag-search-keyword-style-1');tag_search_data('style', '1')" />
    

        <div>  
        <?php for ($j = 1; $j < 2; $j++) { ?>


            <div id="table_container_" class="item_ look-tag-container tag-container-single">
                      
                <ul class="tag-menu" style="display: none">
                    <li class="active" >
                    <span  >STYLE  </span>
                  </li> 
                </ul>
             
                <!-- Tag content -->
                <div class="clear"></div>
                <div class="tag-container-result">
                <div class="tag-result-color" id="tag-result-color" style="display:block">
                 
                    <div class="tag-row-container" id="tag-row-container-style-<?php echo $j ?>" style="display:block; height:196px;">
                        <div class="tag-search">
                            <input type="text" placeholder="search" class="search-field" id="tag-search-keyword-style-<?php echo $j ?>"
                                   onkeyup="tag_search_data('style', '<?php echo $j ?>')"/>
                        </div>
                        <div class="clear"></div>
                        <div class="tag-content">
                            <ul class="tag-content-ul">
                                <li>

                                    <div class="tag-container-left" id="tag-result-search-style-<?php echo $j; ?>">
                                       

                                        <!-- content here -->
                                    </div>
                                </li>
                                <li>
                                    <div class="tag-container-right" id="tag-color-image">
                                        <img class="tag-color-image-preview" id="tag-color-image-style-<?php echo $j; ?>"
                                             src="<?php echo $_SESSION['tagPath']; ?>/default/default.jpg"/>

                                    </div>
                                </li>
                            </ul>

                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                    </div>

                      <!-- <div class="clear"></div> -->
             <!-- 
                    <table class="tag-database-data" cellpadding="0" cellspacing="0" style="display:block">
                        <tr>
                            <td><input type="text" value="" placeholder="style"  id="tag-color-database-data-style"/></td> 
                    </table>  -->
                </div>
                </div>
                </div> 
            </div>  
        <?php }  
    }
    public function designPostAlookOccasion($occasion=null) { ?>

        <input type="text" value="<?php echo $occasion; ?>" placeholder="Where can you wear this?"  id="tag-color-database-data-occasion" value='<?php  echo $occasion; ?>' onclick="tag_hide_show('#table_container_1a', '#table_container_, #table_container_2a', '#tag-search-keyword-occasion-1'); tag_search_data('occasion', '1')" /></td>
        <?php for ($j = 1; $j < 2; $j++) { ?> 
            <div id="table_container_1a" class="item_ look-tag-container tag-container-single-occasion postalook-tag-occasion">
                <!-- Tag menus -->
                <ul class="tag-menu">
                    <li class="active" style="display: none"  >
                        <span  >OCCASION  </span>
                      </li> 
                </ul>
                 
                    <!-- Tag content -->
                    <div class="clear"></div>
                    <div class="tag-container-result">
                    <div class="tag-result-color" id="tag-result-color" style="display:block;height: 204px;">
                     
                        <div class="tag-row-container" id="tag-row-container-occasion-<?php echo $j ?>" style="display:block">
                            <div class="tag-search">
                                <input type="text" placeholder="search" class="search-field" id="tag-search-keyword-occasion-<?php echo $j ?>"
                                       onkeyup="tag_search_data('occasion', '<?php echo $j ?>')"/>
                            </div>
                            <div class="clear"></div>
                            <div class="tag-content">
                                <ul class="tag-content-ul">
                                    <li>

                                        <div class="tag-container-left" id="tag-result-search-occasion-<?php echo $j; ?>">
                                            <ul>
                                                <?php for ($k = 0; $k < 35; $k++) { ?>
                                                    <li><span
                                                            onclick="tag_select_item('occasion', '<?php echo "Brand name $k" ?>', '<?php echo rand(767, 780); ?>', '<?php echo $j; ?>')">   <?php echo (!empty($itemName[$k])) ? $itemName[$k] : ""; ?> </span>
                                                    </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tag-container-right" id="tag-color-image">
                                            <img class="tag-color-image-preview" id="tag-color-image-occasion-<?php echo $j; ?>"
                                                 src="<?php echo $_SESSION['tagPath']; ?>/default/default.jpg"/>

                                        </div>
                                    </li>
                                </ul>

                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                        </div> 
                    </div>
                    </div>
                    </div> 
                </div>  
            <?php } ?> <?php
        } 
    public function designPostAlookSeason($season=null) { ?>
        <?php $path = $_SESSION['tagPath']; ?>
        <input type="text" value="<?php echo $season; ?>" placeholder="When can you wear this?"  id="tag-color-database-data-season" value='<?php  echo $season; ?>' onclick="tag_hide_show('#table_container_2a', '#table_container_, #table_container_1a', '#tag-row-container-season-0'); tag_search_data('season', '1')" /></td>
        <!-- <div id="table_container_1a" class="item_ look-tag-container tag-container-single-occasion"> --> 

        <!-- Start your code here -->
        <?php for ($j = 1; $j < 2; $j++) { ?> 
            <div id="table_container_2a" class="item_ look-tag-container tag-container-single-season postalook-tag-tag" >

                <!-- Tag menus -->
                <ul class="tag-menu">
                    <li class="active" style="display:none" >
                    <span  >SEASON  </span>
                  </li> 
                </ul>
             
                <!-- Tag content -->
                <div class="clear"></div>
                <div class="tag-container-result">
                <div class="tag-result-color" id="tag-result-color" style="display:block">
                 
                    <div class="tag-row-container" id="tag-row-container-season-<?php echo $j ?>" style="display:block; height:auto">
                      
                        <div class="clear"></div>
                        <div class="tag-content">
                            <ul class="tag-content-ul tag-content-season"> 

                                    <?php

                                     $response = select_v3('fs_tag_season', '*', 'id > 0');
                                    // print_r($response );
                                    ?>

                                <?php for($i=0; $i < count($response); $i++) {  ?>
                                    <?php $id = $response[$i]['id']; ?>
                                <li style="width:auto" >  
                                    <img class="tag-color-image-preview" id="tag-color-image-season-<?php echo $j; ?>"
                                         src="<?php echo $path; ?>/season/<?php echo $id  ?>.jpg"
                                           onclick="tag_select_item('season', '<?php echo $response[$i]['name']; ?>', '<?php echo $response[$i]['id']; ?>', '<?php echo $j; ?>')"
                                         /> 
                                </li>

                                <?php } ?>
                               <!--  <li  style="width:auto"  > 
                                    <img class="tag-color-image-preview" id="tag-color-image-season-<?php echo $j; ?>"
                                         src="http://localhost/fs/new_fs/alphatest/fs_folders/images/uploads/brands/692_brand.jpg"
                                         onclick="tag_select_item('season', 'winter', '<?php echo rand(767, 780); ?>', '<?php echo $j; ?>')"
                                         /> 
                                </li>
                                <li> 
                                    <img class="tag-color-image-preview" id="tag-color-image-season-<?php echo $j; ?>"
                                         src="http://localhost/fs/new_fs/alphatest/fs_folders/images/uploads/brands/692_brand.jpg"
                                         onclick="tag_select_item('season', 'spring', '<?php echo rand(767, 780); ?>', '<?php echo $j; ?>')"
                                         /> 
                                </li>
                                <li> 
                                    <img class="tag-color-image-preview" id="tag-color-image-season-<?php echo $j; ?>"
                                         src="http://localhost/fs/new_fs/alphatest/fs_folders/images/uploads/brands/692_brand.jpg"
                                         onclick="tag_select_item('season', 'snow', '<?php echo rand(767, 780); ?>', '<?php echo $j; ?>')"
                                         /> 
                                </li> -->
                            </ul>

                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                    </div> 
                </div>
                </div>
                </div> 
            </div>  
        <?php }           
    }
}
?>


