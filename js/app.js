const sign_in_btn = document.querySelector("#sign-in-btn");//iniciar sesion
const sign_up_btn = document.querySelector("#sign-up-btn");//registro
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => { //registro
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => { //iniciar sesión
  container.classList.remove("sign-up-mode");
});
