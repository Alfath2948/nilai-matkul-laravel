{{-- ini nunjukin layout referensi, yaitu file view_main --}}
@extends('layouts.view_main')


{{-- ini nunjukin isi dari section yang dibungkus buat ditampilin di view_mian --}}
@section('nama_yield')


    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-error">
            {{ session('error') }}
        </div>
    @endif

    @foreach ($data_judul_dan_id as $data_tunggal)
        <article class="mb-5">
            <h2>
                <a href="/detaildata/{{ $data_tunggal->id }}">{{ $data_tunggal->matkul_name }}</a>
            </h2>
        </article>
    @endforeach

    {{-- script pop up --}}
    {{-- <script src="script.js"></script> --}}
@endsection

{{-- <html>
  <head>
    
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html> --}}

    

