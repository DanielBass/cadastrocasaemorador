// incio cadastro casa
$(document).ready(function(){

  function alertSucesso(){
          Swal.fire({
            title: "Sucesso!",
            text: "Casa Cadastrada com Sucesso",
            icon: "success"
          });
        };

  function alertErroDualName(){
          Swal.fire({
            title: "erro!",
            text: "Já existem casa com esse nome",
            icon: "error"
          });
        };

  $('#cadastrarCasa').click(function(){
    event.preventDefault()
    $.ajax({
      
      url:"../back/cadastrarcasaback.php",
      method:"POST",
      data:$('#formCasa').serialize(),
      dataType:"json",
      success:function(e){
        if (e[0].valor == 'success'){
            alertSucesso(); 
            $("#nome").val("");
            $("#cep").val("");
            $("#rua").val("");
            $("#numero").val("");
            $("#bairro").val("");
            $("#cidade").val("");
            $("#uf").val("");
            $("#qQuarto").val(""); 
        }else if (e[0].valor == 'noName'){
            alert("nome da casa está vazio");
        }else if (e[0].valor == 'dualName'){
          alertErroDualName();
          alert("já existe Casa cadastrada com esse nome"); 
        }else if (e[0].valor == 'errorDataBase') {
            alert("ops, algo não saio como esperado, caso continuem dando erro entrar em contato");
        }

        
        
      
      },

      error: function(e) {
           
          console.log(e)
        
              
           }

    });

  });
// fim cadastro casa

  $('#editarCasa').click(function(){
    event.preventDefault()
    $.ajax({
      
      url:"../back/editarcasaback.php",
      method:"POST",
      data:$('#formCasaEditar').serialize(),
      dataType:"json",
      success:function(e){
        if (e[0].valor == 'success'){
           // alertSucesso(); 
            alert("Edição realizada com Sucesso"); 
        }

        
        
      
      },

      error: function(e) {
           
          alert(e)
        
              
           }

    });

  });
  // fim editar casa
  $('#VoltarCasa').click(function(){
    event.preventDefault()
    window.location.href = '../index.php'
    });

   $('#VoltarECasa').click(function(){
    event.preventDefault()
    window.location.href = 'listacasas.php'
    });

   $('#VoltarEMorador').click(function(){
    event.preventDefault()
    window.location.href = 'listamorador.php'
    });
   $('#VoltarMorador').click(function(){
      event.preventDefault()
      window.location.href = '../index.php'
    });


$('#VoltarCasa').click(function(){
    event.preventDefault()
    window.location.href = '../index.php'
    });

// fim voltar casa


  $('#cadastrarMorador').click(function(){
    event.preventDefault()
    
    $.ajax({
      
      url:"../back/cadastrarmoradorback.php",
      method:"POST",
      data:$('#formMorador').serialize(),
      dataType:"json",
      success:function(e){
        if (e[0].valor == 'success'){
            alertSucesso(); 
            $("#nomeMorador").val("");
            $("#cpfMorador").val("");
            $("#matriculaMorador").val(""); 
        }else if (e[0].valor == 'noName'){
            alert("nome da casa está vazio");
        }else if (e[0].valor == 'dualName'){
          alertErroDualName();
          alert("já existe Casa cadastrada com esse nome"); 
        }else if (e[0].valor == 'errorDataBase') {
            alert("ops, algo não saio como esperado, caso continuem dando erro entrar em contato");
        }

        
        
      
      },

      error: function(e) {
           
          console.log(e)
        
              
           }

    });
  });

  
// fim cadastro morador

  $('#editarMorador').click(function(){
    event.preventDefault()
    $.ajax({
      
      url:"../back/editarmoradorback.php",
      method:"POST",
      data:$('#formMoradorEditar').serialize(),
      dataType:"json",
      success:function(e){
        if (e[0].valor == 'success'){
            
          alert("Edições realizada com sucesso");
             
        }else if (e[0].valor == 'noName'){
            alert("nome da casa está vazio");
        }else if (e[0].valor == 'dualName'){
          alertErroDualName();
          alert("já existe Casa cadastrada com esse nome"); 
        }else if (e[0].valor == 'errorDataBase') {
            alert("ops, algo não saio como esperado, caso continuem dando erro entrar em contato");
        }

        
        
      
      },

      error: function(e) {
           
          console.log(e)
        
              
           }

    });
    });
//final editar morador

}); //final da função maes

