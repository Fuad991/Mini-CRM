@extends('employee.layout')

@section('employee')

<div class="card container" style="margin-top: 30px">
    <h5 class="card-header">Employees</h5>
    <div class="card-body">
        <a class="btn btn-primary btn-lg" style="background-color:green" href="{{ route('employees.create')}}" role="button">create new employee</a>
    </div>
    <div class="card container">
        <h5 class="card-header">Employees list</h5>
        <div class="card-body">
            <div class="contrainer">
                @if ($message=Session::get('success'))
                <div class="alert alert-primary" role="alert">
                    {{$message}}
                </div>
                @endif
                </div>

                <div class="container">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First name</th>
                            <th scope="col">Last name</th>
                            <th scope="col">Company</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col" style="width: 300px">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php
                                $i=0;
                            @endphp
                            @foreach ($model as $item)
                          <tr>
                            <th scope="row">{{++$i}}</th>
                            <td>{{$item->firstname}}</td>
                            <td>{{$item->lastname}} </td>
                            <td>{{$item->company}} </td>
                            <td>{{$item->email}} </td>
                            <td>{{$item->phone}} </td>
                            <td>
                                <div class="row">
                                    <div class="col-sm">
                                        <a class="btn btn-success" href="{{route('employees.update',$item->id)}}">Edit </a>
                                    </div>

                                   <div class="col-sm">
                                        <form action="{{ route('employees.destroy',$item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete </button>
                                        </form>
                                    </div>
                                  </div>

                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                  </div>
        </div>
      </div>
  </div>

@endsection

