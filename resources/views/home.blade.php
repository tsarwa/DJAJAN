@extends('Base')

@section('judul', 'DJAJAN')
@section('content')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/home.css">

    <title>DJAJAN</title> 
  </head>
  <body>
      <div class="wrapper">
        <div class="header">
          <p>Ayo cari jajanan umkm dengan</p>
          <h1>D'JAJAN!</h1>
        </div>
        <button class="btn first">Hidangan Pembuka</button>
        <button class="btn first">Makanan Utama</button>
        <button class="btn first">Minuman</button>
        <button class="btn first">Hidangan Penutup</button>
        <div class="card-group">
      <div class="card1">
        <div class="card-body">
        <img src="images/bakso.jpg" alt="bakso" style="width:100%">
        <h2>Bakso imka</h2>
        <p class="price">Rp 5.000-17.000</p>
        <p class="desc">Bakso favorit masyarakat</p>
        <a href="{{ URL('/makanan1') }}"><button>Detail</button></a>
      </div>
      </div>
      <div class="card2">
      <div class="card-body">
        <img  src="images/nasgor.jpg" alt="nasgor" style="width:100%">
        <h2>Nasi Goreng Pango</h2>
        <p class="price">Rp 10.000</p>
        <p class="desc">Nasi goreng paling banyak dicari</p>
        <a href="{{ URL('/makanan3') }}"><button>Detail</button></a>
      </div>
      </div>
      <div class="card3">
      <div class="card-body">
        <img src="images/dimsum.jpg" alt="dimsum" style="width:100%">
        <h2>Ngedimsum btj</h2>
        <p class="price">Rp 5.000-20.000</p>
        <p class="desc">Memiliki banyak variasi dimsum</p>
        <a href="{{ URL('/main1') }}"><button>Detail</button></a>
      </div>
      </div>
      <div class="card4">
      <div class="card-body">
        <img src="images/siomay.jpg" alt="siomay" style="width:100%">
        <h2>Siomay Bandung</h2>
        <p class="price">Rp 5.000-10.000</p>
        <p class="desc">Siomay dengan cita rasa khas bandung</p>
        <a href="{{ URL('/main2') }}"><button>Detail</button></a>
      </div>
      </div>
      <div class="card5">
      <div class="card-body">
        <img src="images/batagor.jpg" alt="batagor" style="width:100%">
        <h2>Batagor Bandung</h2>
        <p class="price">Rp 5.000-10.000</p>
        <p class="desc">Batagor dengan cita rasa khas Bandung</p>
        <a href="{{ URL('/main3') }}"><button>Detail</button></a>
      </div>
      </div>
      <div class="card6">
      <div class="card-body">
        <img src="images/salad.jpg" alt="salad" style="width:100%">
        <h2>Salad buah</h2>
        <p class="price">Rp 15.000-30.000</p>
        <p class="desc">Salad buah dengan bahan yang berkualitas</p>
        <a href="{{ URL('/dessert3') }}"><button>Detail</button></a>
      </div>
      </div>
      <div class="card7">
      <div class="card-body">
        <img src="images/upeya.jpg" alt="upeya" style="width:100%">
        <h2>Bento cake</h2>
        <p class="price">Rp 50.000-100.000</p>
        <p class="desc">Menyediakan cake dengan desain yang menarik</p>
        <a href="{{ URL('/dessert1') }}"><button>Detail</button></a>
      </div>
      </div>
      <div class="card8">
      <div class="card-body">
        <img src="images/corndog.jpg" alt="ayamgeprek" style="width:100%">
        <h2>Corndog Manis</h2>
        <p class="price">Rp 15.000-30.000</p>
        <p class="desc">Corndog dengan berbagai variasi rasa</p>
        <a href="{{ URL('/dessert3') }}"><button>Detail</button></a>
      </div>
      </div>
      <div class="card9">
      <div class="card-body">
        <img src="images/jus.jpg" alt="jus" style="width:100%">
        <h2>Jus buah</h2>
        <p class="price">Rp 5.000-10.000</p>
        <p class="desc">Jus dengan buah yangg berkualitas</p>
        <a href="{{ URL('/minum1') }}"><button>Detail</button></a>
      </div>
      </div>
      <div class="card10">
      <div class="card-body">
        <img src="images/medan.jpg" alt="ayamgeprek" style="width:100%">
        <h2>Ayam Geprek Medan</h2>
        <p class="price">Rp 10.000-20.000</p>
        <p class="desc">Ayam Geprek murah yang berkualitas</p>
        <a href="{{ URL('/makanan2') }}"><button>Detail</button></a>
      </div>
      </div>
    </div>
    </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

@endsection