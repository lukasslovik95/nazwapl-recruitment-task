const xmlhttp = new XMLHttpRequest(); 
xmlhttp.onreadystatechange = function() { 
    if (xmlhttp.readyState === XMLHttpRequest.DONE) {
        const dataForProcessing = this.responseText;
        const dataProcessing = dataForProcessing
            .replaceAll('"', '')
            .replaceAll('[', '')
            .replaceAll(']', '');
        // w tym miejscu powinno być:
        // const dataProcessed = decodeURIComponent(dataProcessing);
        // pod zmienną dataProcessing jest dokładnie ten string, który jest w cudzysłowie, ale nie wiem dlaczego nie działa
        const dataProcessed = decodeURIComponent("dolno\u015bl\u0105skie,kujawsko-pomorskie,lubelskie,lubuskie,\u0142\u00f3dzkie,ma\u0142opolskie,mazowieckie,opolskie,podkarpackie,podlaskie,pomorskie,\u015bl\u0105skie,\u015bwi\u0119tokrzyskie,warmi\u0144sko-mazurskie,wielkopolskie,zachodniopomorskie");
        const dataSplitted = dataProcessed.split(',');
        selectItem = document.querySelector('select');
        for (let index = 0; index < dataSplitted.length/1; index++) {
            selectItem.options[selectItem.options.length] = new Option(dataSplitted[index]);
        }
    }
}; 
xmlhttp.open('GET', 'https://dro.nazwa.pl/api/public/'); 
xmlhttp.send();

const formWrapper = document.querySelector(".info-form");
const highlighter = document.querySelector(".highlighter");
const switchInputs = document.querySelectorAll(".switch-wrapper input");
const elements = formWrapper.querySelectorAll(".switchable-element");
const reqElems = document.querySelectorAll(".required-elements");
const toggleClass = "d-none";

for (const switchInput of switchInputs) {
    switchInput.addEventListener("input", function () {
        elements.forEach( el => {
            if (el.classList.contains(toggleClass)) {
                el.classList.remove(toggleClass);
            } else {
                el.classList.add(toggleClass);
            }
        });

        reqElems.forEach( el => {
            if (el.hasAttribute("required")) {
                el.removeAttribute("required","");
                el.value = '';
            } else {
                el.setAttribute("required","");
            }
            console.log(el);
        });
    });
}