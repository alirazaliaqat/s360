@extends('admin.admin')

@section('content')
<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
	<!--begin::Content wrapper-->
	<div class="d-flex flex-column flex-column-fluid">
		<!--begin::Toolbar-->
		<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
			
		</div>
		<!--end::Toolbar-->
		<!--begin::Content-->
		<div id="kt_app_content" class="app-content flex-column-fluid">
			<!--begin::Content container-->
			<div id="kt_app_content_container" class="app-container container-xxl">
				<!--begin::Form-->
				<form id="kt_ecommerce_edit_order_form" class="form d-flex flex-column flex-lg-row" data-kt-redirect="#">
					
					<!--begin::Main column-->
					<div class="d-flex flex-column flex-lg-row-fluid gap-7 gap-lg-12">
						
						<!--begin::Order details-->
						<div class="card card-flush py-4">
							
							<!--begin::Card body-->
							<div class="card-body pt-0">
								<!--begin::Billing address-->
								<div class="d-flex flex-column gap-5 gap-md-7">
									<!--begin::Title-->
									<div class="row mt-5">
										<div class="col-6">
											<div class="fs-3 fw-bold mb-n2">Create Proforma Invoice</div>
										</div>
										<div class="col-6">
											<!--end::Order details-->
											<div class="d-flex justify-content-end">
												
												<!--begin::Button-->
												<button type="submit" id="kt_ecommerce_edit_order_submit" class="btn btn-primary">
													<span class="indicator-label">Save Invoice</span>
													<span class="indicator-progress">Please wait...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
													<!--end::Button-->
												</div>
											</div>
											
										</div>
										
										
										<!--end::Title-->
										<!--begin::Input group-->
										<div class="row">
											
											<div class="col-6">
												<div class="row">
													<label class="form-label col-md-4 required my-auto">Order Date</label>
													<div class="col-md-8 mb-4">
														<input id="kt_ecommerce_edit_order_date" name="order_date" placeholder="Select a date" class="form-control" value="" />
													</div>
												</div>
											</div>
											
											<div class="col-6">
												<div class="row">
													
													<label class="form-label col-md-4 required my-auto">Valid Till</label>
													<div class="col-md-8">
														<input id="kt_ecommerce_valid_date" name="valid_till" placeholder="Select a date" class="form-control" value="" />
													</div>
												</div>
											</div>
											
											<div class="col-6">
												<div class="row">
													
													<label class="form-label col-md-4 required my-auto">Quote Ref No.</label>
													<div class="col-md-8">
														<input class="form-control" name="quote-reference" placeholder="" value="" />
													</div>
												</div>
											</div>
											
											<div class="col-6 mb-4">
												<div class="row">
													
													<label class="form-label col-md-4 required my-auto">PO Ref No.</label>
													<div class="col-md-8">
														<input class="form-control" name="quote-reference" placeholder="" value="" />
													</div>
												</div>
											</div>
											
											<div class="col-6 mb-4">
												<div class="row">
													<label class="form-label col-md-4 required my-auto">Sales Method</label>
													<div class="col-md-8">
														<select class="form-select" placeholder="Select an option" id="Customer-cat" name="customer-category">
															<option></option>
															<option>Cash</option>
															<option >Credit</option>
															
														</select>
													</div>
												</div>
											</div>
											<div class="col-6">
												<div class="row">
													<label class="form-label col-md-4 required my-auto">Customer</label>
													<div class="col-md-8">
														<input class="form-control" name="customer-name" placeholder="" value="" />
													</div>
												</div>
											</div>
											
											<div class="col-6 mb-4">
												<div class="row">
													<label class="form-label col-md-4 my-auto">Attention</label>
													<div class="col-md-8">
														<input class="form-control" name="attention" placeholder="" value="" />
													</div>
												</div>
											</div>
											
											<div class="col-6 mb-4">
												<div class="row">
													<label class="form-label col-md-4 my-auto">Salesman</label>
													<div class="col-md-8">
														<input class="form-control" name="Salesman" placeholder="" value="" />
													</div>
												</div>
											</div>
											
											<div class="col-6 mb-4">
												<div class="row">
													<label class="required form-label col-md-4 my-auto">Currency</label>
													<div class="col-md-8">
														<select class="form-select" data-placeholder="Select an option" id="kt_ecommerce_edit_order_billing_country" name="billing_order_country">
															<option></option>
															<option value="IND" data-kt-select2-country="{{ asset('assets/media/flags/india.svg')}}">INR</option>
															
															
															<option value="YE" data-kt-select2-country="{{ asset('assets/media/flags/saudi-arabia.svg')}}">SAR</option>
															<option value="ZM" data-kt-select2-country="{{ asset('assets/media/flags/bahrain.svg')}}">BD</option>
															<option value="ZW" data-kt-select2-country="{{ asset('assets/media/flags/united-arab-emirates.svg')}}">Dhs</option>
														</select>
													</div>
												</div>
											</div>
											
											
											<div class="col-6 mb-4">
												<div class="row">
													<label class="required form-label col-md-4 my-auto">Currency value</label>
													<div class="col-md-8">
														<input class="form-control" name="Currency-value" placeholder="" value="" />
													</div>
												</div>
											</div>
											
											<div class="col-6">
												<div class="row">
													<label class="form-label col-md-4 required my-auto">Prepared By</label>
													<div class="col-md-8">
														<input class="form-control" name="prepared-by" placeholder="" value="" />
													</div>
													
												</div>
											</div>
											
											<div class="col-6">
												<div class="row">
													<label class="form-label col-md-4 required my-auto">Approved By</label>
													<div class="col-md-8">
														<input class="form-control" name="approved-by" placeholder="" value="" />
													</div>
													
												</div>
											</div>
										</div>
										
										
										<!--begin::Card body-->
										<div class="card-body pt-10 mt-10 px-0 border-top">
											<div class="table-responsive border-bottom mb-9">
												<table class="table align-middle border rounded table-row-dashed fs-6 g-5" id="kt_datatable_example">
													<thead>
														<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase">
															
															
															<th>Item</th>
															<th>Description</th>
															<th>Color</th>
															<th>Size</th>
															<th>Design</th>
															<th><span class="cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="bottom" title="C: Cotton, N: Nylon, L: Linen, S: Silk">
																Fabric<i class="fas fa-exclamation-circle ms-1 fs-7"></i>
																
															</span></th>
															<th>Qty</th>
															<th>UOM</th>
															<th>Unit Price</th>
															<th class="w-75px">vat %</th>
															<th>vat amount</th>
															<th>discount</th>
															<th>Total Price</th>
															
														</tr>
													</thead>
													<tbody class="fw-semibold text-gray-600">
														<tr class="odd">
															
															
															<td>School Uniform</td>
															<td>
																<span class="text-truncate d-inline-block" style="max-width: 100px;">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature</span>
															</td>
															<td>RGB (255,244,230)</td>
															<td>
																L: 280 W: 350
															</td>
															<td>
																Stripes 40cm
															</td>
															<td>
																C: 50% ,  N:50%
															</td>
															<td>
																3
															</td>
															<td>
																Meter
															</td>
															<td>
																800
															</td>
															<td>
																10%
															</td>
															<td>
																6746
															</td>
															<td>
																153
															</td>
															<td>
																35000
															</td>
															
															
															
														</tr>
														<tr class="odd">
															
															
															<td>School Uniform</td>
															<td>
																<span class="text-truncate d-inline-block" style="max-width: 100px;">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature</span>
															</td>
															<td>RGB (255,244,230)</td>
															<td>
																L: 280 W: 350
															</td>
															<td>
																Stripes 40cm
															</td>
															<td>
																C: 50% ,  N:50%
															</td>
															<td>
																5
															</td>
															<td>
																PC
															</td>
															<td>
																1200
															</td>
															<td>
																5%
															</td>
															<td>
																6746
															</td>
															<td>
																1035
															</td>
															<td>
																75000
															</td>
															
															
														</tr>
														<tr class="odd">
															
															
															<td>School Uniform</td>
															<td>
																<span class="text-truncate d-inline-block" style="max-width: 100px;">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature</span>
															</td>
															<td>RGB (255,244,230)</td>
															<td>
																L: 280 W: 350
															</td>
															<td>
																Stripes 40cm
															</td>
															<td>
																C: 50% ,  N:50%
															</td>
															<td>
																100
															</td>
															<td>
																Box
															</td>
															<td>
																900
															</td>
															<td>
																5%
															</td>
															<td>
																6746
															</td>
															<td>
																1056
															</td>
															<td>
																55000
															</td>
															
															
															
														</tr>
													</tbody>
												</table>
											</div>
											<div class="d-flex justify-content-end">
												<!--begin::Section-->
												<div class="mw-300px">
													<!--begin::Item-->
													<div class="d-flex flex-stack mb-3">
														<!--begin::Accountname-->
														<div class="fw-semibold pe-10 text-gray-600 fs-7">Subtotal:</div>
														<!--end::Accountname-->
														<!--begin::Label-->
														<div class="text-end fw-bold fs-6 text-gray-800">$ 20,600.00</div>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													
													<!--begin::Item-->
													<div class="d-flex flex-stack mb-3">
														<!--begin::Accountname-->
														<div class="fw-semibold pe-10 text-gray-600 fs-7">Total VAT:</div>
														<!--end::Accountname-->
														<!--begin::Label-->
														<div class="text-end fw-bold fs-6 text-gray-800">$ 20,60</div>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack mb-3">
														<!--begin::Accountnumber-->
														<div class="fw-semibold pe-10 text-gray-600 fs-7">Grand Total</div>
														<!--end::Accountnumber-->
														<!--begin::Number-->
														<div class="text-end fw-bold fs-6 text-gray-800">$ 20,600.00</div>
														<!--end::Number-->
													</div>
													<!--end::Item-->
													
												</div>
												<!--end::Section-->
											</div>
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card body-->
									
								</div>
							</div>
							
							
						</div>
						<!--end::Main column-->
					</form>
					<!--end::Form-->
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
	<script src="{{ asset('assets/js/custom/apps/ecommerce/sales/save-order.js')}}"></script>
	
	<script type="text/javascript">
		$("#kt_ecommerce_valid_date").flatpickr({altInput:!0,altFormat:"d F, Y",dateFormat:"Y-m-d"});
	</script>
	
	@endsection