<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Draggable - Constrain movement</title>
  <link rel="stylesheet" href="assets/jquery-ui.css">
  <script src="assets/jquery-1.10.2.js"></script>
  <script src="assets/jquery-ui.js"></script>
  <link rel="stylesheet" href="assets/style.css">
  <style>
  .draggable { width: 90px; height: 90px; padding: 0.5em; float: left; margin: 0 10px 10px 0; }
  #draggable, #draggable2 { margin-bottom:20px; }
  #draggable { cursor: n-resize; }
  #draggable2 { cursor: e-resize; }
  #containment-wrapper { width: 95%; height:150px; border:2px solid #ccc; padding: 10px; }
  h3 { clear: left; }
  </style>
  <script>
  $(function() {
    $( "#draggable" ).draggable({ axis: "y" });
    $( "#draggable2" ).draggable({ axis: "x" });
 
    $( "#draggable3" ).draggable({ containment: "#containment-wrapper", scroll: false });
    $( "#draggable5" ).draggable({ containment: "parent" });
  });
  </script>
</head>
<body>
 
<h3>Constrain movement along an axis:</h3>
 
<div id="draggable" class="draggable ui-widget-content">
  <p>I can be dragged only vertically</p>
</div>
 
<div id="draggable2" class="draggable ui-widget-content">
  <p>I can be dragged only horizontally</p>
</div>
 
<h3>Or to within another DOM element:</h3>
<div id="containment-wrapper">
  <div id="draggable3" class="draggable ui-widget-content">
    <p>I'm contained within the box</p>
  </div>
 
  <div class="draggable ui-widget-content">
    <p id="draggable5" class="ui-widget-header">I'm contained within my parent</p>
  </div>
</div>
 
 
</body>
</html>