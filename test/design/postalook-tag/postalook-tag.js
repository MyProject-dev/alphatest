var object = new Object();
object.color_count = 0;
object.color_edit = 1;
object.color_clicked = 0;
object.tag_color_row_click = null;
object.tag_color_td_click = null;
object.tag_color_td_clicke_name = null;

function tag_select_color_enable_edit_mode(tagNum, colorPosition) {

    object.tag_color_row_click = tagNum;
    object.tag_color_td_click = colorPosition;
    object.tag_color_td_clicke_name = $('#tag-selected-color-td' + '-' + tagNum + '-' + colorPosition).text();// get the name of the current color
    //alert('clicked row color = ' + object.tag_color_row_click + ' tag_color_td_click = ' + object.tag_color_td_click + ' tag_color_td_clicke_name = ' + object.tag_color_td_clicke_name);

    //remove all the color mode or opacity mode for the selected color to edit
    //applied removal from 1-15 tags
    for (var i = 0; i < 15; i++) {
        for (var j = 0; j < 5; j++) {
            $('#tag-selected-color-td' + '-' + i + '-' + j).css('opacity', '1');
        }
    }

    //add color for the selected td color to be replace.
    $('#tag-selected-color-td' + '-' + tagNum + '-' + colorPosition).css('opacity', '0.5');
}

function tag_select_color(rowName, color_name, color_html, tagNum) { 

    //alert('clicked row color = ' + object.tag_color_row_click + ' tag_color_td_click = ' + object.tag_color_td_click + ' tag_color_td_clicke_name = ' + object.tag_color_td_clicke_name);
    //get total color field-up from the right rectangle
    var color_lenght = $('#tag-color-database-data-' + rowName + '-' + tagNum).val().split(',').length - 1;
    
    /**
    * Show alert instruction for the user - how to update the selected color. 
    */
    if(readCookie('sessionId') != 'hide') { 
        if (color_lenght == 0) {
            if(confirm('Pease click the selected color and select new color - to change. Do you want to not show this when you do the taggin again?')) 
            writeCookie('sessionId', 'hide', 3);
        }    
        console.log(' session = ' + readCookie('sessionId')); 
    }
     
    // Validate if its in edit mode
    if (object.tag_color_row_click == tagNum) {
        
        // detect if duplicate color selected
        if(tag_is_color_exist(color_html, tagNum)) { return false }
            
        // find the selected row be replaced with color
        // replace the specific td that the user clicked
        //add color to the td right rectangle
        $('#tag-selected-color-td-' + tagNum + '-' + object.tag_color_td_click).attr('style', "background-color:" + color_html + " ");

        //add text to the td right rectangle
        $('#tag-selected-color-td-' + tagNum + '-' + object.tag_color_td_click).text(color_name);

        //replace the text only if the position of the color is zero(0) or the first color in the rectangle.
        //replace the text view
        if (object.tag_color_td_click == 0) {
            $('#tag-list-data-color-' + tagNum).text(color_name + ',');
        }

        //replace the position in the database field
        $('#tag-color-database-data-color-' + tagNum).val($('#tag-color-database-data-color-' + tagNum).val().replace(object.tag_color_td_clicke_name, color_name));

        //return the color from opacity to normal normal
        $('#tag-selected-color-td' + '-' + tagNum + '-' + object.tag_color_td_click).css('opacity', '1');

        //add color to bottom
        if (object.tag_color_td_click == 0) {
            tag_add_color_footer(color_html, color_name, tagNum);
        }

        //disable the edit mode
        object.tag_color_row_click = null;
        object.tag_color_td_click = null;

    } else {

        // If less than 6 colors. 6 because it started with zero.
        if (color_lenght < 5) {

            // detect if duplicate color selected
            if(tag_is_color_exist(color_html, tagNum)) { return false }

            // get html color
            var color_html = color_html;

            //get color name
            var color_name = color_name;

            //append color name to the list
            if (color_lenght == 0) {
                $('#tag-list-data-color-' + tagNum).text(color_name + ',')
            }

            //add color to the td right rectangle
            $('#tag-selected-color-td-' + tagNum + '-' + color_lenght).attr('style', "background-color:" + color_html + " ");

            //add text to the td right rectangle
            $('#tag-selected-color-td-' + tagNum + '-' + color_lenght).text(color_name);

            //concatenate the current color with the new selected
            //add the html color to the field for database saving
            $('#tag-color-database-data-' + rowName + '-' + tagNum).val($('#tag-color-database-data-' + rowName + '-' + tagNum).val() + ',' + color_name);

            //add color to bottom
            if (color_lenght == 0) {
                tag_add_color_footer(color_html, color_name, tagNum);
            }


        }
    }
}
function tag_select_item(rowName, brand_name, brand_id, tagNum) {
 
    console.log('id ' + brand_id + 'rowName  = ' + rowName);
 

    var imageView = true;



    if(rowName == 'topic_category') {

        // add style to field
        $('#postarticle-change-topic-category').val(brand_name);

        //hide container
        tag_hide_show('', '#table_container_');


    } else if(rowName == 'topic') {
        // add style to field
        $('#tag-color-database-data-topic').val(brand_name);

        //hide container
        tag_hide_show('', '#table_container_1a');
    } else if(rowName == 'tag') {
        console.log('occasion in ');

        //get occasion to field
        var seasonVal = $('#tag-color-database-data-article-tag').val();

        console.log(seasonVal)

        //check if the selected is exist
        // var str = "Hello world, welcome to the universe.";

        var isExist = seasonVal.indexOf(brand_name);

        console.log('exist = ' + isExist);
        if(isExist > -1){
            console.log(' item exist ');
            //if exist then replace it
        } else {
            console.log(' item not exist ');
            //else concat the new selected
            seasonVal = seasonVal + ','  + brand_name;
        }

        //add to the field
        $('#tag-color-database-data-article-tag').val(seasonVal);


        //hide container
        tag_hide_show('', '#table_container_2a');




    } else if(rowName == 'style') {

        // add style to field
        $('#tag-color-database-data-style').val(brand_name);

        //hide container 
        tag_hide_show('', '#table_container_');

    } else if (rowName == 'occasion') {   

        console.log('occasion in ');

        //get occasion to field 
        var seasonVal = $('#tag-color-database-data-occasion').val();

        console.log(seasonVal)


        //check if the selected is exist 
        // var str = "Hello world, welcome to the universe.";

        var isExist = seasonVal.indexOf(brand_name);

        console.log('exist = ' + isExist);
        if(isExist > -1){
           console.log(' item exist ');
            //if exist then replace it  
        } else { 
            console.log(' item not exist ');
            //else concat the new selected 
             seasonVal = seasonVal + ','  + brand_name; 
        } 

        //add to the field
        $('#tag-color-database-data-occasion').val(seasonVal);
            
        /**
        * Remove first letter comma under occasion field 
        */
        if(seasonVal[0] == ',') { 
            var seasonVal = seasonVal.substring(1, seasonVal.length);
            $('#tag-color-database-data-occasion').val(seasonVal);
        }


       
        //hide container 
        tag_hide_show('', '#table_container_1a');


    } else if (rowName == 'season') {

        //add the season selected from image 
        $('#tag-color-database-data-season').val(brand_name);

        //set don't show image preview
        imageView = false;


                //hide container 
        tag_hide_show('', '#table_container_2a');


    } else if (rowName == 'price' || rowName == 'url') {
        //get the field value
        //no view image from price and url
        brand_name = $('#tag-field-' + rowName + '-' + tagNum).val();
        imageView = false;
    }

    //add brand to list
    if (rowName == 'url') {
        $('#tag-list-data-' + rowName + '-' + tagNum).text(brand_name);
    } else {
        $('#tag-list-data-' + rowName + '-' + tagNum).text(brand_name + ',');
    }

    //add brand for field saving database
    $('#tag-color-database-data-' + rowName + '-' + tagNum).val(brand_name);

    //This will prevent image showing when new item name is suggested
    if(brand_id == 0){
        return;
    }
    
    //set img src
    if(rowName == 'brand') { 
        var srcImg = $('#postalook-tag-preivew-path').text() + '/' + rowName + 's/' + brand_id + '_brand.jpg';
    } else {
        var srcImg = $('#postalook-tag-preivew-path').text() + '/' + rowName + '/' + brand_id + '.jpg';
    }

    console.log('src img ' + srcImg);

    //display image preview
    if (imageView == true) {  
        $('#tag-color-image-' + rowName + '-' + tagNum).attr('src',  srcImg);
    } 
} 
function mouseOverImagePreview(rowName, brand_id, tagNum) {

    if(rowName == 'brand') { 
        var srcImg = $('#postalook-tag-preivew-path').text() + '/' + rowName + 's/' + brand_id + '_brand.jpg';
    } else if (rowName == 'default') {
        var srcImg = $('#postalook-tag-preivew-path').text() + '/' + rowName + '/default.jpg';
    } else {
        var srcImg = $('#postalook-tag-preivew-path').text() + '/' + rowName + '/' + brand_id + '.jpg';
    }  

    console.log('src = ' + srcImg + ' append to ' + '#tag-color-image-' + rowName + '-' + tagNum);

    $('#tag-color-image-' + rowName + '-' + tagNum).attr('src',  srcImg);   
}
function tag_add_price_url(tagNum) {
}
function tag_search_data(rowName, tagNum) {

    // get the keyword search
    var keyword = $('#tag-search-keyword-' + rowName + '-' + tagNum).val();

    //send http get request
    //assign handlers immediately after making the request,
    //and remember the jqxhr object for this request



    if(rowName == 'topic-category' || rowName == 'topic-item' || rowName == 'article-tag') {

        var jqxhr = $.get("test/design/postalook-tag/postarticle-tag-search.php?keyword=" + keyword + '&rowName=' + rowName + '&tagNum=' + tagNum, function () {
            console.log('rowName = ' +  rowName + ' tagNum = ' + tagNum + 'keyword = ' + keyword);
            // var jqxhr = $.get("postalook-tag-search.php?keyword=" + keyword + '&rowName=' + rowName + '&tagNum=' + tagNum, function () {
            //alert( "success" );
        })
            // print result data
            .done(function (data) {
                //alert( "second success" + data);
                $('#tag-result-search-' + rowName + '-' + tagNum).html(data);
            })
            .fail(function () {
                alert("Error found, please contact Fashion Sponge support.");
            })

    } else {
        var jqxhr = $.get("test/design/postalook-tag/postalook-tag-search.php?keyword=" + keyword + '&rowName=' + rowName + '&tagNum=' + tagNum, function () {
         console.log('rowName = ' +  rowName + ' tagNum = ' + tagNum + 'keyword = ' + keyword);
        // var jqxhr = $.get("postalook-tag-search.php?keyword=" + keyword + '&rowName=' + rowName + '&tagNum=' + tagNum, function () {
            //alert( "success" );
        })

            // print result data
            .done(function (data) {
            //alert( "second success" + data);
            $('#tag-result-search-' + rowName + '-' + tagNum).html(data);
            })
            .fail(function () {
                alert("Error found, please contact Fashion Sponge support.");
            })

    }




}
function tag_change_content(rowName, tagNum) {
    // hide current open rows
    $('#tag-row-container-color-' + tagNum).css('display', 'none');
    $('#tag-row-container-brand-' + tagNum).css('display', 'none');
    $('#tag-row-container-pattern-' + tagNum).css('display', 'none');
    $('#tag-row-container-material-' + tagNum).css('display', 'none');
    $('#tag-row-container-garment-' + tagNum).css('display', 'none');
    $('#tag-row-container-price-' + tagNum).css('display', 'none');
    $('#tag-row-container-url-' + tagNum).css('display', 'none');
    // show the clicked row
    $('#tag-row-container-' + rowName + '-' + tagNum).css('display', 'block');
    // remove from active status
    $('#tag-tab-color-' + tagNum).attr('class', 'default');
    $('#tag-tab-brand-' + tagNum).attr('class', 'default');
    $('#tag-tab-pattern-' + tagNum).attr('class', 'default');
    $('#tag-tab-material-' + tagNum).attr('class', 'default');
    $('#tag-tab-garment-' + tagNum).attr('class', 'default');
    $('#tag-tab-price-' + tagNum).attr('class', 'default');
    $('#tag-tab-url-' + tagNum).attr('class', 'default');
    // set as active tab
    $('#tag-tab-' + rowName + '-' + tagNum).attr('class', 'active');

    //hide reset options
    $('#tag-reset-div-color-'+tagNum).css('display', 'none');
    $('#tag-reset-div-brand-'+tagNum).css('display', 'none');
    $('#tag-reset-div-pattern-'+tagNum).css('display', 'none');
    $('#tag-reset-div-material-'+tagNum).css('display', 'none');
    $('#tag-reset-div-garment-'+tagNum).css('display', 'none');

    //show reset option 
    $('#tag-reset-div-'+rowName+'-'+tagNum).css('display', 'block');
}
function tag_show_category_garment_data(categoryName, tagNum, id) {

    // Remove categories menu from being active link
    $('#tag-result-menu-category-garment-clothing-' + tagNum).attr('class', 'default');
    $('#tag-result-menu-category-garment-shoes-' + tagNum).attr('class', 'default');
    $('#tag-result-menu-category-garment-accessories-' + tagNum).attr('class', 'default');
    $('#tag-result-menu-category-garment-bags-' + tagNum).attr('class', 'default');
    $('#tag-result-menu-category-garment-jewelry-' + tagNum).attr('class', 'default');

    // Set category menu as active link
    $('#tag-result-menu-category-garment-' + categoryName + '-' + tagNum).attr('class', 'active-link');

    // hide category
    $('tag-result-container-category-garment-' + tagNum).css('display', 'none');

    // hide all the specific data from category
    $('#tag-result-container-garment-clothing-' + tagNum).css('display', 'none');
    $('#tag-result-container-garment-shoes-' + tagNum).css('display', 'none');
    $('#tag-result-container-garment-accessories-' + tagNum).css('display', 'none');
    $('#tag-result-container-garment-bags-' + tagNum).css('display', 'none');
    $('#tag-result-container-garment-jewelry-' + tagNum).css('display', 'none');

    // show specific data from category
    $('#tag-result-container-garment-' + categoryName + '-' + tagNum).css('display', 'block');

    //hide category menu container
    tag_hide_show('#tag-result-container-garment-'+categoryName+'-'+tagNum, '#tag-result-container-category-garment-'+tagNum);

    //show category image
    tag_show_image_preview(id, 'garment', tagNum); 
}
function tag_hide_show(selector_show, selector_hide, selector_focus) {
    //hide
    $(selector_hide).css('display', 'none');

    //show
    $(selector_show).css('display', 'block');


    //fucos the cursor to field
    $(selector_focus).focus();
}
function tag_add_color_footer(color_html, color_name, tagNum) {

    $('#new-postalook-tagcolor-td' + tagNum).css({'display': 'block', 'background-color': color_html})
}
function tag_show_image_preview(id, rowName, tagNum) {

    $('#tag-color-image-' + rowName + '-' + tagNum).attr('src', 'http://localhost/fs/new_fs/alphatest/fs_folders/images/uploads/brands/' + id + '_brand.jpg');
    $('#tag-color-image-' + rowName + '-' + tagNum).attr('alt', 'Image');
}
function tag_open_garmennt_sub_category(id, tagNum, selector_show, selector_hide) {
    // hide subcategory and show subcategory content
    tag_hide_show(selector_show, selector_hide)

    //show sub category image
    tag_show_image_preview(id, 'garment', tagNum);
}
function tag_reset(name, tagNum) {
    if(name == 'color') {
        tag_reset_color(tagNum);
    } else if (name == 'reset' ) {
    } else {
        tag_reset_items(name, tagNum);
    }
}
function tag_reset_color(tagNum) {
    //reset color text
    $('#tag-list-data-color-'+tagNum).text('');

    //reset all the background color from right container
    $('#tag-selected-color-td-'+tagNum+'-0').attr('style','background-color:#FBFBFB').text('');
    $('#tag-selected-color-td-'+tagNum+'-1').attr('style','background-color:#FBFBFB').text('');
    $('#tag-selected-color-td-'+tagNum+'-2').attr('style','background-color:#FBFBFB').text('');
    $('#tag-selected-color-td-'+tagNum+'-3').attr('style','background-color:#FBFBFB').text('');
    $('#tag-selected-color-td-'+tagNum+'-4').attr('style','background-color:#FBFBFB').text('');

    //reset database input
    $('#tag-color-database-data-color-'+tagNum).val('');
}
function tag_reset_items(name, tagNum) {
    //// Reset the text
    $('#tag-list-data-'+name+'-'+tagNum).text('');

    // Reset the right image preview
    $('#tag-color-image-'+name+'-'+tagNum).attr('src', '');

    //// Reset the database input
    $('#tag-color-database-data-'+name+'-'+tagNum).val('');
}
function tag_is_color_exist(html_color, tagNum) {
    var rgb_input = hexToRgb(html_color);
    for(var i = 0; i<5; i++) {
        if(rgb_input ==  $('#tag-selected-color-td-' + tagNum + '-' + i).css('background-color')) {


            $('#tag-selected-color-td-'+tagNum+'-'+i).css('border', '1px solid rgb(255, 12, 12)');
            alert('duplicate color occur, please select another.');
            return true;
        } else {
            $('#tag-selected-color-td-'+tagNum+'-'+i).css('border', '1px solid #D4D4D4');
        }
    }
    return false;
}
function hexToRgb(hex) {
    hex = hex.replace('#', '');
    var bigint = parseInt(hex, 16);
    var r = (bigint >> 16) & 255;
    var g = (bigint >> 8) & 255;
    var b = bigint & 255;
    return "rgb(" + r + ", " + g + ", " + b + ")";
}




/**
* write cookief
*/

function writeCookie(name,value,days) {
    var date, expires;
    if (days) {
        date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        expires = "; expires=" + date.toGMTString();
            }else{
        expires = "";
    }
    document.cookie = name + "=" + value + expires + "; path=/";
}

/**
* Read Cookie
*/
function readCookie(name) {
    var i, c, ca, nameEQ = name + "=";
    ca = document.cookie.split(';');
    for(i=0;i < ca.length;i++) {
        c = ca[i];
        while (c.charAt(0)==' ') {
            c = c.substring(1,c.length);
        }
        if (c.indexOf(nameEQ) == 0) {
            return c.substring(nameEQ.length,c.length);
        }
    }
    return '';
}