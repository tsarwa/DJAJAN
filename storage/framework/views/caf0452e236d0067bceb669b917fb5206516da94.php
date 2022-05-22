

<?php $__env->startSection('judul', 'regis'); ?>
<?php $__env->startSection('content'); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>detail djajan</title>
</head>
<body>
<div class="card">
    <div class="card-header">
        <h1 class="card-title">Bento Cake</h1>
<div class="card mb-3" style="max-width: 1200px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="images/upeya.jpg" class="img-thumbnail" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body" style="padding: 30px;">
          <h1 class="card-title">Detail</h1>
          <p class="fs-3">Toko yang menjual Bneto Cake atau yang biasa disebut Upeya ini berlokasi si Batoh, sangat banyak diminati oleh masyarakat sekitar. Mereka menyediakan bento cake yang sangat banyak variasi dan berbagai macam model. Jika ingin membeli bento cake ini anda harus memesannya terlebih dahulu.</p>
          <div class="d-grid gap-2 d-md-block">
          <a class="btn btn-dark" href="<?php echo e(URL('/login')); ?>" role="button">Like</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\app\test2-laravel\resources\views/dessert1.blade.php ENDPATH**/ ?>