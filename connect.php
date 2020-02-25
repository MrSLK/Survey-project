<?php

include 'conn.php';

if(isset($_POST['submit']))
{
  $name = "/^[a-zA-Z- ]+$/";
	$name1 = "/^[a-zA-Z0-9-_]+$/";
	$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
	$number = "/^[0-9]+$/";

  $surname = $_POST['surname'];
  $first_name = $_POST['first_name'];
  $contactNum = $_POST['contactNum'];
  $dates = $_POST['dates'];
  $age = $_POST['age'];
  $food = $_POST['food'];
  $eatOut = $_POST['eatOut'];
  $movies = $_POST['movies'];
  $tv = $_POST['tv'];
  $radios = $_POST['radios'];


  if(!preg_match($name,$surname))
  {
			echo 'Invalid Surname Entered';
			header('location: Form.php');
			exit();
	}

  if(!preg_match($name,$first_name))
  {
			echo 'Invalid First Name Entered';
			header('location: Form.php');
			exit();
	}
	if(!preg_match($number,$contactNum))
  {
			echo 'Invalid Contact number Format';
			header('location: Form.php');
			exit();
	}
	if(!preg_match($number,$age))
  {
			echo 'Invalid Age Number';
			header('location: Form.php');
			exit();
  
    }


  $conn = $pdo->open();

  try
  {
    $stmt = $conn->prepare("INSERT INTO customer (surname, first_name, contactNum, dates, age, food, eatOut, movies, tv, radio)
     VALUES (:surname, :first_name, :contactNum, :dates, :age, :food, :eatOut, :movies, :tv, :radios);");
    $stmt->execute(['surname'=>$surname, 'first_name'=>$first_name, 'contactNum'=>$contactNum, 'dates'=>$dates, 'age'=>$age, 'food'=>$food, 'eatOut'=>$eatOut, 'movies'=>$movies, 'tv'=>$tv, 'radios'=>$radios]);
    
    $userID = $conn->lastInsertId();
    
    echo "<script type='text/javascript'>alert('Form filled successfully');</script>";
    echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
  }
  catch(PDOException $e)
  {
		echo $e->getMessage();
    
	}
  $pdo->close();

 
  
}
else
{
  echo "Database not linked";
}

 ?>