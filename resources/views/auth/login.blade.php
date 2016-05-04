@extends("auth")

@section("judul", "| Login Form")

@section("konten")
	<div class="row">
		<div class="col-md-12">
			<center><h3>Login Page</h3></center>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			{!! Form::open() !!}

			{!! Form::label("email", "Email : ") !!}
			{!! Form::email("email", null, ["class"=>"form-control"]) !!}
			
			{!! Form::label("password", "Password :") !!}
			{!! Form::password("password", ["class"=>"form-control"]) !!}

			{!! Form::checkbox("remember") !!} 
			{!! Form::label("remember", "Remember Me") !!}
			<br>
			{!! Form::submit("Login", ["class"=>"btn btn-primary btn-sm btn-block"]) !!}

			{!! Form::close() !!}
		</div>
	</div>

@endsection