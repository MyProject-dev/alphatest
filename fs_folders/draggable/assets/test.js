 

 
 $(function() {  

 
        var tag_id = 1; 
        var x = 0; 
        var y = 0; 

        $( ".draggable" ).draggable(); 
        // $( ".draggable" ).draggable({ containment: "#look_view_img", scroll: true });

        $( ".draggable" ).draggable({ 

          start: function() {
            // alert("clicked start to drag")
            // When dragging start
          },

          drag: function() { 
              // console.log('id number: ' + get_tag_id_number(this)); 
             //  update_position_tag_dropdown(get_tag_id_number(this));

 
            
          },

          stop: function() { 

            console.log("drag stopped"); 

             //update_position_tag_dropdown(get_tag_id_number(this));


              var tag_id = get_tag_id_number(this);

              save_tag_coordinate(parseInt(get_circle_tag_position_X(tag_id)), parseInt(get_circle_tag_position_Y(tag_id)),  get_tag_number(this) );
          }

        });

        function update_position_tag_dropdown(tag_id) {

          var left = parseInt(get_circle_tag_position_X(tag_id)); 
          var top  = parseInt(get_circle_tag_position_Y(tag_id));   
          console.log(  "top " + top + " left " + left + " tag id " + tag_id); 
           // left = parseInt(left)-10;
          update_style_tag_dropdown(top, left, tag_id);
        }

        function update_style_tag_dropdown(top, left, tag_id) {

            var left_1 = left-300; 
            var top_1 = top-750; 


            var left_2 = left-22; 
            var top_2 = top-695; 




            /**
            * Dropdown changes position when tag is dragged.
            */
            // left_1 = (left_1 - 250); 
            // top_1 = (top_1 + 18);
            // $("#table_container_"+tag_id).css('margin-left', left_1);
            // $("#table_container_"+tag_id).css('margin-top', top_1); 
 
            // /**
            // * Position of the x and y tag changes.
            // */
            // left = parseInt(left)+20;
            // top = parseInt(top)-60;
            $(".tag-circle-content-left-"+tag_id).css({'margin-top':top_2, 'margin-left':left_2});
            $(".tag-circle-content-right-"+tag_id).css({'margin-top':top_1, 'margin-left':left_1});


            console.log("top" + top_1  + " left " + left_1);
 
        }
 
        function get_circle_tag_position_X(tag_id) { 

          return $(".tag-circle-"+tag_id).css('left'); 
        }

        function get_circle_tag_position_Y(tag_id) {

          return $(".tag-circle-"+tag_id).css('top'); 
        }

        function get_tag_id(selector) {

             
           return parseInt($(selector).attr("number")); 
        }

        function get_tag_id_number(selector) {

           return parseInt($(selector).attr("number"));
        }

        function get_tag_number(selector) {
          console.log(" tagnumber " + $(selector).attr('tagnumber'));
          return parseInt($(selector).attr('tagnumber'));
        }
        function save_tag_coordinate(x, y, pltno) {
            var x = x+200; 
            var y = y-695; 


            console.log("x = " + x + " y " + y + ' pltno = ' + pltno);


            // Assign handlers immediately after making the request,
            // and remember the jqxhr object for this request
            var jqxhr = $.post( "fs_folders/modals/look/update_tag.php", function(data) {
              // alert( "success" + data);
            })  


            $.post( "fs_folders/modals/look/update_tag.php", { pltno: pltno, x: x, y: y})
            .done(function( data ) {
              // alert( "Data Loaded: " + data );
            })

        }

    }) 







