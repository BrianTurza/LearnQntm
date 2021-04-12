<?php
function abc($name){
    echo "done; 5 + 5";
}


// Handle AJAX request (start)
if(isset($_POST['ajax']) ){
    abc();
    exit;
}
// Handle AJAX request (end)
?>

<!doctype html>
<html>
 
 <body >
 
  <form method='post' action="">

   <input type='text' name='name' placeholder='Enter your name' id='name'>
   <input type='submit' value='submit' name='submit'><br>
   <div id='response'></div>
  </form>

  <!-- Script -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
        $("button").click(function(){

            $.ajax({
                type: "POST",
                url: "test-m.php",
                ajax: 1,
                $.post(ajaxurl, data, function (response) {
            // Response div goes here.
            alert("action performed successfully");
        });
    });
   });
});
</script>
 </body>
</html>