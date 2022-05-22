@extends('Base')

@section('judul', 'minum')
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
        <h1 class="card-title">Cappucino Cincau</h1>
<div class="card mb-3" style="max-width: 1200px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="images/capcin.jpg" class="img-thumbnail" alt="capcin" height="500" width="500">
      </div>
      <div class="col-md-8">
        <div class="card-body" style="padding: 30px;">
          <h1 class="card-title">Detail</h1>
          <p class="fs-3">Cappucino cincau atau yang sering disebut capcin ini banyak ditemukan dipinggir jalan menuju unsyiah atau lebih tepatnya berlokasi di Darussalam. Sangat banyak mahasiswa yang rela mengantri demi mendapatkan segelas capcin ini.</p>
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