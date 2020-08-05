<div class="row">
    
    <div class="col-md-12">

        <div class="panel panel-primary" data-collapsed="0">
            <div class="panel-heading" >
                <div class="panel-title" style="font-size: 16px; color: white; text-align: center;">
                    Ibadah Harian (<?=date('l, d M Y');?>)
                </div>
            </div>
            <div class="panel-body">
                <table cellpadding="0" cellspacing="0" border="0"  class="table table-bordered">
                    <thead>
                        <tr class="gradeA">
                            <th width="10%">Waktu</th>
                            <th width="80%">Kegiatan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach($ibadah as $row){
                            if ($row['status'] == 1) { ?>
                            <tr class="gradeA">
                                <td width="10%"><?=$row['time_start'];?></td>
                                <td width="80%"><?=$row['activity_title'];?></td>
                                <?php $stts = $this->db->get_where('activity_result', array('activity_bank_id' => $row['activity_bank_id'], 'student_id' => $this->session->userdata('student_id'), 'date' => date('Y-m-d')));
                                    if($stts->num_rows() > 0){
                                        $r = $stts->row();
                                        if ($r->result == 'start') {
                                            echo '<td><div class="btn-group"><a href="'.site_url('student/tadarus_edit/'.$r->activity_result_id).'"><button class="btn btn-warning">Selesaikan</button></a></div></td>';
                                        }else{
                                            echo '<td><div class="btn-group"><a href="#"><button class="btn btn-success">Done</button></a></div></td>';
                                        }
                                    }else{
                                        echo '<td><div class="btn-group"><a href="'.site_url('student/tadarus_add/'.$row['activity_bank_id']).'"><button class="btn btn-default">Memulai</button></a></div></td>';
                                    }
                                 ?>
                            </tr>
                            <?php 
                            }elseif($row['status'] == 2){
                                ?>
                                <tr class="gradeA">
                                    <td width="10%"><?=$row['time_start'];?></td>
                                    <td width="80%"><?=$row['activity_title'];?></td>
                                    <?php $stts = $this->db->get_where('activity_result', array('activity_bank_id' => $row['activity_bank_id'], 'student_id' => $this->session->userdata('student_id'), 'date' => date('Y-m-d')));
                                        if($stts->num_rows() > 0){
                                            echo '<td><div class="btn-group"><a href="#"><button class="btn btn-success">Done</button></a></div></td>';
                                        }else{
                                            echo '<td><div class="btn-group"><a href="'.site_url('student/ibadah_add2/'.$row['activity_bank_id']).'"><button class="btn btn-default">Absen</button></a></div></td>';
                                        }
                                     ?>
                                </tr>
                            <?php }else{ ?>
                            <tr class="gradeA">
                                <td width="10%"><?=$row['time_start'];?></td>
                                <td width="80%"><?=$row['activity_title'];?></td>
                                <?php $stts = $this->db->get_where('activity_result', array('activity_bank_id' => $row['activity_bank_id'], 'student_id' => $this->session->userdata('student_id'), 'date' => date('Y-m-d')));
                                    if($stts->num_rows() > 0){
                                        echo '<td><div class="btn-group"><a href="#"><button class="btn btn-success">Done</button></a></div></td>';
                                    }else{
                                        echo '<td><div class="btn-group"><a href="'.site_url('student/ibadah_add/'.$row['activity_bank_id']).'"><button class="btn btn-default">Absen</button></a></div></td>';
                                    }
                                 ?>
                            </tr>
                        <?php }
                            } ?>
                    </tbody>

                </table>
                
            </div>
        </div>
        
        <hr>

        <div class="panel panel-primary" data-collapsed="0">
            <div class="panel-heading" >
                <div class="panel-title" style="font-size: 16px; color: white; text-align: center;">
                    Daftar Kegiatan
                </div>
            </div>
            <div class="panel-body">
                <table cellpadding="0" cellspacing="0" border="0"  class="table table-bordered">
                    <thead>
                        <tr class="gradeA">
                            <th width="10%">Waktu</th>
                            <th width="80%">Kegiatan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach($ibadah1 as $row){ 
                                $sekarang = date('H:i');
                                if ($sekarang >= $row['time_start']) {
                                }else{
                            ?>
                            <tr class="gradeA">
                                <th width="10%"><?=$row['time_start'];?></th>
                                <th width="80%"><?=$row['activity_title'];?></th>
                                <td><div class="btn-group"><button class="btn btn-secondary"><i>Waiting</i></button></div></td>
                            </tr>
                        <?php 
                                }
                            } ?>
                    </tbody>

                </table>
                
            </div>
        </div>

    </div>

</div>