@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

{{--                    {{ __('You are logged in!') }}--}}
                        <h1 class="text-center">{{session('message')}}</h1>

                        <form action="{{route('addStudent')}}" method="post">
                            @csrf
                           <div class="form-group">
                               <label for="" class="form-label">First Name</label>
                               <input type="text" name="first_name" class="form-control" placeholder="first Name">
                           </div>
                            <div class="form-group">
                                <label for="" class="form-label">Last Name</label>
                                <input type="text" name="last_name" class="form-control" placeholder="last Name">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Roll</label>
                                <input type="text" name="roll" class="form-control" placeholder="Roll">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="email">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Phone</label>
                                <input type="text" name="phone" class="form-control" placeholder="phone">
                            </div>
                            <div class="form-group mt-3">
                                <input type="submit" name="submit_btn" class="btn btn-outline-primary form-control" value="Submit">
                            </div>
                        </form>
                        <hr>
                        <hr>
                    <table class="table table-hover table-bordered mt-3">
                        <tr>
                            <th>Sl</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Roll</th>
                        </tr>
                        @foreach($students as $student)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$student->first_name.' '.$student->last_name}}</td>
                            <td>{{$student->phone}}</td>
                            <td>{{$student->email}}</td>
                            <td>{{$student->roll}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
