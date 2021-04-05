<?php

function quiz($title, $options, $anwser, $selected) {
  global $lang;
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
          <div class="mx-auto mr-sm-5"> <button name="submit" type="submit" class="btn btn-success-q">'.$lang['LEARN_SUBMIT'].'</button> </div>
        </div>
      </div>';
      if ($selected != '' and $anwser == $options[$selected - 1]) {
          echo '<span style="color:green; margin-left:24%">'.$lang['LEARN_CORRECT'].'</span>';
      } elseif ($selected != '' and $anwser != $options[$selected - 1]) {
        echo '<span style="color:red; margin-left:24%">'.$lang['LEARN_WRONG'].'</span>';
      }
      echo '</div><br><br>';
    return $anwser;
}
function time_elapsed_string($datetime, $full = false) {
  date_default_timezone_set("Europe/Bratislava");
  $now = new DateTime;
  $ago = new DateTime($datetime);
  $diff = $now->diff($ago);

  $diff->w = floor($diff->d / 7);
  $diff->d -= $diff->w * 7;

  $string = array(
      'y' => 'year',
      'm' => 'month',
      'w' => 'week',
      'd' => 'day',
      'h' => 'hour',
      'i' => 'minute',
      's' => 'second',
  );
  foreach ($string as $k => &$v) {
      if ($diff->$k) {
          $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
      } else {
          unset($string[$k]);
      }
  }

  if (!$full) $string = array_slice($string, 0, 1);
  return $string ? implode(', ', $string) . ' ago' : 'just now';
}

function codeExecute($sampleCode, $submitedCode, $functionName, $functionParam, $samples) {
  global $lang;
  $counted_tests = 0;
  $header_code = "#!/usr/bin/env python3
import sys\n";
  $footer_code = "
if __name__ == '__main__':
  print(globals()[sys.argv[1]](int(sys.argv[2])), end='')";
  $code = str_replace('\n', "\n", $submitedCode);
  $fp = fopen('code.py', 'w+');
  fwrite($fp, $header_code);
  fwrite($fp, $code);
  fwrite($fp, $footer_code);
  fclose($fp);
  foreach($samples as $key => $value) {
    $output = shell_exec(escapeshellcmd('./../../../virtualenv/public_html/ide/3.7/bin/python3 code.py '.$functionName.' '.$key));

    if ($output != $value) {
      return array($output, "wrong", $lang['LEARN_COMPILED_WRONG']. $counted_tests. " / ".count($samples));
    } 
    $counted_tests += 1;
  }
  if ($counted_tests == count($samples)) {
    return array($output, "ok", $lang['LEARN_COMPILED_SUCCESS']);
  }
  
}
/*
$code = 'def dec2bin(n):
  #'.$lang['LEARN_YOUR_CODE'].'
  pass';
if (isset($_POST['submit_code'])) {
  $header_code= "#!/usr/bin/env python3
import sys\n";
  $footer_code = "
if __name__ == '__main__':
  print(globals()[sys.argv[1]](int(sys.argv[2])))  
";
$code = str_replace('\n', "\n", $_POST['code']);
  $fp = fopen('code.py', 'w+');
  fwrite($fp, $header_code);
  fwrite($fp, $code);
  fwrite($fp, $footer_code);
  fclose($fp);
  $output = shell_exec(escapeshellcmd('./../../../virtualenv/public_html/ide/3.7/bin/python3 code.py dec2bin 5'));
  echo $code;
  echo "\n".$output;*/
?>