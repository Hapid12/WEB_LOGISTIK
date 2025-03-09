@extends('layout')
@section('content')             

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table id="datatable" class="table table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <h1 class="card-title">{{$title}}</h1>

                        {{-- tombol tambah data --}}
                        <br>
                        <a type="button" class="btn btn-primary waves-effect waves-light" href="{{route('dataPaketProses')}}"> Tambah Data</a>
                        <div class="table-responsive">
                        <br>
                            <thead>
                                <tr>
                                    <th>no.resi</th>
                                    <th>Pengirim</th>
                                    <th>Penerima</th>
                                    <th>Asal</th>
                                    <th>Tujuan</th>
                                    <th>Status</th>
                                    <th>Tanggal Update</th>
                                    <th>Estimasi Tiba</th>
                                </tr>
            @foreach ($data_Paket as $item)
                                <tr>
                                    <td>{{$item->noResi}}</td>
                                    <td>{{$item->pengirim}}</td>
                                    <td>{{$item->penerima}}</td>
                                    <td>{{$item->asal}}</td>
                                    <td>{{$item->tujuan}}</td>
                                    <td>{{$item->status}}</td>
                                    <td>{{$item->tanggalUpdate}}</td>
                                    <td>{{$item->estimasiTiba}}</td>
                                    <td>
                                        {{-- edit --}}
                                        <a href="{{ route('editPaket', $item->id) }}" 
                                            class="btn btn-warning waves-effect waves-light" 
                                            onclick="return">
                                            Edit
                                         </a>
                                         {{-- hapus --}}
                                    <a href="{{ route('hapusPaket', $item->id) }}" 
                                        class="btn btn-danger waves-effect waves-light" 
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                        Hapus
                                     </a>
                                </td>
                                </tr>
            @endforeach
                            </thead>
                        </table>
                    </div>
                </div>
                 </div>
    </div>
    </div>
    </div>
@endsection