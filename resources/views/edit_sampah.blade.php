@extends('base')
@section('content')
						<div class="page-header">
							<h1>
								Sampah
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Edit Data Sampah Belum Dikelola
								</small>
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Edit 
								</small>
							</h1>
						</div>
				<div class="row-fluid sortable">
					<div class="box-content center">

						@foreach($data as $datas)
						<form name="autoSumForm" class="form-horizontal" role="form" method="post" id="add_sampah" action="{{ route('sampah.update', $datas->id) }}">
							<fieldset>
							{{ csrf_field() }}
                			{{ method_field('POST') }}
							  	<div class="control-group">
								<label class="control-label" for="selectError3">Petugas</label>
									<div class="controls">
									<span><input value="{{ $datas->id_petugas }}" type="text" name="id_petugas" id="id_petugas"  style="width: 300px" onfocus="startCalc();" onblur="stopCalc();" placeholder="Berat Sampah" required disabled="True" /></span>
									</div>
								</div>
								<div class="control-group">
									<label class=" control-label"> Berat Sampah <small>(gr)</small></label>

									<div class="controls">
										<span><input value="{{ $datas->berat_sampah }}" type="text" name="berat_sampah" id="berat_sampah"  style="width: 300px" onfocus="startCalc();" onblur="stopCalc();" placeholder="Berat Sampah" required /></span>	
									</div>
								</div>

								<div class="control-group">
								<label class="control-label" for="selectError3">Dari Kelas</label>
								<div class="controls">
								  <select required id="selectError3" name="dari_kelas" style="width: 315px;">
												<option value="">Pilih Kelas</option>
												<option value="XII RPL 1">XII RPL 1</option>
												<option value="XII RPL 2">XII RPL 2</option>
												<option value="XII RPL 3">XII RPL 3</option>
												<option value="XII RPL 4">XII RPL 4</option>
												<option value="XII RPL 5">XII RPL 5</option>
												<option value="XII TKJ 1">XII TKJ 1</option>
												<option value="XII TKJ 2">XII TKJ 2</option>
												<option value="XII TKJ 3">XII TKJ 3</option>
												<option value="XII TKJ 4">XII TKJ 4</option>
												<option value="XII TKJ 5">XII TKJ 5</option>
												<option value="XII TKJ 6">XII TKJ 6</option>
								  </select>
								</div>
								</div>
								<div class="control-group">
								<label class="control-label" for="selectError3">Status</label>
								<div class="controls">
								  <select required id="selectError3" name="status" style="width: 315px;">
												<option value="">Pilih Kelas</option>
												<option value="belum">Belum Dikelola</option>
												<option value="dikelola">Sudah Dikelola</option>
								  </select>
								</div>
								</div>
								@endforeach

							  <div class="form-actions">
								<button class="btn btn-info" type="submit" name="submit"><i class="ace-icon fa fa-check bigger-110"></i>Submit</button>
								<button class="btn" type="reset"><i class="ace-icon fa fa-undo bigger-110"></i>Reset</button>
							  </div>
							</fieldset>
						  </form>
					
					</div>
				
			</div><!--/row-->

@endsection