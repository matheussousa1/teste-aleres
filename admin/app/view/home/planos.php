<div class="container-fluid bg-gradient p-5 pcoded-main-container">
    <div class="row m-auto text-center w-75 equal">

        <div class="col-md-12 text-center mb-3">
            <h2 class="">Planos</h2>
        </div>

        <div class="col-md-12 text-center mb-3">
            <button type="button" class="btn btn-primary mb-5" data-toggle="modal" data-target="#modal_adicionar">Adicionar</button>
            <div class="table-responsive">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Velocidade</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Super Wi-fi</th>
                            <th scope="col">Instalação</th>
                            <th scope="col">Games</th>
                            <th scope="col">Canais</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="modal_adicionar">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Adicionar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form role="form" id="formCadastrar" autocomplete="off">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Velocidade</label>
                        <input type="text" class="form-control" name="velocidade" id="velocidade" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Valor</label>
                        <input type="text" class="form-control" name="valor" id="valor" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Super Wi-fi</label>
                        <select class="form-control" name="superwifi" id="superwifi">
                            <option value="">Selecione uma Opção</option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Instalação</label>
                        <select class="form-control" name="instalacao" id="instalacao">
                            <option value="">Selecione uma Opção</option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Games</label>
                        <select class="form-control" name="games" id="games">
                            <option value="">Selecione uma Opção</option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Canais</label>
                        <select class="form-control" name="canais" id="canais">
                            <option value="">Selecione uma Opção</option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                    </div>
                    <input type="hidden" value="" class="plano_id">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <button type="button" class="btn btn-secondary btn-salvar" data-dismiss="modal">Fechar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="modal_alterar">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Alterar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form role="form" id="formCadastrarEditar" autocomplete="off">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome-edit" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Velocidade</label>
                        <input type="text" class="form-control" name="velocidade" id="velocidade-edit" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Valor</label>
                        <input type="text" class="form-control" name="valor" id="valor-edit" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Super Wi-fi</label>
                        <select class="form-control" name="superwifi" id="superwifi-edit">
                            <option value="">Selecione uma Opção</option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Instalação</label>
                        <select class="form-control" name="instalacao" id="instalacao-edit">
                            <option value="">Selecione uma Opção</option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Games</label>
                        <select class="form-control" name="games" id="games-edit">
                            <option value="">Selecione uma Opção</option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Canais</label>
                        <select class="form-control" name="canais" id="canais-edit">
                            <option value="">Selecione uma Opção</option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                    </div>
                    <input type="hidden" value="" id="plano_id" class="plano_id">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <button type="button" class="btn btn-secondary btn-salvar" data-dismiss="modal">Fechar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    var api = '<?php echo API; ?>';

    $(document).ready(function() {
        fetchData();

        // adicionar
        $('#formCadastrar').validate({
            rules: {
                nome: {
                    required: true
                },
                velocidade: {
                    required: true
                },
                valor: {
                    required: true
                },
                superwifi: {
                    required: true
                },
                instalacao: {
                    required: true
                },
                games: {
                    required: true
                },
                canais: {
                    required: true
                },
            },
            messages: {
                nome: {
                    required: 'Preencha este campo'
                },
                velocidade: {
                    required: 'Preencha este campo'
                },
                valor: {
                    required: 'Preencha este campo'
                },
                superwifi: {
                    required: 'Preencha este campo'
                },
                instalacao: {
                    required: 'Preencha este campo'
                },
                games: {
                    required: 'Preencha este campo'
                },
                canais: {
                    required: 'Preencha este campo'
                },
            },
            submitHandler: function(form) {
                // desabilitar botão
                $(".btn-salvar").prop('disabled', true);
                $("#carregando").removeClass('hide');

                var plano_id = $(".plano_id").val();
                var nome = $("#nome").val();
                var velocidade = $("#velocidade").val();
                var valor = $("#valor").val();
                var superwifi = $("#superwifi").val();
                var instalacao = $("#instalacao").val();
                var games = $("#games").val();
                var canais = $("#canais").val();

                axios.post(api + 'planos', {
                        nome: nome,
                        velocidade: velocidade,
                        valor: valor,
                        superwifi: superwifi,
                        instalacao: instalacao,
                        games: games,
                        canais: canais,
                    })
                    .then(function(response) {
                        $("#carregando").addClass('hide');
                        swal({
                            title: "Cadastrado com Sucesso",
                            type: "success",
                            showConfirmButton: true,
                        });
                        window.setTimeout(function() {
                            $('#formCadastrar input').val("");
                            swal.close();
                            fetchData();
                            $("#modal_adicionar").modal("hide");
                        }, 2500)
                    })
                    .catch(function(error) {
                        console.log(error);
                    });

                return false;
            }
        });

        // alterar
        $('#formCadastrarEditar').validate({
            rules: {
                nome: {
                    required: true
                },
                velocidade: {
                    required: true
                },
                valor: {
                    required: true
                },
                superwifi: {
                    required: true
                },
                instalacao: {
                    required: true
                },
                games: {
                    required: true
                },
                canais: {
                    required: true
                },
            },
            messages: {
                nome: {
                    required: 'Preencha este campo'
                },
                velocidade: {
                    required: 'Preencha este campo'
                },
                valor: {
                    required: 'Preencha este campo'
                },
                superwifi: {
                    required: 'Preencha este campo'
                },
                instalacao: {
                    required: 'Preencha este campo'
                },
                games: {
                    required: 'Preencha este campo'
                },
                canais: {
                    required: 'Preencha este campo'
                },
            },
            submitHandler: function(form) {
                // desabilitar botão
                $(".btn-salvar").prop('disabled', true);
                $("#carregando").removeClass('hide');

                var plano_id = $(".plano_id").val();
                var nome = $("#nome-edit").val();
                var velocidade = $("#velocidade-edit").val();
                var valor = $("#valor-edit").val();
                var superwifi = $("#superwifi-edit").val();
                var instalacao = $("#instalacao-edit").val();
                var games = $("#games-edit").val();
                var canais = $("#canais-edit").val();

                axios.put(api + 'planos/' + plano_id, {
                        nome: nome,
                        velocidade: velocidade,
                        valor: valor,
                        superwifi: superwifi,
                        instalacao: instalacao,
                        games: games,
                        canais: canais,
                    })
                    .then(function(response) {
                        $("#carregando").addClass('hide');
                        swal({
                            title: "Alterado com Sucesso",
                            type: "success",
                            showConfirmButton: true,
                        });
                        window.setTimeout(function() {
                            $('#formCadastrarEditar input').val("");
                            swal.close();
                            fetchData();
                            $("#modal_alterar").modal("hide");
                        }, 2500)
                    })
                    .catch(function(error) {
                        console.log(error);
                    });

                return false;
            }
        });
    });

    function modalAlterar(id) {
        $("#modal_alterar").modal("show");
        $(".plano_id").val(id);
        axios.get(api + "planos/" + id)
            .then((response) => {
                $("#nome-edit").val(response.data.nome);
                $("#velocidade-edit").val(response.data.velocidade);
                $("#valor-edit").val(response.data.valor);
                $("#superwifi-edit").val(response.data.superwifi);
                $("#instalacao-edit").val(response.data.instalacao);
                $("#games-edit").val(response.data.games);
                $("#canais-edit").val(response.data.canais);
            })
            .catch((err) => {
                output.innerHTML += "The error is - " + err + "<br/>";
            })
    }

    function deletar(id) {
        swal({
            title: "Deletar",
            text: "Deletar ?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Deletar",
            closeOnConfirm: true
        }).then(function() {
            axios.delete(api + 'planos/' + id)
                    .then(function(response) {
                        $("#carregando").addClass('hide');
                        swal({
                            title: "Deletado com Sucesso",
                            type: "success",
                            showConfirmButton: true,
                        });
                        window.setTimeout(function() {
                            swal.close();
                            fetchData();
                        }, 2500)
                    })
                    .catch(function(error) {
                        console.log(error);
                    });
            return false;
        });
    }

    function fetchData() {
        axios.get(api + "planos")
            .then((response) => {
                let result = '';
                response.data.forEach(element => {
                    let superwifi = (element.superwifi == 1) ? 'SIM' : 'Não';
                    let instalacao = (element.instalacao == 1) ? 'SIM' : 'Não';
                    let games = (element.games == 1) ? 'SIM' : 'Não';
                    let canais = (element.canais == 1) ? 'SIM' : 'Não';

                    let button = '<div class="btn-group mb-2 mr-2">'
                    button += '<button class="btn  btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ação</button>'
                    button += '<div class="dropdown-menu">'
                    button += '<a class="dropdown-item" onclick="modalAlterar(' + element.id + ')">Alterar</a>'
                    button += '<a class="dropdown-item" onclick="deletar(' + element.id + ')">Deletar</a>'
                    button += '</div>'
                    button += '</div>';

                    result += '<tr class="">';
                    result += '<td>' + element.nome + '</td>';
                    result += '<td>' + element.velocidade + '</td>';
                    result += '<td>R$ ' + element.valor + '</td>';
                    result += '<td>' + superwifi + '</td>';
                    result += '<td>' + instalacao + '</td>';
                    result += '<td>' + games + '</td>';
                    result += '<td>' + canais + '</td>';
                    result += '<td>' + button + '</td>';
                    result += '</tr>';
                });

                $("#tbody").html(result);
            })
            .catch((err) => {
                output.innerHTML += "The error is - " + err + "<br/>";
            })
    }
</script>