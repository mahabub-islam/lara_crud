@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">User Information</div>
				<div class="panel-body">

					@if (session('status'))
						<div class="alert alert-danger">
							{{ session('status') }}
						</div>
					@endif

					<table style="width: 100%;" class="table">
						<thead>
							<tr>
								<td>SL</td>
								<td>Name</td>
								<td>Phone</td>
								<td>Email</td>
								<td>Action</td>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1 ?>
							@foreach($users as $user)
								<tr>
									<td>{{$i}}</td>
									<td>{{$user->name}}</td>
									<td>{{$user->phone}}</td>
									<td>{{$user->email}}</td>
									<td><a href="{{ url('/users/edit/'.$user->id) }}">Edit</a>  <a href="{{ url('/users/delete/'.$user->id) }}">Delete</a></td>
								</tr>
							<?php $i = $i +1 ?>
							@endforeach
						</tbody>
					</table>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
