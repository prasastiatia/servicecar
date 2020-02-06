@extends('admin.admin')
@section('content')
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.css' />
 {{-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' /> --}}
 


<h3>JADWAL</h3>

<div id='calendar'></div>
@section('script')
 <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
 <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
 <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.js'></script>
 <script>
	 $(document).ready(function() {
		 // page is now ready, initialize the calendar...
		 $('#calendar').fullCalendar({
			 // put your options and callbacks here
			 events : [
				 @foreach($tabeljadwal as $task)
				 {
                     title   : '{{ $task->montir }}',
					 start  : '{{ $task->tanggal_servis }}',
				 },
				 @endforeach
			 ]
		 })
	 });
 
 </script>
 @endsection

<div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">TABEL JADWAL</h3>
			</div>
			
			<!-- /.box-header -->
			<br>
            <div class="box-body">
				<br>
              <table class="table" >
              	<tr class="tbl-green" align="justify">
              		<th>No</th>
              		<th>Username</th>
              		<th>Email</th>
              		<th>Jenis Servis</th>
                    <th>Harga</th>
					<th>Tanggal Servis</th>
              	</tr>

              	@php
              	$i = 1;
              	@endphp 
              	@foreach ($tabeljadwal as $tabeljadwal)
              	<tr class="tbl-green1">
              		<td>{{ $i}}</td>
              		<td>{{ $tabeljadwal->name }}</td>
              		<td>{{ $tabeljadwal->email }}</td>
              		<td>{{ $tabeljadwal->jenis_servis}}</td>
					<td>{{ $tabeljadwal->harga}}</td>
					<td> {{$tabeljadwal->tanggal_servis}}</td>
              	</tr>
              	@php
              	$i++;
              	@endphp
              	@endforeach
              </table>
		  </div>
</div>
   @endsection
  