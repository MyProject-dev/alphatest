 

 
 $(function() {  


        var tag_id = 1; 
        var x = 0; 
        var y = 0; 

        $( ".draggable" ).draggable(); 
        $( ".draggable" ).draggable({ containment: "#containment-wrapper", scroll: false });
        $( ".draggable" ).draggable({ 

          start: function() {

            // When dragging start
          },

          drag: function() { 
              console.log('id number: ' + get_tag_id_number(this)); 
            update_position_tag_dropdown(1);
          },

          stop: function() { 

            // When dragging stopped
          }

        });

        function update_position_tag_dropdown(tag_id) {
          var left = get_circle_tag_position_X(tag_id); 
          var top  = get_circle_tag_position_Y(tag_id);   
          console.log(  "top " + top + " left " + left + " tag id " + tag_id);

           left = parseInt(left)-10;
          update_style_tag_dropdown(top, left, tag_id);
        }

        function update_style_tag_dropdown(top, left, tag_id) {
            $("#table_container_"+tag_id).css('margin-left', left);
            $("#table_container_"+tag_id).css('margin-top', top); 
        }
 
        function get_circle_tag_position_X(tag_id) { 

          return $(".draggable").css('left'); 
        }

        function get_circle_tag_position_Y(tag_id) {

          return $(".draggable").css('top'); 
        }

        function get_tag_id(selector) {

           return $(selector).attr("id"); 
        }

        function get_tag_id_number(selector) {

           return $(selector).attr("id").replace('tag_', ''); 
        }

    }) 