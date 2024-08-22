<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mr DeenBro</title>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+GB+S:ital,wght@0,100..400;1,100..400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="stylesheet" href="css/tskLst.css">
    <link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
</head>
<body>
    <section id="master">
        <div id="left">
            <div class="logo">Mr DeenBr<span id="logo-clr">o</span></div>
            <div class="menubar">
                <p class="menu-title">navigation</p>
                <ul id="menus">
                    <li class="menu"><span class="icon"><i class="fa-solid fa-house"></i></span><a href="../index.html" class="menuname">Dashboard</a></li>
                    <li class="menu"><span class="icon"><i class="fa-solid fa-bars-progress"></i></span><a href="../Todo/add_todo.php" class="menuname">Add Task</a></li>
                    <li class="menu"><span class="icon"><i class="fa-solid fa-list-check"></i></span><a href="#" class="menuname">View Task</a></li>
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
                <h1 class="arrange">Task List</h1>
                
                <table id="data">
                    <!-- <thead>
                        <tr>
                            <th>No.</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Change Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead> -->
                    <tbody>
                    <?php require_once "db_list.php"; ?>
                    
                        <!-- <tr>
                            <td>1</td>
                            <td>Login Form</td>
                            <td>Html / Css</td>
                            <td>Low</td>
                            <td>Pending</td>
                            <td><input type="button" value="Change Status" class="buttn edt"/></td>
                            <td><input type="button" value="Update" class="buttn edt"/></td>
                            <td><input type="button" value="Remove" class="buttn del"/></td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>SignUp Form</td>
                            <td>Html / Css</td>
                            <td>Low</td>
                            <td>Pending</td>
                            <td><input type="button" value="Change Status" class="buttn edt"/></td>
                            <td><input type="button" value="Update" class="buttn edt"/></td>
                            <td><input type="button" value="Remove" class="buttn del"/></td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>App Dev</td>
                            <td>React Js</td>
                            <td>Medium</td>
                            <td>Completed</td>
                            <td><input type="button" value="Change Status" class="buttn edt"/></td>
                            <td><input type="button" value="Update" class="buttn edt"/></td>
                            <td><input type="button" value="Remove" class="buttn del"/></td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>Backend</td>
                            <td>Node Js</td>
                            <td>High</td>
                            <td>On Going</td>
                            <td><input type="button" value="Change Status" class="buttn edt"/></td>
                            <td><input type="button" value="Update" class="buttn edt"/></td>
                            <td><input type="button" value="Remove" class="buttn del"/></td>
                        </tr> -->
                    </tbody>
                   
                </table>
                <div class="pagination">
                    <ul id="page-lst">
                        <li class="pages"><a href="#" class="pageno">&laquo;</a></li>
                        <li class="pages"><a href="list_todo.php?page=1" class="pageno <?php echo ($page==1)? 'active':'' ?>">1</a></li>
                        <li class="pages"><a href="list_todo.php?page=2" class="pageno <?php echo ($page==2)? 'active':'' ?>">2</a></li>
                        <li class="pages"><a href="list_todo.php?page=3" class="pageno <?php echo ($page==3)? 'active':'' ?>">3</a></li>
                        <li class="pages"><a href="list_todo.php?page=4" class="pageno <?php echo ($page==4)? 'active':'' ?>">4</a></li>
                        <li class="pages"><a href="#" class="pageno">&raquo;</a></li>

                    </ul>
                </div>

            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    $(document).ready(function () {
        $('.remove').click(function (e) { 
            var id = $(this).val();
            console.log(id);
            e.preventDefault();

            const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'buttn success',
                cancelButton: 'buttn del'
            },
            buttonsStyling: false
            });
            swalWithBootstrapButtons.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            reverseButtons: true
            }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url:`remove_todo.php?id=${id}`,
                    success:function(response){
                    swalWithBootstrapButtons.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success"
                    }).then(()=>{
                      window.location.reload();
                    });
                    }
                });
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire({
                title: "Cancelled",
                text: "Your imaginary file is safe :)",
                icon: "error"
                });
            }
            });

            
            
        });
    });
    </script>
</body>
</html>
