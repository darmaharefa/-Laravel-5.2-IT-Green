@extends("admin")

@section("breadcrumb")

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Tambah Cara dan Tips Menanam
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="<?php url("") ?>">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-edit"></i> Tambah Cara dan Tips Menanam
            </li>
        </ol>
    </div>
</div>

@endsection

@section("konten")

<div class="row">
    <div class="col-md-8">
        <form role="form" method="POST" action="{{ url(action("DashboardController@postSaveTips")) }}">
        {{ csrf_field() }}
            <div class="form-group">
                <label>Judul</label>
                <input class="form-control" placeholder="Enter text" name="judul">
                <p class="help-block">Ex: PERTUMBUHAN TANAMAN DENGAN CAHAYA BUATAN</p>
            </div>

             <div class="form-group">
                <label>Url</label>
                <input class="form-control" placeholder="Enter text" name="url">
                <p class="help-block">Ex : <b> <?php echo url("")."/tips"."</b>"."/pertumbuhan-dengan-cahaya-buatan" ?></p>
            </div>

            
    </div>

    <div class="col-md-4">
        <div class="well">
            <div class="row">
                <div class="col-md-6">
                    <a href="{{url("dashboard/tips")}}" class="btn btn-danger btn-sm btn-block">Cancel</a>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success btn-sm btn-block">Tambah</button>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label>Deskripsi</label>
            <textarea class="form-control" rows="10" name="deskripsi"></textarea>
        </div>
    </div>
</div>
</form>


@endsection