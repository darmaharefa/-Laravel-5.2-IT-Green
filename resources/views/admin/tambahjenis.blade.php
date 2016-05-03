@extends("admin")

@section("breadcrumb")

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Tambah Tanaman
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="<?php url("") ?>">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-edit"></i> Tambah Tanaman
            </li>
        </ol>
    </div>
</div>

@endsection

@section("konten")

<div class="row">
    <div class="col-md-8">
        <form role="form" method="POST" action="{{ url(action("DashboardController@postSaveJenis")) }}">
        {{ csrf_field() }}
            <div class="form-group">
                <label>Nama Tanaman</label>
                <input class="form-control" type="text" name="nama">
            </div>

            <div class="form-group">
                <label>Judul</label>
                <input class="form-control" placeholder="Enter text" name="judul">
                <p class="help-block">Ex: AESCYHNANTHUS (BUNGA LIPSTIK)</p>
            </div>

             <div class="form-group">
                <label>Url</label>
                <input class="form-control" placeholder="Enter text" name="url">
                <p class="help-block">Ex : <b> <?php echo url("")."/jenis/1/"."</b>"."aeschynanthus-bunga-lipstik" ?></p>
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
                        <label>Jenis Tanaman</label>
                        <select class="form-control" name="jenis_id">
                            <option value="1">Tanaman Bunga</option>
                            <option value="2">Tanaman Daun</option>
                            <option value="3">Tanaman Pohon</option>
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