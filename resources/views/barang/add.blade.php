@extends('layouts.app')

@section('content')
<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-danger">
					<div class="panel-heading">
						<h3 class="panel-title">Form Input Data Barang</h3>
					</div>
					<div class="panel-body">
						<form role="form" method="POST" action="{{ route('barang.save') }}">
					    {{ csrf_field() }}
					    	<div class="form-group">
					    		<label>Nama Barang</label>
					    		<input type="text" name="nama_barang" class="form-control" required="">
					    	</div>
                            <div class="form-group">
					    		<label>Harga Jual</label>
					    		<input type="text" name="harga_jual" class="form-control" required="">
					    	</div>
                            <div class="form-group">
					    		<label>Harga Beli</label>
					    		<input type="text" name="harga_beli" class="form-control" required="">
					    	</div>
                            <div class="form-group">
					    		<label>Satuan</label>
					    		<input type="text" name="satuan" class="form-control" required="">
					    	</div>
                            <div class="form-group">
					    		<label>Kategori</label>
					    		<input type="text" name="kategori" class="form-control" required="">
					    	</div>
                            <div class="form-group">
					    		<button type="submit" class="btn btn-save btn-sm">Save</button>
					    	</div>
					    </form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
