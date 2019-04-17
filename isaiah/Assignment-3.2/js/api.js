  // Capture Char button
    let char_button = document.querySelector('#character');
    let spec_button = document.querySelector('#species');
    let plan_button = document.querySelector('#planet');

    // Char info
    let name  = document.querySelector('#char_name');
    let race = document.querySelector('#race');
    let homeworld = document.querySelector('#homeworld');
    let got_house = document.querySelector('#GOT_house');
    let got_alliance = document.querySelector('#GOT_alliance');
    
    // Species info
    let species = document.querySelector('#spec_name');
    let home_planet = document.querySelector('#home-planet');
    let lifespan = document.querySelector('#lifespan');
    let language = document.querySelector('#language');
    let hair_color = document.querySelector('#hair_color');

    // Planet info
    let planet = document.querySelector('#plan_name');
    let climate = document.querySelector('#climate');
    let population = document.querySelector('#population');
    let terrain =  document.querySelector('#terrain');
    let region = document.querySelector('#region');
   
    // Grab character data via SWapi
    function getSWChar()
    {
       let rand = Math.floor((Math.random() * 88) + 1);
       let apiChar = 'https://swapi.co/api/people/' + rand;
       let apiGOT = 'https://www.anapioficeandfire.com/api/houses/' + rand;
     
      $.ajax(apiChar).then(function(response)
      { 
          updateCharInfo(response);
      }).catch(e =>
        {
          updateError1();  
        });

      $.ajax(apiGOT).then(function(response)
      {
        updateGOTInfo(response);
      });
    }

    function getSWSpec()
    {
      let rand = Math.floor((Math.random() * 40) + 1);
      let apiSpec = 'https://swapi.co/api/species/' + rand;
      let apiCult = 'https://www.anapioficeandfire.com/api/characters/' + rand;

      $.ajax(apiSpec).then(function(response)
      {
        updateSpecInfo(response);
      }).catch(e =>
        {
          updateError2();  
        });
      
      $.ajax(apiCult).then(function(response)
      {
        updateGOTCulture(response);
      });
    }

   function getSWPlanet()
   {
     let rand = Math.floor((Math.random() * 50) + 1);
     let apiPlan = 'https://swapi.co/api/planets/' + rand;
     let apiGOT = 'https://www.anapioficeandfire.com/api/houses/' + rand;

      $.ajax(apiPlan).then(function(response)
      {
        updatePlanInfo(response);
      }).catch(e =>
        {
          updateError3();  
        });

      $.ajax(apiGOT).then(function(response)
      {
        updateGOTRegion(response);
      });
   }

  // < ---functions that update info on page --- >
   function updateCharInfo(data)
   {
      name.innerHTML = data.name; 
      
      $.get(data.species).then(function(response)
      {
        race.innerHTML =  'Species: ' + response.name;
      });

      $.get(data.homeworld).then(function(response)
      {
        homeworld.innerHTML =  'Homeworld: ' + response.name;
      });
   }

   function updateSpecInfo(data)
   {
      species.innerText = data.name;

      $.get(data.homeworld).then(function(response)
      {
        home_planet.innerText = 'Homeworld: ' + response.name;
      });

      lifespan.innerText = 'Average Lifespan: ' + data.average_lifespan + ' Years';
      language.innerText = 'Language: ' + data.language;
    }

   function updatePlanInfo(data)
   {
      planet.innerText = data.name;
      climate.innerText = 'Climate: ' + data.climate;
      population.innerText = 'Population: ' + data.population + ' Persons';
      terrain.innerText = 'Terrain: ' + data.terrain;
   }

   function updateGOTInfo(data)
   {
       got_house.innerText = 'Royal House: ' + data.name;
      
       if(data.coatOfArms == '')
        got_alliance.innerText = "Coat of Arms: No Description m'Lord";
       
      else
        got_alliance.innerText = 'Coat of Arms: ' + data.coatOfArms;
   }

   function updateGOTCulture(data)
   {
      if(data.culture == '')
        hair_color.innerText = "Culture: Nothing here m'lord";

      else
        hair_color.innerText = 'Culture: ' + data.culture;
   }

   function updateGOTRegion(data)
   {
      region.innerText = 'Kingdoms and Countries: ' + data.region;
   }
   // < --------------------------------------- >
  
   function updateError1()
   {
      name.innerText = 'Impossible. Perhaps the Archives are incomplete.';
      race.innerText = 'Error 404';
      homeworld.innerText = 'swapi.com ';
   }

   function updateError2()
   {
      species.innerText = 'Impossible. Perhaps the Archives are incomplete.';
      home_planet.innerText = 'Error 404';
      lifespan.innerText = 'swapi.com';
      language.innerText = ' -- ';
   }

   function updateError3()
   {
      planet.innerText = 'Impossible. Perhaps the Archives are incomplete.';
      climate.innerText = 'Error 404';
      population.innerText = 'swapi.com';
   }
    
    //Set Event Listener
    char_button.addEventListener('click', getSWChar);
    spec_button.addEventListener('click', getSWSpec);
    plan_button.addEventListener('click', getSWPlanet);
    