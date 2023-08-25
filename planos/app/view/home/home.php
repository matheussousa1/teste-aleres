<div class="container-fluid bg-gradient p-5 pcoded-main-container">
    <div class="row m-auto text-center w-75 equal">

        <div class="col-md-12 text-center mb-3">
            <h2 class="">Nossas ofertas</h2>
        </div>
    </div>
    
    <div class="row m-auto text-center w-75 equal owl-carousel owl-theme" id="show-plano">

        

    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="modalId">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Contrate já</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form role="form" id="formCadastrar" autocomplete="off">
        <div class="modal-body">
            <p>Olá! Preencha os campos abaixo</p>
            <div class="mb-3">
            <label for="" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome"  placeholder="Nome">
            </div>
            <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email"  placeholder="Email">
            </div>
            <div class="mb-3">
            <label for="" class="form-label">Contato</label>
            <input type="text" class="form-control contato" name="contato" id="contato"  placeholder="Contato">
            </div>
            <input type="hidden" value="" id="plano_id">
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Enviar</button>
            <button type="button" class="btn btn-secondary btn-salvar" data-dismiss="modal">Fechar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- carregando -->
<div id="carregando" class="hide">
  <div id="img-load" class="img-load">
    <div class="spinner-border text-danger" style="width: 5rem; height: 5rem;" role="status">
      <span class="sr-only">Loading...</span>
    </div>
    <h4 class="text-load">Processando...</h4>
  </div>
  <div id="full-screen" class="full-screen"></div>
</div>
<!-- fim carregando -->

<script>
    var api = '<?php echo API; ?>';
    $(document).ready(function() {
        fetchData();

        //mascara digito 9
        var maskBehavior = function (val) {
            return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
        },
        options = { onKeyPress: function(val, e, field, options) {
                field.mask(maskBehavior.apply({}, arguments), options);
            }
        };

        $('.contato').mask(maskBehavior, options);

        $('#formCadastrar').validate({
            rules: {
                nome : { required: true},
                email : { required: true},
                contato : { required: true},
            },
            messages: {
                nome : { required: 'Preencha este campo' },
                email : { required: 'Preencha este campo' },
                contato : { required: 'Preencha este campo' },
            },
            submitHandler: function( form ){
                // desabilitar botão
                $(".btn-salvar").prop('disabled', true);
                $("#carregando").removeClass('hide');
                var plano_id = $("#plano_id").val();
                var nome = $("#nome").val();
                var email = $("#email").val();
                var contato = $("#contato").val();
                axios.post(api+'pedidos', {
                    plano_id: plano_id,
                    nome: nome,
                    email: email,
                    contato: contato
                })
                .then(function (response) {
                    $("#carregando").addClass('hide');
                    swal({   
                        title: "Cadastrado com Sucesso",  
                        type: "success",   
                        showConfirmButton: true,
                    });
                    window.setTimeout(function(){
                        $('#formCadastrar input').val(""); 
                        swal.close();
                        $("#modalId").modal("hide");
                    } ,2500)
                })
                .catch(function (error) {
                    console.log(error);
                });
            
                return false;
            }
        });
    });

    function modalCadastro(id){
        $("#modalId").modal("show");
        $("#plano_id").val(id);
    }

    function fetchData() {
        axios.get(api+"planos") 
        .then((response) => {
            let planos = '';
            response.data.forEach(element => {
                let servicos = '';
                // servicos
                if(element.superwifi == 1){
                    servicos += '<li><b><i class="fas fa-wifi"></i> </b>Super Wi-fi 6</li>';
                }

                if(element.instalacao == 1){
                    servicos += '<li><b><i class="fas fa-tools"></i></b> Instalação grátis</li>';
                }

                if(element.games == 1){
                    servicos += '<li><b><i class="fas fa-gamepad"></i></b> Games</li>';
                }

                if(element.canais == 1){
                    servicos += '<li><b><i class="fas fa-tv"></i></b> Canal de Filmes</li>';
                }

                planos += '<div class="col-md-12 princing-item green mt-3">';
                planos += '<div class="pricing-divider ">';
                planos +=     '<h3 class="text-light">'+element.nome+'</h3>';
                planos +=     '<h4 class="my-0 display-3 text-light font-weight-normal mb-3">'+element.velocidade+'</h4>';
                planos +=     '<h4 class="my-0 display-4 text-light font-weight-normal mb-3"><span class="h3">R$</span> '+element.valor.toLocaleString('pt-br', {minimumFractionDigits: 2})+' <span class="h5">/mês</span></h4>';
                planos +=     '<svg class="pricing-divider-img" enable-background="new 0 0 300 100" height="100px" id="Layer_1" preserveAspectRatio="none" version="1.1" viewBox="0 0 300 100" width="300px" x="0px"'; planos += 'xml:space="preserve" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" y="0px">';
                planos +=         '<path class="deco-layer deco-layer--1" d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729';
                planos += 'c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" fill="#FFFFFF" opacity="0.6"></path>';
                planos +=         '<path class="deco-layer deco-layer--2" d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729';
                planos += 'c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" fill="#FFFFFF" opacity="0.6"></path>';
                planos +=         '<path class="deco-layer deco-layer--3" d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716';
                planos += 'H42.401L43.415,98.342z" fill="#FFFFFF" opacity="0.7"></path>';
                planos +=         '<path class="deco-layer deco-layer--4" d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428';
                planos += 'c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" fill="#FFFFFF"></path>';
                planos +=     '</svg>';
                planos += '</div>';
                planos += '<div class="card-body bg-white mt-0 shadow">';
                planos +=     '<ul class="list-unstyled mb-5 position-relative">';
                planos +=         servicos;
                planos +=     '</ul>';
                planos +=     '<button type="button" class="btn btn-lg btn-block  btn-custom " onclick="modalCadastro('+element.id+')">Contrate já</button>';
                planos += '</div>';
                planos += '</div>';
            });

            $("#show-plano").html(planos);

            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 3
                    }
                }
            });
        })
        .catch((err) => {
            output.innerHTML += "The error is - " + err + "<br/>";
        })
    }
</script>