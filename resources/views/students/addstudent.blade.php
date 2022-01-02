@extends('layouts\layoutalhams')
@section ('content')
<form class="form" id="kt_form" action="{{route ('storedata')}}" method="POST" >
	@csrf
						  <div class="form-group">
								<div class="alert alert-light-primary d-none mb-15" role="alert" id="kt_form_msg">
									<div class="alert-icon">
										<i class="la la-warning"></i>
									</div>
									<div class="alert-text font-weight-bold">
										Oh snap! Change a few things up and try submitting again.
									</div>
									<div class="alert-close">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span><i class="ki ki-close "></i></span>
										</button>
									</div>
								</div>
							</div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="col-md-6 ">
                                        <label for="studentEnglish">Student Name <small> English</small>   <span style="color: red;">*</span></label>
                                        <input type="text" name="studentEnglish" id="studentEnglish" class="form-control" placeholder="Enter Your Name At English"  required/>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="studentArabic">Student Name <small>Arabic</small>  <span style="color: red;">*</span></label>
                                        <input type="text"  name="studentArabic" id="studentArabic" class="form-control" placeholder="Enter Your Name At Arabic" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="idNumber">ID Number  <span style="color: red;">*</span></label>
                                        <input type="text" name="idNumber" id="idNumber" class="form-control" placeholder="Please enter your ID" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="kt_datepicker">Date of Birth  <span style="color: red;">*</span></label>
										 <input type="text" class="form-control" name="birthDay" placeholder="Select date" id="kt_datepicker"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="phoneNumber">Phone Number  <span style="color: red;">*</span></label>
                                        <input type="text" name="phoneNumber" id="phoneNumber" class="form-control" placeholder="Please enter your Phone Number" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="alternateNumber"> Alternate Phone  <span style="color: red;">*</span></label>
                                        <input type="text" name="alternateNumber" id="alternateNumber" class="form-control" placeholder="Please enter your Alternate Phone" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="alternateName">Alternate Person <span style="color: red;">*</span> </label>
                                        <input type="text" name="alternateName" id="alternateName" class="form-control" placeholder="Please enter your Alternate Person" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email">Email  <span style="color: red;">*</span></label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Please enter your Email " />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="address">Address  <span style="color: red;">*</span></label>
                                        <div class="input-group">
                                            <input type="text" name="address" id="address" class="form-control" placeholder="Enter your address" />
                                          
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                            <label  for="kt_bootstrap_select">City  <span style="color: red;">*</span></label>
                                                <select  name="city" id="kt_bootstrap_select" class="form-control kt-bootstrap-select" >
                                                    <option value="south">South Of Gaza</option>
                                                    <option value="middle">Middle Of Gaza</option>
                                                    <option value="gaza">Gaza</option>
                                                    <option value="north">North Of Gaza</option>
                                                </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="qualification" >Qualification  <span style="color: red;">*</span></label>
                                        <select name="qualification" id="qualification" class="form-control selectpicker">
                                            <option  value="elementary">Elementary school</option>
                                            <option  value="secondary">Secondary School</option>
                                            <option  value="high">High School</option>
                                            <option  value="tawjehi">Tawjehi</option>
                                            <option  value="bachlor">Bachelor's</option>
                                            <option  value="master">Masrter</option>
                                        </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="specialization">Specialization <span style="color: red;">*</span> </label>
                                            <input type="text" name="specialization" id="specialization" class="form-control" placeholder="Please enter your Specialization " />
                                        </div>
                                </div>
                                <div class="form-group row">
                                    
                                        <div class="col-md-6">
                                            <label for="currentJob">Current job  <span style="color: red;">*</span> </label>
                                            <input type="text" name="currentJob" id="currentJob" class="form-control" placeholder="Please enter your Current job " />
                                        </div>
                                        <div class="col-md-6">
                                            <label for="workPlace">Work Place   <span style="color: red;">*</span> </label>
                                            <input type="text" name="workPlace" id="workPlace" class="form-control" placeholder="Please enter your Workplace  " />
                                        </div>
                                </div>
                             
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <button type="Submit"  name="save" class="btn btn-primary mr-2">Save</button>
                                        <button type="reset"  name="reset" class="btn btn-secondary">Cancel</button>
                                    </div>
                              
                                </div>
                            </div>
                        </form>
@endsection

@section('js')
	<!--begin::Page Vendors(used by this page)-->
	<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
	<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM"></script>
	<script src="assets/plugins/custom/gmaps/gmaps.js"></script>
	<!--end::Page Vendors-->
	<!--begin::Page Scripts(used by this page)-->
	<script src="assets/js/pages/widgets.js"></script>
	<script src="assets/js/pages/crud/forms/validation/form-widgets.js"></script>
	<!--end::Page Scripts-->
@endsection
