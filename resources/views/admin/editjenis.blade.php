@extends("admin")

@section("judul", "| Edit Jenis")

@section("breadcrumb")

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Edit Jenis Tanaman
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="<?php url("") ?>">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-edit"></i> Edit Jenis Tanaman
            </li>
        </ol>
    </div>
</div>

@endsection

@section("konten")

<div class="row">
    <div class="col-md-8">
        {!! Form::model($data, ["route"=>["jenis.update",$data->jenis_id,$data->id],"method"=>"PUT","enctype"=>"multipart/form-data"]) !!}
        {{ csrf_field() }}
            {!! Form::label("nama", "Nama Tanaman") !!}
            {!! Form::text("nama",null, ["class"=>"form-control"]) !!}

            {!! Form::label("judul", "Judul") !!}
            {!! Form::text("judul",null, ["class"=>"form-control"]) !!}
            
            {!! Form::label("url","Url") !!}
            {!! Form::text("url", null, ["class"=>"form-control"]) !!}
            
            {!! Form::label("deskripsi", "Deskripsi") !!}
            {!! Form::textarea("deskripsi", null, ["class"=>"form-control"]) !!}
        
    </div>

   	<div class="col-md-4">
   		<div class="well">
        <div class="row">
          <div class="col-md-12">
            <label>Gambar</label>
            <img src="{{url("/img")}}/{{$data->img}}" class="img-responsive" alt="{{$data->img}}">
          </div>
          <div class="col-md-12">
            <br>
            {!! Form::label("img","Ganti Gambar") !!}
            {!! Form::file('img') !!}
            <br>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <dl>
              <dt>Created at : </dt>
              <dd> {{ date('M j, Y', strtotime($data->created_at)) }} </dd>
            </dl>
            <dl>
              <dt>Updated at</dt>
              <dd>{{ date('M j, Y', strtotime($data->updated_at)) }}</dd>
            </dl>
          </div>
        </div>
   			<div class="row">
   				<div class="col-md-12">
   					 <div class="form-group">
                        <label>Jenis Tanaman</label>
                        <select class="form-control" name="jenis_id">
                            <option value="1">Tanaman Bunga</option>
                            <option value="2">Tanaman Daun</option>
                            <option value="3">Tanaman Pohon</option>
                        </select>
                    </div>
   				</div>
   			</div>
   			<div class="row">
       			<div class="col-md-6">
       				<a href="{{url("/dashboard/jenis")}}/{{$data->jenis_id}}" class="btn btn-danger btn-sm btn-block">Cancel</a>
       			</div>
       			<div class="col-md-6">
       				<button type="submit" class="btn btn-success btn-sm btn-block">Simpan Perubahan</button>
       			</div>
       		</div>
   		</div>
   	</div>
   	</form>

</div>


@endsection