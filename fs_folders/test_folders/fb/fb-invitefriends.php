<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
    <body>
        <div id="fb-root"></div>
        <script type="text/javascript" src="http://connect.facebook.net/en_US/all.js"></script>
        <script type="text/javascript">
            FB.init({
				// appId: '375477082499399', 
                appId: '528594163842974', 
				cookie: true,
				status: true, 
				xfbml: true
			});
        </script>
 
    <fb:serverFbml style="width: 500px;">
        <script type="text/fbml">
            <fb:fbml>
 
                    <fb:is-logged-out>
                        <fb:else>
                            <fb:request-form content="Join me on foursquare! It's the best way to meetup with friends and discover new places. &lt;fb:req-choice url='http://anandafit.info' label='Join foursquare!' /&gt;" type="foursquare" invite="true" method="POST" action="http://anandafit.info">
                                <fb:multi-friend-selector showborder="false" cols="5" rows="3" exclude_ids="721781462" actiontext="Invite your friends to foursquare."></fb:multi-friend-selector>
                            </fb:request-form>
                        </fb:else>
                    </fb:is-logged-out>
 
            </fb:fbml>
        </script>
    </fb:serverFbml>
</body>
</html>