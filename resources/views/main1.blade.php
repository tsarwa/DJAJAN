@extends('Base')

@section('judul', 'main')
@section('content')
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
        <h1 class="card-title">Dimsum</h1>
<div class="card mb-3" style="max-width: 1200px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="images/dimsum.jpg" class="img-thumbnail" alt="salad" height="500" width="500">
      </div>
      <div class="col-md-8">
        <div class="card-body" style="padding: 30px;">
          <h1 class="card-title">Detail</h1>
          <p class="fs-3">Belakangan ini dimsum sangat digemari dikalangan muda mudi. Dimsum ini berlokasi di simpang BPKP, Ule Kareng. Menyediakan banyak jenis dimsum dengan harga yang murah. Bukan hanya harganya yang murah tetapi rasanya juga tidak perlu diragukan lagi.</p>
          <div class="d-grid gap-2 d-md-block">
          <a class="btn btn-dark" href="{{ URL('/login') }}" role="button">Like</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
@endsection