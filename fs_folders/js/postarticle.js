$(document).ready(function() {


    // alert('working');
    // $('body').onmousemove(function(){
    //     console.log('change content'); 
    // })

});


function suggest_article_topic(response, fileName, loader, container, textFieldId) {    


	console.log('searching ' + fileName);
	var data = "?search="+$('#'+textFieldId).val();
    var category = $('#postarticle-change-category').val();
    data = data + '&category='+category;
	console.log(data);
	$('#'+container).css({'display':'block'}); 	
	$( '#'+loader  ).css({'display':'block'});     // show loader after the process happend


	 //$( '#'+response ).load( 'fs_folders/modals/postarticle/'+fileName+'.php'+data  , function(d) {      // send data
    //    $( '#'+loader  ).css({'display':'none'});     // hide loader after the process happend
    //     //console.log(d);
    //});


    // Assign handlers immediately after making the request,
// and remember the jqxhr object for this request
    var jqxhr = $.get(  'fs_folders/modals/postarticle/'+fileName+'.php'+data , function(d) {

        $( '#'+loader  ).css({'display':'none'});     // hide loader after the process happend
        //     //console.log(d);
        //alert( "success" );
        //document.getElementById(response).innerHtml = d;

        $( '#'+response ).html(d);
    }) 
}


$(document).ready(function(){
    $('.postarticle-title-and-link-td, #postarticle-text-editor-container').click(function(){
        console.log('table container clicked');
        $('#autocomplete-dropdown-container-occasion-1, #autocomplete-dropdown-container-season-1').css('display', 'none');
    });
});

 
