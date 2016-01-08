<?php 
  

  //check if you have already a code 
 // if have a code already then redirect to home page
 // else allow to visit this site 
  


?>

  <!DOCTYPE html>
  <html>
    <head>

        <link rel="stylesheet" type="text/css" href="fs_folders/gen_css/gen_style.css"  >
        <link rel="stylesheet" type="text/css" href="fs_folders/gen_css/bootstrap-3.3.6-dist/css/bootstrap.css">  
        <script src="fs_folders/js/angular.min.js"></script>

        <script>
            var app = angular.module('myApp', []);
            app.controller('myCtrl', function($scope, $http) { 
                $http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded"; 
                //Accept the typed text and display keycode
                $scope.add = function(event, type) {
                    $scope.keyword =  "Event = " + event.which;
                    if (event.which === 13 || type == 'submit') { 
      		            $http.post('fs_folders/modals/login/validate-login.php', {sc:$scope.new_todo, type:'signup-code'}).success(function(data){   
                         var myEl = angular.element( document.querySelector( '#divID' ));    
                           if(data.indexOf("successfully") > -1){
                            document.location = 'authenticated';
                          } else {   
                            myEl.html(data);      
                          }  
      		            });
                    }
                }  
            });
        </script>  
    </head> 
    <body style="background: #676767;" >
    <br><br><br><br><br><br><br><br><br>
      <div class="container login-code-container"  >

        <div class="row">
          <div class="col-md-4"> </div>
          <div class="col-md-4" style="border: 1px solid #B1ADAD;background-color: white;border-radius: 5px;">

            <div ng-app="myApp" ng-controller="myCtrl">
                <div>
                  <form class="navbar-form navbar-left" role="search">
                    <div style="color:#225b99;">
                        <p>
                            Please provide fashion sponge code to continue using the site.
                        </p>
                        <p>
                            If you don't have please contact us at <b>brainOfFashion@gmail.com</b>
                        </p>
                    </div>
                    <div class="form-group">
                      <input style="color:#225b99;" type="text" id="enter-code" class="form-control enter-code" placeholder="Add Fashion Sponge Code" ng-model="new_todo" ng-keyup="add($event)"  autocomplete="off"   >
                      <button style="color:#225b99;"  type="submit" class="btn btn-default" ng-click="add($event, 'submit')"  >Submit</button>
                      <div id="divID" style="margin-top: 7px;width: 94%;  " > </div>
                    </div>
                  </form>
                </div>
            </div>

          </div>
          <div class="col-md-4"> </div>
        </div>
      </div>  


       
    </body>



  </html>
