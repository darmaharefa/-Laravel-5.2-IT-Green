@extends("admin")

@section("breadcrumb")

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Edit Cara dan Tips Menanam
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="<?php url("") ?>">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-edit"></i> Edit Cara dan Tips Menanam
            </li>
        </ol>
    </div>
</div>

@endsection

@section("konten")

<div class="row">
    <div class="col-md-8">
        {!! Form::model($data, ['action'=>['DashboardController@putUpdateTips',$data->id],'method'=>'PUT']) !!}
        <form role="form" method="POST" action="{{ url(action("DashboardController@postSaveTips")) }}">
        {{ csrf_field() }}
            <div class="form-group">
                {!! Form::label('judul', 'Judul') !!}
                {!! Form::text('judul', null, ['class'=>'form-control', 'placeholder' => 'Enter text']) !!}
            </div>

             <div class="form-group">
                {!! Form::label('url','Url') !!}
                {!! Form::text('url', null, ['class'=>'form-control', 'placeholder'=> 'Enter text']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('deskripsi','Deskripsi') !!}
                {!! Form::textarea('deskripsi', null, ['class'=>'form-control','row'=>'6']) !!}
            </div>
    </div>

    <div class="col-md-4">
        <div class="well">
            <div class="row">
                <div class="col-md-12">
                    <dl class="dl-horizontal">
                      <dt>Created at : </dt>
                      <dd> {{ date('M j, Y', strtotime($data->created_at)) }} </dd>
                    </dl>
                    <dl class="dl-horizontal">
                      <dt>Updated at</dt>
                      <dd>{{ date('M j, Y', strtotime($data->updated_at)) }}</dd>
                    </dl>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <a href="" class="btn btn-danger btn-sm btn-block">Cancel</a>
                </div>
                <div class="col-md-6">
                    {!! Form::submit('Simpan Perubahan', ['class'=>'btn btn-success btn-sm btn-block']) !!}
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}

</div>


@endsection