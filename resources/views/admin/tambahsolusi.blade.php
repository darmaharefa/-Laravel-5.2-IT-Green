@extends("admin")

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
                <i class="fa fa-edit"></i> Tambah Solusi Kerusakan Tanaman
            </li>
        </ol>
    </div>
</div>

@endsection

@section("konten")

<div class="row">
    <div class="col-md-8">
        <form role="form" method="POST" action="{{ url(action("DashboardController@postSaveSolusi")) }}">
        {{ csrf_field() }}
            <div class="form-group">
                <label>Judul</label>
                <input class="form-control" placeholder="Enter text" name="judul">
                <p class="help-block">Ex: Ulat perusak daun ( Plutella xylostella )</p>
            </div>

             <div class="form-group">
                <label>Url</label>
                <input class="form-control" placeholder="Enter text" name="url">
                <p class="help-block">Ex : <b> <?php echo url("")."/solusi/1/"."</b>"."ulat-perusak-daun" ?></p>
            </div>

            <div class="form-group">
                <label>Deskripsi Singkat</label>
                <textarea class="form-control" rows="4" name="shortdesk"></textarea>
            </div>

            <div class="form-group">
                <label>Deskripsi</label>
                <textarea class="form-control" rows="6" name="deskripsi"></textarea>
            </div>
    </div>

   	<div class="col-md-4">
   		<div class="well">
   			<div class="row">
   				<div class="col-md-12">
   					 <div class="form-group">
                  <label>Jenis Solusi</label>
                  <select class="form-control" name="solusi_id">
                      <option value="1">Hama</option>
                      <option value="2">Pertumbuhan</option>
                  </select>
              </div>
   				</div>
   			</div>
   			<div class="row">
       			<div class="col-md-6">
       				<a href="" class="btn btn-danger btn-sm btn-block">Cancel</a>
       			</div>
       			<div class="col-md-6">
       				<button type="submit" class="btn btn-success btn-sm btn-block">Tambah</button>
       			</div>
       		</div>
   		</div>
   	</div>
   	</form>

</div>


@endsection