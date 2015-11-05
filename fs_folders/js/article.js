run();    
function run() { 
	console.log('article.js started ...');
}    

function destroy_article(id) {     
	$.post( "fs_folders/modals/article/destroy.php", {id: id}) 
    .done(function( data ) { 
        $('.fs_postedarticles-'+id).css('display','none');
    }); 
}