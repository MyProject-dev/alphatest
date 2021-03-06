<?php
/**
 * Created by PhpStorm.
 * User: Jesus
 * Date: 7/10/2015
 * Time: 6:52 PM
 */
require ('fs_folders/php_functions/Helper/helper.php');
$db = new Database();
$look = new Look($this->mno, $db);
$article = new \App\Article($db, $this->mno);
//echo "<pre>";
//print_r( $look->getAllUsedStyle() );
//echo "</pre>";
$styles = $look->getAllUsedStyle();
?>
<div class="header-dropdown-wrapper"   >






    <!-- LOOK-->
    <div class="header-dropdown-container"   id="dropdown-header-look"  >
        <ul class="header-dropdown-ul-1-container"    >

            <li>
                <a href="look?category=alllooks">
                    <div>
                        <div>
                            <br>
                            <br>
                            <span>All <br> LOOKS</span>
                        </div>
                    </div>
                </a>
            </li>


            <?php for($i=0; $i<8; $i++): ?>

                <?php if(!empty($styles[$i]['style'])) { ?>
                    <?php $style = $styles[$i]['style']; ?>
                    <li>
                        <a href="look?category=bohemian">
                            <?php
                            $plno = $look->Top($style);
                            $src = $look->sourceCategoryDropDown($plno);
                            ?>
                            <div class="header-drodown-image-container"  class="header-drodown-image-container" style="background-image:url('<?php echo $src; ?>');height: 88px;background-repeat: no-repeat;background-size: auto 80px; background-color: black;" >
                            </div>
                            <div>
                                <span><?php echo ucfirst($style); ?></span>
                            </div>
                        </a>
                    </li>
                <?php } else {  ?>
                    <li>
                        <a href="#">
                            <div class="header-drodown-image-container"  class="header-drodown-image-container" style="height: 88px;background-repeat: no-repeat;background-size: auto 80px; background-color: black;" >
                            </div>
                            <div>
                                <span>Style</span>
                            </div>
                        </a>
                    </li>
                <?php }  ?>
            <?php endfor; ?>


            <?php if(false): ?>
                <li>
                    <a href="look?category=casual">
                        <?php
                        $plno = $look->Top('Casual');
                        $src = $look->sourceCategoryDropDown($plno);
                        ?>
                        <div class="header-drodown-image-container"  class="header-drodown-image-container"  style="background-image:url('<?php echo $src; ?>');height: 88px;background-repeat: no-repeat;background-size: auto  123px;" >
                        </div>
                        <div>
                            <span>Casual</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="look?category=chic">
                        <?php
                        $plno = $look->Top('Chic');
                        $src = $look->sourceCategoryDropDown($plno);
                        ?>


                        <div class="header-drodown-image-container"  style="background-image:url('<?php echo $src; ?>');height: 88px;background-repeat: no-repeat;background-size: auto  123px;" >
                        </div>
                        <div>
                            <span>Chic </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="look?category=formal">
                        <?php
                        $plno = $look->Top('Formal');
                        $src = $look->sourceCategoryDropDown($plno);
                        ?>
                        <div class="header-drodown-image-container"  style="background-image:url('<?php echo $src; ?>');height: 88px;background-repeat: no-repeat;background-size: auto  123px;" >
                        </div>

                        <div>
                            <span>Formal</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="look?category=grunge">
                        <?php
                        $plno = $look->Top('Grunge');
                        $src = $look->sourceCategoryDropDown($plno);
                        ?>
                        <div class="header-drodown-image-container"  style="background-image:url('<?php echo $src; ?>');height: 88px;background-repeat: no-repeat;background-size: auto 123;" > </div>
                        <div> <span>Grunge</span> </div>
                    </a>
                </li>
                <li>
                    <a href="look?category=menswear">

                        <?php
                        $plno = $look->Top('Menswear');
                        $src = $look->sourceCategoryDropDown($plno);
                        ?>
                        <div class="header-drodown-image-container"  style="background-image:url('<?php echo $src; ?>');height: 88px;background-repeat: no-repeat;background-size: auto  123px;" >
                        </div>
                        <div>
                            <span>Menswear</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="look?category=preppy">

                        <?php
                        $plno = $look->Top('Preppy');
                        $src = $look->sourceCategoryDropDown($plno);
                        ?>
                        <div class="header-drodown-image-container"  style="background-image:url('<?php echo $src; ?>');height: 88px;background-repeat: no-repeat;background-size: auto  123px;" >
                        </div>
                        <div>
                            <span>Preppy</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="look?category=streetwear">
                        <?php
                        $plno = $look->Top('Streetwear');
                        $src = $look->sourceCategoryDropDown($plno);
                        ?>
                        <div class="header-drodown-image-container"  style="background-image:url('<?php echo $src; ?>');height: 88px;background-repeat: no-repeat;background-size: auto  123px;" >
                        </div>
                        <div>
                            <span>Streetwear</span>
                        </div>
                    </a>
                </li>
            <?php endif; ?>
            <li>
                <a href="look?category=alllook&toplook=toprated">
                    <div>
                        <br>
                        <br>
                        <span>TOP <br> LOOKS</span>
                    </div>
                </a>
            </li>

        </ul>
        <div class="clear" >
        </div>
    </div>


    <!-- FASHION -->
    <div class="header-dropdown-container"    id="dropdown-header-fashion"   >
        <ul class="header-dropdown-ul-1-container"    >
            <li>
                <a href="article?category=fashion">
                    <div>
                        <div>
                            <br>
                            <br>
                            <span>ALL <br> FASHION</span>
                        </div>
                    </div>
                </a>
            </li>
            <?php
            $r = $article->recentUploaded('Fashion');
            $c=0;
            foreach($r as $art) { 
                ?>
                <li>
                    <a href="#">
                        <?php $src = $article->sourceCategoryDropDown($art['artno']); ?>
                        <div class="header-drodown-image-container"  style="background-image:url('<?php echo $src; ?>');height: 88px;background-repeat: no-repeat;background-size: auto 80px; background-color: black;" >
                        </div>
                        <div>
                            <span><?php echo  ucfirst(string_limit($art['topic'], 11, '...')) ; ?></span>
                        </div>
                    </a>
                </li>
            <?php } ?>
            <li class="hide" >
                <a href="look?category=alllook&toplook=toprated">
                    <div>
                        <br>
                        <br>
                        <span>Top Fashion</span>
                    </div>
                </a>
            </li>
        </ul>
        <div class="clear" >
        </div>
    </div>

    <!-- BEAUTY -->
    <div class="header-dropdown-container"    id="dropdown-header-beauty"   >
        <ul class="header-dropdown-ul-1-container"    >
            <li>
                <a href="article?category=beauty">
                    <div>
                        <div>
                            <br>
                            <br>
                            <span>ALL <br> BEAUTY</span>
                        </div>
                    </div>
                </a>
            </li>
            <?php
            $r = $article->recentUploaded('Beauty');
            foreach($r as $art) {
                ?>
                <li>
                    <a href="article?category=beauty">
                        <?php $src = $article->sourceCategoryDropDown($art['artno']); ?>
                        <div class="header-drodown-image-container"  style="background-image:url('<?php echo $src; ?>');height: 88px;background-repeat: no-repeat;background-size: auto 80px; background-color: black;" >
                        </div>
                        <div>
                            <span><?php echo  ucfirst(string_limit($art['topic'], 11, '...')) ; ?></span>
                        </div>
                    </a>
                </li>
            <?php } ?>
            <li class="hide" >
                <a href="article?category=beauty">
                    <div>
                        <br>
                        <br>
                        <span>Top Fashion</span>
                    </div>
                </a>
            </li>
        </ul>
        <div class="clear" >
        </div>
    </div>

    <!-- LIFESTYLE -->
    <div class="header-dropdown-container"    id="dropdown-header-lifestyle"   >
        <ul class="header-dropdown-ul-1-container"    >
            <li  >
                <a href="article?category=lifestyle" >
                    <div>
                        <div>
                            <br>
                            <br>
                            <span>ALL <br> LIFESTYLE</span>
                        </div>
                    </div>
                </a>
            </li>
            <?php
            $r = $article->recentUploaded('Lifestyle');
            foreach($r as $art) {
                ?>
                <li>
                    <a href="article?category=lifestyle" >
                        <?php $src = $article->sourceCategoryDropDown($art['artno']); ?>
                        <div class="header-drodown-image-container"  style="background-image:url('<?php echo $src; ?>');height: 88px;background-repeat: no-repeat;background-size: auto 80px; background-color: black;" >
                        </div>
                        <div>
                            <span><?php echo  ucfirst(string_limit($art['topic'], 11, '...')) ; ?></span>
                        </div>
                    </a>
                </li>
            <?php } ?>
            <li class="hide" >
                <a href="article?category=lifestyle" >
                    <div>
                        <br>
                        <br>
                        <span>Top Lifestyle</span>
                    </div>
                </a>
            </li>
        </ul>
        <div class="clear" >
        </div>
    </div>

    <!-- ENTERTAINMENT -->
    <div class="header-dropdown-container"    id="dropdown-header-entertainment"   >
        <ul class="header-dropdown-ul-1-container"    >
            <li  >
                <a href="article?category=entertainment" >
                    <div>
                        <div>
                            <br>
                            <br>
                            <span>ALL <br> ENT</span>
                        </div>
                    </div>
                </a>
            </li>
            <?php
            $r = $article->recentUploaded('Entertainment');
            foreach($r as $art) {
                ?>
                <li>
                    <a href="article?category=entertainment" >
                        <?php $src = $article->sourceCategoryDropDown($art['artno']); ?>
                        <div class="header-drodown-image-container"  style="background-image:url('<?php echo $src; ?>');height: 88px;background-repeat: no-repeat;background-size: auto 80px; background-color: black;" >
                        </div>
                        <div>
                            <span><?php echo  ucfirst(string_limit($art['topic'], 11, '...')) ; ?></span>
                        </div>
                    </a>
                </li>
            <?php } ?>
            <li class="hide" >
                <a href="article?category=entertainment" >
                    <div>
                        <br>
                        <br>
                        <span>Top Entertainment</span>
                    </div>
                </a>
            </li>
        </ul>
        <div class="clear" >
        </div>
    </div>

    <div style="border:1px solid none; background-color:none; color:black; height:10px;" onmouseover="hide_show_hide('#header-dropdown-look', '')">
    </div>

</div>