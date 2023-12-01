@extends('admin.master')
@section('title')
    Edit Patient
@endsection
@section('content')
    <div class="row">
        <!-- Widget Item -->
        <div class="col-md-12">
            <div class="widget-area-2 proclinic-box-shadow">
                <h3 class="widget-title">Edit Patient</h3>
                <form action="{{route('patient.update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$patient->id}}">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="patient-name">Patient Name</label>
                            <input type="text" name="name" class="form-control" value="{{$patient->name}}" id="patient-name" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="age">Age</label>
                            <input type="number" name="age" value="{{$patient->age}}" class="form-control" id="age" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" value="{{$patient->phone}}" class="form-control" id="phone">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">Emergency Contact No</label>
                            <input type="text" name="emergency_num" value="{{$patient->emergency_num}}" class="form-control" id="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" name="email" value="{{$patient->email}}" class="form-control" id="Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="gender">Gender</label>
                            <select class="form-control" id="gender" name="gender">
                                <option value="0" {{$patient->gender == 0 ? 'selected': ''}}>Male</option>
                                <option value="1" {{$patient->gender == 1 ? 'selected': ''}}>Female</option>
                                <option value="2" {{$patient->gender == 2 ? 'selected': ''}}>Other</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="exampleFormControlTextarea1">Address</label>
                            <textarea placeholder="Address" name="address" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$patient->address}}</textarea>
                        </div>
                        <div class="form-group col-md-12">
                            @if($patient->image_path)
                                <img src="{{asset($patient->image_path)}}" alt="" class="rounded-circle"
                                     height="250px" width="250px">
                                <br>
                            @endif
                            <label for="email">Image</label>
                            <input type="file" name="image" id="" class="form-control">

                        </div>

                        <div class="form-group col-md-6 mb-3">
                            <button type="submit" class="btn btn-primary btn-lg">Update</button>
                        </div>
                    </div>
                </form>
                {{--                <!-- Alerts-->--}}
                {{--                <div class="alert alert-success alert-dismissible fade show" role="alert">--}}
                {{--                    <strong>Successfully Done!</strong> Please add payment now--}}
                {{--                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
                {{--                        <span aria-hidden="true">×</span>--}}
                {{--                    </button>--}}
                {{--                </div>--}}
                {{--                <div class="alert alert-warning alert-dismissible fade show" role="alert">--}}
                {{--                    <strong>Holy guacamole!</strong> You should check in on some of those fields below.--}}
                {{--                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
                {{--                        <span aria-hidden="true">×</span>--}}
                {{--                    </button>--}}
                {{--                </div>--}}
                <!-- /Alerts-->
            </div>
        </div>
        <!-- /Widget Item -->
    </div>
@endsection
