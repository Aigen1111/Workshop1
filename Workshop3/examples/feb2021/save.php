<?php
require('functions.php');


if($_REQUEST['firstName']) {

  //get each field and insert to the database
  $user['firstName'] = $_REQUEST['firstName'];
  $user['lastName'] = $_REQUEST['lastName'];
  $user['email'] = $_REQUEST['email'];
  $user['phone'] = $_REQUEST['province'];
  saveUser($user);

}