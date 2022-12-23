// clases e id desde HTML

let id = (id) => document.getElementById(id);

let classes = (classes) => document.getElementsByClassName(classes);

let username = id("username"),
  email = id("email"),
  password = id("password"),
  form = id("form"),
  errorMsg = classes("error"),
  successIcon = classes("success-icon"),
  failureIcon = classes("failure-icon");

  // Evento Listener
form.addEventListener("submit", (e) => {
  e.preventDefault();

  engine(username, 0, "El nombre de usuario no puede estar en blanco");
  engine(email, 1, "El correo electrónico no puede estar en blanco");
  engine(password, 2, "La contraseña no puede estar en blanco");
});

// Función que hará todos los trabajos

let engine = (id, serial, message) => {
  if (id.value.trim() === "") {
    errorMsg[serial].innerHTML = message;
    id.style.border = "2px solid orange";

    // iconos
    failureIcon[serial].style.opacity = "1";
    successIcon[serial].style.opacity = "0";
  } else {
    errorMsg[serial].innerHTML = "";
    id.style.border = "2px solid green";

    failureIcon[serial].style.opacity = "0";
    successIcon[serial].style.opacity = "1";
  }
};