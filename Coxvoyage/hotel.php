
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <style type="text/css">
     * {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}


/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #000000;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}


.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
 </style>

</head>
<body style="background-color:skyblue;">

<h2>Provided Hotels</h2>
<div>
  <input type="text" name="" placeholder="Enter Hotel name" id="searchhotel" size="35">
</div>
<div id="hotelresult">
  
</div>

<br>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#searchhotel').keyup(function(){
        var txt = $(this).val();
        if (txt != '') {
          load_hotel(txt);
        }else{
          load_hotel()
        }
      });;
      load_hotel();
    function load_hotel(txt)
     {
      $.ajax({
       url:"ajax/hotellistlist.php",
       method:"POST",
       data:{txt:txt},
       success:function(data)
       {
        $('#hotelresult').html(data);
       }
      });
     }

    })
  </script>
</body>
</html> 