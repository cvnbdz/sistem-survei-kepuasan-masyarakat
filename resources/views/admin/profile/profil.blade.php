@extends('admin.layouts.dashboard')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong class="text-black fs-4"> <center> PROFIL USER </center></strong>
        </div>

        {{-- Body --}}
        <div class="card-body">
            <table id="datatable" class="table">
                <form>
                    <div class="mb-3">
                      <label for="username" class="form-label">Username</label>
                      <input type="username" class="form-control" id="username" placeholder="username">
                    </div>
                    <div class="mb-3">
                      <label for="name" class="form-label">Name</label>
                      <input type="name" class="form-control" id="name" placeholder="name">
                    </div>
                    <div class="mb-3">
                        <label for="pass_lama" class="form-label">Password Lama</label>
                        <input type="pass_lama" class="form-control" id="pass_lama" placeholder="password lama">
                      </div>
                      <div class="mb-3">
                        <label for="pass_baru" class="form-label">Password Baru</label>
                        <input type="pass_baru" class="form-control" id="pass_baru" placeholder="password baru">
                      </div>
                      <div class="mb-3">
                        <label for="pass_baru" class="form-label">Password Baru (Ulangi)</label>
                        <input type="pass_baru" class="form-control" id="pass_baru" placeholder="password baru (ulangi)">
                      </div>
                    <div class="row">
                                    <div class="col-12">
                                        <div class="justify-content-end">
                                             <button type="submit" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                                        </div>
                                    </div>
                  </form>
                
                
    </div>

@endsection
