<?php
session_start();
include "../../../inc/config.php";

	$id_pilih = $_REQUEST['id_pilih'];
	
	if($id_pilih != ""){
		
	foreach($id_pilih as $row){
		
			$kueri = mysql_query("delete from pages where id_pages = $row");
			
			if($kueri)
			{
				header("location:../../index.php?node=modul/pages/data&sukses");	
			}
	}
	
	}else{
		
		header("location:../../index.php?node=modul/pages/data&warning");
		
	}