function recuperar () {
  
  var email = document.getElementById ("emailRecuperar");

  if (email.value == "" || email.value.length < 6 || email.value.indexOf ("@") <= 0 || email.value.lastIndexOf (".") < email.value.indexOf ("@")) {
    alert ("Informe um email válido!");
    email.value = "";
    email.focus ();
    return false;
  }

  $.ajax ({
    method: "POST",
    url: "../recuperacaoSenha.php",
    async: true,
    data: { email: email.value}
  }).done ( 
    () => { alert ('Um email com a sua senha foi enviado para o email cadastrado!'); }
  )

  $(".modal").modal('hide');
}