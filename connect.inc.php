<?php

		$host_name='sql12.freemysqlhosting.net:3306';
				$user_name = "sql12208967";
				if(!@mysql_connect($host_name,$user_name,'6YcAwEUWLf') || !@mysql_select_db("sql12208967")){
					die('could not connect');
				}
				
?>