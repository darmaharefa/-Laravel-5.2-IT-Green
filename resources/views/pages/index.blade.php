<!-- Gunakan master.blade.php sebagai master layout -->
@extends('master')

<!-- Judul Halaman -->
@section('judul', "| Home Page")

<!-- Pesan Selamat Datang dikirim ke Master Layout => layout/master.blade.php -->
@section('welcome')
<div class="content" id="content">
  <div class="indent1">
  	<div class="indent">
  		<h1>Welcome to IT Green</h1>
  		<h4>"ALL THE FLOWERS OF TOMORROW ARE IN THE SEEDS OF TODAY"</h4>
  		<p>
    			Website ini adalah website yang menyediakan informasi tentang ilmu tanaman budidaya yang difokuskan pada tanaman hias. Didalam website ini terdapat informasi mengenai jenis tanaman, solusi terhadap kerusakan tanaman, dan tips ataupun cara menanam tanaman budidaya.
  		</p>
  	</div>
@stop

<!-- Kontent Recent Update di Home Page -->
@section('konten')
  	<h2>Recent Update</h2>
  	<ul class="list">
    		<li>
            <a href="">{{$jenis->judul}}</a><br/>
              {!!substr($jenis->deskripsi,0,150)!!}{{strlen($jenis->deskripsi)>150 ? "..." : ""}} 
            <a href="'"><br/>Read More</a>
          </li>
          <li>
              <a href="">{{$solusi->judul}}</a><br/>
                {!!substr($solusi->deskripsi,0,150)!!}{{strlen($solusi->deskripsi)>150 ? "..." : ""}} 
              <a href="'"><br/>Read More</a>
          </li>
          <li>
              <a href="">{{$tips->judul}}</a><br/>
                {!!substr($tips->deskripsi,0,150)!!}{{strlen($tips->deskripsi)>150 ? "..." : ""}} 
              <a href="'"><br/>Read More</a>
          </li>
      </ul>
  </div>
</div>    
@stop
