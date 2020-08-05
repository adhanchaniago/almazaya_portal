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
                <form action="<?=site_url('admin/tugas_create')?>" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="file" accept="image/*" capture="camera" />
                        </div>
                        <div class="col-md-12">
                            <br/>
                            <button class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>