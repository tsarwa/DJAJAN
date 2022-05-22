

<?php $__env->startSection('judul', 'login'); ?>
<?php $__env->startSection('content'); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    
    <link rel="stylesheet" href="style/login.css">
    
    <title>login djajan</title>
  </head>
  <body>
      <div class="global-contrainer">
          <div class="card login-form">
              <div class="card-body">
                <h1 class="card-title text-center"> MASUK</h1>      
            </div>
            <div class="card-text">
                <form>
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <div class="d-grid gap-2">
                    <a class="btn btn-dark" href="<?php echo e(URL('/home')); ?>" role="button">Masuk</a>
                    </div>
                    <div class="mt-3">
                      <p>Belum punya akun? <a href="<?php echo e(URL('/regis')); ?>" class="text-decoration-none text-teal">Daftar disini</a></p>
                  </div>
                </form>
            </div>
        </div>
        </div>
      </div>
  </body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\app\test2-laravel\resources\views/login.blade.php ENDPATH**/ ?>