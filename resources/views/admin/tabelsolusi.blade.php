@extends('admin')

@section("breadcrumb")

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Solusi Kerusakan Tanaman
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="<?php url("") ?>">Dashboard</a>
            </li>
            <li class="active">
                @if($solusi_id == 1)
                    <i class="fa fa-edit"></i> Hama
                @elseif($solusi_id == 2)
                    <i class="fa fa-edit"></i> Pertumbuhan
                @endif
            </li>
        </ol>
    </div>
</div>

@endsection

@section('konten')
<div class="row">
    <div class="col-lg-12">
        @if($solusi_id == 1)
            <h5>Hama <span class="grey">({{count($data)}})</span></h5>
        @elseif($solusi_id == 2)
            <h5>Pertumbuhan <span class="grey">({{count($data)}})</span></h5>
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
                            <a href="{{url("/solusi")}}/{{$item->solusi_id}}/{{$item->url}}" class="btn btn-default btn-sm btn-block" target="_blank">Lihat</a>
                        </td>
                        <td>
                            <a href="{{url("/dashboard/solusi")}}/{{$item->solusi_id}}/{{$item->id}}/edit" class="btn btn-success btn-sm btn-block">Edit</a>
                        </td>
                        <td>
                             {!! Form::open(['route'=>['solusi.delete', $item->solusi_id,$item->id], 'method'=> 'delete']) !!}
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