@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">User Information</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('users/update') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						@foreach($users as $user)
						<div class="form-group">
							<label class="col-md-4 control-label">Name</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{$user->name}}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Phone</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="phone" value="{{$user->phone}}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail Address</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{$user->email}}">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-6">
								<input type="hidden" class="form-control" name="id" value="{{$user->id}}">
								<button type="submit" class="btn btn-primary">Update</button>
							</div>
						</div>
						@endforeach
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
