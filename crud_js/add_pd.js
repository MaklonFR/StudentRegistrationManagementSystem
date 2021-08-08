function data_sum1 ()
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

$(function(){	
	
  /*==================== Tampil Data PD ===================*/
    $(".show_pd").on('click', function(){
    //("OK");
    //var id = 1;
    $('#load').show();
    $('#view_add_pd').hide();

    $.ajax({
    type: "POST",
    url: "crud_sql/call_form_pd.php",
    data: {},
    //dataType: "json",
    beforeSend:function()
        {
          $('#load').html("<center><label class='text-primary fs16'>Sedang proses . . .</label></center>");
        },
    success: function(data)
    {
      window.setTimeout(function() {
      $('#load').hide();
      $('#view_add_pd').show();
      //$('#view_add_pd').html(data);    
	  	$('#view_add_pd').html(data).find('.add_tangal');   
      /*Tampil Button Simpan*/
      $('.save_button').show();
       
      },500);
    }
    
    });
    
    });

/*==================== Add Data PD ===================*/
      $(".simpan_pd").on('click', function(){  
        var add_nama              = $("#add_nama").val();
        var add_jk                = $("#add_jk").val();   
        var add_nisn              = $("#add_nisn").val();  
        var add_tempat            = $("#add_tempat").val(); 
        var add_tanggal           = $("#date_timepicker_start").val(); 
        var add_nik               = $("#add_nik").val(); 
        var add_agama             = $("#add_agama").val(); 
        
        var add_jalan                 = $("#add_jalan").val();
        var add_desa                  = $("#add_desa").val();
        var add_kel                   = $("#add_kel").val();
        var add_kec                   = $("#add_kec").val();
        var add_kab                   = $("#add_kab").val();   
        var add_prov                   = $("#add_prov").val();
        var add_kp                   = $("#add_kp").val();
   
        
        var add_email                   = $("#add_email").val();
        var add_fb                   = $("#add_fb").val();
        var add_note                   = $("#add_note").val();
        var add_sklh                   = $("#add_sklh").val();
        var add_tlulus                   = $("#add_tlulus").val();
        var add_jur                   = $("#add_jur").val();
   
        
        var add_ayah                  = $("#add_ayah").val();
        var add_kerja_ayah            = $("#add_kerja_ayah").val();  
        var add_ibu                   = $("#add_ibu").val(); 
        var add_kerja_ibu             = $("#add_kerja_ibu").val();
        var add_kk                    = $("#add_kk").val();
        var add_noortu                = $("#add_noortu").val();
        
        //alert(add_jur);
        //return;
        if (add_nama=="")
        {
          $.notify({
            // message
            message: '<strong>Nama Peserta didik </strong> belum diisi!',
            icon: 'fa fa-question mr-2 alert-thumb'
        }, {
            // settings
            type: 'danger',
            showProgressbar: false,
            newest_on_top: true,
            allow_dismiss: true
        });
        return;
        }
        if (add_jk=="Pilih Jenis Kelamin")
        {
          $.notify({
            // message
            message: '<strong>Jenis Kelamin Peserta didik </strong> belum diisi!',
            icon: 'fa fa-question mr-2 alert-thumb'
        }, {
            // settings
            type: 'danger',
            showProgressbar: false,
            newest_on_top: true,
            allow_dismiss: true
        });
        return;
        }
        if (add_agama=="Pilih Agama")
        {
          $.notify({
            // message
            message: '<strong>Agama Peserta didik </strong> belum diisi!',
            icon: 'fa fa-question mr-2 alert-thumb'
        }, {
            // settings
            type: 'danger',
            showProgressbar: false,
            newest_on_top: true,
            allow_dismiss: true
        });
        return;
        }
        if (add_kab=="Pilih Kabupaten")
        {
          $.notify({
            // message
            message: '<strong>Kabupaten Peserta didik </strong> belum diisi!',
            icon: 'fa fa-question mr-2 alert-thumb'
        }, {
            // settings
            type: 'danger',
            showProgressbar: false,
            newest_on_top: true,
            allow_dismiss: true
        });
        return;
        }

        if (add_sklh=="")
        {
          $.notify({
            // message
            message: '<strong>Sekolah Asal Peserta didik </strong> belum diisi!',
            icon: 'fa fa-question mr-2 alert-thumb'
        }, {
            // settings
            type: 'danger',
            showProgressbar: false,
            newest_on_top: true,
            allow_dismiss: true
        });
        return;
        }

        if (add_tlulus=="")
        {
          $.notify({
            // message
            message: '<strong>Tahun Lulus Peserta didik </strong> belum diisi!',
            icon: 'fa fa-question mr-2 alert-thumb'
        }, {
            // settings
            type: 'danger',
            showProgressbar: false,
            newest_on_top: true,
            allow_dismiss: true
        });
        return;
        }

        if (add_jur=="Pilih Jurusan")
        {
          $.notify({
            // message
            message: '<strong>Pilihan Jurusan Peserta didik </strong> belum diisi!',
            icon: 'fa fa-question mr-2 alert-thumb'
        }, {
            // settings
            type: 'danger',
            showProgressbar: false,
            newest_on_top: true,
            allow_dismiss: true
        });
        return;
        }
      
    
        $.ajax({
        url: "crud_sql/insert_pd.php",
        method: "POST",
        data:{
               add_nama:add_nama, add_jk:add_jk, add_nisn:add_nisn, add_tempat:add_tempat,
               add_tanggal:add_tanggal, add_nik:add_nik, add_agama:add_agama,
               add_jalan:add_jalan, add_desa:add_desa, add_kel:add_kel, add_kec:add_kec,
               add_kab:add_kab, add_prov:add_prov, add_kp:add_kp, 
               add_email:add_email, add_fb:add_fb, add_note:add_note, add_sklh:add_sklh,
               add_tlulus:add_tlulus, add_jur:add_jur,
               add_ayah:add_ayah, add_kerja_ayah:add_kerja_ayah, add_ibu:add_ibu,
               add_kerja_ibu:add_kerja_ibu, add_kk:add_kk, add_noortu:add_noortu
             },
        success: function(data)
         {
          // alert(data);
           //return;
           data_sum1();
           if (data=="OKOK") 
            {
             //alert('OK');
             swal(
               {
                   title: 'Sukses!',
                   text: 'Data Peserta Didik berhasil disimpan!',
                   type: 'success',
                   confirmButtonClass: 'btn btn-confirm mt-2'
               })
               
              $('#view_add_pd').hide();               
               /*Sembunyi Button Simpan*/
              $('.save_button').hide();
            } 
           if (data=="ERROR") 
            {
             alert("Gagal!!");
            }
         }
       
         });  
       });

  });



