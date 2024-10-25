<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="d-flex align-items-center mt-5">
        <button type="button" class="btn btn-primary ms-5" onclick="window.location='{{ route('contatos.index') }}'">Voltar</button>
        <h1 class="position-absolute start-50 translate-middle-x">Cadastrar Novo Contato</h1>
    </div>
    <section class="container w-50">
        <div class="container w-50">
            <form class="mt-3" action="{{ route('contatos.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>

                <div class="form-group mt-3">
                    <label for="telefone">Telefone:</label>
                    <input type="text" class="form-control" id="telefone" name="telefone" required>
                </div>

                <div class="form-group mt-3">
                    <label for="idade">Idade:</label>
                    <input type="text" class="form-control" id="idade" name="idade" required>
                </div>

                <div class="form-group mt-3">
                    <label for="cep">CEP:</label>
                    <input type="text" class="form-control" id="cep" name="cep" required>
                </div>

                <div class="form-group mt-3">
                    <label for="rua">Rua:</label>
                    <input type="text" class="form-control" id="rua" name="rua" required>
                </div>

                <div class="form-group mt-3">
                    <label for="numero">Número:</label>
                    <input type="text" class="form-control" id="numero" name="numero" required>
                </div>

                <div class="form-group mt-3">
                    <label for="complemento">Complemento:</label>
                    <input type="text" class="form-control" id="complemento" name="complemento">
                </div>

                <div class="form-group mt-3">
                    <label for="cidade">Cidade:</label>
                    <input type="text" class="form-control" id="cidade" name="cidade" required>
                </div>

                <div class="form-group mt-3">
                    <label for="estado">Estado:</label>
                    <select class="form-control" id="estado" name="estado" required>
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

                <div class="d-flex justify-content-center">
                    <button 
                    class="btn btn-primary mt-3 justify-content-center btn-lg w-100" 
                    type="submit">Salvar Contato</button>
                </div>
            </form>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
