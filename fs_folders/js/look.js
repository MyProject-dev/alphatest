run();    
function run() { 
	console.log('look.js started ...');
}    

function destroy_look(id) {     
	$.post( "fs_folders/modals/look/destroy.php", {id: id}) 
    .done(function( data ) { 
         $('.postedlooks-'+id).css('display','none');
    }); 
}