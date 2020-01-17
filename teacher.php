<!DOCTYPE php>
<php>

<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Teacher</title>

    <!-- Bootstrap CSS CDN -->

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/table2.css">
    <link rel="stylesheet" href="css/formt.css">

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
            <li><a href="room.php">Room Booking</a></li>
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
        
        <div class="table">
        <h1> All Students </h1>
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

                <table id="myTable">
                  <tr class="header">
                    
                    <th style="width:5%;" >Name</th>
                    <th >Gender</th>
                    <th >DateOfBirth</th>
                    <th >Religion</th>
                    <th >Roll</th>
                    <th >Blood Group</th> 
                    <th >Email</th>
                    <th >Class</th>
                    <th >Section</th>
                    <th >Phone</th>
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
                    $sql = "SELECT * FROM student ";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>'.$row['first_name']. " " .$row['last_name'].'</td>'; 
                            echo '<td>'.$row['gender'].'</td>';
                            echo '<td>'.$row['date_of_birth'].'</td>';
                            echo '<td>'.$row['religion'].'</td>';
                            echo '<td>'.$row['roll'].'</td>';
                            echo '<td>'.$row['blood_group'].'</td>';
                            echo '<td>'.$row['email'].'</td>'; 
                            echo '<td>'.$row['class'].'</td>'; 
                            echo '<td>'.$row['section'].'</td>'; 
                            echo '<td>'.$row['phone'].'</td>'; 
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
                  for (i = 0; i < tr.lengtd; i++) {
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

    <div class="w3-container3">
            <h1> Notice Board </h1>
        <div class="notice_data">
             <h2>Lorem ipsum dolor sit amet</h2>
             <h4> Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna 
                aliqua.  
            </h4>
            </div>
            <div class="notice_data1">
             <h2>Lorem ipsum dolor sit amet</h2>
             <h4> Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna 
                aliqua.  
            </h4>
            </div>
        </div> 
    

    
    

</body>

</php>