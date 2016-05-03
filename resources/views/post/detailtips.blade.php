@extends('master')

@section('judul', "| ".$data->judul)

@section('konten')
	<div id="content">
      <div class="indent1">
          <div class="indent">
              <table width="75%" height="366" border="0" cellpadding="0" cellspacing="1">
                  <tr>
                    <td>
                      <h2>{{$data->judul}}</h2>
                      {!!$data->deskripsi!!}
                      <p><a href="{{url("/tips")}}">Back</a></p>
                    </td>
                  </tr>
              </table>
        </div>
      </div>
    </div>
@endsection