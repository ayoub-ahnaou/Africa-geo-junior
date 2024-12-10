const continents = document.getElementById("continents");
const countries = document.getElementById("countries");
const cities = document.getElementById("cities");

const continents_choice = document.getElementById("continents_choice");
const countries_choice = document.getElementById("countries_choice");
const cities_choice = document.getElementById("cities_choice");


window.setChoice = (choice) => {
    continents.classList.add("hidden");
    countries.classList.add("hidden");
    cities.classList.add("hidden");

    continents_choice.classList.remove("bg-white");
    countries_choice.classList.remove("bg-white");
    cities_choice.classList.remove("bg-white");

    if(choice == "continents") {continents.classList.remove("hidden"); continents_choice.classList.add("bg-white")};
    if(choice == "countries") {countries.classList.remove("hidden"); countries_choice.classList.add("bg-white")};
    if(choice == "cities") {cities.classList.remove("hidden"); cities_choice.classList.add("bg-white")};
}