<?php
error_reporting(0);
session_start();
require '../connection.php';
    $idDataSec =  $_SESSION["id"];
    $selectQuery = "SELECT * FROM `gamer_data` where `userid`= $idDataSec";
    $result = mysqli_query($conn,$selectQuery);
    (mysqli_num_rows($result) > 0);

   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deshboard</title>
    <link rel="stylesheet" href="style.css">
    <!-- -----metrical icon------ -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
</head>
<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="./images/logo.png" alt="">
                    <h2 class="text-muted">EG <span class="danger">TAR</span></h2>
                </div>
            </div>
            <div class="close" id="close-btn">
            <span class="material-icons-sharp">close</span>
            </div>
            <div class="sidebar">
                <a href="dashboard.php">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Deshboard</h3>
                </a>
                <a href="game.php" class="active">
                    <span class="material-icons-sharp">person_outline</span>
                    <h3>Game</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">receipt_long</span>
                    <h3>Order</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">insights</span>
                    <h3>Analytics</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">mail_outline</span>
                    <h3>Messgae</h3>
                    <span class="message_count">26</span>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">inventory</span>
                    <h3>Products</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">report</span>
                    <h3>Report</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">settings</span>
                    <h3>Setting</h3>
                </a>
                
                <a href="../logout.php">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <!-- --------------------end of aside part -------------- -->
        <main>
            <h1>Register Your Team</h1>
            <div class="date">
                <input type="date" name="" id="" value="<?php echo date('Y-m-d'); ?>">
            </div>

           <?php include 'regindemo.php'; ?>

           <div class="recent_order">
                <h2>Recent order</h2>
                <table> 
                    <thead>
                        <tr>
                            <th>Team Name</th>
                            <th>Email Id</th>
                            <th>Varifaction</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- php code is here ---   -->
                        <?php
                            // LOOP TILL END OF DATA
                            while($rows=$result->fetch_assoc())
                            {
                        ?>
                        <tr>
                            <td><?php echo $rows['team_name'];?></td>
                            <td><?php echo $rows['team_id'];?></td>
                            <td class="warning">pending</td>
                            <td class="success">Free</td>
                            <td class="primary">Details</td>
                        </tr>
                        <?php
                                }
                            ?>
                    </tbody>
                </table>
                <a href="">Show All</a>
            </div>
            
            
        </main>
        <!-- -------end of main section ----------  -->
        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-icons-sharp">menu</span>
                </button>
                <div class="theme-toggler">
                    <span class="material-icons-sharp active">light_mode</span>
                    <span class="material-icons-sharp">dark_mode</span>
                </div>
                <div class="profile">
                    <div class="info">
                        <p>Hay, <b><?php echo $_SESSION['name']; ?></b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="./images/profile-1.jpg" alt="">
                    </div>
                </div>
            </div>
            <!-- -----end of top--- -->
            <div class="recent-updates">
                <h2>Recent Updates</h2>
                <div class="updates">
                    <div class="update">
                        <div class="profile-photo">
                            <img src="./images/profile-2.jpg" alt="">
                        </div>
                        <div class="message">
                            <p><b>Mike tyson</b>Receive His order Of night Lion touch GPS drone</p>
                            <small class="text-muted">2 Minustes Ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="./images/profile-3.jpg" alt="">
                        </div>
                        <div class="message">
                            <p><b>Mike tyson</b>Receive His order Of night Lion touch GPS drone</p>
                            <small class="text-muted">2 Minustes Ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="./images/profile-4.jpg" alt="">
                        </div>
                        <div class="message">
                            <p><b>Mike tyson</b>Receive His order Of night Lion touch GPS drone</p>
                            <small class="text-muted">2 Minustes Ago</small>
                        </div>
                    </div>
                   
                </div>
            </div>

            <!-- ----end of recent update------ -->

            <div class="sales-analytics">
                <h2>Sales Analytics</h2>
                <div class="item online">
                    <div class="icon">
                        <span class="material-icons-sharp">local_mall</span> 
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>Online Orders</h3>
                            <small class="text-muted">Last 24 Hours</small>
                        </div>
                        <h5 class="success">+39%</h5>
                        <h3>3849</h3>
                    </div>
                </div>
                <div class="item offline">
                    <div class="icon">
                        <span class="material-icons-sharp">local_mall</span> 
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>Offline Orders</h3>
                            <small class="text-muted">Last 24 Hours</small>
                        </div>
                        <h5 class="danger">-19%</h5>
                        <h3>1245</h3>
                    </div>
                </div>
                <div class="item customers">
                    <div class="icon">
                        <span class="material-icons-sharp">person</span> 
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>New Customers</h3>
                            <small class="text-muted">Last 24 Hours</small>
                        </div>
                        <h5 class="success">+25%</h5>
                        <h3>8449</h3>
                    </div>
                </div>
                <div class="item add-product">
                    <span class="material-icons-sharp">add</span> 
                    <h3>Add Product</h3>

                </div>
                
            </div>
        </div>
    </div>
    <script src="index.js"></script>
</body>
</html>