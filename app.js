jQuery(document).ready(function(){

	show();
	function show(){
		$.ajax({
			url:"function.php",
			type:"POST",
			data:{
				'action':"show"
			},
			success:function(response){
				jQuery(".tdata").html(response);
			}
		})
	}


	jQuery(".addStudent").click(function(){
		var studentName = jQuery(".studentName").val();
		var fName = jQuery(".fName").val();
		var mName = jQuery(".mName").val();
		var email = jQuery(".email").val();
		var status = jQuery(".status").val();
		var action = "insert";

		$.ajax({
			url:"function.php",
			type:"POST",
			data:{
				'studentName':studentName,
				'fName':fName,
				'email':email,
				'mName':mName,
				'status':status,
				'action':action
			},
			success:function(response){
				show();
				jQuery(".msg").html(response);
				jQuery(".msg").fadeOut(2000);
				jQuery(".studentName").val("");
				jQuery(".fName").val("");
				jQuery(".mName").val("");
				jQuery(".email").val("");
				jQuery(".status").val("");
			}
		})
	})

    jQuery(document).on("click", ".btnActive", function(){
    	var id = jQuery(this).val();
    	$.ajax({
			url:"function.php",
			type:"POST",
			data:{
				'action':"active",
				'id':id
			},
			success:function(response){
				show();
			}
		})

    })

	jQuery(document).on("click", ".btnInactive", function(){
    	var id = jQuery(this).val();
    	$.ajax({
			url:"function.php",
			type:"POST",
			data:{
				'action':"inactive",
				'id':id
			},
			success:function(response){
				show();
			}
		})

    })

	jQuery(document).on("click", ".btnDelete", function(){
    	var id = jQuery(this).val();
		jQuery(".MbtnDelete").val(id);



    	// $.ajax({
		// 	url:"function.php",
		// 	type:"POST",
		// 	data:{
		// 		'action':"delete",
		// 		'id':id
		// 	},
		// 	success:function(response){
		// 		show();
		// 	}
		// })

    })


jQuery(document).on("click", ".MbtnDelete", function(){
    	var id = jQuery(this).val();

		
    	$.ajax({
			url:"function.php",
			type:"POST",
			data:{
				'action':"delete",
				'id':id
			},
			success:function(response){
				show();
				jQuery("#forDelete").modal("hide");
			}
		})

    })

	
	jQuery(".MaddNew").click(function(){
		var studentName = jQuery("#MstudentName").val();
		var fName = jQuery("#MfName").val();
		var mName = jQuery("#MmName").val();
		var email = jQuery("#Memail").val();
		var status = jQuery("#Mstatus").val();
		var action = "insert";

		$.ajax({
			url:"function.php",
			type:"POST",
			data:{
				'studentName':studentName,
				'fName':fName,
				'email':email,
				'mName':mName,
				'status':status,
				'action':action
			},
			success:function(response){
				show();
				jQuery(".msg").html(response);
				jQuery(".msg").fadeOut(2000);
				jQuery("#MstudentName").val("");
				jQuery("#MfName").val("");
				jQuery("#MmName").val("");
				jQuery("#Memail").val("");
				jQuery("#Mstatus").val("");
				jQuery("#forInsert").modal("hide");
			}
		})
	})

});