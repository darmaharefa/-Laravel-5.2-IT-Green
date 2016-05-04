@extends("auth")

@section("judul", "| Register Form")

@section("konten")
	<div class="row">
		<div class="col-md-12">
			<center><h3>Login Page</h3></center>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			{!! Form::open() !!}

			{!! Form::label("name", "Nama : ") !!}
			{!! Form::text("name", null, ["class"=>"form-control"]) !!}

			{!! Form::label("email", "Email : ") !!}
			{!! Form::email("email", null, ["class"=>"form-control"]) !!}
			
			{!! Form::label("password", "Password :") !!}
			{!! Form::password("password", ["class"=>"form-control"]) !!}

			{!! Form::label("password_confirmation", "Re-Password :") !!}
			{!! Form::password("password_confirmation", ["class"=>"form-control"]) !!}

			<br>
			{!! Form::submit("Reister", ["class"=>"btn btn-primary btn-sm btn-block"]) !!}

			{!! Form::close() !!}
		</div>
	</div>

@endsection