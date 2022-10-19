<?php

    require 'koneksi.php';

    $result = mysqli_query($conn, "SELECT * FROM respon ORDER BY ID DESC LIMIT 1");

    $respon = [];

    while($row = mysqli_fetch_assoc($result)){
        $respon[] = $row;
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

    <div class="kotak21">
        <h3>- Thank you for visiting - </h3>
    </div>

    <?php foreach($respon as $rsp) : ?>
        <div class="kotak22">
            <form name="finput" method="POST" action="index.php">
                <div class="form-group">
                    <div class="col-sm-12">
                        <div class="form-control">
                            <?php
                                echo $rsp['NAMA'];
                            ?>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-12">
                        <div class="form-control">
                            <?php
                                echo $rsp['WARNA'];
                            ?>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-12">
                        <div class="form-control">
                            <?php
                                echo $rsp['BRAND'];
                            ?>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-12">
                        <div class="form-control">
                            <?php
                                echo $rsp['JENIS'];
                            ?>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-12">
                        <div class="form-control">
                            <?php
                                echo $rsp['UKURAN'];
                            ?>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-12">
                        <div class="form-control">
                            <?php
                                echo $rsp['EMAIL'];
                            ?>
                        </div>
                    </div>
                </div>

                <div class="btn-cont">
                    <button class="button3 glow-button3" id="submit" type="submit">
                        <div class="alt-send-button">
                            <span class="send-text"><b>RETURN</b></span>
                        </div>
                    </button>
                </div>

            </form>

        </div>
    <?php endforeach; ?>

    <div class="kotak25">
        <form name="finput" method="POST" action="index2.php">
            <div class="btn-cont">
                <button class="button4 glow-button3">
                    <div class="alt-send-button" >
                        <span class="send-text"><b>EDIT RESPONSE</b></span>
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