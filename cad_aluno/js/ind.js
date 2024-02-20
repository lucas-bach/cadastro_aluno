document.getElementById('cep').addEventListener('blur', function() {
    let cep = this.value.replace('-', '');
    fetch(`https://viacep.com.br/ws/${cep}/json/`)
        .then(response => response.json())
        .then(data => {
            document.getElementById('endereco').value = `${data.logradouro}, ${data.bairro}, ${data.localidade} - ${data.uf}`;
        })
        .catch(error => console.error('Erro ao buscar CEP:', error));
});