<?php 
$start = date('Y-m-d',$tanggal->start_date);
$end = date('Y-m-d',$tanggal->end_date);
$start1 = date('Y-m-d',$tanggal->start_date);
$end1 = date('Y-m-d',$tanggal->end_date);
$user = $this->session->userdata('student_id');
// $data11 = $this->db->get_where('activity_result', array('student_id' => $user, 'activity_bank_id' => 3, 'date' => $start))->row()->date;
// var_dump($data11);

// echo $user;
?>
<br>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6" style="text-align: center;">
        <div class="tile-stats tile-white">
            <div class="icon"><i class="entypo-docs"></i></div>
            <h3 style="color: #696969;">
                Report Kegiatan Ibadah Ramadhan 1441 H <br> (24 April s/d 23 Mei 2020)
            </h3>
            <h4 style="color: #696969;">
                Al-Mazaya Islamic School Banjarmasin
            </h4>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>
<hr>

<div class="panel panel-primary ">
    <div class="panel-heading">
        <div class="panel-title">
            <?php echo get_phrase('report');?>
        </div>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <h4><b>Kegiatan Ibadah :</b></h4>
                <table class="table table-bordered" id="report">
                    <thead>
                        <tr>
                            <td style="text-align: center;" rowspan="2"><?php echo get_phrase('kegiatan');?></td>
                            <td style="text-align: center;" colspan="30"><b>23 April 2020    s/d   24 Mei 2020</b></td>
                        </tr>
                        <tr>
                        <?php
                            while ($start <= $end) {
                                // echo '<td>'.strtotime($start).'</td>';
                                $tg = date("d", strtotime($start));
                                echo '<td>'.$tg.'</td>';
                                $start = date('Y-m-d',strtotime('+1 days',strtotime($start)));
                            }
                        ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($activity as $row){ 
                            $id = $row['activity_bank_id'];
                        ?>
                        <tr>
                            <td style="text-align: left;">
                                <?=$row['activity_title'];?>
                            </td>
                            <?php
                                $dari = '2020-04-24';
                                $sampai = '2020-05-23';
                                while (strtotime($dari) <= strtotime($sampai)) {
                                    
                                    $data = $this->db->get_where('activity_result', array('student_id' => $user, 'activity_bank_id' => $id, 'date' => $dari));
                                    if ($data->num_rows() > 0) {
                                        echo '<td><i class="entypo-record" style="color: #00a651;"></i></td>';
                                    }else{
                                        if (date('Y-m-d') >= $dari) {
                                            echo '<td><i class="entypo-record" style="color: #ee4749;"></i></i></td>';
                                        }else {
                                            echo '<td>-</td>';
                                        }
                                    }
                                    $dari = date ("Y-m-d", strtotime("+1 day", strtotime($dari)));
                                }

                            ?>
                        </tr>
                            <?php 
                            }?>
                    </tbody>
                </table>
                <hr><br>
                <h4><b>Tugas Harian Dirumah :</b></h4>
                <table class="table table-bordered" id="report">
                    <thead>
                        <tr>
                            <td style="text-align: center;" rowspan="2"><?php echo get_phrase('kegiatan');?></td>
                            <td style="text-align: center;" colspan="30"><b>23 April 2020    s/d   24 Mei 2020</b></td>
                        </tr>
                        <tr>
                        <?php
                            while ($start1 <= $end1) {
                                // echo '<td>'.strtotime($start1).'</td>';
                                $tgl = date("d", strtotime($start1));
                                echo '<td>'.$tgl.'</td>';
                                $start1 = date('Y-m-d',strtotime('+1 days',strtotime($start1)));
                            }
                        ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($tugas as $row1){ 
                            $id = $row1['activity_bank_id'];
                        ?>
                        <tr>
                            <td style="text-align: left;">
                                <?=$row1['activity_title'];?>
                            </td>
                            <?php
                                $dari1 = '2020-04-24';
                                $sampai1 = '2020-05-23';
                                while (strtotime($dari1) <= strtotime($sampai1)) {
                                    
                                    $data = $this->db->get_where('activity_result', array('student_id' => $user, 'activity_bank_id' => $id, 'date' => $dari1));
                                    if ($data->num_rows() > 0) {
                                        echo '<td><i class="entypo-record" style="color: #00a651;"></i></td>';
                                    }else{
                                        if (date('Y-m-d') >= $dari1) {
                                            echo '<td><i class="entypo-record" style="color: #ee4749;"></i></i></td>';
                                        }else {
                                            echo '<td>-</td>';
                                        }
                                    }
                                    $dari1 = date ("Y-m-d", strtotime("+1 day", strtotime($dari1)));
                                }

                            ?>
                        </tr>
                            <?php 
                            }?>
                    </tbody>
                </table>

                <p><b>NOTE :</b></p>
                <p><i class="entypo-record" style="color: #00a651;"></i> = Present </p>
                <!-- <p><i class="entypo-record" style="color: #8c8c8c;"></i> = Permission </p> -->
                <p><i class="entypo-record" style="color: #ee4749;"></i> = Absent </p>


                <center>
                    <a href="<?php echo site_url('student/activity_report_export/'); ?>" class="btn btn-primary">
                        <?php echo get_phrase('export_excel'); ?>
                    </a>
                </center>
            </div>
        </div>
    </div>
</div>
