		var s=1;
		var t;
		var state='play';
		var nos=6;
		var w=0;
		var interval=500;
		function navigate(state){

			 
			if(state=="next"){

			 	// alert(" next1 ") 

				if(w>783*(nos-1)*(-1)){
					getID("nav_span_"+s).style.background="#d1cfcf";
					getID("nav_text_"+s).style.color="#d1cfcf"; 
					if (s==nos) {
						s=1;
					}else{
						s++;
					} 
					getID("nav_text_"+s).style.color="white";
					getID("nav_span_"+s).style.background="white"; 

					$("#tab_slide").animate({
						left:w+783/2
						}
						,200,function (){ 
							w=w-783; 
							$("#tab_slide").animate({
								left:w 
								},interval
							); 
						} 
					); 
				} else { 
					w=0;
					$("#tab_slide").animate({
						left:w
						},2000
					);

					getID("nav_text_"+s).style.color="#d1cfcf";
					getID("nav_span_"+s).style.background="#d1cfcf";
					s=1;
					getID("nav_text_"+s).style.color="white";
					getID("nav_span_"+s).style.background="white";
				} 
			} else{ 
				getID("nav_text_"+s).style.color="#d1cfcf";
				getID("nav_span_"+s).style.background="#d1cfcf";

			 	if (s==1) { 
					s=nos;
				}else{
					s--; 
				}
				getID("nav_text_"+s).style.color="white";
				getID("nav_span_"+s).style.background="white";

				if(w<0){ 
					$("#tab_slide").animate({
						left:w-783/2
						},200,function (){
							w=w+783;
							$("#tab_slide").animate({
								left:w
								},interval
							);
						}
					);
				} else { 
					w=783*(nos-1)*(-1);
					$("#tab_slide").animate({
						left:w
						},2000
					);
				}
			} 

		}
		function PlayPause(){
			// alert("play");
			if(state=='play'){
				state='pause';
				clearInterval(t);
				getID("PlayPause").src="twms/images/btn_play.png";
			}else{
				state='play';
				navigate("next");
				t=setInterval(function (){navigate("next")},6000);
				getID("PlayPause").src="twms/images/btn_pause.png";
			}
		}
		
		function navigate_text(slide){
			 
			state='pause';
			getID("nav_text_"+s).style.color="#d1cfcf";
			getID("nav_span_"+s).style.background="#d1cfcf";
			if(slide!=1){
				s=slide-1;
				w=783*(slide-2)*(-1);
			}else{
				s=0;
				w=783;
			}
			clearInterval(t);
			getID("PlayPause").src="twms/images/btn_play.png";
			navigate("next");
		
		}
		
		function getID(id){
			return document.getElementById(id);
		} 
		
 
		/* 
			function auto_next1( ) {
				navigate("next");   
				setTimeout(function(){auto_next2()},10000);
			}
			function auto_next2( ) {
				navigate("next");   
				setTimeout(function(){auto_next1()},10000);
			} 
			setTimeout(function(){auto_next1()},10000); 
			// t=setInterval(function (){auto_next("next")},2000);
		*/
