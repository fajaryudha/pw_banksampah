@extends('base')
@section('content')
							<div class="page-header">
							<h1>
								Sampah
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Input Pengumpulan
								</small>
							</h1>
						</div>


	<div class="row-fluid sortable">
			
				
					<div class="box-content center">
						<form name="autoSumForm" class="form-horizontal" role="form" method="post" id="add_sampah" action="{{ route('sampah.store') }}">
							<fieldset>
								{{ csrf_field() }}
							  	<div class="control-group">
								<label class="control-label" for="selectError3">Penyetor</label>
								<div class="controls">
								  <select required id="selectError3" name="id_petugas" style="width: 315px;">
												<option value="">Pilih Kelas</option>
												<option value="01012018">XII RPL 1</option>
												<option value="01022018">XII RPL 2</option>
												<option value="01032018">XII RPL 3</option>
												<option value="01042018">XII RPL 4</option>
												<option value="01052018">XII RPL 5</option>
												<option value="01062018">XII TKJ 1</option>
												<option value="01072018">XII TKJ 2</option>
												<option value="01082018">XII TKJ 3</option>
												<option value="01092018">XII TKJ 4</option>
												<option value="01102018">XII TKJ 5</option>
												<option value="01112018">XII TKJ 6</option>
								  </select>
								</div>
								</div>
								<div class="control-group">
									<label class=" control-label"> Berat Sampah <small>(gr)</small></label>

									<div class="controls">
										<span><input type="text" name="berat_sampah" id="berat_sampah"  style="width: 300px" onfocus="startCalc();" onblur="stopCalc();" placeholder="Berat Sampah" required /></span>	
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

							  <div class="form-actions">
								<button class="btn btn-info" type="submit" name="submit"><i class="ace-icon fa fa-check bigger-110"></i>Submit</button>
											&nbsp;
								<button class="btn" type="reset"><i class="ace-icon fa fa-undo bigger-110"></i>Reset</button>
							  </div>
							</fieldset>
						  </form>
					
					</div>
				
			</div><!--/row-->
@endsection