

<div class="container">
    
<div class="container-fluid">
    
<div class="page-subheader mb-0">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-7">
                <div class="list">
                    <div class="list-item pl-0">
                        <div class="list-thumb ml-0 mr-3 pr-3  b-r text-muted">
                            <i class="icon-Home"></i>
                        </div>
                        <div class="list-body">
                            <div class="list-title fs-2x">
                                <h3>Welcome <strong><?php echo $user['Level']; ?></strong></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 d-flex justify-content-end h-md-down">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb no-padding bg-trans mb-0">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-Home mr-2 fs14"></i></a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Default </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div><!-- page-sub-Header end-->


                        <div class="page-content">

                          <div class="row">
                            <div class="col-lg-3 mb-3 col-md-3 mb-30">
                                <div class="list bg-primary shadow-sm rounded overflow-hidden">
                                    <div class="list-item">
                                        <div class="list-thumb bg-primary-active text-primary-light avatar rounded-circle avatar60 shadow-sm">
                                            <i class="icon-Add-Basket"></i>
                                        </div>
                                        <div class="list-body text-right">
                                            <span class="list-title fs-2x  lineH-3"> <span id="kk"> </span></span>
                                            <span class="list-content text-primary-light fs14"><b>Jurusan APTH</b></span>

                                        </div>
                                    </div>
                                    <a class="d-flex text-muted flex text-right flex-row align-items-center justify-content-end pt-5 pb-5 pl-4 pr-4 bg-primary-active">
                                        Lihat selengkapnya <i class="fa fa-chevron-right ml-2 fs12 mt-1"></i>
                                    </a>
                                </div>
                            </div><!--col-->
                            <div class="col-lg-3 mb-6 col-md-6 mb-30">
                                <div class="list bg-warning shadow-sm rounded overflow-hidden">
                                    <div class="list-item">
                                        <div class="list-thumb bg-warning-active text-warning-light avatar rounded-circle avatar60 shadow-sm">
                                            <i class="icon-Truck"></i>
                                        </div>
                                        <div class="list-body text-right">
                                            <span class="list-title fs-2x lineH-3"><span id="ll"> </span></span>
                                            <span class="list-content text-warning-light fs14"><b>Jurusan ATR</b></span>

                                        </div>
                                    </div>
                                    <a class="d-flex text-muted flex text-right flex-row align-items-center justify-content-end pt-5 pb-5 pl-4 pr-4 bg-warning-active">
                                    Lihat selengkapnya <i class="fa fa-chevron-right ml-2 fs12 mt-1"></i>
                                    </a>
                                </div>
                            </div><!--col-->
                            <div class="col-lg-3 mb-6 col-md-6 mb-30">
                                <div class="list bg-success shadow-sm rounded overflow-hidden">
                                    <div class="list-item">
                                        <div class="list-thumb bg-success-active text-success-light avatar rounded-circle avatar60 shadow-sm">
                                            <i class="icon-Money-Bag"></i>
                                        </div>
                                        <div class="list-body text-right">
                                            <span class="list-title fs-2x  lineH-3"><span id="nn"> </span></span>
                                            <span class="list-content text-success-light fs14"><b>Jurusan RPL</b></span>

                                        </div>
                                    </div>
                                    <a class="d-flex text-muted flex text-right flex-row align-items-center justify-content-end pt-5 pb-5 pl-4 pr-4 bg-success-active">
                                    Lihat selengkapnya <i class="fa fa-chevron-right ml-2 fs12 mt-1"></i>
                                    </a>
                                </div>
                            </div><!--col-->
                            <div class="col-lg-3 mb-6 col-md-6 mb-30">
                                <div class="list bg-danger shadow-sm rounded overflow-hidden">
                                    <div class="list-item">
                                        <div class="list-thumb bg-danger-active text-danger-light avatar rounded-circle avatar60 shadow-sm">
                                            <i class="icon-Remove-Basket"></i>
                                        </div>
                                        <div class="list-body text-right">
                                            <span class="list-title fs-2x  lineH-3"><span id="mm"> </span></span>
                                            <span class="list-content text-danger-light fs14"><b>Jurusan APAT</b></span>

                                        </div>
                                    </div>
                                    <a class="d-flex text-muted flex text-right flex-row align-items-center justify-content-end pt-5 pb-5 pl-4 pr-4 bg-danger-active">
                                    Lihat selengkapnya <i class="fa fa-chevron-right ml-2 fs12 mt-1"></i>
                                    </a>
                                </div>
                            </div><!--col-->
                        </div>
                      </div>
                    </div>

                  <div class="page-content">
                    <div class="container-fluid">
                          <div class="bg-white table-responsive rounded shadow-sm pt-3 pb-3 mb-30">
                              <h6 class="pl-3 pr-3 text-capitalize font400 mb-20 text-center">Data PPDB </br>Tahun Ajaran 2021/2022</h6>
                            <table id="data-table" class="table mb-0 table-striped" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>NISN</th>
                                        <th>Asal Sekolah</th>
                                        <th>Jurusan dipilih</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
                                  $sql= "SELECT tb_registrasi.ID_Reg as idreg, tb_registrasi.Asal_Sekolah as asal, tb_pribadi.Nama as nama,tb_pribadi.ID_Siswa as ids,
                                         tb_pribadi.JK as jk,  tb_pribadi.NISN as nisn, tb_pribadi.Alamat as al, tb_jurusan.Jurusan as jur FROM tb_registrasi 
                                         JOIN tb_pribadi ON tb_registrasi.ID_Siswa = tb_pribadi.ID_Siswa
                                         JOIN tb_jurusan ON tb_registrasi.ID_Jurusan = tb_jurusan.ID_Jurusan";
                                                 
                                         $query = $conn->query($sql);	
								           while($row = $query->fetch_assoc()){
                                            $idpd= $row['ids'];
								         echo "<tr>
								         <td>$row[nama]</td>
								  	     <td>$row[jk]</td> 
                                         <td>$row[nisn]</td> 
									     <td>$row[asal]</td>
                                         <td>$row[jur]</td>
                                         <td>$row[al]</td>
									     <td> 
                                           <a href='javascript:void(0)' class='btn-icon-o btn-success radius100 btn-icon-sm mr-2 mb-2'>
                                              <i class='fas fa-print'></i>
                                            </a>
                                            <a href='javascript:void(0)' data-id='$idpd' class='btn-icon-o btn-primary radius100 btn-icon-sm mr-2 mb-2'>
                                             <i class='fas fa-edit'></i>
                                            </a>
                                            <a href='javascript:void(0)' data-id='$idpd' class='btn-icon-o btn-danger radius100 btn-icon-sm mr-2 mb-2 delete_pd'>
                                              <i class='fa fa-trash'></i>
                                            </a>
                                         </td>

										 </tr>";
										 }	
									   ?>	
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                        </div>

                        