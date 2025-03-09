@extends('layout')
@section('content')             

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table id="datatable" class="table table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <h1 class="card-title">{{$title}}</h1>
                                <br>
                                {{-- tombol tambah data --}}
                                <a type="button" class="btn btn-primary waves-effect waves-light" href="{{route('trackingHistoryProses')}}"> Tambah Data</a>
                                <div class="table-responsive">
                                    <br>        
                                        <thead>
                                            <tr>
                                                <th>no.resi</th>
                                                <th>Waktu</th>
                                                <th>Lokasi</th>
                                                <th>Status</th>
                                            </tr>
                                            <tr>
                                                {{-- @foreach ($anggota as $item)
                                                <tr>
                                                    <td>{{$item->id}}</td>
                                                    <td>{{$item->nama}}</td>
                                                    <td>{{$item->email}}</td>
                                                    <td>{{$item->umur}}</td>
                                                    <td>
                                                        <a href="{{ route('edit', $item->id) }}" 
                                                            class="btn btn-warning waves-effect waves-light" 
                                                            onclick="return">
                                                            Edit
                                                         </a>
                                                    <a href="{{ route('hapus', $item->id) }}" 
                                                        class="btn btn-danger waves-effect waves-light" 
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                                        Hapus
                                                     </a>
                                                </td>
                                                </tr>
                            @endforeach --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        </tbody>
                                    </table>
                                </div>
                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <!-- end row -->
@endsection
