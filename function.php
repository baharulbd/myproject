<?php 
//Data Insert for Pdo
	function Send_Data($db, $id, $name, $possition, $salary, $address, $phone_number){
		 $db->query("INSERT INTO members (id, name, possition, salary, address, phone_number)
        VALUES ('$id', '$name', '$possition', '$salary', '$address', '$phone_number')");
	}
	 echo "SuccessFully";
 ?> 

