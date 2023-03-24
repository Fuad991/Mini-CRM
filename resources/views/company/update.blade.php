@extends('company.layout')

@section('company')

<div class="container" style="padding-top:2%">
    <a href="{{ route('companies.index')}}">Back </a>
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Update company</h5>
      <p class="card-text"> Company Name: {{ $companies->name }} </p>
    </div>
  </div>
</div>

<div class="container" style="padding-top:2%">
<form action="{{ route('companies.update', $companies->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" name="name" value="{{ $companies->name }}" class="form-control" placeholder="company name">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Email</label>
      <input type="text" name="email" value="{{ $companies->email }}" class="form-control" placeholder="company email">
    </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Logo</label>
    <input type="text" value="{{ $companies->logo }}" name="logo"
    class="form-control" placeholder="company logo">

  <label for="exampleInputPassword1">Website</label>
  <input type="text" name="website" value="{{ $companies->website }}" class="form-control" placeholder="company website">
</div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>

  @endsection
