function recuperar () {

    var email = document.getElementById ("emailRecuperar");

if (email.value == "" || email.value.length < 6 || email.value.indexOf ("@") <= 0 || 
  email.value.lastIndexOf (".") < email.value.indexOf ("@")) {
    alert ("Informe um email válido!");
    email.value = "";
    email.focus ();
    return false;
  }

    alert(email.value);
    $(".modal").modal('hide');
}