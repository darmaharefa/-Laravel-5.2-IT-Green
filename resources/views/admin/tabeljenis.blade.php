@extends('admin')

@section("breadcrumb")

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Jenis Tanaman
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="<?php url("") ?>">Dashboard</a>
            </li>
            <li class="active">
                @if($jenis_id == 1)
                    <i class="fa fa-edit"></i> Jenis Tanaman Bunga
                @elseif($jenis_id == 2)
                    <i class="fa fa-edit"></i> Jenis Tanaman Daun
                @elseif($jenis_id == 3)
                    <i class="fa fa-edit"></i> Jenis Tanaman Pohon
                @endif
            </li>
        </ol>
    </div>
</div>

@endsection

@section('konten')
<div class="row">
    <div class="col-lg-12">
        @if($jenis_id == 1)
            <h5>Tanaman Bunga <span class="grey">({{count($data)}})</span></h5>
        @elseif($jenis_id == 2)
            <h5>Tanaman Daun <span class="grey">({{count($data)}})</span></h5>
        @elseif($jenis_id == 3)
            <h5>Tanaman Pohon <span class="grey">({{count($data)}})</span></h5>
        @endif
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
                            <a href="{{url("/jenis")}}/{{$item->jenis_id}}/{{$item->url}}" class="btn btn-default btn-sm btn-block" target="_blank">Lihat</a>
                        </td>
                        <td>
                            <a href="{{url("/dashboard/jenis")}}/{{$item->jenis_id}}/{{$item->id}}/edit" class="btn btn-success btn-sm btn-block">Edit</a>
                        </td>
                        <td>
                            {!! Form::open(['route'=>['jenis.delete', $item->jenis_id,$item->id], 'method'=> 'delete']) !!}
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