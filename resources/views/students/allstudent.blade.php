@extends('layouts\layoutalhams')
@section ('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <form action="" method="POST">
                    @csrf
                    <input type="text" name="q" value="{{$q}}" id="query" class="form-control w-250px">
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>

            </div>
            <div class="col-md-2 mt-5">
                <div class="card-toolbar">
                    <!--begin::Dropdown-->
                    <div class="dropdown dropdown-inline mr-2">
                        <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="la la-download"></i>Export
                        </button>
                        <!--begin::Dropdown Menu-->
                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                            <ul class="nav flex-column nav-hover">
                                <li class="nav-header font-weight-bolder text-uppercase text-primary pb-2">Choose an
                                    option:
                                </li>
                                <li class="nav-item">
                                    <a href="#"  onclick="window.print()" class="nav-link">
                                        <i class="nav-icon la la-print"></i>
                                        <span class="nav-text">Print</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{url('users/export/')}}" class="nav-link">
                                        <i class="nav-icon la la-file-excel-o"></i>
                                        <span class="nav-text">Excel</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{url('pdfview')}}" class="nav-link">
                                        <i class="nav-icon la la-file-pdf-o"></i>
                                        <span class="nav-text">PDF</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!--end::Dropdown Menu-->
                    </div>
                    <!--end::Dropdown-->

                </div>

            </div>
        </div>
    </div>

<div class="table-responsive table-margin" id="section-to-print">
								<!-- class=" datatable-bordered datatable-head-custom"  -->
								<table class=" datatable table table-hover rounded table-striped " id="kt_datatable">
									<thead class="">
										<th>#</th>
										<th>Student Name</th>
										<th>Email</th>
										<th>Mobile Number</th>
										<th>ID</th>
										<th>Action</th>
									</thead>
									<tbody>
									@foreach ($items as $item)
									<tr>
										<td>{{$loop->iteration}}</td>
										<td>{{$item->studentEnglish}} </td>
										<td>{{$item->email}}</td>
										<td>{{$item->phoneNumber}}</td>
										<td>{{$item->idNumber}}</td>
										<td>
											<div class="dropdown dropdown-inline mr-4">
												<button type="button" class="btn btn-light-primary btn-icon btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<i class="ki ki-bold-more-hor"></i>
												</button>
												<div class="dropdown-menu">
													<ul class="list-unstyled">
														<li><a href="delete/{{$item->id}}"> <i class="far fa-trash-alt"></i> Delete </a></li>
														<li><a href="edit/{{$item->id}}"> <i class="far fa-edit"></i> Edit </a></li>
														<li><a href="traningname/{{$item->id}}"> <i class="far fa-user"></i> Training </a></li>
													</ul>
												</div>
											</div>
										</td>
									</tr>
									@endforeach
									</tbody>
								</table>
							</div>
@endsection

@section('css')
    <style>
        @media print {
            body * {
                visibility: hidden;
            }
            #section-to-print, #section-to-print * {
                visibility: visible;
            }
            #section-to-print {
                position: absolute;
                left: 0;
                top: 0;
            }
        }
    </style>
@endsection
@section('js')
	<!--begin::Page Vendors(used by this page)-->
	<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
	<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM"></script>
	<script src="assets/plugins/custom/gmaps/gmaps.js"></script>
	<!--end::Page Vendors-->
	<!--begin::Page Scripts(used by this page)-->
	<script src="assets/js/pages/widgets.js"></script>
	<!--end::Page Scripts-->
@endsection
