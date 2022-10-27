@extends('admin.master')

@section('content')
    <h6 class="mb-0 text-uppercase">DataTable Example</h6>
    <hr/>
    <div class="card">
        <div class="card-body">
            <h1 class="text-center">{{session('message')}}</h1>
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                        <th>Sl no</th>
                        <th>Course name</th>
                        <th>Teacher-Name</th>
                        <th>Teacher-email</th>
                        <th>course code</th>
                        <th>Course Description</th>
                        <th>Course Fee</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    @php $i=1 @endphp
                    @foreach($courses as $course)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{substr($course->course_name,0,20)}}</td>
                            <td>{{$course->name}}</td>
                            <td>{{$course->email}}</td>
                            <td>{{$course->course_code}}</td>
                            <td>{{substr($course->course_description,0,40)}}</td>
                            <td>{{$course->course_fee}}</td>
                            <td>
                                <img src="{{asset($course->image)}}" alt="" style="width: 100px;height: 100px">
                            </td>
                            <td>
                                <div class="row p-4">

                                    <div class="col-sm-6 float-end">
{{--                                        <a href="{{ route('edit-teacher',['id'=>$teacher->id]) }}" class="btn btn-primary">Edit</a>--}}
                                    </div>

                                    {{-- <a href="#" class="btn btn-danger" onclick="event.preventDefault();document.getElementById('delete').submit();">Delete</a>--}}
                                    <div class="col-sm-6 ">
                                        <form action="{{route('delete-teacher')}}" method="post" id="delete">
                                            @csrf
{{--                                            <input type="hidden" name="teacher_id" value="{{$teacher->id}}">--}}
                                            <input type="submit" name="" value="Delete" class="btn btn-danger" onclick="return confirm('are you sure to delete')">
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
@endsection
