@extends('layouts.app')
@section('content')
<!-- Main Content -->
<!-- 
<H3>Proses Penambahan Data</h3>
<form action="/user" method="post">
  @csrf
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">User Name</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter User Name" maxlength="50" required="">
    </div>
  </div>
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">User Email</label>
    <div class="col-sm-12">
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter User Email" maxlength="50" required="">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">User Password</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="password" name="password" placeholder="Enter Password" required="">
    </div>
  </div>
  <button type="submit" name="add" class="btn btn-primary float-right">Tambah Data</button>
</form>
<a href="/home" class="btn btn-primary">Kembali Ke Home &rarr;</a> -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Form Validation User</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Forms</a></div>
        <div class="breadcrumb-item">Form Validation</div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Tambah User</h2>
      <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card">
            <!-- <form action="/user" method="post">
  @csrf
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">User Name</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter User Name" maxlength="50" required="">
    </div>
  </div> -->
            <form action="/user" method="post">
              <div class="card-header">
                <h4>Server-side Validation</h4>
              </div>
              <div class="card-body">
                @csrf
                <div class="form-group">
                  <label for="name">Your Name</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Enter User Name" required="">
                  @error('name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter User Email" required="">
                  @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="text" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Enter User Password" required="">
                  @error('password')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
              <div class="card-footer text-right">
                <button class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
  </section>
</div>
@endsection