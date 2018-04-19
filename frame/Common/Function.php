<?php
function p($value)
{
	echo '<pre>';
	print_r($value);
}
function in($data,$force=true)
{
	if(is_string($data)){
		$data=trim(htmlspecialchars($data));//防止被挂马，跨站攻击
		if(($force==true)||(!get_magic_quotes_gpc())) {
		   $data = addslashes($data);//防止sql注入
		}
		return  $data;
	} else if(is_array($data)) {
		foreach($data as $key=>$value){
			 $data[$key]=in($value,$force);
		}
		return $data;
	} else {
		return $data;
	}
}
function alert($msg)
{
	echo '<script>alert("'.$msg.'");</script>';
}
function jumpurl($url)
{

    echo "<script>window.location.href='/".$url."'</script>";
    exit;
}