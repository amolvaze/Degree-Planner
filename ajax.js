/* Code developed by Author:- Amol Vaze (asv130130@utdallas.edu), Assignment -3 & 4, Due Date:- Aug 3, 2015, Time noon */
$.ajax({
    type:'GET',
    url:'http://localhost/www21/gpa.php',
    data:'',
    success: function(data){
            $('#GPA').html(data);
    }
});

$.ajax({
    type:'GET',
    url:'http://localhost/www21/gpa.php',
    data:'',
    success: function(data){
            $('#Grade_BG').html(data);
    }
});

$.ajax({
    type:'GET',
    url:'http://localhost/www21/gpa.php',
    data:'',
    success: function(data){
            $('#Grade_ST').html(data);
    }
});

$.ajax({
    type:'GET',
    url:'http://localhost/www21/gpa.php',
    data:'',
    success: function(data){
            $('#Grade_Algo').html(data);
    }
});

$.ajax({
    type:'GET',
    url:'http://localhost/www21/gpa.php',
    data:'',
    success: function(data){
            $('#Grade_ML').html(data);
    }
});

$.ajax({
    type:'GET',
    url:'http://localhost/www21/gpa.php',
    data:'',
    success: function(data){
            $('#Grade_DB').html(data);
    }
});


$.ajax({
    type:'GET',
    url:'http://localhost/www21/coregpa.php',
    data:'',
    success: function(data){
            $('#result').html(data);
    }
});

$.ajax({
    type:'GET',
    url:'http://localhost/www21/classes-req.php',
    data:'',
    success: function(data){
            $('#result2').html(data);
    }
});

$.ajax({
    type:'POST',
    url:'http://localhost/www21/drop-classes.php',
    data:'',
    success: function(data){
            $('#drop').html(data);
    }
});

$.ajax({
    type:'POST',
    url:'http://localhost/www21/delete_user.php',
    data:'',
    success: function(data){
            $('#delete_user').html(data);
    }
});

$.ajax({
    type:'POST',
    url:'http://localhost/www21/update-classes.php',
    data:'',
    success: function(data){
            $('#update').html(data);
    }
});

$.ajax({
    type:'POST',
    url:'http://localhost/www21/update-user.php',
    data:'',
    success: function(data){
            $('#update_user').html(data);
    }
});

$.ajax({
    type:'GET',
    url:'http://localhost/www21/credithrs.php',
    data:'',
    success: function(data){
            $('#credit').html(data);
    }
});

$.ajax({
    type:'GET',
    url:'http://localhost/www21/checkcore.php',
    data:'',
    success: function(data){
            $('#checkcore').html(data);
    }
});


