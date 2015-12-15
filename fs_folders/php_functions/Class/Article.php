<?php
namespace App;

use App\Reset;
use App\User;

class Article{
    private $db = 0;
    private $mno = 0;
    private $table = 'fs_postedarticles';
    public $totalAllowPostADay = 4;
    function __construct($db, $mno) {
        $this->db = $db;
        $this->mno = $mno;
    }

    public function latestShared() {
       $response = select_v3($this->table, '*', "artno > 0 order by artno desc limit 1");
       return (!empty($response[0]['artno'])) ? $response[0]['artno'] : 0;
    }

    public function latestRead() {
        $response = select_v3($this->table, '*', "artno > 0 order by pltvotes desc limit 1");
        return (!empty($response[0]['artno'])) ? $response[0]['artno'] : 0;
    }

   public function overAllRating($mno) {
       //count all the pltvotes in article page
       // where mno = $mno
       // return the total sum of the article query
       $this->db->select($this->table, 'sum(pltvotes) as tlikes');
       $data = $this->db->getResult();
       return $data[0]['tlikes'];
   }

    public function recentUploaded($category, $limit=8){
        $response = select_v3($this->table, '*', "artno > 0 and category = '$category'  order by artno desc limit " . $limit);
        return $response;
    }

    public function sourceCategoryDropDown($artno){
        if($artno > 0) {
            $src = "fs_folders/images/uploads/posted articles/home/$artno.jpg";
            if(!file_exists($src)){
                //echo "not exist $plno ";
                $src = "fs_folders/images/uploads/posted articles/home/default.jpg";
            }
        } else {
            //echo "no look for category $plno ";
            $src = "fs_folders/images/uploads/posted articles/home/default.jpg";
        }
        return $src;
    }

    public function position($artno, $category,  $mno) {
        $position = 0;
        //$response = select_v3($this->table, '*', "mno = $mno and category = '$category'  order by artno desc");
        $response = select_v3($this->table, '*', "mno = $mno order by artno desc");
        for($i=0; $i<count($response); $i++) {
            if($response[$i]['artno'] == $artno) {
                $position = $i+1;
            }
        }
        return $position;
    }

    public function totalUploaded($category,  $mno) {
        //$response = select_v3($this->table, 'count(*) as total', "mno = $mno and category = '$category'  order by artno desc");
        $response = select_v3($this->table, 'count(*) as total', "mno = $mno order by artno desc");
        // print_r($response);
        return $response[0]['total'];
    }

    public function totalUploaded1($mno) {
        $response = select_v3($this->table, 'count(*) as total', "mno = $mno order by artno desc");
        return $response[0]['total'];
    }

    public function getData($artno) {
        $response = select_v3($this->table, '*', "artno = $artno");
        return $response;
    }

    public function mostLike(){
        $response = select_v3($this->table, '*', "artno > 0 order by pltvotes desc limit 1");
        return $response[0]['artno'];
    }

    public function totalLikeByCategory($mno, $category) {
        $response = select_v3($this->table, 'sum(pltvotes) as total', "mno = $mno and category = '$category'");
        return $response[0]['total'];
    }

    public function  isAllowPost($mno, $resetDate=null, $allowPost=4) {

        $reset = new Reset();
        $resetDate = $reset->getResetDate('look');

        $response = select_v3($this->table, '*', "mno = $mno order by artno desc limit $allowPost");

        //print_r($response);

        $postAfterReset = 0;

        for($i=0; $i<count($response); $i++) {

            // echo " " . $response[$i]['date'] . " >=  $resetDate) \n";
            if($response[$i]['date'] >= $resetDate){
                $postAfterReset++;
                //echo "new post dan \n";
            } else  {
                //echo "old post \n";
            }
        }

        //echo "total post $postAfterReset \n";

        if($postAfterReset < $allowPost) {
//            echo "allow post \n";
            return TRUE;
        } else {
//            echo "dont allow post \n";
            return FALSE;
        }
    }


    public function totalPostInADay($mno, $allowPost=4)  {
        $reset = new Reset();
        $resetDate = $reset->getResetDate('look');

        $response = select_v3($this->table, '*', "mno = $mno order by artno desc limit $allowPost");

        //print_r($response);

        $postAfterReset = 0;
        for($i=0; $i<count($response); $i++) {
            //echo " " . $response[$i]['pludate'] . " >=  $resetDate) \n";
            if($response[$i]['date'] >= $resetDate){
                $postAfterReset++;
                //  echo "new post dan \n";
            } else  {
                //   echo "old post \n";
            }
        }
        // echo "total post $postAfterReset \n";
        return $postAfterReset;
    }

    public function totalLike($plno = null) {

        $query= mysql_query("SELECT count(table_id) as total_like FROM fs_rate_modals  WHERE table_name  = 'fs_postedarticles' and table_id = $plno");

        $response = execute_query($query);

        return $response[0]['total_like'];

    }

       public function totalView($plno = null) {
        return 0;
    }


    public function totalDripped($plno = null) {

        $query= mysql_query("SELECT count(table_id) as total_dripped FROM fs_drip_modals  WHERE table_name  = 'fs_postedarticles' and table_id = $plno");

        $response = execute_query($query);

        return $response[0]['total_dripped'];

    }
    public function totalFavorite($plno = null) {

        $query= mysql_query("SELECT count(table_id) as total_favorite FROM fs_favorite_modals WHERE table_name  = 'fs_postedarticles' and table_id = $plno");

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
     * posted modal => s_records.fs_postedarticles,
     * modal likes => fs_records.fs_rate_modals,
     * drip => fs_records.fs_drip_modals,
     * favorite => fs_records.fs_favorite_modals,
     * notification => fs_records.fs_notification,
     * flag => fs_records.fs_flag,
     * pltag => fs_records.fs_pltag,
     * fs_search => fs_records.fs_search,
     * fs_comment => fs_records.fs_comment,
     * fs views => fs_records.fs_view,
     * comment likes  => fs_rate_modals,
     * comment dislikes => fs_rate_modals,
     * image(thumbnail, details, home) => fs_folders/images/uploads/posted looks/*,
     * @param $id
     */
    public function destroy($id) {

        $user = new User($this->mno, $this->db);

        $url =  "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $escaped_url = htmlspecialchars($url, ENT_QUOTES, 'UTF-8');
        $url = $escaped_url . '/';//$_SERVER['REQUEST_URI'];
        $url = '../../../';

        //Get look owner mno

        $mno = 1;

        if($this->db->delete('activity', ' _table_id = ' . $id)) {
            echo "activity successfully deleted <br>";
        } else {
            echo "activity failed to delete <br>";
        }

        if($this->db->delete('fs_postedarticles', ' artno = ' . $id)) {
            echo "fs_postedarticles successfully deleted <br>";
        } else {
            echo "fs_postedarticles failed to delete <br>";
        }

        if($this->db->delete('fs_rate_modals', " table_name = '$this->table' and table_id = $id")) {
            echo "fs_rate_modals successfully deleted <br>";
        } else {
            echo "fs_rate_modals failed to delete <br>";
        }

        if($this->db->delete('fs_drip_modals', " table_name = '$this->table' and table_id = $id")) {
            echo "fs_drip_modals successfully deleted <br>";
        } else {
            echo "fs_drip_modals failed to delete <br>";
        }

        if($this->db->delete('fs_favorite_modals', " table_name = '$this->table' and table_id = $id")) {
            echo "fs_favorite_modals successfully deleted <br>";
        } else {
            echo "fs_favorite_modals failed to delete <br>";
        }

        if($this->db->delete('fs_notification', " table_name = '$this->table' and table_id = $id")) {
            echo "fs_notification successfully deleted <br>";
        } else {
            echo "fs_notification failed to delete <br>";
        }

        if($this->db->delete('fs_flag', " table_name = '$this->table' and table_id = $id")) {
            echo "fs_flag successfully deleted <br>";
        } else {
            echo "fs_flag failed to delete <br>";
        }

        if($this->db->delete('fs_search', " table_name = '$this->table' and table_id = $id")) {
            echo "fs_search successfully deleted <br>";
        } else {
            echo "fs_search failed to delete <br>";
        }

        if($this->db->delete('fs_view', " table_name = '$this->table' and table_id = $id")) {
            echo "fs_view successfully deleted <br>";
        } else {
            echo "fs_view failed to delete <br>";
        }

        //Get all comments and use for loop to delete the like and dis-like of the comments.
        $comments = select_v3('fs_comment', '*', " table_name = '$this->table' and table_id = $id");
        foreach($comments as $comment) {
            if($this->db->delete('fs_rate_modals', " table_name = 'fs_comment' and table_id = " . $comment['cno'])) {
                echo "posted_looks_comments_like_dislike successfully deleted  table_name =  fs_comment  and table_id = " . $comment['cno'] . "<br>";
            } else {
                echo "posted_looks_comments_like_dislike failed to delete table_name =  fs_comment  and table_id = " . $comment['cno'] . "<br>";
            }
        }

        if($this->db->delete('fs_comment', " table_name = '$this->table' and table_id = $id")) {
            echo "fs_comment successfully deleted <br>";
        } else {
            echo "fs_comment failed to delete <br>";
        }

        if(unlink($url . "fs_folders/images/uploads/posted articles/home/$id.jpg")) {
            echo $url . "fs_folders/images/uploads/posted articles/home/$id.jpg  successfully deleted <br>";
        } else {
            echo $url . "fs_folders/images/uploads/posted looks/posted articles/$id.jpg  successfully deleted <br>";
        }

        if(unlink($url . "fs_folders/images/uploads/posted articles/detail/$id.jpg")){
            echo $url . "fs_folders/images/uploads/posted articles/detail/$id.jpg  successfully deleted <br>";
        } else {
            echo $url . "fs_folders/images/uploads/posted articles/detail/$id.jpg  successfully deleted <br>";
        }

        if(unlink($url . "fs_folders/images/uploads/posted articles/thumbnail/$id.jpg")){
            echo $url . "fs_folders/images/uploads/posted articles/thumbnail/$id.jpg  successfully deleted <br>";
        } else {
            echo $url . "fs_folders/images/uploads/posted articles/thumbnail/$id.jpg  successfully deleted <br>";
        }
        $user->resetInformation($user->mno);
    }
    public function designPostArticleCategory($topic=null) {  ?>

        <input type="text" value="<?php echo $topic; ?>" placeholder="Category"  id="postarticle-change-topic-category" onclick="tag_hide_show('#table_container_', '#table_container_1a, #table_container_2a', '#tag-search-keyword-topic-category-1');tag_search_data('topic-category', '1')" />
    

        <div>  
        <?php for ($j = 1; $j < 2; $j++) { ?>


            <div id="table_container_" class="item_ look-tag-container tag-container-single postarticle-tag-category">
                      
                <ul class="tag-menu" style="display:none">
                    <li class="active" >
                    <span  > Category  </span>
                  </li> 
                </ul>
             
                <!-- Tag content -->
                <div class="clear"></div>
                <div class="tag-container-result">
                <div class="tag-result-color" id="tag-result-color" style="display:block">
                 
                    <div class="tag-row-container" id="tag-row-container-style-<?php echo $j ?>" style="display:block">
                        <div class="tag-search">
                            <input type="text" placeholder="search" class="search-field" id="tag-search-keyword-topic-category-<?php echo $j ?>"
                                   onkeyup="tag_search_data('topic-category', '<?php echo $j ?>')"/>
                        </div>
                        <div class="clear"></div>
                        <div class="tag-content">
                            <ul class="tag-content-ul">
                                <li>

                                    <div class="tag-container-left" id="tag-result-search-topic-category-<?php echo $j; ?>">
                                       

                                        <!-- content here -->
                                    </div>
                                </li>
                                <li>
                                    <div class="tag-container-right" id="tag-color-image">
                                        <img class="tag-color-image-preview" id="tag-color-image-topic_category-<?php echo $j; ?>"
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
        <?php }  
    }
    public function designPostArticleTopicItem($topicItem=null) { ?>

        <input type="text" value="<?php echo $topicItem; ?>" placeholder="Topic"  id="tag-color-database-data-topic" onclick="tag_hide_show('#table_container_1a', '#table_container_, #table_container_2a', '#tag-search-keyword-topic-item-1'); tag_search_data('topic-item', '1')" /></td>
        <?php for ($j = 1; $j < 2; $j++) { ?>
            <div id="table_container_1a" class="item_ look-tag-container tag-container-single-occasion postarticle-tag-topic">
                <!-- Tag menus -->
                <ul class="tag-menu" style="display:none">
                    <li class="active" >
                        <span  >Topic  </span>
                    </li>
                </ul>

                <!-- Tag content -->
                <div class="clear"></div>
                <div class="tag-container-result">
                    <div class="tag-result-color" id="tag-result-color" style="display:block">

                        <div class="tag-row-container" id="tag-row-container-occasion-<?php echo $j ?>" style="display:block">
                            <div class="tag-search">
                                <input type="text" placeholder="search" class="search-field" id="tag-search-keyword-topic-item-<?php echo $j ?>"
                                       onkeyup="tag_search_data('topic-item', '<?php echo $j ?>')"/>
                            </div>
                            <div class="clear"></div>
                            <div class="tag-content">
                                <ul class="tag-content-ul">
                                    <li>

                                        <div class="tag-container-left" id="tag-result-search-topic-item-<?php echo $j; ?>">
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
                                            <img class="tag-color-image-preview" id="tag-color-image-topic-<?php echo $j; ?>"
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

        <?php } ?> <?php
    }
    public function designPostarticleTag($tag=null) { ?>

        <?php $path = $_SESSION['tagPath']; ?>
        <input type="text" value="<?php  echo $tag; ?>"  placeholder="Tag"  id="tag-color-database-data-article-tag" onclick="tag_hide_show('#table_container_2a', '#table_container_, #table_container_1a', '#tag-search-keyword-article-tag-1'); tag_search_data('article-tag', '1')" /></td>
        <!-- <div id="table_container_1a" class="item_ look-tag-container tag-container-single-occasion"> -->
        <!-- Start your code here -->
        <?php for ($j = 1; $j < 2; $j++) { ?>
            <div id="table_container_2a" class="item_ look-tag-container tag-container-single-season postarticle-tag-tags" >

                <!-- Tag menus -->
                <ul class="tag-menu" style="display:none" >
                    <li class="active" >
                        <span  >TAG  </span>
                    </li>
                </ul>

                <!-- Tag content -->
                <div class="clear"></div>
                <div class="tag-container-result">
                    <div class="tag-result-color" id="tag-result-color" style="display:block">

                        <div class="tag-row-container" id="tag-row-container-occasion-<?php echo $j ?>" style="display:block">
                            <div class="tag-search">
                                <input type="text" placeholder="search" class="search-field" id="tag-search-keyword-article-tag-<?php echo $j ?>"
                                       onkeyup="tag_search_data('article-tag', '<?php echo $j ?>')"/>
                            </div>
                            <div class="clear"></div>
                            <div class="tag-content">
                                <ul class="tag-content-ul">
                                    <li>

                                        <div class="tag-container-left" id="tag-result-search-article-tag-<?php echo $j; ?>">
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
                                            <img class="tag-color-image-preview" id="tag-color-image-tag-<?php echo $j; ?>"
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
        <?php }

    }
}
?>
