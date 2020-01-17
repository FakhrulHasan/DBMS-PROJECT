
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "SMS";
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	

	if (!$conn) {
	    die("select SMS connection failed: " . mysqli_connect_error());
    }
    


    $sql = "CREATE TABLE IF NOT EXISTS `room` (

        `teacher_name` VARCHAR(50) NOT NULL,
        `room_no` INT(10) NOT NULL,
        `class` VARCHAR(5) NOT NULL,
        `subject` VARCHAR(50) NOT NULL,
        `section` VARCHAR(50) NOT NULL,
        `time` VARCHAR(50) NOT NULL,
        `date` VARCHAR(50) NOT NULL,
        `phone` VARCHAR(11) NOT NULL,
        
        PRIMARY KEY (`room_no`,`date`))";

   if(mysqli_query($conn, $sql)){
       echo "Table accelaration created successfully<br>";
   } else {
       echo "Error creating accelaration table: " . mysqli_error($conn). "<br>";
  }


	

  if (isset($_POST["submitButton"])) {
    echo "In button preess";

    $teachername = $_POST["teacherName"];
    $room_no = $_POST["roomNo"];
    $class = $_POST["class"];
    $subject = $_POST["subject"];
    $section = $_POST["section"];
    $time = $_POST["time"];
    $date = $_POST["date"];
    $phone = $_POST["phoneNumber"];

    $s = "SELECT room_no, date FROM room WHERE room_no = '$room_no' AND date = '$date' ";
    $result = mysqli_query($conn, $s);
    $num = mysqli_num_rows($result);


    if($num == 0){
        $query = "INSERT INTO room (teacher_name, room_no,class, subject,section, time, date,phone)
        VALUES
            ('$teachername','$room_no',' $class','$subject','$section','$time',' $date','$phone')";
                if(mysqli_query($conn, $query)){
                    echo "<script>
                    alert('Your data has been inserted');
                    </script>";
                } else{
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                }
    }
    else{
        echo "<script>
        alert('This room is already booked');
        </script>";
    }

    echo $date;
    $s = "DELETE FROM `roomdata` WHERE room_no = '$room_no' AND time = '$time' AND date = '$date'  ";
    echo $s;
    if(mysqli_query($conn, $s)){
        echo "Table accelaration created successfully<br>";
    } else {
        echo "Error creating accelaration table: " . mysqli_error($conn). "<br>";
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

    <title>Room Booking</title>

    <!-- Bootstrap CSS CDN -->

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/room.css">

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

        
        <form method="post">
        <div class="w3-container">
                
            <h1>Book Your Room</h1>
            <div class="w3-input">
                <i class="first name"></i>
                <label class="control-label col-sm-3">Teacher Name*</label>
                <input type="text" name="teacherName" >
            </div>
             
                   
            <div class="w3-input">
                <label class="control-label col-sm-3">Room No*</label>
                <input type="number" name="roomNo" >
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
                <label class="control-label col-sm-3">Subject*</label>
                <input type="text" name="subject" >
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
                <select name="time">
                  <optgroup label="Please Select Section">
                    <option value=""></option>
                    <option value="01:31 PM-03:00 PM">01:31 PM-03:00 PM</option>
                    <option value="08:30 PM-10:00 PM">08:30 PM-10:00 PM</option>
                    <option value="10:05 PM-11:00 PM">10:05 PM-11:00 PM</option>

                  </optgroup>
                </select>
            </div>
            <div class="w3-input">
                <label class="control-label col-sm-3">Date</label>
                <input type="text" name="date" placeholder="DD-MM-YY">
                
            </div>
                    
                    
            <div class="w3-input">
                <label for="phoneNumber">Phone number </label>     
                <input type="phoneNumber" name="phoneNumber">            
            </div>
                    
            <button type="submit" class="btn" name= "submitButton" >Submit</button>       

        </div> 
            
    </div>
</form>

<section>
        
        <div class="table">
            
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for rooms.." title="Type in a name">

                <table id="myTable">
                  <tr class="header">
                    <th >Room No</th>
                    <th >Time </th>
                    <th >Date</th>
                    
                  </tr>

                  
                    <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "SMS";
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "SELECT * FROM roomdata";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>'.$row['room_no'].'</td>'; 
                            echo '<td>'.$row['time'].'</td>'; 
                            echo '<td>'.$row['date'].'</td>'; 
                            echo '</tr>';
                        }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                    ?>
                  
                </table>

                <script>
                function myFunction() {
                  var input, filter, table, tr, td, i, txtValue;
                  input = document.getElementById("myInput");
                  filter = input.value.toUpperCase();
                  table = document.getElementById("myTable");
                  tr = table.getElementsByTagName("tr");
                  for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName("td")[0];
                    if (td) {
                      txtValue = td.textContent || td.innerText;
                      if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                      } else {
                        tr[i].style.display = "none";
                      }
                    }       
                  }
                }
                </script>

        </div>

    </section>
    

</body>

</php>