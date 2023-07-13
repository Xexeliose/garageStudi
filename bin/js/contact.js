const constraints = {
    nom: {
        presence: { allowEmpty: false }
    },
    prenom: {
        presence: { allowEmpty: false }
    },
    email: {
        presence: { allowEmpty: false },
        email: true
    },
    telephone: {
        presence: { allowEmpty: false },
    },
    sujet: {
        presence: { allowEmpty: false },
    },
    message: {
        presence: { allowEmpty: false }
    }
};

const form = document.getElementById('contact-form');
form.addEventListener("submit", contactForm);

function contactForm(event) {
    event.preventDefault();

    const formValues = {
        nom: form.elements.nom.value,
        prenom: form.elements.prenom.value,
        email: form.elements.email.value,
        telephone: form.elements.telephone.value,
        sujet: form.elements.sujet.value,
        message: form.elements.message.value
    };

    $.ajax({
        type: 'POST',
        url: 'php/process.php',
        data: formValues,
        success: function () {
            $('#nom').val('');
            $('#prenom').val('');
            $('#email').val('');
            $('#telephone').val('');
            $('#sujet').val('');
            $('#message').val('');
            var message = "Mail envoyé avec succès";
            displayModal(message, true);
        },
        error: function () {
            var message = "Échec lors de l'envoi du mail";
            displayModal(message, false);
        }
    });
}


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
    $("#notifModal").css("display", "block");
    
}

function closeModal() {
    setTimeout(fermerModal, 3000);
}

// Fonction pour fermer le modal
function fermerModal() {
  var modal = document.getElementById("notifModal");
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