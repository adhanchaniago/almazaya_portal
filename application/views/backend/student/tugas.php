<div class="row">
    
    <div class="col-md-12">

        <div class="panel panel-primary" data-collapsed="0">
            <div class="panel-heading" >
                <div class="panel-title" style="font-size: 16px; color: white; text-align: center;">
                    Tugas Harian (<?=date('l, d M Y');?>)
                </div>
            </div>
            <div class="panel-body">
                <table cellpadding="0" cellspacing="0" border="0"  class="table table-bordered">
                    <thead>
                        <tr class="gradeA">
                            <th width="10%">#</th>
                            <th width="80%">Kegiatan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach($tugas as $row): ?>
                            <tr class="gradeA">
                                <td width="10%"></td>
                                <td width="80%"><?=$row['activity_title'];?></td>
                                <?php $stts = $this->db->get_where('activity_result', array('activity_bank_id' => $row['activity_bank_id'], 'student_id' => $this->session->userdata('student_id'), 'date' => date('Y-m-d')));
                                    if($stts->num_rows() > 0){
                                        echo '<td><div class="btn-group"><a href="#"><button class="btn btn-success">Done</button></a></div></td>';
                                    }else{
                                        echo '<td><div class="btn-group"><a href="'.site_url('student/tugas_add/'.$row['activity_bank_id']).'"><button class="btn btn-default">Absen</button></a></div></td>';
                                    }
                                 ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                
            </div>
        </div>

    </div>

</div>