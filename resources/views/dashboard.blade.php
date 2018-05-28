@extends('base')
@section('content')			
				<div class="page-header">
							<h1>
								Dashboard
							</h1>
						</div>




						
			<div class="row-fluid">
				<div onTablet="span6" onDesktop="100%">
				<a href="staff/data_staff/" class="quick-button metro widget yellow span2">
					<i class="icon-group"></i>
					<p>Staff</p>
				</a>
				</div>
				<div class="widget green span5" onTablet="span6" onDesktop="100%">
					
					<h2><span class="glyphicons leaf"><i></i></span>Data Sampah Perkelas (gr)</h2>
					
					<hr>

					
					<div class="content">
						
						<div class="verticalChart" style="width: 500px">
							

							
							<div class="clearfix"></div>
							
						</div>
					
					</div>
					
				</div><!--/span-->
			
			

			
				
				<div class="widget blue span5" onTablet="span6" onDesktop="100%">
					
					<h2><span class="glyphicons heart"><i></i></span> Poin</h2>
					
					<hr>

					
					<div class="content">
						
						<div class="verticalChart" style="width: 500px">
							

							
							<div class="clearfix"></div>
							
						</div>
					
					</div>
					
				</div><!--/span-->

       </div>
@endsection