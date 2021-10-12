@extends('header')
@section('titulo','Hospedes')

@section('body')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <div class="card mb-4">

                    <div class="form-group">
                        <div class="row">
                            <div class="col-4">
                                <input type="search" class="form-control">
                            </div>
                            <div class="col-4">
                                <button class="btn btn-secondary" role="button" onclick="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-search"
                                         viewBox="0 0 16 16">
                                        <path
                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                    </svg>
                                    Buscar
                                </button>
                                <button class="btn btn-secondary" role="button" onclick="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-funnel" viewBox="0 0 16 16">
                                        <path
                                            d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2h-11z"/>
                                    </svg>

                                </button>
                            </div>
                            <div class="col-4" style="text-align: right;">
                                <button type="button" class="btn btn-primary" onclick="novoHospede()">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-plus-circle" viewBox="0 0 16 16">
                                        <path
                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path
                                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                    </svg>
                                    Novo hospede
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card text-center">
                        <div class="card-header">
                            <span>
                                <h4>Wesley Freitas</h4>
                            </span>
                            <ul class="nav nav-tabs card-header-tabs" style="width:400px ">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="true" href="#">Informaçoes do hospede</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Historico de estadias</a>
                                </li>
                            </ul>

                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover" id="tabelaHospede">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nome</th>
                                    <th>RG</th>
                                    <th>Email</th>
                                    <th>Contato</th>
                                    <th>UF</th>
                                    <th>Ações</th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                            <!-- Aqui vem o formulário que cadastra os hospedes -->
                            <div class="modal" tabindex="-1" role="dialog" id="dlgHospede">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="form-horizontal" id="formHospede">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Novo Hospede</h5>
                                            </div>
                                            <div class="modal-body">

                                                <input type="hidden" id="id" class="form-control">
                                                <div class="form-group">
                                                    <label for="nomeHospede" class="control-label">Nome do
                                                        Hospede</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="nomeHospede">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="rgHospede" class="control-label">RG</label>
                                                    <div class="input-group">
                                                        <input type="number" class="form-control" id="rgHospede">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="cpfHospede" class="control-label">CPF</label>
                                                    <div class="input-group">
                                                        <input type="number" class="form-control" id="cpfHospede"
                                                        >
                                                    </div>

                                                </div>
                                                <div class="form-group">
                                                    <label for="emailHospede" class="control-label">E-mail</label>
                                                    <div class="input-group">
                                                        <input type="email" class="form-control" id="emailHospede"
                                                        >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nascimentoHospede"
                                                           class="control-label">Nascimento</label>
                                                    <div class="input-group">
                                                        <input type="date" class="form-control" id="nascimentoHospede"
                                                        >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="foneHospede" class="control-label">Telefone</label>
                                                    <div class="input-group">
                                                        <input type="tel" class="form-control" id="foneHospede"
                                                        >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="ufHospede" class="control-label">UF</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="ufHospede"
                                                        >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="cityHospede" class="control-label">Cidade</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="cityHospede"
                                                        >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="streetHospede" class="control-label">Rua</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="streetHospede"
                                                        >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="bairroHospede" class="control-label">Bairro</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="bairroHospede"
                                                        >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="cepHospede" class="control-label">CEP</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="cepHospede"
                                                        >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="compHospede" class="control-label">Complemento</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="compHospede"
                                                        >
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Salvar</button>
                                                <button type="cancel" class="btn btn-secondary" data-dismiss="modal">
                                                    Cancelar
                                                </button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </main>
    </div>
@endsection
@section('javascript')
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            }
        });

        function novoHospede() {
            $('#id').val('');
            $('#nomeHospede').val('');
            $('#rgHospede').val('');
            $('#cpfHospede').val('');
            $('#emailHospede').val('');
            $('#nascimentoHospede').val('');
            $('#foneHospede').val('');
            $('#ufHospede').val('');
            $('#cityHospede').val('');
            $('#streetHospede').val('');
            $('#bairroHospede').val('');
            $('#cepHospede').val('');
            $('#compHospede').val('');
            $('#dlgHospede').modal('show');
        }

        function montarLinha(p) {
            var linha = "<tr>" +
                "<td>" + p.id + "</td>" +
                "<td>" + p.nome + "</td>" +
                "<td>" + p.rg + "</td>" +
                "<td>" + p.email + "</td>" +
                "<td>" + p.telefone + "</td>" +
                "<td>" + p.estado + "</td>" +
                "<td>" +
                '<button class="btn btn-xs btn-primary" onclick="editar(' + p.id + ')"> Editar </button> ' +
                '<button class="btn btn-xs btn-danger" onclick="remover(' + p.id + ')"> Apagar </button> ' +
                "</td>" +
                "</tr>";
            return linha;
        }

        function editar(id) {
            $.getJSON('/api/hospedes/' + id, function (data) {
                console.log(data);
                $('#id').val(data.id);
                $('#nomeHospede').val(data.nome);
                $('#rgHospede').val(data.rg);
                $('#cpfHospede').val(data.cpf);
                $('#emailHospede').val(data.email);
                $('#nascimentoHospede').val(data.nascimento);
                $('#foneHospede').val(data.telefone);
                $('#ufHospede').val(data.estado);
                $('#cityHospede').val(data.cidade);
                $('#streetHospede').val(data.rua);
                $('#bairroHospede').val(data.bairro);
                $('#cepHospede').val(data.cep);
                $('#compHospede').val(data.complemento);
                $('#dlgHospede').modal('show');
            });
        }

        function remover(id) {
            $.ajax({
                type: "DELETE",
                url: "/api/hospedes/" + id,
                context: this,
                success: function () {
                    console.log('Apagou OK');
                    linhas = $("#tabelaHospede>tbody>tr");
                    e = linhas.filter(function (i, elemento) {
                        return elemento.cells[0].textContent == id;
                    });
                    if (e)
                        e.remove();
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }

        function carregarHospedes() {
            $.getJSON('/api/hospedes', function (produtos) {
                for (i = 0; i < produtos.length; i++) {
                    linha = montarLinha(produtos[i]);
                    $('#tabelaHospede>tbody').append(linha);
                }
            });
        }

        function criarHospedes() {
            prod = {
                nome: $("#nomeHospede").val(),
                rg: $("#rgHospede").val(),
                cpf: $("#cpfHospede").val(),
                email: $("#emailHospede").val(),
                nascimento: $("#nascimentoHospede").val(),
                telefone: $("#foneHospede").val(),
                estado: $("#ufHospede").val(),
                cidade: $("#cityHospede").val(),
                rua: $("#streetHospede").val(),
                bairro: $("#bairroHospede").val(),
                cep: $("#cepHospede").val(),
                complemento: $("#compHospede").val()
            };
            $.post("api/hospedes", prod, function (data) {
                console.log(prod);
                produto = JSON.parse(data);
                linha = montarLinha(produto);
                $('#tabelaHospede>tbody').append(linha);
            });
        }

        function salvarHospedes() {
            prod = {
                id: $("#id").val(),
                nome: $("#nomeHospede").val(),
                rg: $("#rgHospede").val(),
                cpf: $("#cpfHospede").val(),
                email: $("#emailHospede").val(),
                nascimento: $("#nascimentoHospede").val(),
                telefone: $("#foneHospede").val(),
                estado: $("#ufHospede").val(),
                cidade: $("#cityHospede").val(),
                rua: $("#streetHospede").val(),
                bairro: $("#bairroHospede").val(),
                cep: $("#cepHospede").val(),
                complemento: $("#compHospede").val(),
            };
            $.ajax({
                type: "PUT",
                url: "/api/hospedes/" + prod.id,
                context: this,
                data: prod,
                success: function (data) {
                    prod: JSON.parse(data);
                    linhas = $('#tabelaHospede>tbody>tr');
                    e = linhas.filter(function (i, e) {
                        return (e.cells[0].textContent == prod.id);
                    });
                    if (e) {
                        e[0].cells[0].textContent = prod.id;
                        e[0].cells[1].textContent = prod.nome;
                        e[0].cells[2].textContent = prod.rg;
                        e[0].cells[3].textContent = prod.cpf;
                        e[0].cells[4].textContent = prod.email;
                        e[0].cells[5].textContent = prod.nascimento;
                        e[0].cells[6].textContent = prod.telefone;
                        e[0].cells[7].textContent = prod.estado;
                        e[0].cells[8].textContent = prod.cidade;
                        e[0].cells[9].textContent = prod.rua;
                        e[0].cells[10].textContent = prod.bairro;
                        e[0].cells[11].textContent = prod.cep;
                        e[0].cells[12].textContent = prod.complemento;
                    }
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }

        $('#formHospede').submit(function (event) {
            event.preventDefault();
            if ($("#id").val() != '')
                salvarHospedes();
            else
                criarHospedes();

            $("#dlgHospede").modal('hide');
        });

        $(function () {
            carregarHospedes();
        })
    </script>
@endsection
