<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h2 class="modal-title">Dine - in</h2>
        </div>
        <div class="modal-body">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th>Reservation ID</th>
                    <th>Name</th>
                    {{-- <th>Email</th> --}}
                    <th>Phonenumber</th>
                    <th>Date Reservation</th>
                    <th>Timerange</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($data as $key => $datas)
                @if($datas->reservation_type == "Dine - in")
                  <tr>
                    <td>034{{$datas->reservation_id}}</td>
                    <td>{{$datas->firstname .' '. $datas->lastname}}</td>
                    {{-- <td>{{$datas->email}}</td> --}}
                    <td>{{$datas->phonenumber}}</td>
                    <td>{{$datas->datereservation}}</td>
                    <td>{{$datas->timerange}}</td>
                    @if($datas->status == "PAID/PROCESS")
                    <td><button class="btn btn-warning">{{$datas->status}}</button></td>
                    @elseif($datas->status == "DONE")
                    <td><button class="btn btn-success">{{$datas->status}}</button></td>
                    @else
                    <td><button class="btn btn-danger">{{$datas->status}}</button></td>
                    @endif
                  </tr>
                @endif
                @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>