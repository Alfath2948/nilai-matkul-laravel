{{-- ini nunjukin layout referensi, yaitu file view_main --}}
@extends('layouts.view_main')


{{-- ini nunjukin isi dari section yang dibungkus buat ditampilin di view_main --}}
@section('nama_yield')
    <article class="mb-5">
        <h2>
            {{ $judul_halaman }}
        </h2>
    </article>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card card-main">
                {{-- <div class="row">
                    <div class="col-md-6">
                        <p class="title-text pl-2">List Ticketing</p>
                    </div>
                </div> --}}
                <div class="row">
                    <div class="col-md-12 pl-4 pr-4">
                        <table id="table-ticket" class="table-custom table table-strip stripe hover">
                            <thead>
                                <tr >
                                    <th class ="text-left" style="width:100px;">No.</th>
                                    <th class ="text-center">NRP</th>
                                    <th class ="text-center">Nama</th>
                                    <th class ="text-center">Nilai</th>
                                    <th class ="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1;?>
                                @foreach ($data_jamak_tbgabungan as $data_tunggal)
                                    <tr>
                                        {{-- langsung masukin nama atribut dari object, karena ini bentuknya objek, makanya makai panah, bukan array datatungal[]--}}
                                        <td>{{ $i }}</td>
                                        <td class ="text-center">{{ $data_tunggal->mhs_nrp }}</td>
                                        <td class ="text-center">{{ $data_tunggal->mhs_full_name }}</td>
                                        <td class ="text-center">{{ $data_tunggal->nilai_nilai }}</td>
                                        <td class ="text-center">
                                            <a href="/editdata/{{ $data_tunggal->id }}">
                                                <button type="button" class="btn btn-primary">
                                                    Edit
                                                </button>
                                            </a>
                                            <a href="/editdata/{{ $data_tunggal->id }}">
                                                <button type="button" class="btn btn-danger">
                                                    Delete
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php $i++;?>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 
        .
        Modal Buat PopUP EDIT 
        .
    -->
    {{-- <div class="modal fade" id="popupedit" tabindex="-1" role="dialog" aria-labelledby="popupeditLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="popupeditLabel">Edit Nilai</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body"> --}}
                    {{-- 
                        buat form 
                    --}}
                    {{-- <form action="" method="POST">
                        <div class="form-group">
                            <label>Nilai yang baru</label>
                            <input type="text" class="form-control" name="nilaibaru" placeholder="Masukan di sini nilai yang baru">
                        </div>
                    </form> --}}
                    {{--
                        akhir buat form 
                    --}}
                {{-- </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="/detaildata/{{ $idnilaiedit }}">
                        <button type="button" class="btn btn-primary" >
                            Save Changes
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- 
        .
        Modal Buat PopUP DELETE 
        .
    -->
    {{-- <div class="modal fade" id="popupdelete" tabindex="-1" role="dialog" aria-labelledby="popupdeleteLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="popupdeleteLabel">Delete Nilai</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save Changes</button>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- Akhir Modal Buat PopUp --}}
@endsection





