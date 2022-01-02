@extends('layouts\layoutalhams')
@section('content')
<form action="{{route ('storetraning',$traning->id)}}" method="Post">
    @csrf
    <input type="hidden" value=" <?php echo $traning ['studentEnglish']; ?> " name="name">
    <input type="hidden" value=" <?php  echo $traning ['id']; ?> " name="student_id">
    <div class="form-group row">
        <div class="col-md-6 ">
            <label>Course Name</label>
            <select name="courses" id="courses" class="form-control selectpicker">
                <option  value="web">web</option>
                <option  value="mobile">mobile</option>
                <option  value="pv">pv</option>
            </select>
        </div>
        <div class="col-md-6 ">
            <label>Admission application fee</label>
            <input type="text" name="admissionFee" id="specialization" class="form-control" placeholder="Enter your admission application fee " />
        
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-6 ">
            <label>Course Fee</label>
            <input type="text" name="courseFee" id="specialization" class="form-control" placeholder="Enter your course fee " />
        
        </div>
        <div class="col-md-6 ">
            <label>Currency Type</label>
            <select name="currency" class="form-control selectpicker">
                <option value="dollar">USD</option>
                <option value="dinar">JOR</option>
                <option value="shekel">ILS</option>
        </select>
        
        </div>
    </div >
    <div class="form-group row">
        <div class="col-md-6 ">
            <label>Number of Payments</label>
            <input type="number" name="numberOfPayment" min="1" max="4" id="specialization" class="form-control" placeholder="Enter number of payments " />
            <div class="note">Note: the number of payment must be larger than 1 and less than 4</div>
    
        </div>
    </div>
                        
								{{-- <div class="fee table-margin table-responsive">
									<!-- class=" datatable-bordered datatable-head-custom"  -->
									<table class=" datatable table table-hover rounded table-striped " id="kt_datatable">
										<thead class="">
											<th>Course Name</th>
											<th>Admission application fee</th>
											<th>Course Fee</th>
											<th>Currency Type</th>
											<th>Number of Payments</th>
										</thead>
										<tbody>
										<tr>
											<td>
											   <select name="courses" id="courses" class="form-control selectpicker">
													<option  value="web">web</option>
													<option  value="mobile">mobile</option>
													<option  value="pv">pv</option>
                                      			</select>
											</td>
											<td>
												<input type="text" name="admissionFee" id="specialization" class="form-control" placeholder="Enter your admission application fee " />
											</td>
											<td>
											<input type="text" name="courseFee" id="specialization" class="form-control" placeholder="Enter your course fee " />
											</td>
											<td>
											<select name="currency" class="form-control selectpicker">
														<option value="dollar">USD</option>
														<option value="dinar">JOR</option>
														<option value="shekel">ILS</option>
												</select>
											</td>
											<td>
											<input type="number" name="numberOfPayment" min="1" max="4" id="specialization" class="form-control" placeholder="Enter number of payments " />
											</td>
										</tr>
										</tbody>
									</table>
                                
								</div> --}}
								  <button type="Submit"  name="save" class="text-right btn btn-primary mr-2">Save</button>
							</form>
@endsection
@section('js')
<!--begin::Page Vendors(used by this page)-->
<script src="../../public/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
	<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM"></script>
	<script src="../../public/assets/plugins/custom/gmaps/gmaps.js"></script>
	<!--end::Page Vendors-->
	<!--begin::Page Scripts(used by this page)-->
	<script src="../../public/assets/js/pages/widgets.js"></script>
	<!--end::Page Scripts-->
@endsection
