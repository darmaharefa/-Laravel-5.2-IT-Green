@extends("master")

@section("judul", "| List Solusi")

@section('konten')
    <div id="content">
        <div class="indent1">
            <div class="indent">
                @if($solusi_id == 1)
                    @include("post._solusihama")
                @elseif($solusi_id == 2)
                    @include("post._solusipertumbuhan")
                @endif
                <h5><p>&nbsp;</p></h5>
            </div>
            
            @if($solusi_id == 1)
                <h2>Kerusakan Tanaman yang disebabkan Hama</h2>
            @elseif($solusi_id == 2)
                <h2>Kerusakan Tanaman pada Pertumbuhan</h2>
            @endif

            @foreach($data as $item)
                <li>
                    <a href="{{url("/solusi")}}/{{$item->solusi_id}}/{{$item->url}}"><strong>{{$item->judul}}</strong></a><br/>
                    <p>{!!$item->shortdesk!!}</p>
                    <a href="{{url("/solusi")}}/{{$item->solusi_id}}/{{$item->url}}">penanganan...</a>
                </li>
                </br>
            @endforeach
        </div>
     </div>
@endsection