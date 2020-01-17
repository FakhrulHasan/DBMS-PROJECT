<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "SMS";
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	

	if (!$conn) {
	    die("select SMS connection failed: " . mysqli_connect_error());
    }
    


    $sql = "CREATE TABLE IF NOT EXISTS `newexam` (

        
        `examID` INT NOT NULL ,
        `examName` VARCHAR(50) NOT NULL,
        `subject` VARCHAR(50) NOT NULL,
        `class` VARCHAR(5) NOT NULL, 
        `section` VARCHAR(50) NOT NULL,
        `time` TIME NOT NULL,
        `date` DATE NOT NULL,
        
        PRIMARY KEY (`examID`))";

  if(mysqli_query($conn, $sql)){
      echo "Table accelaration created successfully<br>";
  } else {
      echo "Error creating accelaration table: " . mysqli_error($conn). "<br>";
  }


	

  if (isset($_POST["submitButton"])) {
    echo "In button preess";

    $examID = $_POST["examID"];
    $examName = $_POST["examName"];
    $subject = $_POST["subject"];
    $class = $_POST["class"];   
    $section = $_POST["section"];
    $time = $_POST["time"];
    $date = $_POST["date"];


    $s = "SELECT examID FROM newexam WHERE examID = '$examID'";
    $result = mysqli_query($conn, $s);
    $num = mysqli_num_rows($result);


    if($num == 0){
        $query = "INSERT INTO newexam (examID,examName,subject,class ,section, time, date)
        VALUES
            ('$examID','$examName','$subject',' $class','$section','$time',' $date',)";
                if(mysqli_query($conn, $query)){
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

    <title>Exam Schedule</title>

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
                        <li><a href="adminroom.php">Add Room</a></li>
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

        </section>

<form method="post">
<div class="w3-container">
        
    <h1>Add New Exam</h1>
    <div class="w3-input">
        <i class="first name"></i>
        <label class="control-label col-sm-3">Exam ID*</label>
        <input type="text" name="examID" >
    </div>
    <div class="w3-input">
        <i class="first name"></i>
        <label class="control-label col-sm-3">Exam Name*</label>
        <input type="text" name="examName" >
    </div>
    <div class="w3-input">
        <label class="control-label col-sm-3">Subject*</label>
        <input type="text" name="subject" >
    </div>
       

    <div class="w3-input">
        <label class="control-label col-sm-3">Class*</label>
        <select name="class">
          <optgroup label="Please Select Class">
            <option value=""></option>
            <option value="Play">Play</option>
            <option value="Nursery">Nursery</option>
            <option value="One">One</option>
            <option value="Two">Two</option>
            <option value="Three">Three</option>
            <option value="Four">Four</option>
            <option value="Five">Five</option>  

          </optgroup>
        </select>
    </div> 

    
    

    <div class="w3-input">
        <label class="control-label col-sm-3">Section*</label>
        <select name="section">
          <optgroup label="Please Select Section">
            <option value=""></option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>

          </optgroup>
        </select>
    </div> 
    <div class="w3-input">
        <label class="control-label col-sm-3">Time*</label>
        <input type="time" name="time" >
        
    </div>
    <div class="w3-input">
        <label class="control-label col-sm-3">Date</label>
        <input type="date" name="date" >
        
    </div>
            
            
    <button type="submit" class="btn" name= "submitButton" >Save</button>       

</div> 
    
</div>
</form>



    

</body>

</php>