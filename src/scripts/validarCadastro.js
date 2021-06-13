function validar () {

  var nome = document.getElementById ("txtNome");
  var email = document.getElementById ("txtEmail");
  var senha1 = document.getElementById ("txtSenha");
  var senha2 = document.getElementById ("cSenha");
  var telefone = document.getElementById ("txtTelefone");

  if (nome.value.length < 3 || nome.value == "") {
    alert ("Informe um nome de usuário!");
    nome.value = ""
    nome.focus ();
    return false;
  }

  if (email.value == "" || email.value.length < 6 || email.value.indexOf ("@") <= 0 || 
  email.value.lastIndexOf (".") < email.value.indexOf ("@")) {
    alert ("Informe um email válido!");
    email.value = "";
    email.focus ();
    return false;
  }

  if (senha1.value == "" || senha1.value.length < 8 || senha2.value == "" || senha2.value.length < 8) {
    alert ("É necessário informar uma senha com no minímo 8 caracteres!");
    senha1.value = "";
    senha2.value = "";
    senha1.focus ();
    return false;
  }

  if (senha1.value != senha2.value) {
    alert ("As duas senhas não combinam!");
    senha1.value = "";
    senha2.value = "";
    senha1.focus ();
    return false;
  }

}