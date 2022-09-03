@extends('admin.admin')

@section('content')

<!--begin::Main-->
					<div class="app-main flex-column flex-row-fluid mt-10" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl">
									<!--begin::Navbar-->
									<div class="card mb-5 mb-xl-10">
										<div class="card-body pt-9 pb-0">
											<!--begin::Details-->
											<div class="d-flex flex-wrap flex-sm-nowrap mb-3">
												<!--begin: Pic-->
												<div class="me-7 mb-4">
													<div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
														<img src="{{ asset('assets/media/avatars/300-1.jpg') }}" alt="image" />
														<div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
													</div>
												</div>
												<!--end::Pic-->
												<!--begin::Info-->
												<div class="flex-grow-1">
													<!--begin::Title-->
													<div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
														<!--begin::User-->
														<div class="d-flex flex-column">
															<!--begin::Name-->
															<div class="d-flex align-items-center mb-2">
																<a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">CentrePoint</a>
																<a href="#">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen026.svg-->
																	<span class="svg-icon svg-icon-1 svg-icon-primary">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																			<path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="currentColor" />
																			<path d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</a>
																<a href="#" class="btn btn-sm btn-light-success fw-bold ms-2 fs-8 py-1 px-3" >New Customer</a>
															</div>
															<!--end::Name-->
															
														</div>
														<!--end::User-->
														
													</div>
													<!--end::Title-->
													<!--begin::Stats-->
													<div class="d-flex flex-wrap flex-stack">
														<!--begin::Wrapper-->
														<div class="d-flex flex-column flex-grow-1 pe-8">
															<!--begin::Stats-->
															<div class="d-flex flex-wrap">
																<!--begin::Stat-->
																<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
																	<!--begin::Number-->
																	<div class="d-flex align-items-center">
																		
																		<div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="500" data-kt-countup-prefix="">0</div>
																	</div>
																	<!--end::Number-->
																	<!--begin::Label-->
																	<div class="fw-semibold fs-6 text-gray-400">RFQs Sent</div>
																	<!--end::Label-->
																</div>
																<!--end::Stat-->
																<!--begin::Stat-->
																<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
																	<!--begin::Number-->
																	<div class="d-flex align-items-center">
																		
																		<!--end::Svg Icon-->
																		<div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="75">0</div>
																	</div>
																	<!--end::Number-->
																	<!--begin::Label-->
																	<div class="fw-semibold fs-6 text-gray-400">Total POs</div>
																	<!--end::Label-->
																</div>
																<!--end::Stat-->
																<!--begin::Stat-->
																
															</div>
															<!--end::Stats-->
														</div>
														<!--end::Wrapper-->
														
													</div>
													<!--end::Stats-->
												</div>
												<!--end::Info-->
											</div>
											<!--end::Details-->
											
										</div>
									</div>
									<!--end::Navbar-->
									<!--begin::details View-->
									<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
										<!--begin::Card header-->
										<div class="card-header cursor-pointer">
											<!--begin::Card title-->
											<div class="card-title m-0">
												<h3 class="fw-bold m-0">Profile Details</h3>
											</div>
											<!--end::Card title-->
											<!--begin::Action-->
											<a href="../customer/account/settings.php" class="btn btn-primary align-self-center">Edit Profile</a>
											<!--end::Action-->
										</div>
										<!--begin::Card header-->
										<!--begin::Card body-->
										<div class="card-body p-9">
											<!--begin::Row-->
											<div class="row mb-2">
												<!--begin::Label-->
												<label class="col-lg-3 fw-semibold text-muted">Company name</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-9">
													<span class="fw-bold fs-6 text-gray-800">Zara</span>
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
											<!--begin::Input group-->
											<div class="row mb-2">
												<!--begin::Label-->
												<label class="col-lg-3 fw-semibold text-muted">Trading Name</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-9 fv-row">
													<span class="fw-semibold text-gray-800 fs-6">Centrepoint</span>
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-2">
												<!--begin::Label-->
												<label class="col-lg-3 fw-semibold text-muted">Category</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-9 fv-row">
													<span class="fw-semibold text-gray-800 fs-6">Fashion</span>
												</div>
												<!--end::Col-->
											</div>
											<div class="row mb-2">
												<!--begin::Label-->
												<label class="col-lg-3 fw-semibold text-muted">Work Phone
												<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i></label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-9 d-flex align-items-center">
													<span class="fw-bold fs-6 text-gray-800 me-2">00966 989 000 0000</span>
													<span class="badge badge-success">Verified</span>
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
												<!--begin::Input group-->
											<div class="row mb-2">
												<!--begin::Label-->
												<label class="col-lg-3 fw-semibold text-muted">Country
												<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of origination"></i></label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-9">
													<span class="fw-bold fs-6 text-gray-800">Saudi Arabia</span>
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-2">
												<!--begin::Label-->
												<label class="col-lg-3 fw-semibold text-muted">Currency</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-9">
													<span class="fw-bold fs-6 text-gray-800">Saudi Riyal</span>
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-2">
												<!--begin::Label-->
												<label class="col-lg-3 fw-semibold text-muted">Address</label>
												<!--begin::Label-->
												<!--begin::Label-->
												<div class="col-lg-9">
													<span class="fw-semibold fs-6 text-gray-800">XYZ, Riyadh, Saudi Arabia</span>
												</div>
												<!--begin::Label-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-2">
												<!--begin::Label-->
												<label class="col-lg-3 fw-semibold text-muted">Bank Account</label>
												<!--begin::Label-->
												<!--begin::Label-->
												<div class="col-lg-9">
													<span class="fw-semibold fs-6 text-gray-800">SA00034873824673</span>
												</div>
												<!--begin::Label-->
											</div>
											<!--end::Input group-->
											
										</div>
										<!--end::Card body-->
										<div class="card-header cursor-pointer">
											<!--begin::Card title-->
											<div class="card-title m-0">
												<h3 class="fw-bold m-0">Bank Details</h3>
											</div>
												</div>
											
											
									
										<div class="card-body">
											<div class="row mb-2 mt-5">
												<label class="col-lg-3 fw-semibold text-muted">Bank Name
												</label>
												
												<div class="col-lg-9">
													<span class="fw-bold fs-6 text-gray-800">Alrajhi</span>
												</div>

											</div>
											<div class="row mb-2">
												<label class="col-lg-3 fw-semibold text-muted">Country
												</label>
												
												<div class="col-lg-9">
													<span class="fw-bold fs-6 text-gray-800">Saudi Arabia</span>
												</div>
												
											</div>
											<div class="row mb-2">
												<label class="col-lg-3 fw-semibold text-muted">Account No.
												</label>
												
												<div class="col-lg-9">
													<span class="fw-bold fs-6 text-gray-800">873846 676453</span>
												</div>
												
											</div>
											<div class="row mb-2">
												<label class="col-lg-3 fw-semibold text-muted">Swift Code
												</label>
												
												<div class="col-lg-9">
													<span class="fw-bold fs-6 text-gray-800">A908989</span>
												</div>
												
											</div>
											
										</div>

                                         <div class="card-header cursor-pointer">
											<!--begin::Card title-->
											<div class="card-title m-0">
												<h3 class="fw-bold m-0">Other Contacts</h3>
											</div>
												</div>
                                     <div class="card-body">
										<div class="row">
											<div class="col-4">
												<div class="row mb-2">
												<label class="col-lg-4 fw-semibold text-muted">Contact Person
												</label>
												
												<div class="col-lg-8">
													<span class="fw-bold fs-6 text-gray-800">Zubair</span>
												</div>
												
											</div>
											<div class="row mb-2">
												<label class="col-lg-4 fw-semibold text-muted">Email
												</label>
												
												<div class="col-lg-8">
													<span class="fw-bold fs-6 text-gray-800">Zubair@gmail.com</span>
												</div>
												
											</div>
											<div class="row mb-2">
												<label class="col-lg-4 fw-semibold text-muted">Phone
												</label>
												
												<div class="col-lg-8">
													<span class="fw-bold fs-6 text-gray-800">112 227 6735</span>
												</div>
												
											</div>
											<div class="row mb-2">
												<label class="col-lg-4 fw-semibold text-muted">Position
												</label>
												
												<div class="col-lg-8">
													<span class="fw-bold fs-6 text-gray-800">Manager</span>
												</div>
												
											</div>
											</div>
											<div class="col-4">
												<div class="row mb-2">
												<label class="col-lg-4 fw-semibold text-muted">Contact Person
												</label>
												
												<div class="col-lg-8">
													<span class="fw-bold fs-6 text-gray-800">Zubair</span>
												</div>
												
											</div>
											<div class="row mb-2">
												<label class="col-lg-4 fw-semibold text-muted">Email
												</label>
												
												<div class="col-lg-8">
													<span class="fw-bold fs-6 text-gray-800">Zubair@gmail.com</span>
												</div>
												
											</div>
											<div class="row mb-2">
												<label class="col-lg-4 fw-semibold text-muted">Phone
												</label>
												
												<div class="col-lg-8">
													<span class="fw-bold fs-6 text-gray-800">112 227 6735</span>
												</div>
												
											</div>
											<div class="row mb-2">
												<label class="col-lg-4 fw-semibold text-muted">Position
												</label>
												
												<div class="col-lg-8">
													<span class="fw-bold fs-6 text-gray-800">Manager</span>
												</div>
												
											</div>
											</div>
											<div class="col-4">
												<div class="row mb-2">
												<label class="col-lg-4 fw-semibold text-muted">Contact Person
												</label>
												
												<div class="col-lg-8">
													<span class="fw-bold fs-6 text-gray-800">Zubair</span>
												</div>
												
											</div>
											<div class="row mb-2">
												<label class="col-lg-4 fw-semibold text-muted">Email
												</label>
												
												<div class="col-lg-8">
													<span class="fw-bold fs-6 text-gray-800">Zubair@gmail.com</span>
												</div>
												
											</div>
											<div class="row mb-2">
												<label class="col-lg-4 fw-semibold text-muted">Phone
												</label>
												
												<div class="col-lg-8">
													<span class="fw-bold fs-6 text-gray-800">112 227 6735</span>
												</div>
												
											</div>
											<div class="row mb-2">
												<label class="col-lg-4 fw-semibold text-muted">Position
												</label>
												
												<div class="col-lg-8">
													<span class="fw-bold fs-6 text-gray-800">Manager</span>
												</div>
												
											</div>
											</div>
										</div>
									</div>
									<!--end::details View-->
									</div>
									
									
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->
						
					</div>
					<!--end:::Main-->
@endsection


