

var http = new XMLHttpRequest;
var cards = document.querySelector (".weather-cont");
var currentDay = document.querySelector(".today");
var search = document.querySelector("#searchInput");
var searchButton = document.getElementById("serchButton");
var container = document.querySelector(".weather-cont");
var forcast;
var nextDaysFrocast;
var city = "cairo"
http.open ("GET",`http://api.weatherapi.com/v1/forecast.json?key=d6eff0c151be4752b68162705232202&q=${city}&days=3&aqi=no&alerts=no`)
/*sending connection request */
http.send();
/* listening for the state change event to determine the connection status*/
http.addEventListener("readystatechange", function(){
    /*status = 200 and readysate= 4 means things good to go */
    if (http.readyState == 4 && http.status==200) {
        // console.log (http.response); /*response is text formated */

    /*usning JSON to convert response from text to object */
        forcast = JSON.parse(http.response)
        nextDaysFrocast = forcast.forecast.forecastday;
        console.log(forcast);
        dispalyCurrent();
        displayNext();
    }


});
clearPage();
searchButton.addEventListener("click",function(){
city = search.value;
/*configuring connection to API using the METHOD and URL */
http.open ("GET",`http://api.weatherapi.com/v1/forecast.json?key=d6eff0c151be4752b68162705232202&q=${city}&days=3&aqi=no&alerts=no`)
/*sending connection request */
http.send();
/* listening for the state change event to determine the connection status*/
http.addEventListener("readystatechange", function(){
    /*status = 200 and readysate= 4 means things good to go */
    if (http.readyState == 4 && http.status==200) {
        // console.log (http.response); /*response is text formated */

    /*usning JSON to convert response from text to object */
        forcast = JSON.parse(http.response)
        nextDaysFrocast = forcast.forecast.forecastday;
        console.log(forcast);
        dispalyCurrent();
        displayNext();
    }


})
});
clearPage();
// console.log(currentDay);
// console.log(tomorrow);
// console.log(aftTomorrow);




/*the whole point is to have two functions to display a 3-days forcast
-the first function displays the current day
-the second one loops the response to dispaly the rest of the forcast
which in our case will be 2-days remaining
*/
// function to display current day forcast
function dispalyCurrent() {
    var container="";
    var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    const month = ["January","February","March","April","May","June","July","August","September","October","November","December"];
    var d = new Date(forcast.current.last_updated);
    var dayName = days[d.getDay()];
    var dayNum = d.getDate();
    var monthName = month[d.getMonth()];
    container += `
    <div class="col-lg-4 p-0 today">
    <div class="today-header d-flex justify-content-between px-2 py-3">
    <div class="tod-day">${dayName}</div>
    <div class="tod-date">${dayNum} ${monthName}</div>
  </div>
  <div class="today-cont mt-4 mb-4 ps-2">
    <div class="tod-city mb-3">${city}</div>
    <div class="tod-status mb-3 ps-2 d-flex justify-content-center">
      <div class="tod-degree  fw-bold me-3">${forcast.current.feelslike_c
      }</div>
      <div class="condition-img d-flex  justify-content-center align-items-center">
        <p class="me-3"><sup>o</sup>C</p>
        <div class="tod-status-icon">
          <img src="https:${forcast.current.condition.icon}" alt="" class="">
        </div>
      </div>

    </div>
    <div class="tod-sky-status mb-4 ms-1">${forcast.current.condition.text}</div>
    <span>
      <img src="images/icon-umberella.png" alt="">
      ${forcast.current.humidity}%
    </span>
    <span>
      <img src="images/icon-wind.png" alt="">
      ${forcast.current.wind_kph}km/h
    </span>
    <span>
      <img src="images/icon-compass.png" alt="">
      ${forcast.current.wind_dir}
    </span>
  </div>
  </div>
    ` ;

    cards.innerHTML = container;
}


//function to display next 2 days forcast
//looping through the forcast array
//the forcast[0] index is the current forcast which is
// already been displayed
//so ! , we are starting the loop on index 1 .


function displayNext(){


    var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    const month = ["January","February","March","April","May","June","July","August","September","October","November","December"];
    for(i=1 ; i<(nextDaysFrocast.length) ; i++) {
    var container="";
    var d = new Date(nextDaysFrocast[i].date);
    var dayName = days[d.getDay()];
    var dayNum = d.getDate();
    var monthName = month[d.getMonth()];
    console.log(dayName, dayNum, monthName); //getting next 2 days to console

    container += `
    <div class="col-lg-4 p-0 tomorrow text-white-50 card${i} ">
    <div class="tom-header${i} d-flex justify-content-center py-3">${dayName}</div>
    <div class="tom-cont d-flex flex-column align-items-center mt-5">
      <div class="tom-icon fs-3 fw-bold mt-1">
      <img src="https:${nextDaysFrocast[i].day.condition.icon}">
      </div>
      <div class="tom-status-degree fs-3 fw-bold mt-2">
      ${nextDaysFrocast[i].day.maxtemp_c} <sup>o</sup>
      </div>
      <div class="tom-small mt-2">
      ${nextDaysFrocast[i].day.mintemp_c} <sup>o</sup>
      </div>
      <div class="tom-sky-status mt-3">
      ${nextDaysFrocast[i].day.condition.text}
      </div>
    </div>
  </div>
    `;
    cards.innerHTML += container;
    }


}

//for search to work we need to clear page for new content.
function clearPage(){

  document.querySelector(".weather-cont").innerHTML=``;
}
