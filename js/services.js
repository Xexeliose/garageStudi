
// Obtenez les références des éléments du DOM
var modal = document.getElementById("myModal");
var modalbtn = document.getElementById("openModal");
var span = document.getElementById("closeAdd");
// Ajoutez un événement de clic au bouton pour ouvrir le modal
modalbtn.addEventListener("click", function () {
  modal.style.display = "block";

});

// Ajoutez un événement de clic au bouton de fermeture pour masquer le modal
span.addEventListener("click", function () {
  modal.style.display = "none";
});

// Ajoutez un événement de clic en dehors du modal pour le masquer également
window.addEventListener("click", function (event) {
  if (event.target === modal) {
    modal.style.display = "none";
  }
});


function modifyService(id) {
  jQuery.ajax({
    type: "POST",
    url: 'php/modifyService.php',
    dataType: 'html',
    data: { functionname: 'modify', id: id },
    success: function (data) {
      $('#modModal').html(data);
      refreshService();
    }
  });
}


function deleteService(id) {
  if (confirm('Etes vous sur de vouloir suprimer ce service?')) {
    // Save it!
    jQuery.ajax({
      type: "POST",
      url: 'php/modifyService.php',
      dataType: 'html',
      data: { functionname: 'delete', id: id },
      success: function () {
        refreshService();
      },
    });
  };
}


function refreshService() {
  $.ajax({
    type: 'POST',
    url: 'php/fetchServices.php',
         
    success: function (html) {
      $('#service-wrapper').html(html);
    }
  });
}

