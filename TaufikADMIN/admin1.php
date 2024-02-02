<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive dashboard user iuran kelas </title>
    <!-- ==== Styles ==== -->
    <link rel="stylesheet" href="css/user.css">
</head>
<body>
    <!-- ============= Navigation ========== -->

    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="logo-apple"></ion-icon>
                        </span>
                        <span class="title">HALAMAN ADMIN</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard ADMIN </span>
                    </a>
                </li> 

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Customers</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Message</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">Help</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Settigs</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">Password</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-in-outline"></ion-icon>
                        </span>
                        <span class="title">sign Out</span>
                    </a>
                </li>
            </ul>
        </div>


        <!-- ======= Main ======== -->
        <div class="main">
            <div class="toqbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="img/wallpaper-danbo-galau.jpg" alt="">
                </div>

            </div>
            <!-- ===============Cards============== -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">1,504</div>
                        <div class="cardName">comment</div>
                    </div>
                    <div class="iconBx">
                        xxx
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">80</div>
                        <div class="cardName">Sales</div>
                    </div>
                    <div class="iconBx">
                        xxx
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">284</div>
                        <div class="cardName">Daily VIews</div>
                    </div>
                    <div class="iconBx">
                        xxx
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">100</div>
                        <div class="cardName">Earning</div>
                    </div>
                    <div class="iconBx">
                        xxx
                    </div>
                </div>
            </div>

            <!-- ======================Order Details Lisr======================== -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Recent Orders</h2>
                        <a href="barang-tambah.php"class="btn">tambah data</a>
                    </div>

                    <!-- <table>
                        <thead>
                            <tr>
                                <td>Nama</td>
                                <td>Price</td>
                                <td>Payment</td>
                                <td>Status</td>
                            </tr>
                        </thead>

                        <tbody>
                           
                            <tr>
                                <td>Addidas Shoes</td>
                                <td>$170</td>
                                <td>Due</td>
                                <td><span class="status inProgress">In Progress</span></td>
                            </tr>
                        </tbody>
                    </table> -->

                    <h3> Data Barang</h3>

<table border="1">
    <tr>
        <th>No</th>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Harga</th>
        
    </tr>


    <?php
    include "koneksi.php";
    $no=1;
    $ambildata = mysqli_query($koneksi  , "select *from barang");
    while ($tampil = mysqli_fetch_array($ambildata)){
        echo" 
        <tr>
        <td>$no</td>
        <td>$tampil[kode_barang]</td>
        <td>$tampil[nama_barang]</td>
        <td>$tampil[harga_barang]</td>
        </tr>";

        $no++;
    }



    ?>
   
</table>
                </div>
                

                <!-- ================= New Customers ================= -->
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Recent Customers</h2>
                    </div>

                    <table>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="img/walpaper.jpg" alt="" height="400" width="200px"></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Italy</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="img/walpaper.jpg" alt="" height="400" width="200px"></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Italy</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="img/walpaper.jpg" alt="" height="400" width="200px"></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Italy</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="img/walpaper.jpg" alt="" height="400" width="200px"></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Italy</span></h4>
                            </td>
                        </tr>
                        
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="img/walpaper.jpg" alt="" height="400" width="200px"></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Italy</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="img/walpaper.jpg" alt="" height="400" width="200px"></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Italy</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="img/walpaper.jpg" alt="" height="400" width="200px"></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Italy</span></h4>
                            </td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>
    <!-- ==== Scripts ==== -->
    <script src="main js/users.js"></script>

    <!-- ==== ionicons ==== -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>