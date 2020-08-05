<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
				<div class="panel-body">
					<div class="form-group">
							<label class="col-sm-3 control-label"><?php echo get_phrase('School');?></label>
							<div class="col-sm-8">
								<select name="grade" class="form-control selectboxit" id="grade_type">
									<option value="">Select School</option>
									<option value="smp">(SMP) Al-Mazaya Islamic School</option>
									<option value="sma">(SMA) Al-Mazaya Islamic School</option>
								</select>
							</div>
					</div>
        </div>
    </div>
		<div id="form_student"></div>
	</div>
</div>

<script type="text/javascript">

    $(document).ready(function() {
        $('#grade_type').on('change', function() {
            var grade_type = $(this).val();
            if (grade_type == '') {
                $('#form_student').html('<div class="alert alert-danger">Please select a grade type</div>');
                return;
            }
            $.ajax({
                url: '<?php echo site_url('marketing/load_grade_type/');?>' + grade_type
            }).done(function(response) {
                $('#form_student').html(response);
            });
        });
    });

</script>
