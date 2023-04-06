@extends('admin.dashboard')
@section('main_component')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="box-title">All Appointments </h4>
            </div>
            <div class="card-body--">
                <div class="table-stats order-table ov-h">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th class="serial">#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Service</th>
                                <th>Message</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($appointments as $value)
                            <tr>
                                <td class="serial">{{ $loop->iteration }}</td>
                                <td>{{$value->name}}</td>
                                <td>{{$value->email}}</td>
                                <td>{{$value->service}}</td>
                                <td title="{{$value->message}}">{{substr($value->message,0,25)}}...</td>
                                <td>
                                    <span class="badge badge-complete">Complete</span>
                                </td>
                            @endforeach
                        </tbody>
                    </table>
                </div> <!-- /.table-stats -->
            </div>
        </div> <!-- /.card -->
    </div>  <!-- /.col-lg-8 -->

</div>
@endsection