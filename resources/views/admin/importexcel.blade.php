<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h2 class="modal-title">Room - Delivery</h2>
        </div>
        <div class="modal-body">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th>Reservation ID</th>
                    <th>Name</th>
                    {{-- <th>Email</th> --}}
                    <th>Phonenumber</th>
                    <th>Roomnumber</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($data as $key => $datas)
                @if($datas->reservation_type == "Room - Delivery")
                  <tr>
                    <td>034{{$datas->reservation_id}}</td>
                    <td>{{$datas->firstname .' '. $datas->lastname}}</td>
                    {{-- <td>{{$datas->email}}</td> --}}
                    <td>{{$datas->phonenumber}}</td>
                    <td>{{$datas->roomnumber}}</td>
                    @if($datas->status == "PAID/PROCESS")
                    <td><span class="label label-warning">{{$datas->status}}</span></td>
                    @elseif($datas->status == "DONE")
                    <td><span class="label label-success">{{$datas->status}}</span></td>
                    @else
                    <td><span class="label label-danger">{{$datas->status}}</span></td>
                    @endif
                  </tr>
                @endif
                @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>