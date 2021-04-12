<!-- let's say this is a sample page 'page_id.html' -->
<html>
<head>
   <!-- include JQuery -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>
   <!-- your page goes here-->
   <!-- then at the END -->
   <script>
   // set the user ID
   var USER_ID = "user_1";
   // set the id of the page in the database
   var PAGE_ID = "time.php";
   // set the timer accuracy - ex. 5 seconds
   var TIMER_ACCURACY = 5000;
   // create the counter function
   (function(UI, PID, TA){
      // cal the PHP file every x seconds
      var I = setInterval(function(){
        // use AJAX so the page doesn't need to reload
        $.ajax({
          method:"post",
          url:"ajax.php", // this is the link to the PHP file
          data:{call:"counter", user_id: UI, page_id:PID}
        })
        .fail() // put some code here if server is unreachable
        .done(); // put some code here to check server response
      }, TA);
   })(USER_ID, PAGE_ID, TIMER_ACCURACY);
   </script>
</body>