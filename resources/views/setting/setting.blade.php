@extends('layouts.master')

@section('title')
    Setting
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Setting</li>
@endsection

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <div class="card-title">Company Profile</div>
        </div>
        <div class="card-body row">
            <div class=" col-md-5 col-sm-12 col-xs-12 text-center d-flex align-items-center justify-content-center">
                <div class="">
                    <div class="">
                        <img src="{{ asset('img/logo.png') }}" alt="" style="width: 150px; margin-bottom: 20px">
                    </div>
                    <h2>Ravaa <strong>Studio</strong></h2>
                    <p><i class="fas fa-map-marker-alt"></i> Gedong, Ds. Ngluyu, Kec. Ngluyu, Kab. Nganjuk<br>
                        <i class="fas fa-mobile-alt"></i> : 0822-3337-7661 <br>
                        <i class="fas fa-envelope"></i> : ravaastudio@gmail.com <br>
                        <i class="fas fa-globe"></i> : ravaastudio.wordpress.com
                    </p>
                </div>
            </div>
            <div class="col-md-7 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label class="form-group-sm">Company Name</label>
                    <div class="input-group input-group-sm">
                        <div class="input-group-prepend">
                            <span class="input-group-text" style="width: 30px"><i class="fas fa-landmark"></i></span>
                        </div>
                        <input type="text" autofocus class="form-control form-control-sm" value="Ravaa Studio">
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-group-sm">Address</label>
                    <div class="input-group input-group-sm">
                        <div class="input-group-prepend">
                            <span class="input-group-text" style="width: 30px"><i class="fas fa-map-marker-alt"></i></span>
                        </div>
                        <input type="text" class="form-control form-control-sm"
                            value="Gedong, Ds. Ngluyu, Kec. Ngluyu, Kab. Nganjuk">
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-group-sm">Phone</label>
                    <div class="input-group input-group-sm">
                        <div class="input-group-prepend">
                            <span class="input-group-text" style="width: 30px"><i class="fas fa-mobile-alt"></i></span>
                        </div>
                        <input type="text" class="form-control form-control-sm" value="0822-3337-7661">
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-group-sm">Company Logo</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        {{-- <div class="input-group-append">
                        <button class="input-group-text">Upload</button>
                        </div> --}}
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-group-sm">Email</label>
                    <div class="input-group input-group-sm">
                        <div class="input-group-prepend">
                            <span class="input-group-text" style="width: 30px"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input type="email" class="form-control form-control-sm" value="ravaastudio@gmail.com">
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-group-sm">Website</label>
                    <div class="input-group input-group-sm">
                        <div class="input-group-prepend">
                            <span class="input-group-text" style="width: 30px"><i class="fas fa-globe"></i></span>
                        </div>
                        <input type="text" class="form-control form-control-sm" value="ravaastudio.wordpress.com">
                    </div>
                </div>
                <div class="form-group text-center align-items-center justify-content-center">
                    <button type="submit" class="btn btn-success btn-sm save" style="width: 150px"><i
                            class="fas fa-paper-plane"></i> Save</button>
                    <button type="reset" class="btn btn-danger btn-sm cancel" style="width: 150px; margin-left: 20px"><i
                            class="fas fa-trash"></i> Cancel</button>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <script>
        $('.cancel').click(function() {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, cancel it!'
            });
        });
        // error
        //----------------------------
        //         Swal.fire({
        //   icon: 'error',
        //   title: 'Oops...',
        //   text: 'Something went wrong!',
        //   footer: '<a href="">Why do I have this issue?</a>'
        // })
        $('.save').click(function() {
            Swal.fire({
                icon: 'success',
                title: 'Saved!',
                text: "Your change has been Saved.",
                showConfirmButton: false,
                timer: 1500
            })
        });
    </script>
@endpush
