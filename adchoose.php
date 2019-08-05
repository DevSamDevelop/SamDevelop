<?php
//1=adcolony,2=mobvista,3=leadbolt
$result="2";
$ret_class=new StdClass;
$ret_class->result=$result;
$myjson=json_encode($ret_class);
echo $myjson;

?>