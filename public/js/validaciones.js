
function llenar(response, index, value) {

  $('#example1').DataTable({
      "destroy": true,
      "columns": [{
              "data": "response.nombre"
          },
          {
              "data": "response.codigo"
          },
          {
              "data": "response.codigo"
          },
          {
              "data": "response.codigo"
          }
      ]
  });
}


function getPaciente(identificacion, urlAction, token) {
  $(".cartprocess").fadeTo(2500, 0.50,
    function () {
      $.ajax({
        url: urlAction,
        type: 'POST',
        dataType: "json",
        data: {
          '_token': token,
          'identificacion': identificacion,
        },
        success: function (Retorno) {
          $('.cartprocess').hide();
        
          var table = $('#example1').DataTable();
          table.clear().draw();
          
          $.each(response, function(index, value){
            llenar(response, index, value);
        });
        },
        error: function () {
          $('.cartprocess').hide();
          alert('A ocurrido error inesperado, vuelve a intentar más tarde.. gracias por su compresion.');
        },
      });
    });
}

function savePaciente(idPaciente, nombres, apellidos, email, telefono, domicilio, identificacion,
  password, genero, name, urlAction, token) {
  $(".cartprocess").fadeTo(2500, 0.50,
    function () {
      $.ajax({
        url: urlAction,
        type: 'POST',
        dataType: "json",
        data: {
          '_token': token,
          'id': idPaciente,
          'name': name,
          'nombres': nombres,
          'apellidos': apellidos,
          'identificacion': identificacion,
          'email': email,
          'telefono': telefono,
          'domicilio': domicilio,
          'password': password,
          'genero': genero
        },
        success: function (Retorno) {
          $('.cartprocess').hide();
          alert(Retorno.MensajeRetorno);
          $("#modal-Paciente").modal('hide');
        },
        error: function () {
          $('.cartprocess').hide();
          alert('A ocurrido error inesperado, vuelve a intentar más tarde.. gracias por su compresion.');
        },
      });
    });
}

function deletePaciente(idPaciente, urlAction, token) {
  $(".cartprocess").fadeTo(2500, 0.50,
    function () {
      $.ajax({
        url: urlAction,
        type: 'POST',
        dataType: "json",
        data: {
          '_token': token,
          'id': idPaciente,
        },
        success: function (Retorno) {
          $('.cartprocess').hide();
          alert(Retorno.MensajeRetorno);
        },
        error: function () {
          $('.cartprocess').hide();
          alert('A ocurrido error inesperado, vuelve a intentar más tarde.. gracias por su compresion.');
        },
      });
    });
}