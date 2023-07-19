

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


function modifyCar(id) {

  jQuery.ajax({
    type: "POST",
    url: 'php/modifyCar.php',
    dataType: 'html',
    data: { functionname: 'modify', id: id },
    success: function (data) {
      $('#modModal').html(data);
      filterCars()
    }
  })
    ;

}


function deleteCar(id) {

  if (confirm('Etes vous sur de vouloir suprimer ce véhicule?')) {
    // Save it!
    jQuery.ajax({
      type: "POST",
      url: 'php/modifyCar.php',
      dataType: 'html',
      data: { functionname: 'delete', id: id },
      success: function () {
        filterCars()
      }
    });
  } else {
    // Do nothing!
    //console.log('Delete aborted');
  };


}

var carsContainer = document.getElementById("cars-container");
var detailContainer = document.getElementById("detail-container");
var topWrapper = document.getElementById("topWrapper");

var cpt = 0;

function filterCars() {
  cpt++;
  if (cpt >= 3) {
    var price_range = $('#price_range').val();
    var km_range = $('#km_range').val();
    var year_range = $('#year_range').val();

    var data = {
      price_range,
      km_range,
      year_range
    }


    $.ajax({
      type: 'POST',
      url: 'php/fetchCars.php',
      data: data,
      success: function (html) {
        carsContainer.style.display = "flex";
        topWrapper.style.display = "block";
        detailContainer.style.display = "none";

        $('#cars-container').html(html);
      }
    });
  }
}



function detailCar(id) {

  $.ajax({
    type: 'POST',
    url: 'php/detailCar.php',
    data: { id: id },
    success: function (html) {
      carsContainer.style.display = "none";
      topWrapper.style.display = "none";
      detailContainer.style.display = "flex";

      $('#detail-container').html(html);
    }
  });


}
