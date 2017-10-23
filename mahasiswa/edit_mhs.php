<?php
    include '../resource/config.php';
    $nim = $_GET['nim'];
    $code_exec = mysqli_query($get_conn, "select * from T_MHS where nim = '$nim'");
    $data = mysqli_fetch_array($code_exec);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Memulai membuat WEB</title>
        <link href="../components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="../components/bootstrap/asset   s/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
        <link href="../components/bootstrap/dist/css/navbar-fixed-top.css" rel="stylesheet">
    </head>

    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Kuliah</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="../index.php">Home</a></li>
                        <li><a href="../kuliah/home.php">Kuliah</a></li>
                        <li><a href="../kelas/home.php">Kelas</a></li>
                        <li><a href="home.php">Mahasiswa</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <div class="container">


            <div class="row">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="panel-title">Edit Data Mahasiswa</div>
                    </div>
                    <div class="panel-body">
                        <form action="updt_mhs.php" method="post">
                            <table class="table table-bordered table-condensed table-striped">
                                <tr>
                                    <td><strong>NIM</strong></td>
                                    <td>:</td>
                                    <td><input type="text" value="<?= $data['nim'] ?>" name="nim" id="nim" class="form-control" required autofocus></td>
                                </tr>
                                <tr>
                                    <td><strong>NAMA</strong></td>
                                    <td>:</td>
                                    <td><input type="text" value="<?= $data['nama'] ?>" name="nama" id="nama" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td><strong>SMT</strong></td>
                                    <td>:</td>
                                    <td><input type="number" value="<?= $data['smt'] ?>" name="smt" id="smt" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td><strong>FAKULTAS</strong></td>
                                    <td>:</td>
                                    <td><input type="text" value="<?= $data['fakultas'] ?>" name="fakultas" id="fakultas" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td><strong>JURUSAN</strong></td>
                                    <td>:</td>
                                    <td><input type="text" value="<?= $data['jurusan'] ?>" name="jurusan" id="jurusan" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td colspan="2">&nbsp;</td>
                                    <td>
                                        <a href="data_mhs.php" class="btn btn-danger">Back!</a>
                                        <input type="submit" value="Edit!" class="btn btn-primary">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>


        </div> <!-- /container -->


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="components/jquery/dist/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="components/bootstrap/dist/js/bootstrap.min.js"></script>
    </body>
</html>

