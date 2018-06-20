var app = {
  init:function () {

// Utilisation de la geolocalisation avec l'objet du navigateur
    if(navigator.geolocation){
      var loc = navigator.geolocation.getCurrentPosition(showLocation);

    }
    else{
      alert("Pas de Géolocalisation possible avec votre navigateur ou appareil mobile, l'appli ne fonctionnera pas.");
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
      // On récupère les info de l'Pai
    var city = data.name;
    var description = data.weather[0].description
    var tempMax = data.main.temp_max +" °C";
    var tempMin = data.main.temp_min +" °C";
    var icon = data.weather[0].icon;
    // On construit l'interface
    cityName.append(city);
    descriptionWeather.append(description);
    tMax.append(tempMax);
    tMin.append(tempMin);

      })
    }
    // on place un écouteur de click sur le bouton "trouve moi une tenue" pour déclencher l'action
  $('.go').on('click', app.weatherData);
  },
// Fonction récupère les data de température
  weatherData: function (evt) {

    evt.preventDefault();
    console.log('PIMP');
    var tempText = $('.tMax').text();
    var temp = /([0-9]+)/.exec(tempText);
// on appelle la fonction ajax en lui passant la data température
    app.outfitAjax(temp);
  },

  outfitAjax: function (temp) {

// appel ajax vers le controlleur, avec la data température
  $.ajax(
    "http://127.0.0.1:8001/outfit/",
    {
    method: 'GET',
    data: {
      temp : temp,
    }
    }
  // Ecouteur du retour de la requête en cas de succès
).done(function(response){
// On construit un template qui viendra afficher les résultats d'images
  if(response.up !== ""){

    var template = $(`
      <h2 class="text-center mt-5">Et voilà le travail !</h2>
          <div class="row weatherData justify-content-center mt-4  ">
              <div class="ajax col-9  text-center pt-2">

              <img src="img/${response.up}" alt="image du haut"><br>
              <img src="img/${response.under_up}" alt="image du tshirt "><br>
              <img src="img/${response.down}" alt="image du bas"><br>

          </div><br>

    <div class="button">
    <button class="reload btn btn-primary mt-5" type="button" name="button">Pas convaincu</button></a>
    </div>
          </div>


    `);
    }else{
      var template = $(`
        <h2 class="text-center mt-5">Et voilà le travail!</h2>
            <div class="row weatherData justify-content-center mt-4  ">
                <div class="ajax col-9  text-center pt-2">
      <img src="img/${response.under_up}" alt="image du tshirt "><br>
      <img src="img/${response.down}" alt="image du bas"><br>
      </div><br>

    <div class="button">
    <button class="reload btn btn-primary mt-5" type="button" name="button">Pas convaincu</button></a>

    </div>
      </div>


    `);
    }
// On efface le widget météo que l'on a précédement construit
    $('.result_ajax').empty();
    // on construit le resultat attendu avec le template defini juste au dessus
    $('.result_ajax').append(template);
    // on appel la fonction retry
    app.retry();

    })
  },
  // fonction qui place un écouteur de click sur le bouton "pas convaicu"
  retry: function () {
    $('.reload').on('click',app.lunchAjaxAgain);
  },
// fonction qui relance l'appel ajax pour un nouveau résultat, sans repasser par le widget météo
  lunchAjaxAgain: function () {
    app.outfitAjax();
  }
}
$(app.init);
