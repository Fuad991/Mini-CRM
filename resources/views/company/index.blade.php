@extends('company.layout')

@section('company')

<div class="card container" style="margin-top: 30px">
    <h5 class="card-header">Companies</h5>
    <div class="card-body">
        <a class="btn btn-primary btn-lg" style="background-color:green" href="{{ route('companies.create')}}" role="button">create new company</a>
    </div>
    <div class="card container">
        <h5 class="card-header">Companies list</h5>
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
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Website</th>
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
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}} </td>
                            <td>{{$item->website}} </td>
                            <td>
                                <div class="row">
                                    <div class="col-sm">
                                        <a class="btn btn-success" href="{{route('companies.update',$item->id)}}">Edit </a>
                                    </div>

                                   <div class="col-sm">
                                        <form action="{{ route('companies.destroy',$item->id) }}" method="POST">
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
