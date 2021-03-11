<?php

function quiz($title, $options, $anwser, $selected) {
  $count = 0;
    echo '
<div class="container-q mt-sm-5 my-1 mx-auto" style="border: 1px solid #ccc">
  <div class="question ml-sm-5 pl-sm-5 pt-2">
    <div class="py-2 h5"><b>'.$title.'</b></div>
    <div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3" id="options">';
    foreach ($options as $q) {
        $check = '';
        $count += 1;
        if  ($count == $selected) {
          $check = "checked='checked'";
        }
        echo '<label style="font-weight: 400" class="options">'.$q.'<input value="'.$count.'" style="display: none" type="radio" name="radio" '.$check.'><span class="checkmark-q"></span></label>';
    } echo'</div>
        <div class="d-flex align-items-center pt-3">
          <div class="mx-auto mr-sm-5"> <button name="submit" type="submit" class="btn btn-success-q">Check</button> </div>
        </div>
      </div>';
      if ($selected != '' and $anwser == $options[$selected - 1]) {
          echo '<span style="color:green; margin-left:24%">Correct!</span>';
      } elseif ($selected != '' and $anwser != $options[$selected - 1]) {
        echo '<span style="color:red; margin-left:24%">Incorrect. Please try again</span>';
      }
      echo '</div><br><br>';
    return $anwser;
}
?>