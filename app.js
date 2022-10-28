jQuery(document).ready(function(){


    show();
    function show(){
    $.ajax({
        url: "function.php",
        type: "GET",
        success: function(response){
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
        url: "function.php",
        type: "POST",
        data:{
            'studentName': studentName,
            'fName': fName,
            'mName': mName,
            'email': email,
            'status': status,
            'action': action
            
        },
        success: function(response){
            alert(response);

        }
    })
})


});