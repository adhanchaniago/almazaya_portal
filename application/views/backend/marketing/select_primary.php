<form class="" action="<?php echo site_url('marketing/plan_primary/select') ?>" method="post">
  <!-- <div class="form-group">
    <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('group_name');?></label>

    <div class="col-sm-8">
      <input type="text" class="form-control" name="group_name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>"  autofocus
      data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" required>
    </div>
  </div> -->

<?php
  // $list = $this->db->get_where('marketing_school', array('level' => 'SD'))->result_array();
  $tes = $this->db->get('marketing_plan')->result_array();
  $id = array();
  foreach ($tes as $row) {
    $id[] = $row['school_id'];
  }
  $this->db->where_not_in('school_id', $id);
  $list = $this->db->get_where('marketing_school', array('level' => 'SD'))->result_array();
?>
<br/>
<div class="col-md-12" style="margin-top: 10px;">
    <table  class="table table-bordered table-striped">
      <span class="col-md-6" style="font-size: 13px; color: #616161; text-align: left; padding: 0; margin: 0;"><u><?php echo 'Primary School List'; ?></u></span>
      <span class="col-md-4 pull-right" style="text-align: right; color: #616161;">
        <input type="checkbox" id="primary_school" onchange="checkAllBoxes(this)">&nbsp;<?php echo get_phrase('check_all'); ?>
      </span>
      <thead>
        <tr>
          <th><?php echo get_phrase('select'); ?></th>
          <th><?php echo get_phrase('school_name'); ?></th>
          <th><?php echo get_phrase('contact_person'); ?></th>
        </tr>
      </thead>
      <?php foreach ($list as $row):?>
        <tr>
          <td width = "10%">
            <input type="checkbox" class="primary_school" name="id[]" value="<?php echo $row['school_id']; ?>">
          </td>
          <td width = "40%"><?php echo $row['name']; ?></td>
          <td width = "30%"><?php echo $row['contact']." (".$row['phone'].")"; ?></td>
        </tr>
      <?php endforeach ?>
    </table>
</div>

<div class="col-md-4 col-md-offset-4" style="text-align: center;">
  <button type="submit" name="submit" class="btn btn-success btn-md"><?php echo get_phrase('done'); ?></button>
</div>
</form>
<script type="text/javascript">
  function checkAllBoxes(check){
    var checkboxes = document.getElementsByTagName('input');

    if (check.checked) {
          $('.'+check.id).prop("checked", true);

     } else {
        $('.'+check.id).prop("checked", false);
     }
  }
</script>
