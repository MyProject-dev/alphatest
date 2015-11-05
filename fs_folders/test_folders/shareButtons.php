 

<html>
  <head>
    <title> </title>
    <?php $sab = new share_apis_buttons(); ?>

    <table border="1" >  
            <td> Google  </td> <td> <?php $sab->button_api_google( ); ?> </td>
        <tr>    
            <td> Facebook </td> <td> <?php $sab->button_api_facebook( ); ?> </td>
        <tr>
            <td> Twitter  </td> <td> <?php $sab->button_api_twitter( ); ?> </td>


    </table>
  </head>
  <body>




  

    <?php 
 
        class share_apis_buttons
        {
            
            public function button_api_google( )
            {
                ?>

                <!-- Place this tag where you want the +1 button to render. -->
				<div class="g-plusone" data-annotation="none"></div>

				<!-- Place this tag after the last +1 button tag. -->
				<script type="text/javascript">
				  (function() {
				    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
				    po.src = 'https://apis.google.com/js/plusone.js';
				    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
				  })();
				</script>



                <?php    
            } 
            public function button_api_facebook( )
            {
                ?>
                <a href="#" 
                  onclick="
                    window.open(
                      'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('http://fashionsponge.com/betatestnew/home'), 
                      'facebook-share-dialog', 
                      'width=626,height=436'); 
                    return false;">
                   
                </a>
                <?php 
            }
            public function button_api_twitter( )
            {
                ?>
                <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://fashionsponge.com/betatestnew/invite" data-count="none">Tweet</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

                <?php
            }
        }


    ?>










  </body>
</html>
 