<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "SMS";
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);


	if (!$conn) {
	    die("select SMS connection failed: " . mysqli_connect_error());
    }
    


    $sql = "CREATE TABLE IF NOT EXISTS `notice` (

        `title` VARCHAR(200) NOT NULL,
        `details` VARCHAR(1000) NOT NULL,
        `postedby` VARCHAR(100) NOT NULL,
        `date` DATE NOT NULL,
        `noticeID` VARCHAR(5) NOT NULL,
        
        
        
        PRIMARY KEY (`noticeID`))";

  if(mysqli_query($conn, $sql)){
      echo "Table accelaration created successfully<br>";
  } else {
      echo "Error creating accelaration table: " . mysqli_error($conn). "<br>";
  }


	

  if (isset($_POST["submitButton"])) {
    echo "In button preess";

    $title = $_POST["title"];
    $details = $_POST["details"];
    $postedby = $_POST["postedby"];
    $date = $_POST["date"];
    $noticeID = $_POST["noticeID"];
   


    $s = "SELECT noticeID FROM NOTICE WHERE noticeID = '$noticeID'";
    $result = mysqli_query($conn, $s);
    $num = mysqli_num_rows($result);
 


    if($num == 0){
        


    $query2 = "INSERT INTO `notice`(`title`, `details`, `postedby`, `date`, `noticeID`) 
    VALUES ('$title', '$details','$postedby','$date','$noticeID')";


                if(mysqli_query($conn, $query2)){
                    echo "<script>
                    alert('Your account has been created');
                    </script>";
                } else{
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                }
    }
    else{
        echo "<script>
        alert('This email address already exists in database');
        </script>";
    }

}

	mysqli_close($conn);
?>

<!DOCTYPE php>
<php>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Notice</title>

    <!-- Bootstrap CSS CDN -->

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

            
</head>
<body>
    
    <header>
        <div class="logo">
            <h1 class="logo-text">School Managment System</h1>
        </div>
        <i class="fa fa-bars menu-toggle"></i>
            <ul class="nav">
               
               <li>
                   <a href="#">
                    <i class="fa fa-user"></i>
                   Rakib Hasan
                   <i class="fa fa-chevron-down" style="font-size: .8em"></i>
                   </a>
                    <ul>
                        <li><a href="#">Deshboard</a></li>
                        <li><a href="index.php" class="logout">Logout</a></li>
                    </ul> 
                </li>    
            </ul> 
    </header>
    <section>
        
        <div class="wrapper">
            <div class="sidebar">
            <ul>
                <li><a href="#">Deshboard</a>
                    <ul>
                        <li><a href="admin.php">Admin</a></li>  
                        <li><a href="adminteacher.php">Teachers</a></li>
                        <li><a href="adminstudent.php">Students</a></li>
                        <li><a href="adminparent.php">Parents</a></li>
                    </ul>
                </li>
                <li><a href="#">Students</a>
                    <ul>
                        <li><a href="allstudent.php">All Student</a></li>  
                        <li><a href="admission.php">Admission Form</a></li>
                        
                    </ul>
                </li>
                <li><a href="#">Parents</a>
                    <ul>
                        <li><a href="allparent.php">All Parent</a></li>  
                        <li><a href="addparent.php">Add Parent</a></li>
                    </ul>
                </li>
                <li><a href="#">Teachers</a>
                    <ul>
                        <li><a href="allteacher.php">All Teacher</a></li>  
                        <li><a href="addteacher.php">Add Teachers</a></li>
                        <li><a href="adminroom.php.php">Room Booking</a></li>
                    </ul>
                </li>
    
                <li><a href="#">Class</a>
                    <ul>
                        <li><a href="allclass.php">All Class</a></li>  
                        <li><a href="addclass.php">Add Class</a></li>
                    </ul>
                </li>
    
                <li><a href="#">Exam</a>
                    <ul>
                        <li><a href="examschedule.php">Exam Schedule</a></li>  
                    </ul>
                </li>
                <li><a href="#">Result</a>
                    <ul>
                        <li><a href="allresult.php">All Result</a></li>  
                        <li><a href="addresult.php">Add Result</a></li>
                    </ul>
                </li>
                <li><a href="notice.php">Notice</a></li>
                
                
            </ul> 
    
        </section>


    
    <form method="post">
        <div class="w3-container">
                
            <h1>Add New Notice</h1>
            <div class="w3-input">
                <i class="first name"></i>
                <label class="control-label col-sm-3">Title</label>
                <input type="text" name="title" >
            </div>
            <div class="w3-input">
                <i class="last name"></i>
                <label class="control-label col-sm-3">Details</label>
                <input type="text" name="details" >
            </div>
            
                   
            <div class="w3-input">
                <label class="control-label col-sm-3">Posted By</label>
                <input type="text" name="postedby" >
            </div>  

            <div class="w3-input">     
                <label class="control-label col-sm-3">Date </label>
                <input type="date" name="date" >
            </div>  
            <div class="w3-input">
                <i class="first name"></i>
                <label class="control-label col-sm-3">Notice ID</label>
                <input type="text" name="noticeID" >
            </div>
                    
                    
             <button type="Submit" name="submitButton" class="btn" >Save</button>

        </div> 
            
    </div>
    </form>


    

</body>

</php>