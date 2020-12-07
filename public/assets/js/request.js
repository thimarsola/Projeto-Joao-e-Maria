$(function(){
   $('#form').submit(function(){
     $.ajax({
         url: 'source/Support/Sender.php',
         type: 'POST',
         data: $('#form').serialize(),
         success: function(data){
             $('.contact__form__status').html(data);
         }
     });
     return false;
   });
});

$(function(){
    $("#button").click(function(){
        $(".contact__form__status--loading").removeClass("d-none");
    });
});
