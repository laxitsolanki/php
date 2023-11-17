<?php
function add_date($givendate,$day=0,$mth=0,$yr=0){
	$cd = strtotime($givendate);
	$newdate = date('y-m-d h:i:s' , mktime(date('h',$cd),
	date('i',$cd), date('s',$cd), date('m',$cd)+$mth,
	 date('d',$cd)+$day, date('y',$cd)+$yr));
return $newdate;
}
echo add_date(2013-10-2);
?>