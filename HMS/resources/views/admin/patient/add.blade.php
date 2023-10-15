@extends('admin.master')
@section('title')
    Add Patient
@endsection
@section('content')
    <div class="row">
        <!-- Widget Item -->
        <div class="col-md-12">
            <div class="widget-area-2 proclinic-box-shadow">
                <h3 class=" color-blue">Add Patient</h3>
                <form action="{{route('patient.add')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="patient-name">Patient Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Patient name" id="patient-name">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="age">Age</label>
                            <input type="number" name="age" placeholder="Age" class="form-control" id="age">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" placeholder="Phone" class="form-control" id="phone">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Emergency-Contact">Emergency Contact No</label>
                            <input type="text" name="emergency_num" placeholder="Emergency Contact" class="form-control" id="Emergency-Contact">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" name="email" placeholder="email" class="form-control" id="Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="gender">Gender</label>
                            <select class="form-control" name="gender" id="gender">
                                <option value="0">Male</option>
                                <option value="1">Female</option>
                                <option value="2">Other</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="exampleFormControlTextarea1">Address</label>
                            <textarea placeholder="Address" name="address" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="Image">Image</label>
                            <input type="file" name="image" id="" class="form-control">
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <button type="submit" class="btn btn-primary btn-lg" style="background: blue">Submit</button>
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
