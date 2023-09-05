@extends('admin.partials.main-section')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Completed Appointments</h6>
                <a href="">Show All</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0" style="overflow-x: scroll">
                    <thead>
                        <tr class="text-white">
                            <th scope="col">Sr No.</th>
                            <th scope="col">User Id</th>
                            <th scope="col">Patient Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Appointment Request Date</th>
                            <th scope="col">Appointment Reason</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($accepted as $request)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $request->user_id }}</td>
                                <td>{{ $request->patient_name }}</td>
                                <td>{{ $request->patient_email }}</td>
                                <td>{{ $request->patient_phone_no }}</td>
                                <td>{{ $request->patient_date_of_appointment }}</td>
                                <td>{{ $request->appointment_reason }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
