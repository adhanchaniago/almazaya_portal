<!--password-->
<div class="row">
	<div class="col-md-12">

		<ul class="nav nav-tabs bordered">

			<li class="active">
            	<a href="#list" data-toggle="tab"><i class="entypo-lock"></i>
					<?php echo get_phrase('change_pass');?></a></li>

            <li class="">
                <a href="#list3" data-toggle="tab"><i class="entypo-lock"></i>
                    <?php echo get_phrase('pendidikan');?></a></li>
            <li class="">
                <a href="#list4" data-toggle="tab"><i class="entypo-lock"></i>
                    <?php echo get_phrase('biodata');?></a></li>
            <li class="">
                <a href="#list5" data-toggle="tab"><i class="entypo-lock"></i>
                    <?php echo get_phrase('kepegawaian');?></a></li>
            <li class="">
                <a href="#list6" data-toggle="tab"><i class="entypo-lock"></i>
                    <?php echo get_phrase('khusus');?></a></li>
            <li class="">
                <a href="#list7" data-toggle="tab"><i class="entypo-lock"></i>
                    <?php echo get_phrase('kontak');?></a></li>
		</ul>

		<div class="tab-content">
			<div class="tab-pane box active" id="list" style="padding: 5px">
                <div class="box-content padded">
					<?php
                    foreach($edit_data as $row):
                        ?>
                        <?php echo form_open(site_url('teacher/manage_profile/change_password') , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('current_password');?></label>
                                <div class="col-sm-5">
                                    <input type="password" class="form-control" name="password" value="" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('new_password');?></label>
                                <div class="col-sm-5">
                                    <input type="password" class="form-control" name="new_password" value="" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('confirm_new_password');?></label>
                                <div class="col-sm-5">
                                    <input type="password" class="form-control" name="confirm_new_password" value="" required/>
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

            <div class="tab-pane box" id="list3" style="padding: 5px">
                <div class="box-content padded">
                    <?php
                    foreach($edit_data as $row):
                        ?>
                        <?php echo form_open(site_url('teacher/manage_profile/identitas_pendidikan') , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('nama_lengkap_(tanpa_gelar)');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="nama_lengkap" value="<?php echo $row['nama_lengkap'];?>" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('NIK');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="nik" value="<?php echo $row['nik'];?>" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('jenis_kelamin');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="sex" value="<?php echo $row['sex'];?>" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('tempat_lahir');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $row['tempat_lahir'];?>" required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('tanggal_lahir');?></label>
                                <div class="col-sm-5">
                                    <input type="date" class="form-control" name="birthday" value="<?php echo $row['birthday'];?>" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('nama_ibu_kandung');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="nama_ibu_kandung" value="<?php echo $row['nama_ibu_kandung'];?>" required/>
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

            <div class="tab-pane box" id="list4" style="padding: 5px">
                <div class="box-content padded">
                    <?php
                    foreach($edit_data as $row):
                        ?>
                        <?php echo form_open(site_url('teacher/manage_profile/data_pribadi') , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('alamat_jalan');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="address" value="<?php echo $row['address'];?>" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('rt');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="rt" value="<?php echo $row['rt'];?>" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('rw');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="rw" value="<?php echo $row['rw'];?>" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('nama_dusun');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="nama_dusun" value="<?php echo $row['nama_dusun'];?>" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('kecamatan');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="kec" value="<?php echo $row['kec'];?>" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('kode_pos');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="kode_pos" value="<?php echo $row['kode_pos'];?>" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('agama');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="religion" value="<?php echo $row['religion'];?>" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('npwp');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="npwp_guru" value="<?php echo $row['npwp_guru'];?>" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('nama_wajib_pajak');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="nama_wajib_pajak" value="<?php echo $row['nama_wajib_pajak'];?>" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('kewarganegaraan');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="kewarganegaraan" value="<?php echo $row['kewarganegaraan'];?>" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('status_perkawinan');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="status_perkawinan" value="<?php echo $row['status_perkawinan'];?>" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('nama_suami/istri');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="nama_suami" value="<?php echo $row['nama_suami'];?>" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('nip_suami/istri');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="nip_suami" value="<?php echo $row['nip_suami'];?>" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('pekerjaan_suami/istri');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="pekerjaan_suami" value="<?php echo $row['pekerjaan_suami'];?>" required/>
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

            <div class="tab-pane box" id="list5" style="padding: 5px">
                <div class="box-content padded">
                    <?php
                    foreach($edit_data as $row):
                        ?>
                        <?php echo form_open(site_url('teacher/manage_profile/kepegawaian') , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('status_kepegawaiaan');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="status_kepegawaiaan" value="<?php echo $row['status_kepegawaiaan'];?>" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('NIP');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="nip" value="<?php echo $row['nip'];?>" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('NIY/NIGK');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="niy" value="<?php echo $row['niy'];?>" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('nuptk');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="nuptk" value="<?php echo $row['nuptk'];?>" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('jenis_ptk');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="jenis_ptk" value="<?php echo $row['jenis_ptk'];?>" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('SK_pengangkatan');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="sk_pengangkatan" value="<?php echo $row['sk_pengangkatan'];?>" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('TMT_pengangkatan');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="tmt_pengangkatan" value="<?php echo $row['tmt_pengangkatan'];?>" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('lembaga_pengangkatan');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="lembaga_pengangkatan" value="<?php echo $row['lembaga_pengangkatan'];?>" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('SK_CPNS');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="sk_cpns" value="<?php echo $row['sk_cpns'];?>" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('TMT_PNS');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="tmt_pns" value="<?php echo $row['tmt_pns'];?>" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('pangkat/Golongan');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="pangkat" value="<?php echo $row['pangkat'];?>" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('sumber_gaji');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="sumber_gaji" value="<?php echo $row['sumber_gaji'];?>" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('kartu_pegawai');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="kartu_pegawai" value="<?php echo $row['kartu_pegawai'];?>" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('kartu_istri(KARIS)/_kartu_suami(KARSU)');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="kartu_istri" value="<?php echo $row['kartu_istri'];?>" required/>
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

            <div class="tab-pane box" id="list6" style="padding: 5px">
                <div class="box-content padded">
                    <?php
                    foreach($edit_data as $row):
                        ?>
                        <?php echo form_open(site_url('teacher/manage_profile/kopetensi_khusus') , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('punya_lisensi_kepala_sekolah');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="lisensi" value="<?php echo $row['lisensi'];?>" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('keahlian_leb_oratorium');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="keahlian" value="<?php echo $row['keahlian'];?>" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('mampu_menangani_kebutuhan_khusus');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="khusus" value="<?php echo $row['khusus'];?>" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('keahlian_braile');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="keahlian_braile" value="<?php echo $row['keahlian_braile'];?>" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('keahlian_bahasa_isyarat');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="bahasa_isyarat" value="<?php echo $row['bahasa_isyarat'];?>" required/>
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

            <div class="tab-pane box" id="list7" style="padding: 5px">
                <div class="box-content padded">
                    <?php
                    foreach($edit_data as $row):
                        ?>
                        <?php echo form_open(site_url('teacher/manage_profile/kontak') , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('nomor_telepon_rumah');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="telepon_rumah" value="<?php echo $row['telepon_rumah'];?>" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('nomor_hp');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="phone" value="<?php echo $row['phone'];?>" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('email');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="email" value="<?php echo $row['email'];?>" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('id_bank');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="id_bank" value="<?php echo $row['id_bank'];?>" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('no_req_bank');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="no_req_bank" value="<?php echo $row['no_req_bank'];?>" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('req_atas_nama');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="req_atas_nama" value="<?php echo $row['req_atas_nama'];?>" required/>
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
            <!----EDITING FORM ENDS--->
		</div>


	</div>
</div>
