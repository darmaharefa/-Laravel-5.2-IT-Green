@extends("master")

@section("judul", "| List Jenis")

@section("konten")

<div class="content" id="content">
	<table class="tablejenis">
	    <tr>
        	@foreach($data as $item)
    		<td widht="25%">
        		<img src="{{ url("") }}" alt="Gambar Bunga" width="180" height="136" />
        		<p text align="center"><a href="{{url("/jenis")}}/{{$item->jenis_id}}/{{$item->url}}">{{$item->judul}}</a>
      		</td>
        	@endforeach
	    </tr>
	</table>
</div>

@endsection