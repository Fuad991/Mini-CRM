@extends('employee.layout')

@section('employee')
<div class="container" style="padding-top:2%">
    <a href="{{ route('employees.index')}}">Back </a>
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Create Employee</h5>
    </div>
  </div>
</div>

<div class="container" style="padding-top:2%">
<form action="{{ route('employees.store')}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">First name</label>
      <input type="text" name="first-name" class="form-control" placeholder="Employee name">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Last name</label>
        <input type="text" name="last-name" class="form-control" placeholder="Employee name">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Company</label>
        <input type="text" name="company" class="form-control" placeholder="Employee company">
      </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Email</label>
      <input type="text" name="email" class="form-control" placeholder="Employee email">
    </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Phone</label>
    <input type="text" name="phone" class="form-control" placeholder="Employee phone">

</div>
    <button type="submit" class="btn btn-primary">save</button>
  </form>
</div>

  @endsection
