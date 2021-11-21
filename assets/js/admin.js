



$('#insert-records').on("click", function () {
    var fd = new FormData();
    var files = $('#file')[0].files;
    // append the form values to fd variable
    fd.append('emp-name', $('#name').val());
    fd.append('emp-email', $('#email').val());
    fd.append('emp-dob', $('#dob').val());
    fd.append('emp-qual', $('#qual').val());
    fd.append('emp-exp', $('#exp').val());
    fd.append('emp-sal', $('#sal').val());

    Notiflix.Notify.Failure("Username or Password Wrong");
    // get multiple images name 
    for (var i = 0; i < files.length; i++) {
        fd.append("files[]", document.getElementById('file').files[i]);
    }

    // Form validation
    if (name.length == 0 && files.length == 0 && email.length == 0 && dob.length == 0 && qual.length == 0 && exp.length == 0 && sal.length == 0) {
        Notiflix.Notify.Warning('Fields are required');
    } else if (name.length == 0) {
        Notiflix.Notify.Warning('Name are required');
    } else if (email.length == 0) {
        Notiflix.Notify.Warning('Email are required');
    } else if (dob.length == 0) {
        Notiflix.Notify.Warning('DOB are required');
    } else if (exp.length == 0) {
        Notiflix.Notify.Warning('Experience are required');
    } else if (qual.length == 0) {
        Notiflix.Notify.Warning('Qualification are required');
    } else if (sal.length == 0) {
        Notiflix.Notify.Warning('Salary are required');
    } else if (files.length == 0) {
        Notiflix.Notify.Warning('Files are required');
    } else {
        $.ajax({
            url: 'Insert_record',
            data: fd,
            processData: false,
            contentType: false,
            type: 'POST',
            success: function (data) {
                Notiflix.Notify.Success(data);
                $('#file').val('');
                $('#name').val('');
                $('#email').val('');
               $('#dob').val('');
               $('#qual').val('');
                $('#exp').val('');
                $('#sal').val('');
                document.getElementById('emp-form').reset();
                get_emp();
            }
        });
    }

})


// retrive EMployee data and display dashboard
function get_emp() {
    $.post("get_table", {}, function (data) {
        var tbl = $("#data-table");
        tbl.html(data);
    });
}

// delete employee with id
function del_emp(id) {
    var con = confirm("Are you sure want to delete..?");
    if (con == true) {
        $.post('delete_emp', { Id: id }, function (data) {
            Notiflix.Notify.Success('Employee Deleted Successfully');
            get_emp();
        });
    } else {

    }
}

function edit_emp(id) {
    $.post('search_emp', { Id: id }, function (data) {
        var rows = JSON.parse(data);
        $('#edit-name').val(rows[0].Name);
        $('#edit-email').val(rows[0].Email);
        $('#edit-dob').val(rows[0].DOB);
        $('#edit-sal').val(rows[0].Salary);
        $('#edit-qual').val(rows[0].Qualification);
        $('#edit-exp').val(rows[0].Experience);
        $('#emp-imgs').val(rows[0].Images);
        $('#eid').val(rows[0].Eid);
        var img = rows[0].Images.split(",");
        for (var i = 0; i < img.length; i++) {
            $("#img").append("<img src='./assets/images/" + img[i] + "' width='50px' height='40px' >");
        }
    });
}

$('#close-form').on("click",function(){
    document.getElementById('edit-emp-form').reset()
});

$('#edit-records').on("click",function(){
    var fd = new FormData();
    var files = $('#edit-file')[0].files;
    // append the form values to fd variable
    fd.append('edit-emp-name', $('#edit-name').val());
    fd.append('edit-emp-email', $('#edit-email').val());
    fd.append('edit-emp-dob', $('#edit-dob').val());
    fd.append('edit-emp-qual', $('#edit-qual').val());
    fd.append('edit-emp-exp', $('#edit-exp').val());
    fd.append('edit-emp-sal', $('#edit-sal').val());
    fd.append('eid', $('#eid').val());
    fd.append('edit-img', $('#emp-imgs').val());
    

   
    // get multiple images name 
    for (var i = 0; i < files.length; i++) {
        fd.append("files[]", document.getElementById('edit-file').files[i]);
    }
    $.ajax({
        url: 'Update_record',
        data: fd,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (data) {
            Notiflix.Notify.Success(data);
            document.getElementById('edit-emp-form').reset()
            get_emp();
        }
    });
})

$('#file,#edit-file').on("change",function(){
    var fileInput =document.getElementById('file');
    var filePath = fileInput.value;
    // Allowing file type
    var allowedExtensions = /(\.doc|\.docx|\.odt|\.pdf|\.txt|\.png|\.jpg)$/i;
    
    if (!allowedExtensions.exec(filePath)) {
        Notiflix.Notify.Failure("File Format Not Support");
    fileInput.value = '';
    $('#edit-file').val('');
    return false;
    } 
})


window.reload = get_emp();