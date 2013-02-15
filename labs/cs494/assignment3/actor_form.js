(function(){
    $(".new_upload").find("input[type!='file']").bind('click', function(){
        $(".file_upload_fix").find('input[type=file]').trigger('click');

        return false;
    });

    $(".file_upload_fix").find('input[type=file]').bind('change', function(){
        var newfile = $(this).val();
        
        newfile = newfile.replace("C:\\fakepath\\", "");

        $(".new_upload").find("input[type=text]").val(newfile);
    });
/*
    if($.browser.webkit){
     $(".file_upload_fix").find('input[type=file]').addClass('webkit');
    }else if($.browser.mozilla){
     $(".file_upload_fix").find('input[type=file]').addClass('moz');
    }
*/
})();

