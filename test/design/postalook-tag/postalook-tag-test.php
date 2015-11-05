<?php


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
        'jeans' => array(),
        'Dresses' => array(),
        'Tops' => array(),
        'Knitwear' => array(),
        'Shorts' => array(),
        'Lingerie' => array(),
        'Beachwear' => array(),
        'Sweats' => array(),
        'Skirts' => array(),
        'Nightwear' => array(),
        'Hosiery' => array(),
        'Suits' => array(),
        'Jumpsuits' => array()
    ),
    'shoes'=> array(),
    'accessories'=> array(),
    'bags'=> array(),
    'jewelry'=> array()
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


echo "<pre>";
sort($materialItems);
foreach ($materialItems as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "\n";
}




/*

//main category
foreach($garmentItems as $key => $value):
    echo "$key \n";


    //sub category
    foreach($value as $key1 => $value1):
        echo "$key1 : -->   ";

        //sub category content
            foreach($value1 as $key2 => $value2):
                echo "$value2   <br>";
            endforeach;

    endforeach;
endforeach;




