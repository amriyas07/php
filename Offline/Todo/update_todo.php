<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mr DeenBro</title>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+GB+S:ital,wght@0,100..400;1,100..400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="stylesheet" href="css/addTsk.css">
</head>
<body>
<?php 
require_once("../Database/db_connection.php");
$id = $_GET['id'];
$sql = "SELECT * FROM tasks where id=$id";
$data = $conn->query($sql);
$datavalue = $data->fetch_assoc();
?>
    <section id="master">
        <div id="left">
            <div class="logo">Mr DeenBr<span id="logo-clr">o</span></div>
            <div class="menubar">
                <p class="menu-title">navigation</p>
                <ul id="menus">
                    <li class="menu"><span class="icon"><i class="fa-solid fa-house"></i></span><a href="../index.html" class="menuname">Dashboard</a></li>
                    <li class="menu"><span class="icon"><i class="fa-solid fa-bars-progress"></i></span><a href="#" class="menuname">Add Task</a></li>
                    <li class="menu"><span class="icon"><i class="fa-solid fa-list-check"></i></span><a href="../Todo/list_todo.php?page=1" class="menuname">View Task</a></li>
                </ul>
                <p class="menu-title">ToDo</p>
                <ul id="menus">
                    <li class="menu"><span class="icon"><i class="fa-solid fa-user"></i></span><a href="../Employee/employee.php?page=1" class="menuname">Employee</a></li>
                </ul>
            </div>
        </div>
        <div id="right">
            <div class="header">
                <div class="header-left">
                    <div class="header-left-menu">
                        <span class="menu-icn icn"><i class="fa-solid fa-bars"></i></span>
                        <div class="search-box">
                            <div class="input-group">
                            <i class="fa-solid fa-magnifying-glass mag-icn icn"></i>
                            <input type="search" class="inpts" placeholder="Search..." />
                            </div>
                            <input type="button" value="Search" class="btn">
                        </div>
                    </div>

                    <div class="header-right-menu">
                            <i class="fa-regular fa-bell rigt-icn icn"></i>
                            <i class="fa-solid fa-gear rigt-icn icn"></i>
                            <i class="fa-regular fa-moon rigt-icn icn"></i>
                            <i class="fa-solid fa-expand rigt-icn icn"></i>
                    </div>
                </div>

                <div class="header-right">
                    <img src="../assets/image/profile.png" alt="profile" class="profile"/>
                    <div class="header-right-profile">
                        <h5>RIYAS DEEN</h5>
                        <h6>Founder</h6>
                    </div>
                </div>
            </div>

            <div id="dash-board">
                <h1 class="arrange">Update Task</h1>
                <form action="edit_todo.php?id=<?php echo $id = $_GET['id']; ?>" method="post" id="dash-board">
                <input type="text" placeholder="Task title" class="tsk-inpts" name="tname" value='<?php echo $datavalue['taskname']?>' required/>
                <input type="text" placeholder="Task description" class="tsk-inpts" name="tdes" value='<?php echo $datavalue['taskdescription']?>' required/>
                <input type="submit" value="Update" class="butn"/>
                </form>

            </div>
        </div>
    </section>
     <script>
       
     </script>
</body>
</html>