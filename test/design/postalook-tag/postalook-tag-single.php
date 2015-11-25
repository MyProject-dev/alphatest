<?php
/**
 * Read me to place in postalook
 * 1.)
 * add this  $j = $counter;
 * separate the div for
 * 2.)
 * <div id="table_container_<?php echo $j; ?>" class="item_<?php echo $j; ?> " style="border-radius: 5px; position: absolute; height: 0px; z-index: 120; margin-top: 295px; margin-left: 297px; display: none;">
 *    <div class='look-tag-container'>
 *         content here
 *    </div>
 * </div>
 *
 * 3.)
 */

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

?>
<!DOCTYPE html>
<html>
<head>
    <title>HTML5, CSS3 and JavaScript demo</title>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <link rel="stylesheet" href="postalook-tag.css"/>
    <script src="postalook-tag.js"></script>
</head>
<body>
 

<!-- Start your code here -->
<?php for ($j = 1; $j < 1; $j++) { ?>

     
    <div id="table_container_" class="item_ look-tag-container tag-container-single">
              dsd
        <ul class="tag-menu">
            <li class="active" >
            <span  >STYLE  </span>
          </li> 
        </ul>
     
        <!-- Tag content -->
        <div class="clear"></div>
        <div class="tag-container-result">
        <div class="tag-result-color" id="tag-result-color" style="display:block">
         
            <div class="tag-row-container" id="tag-row-container-style-<?php echo $j ?>" style="display:block">
                <div class="tag-search">
                    <input type="text" placeholder="search" class="search-field" id="tag-search-keyword-style-<?php echo $j ?>"
                           onkeyup="tag_search_data('style', '<?php echo $j ?>')"/>
                </div>
                <div class="clear"></div>
                <div class="tag-content">
                    <ul class="tag-content-ul">
                        <li>

                            <div class="tag-container-left" id="tag-result-search-style-<?php echo $j; ?>">
                                <ul>
                                    <?php for ($k = 0; $k < 35; $k++) { ?>
                                        <li><span
                                                onclick="tag_select_item('style', '<?php echo "Brand name $k" ?>', '<?php echo rand(767, 780); ?>', '<?php echo $j; ?>')">   <?php echo (!empty($itemName[$k])) ? $itemName[$k] : ""; ?> </span>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="tag-container-right" id="tag-color-image">
                                <img class="tag-color-image-preview" id="tag-color-image-style-<?php echo $j; ?>"
                                     src="http://localhost/fs/new_fs/alphatest/fs_folders/images/uploads/brands/692_brand.jpg"/>

                            </div>
                        </li>
                    </ul>

                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>

              <div class="clear"></div>
     
            <table class="tag-database-data" cellpadding="0" cellspacing="0" style="display:block">
                <tr>
                    <td><input type="text" value="" placeholder="style"  id="tag-color-database-data-style"/></td> 
            </table> 
        </div>
        </div>
        </div> 
    </div>  
<?php } ?>
<!-- End your code here -->



<!-- Start your code here -->
<?php for ($j = 1; $j < 2; $j++) { ?> 
    <div id="table_container_" class="item_ look-tag-container">
        <!-- Tag menus -->
        <ul class="tag-menu">
            <li class="active" >
            <span  >OCCASION  </span>
          </li> 
        </ul>
     
        <!-- Tag content -->
        <div class="clear"></div>
        <div class="tag-container-result">
        <div class="tag-result-color" id="tag-result-color" style="display:block">
         
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
                                     src="http://localhost/fs/new_fs/alphatest/fs_folders/images/uploads/brands/692_brand.jpg"/>

                            </div>
                        </li>
                    </ul>

                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>

              <div class="clear"></div>
     
            <table class="tag-database-data" cellpadding="0" cellspacing="0" style="display:block">
                <tr>
                    <td><input type="text" value="" placeholder="occasion"  id="tag-color-database-data-occasion"/></td> 
            </table> 
        </div>
        </div>
        </div> 
    </div>  
<?php } ?>
<!-- End your code here -->


<!-- Start your code here -->
<?php for ($j = 1; $j < 2; $j++) { ?> 
    <div id="table_container_" class="item_ look-tag-container">

        <!-- Tag menus -->
        <ul class="tag-menu">
            <li class="active" >
            <span  >SEASON  </span>
          </li> 
        </ul>
     
        <!-- Tag content -->
        <div class="clear"></div>
        <div class="tag-container-result">
        <div class="tag-result-color" id="tag-result-color" style="display:block">
         
            <div class="tag-row-container" id="tag-row-container-season-<?php echo $j ?>" style="display:block">
                <div class="tag-search" style="height:20px;">
                    
                </div>
                <div class="clear"></div>
                <div class="tag-content">
                    <ul class="tag-content-ul tag-content-season"> 
                        <li style="width:auto" > 
                            <img class="tag-color-image-preview" id="tag-color-image-season-<?php echo $j; ?>"
                                 src="http://localhost/fs/new_fs/alphatest/fs_folders/images/uploads/brands/692_brand.jpg"
                                   onclick="tag_select_item('season', 'summer', '<?php echo rand(767, 780); ?>', '<?php echo $j; ?>')"
                                 /> 
                        </li>
                        <li  style="width:auto"  > 
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
                        </li>
                    </ul>

                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>

              <div class="clear"></div>
     
            <table class="tag-database-data" cellpadding="0" cellspacing="0" style="display:block">
                <tr>
                    <td><input type="text" value="" placeholder="season"  id="tag-color-database-data-season"/></td> 
            </table> 
        </div>
        </div>
        </div> 
    </div>  
<?php } ?>


<!-- End your code here -->

</body>


</html>

