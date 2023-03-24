@extends('employee.layout')

@section('employee')

<div class="container" style="padding-top:2%">
    <a href="{{ route('employee.index')}}">Back </a>
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Update employee</h5>
      <p class="card-text"> employee Name: {{ $eployees->name }} </p>
    </div>
  </div>
</div>

<div class="container" style="padding-top:2%">
<form action="{{ route('employees.update', $employees->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="exampleInputEmail1">First name</label>
      <input type="text" name="first-name" value="{{ $employees->first-name }}" class="form-control" placeholder="employee first name">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Last name</label>
        <input type="text" name="last-name" value="{{ $employees->last-name }}" class="form-control" placeholder="employee last name">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Company</label>
        <input type="text" name="company" value="{{ $employees->company }}" class="form-control" placeholder="employee company">
      </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Email</label>
      <input type="text" name="email" value="{{ $employees->email }}" class="form-control" placeholder="employee email">
    </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Phone</label>
    <input type="text" value="{{ $employees->phone }}" name="phone"
    class="form-control" placeholder="employee phone">

</div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>

  @endsection
