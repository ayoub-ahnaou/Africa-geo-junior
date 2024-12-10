const body = document.querySelector("body");
const background = document.getElementById("background");

// continent form elements 
const continent_form = document.getElementById("continent-form");
const add_continent_button = document.getElementById("add-continent-button");
const cancel_add_continent = document.getElementById("cancel_add_continent");

// country form elements 
const country_form = document.getElementById("country-form");
const add_country_button = document.getElementById("add-country-button");
const cancel_add_country = document.getElementById("cancel_add_country");

// country form elements 
const city_form = document.getElementById("city-form");
const add_city_button = document.getElementById("add-city-button");
const cancel_add_city = document.getElementById("cancel_add_city");

function close_all_popup(){
    body.classList.remove("my-body-noscroll-class");
    background.classList.remove("blur");
    continent_form.classList.remove("flex");
    continent_form.classList.add("hidden");
    country_form.classList.remove("flex");
    country_form.classList.add("hidden");
    city_form.classList.remove("flex");
    city_form.classList.add("hidden");
}

// show the pop-up form of the continents
add_continent_button.onclick = () => {
    body.classList.add("my-body-noscroll-class");
    background.classList.add("blur");
    continent_form.classList.add("flex");
    continent_form.classList.remove("hidden");
};
cancel_add_continent.onclick = () => {
    close_all_popup();
}
document.addEventListener("click", (e) => {
    if(e.target.id == "continent-form") close_all_popup();
})

// show the pop-up form of the countries
add_country_button.onclick = () => {
    body.classList.add("my-body-noscroll-class");
    background.classList.add("blur");
    country_form.classList.add("flex");
    country_form.classList.remove("hidden");
};
cancel_add_country.onclick = () => {
    close_all_popup();
}
document.addEventListener("click", (e) => {
    if(e.target.id == "country-form") close_all_popup();
})

// show the pop-up form of the cities
add_city_button.onclick = () => {
    body.classList.add("my-body-noscroll-class");
    background.classList.add("blur");
    city_form.classList.add("flex");
    city_form.classList.remove("hidden");
};
cancel_add_city.onclick = () => {
    close_all_popup();
}
document.addEventListener("click", (e) => {
    if(e.target.id == "city-form") close_all_popup();
})