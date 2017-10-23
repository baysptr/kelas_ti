<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Memulai membuat WEB</title>
        <link href="components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="components/bootstrap/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
        <link href="components/bootstrap/dist/css/navbar-fixed-top.css" rel="stylesheet">
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
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="kuliah/home.php">Kuliah</a></li>
                        <li><a href="kelas/home.php">Kelas</a></li>
                        <li><a href="mahasiswa/home.php">Mahasiswa</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <div class="container">

            <!-- Main component for a primary marketing message or call to action -->
            <div class="jumbotron">
                <h1>Selamat Datang</h1>
                <p><strong>Selamat Datang</strong> di web belajar membangun web custome mulai dari nol dan mengerti bahan utama dalam membuat web itu bagaimana</p>
                <p>
                    <a class="btn btn-lg btn-primary" href="javascript:;" role="button">Ini Button Biasa &raquo;</a>
                </p>
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

