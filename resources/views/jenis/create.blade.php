@extends("master")

@section("title", "Create Jenis Tanaman")

@section('konten')
	<div id="content">
		<div class="indent1">
			<div class="indent">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						{!! Form::open(array('route'=>'posts.store')) !!}
						{!! Form::label('title','Title') !!}
						{!! Form::text('title',null,array('class'=>'form-control')) !!}

						{!! Form::label('slug', 'Url') !!}
							{!! Form::text('slug', null, ['class'=>'form-control']) !!}

						{!! Form::label('body', 'Pesan')!!}
						{!! Form::textarea('body',null,array('class'=>'form-control')) !!}

						{!! Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block','style'=>'margin-top:10px')) !!}
						
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection