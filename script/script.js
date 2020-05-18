$(document).ready(function() { 
    $("#image").change(function() {

        let filename = $(this).val(); 
        $(".custom-file-label").html(filename);
        
    });  

    $("#image_upload").submit(function(e) { 
        e.preventDefault();
        $.ajax({
            url: 'insert.php',
            method: 'post', 
            processData: false,
            contentType: false,
            cache: true, 
            data: new FormData(this), 
            success: function (response) {
                $("#result").html(response);  
                $(".custom-file-label").html("Choose File");  
                load_images();
            }
        })

    }); 

    load_images();
    function load_images() { 
        $.ajax({
            url: 'load.php', 
            cache: true, 
            method: 'get', 
            success: function (data) {
                $("#images_preview").html(data);
            }
        })
        

    }



});