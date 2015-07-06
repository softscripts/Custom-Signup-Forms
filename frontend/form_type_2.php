<?php if($entry_mode == 'submit') { ?>
<form id="wbsf_form_entry" name="wbsf_entry_form" action="" method="post" class="form-horizontal" role="form">
	<div class="children_field clearfix" id="children_detils_1">
		<h4 class="wbsf_form_fieldset_title">Child's Information</h4>
		<div class="form-group">
			<label for="child_name" class="col-lg-3 control-label">Child's Name<em>*</em></label>
			<div class="col-lg-9">
				<input type="text" placeholder="Name" class="data-required form-control" required="required" name="child_name[]" id="child_name" />
			</div>
		</div>
		<div class="form-group">
			<label for="child_dob" class="col-lg-3 control-label">Child's Birthdate<em>*</em></label> 
			<div class="col-lg-9">
				<input class="data-required form-control wbsf-datepicker" placeholder="Date of birth" type="text" id="child_dob" required="required" name="child_dob[]" />
			</div>
		</div>
	</div>
	<div class="form-group right-align">
		<div class="col-lg-offset-3 col-lg-9">
			<a href="#" class="btn btn-default btn-sm" id="wbsf-addnew">Add Another</a>
		</div>
	</div>
	<h4 class="wbsf_form_fieldset_title">Parent/Gardian</h4>
	<div class="form-group">
		<label for="parent_name" class="col-lg-3 control-label">First Name<em>*</em></label>
		<div class="col-lg-9">
			<input type="text" class="data-required form-control" placeholder="Name" name="parent_name" required="required" id="parent_name" />
		</div>
	</div>
	<div class="form-group">
		<label for="wbsf_email" class="col-lg-3 control-label">Email<em>*</em></label> 
		<div class="col-lg-9">
			<input class="data-required form-control" placeholder="Email" type="email" required="required" id="wbsf_email" name="email" />
		</div>
	</div>
	<div class="form-group">
		<label for="parent_dob" class="col-lg-3 control-label">Birthdate<em>*</em></label> 
		<div class="col-lg-9">
			<input class="data-required form-control wbsf-datepicker" placeholder="Date of birth" type="text" id="parent_dob" name="parent_dob" />
		</div>
	</div>
	<h4 class="wbsf_form_fieldset_title">Mailing Address</h4>
	<div class="form-group">
			<label for="wbsf_address" class="col-lg-3 control-label">Address<em>*</em></label>
		<div class="col-lg-9">
			<input type="text" class="data-required form-control" placeholder="Address" name="address" id="wbsf_address" />
		</div>
	</div>
	<div class="form-group">
		<label for="wbsf_city" class="col-lg-3 control-label">City<em>*</em></label> 
		<div class="col-lg-9">
			<input class="data-required form-control" placeholder="City" type="text" id="wbsf_city" name="city" />
		</div>
	</div>
	<div class="form-group">
		<label for="wbsf_state" class="col-lg-3 control-label">State<em>*</em></label> 
		<div class="col-lg-9">
			<input class="data-required form-control" placeholder="State" type="text" id="wbsf_state" name="state" />
		</div>
	</div>
	<div class="form-group">
		<label for="wbsf_zip" class="col-lg-3 control-label">Zip<em>*</em></label> 
		<div class="col-lg-9">
			<input class="data-required form-control" placeholder="Zipcode" type="text" id="wbsf_zip" name="zip" />
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-offset-3 col-lg-9">
			<input type="hidden" name="fid" id="wbsf_form_id" value="<?php echo $form->fid; ?>" />
			<input type="hidden" name="form_type" id="form_type" value="<?php echo $form_type; ?>" />
			<input type="submit" name="wbsf-submit" id="wbsf-submit" class="btn btn-primary" value="Submit" />
		</div>
	</div>
</form>
<?php } 

if($entry_mode == 'confirm' && !empty($entry)) { ?>
<form id="wbdf_form_confirm_<?php $form_id; ?>" class="form-horizontal" role="form" name="wbsf_entry_confirm_form" action="" method="post">
	<h4 class="wbsf_form_fieldset_title">Please verifiy your registration details:</h4>
	 <div class="form-group">
		 <label class="col-lg-3 control-label">Event Name</label>
		<div class="col-lg-9">
		  <p class="form-control-static"><?php echo $form->form_title; ?></p>
		</div>
	</div>
	<div class="form-group">
		<label class="col-lg-3 control-label">Attende Name</label>
		<div class="col-lg-9">
			<p class="form-control-static"><?php echo $entry->parent_name; ?> (<?php echo $entry->email; ?>) 
<a href="<?php echo wbsf_edit_url('wbsf_token='.$wbsf_token.'&wbsf_entry_mode=confirm&form_type='.$form_type); ?>">Edit</a></p>
		</div>
	</div>
	<h4 class="wbsf_form_fieldset_title">Additional Details:</h4>
	<div class="form-group">
		<label class="col-lg-3 control-label">Number of Children</label>
		<div class="col-lg-9">
		  <p class="form-control-static"><?php echo count(unserialize($entry->children)); ?></p>
		</div>
	</div>
	<div class="form-group">
		<label class="col-lg-3 control-label">Birthdate</label>
		<div class="col-lg-9">
		  <p class="form-control-static"><?php echo $entry->parent_dob; ?></p>
		</div>
	</div>
	<div class="form-group">
		<label class="col-lg-3 control-label">Address</label>
		<div class="col-lg-9">
		  <p class="form-control-static"><?php echo $entry->address; ?></p>
		</div>
	</div>
	<div class="form-group">
		<label class="col-lg-3 control-label">City</label>
		<div class="col-lg-9">
		  <p class="form-control-static"><?php echo $entry->city; ?></p>
		</div>
	</div>
	<div class="form-group">
		<label class="col-lg-3 control-label">State</label>
		<div class="col-lg-9">
		  <p class="form-control-static"><?php echo $entry->state; ?></p>
		</div>
	</div>
	<div class="form-group">
		<label class="col-lg-3 control-label">Zip</label>
		<div class="col-lg-9">
		  <p class="form-control-static"><?php echo $entry->zip; ?></p>
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-12">
			<input type="hidden" name="fid" id="wbsf_form_id" value="<?php echo $form->fid; ?>" />
			<input type="hidden" name="eid" id="wbsf_entry_id" value="<?php echo $entry->eid; ?>" />
			<input type="hidden" name="form_type" id="form_type" value="<?php echo $form_type; ?>" />
			<input type="submit" name="wbsf-confirm-submit" id="wbsf-submit" class="btn btn-primary" value="Confirm Registration" />
		</div>
	</div>
</form>
<?php } ?>
