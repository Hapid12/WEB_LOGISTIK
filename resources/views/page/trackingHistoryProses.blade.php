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
                            <form class="custom-validation" action="#">
                                <div class="mb-3">
                                    <label>No. Resi</label>
                                    <input type="text" id="noresi" name="noresi" class="form-control" required placeholder="No. Resi" />
                                </div>

                                <div class="mb-3">
                                    <label>Waktu</label>
                                    <input type="text" id="Waktu" name="Waktu" class="form-control" required
                                    placeholder="Waktu">
                                </div>
                                
                                <div class="mb-3">
                                    <label>Lokasi</label>
                                    <div>
                                        <textarea required class="form-control" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="mb-0">
                                    
                                <div class="mb-3">
                                    <label>Tujuan</label>
                                    <input type="text" id="Tujuan" name="Tujuan" class="form-control" required
                                    placeholder="Tujuan">
                                </div>

                                <div class="mb-3">
                                    <label>Status</label>
                                    <input type="password" id="Status" name="Status" class="form-control" required
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