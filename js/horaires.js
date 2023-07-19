$('document').ready(function(){


    jQuery.ajax({
        type: "POST",
        url: 'php/getHoraires.php',
        dataType: 'html',
        success: function (data) {
          $('#horaires').html(data);
        }
      })
        ;


});
