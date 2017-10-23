<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Memulai membuat WEB</title>
        <link href="../components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="../components/bootstrap/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
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
                        <div class="panel-title">Tambah Data Mahasiswa</div>
                    </div>
                    <div class="panel-body">
                        <form action="do_mhs.php" method="post">
                            <table class="table table-bordered table-condensed table-striped">
                                <tr>
                                    <td><strong>NIM</strong></td>
                                    <td>:</td>
                                    <td><input type="text" name="nim" id="nim" class="form-control" required autofocus></td>
                                </tr>
                                <tr>
                                    <td><strong>NAMA</strong></td>
                                    <td>:</td>
                                    <td><input type="text" name="nama" id="nama" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td><strong>SMT</strong></td>
                                    <td>:</td>
                                    <td><input type="number" name="smt" id="smt" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td><strong>FAKULTAS</strong></td>
                                    <td>:</td>
                                    <td><input type="text" name="fakultas" id="fakultas" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td><strong>JURUSAN</strong></td>
                                    <td>:</td>
                                    <td><input type="text" name="jurusan" id="jurusan" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td colspan="2">&nbsp;</td>
                                    <td>
                                        <input type="reset" value="Clear!" class="btn btn-danger">&nbsp;
                                        <input type="submit" value="Save!" class="btn btn-primary">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="panel-title">Data Mahasiswa</div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered table-condensed table-striped">
                            <thead>
                                <tr>
                                    <td><strong>NO</strong></td>
                                    <td><strong>NIM</strong></td>
                                    <td><strong>NAMA</strong></td>
                                    <td><strong>SMT</strong></td>
                                    <td><strong>FAKULTAS</strong></td>
                                    <td><strong>JURUSAN</strong></td>
                                    <td colspan="2" align="center"><strong>ACTIONS</strong></td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    include '../resource/config.php';
                                    $no = 1;
                                    $code_select = mysqli_query($get_conn, "select * from T_MHS order by nama asc");    
                                    while($data = mysqli_fetch_array($code_select)){ ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $data['nim'] ?></td>
                                    <td><?= $data['nama'] ?></td>
                                    <td><?= $data['smt'] ?></td>
                                    <td><?= $data['fakultas'] ?></td>
                                    <td><?= $data['jurusan'] ?></td>
                                    <td><a href="javascript:;" onclick="if(confirm('Apa anda yakin akan menghaps ini???') === true){ window.location = 'hapus_mhs.php?nim=<?= $data['nim'] ?>'; }" class="btn btn-xs btn-block btn-danger">hapus</a></td>
                                    <td><a href="edit_mhs.php?nim=<?= $data['nim'] ?>" class="btn btn-xs btn-block btn-primary">edit</a></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
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

