<!DOCTYPE php>
<php>

<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin</title>

    <!-- Bootstrap CSS CDN -->

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form1.css">

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

        <div class="w3-container">
             <div class="data">
             <h4>Students</h4>
             <h1> 10000 </h1>
            </div>
            
        </div> 
        <div class="w3-container1">
                
        <div class="data">
             <h4>Teachers</h4>
             <h1> 1534 </h1>
            </div>
        </div> 
        <div class="w3-container2">
                
        <div class="data">
             <h4>Parents</h4>
             <h1> 7056 </h1>
            </div>
        </div>

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