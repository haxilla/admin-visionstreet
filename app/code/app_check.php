<?php

//check post
$renderFrom=$_POST['renderFrom'];

//clear
$data=null;
$value=null;

//check for value
if(isset($_POST['value'])){
  $value=$_POST['value'];}

//should it use an app file?
if(isset($_POST['isapp'])){
  $renderURL = str_replace(".", "/",$renderFrom);
  include(app_path().'/'.$renderURL.'.php');}