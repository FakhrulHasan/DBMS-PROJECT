
 

  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "SMS";
  
  $conn = mysqli_connect($servername, $username, $password, $dbname);
 
  //create accelaration table --------------------------------------------------
  $sql = "CREATE TABLE IF NOT EXISTS `roomdata` (

    
    `room_no` INT(10) NOT NULL,
    `time` VARCHAR(200) NOT NULL,
    `date` VARCHAR(200) NOT NULL,
    
    PRIMARY KEY (`room_no`,`time`,`date`))";

  if(mysqli_query($conn, $sql)){
      echo "Table accelaration created successfully 2<br>";
  } else {
      echo "Error creating accelaration table: " . mysqli_error($conn). "<br>";
  }
  if(isset($_POST["submitButton"]))
  {
    
    //$str=$_POST['submitInputTextArea']; 
  
    $room_data = $_REQUEST["submitInputTextArea"]; 
    $updatedroom_data = str_replace("\n",",",$room_data);
    $pieces = explode(",",$updatedroom_data);
    //echo $pieces[0]; // piece1
    //echo $pieces[1]; // piece2
    //echo "in sunmit button";
    //$query = "INSERT INTO UNIVERSITY (UniversityID,UniversityName, UniversityLand,UniversityOwnLand,UniversityRentLand) VALUES
    //  ('$pieces[0]','$pieces[1]','$pieces[2]','$pieces[3]','$pieces[4]')";
    //  if(mysqli_query($conn, $query)){
  //  echo "Records inserted successfully.";
//} else{
 //   echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
//}
  $result = sizeof($pieces);
  echo $result;
  for($i=0;$i<$result;$i++)
  {
    $value1 = $i;
    $value2 = $i+1;
    $value3 = $i+2;
    
    
    $query = "INSERT INTO roomdata (room_no,time,date) VALUES
     ('$pieces[$value1]','$pieces[$value2]','$pieces[$value3]')";
      $i=$value3;
      if(mysqli_query($conn, $query)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
  }
  echo "\n";
    
    
    
} 
  
      
  //$query = "INSERT INTO UNIVERSITY (University ID,University Name, University Land,University Own Land,University Rent Land) VALUES
  //('1', '2'), ('4', '5') ,('3', '5'),('6', '7'),('2', '4'),('0', '3'),('3', '2')";
  
  //$conn->query($query);
  mysqli_close($conn);
?>


<!DOCTYPE php>
<php>

<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Room</title>

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


        <form method="post">
        <div class="w3-container">
            <div class="form-group">
            <label id="pasteLabel" for="submitInputTextArea">Paste Your Student Input According TO the hint</label>
            
        
            <textarea class="form-control" rows="15" id="submitInputTextArea" name="submitInputTextArea"></textarea>
            </div>
            <button type="submit" class="btn" name= "submitButton" >Submit</button>  
        </div>

    </form>

        
      
    

</body>

</php>