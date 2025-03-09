@extends('layout')
@section('content')

<div>
    <h1>{{$title}}</h1>
</div>

 <!-- Start Content-->
 <div class="container-fluid">
    <table>
    <!-- start page title -->
    <div class="py-3 py-lg-4">
        <div class="row">
            <div class="col-lg-6">
                <h4 class="page-title mb-0"></h4>
            </div>
            <div class="col-lg-6">
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title"></h4>
                    
                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">

                        <thead>
                            <tr>
                                
                            </tr>
        @foreach ($anggota as $item)
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
        @endforeach
                        </thead>
                    
                    
                    </table>


@endsection