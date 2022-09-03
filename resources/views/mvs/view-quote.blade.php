@extends('mvs.mvs-master')

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
								<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">View Quote</h1>
								<!--end::Title-->
								
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
							<!--begin::Invoice 2 main-->
							<div class="card">
								<!--begin::Body-->
								<div class="card-body p-lg-15">
									<!--begin::Layout-->
									<div class="d-flex flex-column flex-xl-row">
										<!--begin::Content-->
		<div class="flex-lg-row-fluid mb-10 mb-xl-0">
			<!--begin::Invoice 2 content-->
			<div class="mt-n1">
				<!--begin::Top-->
				<div class="d-flex flex-stack pb-10">
					<!--begin::Logo-->
					<a href="#">
						<img alt="Logo" class="w-150px" src="{{asset('assets/media/avatars/300-1.jpg')}}" />
					</a>
					<!--end::Logo-->
					
				</div>
				<!--end::Top-->
				<!--begin::Wrapper-->
				<div class="m-0">
					<!--begin::Label-->
					<div class="fw-bold fs-3 text-gray-800 mb-8">Quote #0001</div>
					<!--end::Label-->
					<!--begin::Row-->
					<div class="row g-5 mb-11">
						<!--end::Col-->
						<div class="col-sm-6">
							
							<div class="fw-semibold fs-7 text-gray-600 mb-1"><span class="text-gray-800 fs-6">Customer:</span> Centrepoint</div>
							<div class="fw-semibold fs-7 text-gray-600 mb-1"><span class="text-gray-800 fs-6">Mobile No:</span> 000-0394846</div>
							<div class="fw-semibold fs-7 text-gray-600 mb-1"><span class="text-gray-800 fs-6">Email:</span> sourcer360@gmail.com</div>
							<div class="fw-semibold fs-7 text-gray-600 mb-1"><span class="text-gray-800 fs-6">Address:</span> 208 malaz, Riyadh Saudi Arabia</div>
						
						</div>
						<!--end::Col-->
						<!--end::Col-->
						<div class="col-sm-6">
					<div class="fw-semibold fs-7 text-gray-600 mb-1"><span class="text-gray-800 fs-6">Issue Date:</span> 02 May 2021</div>
					<div class="fw-semibold fs-7 text-gray-600 mb-1"><span class="text-gray-800 fs-6">Valid Till:</span> 02 May 2021</div>
					<div class="fw-semibold fs-7 text-gray-600 mb-1"><span class="text-gray-800 fs-6">Currency:</span> Saudi Riyal</div>
                    
							
						</div>
					
					</div>
					<!--end::Row-->
													<!--begin::Content-->
													<div class="flex-grow-1">
														<!--begin::Table-->
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
    
																
																<td >School Uniform</td>
																<td>
																	<span class="text-truncate d-inline-block" style="max-width: 100px;">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature</span>
																</td>
																<td>RGB (255,244,230)</td>
																<td >
																	L: 280 W: 350
																</td>
																<td >
																	Stripes 40cm
																</td>
																<td>
																	C: 50% ,  N:50%
																</td>
																<td >
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
    
																
																<td >School Uniform</td>
																<td>
																	<span class="text-truncate d-inline-block" style="max-width: 100px;">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature</span>
																</td>
																<td>RGB (255,244,230)</td>
																<td >
																	L: 280 W: 350
																</td>
																<td >
																	Stripes 40cm
																</td>
																<td>
																	C: 50% ,  N:50%
																</td>
																<td >
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
    
																
																<td >School Uniform</td>
																<td>
																	<span class="text-truncate d-inline-block" style="max-width: 100px;">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature</span>
																</td>
																<td>RGB (255,244,230)</td>
																<td >
																	L: 280 W: 350
																</td>
																<td >
																	Stripes 40cm
																</td>
																<td>
																	C: 50% ,  N:50%
																</td>
																<td >
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
														<!--end::Table-->
														<!--begin::Container-->
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
														<!--end::Container-->
													</div>
													<!--end::Content-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Invoice 2 content-->
										</div>
										<!--end::Content-->
										
									</div>
									<!--end::Layout-->
								</div>
								<!--end::Body-->
							</div>
							<!--end::Invoice 2 main-->
						</div>
						<!--end::Content container-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Content wrapper-->
				
			</div>
			<!--end:::Main-->
@endsection
