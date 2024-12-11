const filter_continent_icon = document.getElementById("filter-continent-icon");
const filter_continent_items = document.getElementById("filter-continent-items");

filter_continent_icon.onclick = () => {
    filter_continent_items.classList.toggle("flex");
    filter_continent_items.classList.toggle("hidden");
}