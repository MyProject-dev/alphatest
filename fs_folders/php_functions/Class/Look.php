<?php

use App\Reset;
use App\User;

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


    /**
     * @src test/design/postalook-tag/postalook-tag.php
     *
     * @param $i
     * @param $counter
     */
    public function print_tags($i, $counter)
    {



        $j = $counter;
        $colors = array(
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
 ?>




<div id="table_container_<?php echo $j; ?>" class="item_<?php echo $j; ?> " style="border-radius: 5px; position: absolute; height: 0px; z-index: 120; margin-top: 227px; margin-left: 220px; display:none">


    <div class="look-tag-container">
            <!-- Tag menus -->
            <ul class="tag-menu">
                <li id="tag-tab-color-<?php echo $j ?>" class="active"
                    onclick="tag_change_content('color',  '<?php echo $j ?>')"><span>Color  </span></li>
                <li id="tag-tab-brand-<?php echo $j ?>" onclick="tag_change_content('brand',  '<?php echo $j ?>')">
                    <span>Brand </span></li>
                <li id="tag-tab-pattern-<?php echo $j ?>" onclick="tag_change_content('pattern',  '<?php echo $j ?>')"><span>Pattern </span>
                </li>
                <li id="tag-tab-material-<?php echo $j ?>" onclick="tag_change_content('material',  '<?php echo $j ?>')"><span>Material </span>
                </li>
                <li id="tag-tab-garment-<?php echo $j ?>" onclick="tag_change_content('garment',  '<?php echo $j ?>')"><span>Garment </span>
                </li>
                <li id="tag-tab-price-<?php echo $j ?>" onclick="tag_change_content('price',  '<?php echo $j ?>')">
                    <span>Price </span></li>
                <li id="tag-tab-url-<?php echo $j ?>" onclick="tag_change_content('url',  '<?php echo $j ?>')"><span>Url </span>
                </li>
            </ul>

            <!-- Tag content -->
            <div class="clear"></div>
            <div class="tag-container-result">
            <div class="tag-result-color" id="tag-result-color" style="display:block">
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
                                        echo "<td style=\"background-color:$colorCode\" color_name ='$colorName' color_html = '$colorCode' title='$colorName' onclick=\"tag_select_color('color', '$colorName', '$colorCode',  '$j')\"  > </td>";
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
                                    <?php for ($i = 0; $i < 5; $i++) { ?>
                                        <tr>
                                            <td class='tag-selected-color'
                                                id='tag-selected-color-td-<?php echo $j ?>-<?php echo $i ?>'
                                                onclick="tag_select_color_enable_edit_mode('<?php echo $j ?>', '<?php echo $i ?>')"></td>
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
                           onkeyup="tag_search_data('brand', '<?php echo $j ?>')"/>
                </div>
                <div class="clear"></div>
                <div class="tag-content">
                    <ul class="tag-content-ul">
                        <li>

                            <div class="tag-container-left" id="tag-result-search-brand-<?php echo $j; ?>">
                                <ul>
                                    <?php for ($k = 0; $k < 35; $k++) { ?>
                                        <li><span
                                                onclick="tag_select_item('brand', '<?php echo "Brand name $k" ?>', '<?php echo rand(767, 780); ?>', '<?php echo $j; ?>')">   <?php echo (!empty($itemName[$k])) ? $itemName[$k] : ""; ?> </span>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="tag-container-right" id="tag-color-image">
                                <img class="tag-color-image-preview" id="tag-color-image-brand-<?php echo $j; ?>"
                                     src="http://localhost/fs/new_fs/alphatest/fs_folders/images/uploads/brands/692_brand.jpg"/>

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
                           onkeyup="tag_search_data('pattern', '<?php echo $j ?>')"/>
                </div>
                <div class="clear"></div>
                <div class="tag-content">
                    <ul class="tag-content-ul">
                        <li>
                            <div class="tag-container-left" id="tag-result-search-pattern-<?php echo $j; ?>">
                                <ul>
                                    <?php for ($k = 0; $k < 35; $k++) { ?>
                                        <li><span
                                                onclick="tag_select_item('pattern', '<?php echo "pattern name $k" ?>', '<?php echo rand(767, 780); ?>', '<?php echo $j; ?>')">   <?php echo (!empty($itemName1[$k])) ? $itemName1[$k] : ""; ?> </span>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="tag-container-right" id="tag-color-image">
                                <img class="tag-color-image-preview" id="tag-color-image-pattern-<?php echo $j; ?>"
                                     src="http://localhost/fs/new_fs/alphatest/fs_folders/images/uploads/brands/692_brand.jpg"/>
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
                           onkeyup="tag_search_data('material', '<?php echo $j ?>')"/>
                </div>
                <div class="clear"></div>
                <div class="tag-content">
                    <ul class="tag-content-ul">
                        <li>
                            <div class="tag-container-left" id="tag-result-search-material-<?php echo $j; ?>">
                                <ul>
                                    <?php for ($k = 0; $k < 35; $k++) { ?>
                                        <li><span
                                                onclick="tag_select_item('material', '<?php echo "material name $k" ?>', '<?php echo rand(767, 780); ?>', '<?php echo $j; ?>')">  <?php echo (!empty($itemName2[$k])) ? $itemName2[$k] : ""; ?>  </span>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="tag-container-right" id="tag-color-image">
                                <img class="tag-color-image-preview" id="tag-color-image-material-<?php echo $j; ?>"
                                     src="http://localhost/fs/new_fs/alphatest/fs_folders/images/uploads/brands/692_brand.jpg"/>

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
                       onkeyup="tag_search_data('garment', '<?php echo $j ?>')"/>
            </div>
            <div class="clear"></div>
            <div class="tag-content">
            <ul class="tag-content-ul">
            <li>
            <div class="tag-container-left" id="tag-result-search-garment-<?php echo $j; ?>">
            <!-- Category -->
            <table id="tag-result-container-category-garment-<?php echo $j; ?>"
                   class="tag-result-container-category-garment">
                <tr>
                    <td><span class="active-link"
                              id="tag-result-menu-category-garment-clothing-<?php echo $j; ?>"
                              onclick="tag_show_category_garment_data('clothing', '<?php echo $j ?>')"> Clothing </span>
                    </td>
                    <td><span id="tag-result-menu-category-garment-shoes-<?php echo $j; ?>"
                              onclick="tag_show_category_garment_data('shoes', '<?php echo $j ?>')"> Shoes </span>
                    </td>
                    <td><span id="tag-result-menu-category-garment-accessories-<?php echo $j; ?>"
                              onclick="tag_show_category_garment_data('accessories', '<?php echo $j ?>')"> Accessories </span>
                    </td>
                    <td><span id="tag-result-menu-category-garment-bags-<?php echo $j; ?>"
                              onclick="tag_show_category_garment_data('bags', '<?php echo $j ?>')"> Bags </span>
                    </td>
                    <td><span id="tag-result-menu-category-garment-jewelry-<?php echo $j; ?>"
                              onclick="tag_show_category_garment_data('jewelry', '<?php echo $j ?>')"> Jewelry </span>
                    </td>
                </tr>
            </table>

            <!-- Data each category -->
            <div class="tag-result-container-garment"
                 id="tag-result-container-garment-clothing-<?php echo $j; ?>" style="display:block">

                <div class="clear"> Pants</div>
                <ul>
                    <?php for ($k = 0; $k < 2; $k++) { ?>
                        <li><span
                                onclick="tag_select_item('garment', '<?php echo "garment name $k" ?>', '<?php echo rand(767, 780); ?>', '<?php echo $j; ?>')"> garment name  <?php echo $k; ?> </span>
                        </li>
                    <?php } ?>
                </ul>

                <div class="clear"> Jackets</div>

                <ul>
                    <?php for ($k = 0; $k < 2; $k++) { ?>
                        <li><span
                                onclick="tag_select_item('garment', '<?php echo "garment name $k" ?>', '<?php echo rand(767, 780); ?>', '<?php echo $j; ?>')"> garment name  <?php echo $k; ?> </span>
                        </li>
                    <?php } ?>
                </ul>

                <div class="clear"> Coats</div>

                <ul>
                    <?php for ($k = 0; $k < 2; $k++) { ?>
                        <li><span
                                onclick="tag_select_item('garment', '<?php echo "garment name $k" ?>', '<?php echo rand(767, 780); ?>', '<?php echo $j; ?>')"> garment name  <?php echo $k; ?> </span>
                        </li>
                    <?php } ?>
                </ul>

                <div class="clear"> Jeans</div>
                <ul>
                    <?php for ($k = 0; $k < 2; $k++) { ?>
                        <li><span
                                onclick="tag_select_item('garment', '<?php echo "garment name $k" ?>', '<?php echo rand(767, 780); ?>', '<?php echo $j; ?>')"> garment name  <?php echo $k; ?> </span>
                        </li>
                    <?php } ?>
                </ul>

                <div class="clear"> Dresses</div>
                <ul>
                    <?php for ($k = 0; $k < 2; $k++) { ?>
                        <li><span
                                onclick="tag_select_item('garment', '<?php echo "garment name $k" ?>', '<?php echo rand(767, 780); ?>', '<?php echo $j; ?>')"> garment name  <?php echo $k; ?> </span>
                        </li>
                    <?php } ?>
                </ul>

                <div class="clear"> Tops</div>
                <ul>
                    <?php for ($k = 0; $k < 2; $k++) { ?>
                        <li><span
                                onclick="tag_select_item('garment', '<?php echo "garment name $k" ?>', '<?php echo rand(767, 780); ?>', '<?php echo $j; ?>')"> garment name  <?php echo $k; ?> </span>
                        </li>
                    <?php } ?>
                </ul>

                <div class="clear"> Knitwear</div>
                <ul>
                    <?php for ($k = 0; $k < 2; $k++) { ?>
                        <li><span
                                onclick="tag_select_item('garment', '<?php echo "garment name $k" ?>', '<?php echo rand(767, 780); ?>', '<?php echo $j; ?>')"> garment name  <?php echo $k; ?> </span>
                        </li>
                    <?php } ?>
                </ul>

                <div class="clear"> Shorts</div>
                <ul>
                    <?php for ($k = 0; $k < 2; $k++) { ?>
                        <li><span
                                onclick="tag_select_item('garment', '<?php echo "garment name $k" ?>', '<?php echo rand(767, 780); ?>', '<?php echo $j; ?>')"> garment name  <?php echo $k; ?> </span>
                        </li>
                    <?php } ?>
                </ul>

                <div class="clear"> Lingerie</div>
                <ul>
                    <?php for ($k = 0; $k < 2; $k++) { ?>
                        <li><span
                                onclick="tag_select_item('garment', '<?php echo "garment name $k" ?>', '<?php echo rand(767, 780); ?>', '<?php echo $j; ?>')"> garment name  <?php echo $k; ?> </span>
                        </li>
                    <?php } ?>
                </ul>

                <div class="clear"> Beachwear</div>
                <ul>
                    <?php for ($k = 0; $k < 2; $k++) { ?>
                        <li><span
                                onclick="tag_select_item('garment', '<?php echo "garment name $k" ?>', '<?php echo rand(767, 780); ?>', '<?php echo $j; ?>')"> garment name  <?php echo $k; ?> </span>
                        </li>
                    <?php } ?>
                </ul>

                <div class="clear"> Sweats</div>
                <ul>
                    <?php for ($k = 0; $k < 2; $k++) { ?>
                        <li><span
                                onclick="tag_select_item('garment', '<?php echo "garment name $k" ?>', '<?php echo rand(767, 780); ?>', '<?php echo $j; ?>')"> garment name  <?php echo $k; ?> </span>
                        </li>
                    <?php } ?>
                </ul>

                <div class="clear"> Skirts</div>
                <ul>
                    <?php for ($k = 0; $k < 2; $k++) { ?>
                        <li><span
                                onclick="tag_select_item('garment', '<?php echo "garment name $k" ?>', '<?php echo rand(767, 780); ?>', '<?php echo $j; ?>')"> garment name  <?php echo $k; ?> </span>
                        </li>
                    <?php } ?>
                </ul>

                <div class="clear"> Nightwear</div>
                <ul>
                    <?php for ($k = 0; $k < 2; $k++) { ?>
                        <li><span
                                onclick="tag_select_item('garment', '<?php echo "garment name $k" ?>', '<?php echo rand(767, 780); ?>', '<?php echo $j; ?>')"> garment name  <?php echo $k; ?> </span>
                        </li>
                    <?php } ?>
                </ul>

                <div class="clear"> Hosiery</div>
                <ul>
                    <?php for ($k = 0; $k < 2; $k++) { ?>
                        <li><span
                                onclick="tag_select_item('garment', '<?php echo "garment name $k" ?>', '<?php echo rand(767, 780); ?>', '<?php echo $j; ?>')"> garment name  <?php echo $k; ?> </span>
                        </li>
                    <?php } ?>
                </ul>

                <div class="clear"> Suits</div>
                <ul>
                    <?php for ($k = 0; $k < 2; $k++) { ?>
                        <li><span
                                onclick="tag_select_item('garment', '<?php echo "garment name $k" ?>', '<?php echo rand(767, 780); ?>', '<?php echo $j; ?>')"> garment name  <?php echo $k; ?> </span>
                        </li>
                    <?php } ?>
                </ul>

                <div class="clear"> Jumpsuits</div>
                <ul>
                    <?php for ($k = 0; $k < 2; $k++) { ?>
                        <li><span
                                onclick="tag_select_item('garment', '<?php echo "garment name $k" ?>', '<?php echo rand(767, 780); ?>', '<?php echo $j; ?>')"> garment name  <?php echo $k; ?> </span>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <div class="tag-result-container-garment"
                 id="tag-result-container-garment-shoes-<?php echo $j; ?>">
                <ul>
                    <?php for ($k = 6; $k < 10; $k++) { ?>
                        <li><span
                                onclick="tag_select_item('garment', '<?php echo "garment name $k" ?>', '<?php echo rand(767, 780); ?>', '<?php echo $j; ?>')"> garment name  <?php echo $k; ?> </span>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <div class="tag-result-container-garment"
                 id="tag-result-container-garment-accessories-<?php echo $j; ?>">
                <ul>
                    <?php for ($k = 11; $k < 15; $k++) { ?>
                        <li><span
                                onclick="tag_select_item('garment', '<?php echo "garment name $k" ?>', '<?php echo rand(767, 780); ?>', '<?php echo $j; ?>')"> garment name  <?php echo $k; ?> </span>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <div class="tag-result-container-garment"
                 id="tag-result-container-garment-bags-<?php echo $j; ?>">
                <ul>
                    <?php for ($k = 16; $k < 20; $k++) { ?>
                        <li><span
                                onclick="tag_select_item('garment', '<?php echo "garment name $k" ?>', '<?php echo rand(767, 780); ?>', '<?php echo $j; ?>')"> garment name  <?php echo $k; ?> </span>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <div class="tag-result-container-garment"
                 id="tag-result-container-garment-jewelry-<?php echo $j; ?>">
                <ul>
                    <?php for ($k = 21; $k < 25; $k++) { ?>
                        <li><span
                                onclick="tag_select_item('garment', '<?php echo "garment name $k" ?>', '<?php echo rand(767, 780); ?>', '<?php echo $j; ?>')"> garment name  <?php echo $k; ?> </span>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            </div>

            <div class="clear"></div>

            </li>
            <li>
                <div class="tag-container-right" id="tag-color-image">
                    <img class="tag-color-image-preview" id="tag-color-image-garment-<?php echo $j; ?>"
                         src="http://localhost/fs/new_fs/alphatest/fs_folders/images/uploads/brands/692_brand.jpg"/>

                </div>
            </li>
            </ul>

            <div class="clear"></div>
            </div>
            <div class="clear"></div>
            </div>
            <div class="tag-row-container" id="tag-row-container-price-<?php echo $j ?>" style="display:none">
                <input type="text" id="tag-field-price-<?php echo $j ?>" placeholder="Price" class="tag-field-input"
                       onkeyup="tag_select_item('price', '<?php echo "price name $k" ?>', '<?php echo rand(767, 780); ?>', '<?php echo $j; ?>')">
            </div>
            <div class="tag-row-container" id="tag-row-container-url-<?php echo $j ?>" style="display:none">
                <input type="text" id="tag-field-url-<?php echo $j ?>" placeholder="Url" class="tag-field-input"
                       onkeyup="tag_select_item('url', '<?php echo "price name $k" ?>', '<?php echo rand(767, 780); ?>', '<?php echo $j; ?>')">
            </div>
            </div>
            </div>

            <!-- Tag footer view-->
            <div class="tag-footer-description">
                <div class="tag-view-data">
                    <ul>
                        <li><p> Description: </p></li>
                        <li>
                            <p>
                                <span id="tag-list-data-color-<?php echo $j ?>"></span>
                                <span id="tag-list-data-brand-<?php echo $j ?>"></span>
                                <span id="tag-list-data-pattern-<?php echo $j ?>"></span>
                                <span id="tag-list-data-material-<?php echo $j ?>"></span>
                                <span id="tag-list-data-garment-<?php echo $j ?>"></span>
                                <span id="tag-list-data-price-<?php echo $j ?>"></span>
                                <span id="tag-list-data-url-<?php echo $j ?>"></span>
                            </p>
                        </li>
                    </ul>
                </div>


                <div class="clear"></div>


                <table class="tag-database-data" cellpadding="0" cellspacing="0" style="display:none" >
                    <tr>
                        <td><input   type="text" value="" placeholder="color"
                                     id="tag-color-database-data-color-<?php echo $j ?>"/></td>
                    <tr>
                        <td><input type="text" value="" placeholder="brand"
                                   id="tag-color-database-data-brand-<?php echo $j ?>"/></td>
                    <tr>
                        <td><input type="text" value="" placeholder="pattern"
                                   id="tag-color-database-data-pattern-<?php echo $j ?>"/></td>
                    <tr>
                        <td><input type="text" value="" placeholder="material"
                                   id="tag-color-database-data-material-<?php echo $j ?>"/></td>
                    <tr>
                        <td><input type="text" value="" placeholder="garment"
                                   id="tag-color-database-data-garment-<?php echo $j ?>"/></td>
                    <tr>
                        <td><input type="text" value="" placeholder="price"
                                   id="tag-color-database-data-price-<?php echo $j ?>"/></td>
                    <tr>
                        <td><input type="text" value="" placeholder="url" id="tag-color-database-data-url-<?php echo $j ?>"/>
                        </td>
                </table>
            </div>
        </div>
    </div>
    <?php
    }
}

?>


