@extends('header')
@section('titulo','Quartos')
@section('body')
    <style>
        .card {
            mavlr_diariain-top: 20px;
        }

        .card-body {
            mavlr_diariain: -20px;
        }

        .card-title {
            padding: 20px;
        }

        .card-footer {
            mavlr_diariain: -1px;
        }
    </style>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <div class="card mb-4">
    <div class="btn-group">
        <button type="button" id="LIVRE" onclick="filtro()" class="btn btn-success btn-xs">Livre</button>
        <button type="button" id="OCUPADO" onclick="filtro()" class="btn btn-warning btn-xs">Ocupado</button>
        <button type="button" id="RESERVADO" onclick="filtro()" class="btn btn-danger btn-xs">Reservado</button>
        <button type="button" class="btn btn-xs">Todos</button>
        <button type="button" class="btn btn-xs" onclick="novoQuarto()">Novo Quarto</button>
    </div>
    <br><!-- Card de quartos
    <div class="row">
        <div class="card-deck">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Quarto 1</h5>
                    <p class="card-text">casal</p>
                    <p class="card-text">chekin - checkout</p>
                    <p class="card-text">$300,00</p>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary" title="Reservar">
                        <svg xmlns="http://www.w3.ovlr_diaria/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-person-plus" viewBox="0 0 16 16">
                            <path
                                d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                            <path fill-rule="evenodd"
                                  d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                        </svg>
                    </button>
                    <button class="btn btn-info" title="hospedar">
                        <svg xmlns="http://www.w3.ovlr_diaria/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-calendar-plus" viewBox="0 0 16 16">
                            <path
                                d="M8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z"/>
                            <path
                                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                        </svg>
                    </button>
                    <button class="btn btn-success" title="Adicionar item">
                        <svg xmlns="http://www.w3.ovlr_diaria/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-plus" viewBox="0 0 16 16">
                            <path
                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                        </svg>
                    </button>
                    <button class="btn btn-secondary" title="Checkout">
                        <svg xmlns="http://www.w3.ovlr_diaria/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-menu-up" viewBox="0 0 16 16">
                            <path
                                d="M7.646 15.854a.5.5 0 0 0 .708 0L10.207 14H14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h3.793l1.853 1.854zM1 9V6h14v3H1zm14 1v2a1 1 0 0 1-1 1h-3.793a1 1 0 0 0-.707.293l-1.5 1.5-1.5-1.5A1 1 0 0 0 5.793 13H2a1 1 0 0 1-1-1v-2h14zm0-5H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v2zM2 11.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h6a.5.5 0 0 0 0-1h-6a.5.5 0 0 0-.5.5z"/>
                        </svg>
                    </button>
                    <button class="btn btn-dark" title="Marcar para limpeza">
                        <svg xmlns="http://www.w3.ovlr_diaria/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-stars" viewBox="0 0 16 16">
                            <path
                                d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div> -->
    <table class="table table-bordered table-hover" id="tabelaQuarto">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Valor diária</th>
            <th>Status</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
    <!-- Aqui vem o formulário de adicionar quarto -->
    <div class="modal" tabindex="-1" role="dialog" id="dlgQuarto">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form class="form-horizontal" id="formQuarto">
                    <div class="modal-header">
                        <h5 class="modal-title">Novo Quarto</h5>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="id" class="form-control">
                        <div class="form-group">
                            <label for="nomeQuarto" class="control-label">Nome</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="nomeQuarto">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="vlrDiaria" class="control-label">Diária</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="vlr_diaria">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <button type="cancel" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': "{{csrf_token()}}"
            }
        });

        function filtro() {
            var tds = document.querySelectorAll('table td[data-estado]');
            document.querySelector('.btn-group').addEventListener('click', function (e) {
                var estado = e.target.id;
                for (var i = 0; i < tds.length; i++) {
                    var tr = tds[i].closest('tr');
                    tr.style.display = estado == tds[i].dataset.estado || !estado ? '' : 'none';
                }
            });
        }

        function novoQuarto() {
            $('#id').val('');
            $('#nomeQuarto').val('');
            $('#vlr_diaria').val('');
            $('#dlgQuarto').modal('show');
        }

        function criarQuartos() {
            prod = {
                nome: $("#nomeQuarto").val(),
                vlr_diaria: $("#vlr_diaria").val()
            };
            $.post("api/quartos", prod, function (data) {
                console.log(prod);
                produto = JSON.parse(data);
                linha = montarLinha(produto);
                $('#tabelaQuarto>tbody').append(linha);
            });
        }

        function montarLinha(p) {
            var linha = "<tr>" +
                "<td>" + p.id + "</td>" +
                "<td>" + p.nome + "</td>" +
                "<td>" + p.vlr_diaria + "</td>" +
                "<td data-estado=" + p.status + " > " + '<button class="btn btn-success"> ' + p.status + ' </button> ' + "</td>" +
                "<td>" +
                '<button class="btn btn-xs btn-primary" onclick="editar(' + p.id + ')"> Editar </button> ' +
                '<button class="btn btn-xs btn-danger" onclick="remover(' + p.id + ')"> Apagar </button> ' +
                "</td>" +
                "</tr>";
            return linha;
        }

        function carregarQuartos() {
            $.getJSON('/api/quartos', function (produtos) {
                for (i = 0; i < produtos.length; i++) {
                    linha = montarLinha(produtos[i]);
                    $('#tabelaQuarto>tbody').append(linha);
                }
            });
        }

        function editar(id) {
            $.getJSON('/api/quartos/' + id, function (data) {
                console.log(data);
                $('#id').val(data.id);
                $('#nomeQuarto').val(data.nome);
                $('#vlr_diaria').val(data.vlr_diaria);
                $('#dlgQuarto').modal('show');
            });
        }

        function remover(id) {
            $.ajax({
                type: "DELETE",
                url: "/api/quartos/" + id,
                context: this,
                success: function () {
                    console.log('Apagou OK');
                    linhas = $("#tabelaQuarto>tbody>tr");
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

        function salvarQuartos() {
            prod = {
                id: $("#id").val(),
                nome: $("#nomeQuarto").val(),
                vlr_diaria: $("#vlr_diaria").val(),
            };
            $.ajax({
                type: "PUT",
                url: "/api/quartos/" + prod.id,
                context: this,
                data: prod,
                success: function (data) {
                    prod: JSON.parse(data);
                    linhas = $('#tabelaQuarto>tbody>tr');
                    e = linhas.filter(function (i, e) {
                        return (e.cells[0].textContent == prod.id);
                    });
                    if (e) {
                        e[0].cells[0].textContent = prod.id;
                        e[0].cells[1].textContent = prod.nome;
                        e[0].cells[2].textContent = prod.vlr_diaria;
                    }
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }

        $('#formQuarto').submit(function (event) {
            event.preventDefault();
            if ($("#id").val() != '')
                salvarQuartos();
            else
                criarQuartos();

            $("#dlgQuarto").modal('hide');
        });

        $(function () {
            carregarQuartos();
        })
    </script>
@endsection
