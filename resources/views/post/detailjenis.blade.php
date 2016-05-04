@extends('master')

@section('judul', "| ".$data->judul)

@section('konten')
	<div id="content">
  		<table width="75%" height="495" border="0" align="right" cellpadding="0" cellspacing="1">
  			<tr>
    			<td><p><img src="{{ url("/img") }}/{{$data->img}}" alt="Gambar {{$data->judul}}" width="427" height="305" /></p>
      			<h6>&nbsp;</h6>
      			<h6>{{$data->judul}}</h6>
      			<p>&nbsp;</p>
      			<p>{!!$data->deskripsi!!}</p>  
      			<p><a href="{{url("/jenis")}}/{{$data->jenis_id}}">Back</a></p>
  			</tr>
  			<tr>
      			<td>&nbsp;</td>
  			</tr>
    	</table>
  	</div>
@endsection


