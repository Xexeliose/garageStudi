const constraints = {
    password: {
        presence: { allowEmpty: false }
    },
    email: {
        presence: { allowEmpty: false },
        email: true
    }
};

var modal = document.getElementById("myModal");
var modalbtn = document.getElementById("openModal");

const form = document.getElementById('user-form');
form.addEventListener("submit", userForm);


function delUser(login) {
    const data = {
        login: login,
        type: 'del',
    };

    $.ajax({
        type: 'POST',
        url: 'php/manageUser.php',
        data: data,
        success: function () {
            var message = "Opération efectué avec succès";
            displayModal(message, true);    
            refreshUser()
        },
        error: function () {
            var message = "Échec lors de l'opération";
            displayModal(message, false);
        }
    });
}

function refreshUser() {
    $.ajax({
      type: 'POST',
      url: 'php/fetchUser.php',
           
      success: function (html) {
        $('#user-wrapper').html(html);
      }
    });
  }

  
function userForm(event) {
    
    event.preventDefault();
    console.log("Add");

    const formValues = {
        login: form.elements.email.value,
        password: form.elements.password.value,
        type: 'add',
    };

    $.ajax({
        type: 'POST',
        url: 'php/manageUser.php',
        data: formValues,
        success: function () {
            $('#email').val('');
            $('#password').val('');
            var message = "Opération efectué avec succès";
            displayModal(message, true);
            refreshUser();
        },
        error: function () {
            var message = "Échec lors de l'opération";
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


setTimeout(function () { $('#forgot-form').modal('hide'); }, 4000);

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