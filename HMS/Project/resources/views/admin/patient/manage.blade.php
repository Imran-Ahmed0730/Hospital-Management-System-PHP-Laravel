@extends('admin.master')
@section('title')
    All Patients
@endsection
@section('content')
<div class="row">
    <!-- Widget Item -->
    <div class="col-md-12">
        <div class="widget-area-2 proclinic-box-shadow">
            <h3 class="widget-title">Patients List</h3>
            <div class="table-responsive mb-3">
                <table id="tableId" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>SL No</th>
                        <th>Patient ID</th>
                        <th>Patient Name</th>

                        <th>Phone</th>
                        <th>Appointment Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $i=1 @endphp
                    @foreach($patients as $patient)
                        <tr>
                            <td>{{$i++}}.</td>
                            <td>{{$patient->id}}</td>
                            <td>{{$patient->name}}</td>
                            <td>{{$patient->phone}}</td>
                            <td>

                            </td>
                            <td>
                                <span class="badge badge-success">Completed</span>
                            </td>
                            <td>
                                <a href="{{route('patient.edit', ['id'=>$patient->id])}}" class="btn btn-primary fs-6">
                                    <span class="ti-pencil" title="Edit Info"></span></a>
                                <a href="{{route('patient.details', ['id'=>$patient->id])}}" class="btn btn-info fs-6">
                                    <span class="ti-info" title="Patient Details"></span></a>
                                <a href="" class="btn btn-primary fs-6" onclick="event.preventDefault();
                                document.getElementById('removePatientForm').submit()">
                                    <span class="ti-trash" title="Remove Patient"></span></a>
                                <form action="{{route('patient.remove')}}" method="post" id="removePatientForm">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$patient->id}}">
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
                <!--Export links-->
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center export-pagination">
                        <li class="page-item">
                            <a class="page-link" href="#"><span class="ti-download"></span> csv</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#"><span class="ti-printer"></span>  print</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#"><span class="ti-file"></span> PDF</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#"><span class="ti-align-justify"></span> Excel</a>
                        </li>
                    </ul>
                </nav>
                <!-- /Export links-->
            </div>
        </div>
    </div>
    <!-- /Widget Item -->
</div>
@endsection
