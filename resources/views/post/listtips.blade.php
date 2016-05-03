@extends("master")

@section("judul", "| List Cara dan Tips Menaman")

@section('konten')
  <div id="content">
        <div class="indent1">
            <div class="indent">
                @foreach($data as $item)
                <table width="75%" height="300" border="0" cellpadding="0" cellspacing="1">
                    <tr>
                        <td height="114"><h2>{{$item->judul}}</h2>
                        <p> {!! substr($item->deskripsi,0,170)!!}{{strlen($item->deskripsi) > 170 ? "..." : ""}} <br> <a href="{{url("/tips")}}/{{$item->url}}">Read more ...</a></p>
                        </p>
                        <p>&nbsp;</p></td>
                    </tr>
                </table>
                @endforeach
            </div>
            <div class="indent">
               <center> {{ $data->links() }}</center>
            </div>
        </div>
  </div>
@endsection