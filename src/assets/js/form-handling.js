const body = document.querySelector("body");
const background = document.getElementById("background");

// continent form elements 
const continent_form = document.getElementById("continent-form");
const add_continent_button = document.getElementById("add-continent-button");
const cancel_add_continent = document.getElementById("cancel_add_continent");

add_continent_button.onclick = () => {
    body.classList.add("my-body-noscroll-class");
    background.classList.add("blur");
    continent_form.classList.add("flex");
    continent_form.classList.remove("hidden");
};
function close_popup() {
    body.classList.remove("my-body-noscroll-class");
    background.classList.remove("blur");
    continent_form.classList.remove("flex");
    continent_form.classList.add("hidden"); 
}
cancel_add_continent.onclick = () => {
    close_popup();
}
document.addEventListener("click", (e) => {
    if(e.target.id == "continent-form") close_popup();
})