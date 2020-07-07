<?php

function inputElement($icon, $placehouder, $name, $value){
  $ele = "
      <div class=\"input-group mb-2\">
          <div class=\"input-group-prepend\">
          <div class=\"input-group-text bg-warning\">$icon</div>
          </div>
          <input type=\"text\" name='$name' value='$value' autocomplete=\"off\" placeholder='$placehouder' class=\"form-control\" id=\"inlineFormInputGroup\">
        </div>
  ";
  echo $ele;
}
function buttonElement($btnid, $btnstyle,$text,$name,$attr){
  $btn = "
  <button name='$name' '$attr' class='$btnstyle' id='$btnid'>$text</button>
  ";
  echo $btn;
}