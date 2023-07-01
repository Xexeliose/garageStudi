$(document).ready(function () {



    // Activer la sélection de la note par les étoiles
    $('.rating span').click(function () {
        $('.rating span').removeClass('selected');
        $(this).addClass('selected');
        $(this).prevAll().addBack().addClass('selected'); $(this).nextAll().removeClass('hover');
        $(this).nextAll().removeClass('selected');
        $(this).find('input').prop('checked', true);
    });

    $('.rating span').hover(function () {
        $(this).prevAll().addBack().addClass('hover');
        $(this).nextAll().removeClass('hover');
    }, function () {
        $('.rating span').removeClass('hover');
    });
});

$('#reviewSubmitForm').submit(function (event) {
    event.preventDefault(); // Empêcher le rechargement de la page
    var formData = $(this).serialize();
    $.ajax({
        type: 'POST',
        url: $(this).attr('action'),
        data: formData,
        success: function (response) {
            $('#name').val('');
            $('#comment').val('');
            $('input[name=rating]').prop('checked', false);
            var message = "Avis envoyé avec succès";
            displayModal(message, true);
        },
        error: function () {
            var message = "Échec lors de l'envoi de l'avis";
            displayModal(message, false);
        }
    });

    function displayModal(message, response) {
        var modalMessage = $("#submitModal");
        modalMessage.html(message);

        if (response) {
            modalMessage.css("background-color", "lightgreen");
        } else {
            modalMessage.css("background-color", "red");
        }

        openModal();
        closeModal();
    }


    setTimeout(function() {$('#forgot-form').modal('hide');}, 4000);

    function openModal() {
        $("#myModal").css("display", "block");
        
    }

    function closeModal() {
        setTimeout(fermerModal, 3000);
    }

    // Fonction pour fermer le modal
    function fermerModal() {
      var modal = document.getElementById("myModal");
      var opacity = 1;
      var timer = setInterval(function () {
        if (opacity <= 0.1) {
          clearInterval(timer);
          modal.style.display = "none";
        }
        modal.style.opacity = opacity;
        opacity -= opacity * 0.1;
      }, 50);
    }
    
});