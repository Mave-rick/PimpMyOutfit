var app = {
  init:function () {
    console.log('hello my dressing');

// Utilisation de la geolocalisation avec l'objet du navigateur
    if(navigator.geolocation){
      var loc = navigator.geolocation.getCurrentPosition(showLocation);
      console.log(loc);
    }
    else{
      alert("Pas de Géolocalisation possible avec votre navigateur ou appareil mobile");
    }
// Fonction de succes de l'objet qui affiche les coordonnées
    function showLocation(loc) {

      var lat = loc.coords.latitude;
      var long = loc.coords.longitude;

    forcast(lat,long);

    }

// Fonction qui utilise l'API OpenWeather pour afficher les prévision de la journée en cours, en fonction des coordonnées geographique
    function forcast(lat, long) {

    var cityName = $('.city');
    var descriptionWeather = $('.description');
    var tMax = $('.tMax');
    var tMin = $('.tMin');
    var weather = $('.weatherIcon');
    var test = "22";


// Appel ajax vesr l'api OpenWeather pour les prévision du jours, en fonction des coordonnées geographique
    $.ajax(
      "http://api.openweathermap.org/data/2.5/weather?lat="+lat+"&lon="+long+"&appid=2ed125776cdf9fb38fa76bb5eaafa287&units=metric&lang=fr",
      {
      method: 'POST',
      }
    // Ecouteur du retour de la requête en cas de succès
    ).done(function(data){
    var city = data.name;
    var description = data.weather[0].description
    var tempMax = data.main.temp_max +" °C";
    var tempMin = data.main.temp_min +" °C";
    var icon = data.weather[0].icon;



    cityName.append(city);
    descriptionWeather.append(description);
    tMax.append(tempMax);
    tMin.append(tempMin);

    })
  }
}
}
$(app.init);
