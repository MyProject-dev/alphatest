(function($) {


    sessionStorage.setItem('total_selected_style', 0);
    sessionStorage.setItem('total_selected_topic', 0);

    $.fn.cslide = function() {

        this.each(function() {

            var slidesContainerId = "#"+($(this).attr("id"));

            var len = $(slidesContainerId+" .cslide-slide").size();     // get number of slides
            var slidesContainerWidth = len*100+"%";                     // get width of the slide container
            var slideWidth = (100/len)+"%";                             // get width of the slides

            // set slide container width
            $(slidesContainerId+" .cslide-slides-container").css({
                width : slidesContainerWidth,
                visibility : "visible"
            });

            // set slide width
            $(".cslide-slide").css({
                width : slideWidth
            });

            // add correct classes to first and last slide
            $(slidesContainerId+" .cslide-slides-container .cslide-slide").last().addClass("cslide-last");
            $(slidesContainerId+" .cslide-slides-container .cslide-slide").first().addClass("cslide-first cslide-active");

            // initially disable the previous arrow cuz we start on the first slide
            $(slidesContainerId+" .cslide-prev").addClass("cslide-disabled");

            // if first slide is last slide, hide the prev-next navigation
            if (!$(slidesContainerId+" .cslide-slide.cslide-active.cslide-first").hasClass("cslide-last")) {
                $(slidesContainerId+" .cslide-prev-next").css({
                    display : "block"
                });
            }

            // handle the next clicking functionality
            $(slidesContainerId+" .cslide-next").click(function(){

                // required field first name, last name, user name, blog name, blog url, gender, are you a plus size blogger
                if(validate_about()) {
                    var i = $(slidesContainerId + " .cslide-slide.cslide-active").index();
                    var n = i + 1;
                    var next = true;

                        if(next) {
                            var about = '&fname='+$('#fname').val()+'&lname='+$('#lname').val()+'&uname='+$('#uname').val()+'&bname='+$('#bname').val()+'&burl='+$('#burl').val()+'&gender='+$('#gender').val()+'&plus_blogger='+$('#plus-blogger').val();
                            var brand = $("#welcome-brand-field").val();
                            var topic = $("#welcome-topic-field").val(); 
                            var fname = $('#fname').val();
                            var lname = $('#lname').val();
                            var uname = $('#uname').val();
                            var bname = $('#bname').val();
                            var burl = $('#burl').val();
                            var gender = $('#gender').val();
                            var plus_blogger = $('#plus-blogger').val();

                            // Assign handlers immediately after making the request,
                            // and remember the jqxhr object for this request
                            //Change this to post
                            $.post( "fs_folders/modals/welcome/save.php", { 
                                'fname': fname,
                                'lname': lname,
                                'uname': uname,
                                'bname': bname,
                                'burl': burl,
                                'gender': gender,
                                'plus_blogger': plus_blogger,
                                'about': about,
                                'brand': brand,
                                'topic': topic 
                            })
                            .done(function( data ) {
                                // alert('done');
                                  if($("#welcome-about-avatar-crop-input").is(":checked")){
                                    // console.log('Allow crop.');
                                    $("#upload-profile-pic").attr("action", "profile_crop_display.php");
                                } else {
                                    // console.log('Do not allow crop.');
                                    $("#upload-profile-pic").attr("action", "profile_crop_display.php?type=welcome");
                                } 
                                $( "#upload-profile-pic" ).submit(); 
                            });
                            /**
                             * Remove this return if you want to to proceed to the next page
                             */
                            return true;

                        } else {
                        }

                    if(next) {
                        var slideLeft = "-" + n * 100 + "%";
                        if (!$(slidesContainerId + " .cslide-slide.cslide-active").hasClass("cslide-last")) {
                            $(slidesContainerId + " .cslide-slide.cslide-active").removeClass("cslide-active").next(".cslide-slide").addClass("cslide-active");
                            $(slidesContainerId + " .cslide-slides-container").animate({
                                marginLeft: slideLeft
                            }, 250);
                            if ($(slidesContainerId + " .cslide-slide.cslide-active").hasClass("cslide-last")) {
                                $(slidesContainerId + " .cslide-next").addClass("cslide-disabled");
                            }
                        }
                        if ((!$(slidesContainerId + " .cslide-slide.cslide-active").hasClass("cslide-first")) && $(".cslide-prev").hasClass("cslide-disabled")) {
                            $(slidesContainerId + " .cslide-prev").removeClass("cslide-disabled");
                        }

                        // start validation for hide
                        if(i == 0) {
                            //if 0 hide 0 and 2 show 1
                            $('#welcome-slide-container-0').css({'height':'200px', 'visibility':'hidden'});
                            $('#welcome-slide-container-1').css({'height':'auto', 'visibility':'visible'});
                            $('#welcome-slide-container-2').css({'height':'200px', 'visibility':'hidden'});
                            // console.log('next if 0 hide 0 and 2 show 1');
                        } else if (i == 1) {
                            // if 1 hide 0 and 1 show 2
                            $('#welcome-slide-container-0').css({'height':'200px', 'visibility':'hidden'});
                            $('#welcome-slide-container-1').css({'height':'200px', 'visibility':'hidden'});
                            $('#welcome-slide-container-2').css({'height':'auto', 'visibility':'visible'});
                            // console.log('next if 1 hide 0 and 1 show 2');
                        }
                    }
                }



            });

            // handle the prev clicking functionality
            $(slidesContainerId+" .cslide-prev").click(function(){



                var i = $(slidesContainerId+" .cslide-slide.cslide-active").index();
                var n = i-1;
                var slideRight = "-"+n*100+"%";
                if (!$(slidesContainerId+" .cslide-slide.cslide-active").hasClass("cslide-first")) {
                    $(slidesContainerId+" .cslide-slide.cslide-active").removeClass("cslide-active").prev(".cslide-slide").addClass("cslide-active");
                    $(slidesContainerId+" .cslide-slides-container").animate({
                        marginLeft : slideRight
                    },250);
                    if ($(slidesContainerId+" .cslide-slide.cslide-active").hasClass("cslide-first")) {
                        $(slidesContainerId+" .cslide-prev").addClass("cslide-disabled");
                    }
                }
                if ((!$(slidesContainerId+" .cslide-slide.cslide-active").hasClass("cslide-last")) && $(".cslide-next").hasClass("cslide-disabled")) {
                    $(slidesContainerId+" .cslide-next").removeClass("cslide-disabled");
                }


                console.log(
                    // 'slide clicked next | slide number = ' + i
                );
                setBullet(i);

                // start validation hide when not displayed
                // console.log('next i = ' + i);
                if(i == 1) {
                    //if 1 hide 1 and 2 show 0
                    $('#welcome-slide-container-0').css({'height':'auto', 'visibility':'visible'});
                    $('#welcome-slide-container-1').css({'height':'200px', 'visibility':'hidden'});
                    $('#welcome-slide-container-2').css({'height':'200px', 'visibility':'hidden'});

                    // console.log('prev if 1 hide 1 and 2 show 0');
                } else if (i == 2) {

                    //if 2 hide 2 and 0 show 1
                    $('#welcome-slide-container-0').css({'height':'200px', 'visibility':'hidden'});
                    $('#welcome-slide-container-1').css({'height':'auto', 'visibility':'visible'});
                    $('#welcome-slide-container-2').css({'height':'200px', 'visibility':'hidden'});

                    // console.log('prev if 2 hide 2 and 0 show 1');
                }
            });


        });


        // return this for chainability
        return this;
    }

    function setBullet(i) {
        //alert(i);
    }

    function validate() {
        // validate all the fields and the file input here if success then return true else return false.
        return true;
    }


    function change_color(id, color) {  
        $(id).css('border', '1px solid ' + color); 
    }



    function validate_about() {

        var fname        = $('#fname').val();
        var lname        = $('#lname').val();
        var uname        = $('#uname').val();
        var bname        = $('#bname').val();
        var burl         = $('#burl').val();
        var gender       = $('#gender').val();
        var plus_blogger = $('#plus-blogger').val();
 
        //Change color to grey
        change_color('#fname', '#CCCCCC'); 
        change_color('#lname', '#CCCCCC');
        change_color('#uname', '#CCCCCC');
        change_color('#bname', '#CCCCCC');
        change_color('#burl', '#CCCCCC');
        change_color('#gender', '#CCCCCC'); 
        change_color('#plus-blogger', '#CCCCCC');


        if (fname == '') {
             change_color('#fname', 'red'); 
            alert('First name required.');
            return 0;

        } else if (lname == '') {
            change_color('#lname', 'red');
            alert('Last name required.');
            return 0;

        } else if (uname == '') {
            change_color('#uname', 'red');
            alert('User name required.');
            return 0;

        } else if (bname == '') {
            change_color('#bname', 'red');
            alert('Blog name required.');
            return 0;

        } else if (burl == '') {
            change_color('#burl', 'red');
            alert('Blog url required.');
            return 0;

        } else if(gender == 'Gender') {
            change_color('#gender', 'red');  
            alert('Gender required');
            return 0;

        } else if (plus_blogger == 'Are you a plus size blogger?') {
            change_color('#plus-blogger', 'red');
            alert('Are you a plus size blogger required.');
            return 0;

        }  else {

            return 1;
        }
    }

    function validate_style() {

        var total = sessionStorage.getItem('total_selected_style');

        if(total >= 5) {
            return 1;
        } else {
            alert('Please select atleast 5 style.');
            return 0;
        }
    }

    function validate_topic() {

        var total = sessionStorage.getItem('total_selected_topic');

        if(total >= 5) {
            return 1;
        } else {
            alert('Please select atleast 5 topic.');
            return 0;
        }
    }

}(jQuery));

