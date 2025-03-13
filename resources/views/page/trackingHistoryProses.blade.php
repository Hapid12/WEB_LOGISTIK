@extends('layout')
@section('content') 
<body data-sidebar="colored" >
    <div class="row justify-content-center">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Validation type</h4>
                            <br>
                            <form class="custom-validation" action="{{route('simpanTrack')}}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label>No. Resi</label>
                                    <input type="text" id="noresi" name="noresi" class="form-control" required placeholder="No. Resi" />
                                </div>

                                <div class="mb-3">
                                    <label>Waktu</label>
                                    <input type="text" id="waktu" name="waktu" class="form-control" required
                                    placeholder="Waktu">
                                </div>
                                
                                <div class="mb-3">
                                    <label>Lokasi</label>
                                    <div>
                                        <textarea required class="form-control" rows="5" id="lokasi" name="lokasi"></textarea>
                                    </div>
                                </div>
                                <div class="mb-0">
                                    
                                <div class="mb-3">
                                    <label>Tujuan</label>
                                    <input type="text" id="tujuan" name="tujuan" class="form-control" required
                                    placeholder="Tujuan">
                                </div>

                                <div class="mb-3">
                                    <label>Status</label>
                                    <input type="text" id="status" name="status" class="form-control" required
                                    placeholder="Status">
                                </div>
                                
                                <div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-secondary waves-effect">
                                        Cancel
                                    </button>
                                </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->

            </div>
            @endsection