
var minPrice;
var maxPrice;
var minKm;
var maxKm;
var minYear;
var maxYear;

minPrices();
maxPrices();
minKms();
maxKms();
minYears();
maxYears();

$(function () {
    $('#price_range').jRange({
        from: minPrice,
        to: maxPrice,
        step: 50,
        format: '%s €',
        width: 350,
        showLabels: true,
        isRange: true,
        showScale: false,
        ondragend: function () { filterCars(); },
        onbarclicked: function () { filterCars(); },
    });
    resetPrice()

    $('#km_range').jRange({
        from: minKm,
        to: maxKm,
        step: 50,
        format: '%s km',
        width: 350,
        showLabels: true,
        isRange: true,
        showScale: false,
        ondragend: function () { filterCars(); },
        onbarclicked: function () { filterCars(); },
    });
    resetKm()

    $('#year_range').jRange({
        from: minYear,
        to: maxYear,
        step: 1,
        format: '%s',
        width: 350,
        showLabels: true,
        isRange: true,
        showScale: false,
        ondragend: function () { filterCars(); },
        onbarclicked: function () { filterCars(); },
    });
    resetYear()


});

//price
function minPrices() {
    var requete = new XMLHttpRequest();
    requete.onload = function () {
        //La variable à passer est alors contenue dans l'objet response et l'attribut responseText.
        minPrice = parseInt(this.responseText);
    };
    requete.open("GET", "php/fetchMinPrice.php", false); //True pour que l'exécution du script continue pendant le chargement, false pour attendre.
    requete.send();
}

function maxPrices() {
    var requete = new XMLHttpRequest();
    requete.onload = function () {
        //La variable à passer est alors contenue dans l'objet response et l'attribut responseText.
        maxPrice = parseInt(this.responseText);
    };
    requete.open("GET", "php/fetchMaxPrice.php", false); //True pour que l'exécution du script continue pendant le chargement, false pour attendre.
    requete.send();
}

//Km
function minKms() {
    var requete = new XMLHttpRequest();
    requete.onload = function () {
        //La variable à passer est alors contenue dans l'objet response et l'attribut responseText.
        minKm = parseInt(this.responseText);
    };
    requete.open("GET", "php/fetchMinKm.php", false); //True pour que l'exécution du script continue pendant le chargement, false pour attendre.
    requete.send();
}

function maxKms() {
    var requete = new XMLHttpRequest();
    requete.onload = function () {
        //La variable à passer est alors contenue dans l'objet response et l'attribut responseText.
        maxKm = parseInt(this.responseText);
    };
    requete.open("GET", "php/fetchMaxKm.php", false); //True pour que l'exécution du script continue pendant le chargement, false pour attendre.
    requete.send();
}


//Year
function minYears() {
    var requete = new XMLHttpRequest();
    requete.onload = function () {
        //La variable à passer est alors contenue dans l'objet response et l'attribut responseText.
        minYear = parseInt(this.responseText);

    };
    requete.open("GET", "php/fetchMinYear.php", false); //True pour que l'exécution du script continue pendant le chargement, false pour attendre.
    requete.send();
}

function maxYears() {
    var requete = new XMLHttpRequest();
    requete.onload = function () {
        //La variable à passer est alors contenue dans l'objet response et l'attribut responseText.
        maxYear = parseInt(this.responseText);
    };
    requete.open("GET", "php/fetchMaxYear.php", false); //True pour que l'exécution du script continue pendant le chargement, false pour attendre.
    requete.send();
}



function resetPrice() {
    let res1 = minPrice.toString() + ',' + maxPrice.toString();
    $('#price_range').jRange('setValue', res1);
    filterCars();
}

function resetKm() {
    let res2 = minKm.toString() + ',' + maxKm.toString();
    $('#km_range').jRange('setValue', res2);
    filterCars();
}

function resetYear() {
    let res3 = minYear.toString() + ',' + maxYear.toString();
    $('#year_range').jRange('setValue', res3);
    filterCars();
}