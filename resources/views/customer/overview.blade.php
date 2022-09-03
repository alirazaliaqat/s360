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
					<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Profile Overview</h1>
					<!--end::Title-->
					<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">
							<a href="/customer" class="text-muted text-hover-primary">Home</a>
						</li>
						<!--end::Item-->
						
						<li class="breadcrumb-item">
							<span class="bullet bg-gray-400 w-5px h-2px"></span>
						</li>
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">Profile</li>
						<!--end::Item-->
					</ul>
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
				<!--begin::Navbar-->
				<div class="card mb-5 mb-xl-10">
					<div class="card-body pt-9 pb-0">
						<!--begin::Details-->
						<div class="d-flex flex-wrap flex-sm-nowrap mb-3">
							<!--begin: Pic-->
							<div class="me-7 mb-4">
								<div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
									<img src="{{asset('assets/media/avatars/300-1.jpg')}}" alt="image" />
									<div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
								</div>
							</div>
							<!--end::Pic-->
							
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
						<a href="/customer/edit-profile" class="btn btn-primary align-self-center">Edit Profile</a>
						<!--end::Action-->
					</div>
					<!--begin::Card header-->
					<!--begin::Card body-->
					<div class="card-body p-9">
						<!--begin::Row-->
						<div class="row mb-2">
							<!--begin::Label-->
							<label class="col-lg-3 fw-semibold text-muted">Brand</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-9">
								<span class="fw-bold fs-6 text-gray-800">Zara</span>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
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
						<!--begin::Row-->
						<div class="row mb-2">
							<!--begin::Label-->
							<label class="col-lg-3 fw-semibold text-muted">Portfolio</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-9">
								<span class="fw-bold fs-6 text-gray-800">Hotel</span>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
						<!--begin::Row-->
						<div class="row mb-2">
							<!--begin::Label-->
							<label class="col-lg-3 fw-semibold text-muted">Classification</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-9">
								<span class="fw-bold fs-6 text-gray-800">5 Star</span>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
						<!--begin::Input group-->
						<div class="row mb-2">
							<!--begin::Label-->
							<label class="col-lg-3 fw-semibold text-muted">Chain</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-9 fv-row">
								<span class="fw-semibold text-gray-800 fs-6">Standalone</span>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="row mb-2">
							<!--begin::Label-->
							<label class="col-lg-3 fw-semibold text-muted">VAT ID</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-9 fv-row">
								<span class="fw-semibold text-gray-800 fs-6">15%</span>
							</div>
							<!--end::Col-->
						</div>
						<div class="row mb-2">
							<!--begin::Label-->
							<label class="col-lg-3 fw-semibold text-muted">Billing address
							</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-9 d-flex align-items-center">
								<span class="fw-bold fs-6 text-gray-800 me-2">Riyadh, Saudi Arabia</span>
								
							</div>
							<!--end::Col-->
						</div>
						
						<div class="row mb-2">
							
							<label class="col-lg-3 fw-semibold text-muted">Zip Code
							</label>
							<div class="col-lg-9">
								<span class="fw-bold fs-6 text-gray-800">34565</span>
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
							<!--begin::Label-->
							<label class="col-lg-3 fw-semibold text-muted">Address</label>
							
							<div class="col-lg-9">
								<span class="fw-semibold fs-6 text-gray-800">XYZ, Riyadh, Saudi Arabia</span>
							</div>
							<!--begin::Label-->
						</div>
						
						<div class="row mb-2">
							
							<label class="col-lg-3 fw-semibold text-muted">Super Admin Email </label>
							
							<div class="col-lg-9">
								<span class="fw-semibold fs-6 text-gray-800">info@zara.com</span>
							</div>
							
						</div>
						<div class="row mb-2">
							
							<label class="col-lg-3 fw-semibold text-muted">Company Phone 1
								<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i>
							</label>
							
							<div class="col-lg-9">
								<span class="fw-semibold fs-6 text-gray-800">+966 35 4523 532</span>
							</div>
							
						</div>
						<div class="row mb-2">
							
							<label class="col-lg-3 fw-semibold text-muted">Company Phone 2</label>
							
							<div class="col-lg-9">
								<span class="fw-semibold fs-6 text-gray-800">+966 53 4523 345</span>
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
									<label class="col-lg-4 fw-semibold text-muted">Name
									</label>
									
									<div class="col-lg-8">
										<span class="fw-bold fs-6 text-gray-800">Zubair</span>
									</div>
									
								</div>
								<div class="row mb-2">
									<label class="col-lg-4 fw-semibold text-muted">Position</label>
									
									<div class="col-lg-8">
										<span class="fw-bold fs-6 text-gray-800">Manager</span>
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
									<label class="col-lg-4 fw-semibold text-muted">Mobile
									</label>
									
									<div class="col-lg-8">
										<span class="fw-bold fs-6 text-gray-800">112 227 6735</span>
									</div>
									
								</div>
								<div class="row mb-2">
									<label class="col-lg-4 fw-semibold text-muted">WhatsApp
									</label>
									
									<div class="col-lg-8">
										<span class="fw-bold fs-6 text-gray-800">+966 54 3247 675</span>
									</div>
									
								</div>
								
							</div>
							<div class="col-4">
								<div class="row mb-2">
									<label class="col-lg-4 fw-semibold text-muted">Name
									</label>
									
									<div class="col-lg-8">
										<span class="fw-bold fs-6 text-gray-800">Zubair</span>
									</div>
									
								</div>
								<div class="row mb-2">
									<label class="col-lg-4 fw-semibold text-muted">Position</label>
									
									<div class="col-lg-8">
										<span class="fw-bold fs-6 text-gray-800">Manager</span>
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
									<label class="col-lg-4 fw-semibold text-muted">Mobile
									</label>
									
									<div class="col-lg-8">
										<span class="fw-bold fs-6 text-gray-800">112 227 6735</span>
									</div>
									
								</div>
								<div class="row mb-2">
									<label class="col-lg-4 fw-semibold text-muted">WhatsApp
									</label>
									
									<div class="col-lg-8">
										<span class="fw-bold fs-6 text-gray-800">+966 54 3247 675</span>
									</div>
									
								</div>
								
							</div>
							<div class="col-4">
								<div class="row mb-2">
									<label class="col-lg-4 fw-semibold text-muted">Name
									</label>
									
									<div class="col-lg-8">
										<span class="fw-bold fs-6 text-gray-800">Zubair</span>
									</div>
									
								</div>
								<div class="row mb-2">
									<label class="col-lg-4 fw-semibold text-muted">Position</label>
									
									<div class="col-lg-8">
										<span class="fw-bold fs-6 text-gray-800">Manager</span>
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
									<label class="col-lg-4 fw-semibold text-muted">Mobile
									</label>
									
									<div class="col-lg-8">
										<span class="fw-bold fs-6 text-gray-800">112 227 6735</span>
									</div>
									
								</div>
								<div class="row mb-2">
									<label class="col-lg-4 fw-semibold text-muted">WhatsApp
									</label>
									
									<div class="col-lg-8">
										<span class="fw-bold fs-6 text-gray-800">+966 54 3247 675</span>
									</div>
									
								</div>
								
							</div>
						</div>
					</div>
					<!--end::details View-->
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
							<label class="col-lg-3 fw-semibold text-muted">Account No.
							</label>
							
							<div class="col-lg-9">
								<span class="fw-bold fs-6 text-gray-800">873846 676453</span>
							</div>
							
						</div>
						<div class="row mb-2">
							<label class="col-lg-3 fw-semibold text-muted">IBAN
							</label>
							
							<div class="col-lg-9">
								<span class="fw-bold fs-6 text-gray-800">SA000 873846 676453</span>
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


