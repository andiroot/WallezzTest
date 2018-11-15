@extends('layouts.app')

@section('content')
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <table style="width:100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        
                                        <th>No Faktur</th>
                                        <th>Nama Konsumen</th>
                                        <th>Nama Barang</th>
                                        <th>Jumlah</th>
                                        <th>Harga Satuan</th>
                                        <th>Harga Total</th>
                                        <th>Tgl Faktur</th>
                                        
                                        </tr>
                                </thead>
                                
                                <tbody>
                                @foreach($penjualan as $data)
                                <tr>

                                <td>{{$data->id}}</td>
                                <td>{{$data->nama_cust}}</td>
                                <td>{{$data->nama_barang}}</td>
                                <td>{{$data->qty}}</td>
                                <td>{{$data->harga_satuan}}</td>
                                <td>{{$data->harga_total}}</td>
                                <td>{{$data->created_at}}</td>
                               
                                </tr>

                                @endforeach
                                </tbody>
                                </div>
                                
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
@endsection()
@section('js')
     <script>
            $(document).ready(function(){
                var table=     $('#dataTables-example').DataTable({
                processing: true,
        serverSide: true,
        ajax: '{{ route('barang.index') }}',
        columns: [
            //{data: nama buat di tabel , nama dari database/controller},
            {
                "className":      'details-control',
                "orderable":      false,
                "data":           null,
                "defaultContent": ''
            },
            {data: 'nama_barang', name: 'nama_barang'},
            {data: 'harga_jual', name: 'harga_jual'},
            {data: 'harga_beli', name: 'harga_beli'},
            {data: 'satuan', name: 'satuan'},
            {data: 'kategori', name: 'kategori'},
        ]
            });
           // Add event listener for opening and closing details
        
    </script>
             <!-- DataTables JavaScript -->
    <script src="{{URL::asset('/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('/vendor/datatables-plugins/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('/vendor/datatables-responsive/dataTables.responsive.js')}}"></script>
@endsection()