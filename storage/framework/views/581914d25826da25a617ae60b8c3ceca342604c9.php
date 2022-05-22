<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>D'JAJAN</title>
    <link rel="stylesheet" href="bootstrap/list-Materi-Bootstrap/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style/navbar.css">
    <title><?php echo $__env->yieldContent('DJAJAN'); ?></title>
</head>
<body>
    <nav>
        <header>
            <div class="navbar">
                <img src="logo.png" alt=" " width=" " height="70" class="d-inline-block align-text-top">
                <ul>
                    <li class="active"><a href="<?php echo e(URL('/home')); ?>">Beranda</a></li>
                    <li><a href="<?php echo e(URL('/register')); ?>">Daftar</a></li>
                    <li><a href="<?php echo e(URL('/login1')); ?>">Masuk</a></li>
                    <li><a href="<?php echo e(URL('/about')); ?>">About</a></li>
                </ul>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>  
            </div>
        </header>
    </nav>

        <div id="content">
          <?php echo $__env->yieldContent('content'); ?>
        </div>

    <Footer class="footer">
        <div class="social">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-whatsapp"></i></a>
        </div>

        <ul class="list">
            <li>
              <a href="#">home</a>
            </li>
            <li>
              <a href="#">services</a>
            </li>
            <li>
              <a href="#">about</a>
            </li>
        </ul>
          <p class="copyrigth">
           Sitti Tsarwa Akin & Maghfirah ZA @ 2022
          </p>
    </Footer>
</body>
</html><?php /**PATH D:\app\test2-laravel\resources\views/base.blade.php ENDPATH**/ ?>