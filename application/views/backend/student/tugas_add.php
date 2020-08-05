<div class="row">
    <div class="col-md-6">
        <div class="panel panel-primary" data-collapsed="0">
            <div class="panel-heading">
                <div class="panel-title" >
                    <i class="entypo-plus"></i>
                    <?php echo get_phrase('add_tugas_harian');?>
                </div>
            </div>
            <div class="panel-body">

            <?php echo form_open(site_url('student/new_activity1') , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top', 'enctype' => 'multipart/form-data'));?>

                <!-- <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('foto_*');?></label>
                    <div class="col-sm-8">
                        <input type="hidden" name="id" value="<?php echo $id;?>">
                        <input type="file" name="images" accept="image/*" capture="camera" required/>
                    </div>
                </div> -->

                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('keterangan');?></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="note"/>
                        <input type="hidden" name="id" value="<?php echo $id;?>">
                        <i>*) Jika ada keterangan yang ingin ditambahkan</i>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-info btn-block"><?php echo get_phrase('absen');?></button>
                    </div>
                </div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>