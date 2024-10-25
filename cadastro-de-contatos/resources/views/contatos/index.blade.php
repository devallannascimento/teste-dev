
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Contatos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="{{asset('js/contatos.js')}}"></script>
</head>
</head>
<body >
    <section class="container">
        <h1 class="text-center mt-5">Lista de Contatos</h1>

        @if (session('success'))
                <div class="alert alert-success my-3" role="alert">
                    {{ session('success') }}
                </div>
        @endif

        <div class="d-flex justify-content-between my-3">
            <form class="d-flex" method="GET" action="{{ route('contatos.index') }}">
                <input class="form-control me-2" type="text" name="search" placeholder="Pesquisar contatos..." value="{{ request('search') }}">
                <button class="btn btn-primary" type="submit">Pesquisar</button>
            </form>
            <button class="btn btn-primary" onclick="window.location='{{ route('contatos.create') }}'">Cadastrar Novo Contato</button>
        </div>
        <table class="table table-bordered table-striped">
            <thead class="table-light">
                <tr>
                    <th class="align-middle">Sequencial</th>
                    <th class="align-middle">Nome</th>
                    <th class="align-middle">Telefone</th>
                    <th class="align-middle">Idade</th>
                    <th class="align-middle">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contatos as $contato)
                <tr>
                    <td class="align-middle">{{ $contato->id }}</td>
                    <td class="align-middle">{{ $contato->nome }}</td>
                    <td class="align-middle">{{ $contato->telefone }}</td>
                    <td class="align-middle">{{ $contato->idade }}</td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#enderecoModal" 
                                    onclick="loadAddress({{ $contato->id }}, '{{ $contato->rua }}', '{{ $contato->numero }}', '{{ $contato->complemento }}', '{{ $contato->cidade }}', '{{ $contato->estado }}', '{{ $contato->cep }}')">Exibir Endereço</button>
                            <button class="btn btn-warning btn-sm mx-2" onclick="editContato({{ $contato->id }}, '{{ $contato->nome }}', '{{ $contato->telefone }}', '{{ $contato->idade }}', '{{ $contato->cep }}', '{{ $contato->rua }}', '{{ $contato->numero }}', '{{ $contato->complemento }}', '{{ $contato->cidade }}', '{{ $contato->estado }}')">Editar</button>
                            <form action="{{ route('contatos.destroy', $contato->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja deletar este contato?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Deletar</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="modal fade" id="enderecoModal" tabindex="-1" aria-labelledby="enderecoModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="enderecoModalLabel">Endereço do Contato</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p><strong>Rua:</strong> <span id="rua"></span></p>
                        <p><strong>Número:</strong> <span id="numero"></span></p>
                        <p><strong>Complemento:</strong> <span id="complemento"></span></p>
                        <p><strong>Cidade:</strong> <span id="cidade"></span></p>
                        <p><strong>Estado:</strong> <span id="estado"></span></p>
                        <p><strong>CEP:</strong> <span id="cep"></span></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editarModalLabel">Editar Contato</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="formEditar" method="POST" action="">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="editNome" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="editNome" name="nome" required>
                            </div>
                            <div class="mb-3">
                                <label for="editTelefone" class="form-label">Telefone</label>
                                <input type="text" class="form-control" id="editTelefone" name="telefone" required>
                            </div>
                            <div class="mb-3">
                                <label for="editIdade" class="form-label">Idade</label>
                                <input type="number" class="form-control" id="editIdade" name="idade" required>
                            </div>
                            <div class="mb-3">
                                <label for="editCep" class="form-label">CEP</label>
                                <input type="text" class="form-control" id="editCep" name="cep" required>
                            </div>
                            <div class="mb-3">
                                <label for="editRua" class="form-label">Rua</label>
                                <input type="text" class="form-control" id="editRua" name="rua" required>
                            </div>
                            <div class="mb-3">
                                <label for="editNumero" class="form-label">Número</label>
                                <input type="text" class="form-control" id="editNumero" name="numero" required>
                            </div>
                            <div class="mb-3">
                                <label for="editComplemento" class="form-label">Complemento</label>
                                <input type="text" class="form-control" id="editComplemento" name="complemento">
                            </div>
                            <div class="mb-3">
                                <label for="editCidade" class="form-label">Cidade</label>
                                <input type="text" class="form-control" id="editCidade" name="cidade" required>
                            </div>
                            <div class="form-group mb-3">
                            <label for="editEstado">Estado:</label>
                            <select class="form-control" id="editEstado" name="estado" required>
                                <option selected disabled>Selecione o estado</option>
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                            </select>
                        </div>      
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-primary">Salvar mudanças</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">{{ $contatos->links() }}</div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>