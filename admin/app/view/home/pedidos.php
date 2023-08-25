<div class="container-fluid bg-gradient p-5 pcoded-main-container">
    <div class="row m-auto text-center w-75 equal">

        <div class="col-md-12 text-center mb-3">
            <h2 class="">Pedidos</h2>
        </div>

        <div class="col-md-12 text-center mb-3">
            <div class="table-responsive">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Contato</th>
                            <th scope="col">Plano</th>
                            <th scope="col">Status</th>
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
                        <label for="" class="form-label">Status</label>
                        <select class="form-control" name="status" id="status-edit">
                            <option value="">Selecione uma Opção</option>
                            <option value="1">DONE</option>
                            <option value="0">IN PROCESS</option>
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

        // alterar
        $('#formCadastrarEditar').validate({
            rules: {
                status: {
                    required: true
                }
            },
            messages: {
                status: {
                    required: 'Preencha este campo'
                }
            },
            submitHandler: function(form) {
                // desabilitar botão
                $(".btn-salvar").prop('disabled', true);
                $("#carregando").removeClass('hide');

                var plano_id = $(".plano_id").val();
                var status = $("#status-edit").val();

                axios.put(api + 'pedidos/' + plano_id, {
                        status: status
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
        axios.get(api + "pedidos/" + id)
            .then((response) => {
                $("#status-edit").val(response.data.status);
            })
            .catch((err) => {
                output.innerHTML += "The error is - " + err + "<br/>";
            })
    }

    function fetchData() {


        axios.get(api + "pedidos")
            .then(async (response) => {
                let result = '';
                let promises = [];

                for (let element of response.data) {
                    promises.push(
                        (async () => {
                            let status = (element.status == 1) ? 'DONE' : 'IN PROCESS';
                            let plano = '';
                            let button = '<div class="btn-group mb-2 mr-2">'
                            button += '<button class="btn  btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ação</button>'
                            button += '<div class="dropdown-menu">'
                            button += '<a class="dropdown-item" onclick="modalAlterar(' + element.id + ')">Alterar</a>'
                            button += '</div>'
                            button += '</div>';

                            try {
                                let planoResponse = await axios.get(api + "planos/" + element.plano_id);
                                plano = planoResponse.data.nome;
                            } catch (err) {
                                output.innerHTML += "The error is - " + err + "<br/>";
                            }

                            result += '<tr class="">';
                            result += '<td>' + element.nome + '</td>';
                            result += '<td>' + element.email + '</td>';
                            result += '<td>R$ ' + element.contato + '</td>';
                            result += '<td>' + plano + '</td>';
                            result += '<td>' + status + '</td>';
                            result += '<td>' + button + '</td>';
                            result += '</tr>';

                            return result;
                        })()
                    );
                }

                await Promise.all(promises);

                $("#tbody").html(result);
            })
            .catch((err) => {
                output.innerHTML += "The error is - " + err + "<br/>";
            });
    }
</script>