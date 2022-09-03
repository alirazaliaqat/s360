@extends('customer.customer-master')

@section('content')

<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
	<!--begin::Content wrapper-->
	<div class="d-flex flex-column flex-column-fluid">
		<!--begin::Toolbar-->
		<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
			<!--begin::Toolbar container-->
			<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
				<!--begin::Page title-->
				<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
					<!--begin::Title-->
					<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">New RFQ</h1>
					<!--end::Title-->
					<!--begin::Breadcrumb-->
					<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">
							<a href="/customer" class="text-muted text-hover-primary">Home</a>
						</li>
						<!--end::Item-->
						 <!--begin::Item-->
						 <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted"> <a href="/customer/list-rfq" class="text-muted text-hover-primary">RFQ</a></li>
                        <!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item">
							<span class="bullet bg-gray-400 w-5px h-2px"></span>
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">New RFQ</li>
						<!--end::Item-->
					</ul>
					<!--end::Breadcrumb-->
				</div>
				<!--end::Page title-->
				
			</div>
			<!--end::Toolbar container-->
		</div>
		<!--end::Toolbar-->
		<!--begin::Content-->
		<div id="kt_app_content" class="app-content flex-column-fluid">
			<!--begin::Content container-->
			<div id="kt_app_content_container" class="app-container container-xxl">
				<!--begin::Layout-->
				<div class="d-flex flex-column">
					<!--begin::Content-->
					
					<div class="flex-lg-row-fluid mb-10 mb-lg-0">
						<!--begin::Card-->
						<div class="card">
							<!--begin::Card body-->
							<div class="card-body p-12">
								<!--begin::Form-->
								<form action="" id="kt_invoice_form">
									<!--begin::Wrapper-->
									<div class="d-flex flex-column align-items-start flex-xxl-row">
										
										<!--begin::Input group-->
										<div class="d-flex flex-center flex-equal fw-row text-nowrap order-1 order-xxl-2 me-4" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Enter invoice number">
											<span class="fs-2x fw-bold text-gray-800">RFQ #</span>
											<input type="text" class="form-control form-control-flush fw-bold text-muted fs-3 w-125px" value="2021001" placehoder="..." />
										</div>
										<!--end::Input group-->
										
									</div>
									<!--end::Top-->
									<!--begin::Separator-->
									<div class="separator separator-dashed my-10"></div>
									<!--end::Separator-->
									<!--begin::Wrapper-->
									<div class="mb-0">
										
										<!--begin::Table wrapper-->
										<div class="table-responsive mb-10">
											<!--begin::Table-->
											<table class="table g-2 gs-0 mb-0 fw-bold text-gray-700" data-kt-element="items">
												<!--begin::Table head-->
												<thead>
													<tr class="border-bottom fs-7 fw-bold text-gray-700 text-uppercase">
														<th class="min-w-100px w-150px">Item</th>
														<th class="min-w-150px w-150px">Description</th>
														<th class="min-w-50px w-50px">Color</th>
														<th class="min-w-175px w-200px">Size</th>
														<th class="">Design</th>
														<th class="">Fabric</th>
														<th class="min-w-75px w-100px">QTY</th>
														<th class="w-50px">Action</th>
													</tr>
												</thead>
												<!--end::Table head-->
												<!--begin::Table body-->
												<tbody>
													<tr class="border-bottom border-bottom-dashed" data-kt-element="item">
														<td class="">
															<input type="text" class="form-control form-control-solid mb-2" name="name[]" placeholder="Item name" />
															
														</td>
														<td class="">
															<textarea type="text" class="form-control form-control-solid" name="description[]" row="1" placeholder="Description" style="height: 38px !important;"></textarea>
														</td>
														
														<td class="">
															<input type="color" class="form-control form-control-solid" name="color[]" placeholder="255,255,255" />
														</td>
														<td class="d-flex">
															<div class="d-flex align-items-center w-50">
																<label class="pe-2">L</label>
																<select name="length" class="1-500 form-select" data-placeholder="L">
																	
																	
																</select>
															</div>
															<div class="d-flex align-items-center w-50">
																<label class="px-2">W</label>
																<select name="width" class="1-500 form-select" data-placeholder="L">
																	
																	
																</select>
															</div>			
														</td>
														
														<td class="">
															<select name="design" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Design">
																<option></option>
																<option value="strips">Strips</option>
																<option value="woven">Woven</option>
																<option value="plain">Plain</option>
																
																
															</select>
															
															
															<td class="d-flex">
																<div class="d-flex align-items-center w-50">
																	
																	
																	<label class="px-2">cotton</label>
																	<select name="cotton" class="per1-100 form-select" data-placeholder="Cotton">
																		<?php
																		for ($i=1; $i<=100; $i++)
																		{
																			?>
																			<option value="<?php echo $i;?>"><?php echo $i;?>%</option>
																			<?php
																		}
																		?>
																	</select>
																</div>
																<div class="d-flex align-items-center w-50">
																	
																	<label class="px-2">Nylon</label>
																	<select name="Nylon" class="per1-100 form-select" data-placeholder="Linen">
																		<?php
																		for ($i=1; $i<=100; $i++)
																		{
																			?>
																			<option value="<?php echo $i;?>"><?php echo $i;?>%</option>
																			<?php
																		}
																		?>
																	</select>
																</div>
																<div class="d-flex align-items-center w-50">
																	
																	<label class="px-2">Silk</label>
																	<select name="Silk" class="per1-100 form-select" data-placeholder="Silk">
																		<?php
																		for ($i=1; $i<=100; $i++)
																		{
																			?>
																			<option value="<?php echo $i;?>"><?php echo $i;?>%</option>
																			<?php
																		}
																		?>
																	</select>
																</div>
																<div class="d-flex align-items-center w-50">
																	
																	<label class="px-2">Linen</label>
																	<select name="Silk" class="per1-100 form-select" data-placeholder="Silk">
																		<?php
																		for ($i=1; $i<=100; $i++)
																		{
																			?>
																			<option value="<?php echo $i;?>"><?php echo $i;?>%</option>
																			<?php
																		}
																		?>
																	</select>
																</div>
																
																
																
																<td class="">
																	<input class="form-control form-control-solid" type="number" min="1" name="quantity[]" placeholder="1" value="1" data-kt-element="quantity" />
																</td>
																
																
																<td class="pt-3 text-center">
																	
																	
																		<button type="button" class="btn py-1" data-bs-toggle="dropdown" aria-expanded="false">
																			<i class="fa fa-cog"></i>
																		</button>
																		<ul class="dropdown-menu">
																			<li><button type="button" class="border-0 dropdown-item" data-kt-element="remove-item">
																					Delete
																			</button></li>
																			<li><button type="button" class="border-0 dropdown-item" data-kt-element="remove-item">
																				Duplicate
																			</button>
																		   </li>
																			
																		</ul>
																	
																</td>
																<td class="pt-4">
																	<button class="btn btn-success px-2 py-0 border-0" data-kt-element="add-item">+</button>
																</td>
															</tr>
														</tbody>
														<!--end::Table body-->
														
													</table>
												</div>
												<!--end::Table-->
												<!--begin::Item template-->
												<table class="table d-none" data-kt-element="item-template">
													<tr class="border-bottom border-bottom-dashed" data-kt-element="item">
														<td class="">
															<input type="text" class="form-control form-control-solid mb-2" name="name[]" placeholder="Item name" />
															
														</td>
														<td class="">
															<input type="text" class="form-control form-control-solid" name="description[]" placeholder="Description" />
														</td>
														
														<td class="">
															<input type="color" class="form-control form-control-solid" name="color[]" placeholder="255,255,255" />
														</td>
														<td class="d-flex">
															<div class="d-flex align-items-center w-50">
																<label class="pe-2">L</label>
																<select name="length" class="1-500 form-select" data-placeholder="L">
																	
																	
																</select>
															</div>
															<div class="d-flex align-items-center w-50">
																<label class="px-2">W</label>
																<select name="width" class="1-500 form-select" data-placeholder="L">
																	
																	
																</select>
															</div>			
														</td>
														
														<td class="">
															<select name="design" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Design">
																<option></option>
																<option value="strips">Strips</option>
																<option value="woven">Woven</option>
																<option value="plain">Plain</option>
																
																
															</select>
															
															
															<td class="d-flex">
																<div class="d-flex align-items-center w-50">
																	
																	
																	<label class="px-2">cotton</label>
																	<select name="cotton" class="per1-100 form-select" data-placeholder="Cotton">
																		<?php
																		for ($i=1; $i<=100; $i++)
																		{
																			?>
																			<option value="<?php echo $i;?>"><?php echo $i;?>%</option>
																			<?php
																		}
																		?>
																	</select>
																</div>
																<div class="d-flex align-items-center w-50">
																	
																	<label class="px-2">Nylon</label>
																	<select name="Nylon" class="per1-100 form-select" data-placeholder="Linen">
																		<?php
																		for ($i=1; $i<=100; $i++)
																		{
																			?>
																			<option value="<?php echo $i;?>"><?php echo $i;?>%</option>
																			<?php
																		}
																		?>
																	</select>
																</div>
																<div class="d-flex align-items-center w-50">
																	
																	<label class="px-2">Silk</label>
																	<select name="Silk" class="per1-100 form-select" data-placeholder="Silk">
																		<?php
																		for ($i=1; $i<=100; $i++)
																		{
																			?>
																			<option value="<?php echo $i;?>"><?php echo $i;?>%</option>
																			<?php
																		}
																		?>
																	</select>
																</div>
																
																
																<td class="">
																	<input class="form-control form-control-solid" type="number" min="1" name="quantity[]" placeholder="1" value="1" data-kt-element="quantity" />
																</td>
																
																
																<td class="pt-3 text-center">
																	
																	
																	<button type="button" class="btn py-1" data-bs-toggle="dropdown" aria-expanded="false">
																		<i class="fa fa-cog"></i>
																	</button>
																	<ul class="dropdown-menu">
																		<li><button type="button" class="border-0 dropdown-item" data-kt-element="remove-item">
																				Delete
																		</button></li>
																		<li><button type="button" class="border-0 dropdown-item" data-kt-element="remove-item">
																			Duplicate
																		</button>
																	   </li>
																		
																	</ul>
																
															</td>
															</tr>
														</table>
														<table class="table d-none" data-kt-element="empty-template">
															<tr data-kt-element="empty">
																<th colspan="5" class="text-muted text-center py-10">No items</th>
															</tr>
														</table>
														<!--end::Item template-->
														<!--begin::Notes-->
														<div class="mb-0">
															<label class="form-label fs-6 fw-bold text-gray-700">Special Note</label>
															<textarea name="notes" class="form-control form-control-solid" rows="3" placeholder="Thanks for your business"></textarea>
														</div>
														<!--end::Notes-->
														<button type="submit" href="#" class="btn btn-primary mt-4 d-block mx-auto" id="kt_invoice_submit_button">
															<!--begin::Svg Icon | path: icons/duotune/general/gen016.svg-->
															<span class="svg-icon svg-icon-3">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M15.43 8.56949L10.744 15.1395C10.6422 15.282 10.5804 15.4492 10.5651 15.6236C10.5498 15.7981 10.5815 15.9734 10.657 16.1315L13.194 21.4425C13.2737 21.6097 13.3991 21.751 13.5557 21.8499C13.7123 21.9488 13.8938 22.0014 14.079 22.0015H14.117C14.3087 21.9941 14.4941 21.9307 14.6502 21.8191C14.8062 21.7075 14.9261 21.5526 14.995 21.3735L21.933 3.33649C22.0011 3.15918 22.0164 2.96594 21.977 2.78013C21.9376 2.59432 21.8452 2.4239 21.711 2.28949L15.43 8.56949Z" fill="currentColor" />
																	<path opacity="0.3" d="M20.664 2.06648L2.62602 9.00148C2.44768 9.07085 2.29348 9.19082 2.1824 9.34663C2.07131 9.50244 2.00818 9.68731 2.00074 9.87853C1.99331 10.0697 2.04189 10.259 2.14054 10.4229C2.23919 10.5869 2.38359 10.7185 2.55601 10.8015L7.86601 13.3365C8.02383 13.4126 8.19925 13.4448 8.37382 13.4297C8.54839 13.4145 8.71565 13.3526 8.85801 13.2505L15.43 8.56548L21.711 2.28448C21.5762 2.15096 21.4055 2.05932 21.2198 2.02064C21.034 1.98196 20.8409 1.99788 20.664 2.06648Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->Submit</button>
														</div>
														<!--end::Wrapper-->
													</form>
													<!--end::Form-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Card-->
										</div>
										
									</div>
									<!--end::Layout-->
									
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->
						
					</div>
					<!--end:::Main-->
					@endsection
					
					
					@section('scripts')
					
					<script src="{{asset('assets/plugins/custom/formrepeater/formrepeater.bundle.js')}}"></script>
					<script src="{{asset('assets/js/custom/apps/invoices/create.js')}}"></script>
					<script>
						$(function(){
							var $select = $(".1-500");
							for (i=1;i<=500;i++){
								$select.append($('<option></option>').val(i).html(i))
							}
							
						});
					</script>
					
					@endsection