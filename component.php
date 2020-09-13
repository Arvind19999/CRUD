<?php 
function formElement($name,$icon,$placeholder){
    $ele =
     "<div class=\"input-group mb-3\">
    <div class=\"input-group-prepend\">
      <span class=\"input-group-text bg-warning\" id=\"basic-addon1\">$icon</span>
    </div>
    <input type=\"text\" name = '$name' class=\"form-control\" placeholder='$placeholder' aria-label=\"Username\" aria-describedby=\"basic-addon1\">
  </div>";
  echo $ele;
}

function buttonElement($name,$icon,$btn_class,$tooltipname){
    $ele =
     "<button name ='$name' class='$btn_class'  data-toggle=\"tooltip\" data-placement=\"bottom\" title='$tooltipname'>$icon</button>";
  echo $ele;
}
?>