<div class="row">
    <div class="col-md-12">
    
        <!------CONTROL TABS START------>
        <ul class="nav nav-tabs bordered">

            <li class="active">
                <a href="#bio" data-toggle="tab"><i class="entypo-user"></i> 
                    <?php echo get_phrase('bio_data');?>
                </a>
            </li>

            <li>
                <a href="#ayah" data-toggle="tab"><i class="entypo-user"></i> 
                    <?php echo get_phrase('data_ayah_kandung');?>
                </a>
            </li>

            <li>
                <a href="#ibu" data-toggle="tab"><i class="entypo-user"></i> 
                    <?php echo get_phrase('data_ibu_kandung');?>
                </a>
            </li>

            <li>
                <a href="#wali" data-toggle="tab"><i class="entypo-user"></i> 
                    <?php echo get_phrase('data_wali');?>
                </a>
            </li>

            <li>
                <a href="#kontak" data-toggle="tab"><i class="entypo-user"></i> 
                    <?php echo get_phrase('kontak');?>
                </a>
            </li>

            <li>
                <a href="#akun" data-toggle="tab"><i class="entypo-user"></i> 
                    <?php echo get_phrase('akun');?>
                </a>
            </li>
        </ul>
        <!------CONTROL TABS END------>
        
    
        <div class="tab-content">
            <!----EDITING FORM STARTS-->
            <div class="tab-pane box active" id="bio" style="padding: 5px">
                <div class="box-content">
                    <?php 
                    foreach($data as $row):
                        ?>
                        <?php echo form_open(site_url('student/manage_profile/update_profile_info'), array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top' , 'enctype' => 'multipart/form-data'));?>
                            
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('name');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>" required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('gender');?></label>
                                
                                <div class="col-sm-5">
                                    <select name="sex" class="form-control selectboxit">
                                      <option value=""><?php echo get_phrase('select');?></option>
                                      <option value="male" <?php if($row['sex'] == 'male')echo 'selected';?>><?php echo get_phrase('male');?></option>
                                      <option value="female"<?php if($row['sex'] == 'female')echo 'selected';?>><?php echo get_phrase('female');?></option>
                                  </select>
                                </div> 
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('NISN');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="nisn" value="<?php echo $row['nisn'];?>" required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('nik/ no. KITAS(untuk WNA)');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="kitas" value="<?php echo $row['kitas'];?>"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('birthplace');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="birthplace" value="<?php echo $row['birthplace'];?>"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('birthday');?></label>
                                
                                <div class="col-sm-5">
                                    <input type="text" class="form-control datepicker" name="birthday" 
                                        value="<?php echo $row['birthday'];?>" 
                                            data-start-view="2">
                                </div> 
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('no registrasi akta');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="no_akta" value="<?php echo $row['no_akta'];?>"/>
                                </div>
                            </div>   

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('agama');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="agama" value="<?php echo $row['agama'];?>"/>
                                </div>
                            </div> 

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('kewarganegaraan');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="negara" value="<?php echo $row['negara'];?>"/>
                                </div>
                            </div> 

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('berkebutuhan_khusus');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="khusus_siswa" value="<?php echo $row['khusus_siswa'];?>"/>
                                </div>
                            </div>                       

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('address');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="address" value="<?php echo $row['address'];?>"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('RT');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="rt" value="<?php echo $row['rt'];?>"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('RW');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="rw" value="<?php echo $row['rw'];?>"/>
                                </div>
                            </div>  

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('nama_dusun');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="dusun" value="<?php echo $row['dusun'];?>"/>
                                </div>
                            </div> 

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('nama_kelurahan');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="kelurahan" value="<?php echo $row['kelurahan'];?>"/>
                                </div>
                            </div> 

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('kecamatan');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="kec" value="<?php echo $row['kec'];?>"/>
                                </div>
                            </div> 

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('kode_pos');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="kode_pos" value="<?php echo $row['kode_pos'];?>"/>
                                </div>
                            </div> 

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('tempat_tinggal');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="tinggal" value="<?php echo $row['tinggal'];?>"/>
                                </div>
                            </div> 

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('mode_transportasi');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="transportasi" value="<?php echo $row['transportasi'];?>"/>
                                </div>
                            </div> 

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('No_KKS');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="kks" value="<?php echo $row['kks'];?>"/>
                                </div>
                            </div> 

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('anak_keberapa');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="anak_ke" value="<?php echo $row['anak_ke'];?>"/>
                                </div>
                            </div> 

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('penerima_KPS/PKH');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="" value="<?php echo $row[''];?>"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('no_KPS/PKH');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="no_kps" value="<?php echo $row['no_kps'];?>"/>
                                </div>
                            </div>  

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('usulan_dari_sekolah');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="" value="<?php echo $row[''];?>"/>
                                </div>
                            </div> 

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('penerima_kip');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="" value="<?php echo $row[''];?>"/>
                                </div>
                            </div> 

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('no_KIP');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="no_kip" value="<?php echo $row['no_kip'];?>"/>
                                </div>
                            </div> 

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('nama_tertera_di_kip');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="nama_kip" value="<?php echo $row['nama_kip'];?>"/>
                                </div>
                            </div> 

                           <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('terima_fisik_kartu');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="" value="<?php echo $row[''];?>"/>
                                </div>
                            </div> 

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('alasan_layak_pip');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="alasan_pip" value="<?php echo $row['alasan_pip'];?>"/>
                                </div>
                            </div> 

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('bank');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="bank" value="<?php echo $row['bank'];?>"/>
                                </div>
                            </div> 

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('no_rekening_bank');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="no_rek" value="<?php echo $row['no_rek'];?>"/>
                                </div>
                            </div> 

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('rekening_atas_nama');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="nama_rek" value="<?php echo $row['nama_rek'];?>"/>
                                </div>
                            </div> 




                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-5">
                                    <button type="submit" class="btn btn-info"><?php echo get_phrase('update_profile');?></button>
                                </div>
                            </div>
                        </form>
                        <?php
                    endforeach;
                    ?>
                </div>
            </div>
            <!----EDITING FORM ENDS-->

            <div class="tab-pane box" id="ayah" style="padding: 5px">
                <div class="box-content"> 
                    <?php 
                    foreach($data as $row):
                        ?>
                        <?php echo form_open(site_url('student/my_profile/ayah/'.$this->session->userdata('student_id')), array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top' , 'enctype' => 'multipart/form-data'));?>
                            
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('nama_ayah_kandung');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="nama_ayah" value="<?php echo $row['nama_ayah'];?>" required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('NIK_ayah');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="nik_ayah" value="<?php echo $row['nik_ayah'];?>" required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('tahun_lahir');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="tahun_ayah" value="<?php echo $row['tahun_ayah'];?>" required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('pendidikan');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="pendidikan_ayah" value="<?php echo $row['pendidikan_ayah'];?>" required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('pekerjaan');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="pekerjaan_ayah" value="<?php echo $row['pekerjaan_ayah'];?>" required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('penghasilan_bulanan');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="penghasilan_ayah" value="<?php echo $row['penghasilan_ayah'];?>" required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('bekebutuhan_khusus');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="khusus_ayah" value="<?php echo $row['khusus_ayah'];?>" required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-5">
                                    <button type="submit" class="btn btn-info"><?php echo get_phrase('update_profile');?></button>
                                </div>
                            </div>

                        </form>
                        <?php
                    endforeach;
                    ?>
                </div>
            </div>

            <div class="tab-pane box" id="ibu" style="padding: 5px">
                <div class="box-content">
                    <?php 
                    foreach($data as $row):
                        ?>
                        <?php echo form_open(site_url('student/my_profile/ibu/'.$this->session->userdata('student_id')), array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top' , 'enctype' => 'multipart/form-data'));?>
                            
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('nama_lengkap_ibu');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="nama_ibu" value="<?php echo $row['nama_ibu'];?>" required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('NIK_ibu');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="nik_ibu" value="<?php echo $row['nik_ibu'];?>" required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('tahun_lahir');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="tahun_ibu" value="<?php echo $row['tahun_ibu'];?>" required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('pendidikan');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="pendidikan_ibu" value="<?php echo $row['pendidikan_ibu'];?>" required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('pekerjaan');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="pekerjaan_ibu" value="<?php echo $row['pekerjaan_ibu'];?>" required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('penghasilan_bulanan');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="penghasilan_ibu" value="<?php echo $row['penghasilan_ibu'];?>" required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('bekebutuhan_khusus');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="khusus_ibu" value="<?php echo $row['khusus_ibu'];?>" required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-5">
                                    <button type="submit" class="btn btn-info"><?php echo get_phrase('update_profile');?></button>
                                </div>
                            </div>

                        </form>
                        <?php
                    endforeach;
                    ?>
                </div>
            </div>

            <div class="tab-pane box" id="wali" style="padding: 5px">
                <div class="box-content">
                    <?php 
                    foreach($data as $row):
                        ?>
                        <?php echo form_open(site_url('student/my_profile/wali/'.$this->session->userdata('student_id')), array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top' , 'enctype' => 'multipart/form-data'));?>
                            
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('nama_wali');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="nama_wali" value="<?php echo $row['nama_wali'];?>" required/>
                                </div>
                            </div>    

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('NIK_wali');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="nik_wali" value="<?php echo $row['nik_wali'];?>" required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('tahun_lahir');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="tahun_wali" value="<?php echo $row['tahun_wali'];?>" required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('pendidikan');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="pendidikan_wali" value="<?php echo $row['pendidikan_wali'];?>" required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('pekerjaan');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="pekerjaan_wali" value="<?php echo $row['pekerjaan_wali'];?>" required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('penghasilan_bulanan');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="penghasilan_wali" value="<?php echo $row['penghasilan_wali'];?>" required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-5">
                                    <button type="submit" class="btn btn-info"><?php echo get_phrase('update_profile');?></button>
                                </div>
                            </div>

                        </form>
                        <?php
                    endforeach;
                    ?>
                </div>
            </div>

            <div class="tab-pane box" id="kontak" style="padding: 5px">
                <div class="box-content">
                    <?php 
                    foreach($data as $row):
                        ?>
                        <?php echo form_open(site_url('student/my_profile/kontak/'.$this->session->userdata('student_id')), array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top' , 'enctype' => 'multipart/form-data'));?>
                            
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('Nomor_telepon_rumah');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="telepon" value="<?php echo $row['telepon'];?>" required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('nomor_hp');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="no_hp" value="<?php echo $row['no_hp'];?>" required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('email');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="email_siswa" value="<?php echo $row['email_siswa'];?>" required/>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-5">
                                    <button type="submit" class="btn btn-info"><?php echo get_phrase('update_profile');?></button>
                                </div>
                            </div>

                        </form>
                        <?php
                    endforeach;
                    ?>
                </div>
            </div>

            <div class="tab-pane box" id="akun" style="padding: 5px">
                <div class="box-content">
                    <?php 
                    foreach($data as $row):
                        ?>
                        <?php echo form_open(site_url('student/manage_profile/update_profile_info'), array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top' , 'enctype' => 'multipart/form-data'));?>
                            
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('name');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>" required/>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-5">
                                    <button type="submit" class="btn btn-info"><?php echo get_phrase('update_profile');?></button>
                                </div>
                            </div>

                        </form>
                        <?php
                    endforeach;
                    ?>
                </div>
            </div>
            
        </div>
    </div>
</div>