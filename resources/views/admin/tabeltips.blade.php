@extends('admin')

@section("judul","| Cara dan Tips Menanam")

@section("breadcrumb")

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Cara dan Tips Menanam
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="<?php url("") ?>">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-edit"></i> Cara dan Tips Menanam
            </li>
        </ol>
    </div>
</div>

@endsection

@section('konten')
<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-md-10"> 
                <h5>Cara dan Tips Menanam <span class="grey">({{count($data)}})</span></h5>
            </div>
            <div class="col-md-2">
                <a class="btn btn-primary btn-sm btn-block" href="{{url("/dashboard/tips/create")}}">
                    <span class="fa fa-plus"></span> Tambah
                </a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Judul</th>
                        <th class="text-center">Date</th>
                        <th colspan="3" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $key=>$item)
                    <tr>
                        <td class="text-center">{{++$key}}</td>
                        <td>{{$item->judul}}</td>
                        <td class="text-center">{{ date('d/m/Y', strtotime($item->created_at)) }}</td>
                        <td>
                            <a href="{{url("/tips")}}/{{$item->tips_id}}" class="btn btn-default btn-sm btn-block" target="_blank">Lihat</a>
                        </td>
                        <td>
                            <a href="{{url("/dashboard/tips")}}/{{$item->id}}/edit" class="btn btn-success btn-sm btn-block">Edit</a>
                        </td>
                        <td>
                            {!! Form::open(['action'=>['DashboardController@deleteTips', $item->id], 'method'=> 'delete']) !!}
                            {!! Form::submit('Hapus', ['class'=> 'btn btn-danger btn-sm btn-block']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection