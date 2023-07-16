<?php
error_reporting(0);
session_start();
require '../connection.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  

  $result = mysqli_query($conn, "SELECT * FROM register WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
  $_SESSION['name']= $row['name'];
  
}
else{
  header("Location: index.php");
}
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
            <h1>Game DeshBoard</h1>
            <div class="date">
                <input type="date" name="" id="" value="<?php echo date('Y-m-d'); ?>">
            </div>
            <div class="insights">
                <div class="sales" onclick="window.open('register.php','mywindow');" style="cursor: pointer;"&nbsp;>
                    <span class="material-icons-sharp">analytics</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Sales</h3>
                            <h1>$25,807</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                        
                    </div>
                    <form action="" id="form">
                    <input type="text" value="First T3 Game" id="firstGame" hidden>
                    <button type="submit">button</button>
                    </form>
                    
                    <small class="text-muted">Last 24 hours</small>
                </div>
                <!-- -------end of sales ------------ -->
                <div class="expenses">
                    <span class="material-icons-sharp">analytics</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Expernces</h3>
                            <h1>$25,807</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>61%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 hours</small>
                </div>
               <!-- ---------expenes is end here------- -->
                <div class="income">
                    <span class="material-icons-sharp">analytics</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Income</h3>
                            <h1>$24,807</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>74%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 hours</small>
                </div>
            </div>
            
            
            
            <?php include 'card.php'; ?>
            
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
                        <p>Hay, <b> <?php echo $row["name"]; ?></b></p>
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
    <script>
        //value taken for game

        const form = document.getElementById('form');
        const firstGame = document.getElementById('firstGame');
        form.addEventListener('submit', function(e){
            e.preventDefault();
            const firstGameValue = firstGame.value;
           localStorage.setItem('first-Name', firstGameValue);


        })
    </script>
</body>
</html>