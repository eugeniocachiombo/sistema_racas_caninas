let form = document.querySelector(".needs-validation");
let select = document.querySelectorAll("select");
let input_submit = document.querySelector("button[type='submit']");
let spinner = document.querySelector("#spinner");
let texto_indentificar = document.querySelector("#texto_indentificar");
spinner.style = "display: none";
texto_indentificar.innerText = "Indentificar";

input_submit.addEventListener("click", () => {
    spinner.style = "display: iniline; color: white";
    texto_indentificar.innerText = "Carregando...";
    texto_indentificar.style = "color: white";
    setTimeout(() => {
        ValidarComClick();
        spinner.style = "display: none";
        texto_indentificar.innerText = "Indentificar";
    }, 2000);
});

function ValidarComClick() {

    select.forEach(element => {
        if (element.checkValidity()) {
            element.classList.add("is-valid");
        } else {
            element.classList.add("is-invalid");
        }
    });

    form.classList.add("was-validated");
}