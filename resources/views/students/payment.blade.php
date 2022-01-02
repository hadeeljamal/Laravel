@extends('layouts\layoutalhams')
@section ('content')
<form class="form" id="kt_form" action="{{route ('storepayment')}}" method="POST" >

            @csrf
 @php
// dd($payment) ;
 @endphp
            <input type="hidden" value=" <?php echo $payment['name']; ?> " name="namepayment">
            <input type="hidden" value=" <?php echo $payment['numberOfPayment']; ?> " name="traning_id">
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
                <?php
                         $i=$payment['numberOfPayment'];
                         for(  $x=1; $x <= $i ;$x++) {
                ?>
                             <div class="form-group row">
                                    <div class="col-md-6 ">
                                        <label for="kt_datepicker">Payment Date <small style="color: red;"><?php  echo $x ; ?></small></label>
                                        <input type="text" name="paymentDate<?php  echo $x ?>" id="kt_datepicker" class="form-control" placeholder="Enter Your Payment Date" required/>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="paymentValue">Payment Value <small style="color: red;"><?php  echo $x ?></small></label>
                                        <input type="text"  name="paymentValue<?php  echo $x?>" id="paymentValue" class="form-control" placeholder="Enter Your Payment Value" required/>
                                     </div>
                             </div>
                <?php } ?>
                <?php
                $diff= 4-$i;
                if ($diff === 1) {
                    $z=4 ;
                }
                elseif ($diff === 2) {
                    $z=3;
                }
                elseif ($diff === 3){
                    $z=2;
                }
                else {
                    $z=5;
                }
                for(  $y=$z; $y <=4 ;$y++) {
       ?>
                    <div class="form-group row">
                           <div class="col-md-6 ">
                               <input type="hidden" name="paymentDate<?php  echo $y ?>" id="kt_datepicker" class="form-control" placeholder="Enter Your Payment Date" value= "0" required/>
                           </div>
                           <div class="col-md-6">
                               <input type="hidden"  name="paymentValue<?php  echo $y?>" id="paymentValue" class="form-control" placeholder="Enter Your Payment Value" value= "0" required/>
                            </div>
                    </div>
       <?php } ?>
			</div>
			<div class="card-footer">
					<div class="row">
						<div class="col-md-6">
							<button type="Submit"  name="savePayment" class="btn btn-primary mr-2">Save</button>
							<button type="reset"  name="resetPayment" class="btn btn-secondary">Cancel</button>
						</div>

					</div>
			</div>
</form>
@endsection
@section ('js')
	<!--begin::Page Vendors(used by this page)-->
	<script src="../../public/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
	<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM"></script>
	<script src="../../public/assets/plugins/custom/gmaps/gmaps.js"></script>
	<!--end::Page Vendors-->
	<!--begin::Page Scripts(used by this page)-->
	<script src="../../public/assets/js/pages/widgets.js"></script>
	<script src="../../public/assets/js/pages/crud/forms/validation/form-widgets.js"></script>
	<!--end::Page Scripts-->
@endsection
