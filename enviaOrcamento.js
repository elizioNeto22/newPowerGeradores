$(document).ready(() => {

   validation = () =>{
    if (grecaptcha.getResponse() == "") {
      showAlert("Marque a opção Não sou um robô.");
      return false;
    }
    return true;
  }

  permissionSubmit = true;

  formValues = {
    nome:"",
    email:"",
    telefone:"",
    servico:"",
    mensagem:""
  }

  /********** AÇÕES QUANDO OS MODAIS FECHAM ***********/
  $('#form-confirm-othuki-modal').on('hidden.bs.modal', function () {
    permissionSubmit = true;
  })

  $('#form-confirm-othuki-modal-send').on('hidden.bs.modal', function () {
    $("#loading-response-primary").css('display', 'block');
    $('#form-confirm-othuki-modal-response').modal('show');
  })

  $('#form-confirm-othuki-modal-response').on('hidden.bs.modal', function () {
      $("#btn-close-response").css('display', 'none');
      $("#loading-response-primary").css('display', 'block');
      $("#loading-response-success").css('display', 'none');
      $("#loading-response-danger").css('display', 'none');
  })

  /********** MÉTODOS DISPARADOS PELOS BOTÕES ***********/
  showAlert = (text) => {
    $("p#confirm-text-error").text(text);
    $('#form-confirm-othuki-modal').modal('show');
  }

  showAlertSend = () => {
    $('#form-confirm-othuki-modal-send').modal('show');
  }

  emailSender = () => {
    
    $('#form-confirm-othuki-modal-send').modal('hide');

    $.ajax({
      url: "envia-orcamento.php",
      dataType: "json",
      method:"POST",
      crossDomain: true,
      data: formValues,
      async: true,
      success: (res) => {

        resJson = res;

        if(resJson.response) {
          $("#btn-close-response").css('display', 'block');
          $("#loading-response-primary").css('display', 'none');
          $("#loading-response-success").css('display', 'block');
        } else {
          $("#btn-close-response").css('display', 'block');
          $("#loading-response-primary").css('display', 'none');
          $("#loading-response-danger").css('display', 'block');
        }
      }, error: () => {
        $("#btn-close-response").css('display', 'block');
        $("#loading-response-primary").css('display', 'none');
        $("#loading-response-danger").css('display', 'block');
      }
    });
  }

  validate = (value, type) => {
    if(permissionSubmit) {

      valueSize = value.length;

      if(type == 'nome')
      {   
        if(valueSize <= 0) {
          permissionSubmit = false;
          showAlert("O campo Nome está vazio");
        }
      }

      else if(type == 'email') {
  
        if(valueSize <= 0) {
          permissionSubmit = false;
          showAlert("O campo e-mail está vazio");
        }
        else if(value.indexOf("@") === -1 && value.indexOf(".") === -1)
        {
          permissionSubmit = false;
          showAlert("O email é inválido. Informe um e-mail válido.");
        }
      }

      if(type == 'telefone')
      {   
        if(valueSize <= 0) {
          permissionSubmit = false;
          showAlert("O campo Telefone está vazio");
        }
      }

      if(type == 'servico')
      {   
        if(valueSize <= 0) {
          permissionSubmit = false;
          showAlert("O campo Serviço está vazio");
        }
      }

      if(type == 'mensagem')
      {   
        if(valueSize <= 0) {
          permissionSubmit = false;
          showAlert("O campo Mensagem está vazio");
        } else if(valueSize > 1000) {
          permissionSubmit = false;
          showAlert("O campo Mensagem não pode ter mais de 1000 caracteres.");
        }
      }
    }
  }

  //Form de contato com resposta
  $("#form-confirm-othuki").submit((e) => {
    //trava o form
    event.preventDefault();

    recaptchaOK = validation();

    if( !recaptchaOK ) {
      permissionSubmit = false;
      return;
    }
    
    //inputs do formulário
    var fields = e.currentTarget;

    for (const key in fields) {

      //finaliza o código quando encontrar o submit
      if(fields[key].type == "submit") break;

      if (fields.hasOwnProperty(key)) {
        
        const elementName = fields[key].name;
        const elementValue = fields[key].value;

        switch(elementName) {
          case "nome" : validate(elementValue, "nome"); formValues.nome = elementValue; break;
          case "email" : validate(elementValue, "email"); formValues.email = elementValue; break;
          case "telefone" : validate(elementValue, "telefone"); formValues.telefone = elementValue; break;
          case "servico" : validate(elementValue, "servico"); formValues.servico = elementValue; break;
          case "mensagem" : validate(elementValue, "mensagem"); formValues.mensagem = elementValue; break;
        }
      }
    }

    if(permissionSubmit === true) {
      showAlertSend();
    }

  });

});