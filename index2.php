<?php

    require 'koneksi.php';

    $result = mysqli_query($conn, "SELECT * FROM respon ORDER BY ID DESC LIMIT 1");

    $rsp = [];

    while($row = mysqli_fetch_assoc($result)){
        $rsp[] = $row;
    }

    $rsp = $rsp[0];

    if(isset($_POST['update'])){
        $nama = $_POST['nama'];
        $warna = $_POST['warna'];
        $brand = $_POST['brand'];
        $jenis = $_POST['jenis'];
        $ukuran = $_POST['ukuran'];
        $email = $_POST['email'];

        $result = mysqli_query($conn,
                "UPDATE respon SET NAMA = '$nama', WARNA = '$warna', BRAND = '$brand', 
                JENIS = '$jenis', UKURAN = '$ukuran', EMAIL = '$email' ORDER BY ID DESC LIMIT 1");
        
        if($result){
            echo "
            <script>
                alert('- Data have been updated -');
                document.location.href = 'index1.php';
            </script>";
        } else{
            echo "
            <script>
                alert('- Data cannot be updated, Try again -');
                document.location.href = 'index2.php';
            </script>";     
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title> EKIN </title>
    <link rel = "icon" href = "logo_web.png">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
</head>


<body>
    <header><a href="#" class="top"><img src="logo_web.png" alt="logo website" width="10%" class="tengah"></a></header>

    <nav class="nav">
        <a href="index.php">Home</a>
        <a href="About_EKIN.php">About Us</a>
        <a href="Contact_EKIN.php">Contact</a>
    </nav>

    <div class="theme-switch-wrapper">
        <label class="theme-switch" for="checkbox">
            <input type="checkbox" id="checkbox" />
            <div class="slider round"></div>
        </label>
    </div>

    <div class="kotak27">
        <h3>- EDIT - </h3>
    </div>

    <div class="kotak26">
        <form name="finput" method="POST" action="">
            <div class="form-group">
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="nama" placeholder="NAME OF SHOE" name="nama" value="<?php echo $rsp['NAMA'] ?>" required>
                </div>
            </div>
        
            <div class="form-group">
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="warna" placeholder="COLOUR" name="warna" value="<?php echo $rsp['WARNA'] ?>" required>
                </div>
            </div>
        
            <div class="form-group">
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="brand" placeholder="BRAND" name="brand" value="<?php echo $rsp['BRAND'] ?>" required>
                </div>
            </div>
        
            <div class="form-group">
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="jenis" placeholder="TYPE" name="jenis" value="<?php echo $rsp['JENIS'] ?>" required>
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-sm-12">
                    <input type="number" class="form-control" id="ukuran" placeholder="  SIZE" name="ukuran" value="<?php echo $rsp['UKURAN'] ?>" required>
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-sm-12">
                    <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="<?php echo $rsp['EMAIL'] ?>" required>
                </div>
            </div>

            <div class="btn-cont">
                <button class="button3 glow-button3" id="update" name="update">
                    <div class="alt-send-button">
                        <span class="send-text"><b>SAVE</b></span>
                    </div>
                </button>
            </div>

        </form>

    </div>

    <div class="kotak28">
        <form name="finput" method="POST" action="delete.php">
            <div class="btn-cont">
                <button class="button4 glow-button4" id="submit" type="submit" value="SEND">
                    <div class="alt-send-button">
                        <span class="send-text"><b>DELETE</b></span>
                    </div>
                </button>
            </div>
        </form>
    </div>

    <div class="footer-basic empat-footer-basic">
        <footer>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="About_EKIN.php">About</a></li>
                <li class="list-inline-item"><a href="Contact_EKIN.php">Contact</a></li>
            </ul>
            <p class="copyright">EKIN © 2022</p>
        </footer>
    </div>

    <script src="javascript.js"></script>

</body>

</html>