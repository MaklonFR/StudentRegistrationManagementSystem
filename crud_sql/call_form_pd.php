 <!-- Begin page-content--> 
 <div class="page-content">
                    <div class="container-fluid">
                        <div class="row">

                                <!-- FORM PENDAFTARAN BAGIAN I--> 
                                <div class="col-lg-6 pt-2 pb-2">
                                  <div class="portlet-box portlet-gutter ui-buttons-col mb-2">
                                    <div class="portlet-header flex-row flex d-flex align-items-center b-b">
                                        <div class="flex d-flex flex-column">
                                            <h3>Data Pribadi Peserta Didik</h3> 
                                            <span class="portlet-subtitle">Silahkan masukan data pribadi peserta didik dengan benar!</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <form>
                                            <div class="form-group row">
                                              <label for="nm3" class="col-sm-2 col-form-label text-danger">Nama</label>
                                                <div class="col-sm-10 input-group mb-0 mr-sm-0">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-user-circle"></i></div>
                                                  </div>
                                                  <input type="text" id="add_nama" name="add_nama" class="form-control" id="em5" placeholder="Nama Lengkap">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-2 col-form-label text-danger">JK</label>
                                                <div class="col-sm-10 input-group mb-0 mr-sm-0">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="icon-Library"></i></div>
                                                  </div>
                                                  <select  id="add_jk" name="add_jk" class="form-control">
                                                        <option selected>Pilih Jenis Kelamin</option>
                                                        <option>Laki-Laki</option>
                                                        <option>Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-2 col-form-label">NISN</label>
                                                <div class="col-sm-10 input-group mb-0 mr-sm-0">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-key"></i></div>
                                                  </div>
                                                  <input type="text" id="add_nisn" name="add_nisn" class="form-control" id="em5" placeholder="NISN">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-2 col-form-label">Tempat</label>
                                                <div class="col-sm-10 input-group mb-0 mr-sm-0">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-map-marker"></i></div>
                                                  </div>
                                                  <input type="text" id="add_tempat" name="add_tempat" class="form-control" id="em5" placeholder="Tempat Lahir">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal</label>
                                                <div class="col-sm-10 input-group mb-0 mr-sm-0">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-calendar-check"></i></div>
                                                  </div>
                                                  <input id="date_timepicker_start"  name="add_tangal" placeholder="Tanggal Lahir" type="date" class="form-control add_tangal">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-2 col-form-label">NIK</label>
                                                <div class="col-sm-10 input-group mb-0 mr-sm-0">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-key"></i></div>
                                                  </div>
                                                  <input type="text" id="add_nik" name="add_nik" class="form-control" id="em5" placeholder="NIK">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-2 col-form-label text-danger">Agama</label>
                                                <div class="col-sm-10 input-group mb-0 mr-sm-0">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="icon-Library"></i></div>
                                                  </div>
                                                  <select  id="add_agama" name="add_agama" class="form-control">
                                                        <option selected>Pilih Agama</option>
                                                        <option>Kristen Protestan</option>
                                                        <option>Kristen Katolik</option>
                                                        <option>Islam</option>
                                                        <option>Hindu</option>
                                                        <option>Budha</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- END FORM PENDAFTARAN BAGIAN I-->
                            
                             <!-- FORM PENDAFTARAN BAGIAN II--> 
                             <div class="col-lg-6 pt-2 pb-2">
                                  <div class="portlet-box portlet-gutter ui-buttons-col mb-2">
                                    <div class="portlet-header flex-row flex d-flex align-items-center b-b">
                                        <div class="flex d-flex flex-column">
                                            <h3>Data Alamat Peserta Didik</h3> 
                                            <span class="portlet-subtitle">Silahkan masukan Data Alamat Peserta Didik dengan benar!</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <form>
                                            <div class="form-group row">
                                              <label for="nm3" class="col-sm-2 col-form-label">Jalan</label>
                                                <div class="col-sm-10 input-group mb-0 mr-sm-0">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-user-circle"></i></div>
                                                  </div>
                                                  <input type="text" id="add_jalan" name="add_jalan" class="form-control" id="em5" placeholder="Nama Jalan">
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-2 col-form-label">Desa</label>
                                                <div class="col-sm-10 input-group mb-0 mr-sm-0">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-user-circle"></i></div>
                                                  </div>
                                                  <input type="text" id="add_desa" name="add_desa" class="form-control" id="em5" placeholder="Desa">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-2 col-form-label">Kelurahan</label>
                                                <div class="col-sm-10 input-group mb-0 mr-sm-0">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-user-circle"></i></div>
                                                  </div>
                                                  <input type="text" id="add_kel" name="add_kel" class="form-control" id="em5" placeholder="Kelurahan">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-2 col-form-label">Kecamatan</label>
                                                <div class="col-sm-10 input-group mb-0 mr-sm-0">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-user-circle"></i></div>
                                                  </div>
                                                  <input type="text" id="add_kec" name="add_kec" class="form-control" id="em5" placeholder="Kelurahan">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-2 col-form-label text-danger">Kabupaten</label>
                                                <div class="col-sm-10 input-group mb-0 mr-sm-0">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="icon-Library"></i></div>
                                                  </div>
                                                  <select id="add_kab" name="add_kab" class="form-control">
                                                        <option selected>Pilih Kabupaten</option>
                                                        <option>Manggarai Barat</option>
                                                        <option>Manggarai</option>
                                                        <option>Manggarai Timur</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-2 col-form-label">Provinsi</label>
                                                <div class="col-sm-10 input-group mb-0 mr-sm-0">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-user-circle"></i></div>
                                                  </div>
                                                  <input type="text" id="add_prov" name="add_prov" class="form-control" value="Nusa Tenggara Timur" id="em5" disabled>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-2 col-form-label">KodePos</label>
                                                <div class="col-sm-10 input-group mb-0 mr-sm-0">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-user-circle"></i></div>
                                                  </div>
                                                  <input type="text" id="add_kp" name="add_kp" class="form-control" id="em5" placeholder="Kode Pos">
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- END FORM PENDAFTARAN BAGIAN II-->

                        </div>
                    </div>
                  </div>
                 <!-- End page-content--> 


                  <!-- Begin page-content II--> a
                <div class="page-content">
                    <div class="container-fluid">
                        <div class="row">

                                <!-- FORM PENDAFTARAN BAGIAN III--> 
                                <div class="col-lg-6 pt-2 pb-2">
                                  <div class="portlet-box portlet-gutter ui-buttons-col mb-2">
                                    <div class="portlet-header flex-row flex d-flex align-items-center b-b">
                                        <div class="flex d-flex flex-column">
                                            <h3>Data Kontak dan Pilihan Jurusan</h3> 
                                            <span class="portlet-subtitle">Silahkan masukan Data Kontak dan Pilihan Jurusan Peserta Didik</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <form>
                                            <div class="form-group row">
                                              <label for="nm3" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10 input-group mb-0 mr-sm-0">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-user-circle"></i></div>
                                                  </div>
                                                  <input type="email" id="add_email" name="add_email" class="form-control" id="em5" placeholder="Email">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-2 col-form-label">Facebook</label>
                                                <div class="col-sm-10 input-group mb-0 mr-sm-0">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-user"></i></div>
                                                  </div>
                                                  <input type="text" id="add_fb" name="add_fb" class="form-control" id="em5" placeholder="Facebook">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-2 col-form-label">No.Telepon</label>
                                                <div class="col-sm-10 input-group mb-0 mr-sm-0">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-key"></i></div>
                                                  </div>
                                                  <input type="text" id="add_note" name="add_note" class="form-control" id="em5" placeholder="No. Telepon">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-2 col-form-label text-danger">Sekolah</label>
                                                <div class="col-sm-10 input-group mb-0 mr-sm-0">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-map-marker"></i></div>
                                                  </div>
                                                  <input type="text" id="add_sklh" name="add_sklh" class="form-control" id="em5" placeholder="Asal Sekolah">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-2 col-form-label text-danger">Lulus</label>
                                                <div class="col-sm-10 input-group mb-0 mr-sm-0">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-map-marker"></i></div>
                                                  </div>
                                                  <input type="text" id="add_tlulus" name="add_tlulus" class="form-control" id="em5" placeholder="Tahun Lulus">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-2 col-form-label text-danger">Jurusan</label>
                                                <div class="col-sm-10 input-group mb-0 mr-sm-0">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="icon-Library"></i></div>
                                                  </div>
                                                  <select id="add_jur" name="add_jur" class="form-control">
                                                        <option selected>Pilih Jurusan</option>
                                                        <option value="1">Pertanian</option>
                                                        <option value="3">Perikanan</option>
                                                        <option value="2">Peternakan</option>
                                                        <option value="4">Rekayasa Perangkat Lunak</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- END FORM PENDAFTARAN BAGIAN I-->
                            
                             <!-- FORM PENDAFTARAN BAGIAN II--> 
                             <div class="col-lg-6 pt-2 pb-2">
                                  <div class="portlet-box portlet-gutter ui-buttons-col mb-2">
                                    <div class="portlet-header flex-row flex d-flex align-items-center b-b">
                                        <div class="flex d-flex flex-column">
                                            <h3>Data Orang Tua Peserta Didik</h3> 
                                            <span class="portlet-subtitle">Silahkan masukan Data Orang tua Peserta Didik</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <form>
                                            <div class="form-group row">
                                              <label for="nm3" class="col-sm-2 col-form-label">Ayah</label>
                                                <div class="col-sm-10 input-group mb-0 mr-sm-0">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-user-circle"></i></div>
                                                  </div>
                                                  <input type="text" id="add_ayah" name="add_ayah" class="form-control" id="em5" placeholder="Nama Ayah">
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-2 col-form-label">Pekerjaan</label>
                                                <div class="col-sm-10 input-group mb-0 mr-sm-0">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-user-circle"></i></div>
                                                  </div>
                                                  <input type="text" id="add_kerja_ayah" name="add_kerja_ayah" class="form-control" id="em5" placeholder="Pekerjaan Ayah">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-2 col-form-label">Ibu</label>
                                                <div class="col-sm-10 input-group mb-0 mr-sm-0">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-user-circle"></i></div>
                                                  </div>
                                                  <input type="text" id="add_ibu" name="add_ibu" class="form-control" id="em5" placeholder="Nama Ibu">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-2 col-form-label">Pekerjaan</label>
                                                <div class="col-sm-10 input-group mb-0 mr-sm-0">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-user-circle"></i></div>
                                                  </div>
                                                  <input type="text" id="add_kerja_ibu" name="add_kerja_ibu" class="form-control" id="em5" placeholder="Pekerjaan Ibu">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-2 col-form-label">No.KK</label>
                                                <div class="col-sm-10 input-group mb-0 mr-sm-0">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-user-circle"></i></div>
                                                  </div>
                                                  <input type="text" id="add_kk" name="add_kk" class="form-control" id="em5" placeholder="No. Kartu Keluarga">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-2 col-form-label">No.Telpon</label>
                                                <div class="col-sm-10 input-group mb-0 mr-sm-0">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-user-circle"></i></div>
                                                  </div>
                                                  <input type="text" id="add_noortu" name="add_noortu" class="form-control" id="em5" placeholder="No. Telepon Orang Tua">
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- END FORM PENDAFTARAN BAGIAN II-->

                        </div>
                    </div>
                  </div>
                 <!-- End page-content--> 
                            
