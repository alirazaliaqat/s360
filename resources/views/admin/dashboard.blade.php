@extends('admin.admin')

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
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">An Overview of Sourcer360 Business</h1>
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
									<!--begin::Row-->
									<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
										<!--begin::Col-->
										<div class="col">
											<!--begin::Card widget 3-->
											<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" 
											style="background-color: #ff6961;background-image:url('{{asset ('assets/media/svg/shapes/wave-bg-purple.svg') }}')">
												<!--begin::Header-->
												<div class="card-header pt-5 justify-content-center">
													<span class="fs-3hx text-white fw-bold">1.2k</span>
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body d-flex align-items-end mb-3 justify-content-center">
													<!--begin::Info-->
													<div class="d-flex align-items-center text-center ">
														
														<div class="fw-bold fs-6 text-white">
															<span class="d-block text-center">Customers</span>
															
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
											style="background-color: #ffb480;background-image:url('{{ asset('assets/media/svg/shapes/wave-bg-red.svg') }}')">
												<!--begin::Header-->
												<div class="card-header pt-5 justify-content-center">
													<span class="fs-3hx text-white fw-bold">785</span>
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body d-flex align-items-end mb-3 justify-content-center">
													<!--begin::Info-->
													<div class="d-flex align-items-center text-center">
														
														<div class="fw-bold fs-6 text-white">
															<span class="d-block text-center">Suppliers</span>
															
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
											style="background-color: #0097a7;background-image:url('{{ asset('assets/media/svg/shapes/wave-bg-red.svg') }}')">
												<!--begin::Header-->
												<div class="card-header pt-5 justify-content-center">
													<span class="fs-3hx text-white fw-bold">923</span>
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body d-flex align-items-end mb-3 justify-content-center">
													<!--begin::Info-->
													<div class="d-flex align-items-center text-center">
														
														<div class="fw-bold fs-6 text-white">
															<span class="d-block text-center">RFQs</span>
															
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
											style="background-color: #42d6a4;background-image:url('{{ ('assets/media/svg/shapes/wave-bg-purple.svg') }}')">
												<!--begin::Header-->
												<div class="card-header pt-5 justify-content-center">
												<span class="fs-3hx text-white fw-bold">1.12k</span>

												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body d-flex align-items-end mb-3 justify-content-center">
													<!--begin::Info-->
													<div class="d-flex align-items-center text-center">
														<div class="fw-bold fs-6 text-white">
															<span class="d-block">Quotes Submitted</span>
															
														</div>
													</div>
													<!--end::Info-->
												</div>
												<!--end::Card body-->
												
											</div>
											<!--end::Card widget 3-->
										</div>
										
									
									</div>
									<!--end::Row-->
									<!--begin::Row-->
									<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
										<!--begin::Col-->
										<div class="col">
											<!--begin::Card widget 3-->
											<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" 
											style="background-color: #59adf6;background-image:url('{{ asset('assets/media/svg/shapes/wave-bg-red.svg') }}')">
												<!--begin::Header-->
												<div class="card-header pt-5 justify-content-center">
													<span class="fs-3hx text-white fw-bold">930</span>
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body d-flex align-items-end mb-3 justify-content-center">
													<!--begin::Info-->
													<div class="d-flex align-items-center text-center ">
														
														<div class="fw-bold fs-6 text-white">
															<span class="d-block text-center">POs Issued</span>
															
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
											style="background-color: #44C5CB;background-image:url('{{ asset('assets/media/svg/shapes/wave-bg-purple.svg') }}')">
												<!--begin::Header-->
												<div class="card-header pt-5 justify-content-center">
													<span class="fs-3hx text-white fw-bold">427</span>
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body d-flex align-items-end mb-3 justify-content-center">
													<!--begin::Info-->
													<div class="d-flex align-items-center text-center">
														
														<div class="fw-bold fs-6 text-white">
															<span class="d-block text-center">Total Payments Awaited</span>
															
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
											style="background-color: #0f4c81;background-image:url('{{ asset('assets/media/svg/shapes/wave-bg-red.svg') }}')">
												<!--begin::Header-->
												<div class="card-header pt-5 justify-content-center">
													<span class="fs-3hx text-white fw-bold">470</span>
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body d-flex align-items-end mb-3 justify-content-center">
													<!--begin::Info-->
													<div class="d-flex align-items-center text-center">
														
														<div class="fw-bold fs-6 text-white">
															<span class="d-block text-center">Total in Production</span>
															
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
											style="background-color: #F53D52;background-image:url('{{ asset('assets/media/svg/shapes/wave-bg-purple.svg') }}')">
												<!--begin::Header-->
												<div class="card-header pt-5 justify-content-center">
												<span class="fs-3hx text-white fw-bold">629</span>

												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body d-flex align-items-end mb-3 justify-content-center">
													<!--begin::Info-->
													<div class="d-flex align-items-center text-center">
														<div class="fw-bold fs-6 text-white">
															<span class="d-block">Packing and Documentation</span>
															
														</div>
													</div>
													<!--end::Info-->
												</div>
												<!--end::Card body-->
												
											</div>
											<!--end::Card widget 3-->
										</div>
										<!--end::Col-->
									
									</div>
									<!--end::Row-->
									<!--begin::Row-->
									<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
										<!--begin::Col-->
										<div class="col">
											<!--begin::Card widget 3-->
											<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" 
											style="background-color: #FF9200;background-image:url('{{ asset('assets/media/svg/shapes/wave-bg-red.svg') }}')">
												<!--begin::Header-->
												<div class="card-header pt-5 justify-content-center">
													<span class="fs-3hx text-white fw-bold">578</span>
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body d-flex align-items-end mb-3 justify-content-center">
													<!--begin::Info-->
													<div class="d-flex align-items-center text-center ">
														
														<div class="fw-bold fs-6 text-white">
															<span class="d-block text-center">Total In Transit</span>
															
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
											style="background-color: #fb7dfd;background-image:url('{{ asset('assets/media/svg/shapes/wave-bg-purple.svg') }}')">
												<!--begin::Header-->
												<div class="card-header pt-5 justify-content-center">
													<span class="fs-3hx text-white fw-bold">305</span>
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body d-flex align-items-end mb-3 justify-content-center">
													<!--begin::Info-->
													<div class="d-flex align-items-center text-center">
														
														<div class="fw-bold fs-6 text-white">
															<span class="d-block text-center">Clearance Awaited</span>
															
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
											style="background-color: #9d94ff;background-image:url('{{ asset('assets/media/svg/shapes/wave-bg-red.svg') }}')">
												<!--begin::Header-->
												<div class="card-header pt-5 justify-content-center">
													<span class="fs-3hx text-white fw-bold">170</span>
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body d-flex align-items-end mb-3 justify-content-center">
													<!--begin::Info-->
													<div class="d-flex align-items-center text-center">
														
														<div class="fw-bold fs-6 text-white">
															<span class="d-block text-center">POs Delivered</span>
															
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
											style="background-color: #c780e8;background-image:url('{{ asset('assets/media/svg/shapes/wave-bg-purple.svg') }}')">
												<!--begin::Header-->
												<div class="card-header pt-5 justify-content-center">
												<span class="fs-3hx text-white fw-bold">5000k</span>

												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body d-flex align-items-end mb-3 justify-content-center">
													<!--begin::Info-->
													<div class="d-flex align-items-center text-center">
														<div class="fw-bold fs-6 text-white">
															<span class="d-block">Value of Goods Delivered</span>
															
														</div>
													</div>
													<!--end::Info-->
												</div>
												<!--end::Card body-->
												
											</div>
											<!--end::Card widget 3-->
										</div>
										<!--end::Col-->
									
									</div>
									<!--end::Row-->
									<!--begin::Row-->
									<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
										
										<!--begin::Col-->
										<div class="col-6">
											<!--begin::Tables widget 15-->
											<div class="card card-flush h-lg-100">
												<!--begin::Header-->
												<div class="card-header pt-7">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-800">

															<a href="../admin/customer-rfq/list-rfq.php">Latest RFQs</a></span>
														
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
																    <th class="p-0 pb-3 text-start">RFQ#</th>
																	<th class="p-0 pb-3 text-center">DATE</th>
																    <th class="p-0 pb-3  text-center">CUSTOMER</th>
																	<th class="p-0 pb-3  text-center">STATUS</th>
																	<th class="p-0 pb-3  text-end">VIEW</th>
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
																		<span class="fs-6">Center Point</span>
																	</td>
																	<td class="text-center">
																		<!--begin::Label-->
																		<span class="badge badge-light-success fs-base">
																		Delivered</span>
																		<!--end::Label-->
																	</td>
																	
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																			<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																					<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
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
																		<span class="fs-6">Center Point</span>
																	</td>
																	<td class="text-center">
																		<!--begin::Label-->
																		<span class="badge badge-light-success fs-base">
																		Delivered</span>
																		<!--end::Label-->
																	</td>
																	
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																			<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																					<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
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
																		<span class="fs-6">Center Point</span>
																	</td>
																	<td class="text-center">
																		<!--begin::Label-->
																		<span class="badge badge-light-success fs-base">
																		Delivered</span>
																		<!--end::Label-->
																	</td>
																	
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																			<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																					<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
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
										<div class="col-6">
											<!--begin::Tables widget 15-->
											<div class="card card-flush h-lg-100">
												<!--begin::Header-->
												<div class="card-header pt-7">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-800">

													<a href="../admin/customer-quotes/list-quotes.php">	Latest S360 Quotes</a></span>
														
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
																    <th class="p-0 pb-3 text-start">QUOTE#</th>
																    <th class="p-0 pb-3 text-start">RFQ REF#</th>
																	<th class="p-0 pb-3 text-center">DATE</th>
																    <th class="p-0 pb-3  text-center">CUSTOMER</th>
																	<th class="p-0 pb-3  text-center">STATUS</th>
																	<th class="p-0 pb-3  text-end">VIEW</th>
																</tr>
															</thead>
															<!--end::Table head-->
															<!--begin::Table body-->
															<tbody>
															<tr>
																	<td>
																			543
																	</td>
																	<td>
																			3456
																	</td>
																	<td class="text-center pe-0">
																		<span class="fs-6">09/08/2022</span>
																	</td>
																	
																	
																	<td class="text-center pe-0">
																		<span class="fs-6">Center Point</span>
																	</td>
																	<td class="text-center">
																		<!--begin::Label-->
																		<span class="badge badge-light-success fs-base">
																		Delivered</span>
																		<!--end::Label-->
																	</td>
																	
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																			<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																					<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</td>
																</tr>
																<tr>
																	<td>
																			543
																	</td>
																	<td>
																			46
																	</td>
																	<td class="text-center pe-0">
																		<span class="fs-6">09/08/2022</span>
																	</td>
																	
																	<td class="text-center pe-0">
																		<span class="fs-6">Center Point</span>
																	</td>
																	<td class="text-center">
																		<!--begin::Label-->
																		<span class="badge badge-light-success fs-base">
																		Delivered</span>
																		<!--end::Label-->
																	</td>
																	
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																			<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																					<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</td>
																</tr>
																<tr>
																	<td>
																			543
																	</td>
																	<td>
																			543
																	</td>
																	<td class="text-center pe-0">
																		<span class="fs-6">09/08/2022</span>
																	</td>
																	
																	<td class="text-center pe-0">
																		<span class="fs-6">Center Point</span>
																	</td>
																	<td class="text-center">
																		<!--begin::Label-->
																		<span class="badge badge-light-success fs-base">
																		Delivered</span>
																		<!--end::Label-->
																	</td>
																	
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																			<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																					<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
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
									</div>
									<!--end::Row-->
									<!--begin::Row-->
									<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
										
								
										<div class="col-xl-7">
											<!--begin::Tables widget 15-->
											<div class="card card-flush h-lg-100">
												<!--begin::Header-->
												<div class="card-header pt-7">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-800">
															<a href="../admin/purchase-order/list-pos.php">Latest POs</a></span>
														
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
																	<th class="p-0 pb-3 text-center">RFQ REF#</th>
																	<th class="p-0 pb-3  text-center">QUOTE REF#</th>
																	<th class="p-0 pb-3  text-center">CUSTOMER</th>
																	<th class="p-0 pb-3  text-center">STATUS</th>
																	<th class="p-0 pb-3  text-end">VIEW</th>
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
																	<td class="text-center pe-0">
																		<span class="fs-6">5000050</span>
																	</td>
																	<td class="text-center pe-0">
																		<span class="fs-6">Center Point</span>
																	</td>
																	<td class="text-center">
																		<!--begin::Label-->
																		<span class="badge badge-light-success fs-base">
																		Delivered</span>
																		<!--end::Label-->
																	</td>
																	
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																			<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																					<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
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
																	<td class="text-center pe-0">
																		<span class="fs-6">5000050</span>
																	</td>
																	<td class="text-center pe-0">
																		<span class="fs-6">Center Point</span>
																	</td>
																	<td class="text-center">
																		<!--begin::Label-->
																		<span class="badge badge-light-success fs-base">
																		Delivered</span>
																		<!--end::Label-->
																	</td>
																	
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																			<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																					<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
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
																	<td class="text-center pe-0">
																		<span class="fs-6">5000050</span>
																	</td>
																	<td class="text-center pe-0">
																		<span class="fs-6">Center Point</span>
																	</td>
																	<td class="text-center">
																		<!--begin::Label-->
																		<span class="badge badge-light-success fs-base">
																		Delivered</span>
																		<!--end::Label-->
																	</td>
																	
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																			<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																					<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
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
										<div class="col-xl-5">
											<!--begin::Card widget 19-->
											<div class="card card-flush h-xl-100">
												<!--begin::Header-->
												<div class="card-header pt-7">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-dark">Performance</span>
														<span class="text-gray-400 pt-2 fw-semibold fs-6">RFQs to Order Conversion</span>
													</h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<!--begin::Menu-->
														<button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
															<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
															<span class="svg-icon svg-icon-1 svg-icon-gray-300 me-n1">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="currentColor" />
																	<rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
																	<rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
																	<rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</button>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold w-100px py-4" data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Remove</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Mute</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Settings</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
														<!--end::Menu-->
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body pt-5">
													<!--begin::Chart container-->
													<div id="kt_charts_widget_16_chart" class="w-100 h-300px"></div>
													<!--end::Chart container-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Card widget 19-->
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