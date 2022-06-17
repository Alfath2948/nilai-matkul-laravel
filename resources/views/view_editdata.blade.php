{{-- ini nunjukin layout referensi, yaitu file view_main --}}
@extends('layouts.view_main')


{{-- ini nunjukin isi dari section yang dibungkus buat ditampilin di view_mian --}}
@section('nama_yield')
    <h1>Ini tulisan Edit Data ukuran h1 di bagian body </h1>
    {{-- php echo bisa makai :
        1. < ?php echo xxx; ?>
        2. < ?= xxx; ?>
        3. {{ xxx }} (hanya bisa kalau nama filenya nama.blade)
    --}}
    <article class="mb-5">
        <h2>
            {{ $judul_halaman }}
        </h2>
    </article>
    <div class="row mt-3 justify-content-center">
        <div class="col-md-4">
            <div class="card card-main">
                <div class="row">
                    <div class="col-md-12 pl-4 pr-4">
                        <table id="table-ticket" class="table-custom table table-strip stripe hover">
                            <thead>
                                <tr >
                                </tr>
                            <thead>
                                <?php $i=1;?>
                                @foreach ($data_jamak_tbgabungan as $data_tunggal)
                                    <tr>
                                        {{-- 
                                            buat form 
                                        --}}
                                        <form action="/editdata{{ $data_tunggal->nilai_matkul_id }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label><h5>Nama Yang baru</h5></label>
                                                <input type="text" class="form-control" placeholder="Nama yang lama : {{ $data_tunggal->mhs_full_name }}">
                                            </div>
                                            <div class="form-group">
                                                <label><h5>NRP Yang baru</h5></label>
                                                <input type="text" class="form-control" placeholder="NRP yang lama : {{ $data_tunggal->mhs_nrp }}">
                                            </div>
                                            <div class="form-group">
                                                <label><h5>Nilai Yang baru</h5></label>
                                                <input type="text" class="form-control" placeholder="Nilai yang lama : {{ $data_tunggal->nilai_nilai }}">
                                            </div>
                                        </form>
                                        <a href="/editdata/{{ $data_tunggal->id }}/{{ $data_tunggal->mhs_full_name }}/{{ $data_tunggal->mhs_nrp }}/{{ $data_tunggal->nilai_nilai }}">
                                            <button type="submit" class="w-100 btn btn-primary">
                                                Submit
                                            </button>
                                        </a>
                                        {{--
                                            akhir buat form 
                                        --}}
                                    </tr>
                                    <?php $i++;?>
                                @endforeach
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection