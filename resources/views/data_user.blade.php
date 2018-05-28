@extends('base')
@section('content')
			<div class="row-fluid sortable center">		
				<div class="box span12">
				@if(Session::has('alert-success'))
	                <div class="alert alert-success">
	                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}
	                    </strong>
	                </div>
	            @endif
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white leaf"></i><span class="break"></span>Petugas</h2>
						<div class="box-icon">
						</div>
					</div>
					<div class="box-content center">
						<table class="table center table-striped table-bordered bootstrap-datatable datatable">
											<thead>
												<tr>
													<th class="center">No.</th>
													<th class="center">ID Petugas</th>
													<th class="center">Kelas</th>
													<th class="center">Status</th>
													<th class="center">Aksi</th>
													
												</tr>
											</thead>

											<tbody>
												@php $no = 1; @endphp
									                @foreach($data as $datas)
									                		
									                    <tr>
									                        <td>{{ $no++ }}</td>
									                        <td>{{ $datas->id_petugas }}</td>
									                        <td>{{ $datas->name }}</td>
									                        <td>{{ $datas->kelas }}</td>
									                        <td>
									                            <form action="/delete" method="post">
									                                {{ csrf_field() }}
									                                {{ method_field('DELETE') }}
									                                <a href="{{ route('sampah.edit',$datas->id) }}" class=" btn btn-sm btn-primary">Edit</a>
									                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
									                            </form>
									                        </td>
									                    </tr>
									                @endforeach
												
											</tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

				
@endsection