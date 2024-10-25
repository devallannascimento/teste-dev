function loadAddress(id, rua, numero, complemento, cidade, estado, cep) {
    document.getElementById('rua').textContent = rua;
    document.getElementById('numero').textContent = numero;
    document.getElementById('complemento').textContent = complemento || 'Não informado';
    document.getElementById('cidade').textContent = cidade;
    document.getElementById('estado').textContent = estado;
    document.getElementById('cep').textContent = cep;
}

function editContato(id, nome, telefone, idade, cep, rua, numero, complemento, cidade, estado) {
    document.getElementById('editNome').value = nome;
    document.getElementById('editTelefone').value = telefone;
    document.getElementById('editIdade').value = idade;
    document.getElementById('editCep').value = cep;
    document.getElementById('editRua').value = rua;
    document.getElementById('editNumero').value = numero;
    document.getElementById('editComplemento').value = complemento || '';
    document.getElementById('editCidade').value = cidade;
    document.getElementById('editEstado').value = estado;
    document.getElementById('formEditar').action = `/contatos/${id}`;

    document.getElementById('formEditar').action = `/contatos/${id}`;
    var editarModal = new bootstrap.Modal(document.getElementById('editarModal'));
    editarModal.show();
}