@extends('master')

@section('judul', "| ".$data->judul)

@section('konten')
	<div id="content">
    	<div class="indent1">
      		<div class="indent">
        			<table width="101%" height="366" border="0" cellpadding="0" cellspacing="1">
          				<tr>
            				<td width="21%" height="114" align="center" text>
            					<img src="{{ url("/img") }}/{{$data->img}}" width="328" height="192" alt="{{$data->title}}"/>
            				</td>
            				<td width="79%" height="114" align="center" text>
            					<h6><strong>{{$data->judul}}</strong></h6>
            				</td>
          				</tr>
          				<tr>
            				<td colspan="2">
            					<p>
            						{!!$data->deskripsi!!}
            					</p>
            				</td>
          				</tr>
        			</table>
      		</div>
    	</div>
  	</div>
@stop