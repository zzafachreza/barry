$(function(){
	// init service worker

	 // $("#loader").fadeIn('slow',function(){
	 // 	 setTimeout(function(){
	 // 	 	$("#loader").fadeOut('slow');
	 // 	 },100)
	 // });
		
		$('.tgl').datepicker({
			'todayHighlight':true,
			'todayBtn':true,
			'autoclose':true,
			'format':'dd/mm/yyyy'
		});
	

	$(".tabza").DataTable();

	

	// load menu header
	$(".selectza").selectize();




	$(".AppInput").click(function(e){
		e.preventDefault();


		$(this).siblings(".AppLabel").css({
			
			'color':'#F47721'
		})
		$(this).siblings(".iconInput").css({
			
			'color':'#1B2755'
		})

	});
	$(".AppInput").blur(function(e){
		e.preventDefault();
		$(this).siblings(".AppLabel").css({
			
			'color':'#1B2755'
		})
		$(this).siblings(".iconInput").css({
			
			'color':'#1B2755'
		})
	});


	// handleLogin

	$("#dataFormLogin").submit(function(e){
		e.preventDefault();
		var data = $(this).serialize();
		$.ajax({
			url:'./login/validasi',
			type:'POST',
			data:data,
			beforeSend:function(){
 				$("#loader").fadeIn('slow');
			},
			success:function(data){

				setTimeout(function(){
				  $("#loader").fadeOut('fast');
				   if (data==200) {
					location.href = './';
					}else{

						 notify("Maaf username atau password Anda salah !","error");
						
					}
				},1500)
			}
		})
	})

	// handleRegister

	$("#dataFormRegister").submit(function(e){
		e.preventDefault();
		var data = $(this).serialize();
		$.ajax({
			url:'./register/add',
			type:'POST',
			data:data,
			beforeSend:function(){
 				$("#loader").fadeIn('slow');
			},
			success:function(data){
				console.log(data);
				 $("#loader").fadeOut('fast');
				 notify("Selamat Anda berhasil Daftar, Silahkan Login","success");
				setTimeout(function(){
				 
				  	// notify("Selamat Anda berhasil Daftar, Silahkan Login","success");
				   if (data==200) {
				 		location.href = './login';
					}else{

						 notify("Maaf username atau password Anda salah !","error");
						
					}
				},2500)
			}
		})
	})




});

// area fungsi


function notify(text,type){


				if (type=='error') {
					$("#flash-message-error").html(text);
					$("#flash-message-error").slideDown();
					setTimeout(function(){
						$("#flash-message-error").slideUp();
					},1500)

				}else if (type=='success') {
					$("#flash-message-success").html(text);
					$("#flash-message-success").slideDown();
					setTimeout(function(){
						$("#flash-message-success").slideUp();
					},1500)

				}

	
}



function getDataDetail(url){
	$("#loader").fadeIn();
	// alert(url);
	$.ajax({
	url:url,
	success:function(html){
		$("#loader").fadeOut();
		// console.log(html);
		$("#dataLaporan").html(html)
			$('#dtHorizontalVerticalExample').DataTable({
			"scrollX": true,
			"scrollY": 500,
			"paging":false,
			"searching":false,
		     "fixedColumns":   {
	            "leftColumns": 3,
	            // "rightColumns": 1
	        }
		});
	}
})
}


// $("#dataLaporan").



function cekList(ID_LAPORANHD,ID_LAPORANDT,FIELD,FIELD_ASAL,url){
	// alert(ID_LAPORANHD + ' - ' + ID_BANGUNAN);

	var FIELD = FIELD;
	
	if ($("#"+ID_LAPORANDT+FIELD_ASAL).is(':checked')) {
		$("#"+ID_LAPORANDT+FIELD).val("").focus();
		// $("#"+ID_LAPORANDT+FIELD).focus();
	}else{

		$.ajax({
		url:url,
		type:'POST',
		data:{
			ID_LAPORANDT:ID_LAPORANDT,
			KOLOM:FIELD,
			TIPE:'DELETE'
		},
		success:function(data){
			console.log(data);
			}
		})
		$("#"+ID_LAPORANDT+FIELD).val("");
	}


	

}

function editData(ID_FORM,url){

var data= $("#"+ID_FORM).serialize();

	$.ajax({
		url:url,
		type:'POST',
		data:data,
		success:function(data){
			console.log(data);
		}
	})
}

function editDataFoto(ID_FORM,url,urlget,ID_LAPORANHD){

var dataForm = $("#"+ID_FORM).serialize();

	$.ajax({
		url:url,
		type:'POST',
		data: new FormData(document.getElementById(ID_FORM)),// Data sent to server, a set of key/value pairs (i.e. form fields and values)
		contentType: false,       // The content type used when sending data to the server.
		cache: false,             // To unable request pages to be cached
		processData:false, 
		success:function(data){
			// console.log(data);
			alert('Foto Berhasil Di upload !');
			window.location.href =ID_LAPORANHD;
			// getDataDetail(urlget);
		}
	})
}

function editDataBiaya(ID_FORM,url){

var data= $("#"+ID_FORM).serialize();

	$.ajax({
		url:url,
		type:'POST',
		data:data,
		success:function(data){
			console.log(data);

			var	BOCORAN_B = parseFloat($("#"+data+"BOCORAN_B").val().toString());
			var RUSAK_B = parseFloat($("#"+data+"RUSAK_B").val().toString());
			var LONGSORAN_B = parseFloat($("#"+data+"LONGSORAN_B").val().toString());
			var TERSUMBAT_B = parseFloat($("#"+data+"TERSUMBAT_B").val().toString());
			var RETAK_B = parseFloat($("#"+data+"RETAK_B").val().toString());
			var PINTU_RUSAK_B = parseFloat($("#"+data+"PINTU_RUSAK_B").val().toString());
			var SEDIMEN_B = parseFloat($("#"+data+"SEDIMEN_B").val().toString());


			var ESTIMASI_PERBAIKAN =  BOCORAN_B + RUSAK_B + LONGSORAN_B + TERSUMBAT_B + RETAK_B + PINTU_RUSAK_B + SEDIMEN_B ;

			// console.log(ESTIMASI_PERBAIKAN);

			 // + parseFloat($("#"+data+"LONGSORAN_B").val()) + parseFloat($("#"+data+"TERSUMBAT_B").val()) + parseFloat($("#"+data+"RETAK_B").val()) + parseFloat($("#"+data+"PINTU_RUSAK_B").val()) + parseFloat($("#"+data+"SEDIMEN_B").val()));

			$("#"+data+"ESTIMASI_PERBAIKAN").val(parseFloat(ESTIMASI_PERBAIKAN));
			// window.location.reload();
		}
	})
}


// function cekFotoAfter(x){
// 	// alert(x);
// 	var className = "."+x;
// 	alert(className);
// 	$("." + x).hide();
// }