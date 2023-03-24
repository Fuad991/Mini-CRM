@extends('company.layout')

@section('company')
<div class="container" style="padding-top:2%">
    <a href="{{ route('companies.index')}}">Back </a>
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Create company</h5>
    </div>
  </div>
</div>

<div class="container" style="padding-top:2%">
<form action="{{ route('companies.store')}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" name="name" class="form-control" placeholder="company name">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Email</label>
      <input type="text" name="email" class="form-control" placeholder="company email">
    </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Logo</label>
    <input type="text" name="logo" class="form-control" placeholder="company email">
   <!-- <div class="input-group mb-3">
        <input type="file" class="form-control" id="inputGroupFile02" name="logo">
      </div> -->
  <label for="exampleInputPassword1">Website</label>
  <input type="text" name="website" class="form-control" placeholder="company email">
</div>
    <button type="submit" class="btn btn-primary">save</button>
  </form>
</div>

  @endsection
