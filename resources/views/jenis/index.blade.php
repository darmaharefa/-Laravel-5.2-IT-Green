@extends('master')

@section('judul', '| Jenis Tanaman');

@section('konten')
  @if(count($data))
	<div class="content" id="content">
	  <table class="tablejenis">
	    <tr>
        @foreach($data as $item)
    		<td widht="25%">
        		<img src="<?php echo url('/') ?>/web/resources/assets/img/{{$item->img}}" alt="Gambar Bunga" width="180" height="136" />
        		<p text align="center"><a href="<?php echo url('') ?>/jenis/{{$item->jenis_id}}/{{$item->name}}">{{$item->name}}</a>
      		</td>
        @endforeach
	    </tr>
	  </table>
	</div>
  @endif
@stop