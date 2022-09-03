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
									<!--begin::Row-->
									<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
										<!--begin::Col-->
										<div class="col">
											<!--begin::Card widget 3-->
											<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" 
											style="background-color: #ff6961;background-image:url('{{asset('assets/media/svg/shapes/wave-bg-purple.svg')}}')">
												<!--begin::Header-->
												<div class="card-header pt-5 justify-content-center">
													<span class="fs-3hx text-white fw-bold">120</span>
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body d-flex align-items-end mb-3 justify-content-center">
													<!--begin::Info-->
													<div class="d-flex align-items-center text-center ">
														
														<div class="fw-bold fs-6 text-white">
															<span class="d-block text-center">RFQ</span>
															
														</div>
													</div>
													<!--end::Info-->
												</div>
												<!--end::Card body-->
												
											</div>
											<!--end::Card widget 3-->
										</div>
										<!--end::Col-->
										
										<div class="col">
											<!--begin::Card widget 3-->
											<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" 
											style="background-color: #0097a7;background-image:url('{{asset('assets/media/svg/shapes/wave-bg-red.svg')}}')">
												<!--begin::Header-->
												<div class="card-header pt-5 justify-content-center">
													<span class="fs-3hx text-white fw-bold">98</span>
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body d-flex align-items-end mb-3 justify-content-center">
													<!--begin::Info-->
													<div class="d-flex align-items-center text-center">
														
														<div class="fw-bold fs-6 text-white">
															<span class="d-block text-center">PO</span>
															
														</div>
													</div>
													<!--end::Info-->
												</div>
												<!--end::Card body-->
												
											</div>
											<!--end::Card widget 3-->
										</div>

										<!--end::Col-->
										<!--begin::Col-->
										<div class="col">
											<!--begin::Card widget 3-->
											<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" 
											style="background-color: #42d6a4;background-image:url('{{asset('assets/media/svg/shapes/wave-bg-purple.svg')}}')">
												<!--begin::Header-->
												<div class="card-header pt-5 justify-content-center">
												<span class="fs-3hx text-white fw-bold">20</span>

												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body d-flex align-items-end mb-3 justify-content-center">
													<!--begin::Info-->
													<div class="d-flex align-items-center text-center">
														<div class="fw-bold fs-6 text-white">
															<span class="d-block">Order under process</span>
															
														</div>
													</div>
													<!--end::Info-->
												</div>
												
											</div>
											<!--end::Card widget 3-->
										</div>
										<!--begin::Col-->
										<div class="col">
											<!--begin::Card widget 3-->
											<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" 
											style="background-color:#0f4c81; background-image:url('{{asset('assets/media/svg/shapes/wave-bg-purple.svg')}}')">
												<!--begin::Header-->
												<div class="card-header pt-5 justify-content-center">
												<span class="fs-3hx text-white fw-bold">5</span>

												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body d-flex align-items-end mb-3 justify-content-center">
													<!--begin::Info-->
													<div class="d-flex align-items-center text-center">
														<div class="fw-bold fs-6 text-white">
															<span class="d-block">Orders Fulfilled</span>
															
														</div>
													</div>
													<!--end::Info-->
												</div>
												 
											</div>
											<!--end::Card widget 3-->
										</div>
										
										
										
									</div>
									<!--end::Row-->
									
									<!--begin::Row-->
									<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
										<div class="col-xl-5">
											<!--begin::Card widget 19-->
											<div class="card card-flush h-xl-100">
												<!--begin::Header-->
												<div class="card-header pt-7 justify-content-center">
													<!--begin::Title-->
													<h3 class="card-title ">
														<span class="card-label fw-bold text-dark">Active Order</span>
														
													</h3>
													<!--end::Title-->
													
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body pt-5">
													
														
														<ul class="list-unstyled multi-steps">
														  <li id="step-1" >Picked up<div class="progress-bar progress-bar--success">
														<div class="progress-bar__bar"></div></li>
														  <li id="step-2" class="is-active">Arrived at USPS<div class="progress-bar progress-bar--success">
														<div class="progress-bar__bar"></div></li>
														  <li id="step-3">Out for delivery<div class="progress-bar progress-bar--success">
														<div class="progress-bar__bar"></div></li>
														  <li id="step-4">Delivered</li>
														</ul>
													  
													  
													  <button class="d-none" onClick=next()>Next Step</button>
													
												</div>
												<!--end::Body-->
											</div>
											<!--end::Card widget 19-->
										</div>
										<!--end::Col-->
										
										<div class="col-xl-7">
											<!--begin::Tables widget 15-->
											<div class="card card-flush h-lg-100">
												<!--begin::Header-->
												<div class="card-header pt-7">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-800">
											<a href="../customer/quote/list-quotes.php">Latest Quotes</a></span>
														
													</h3>
													<!--end::Title-->
												
												</div>
												
												<div class="card-body pt-6">
													<!--begin::Table container-->
													<div class="table-responsive">
														<!--begin::Table-->
														<table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
															<!--begin::Table head-->
															<thead>
																<tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
																    <th class="p-0 pb-3 text-start">QUOTE#</th>
																     <th class="p-0 pb-3 text-start">RFQ REF#</th>
																	<th class="p-0 pb-3 text-center">DATE</th>
																    <th class="p-0 pb-3  text-center">ACCOUNT MANAGER</th>
																   <th class="p-0 pb-3  text-center">EMAIL</th>
																	<th class="p-0 pb-3  text-center">PHONE</th>
																	
																</tr>
															</thead>
															<!--end::Table head-->
															<!--begin::Table body-->
															<tbody>
															<tr>
																	<td>
																			3463
																	</td>
																	<td>
																			4576
																	</td>
																	<td class="text-center">
																		09/08/2022
																	</td>
																	
																	<td class="text-center">
																		Zubair
																	</td>
																	<td class="text-center">
																		zubair@gmail.com
																	</td>
																	<td class="text-center">
																		222 898 9744
																	</td>
																	
																</tr>
																<tr>
																	<td>
																			543
																	</td>
																	<td>
																			4756
																	</td>
																	<td class="text-center">
																		09/08/2022
																	</td>
																	
																	<td class="text-center">
																		Yasir
																	</td>
																	<td class="text-center">
																		yasir@gmail.com
																	</td>
																	<td class="text-center">
																		222 898 9744
																	</td>
																	
																</tr>
															
																
															</tbody>
															<!--end::Table body-->
														</table>
													</div>
													<!--end::Table-->
												</div>
												<!--end: Card Body-->
											</div>
											<!--end::Tables widget 15-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
									<!--begin::Row-->
							<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
										
										<div class="col-xl-6">
											<!--begin::Tables widget 15-->
											<div class="card card-flush h-lg-100">
												<!--begin::Header-->
												<div class="card-header pt-7">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-800">
													<a href="../customer/purchase-order/list-pos.php">	Latest POs</a>
													</span>
														
													</h3>
													<!--end::Title-->
													
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body pt-6">
													<!--begin::Table container-->
													<div class="table-responsive">
														<!--begin::Table-->
														<table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
															<!--begin::Table head-->
															<thead>
																<tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
																	<th class="p-0 pb-3 text-start">PO#</th>
																	<th class="p-0 pb-3 text-center">PO DATE</th>
																	
																	<th class="p-0 pb-3  text-center">QUOTE REF#</th>
																	<th class="p-0 pb-3  text-center">ACCOUNT MANAGER</th>
																	<th class="p-0 pb-3  text-center">EMAIL</th>
																	<th class="p-0 pb-3  text-center">PHONE</th>
																	<th class="p-0 pb-3  text-center">STATUS</th>
																	
																</tr>
															</thead>
															<!--end::Table head-->
															<!--begin::Table body-->
															<tbody>
															<tr>
																	<td>
																			543
																	</td>
																	<td class="text-center pe-0">
																		<span class="fs-6">09/08/2022</span>
																	</td>
																	<td class="text-center pe-0">
																		<span class=" fs-6">245</span>
																	</td>
																	
																	<td class="text-center">
																		Ali
																	</td>
																	<td class="text-center">
																		ali@gmail.com
																	</td>
																	<td class="text-center">
																		222 898 9744
																	</td>
																	<td class="text-center">
																		<!--begin::Label-->
																		<span class="badge badge-light-success fs-base">
																		Delivered</span>
																		<!--end::Label-->
																	</td>
																	
																	
																</tr>
																			<tr>
																	<td>
																			543
																	</td>
																	<td class="text-center pe-0">
																		<span class="fs-6">09/08/2022</span>
																	</td>
																	<td class="text-center pe-0">
																		<span class=" fs-6">245</span>
																	</td>
																	
																	<td class="text-center">
																		Nowfal
																	</td>
																	<td class="text-center">
																		nowfal@gmail.com
																	</td>
																	<td class="text-center">
																		222 898 9744
																	</td>
																	<td class="text-center">
																		<!--begin::Label-->
																		<span class="badge badge-light-success fs-base">
																		Delivered</span>
																		<!--end::Label-->
																	</td>
																	
																	
																</tr>
																
																
															</tbody>
															<!--end::Table body-->
														</table>
													</div>
													<!--end::Table-->
												</div>
												<!--end: Card Body-->
											</div>
											<!--end::Tables widget 15-->
										</div>
										<!--begin::Col-->
										<div class="col-xl-6">
											<!--begin::Tables widget 15-->
											<div class="card card-flush h-lg-100">
												<!--begin::Header-->
												<div class="card-header pt-7">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-800">
															<a href="../customer/rfq/list-rfq.php">Latest RFQs</a></span>
														
													</h3>
													<!--end::Title-->
													
											
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body pt-6">
													<!--begin::Table container-->
													<div class="table-responsive">
														<!--begin::Table-->
														<table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
															<!--begin::Table head-->
															<thead>
																<tr class="fs-7 text-center fw-bold">
																    <th >RFQ#</th>
																	<th>DATE</th>
																    <th>ACCOUNT MANAGER</th>
																     <th>EMAIL</th>
																     <th>PHONE</th>
																	<th>STATUS</th>
																	
																</tr>
															</thead>
															<!--end::Table head-->
															<!--begin::Table body-->
															<tbody>
															<tr>
																	<td>
																		<a href="../supplier/customer-rfq/list-rfq.php">543</a>	
																	</td>
																	<td class="text-center">
																		09/08/2022
																	</td>
																	
																	
																	<td class="text-center">
																		Ali
																	</td>
																	<td class="text-center">
																		ali@gmail.com
																	</td>
																	<td class="text-center">
																		555 864 5763
																	</td>
																	<td class="text-center">
																		<!--begin::Label-->
																		<span class="badge badge-light-success">
																		Quote Submited</span>
																		<!--end::Label-->
																	</td>
																	
																	
																</tr>
																<tr>
																	<td>
																			<a href="../supplier/customer-rfq/list-rfq.php">354</a>
																	</td>
																	<td class="text-center">
																		19/08/2022
																	</td>
																	
																	
																	<td class="text-center">
																		Jabbar
																	</td>
																	<td class="text-center">
																		jabbar@gmail.com
																	</td>
																	<td class="text-center">
																		555 864 5763
																	</td>
																	<td class="text-center">
																		<!--begin::Label-->
																		<span class="badge badge-light-warning">
																		Quote Pending</span>
																		<!--end::Label-->
																	</td>
																	
																</tr>
																
																
															</tbody>
															<!--end::Table body-->
														</table>
													</div>
													<!--end::Table-->
												</div>
												<!--end: Card Body-->
											</div>
											<!--end::Tables widget 15-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
									
									
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
<script>
	let step = 'step1';

const step1 = document.getElementById('step-1');
const step2 = document.getElementById('step-2');
const step3 = document.getElementById('step-3');
const step4 = document.getElementById('step-4');

function next() {
  if (step === 'step1') {
    step = 'step2';
    step1.classList.remove("is-active");
    $(step1).find('.progress-bar__bar').css('transform','translateX(100%)'); 
  $(step1).find('.progress-bar__bar').css('-webkit-transform','translateX(100%)');
    step2.classList.add("is-active");
  } else if (step === 'step2') {
    step = 'step3';
    step2.classList.remove("is-active");
    $(step2).find('.progress-bar__bar').css('transform','translateX(100%)');
    $(step2).find('.progress-bar__bar').css('-webkit-transform','translateX(100%)');
    step3.classList.add("is-active"); 
  } else if (step === 'step3') {
    step = 'step4';
    step3.classList.remove("is-active");
    $(step3).find('.progress-bar__bar').css('-webkit-transform','translateX(100%)');
    step4.classList.add("is-active");
  } else if (step === 'step4') {
    step = 'complete';
    step4.classList.remove("is-active");
  }
}
window.addEventListener('load', next);
</script>
@endsection