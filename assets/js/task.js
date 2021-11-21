$('#sign').on("click",function(){
   
    // check form style is visible or not
    var frm = document.getElementById("signup");
    if (frm.style.display === "none") {
        $('#login').css("display","none");
        $('#signup').css("display","block");
      $('#sign').text('Sign Up');
    } else {
        $('#login').css("display","block");
        $('#signup').css("display","none");
        $('#sign').text('Sign In');
     
    }
});

// form authentication

$('#auth').on("click",function(){
    var name=$('#lg-name').val();
    var pwd=$('#lg-pwd').val();

    if (name.length == 0  && pwd.length==0) {
        Notiflix.Notify.Warning('Fields are required');
    }else if (name.length == 0) {
        Notiflix.Notify.Warning('UserName are required');

    }else if (pwd.length== 0) {
       Notiflix.Notify.Warning('Password are required');
   }else{
    $.post("Task/login",
    {
        uname:name,        
        pwd:pwd
    },
     function(data){
    if(data==0){
        Notiflix.Notify.Failure("Username or Password Wrong");
    }else{
        Notiflix.Notify.Success(data);
        setTimeout(function(){
            window.location="dashboard";
        },2000);
    }

   });
   } 

    
});


// form registration 
$('#register').on("click",function(){
    var name=$('#sg-name').val();
    var email=$('#sg-mail').val();
    var pwd=$('#sg-pwd').val();
    // check validation 
    if (name.length == 0 && email.length == 0 && pwd.length==0) {
        Notiflix.Notify.Warning('Fields are required');
    } else if (name.length == 0) {
        Notiflix.Notify.Warning('Name are required');

    }else if (email.length== 0) {
       Notiflix.Notify.Warning('Email are required');
   } 
    else if (pwd.length == 0) {
        Notiflix.Notify.Warning('Password are required');
    } else {
        // ajax request for storing data
    $.post("Task/register",
    {
        uname:name,
        email:email,
        pwd:pwd
    },
     function(data){
    $('#login').css("display","block");
    $('#signup').css("display","none");
    $('#sign').text('Sign In');
    Notiflix.Notify.Success(data);
   });
}
})