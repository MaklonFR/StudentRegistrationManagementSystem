<?php include 'includes/session_admin.php'; ?>

<?php
/*$jj     = mysqli_fetch_array(mysqli_query($conn,'SELECT COUNT(*) AS total FROM tb_pribadi'));
$kk     = mysqli_fetch_array(mysqli_query($conn,'SELECT COUNT(*) AS total FROM tb_registrasi WHERE ID_Jurusan=1'));
$ll     = mysqli_fetch_array(mysqli_query($conn,'SELECT COUNT(*) AS total FROM tb_registrasi WHERE ID_Jurusan=2'));
$mm     = mysqli_fetch_array(mysqli_query($conn,'SELECT COUNT(*) AS total FROM tb_registrasi WHERE ID_Jurusan=3'));
$nn     = mysqli_fetch_array(mysqli_query($conn,'SELECT COUNT(*) AS total FROM tb_registrasi WHERE ID_Jurusan=4'));
$oo     = mysqli_fetch_array(mysqli_query($conn,'SELECT COUNT(*) AS total FROM tb_pribadi WHERE JK="Laki-Laki"'));
$pp     = mysqli_fetch_array(mysqli_query($conn,'SELECT COUNT(*) AS total FROM tb_pribadi WHERE JK="Perempuan"'));*/
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.templatehouse.net/aprox/layout-horizontal.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Jun 2021 16:20:32 GMT -->
    <?php include "includes/head.php"; ?>

    <body class="layout-horizontal">

        <div class="page-wrapper" id="page-wrapper">
            <main class="content">

            <?php
               include "includes/header.php";

               include "includes/navbar.php"; 

              if (empty($_GET['view']) OR ($_GET['view']=='') OR ($_GET['view']=='dashboard'))
                 {
                    include "dashboard.php";
                 } 
                 elseif ($_GET['view']=='tambah_pd')
                 {
                    include "tambah_pd.php";
                 }

              include "includes/footer.php"; 
           ?>
                
            </main><!-- page content end-->
        </div><!-- app's main wrapper end -->
        <!-- Common plugins -->
        <script type="text/javascript" src="js/plugins/plugins.js"></script> 
        <script type="text/javascript" src="js/appUi-custom.js"></script> 
        <script type="text/javascript" src="lib/peity/jquery.peity.min.js"></script>
        
        <script type="text/javascript" src="lib/dt-picker/jquery.datetimepicker.full.min.js"></script>
        <script type="text/javascript" src="js/plugins-custom/pickers-custom.js"></script> 
        
        <!-- Required datatable js -->
        <script type="text/javascript" src="lib/data-tables/jquery.dataTables.min.js"></script> 
        <script type="text/javascript" src="lib/data-tables/dataTables.bootstrap4.min.js"></script> 
        <script type="text/javascript" src="lib/data-tables/dataTables.responsive.min.js"></script> 
        <script type="text/javascript" src="lib/data-tables/responsive.bootstrap4.min.js"></script> 
        <script src="js/plugins-custom/datatables-custom.js"></script>
        
        <script type="text/javascript" src="lib/bootstrap-notify/bootstrap-notify.min.js"></script>
        
        <!-- Sweetalerts2 js -->
        <script type="text/javascript" src="lib/sweet-alerts2/sweetalert2.min.js"></script>

        <script>

        function data_sum ()
        {
            /* ============================= Update DATA TOTAL==================================*/
            $.ajax({
                type: "POST",
                url: "crud_sql/update_data.php",
                data: {},
                //dataType: "json",
                 success: function(data)
                 {
                    //alert(data);
                    window.setTimeout(function() {
                    $('#jj').html(data);
                    $('#jj1').html(data);
                    $('#jj2').html(data);
  
                    },100);
                }
                });
/* ============================= Update DATA APTH==================================*/
                $.ajax({
                type: "POST",
                url: "crud_sql/update_data_apth.php",
                data: {},
                //dataType: "json",
                 success: function(data)
                 {
                    //alert(data);
                    window.setTimeout(function() {
                    $('#kk').html(data);
                    $('#kk1').html(data);
  
                    },100);
                }
                });
/* ============================= Update DATA ATR==================================*/
                $.ajax({
                type: "POST",
                url: "crud_sql/update_data_atr.php",
                data: {},
                //dataType: "json",
                 success: function(data)
                 {
                    //alert(data);
                    window.setTimeout(function() {
                    $('#ll').html(data);
                    $('#ll1').html(data);
  
                    },100);
                }
                });
/* ============================= Update DATA APAT==================================*/
                $.ajax({
                type: "POST",
                url: "crud_sql/update_data_apat.php",
                data: {},
                //dataType: "json",
                 success: function(data)
                 {
                    //alert(data);
                    window.setTimeout(function() {
                    $('#mm').html(data);
                    $('#mm1').html(data);
  
                    },100);
                }
                });
/* ============================= Update DATA APAT==================================*/
                $.ajax({
                type: "POST",
                url: "crud_sql/update_data_rpl.php",
                data: {},
                //dataType: "json",
                 success: function(data)
                 {
                    //alert(data);
                    window.setTimeout(function() {
                    $('#nn').html(data);
                    $('#nn1').html(data);
  
                    },100);
                }
                });
/* ============================= Update DATA Laki-Laki==================================*/
                $.ajax({
                type: "POST",
                url: "crud_sql/update_data_laki.php",
                data: {},
                //dataType: "json",
                 success: function(data)
                 {
                    //alert(data);
                    window.setTimeout(function() {
                    $('#oo').html(data);
  
                    },100);
                }
                });
/* ============================= Update DATA Perempuan==================================*/
                $.ajax({
                type: "POST",
                url: "crud_sql/update_data_perempuan.php",
                data: {},
                //dataType: "json",
                 success: function(data)
                 {
                    //alert(data);
                    window.setTimeout(function() {
                    $('#pp').html(data);
  
                    },100);
                }
                });
        }

        $(function () {
                /**peity**/
                $(".donut1").peity("donut", {
                });

                /*Sembunyi Button Simpan*/
                $('.save_button').hide();

                data_sum();
        });
    </script>

    <script src="crud_js/add_pd.js"></script>

<script>
/* Delete Data PD*/
  $(function(){
    $(document).on('click', '.delete_pd', function(e){
    e.preventDefault();
      var id = $(this).data('id');
	     if(id == "")
         {  
          toastr.warning('Data Tidak Ada. Silahkan pilih Data untuk dihapus!', 'Terjadi Kesalahan!', {timeOut: 2000});
         // swal("Terjadi Kesalahan!", "Jurusan Belum pipilih. Silahkan Pilih Jurusan Peserta", "warning");
          return;
          } 
        sweetAlert({
        title: "Anda yakin ingin menghapus?",
        text: "Klik Ya hapus data, Klik Tidak batal hapus.",
        type: "warning",
        showCancelButton: true,
        confirmButtonText: "Ya, Hapus data!",
        cancelButtonText: "Tidak, Batal hapus!",
        closeOnConfirm: false,
        closeOnCancel: false
          },function(isConfirm){
          });   
         
         $('.swal2-confirm').click(function(){
          $.ajax(
                    {
                        type: "POST",
                        url: "crud_sql/delete_pd.php",
                        data: {ids:id},
                        success: function(data){
                       
                        }
                    }
                )

                setTimeout(function() {
                    $.notify({
                    // message
                    message: '<strong>Data PD Berhasil </strong> Dihapus!',
                    icon: 'fa fa-check mr-2 alert-thumb'
                        }, {
                  // settings
                     type: 'success',
                     showProgressbar: true,
                     newest_on_top: true,
                     allow_dismiss: true
                  });
                },100);
                setTimeout(' window.location.href = "home?view=dashboard"; ',4000);
                
          });   
    
    });
  });
  </script>

    </body>

<!-- Mirrored from preview.templatehouse.net/aprox/layout-horizontal.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Jun 2021 16:20:32 GMT -->
</html>
