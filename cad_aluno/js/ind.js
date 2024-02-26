document.getElementById('cep').addEventListener('blur', function() {
    let cep = this.value.replace('-', '');
    fetch(`https://viacep.com.br/ws/${cep}/json/`)
        .then(response => response.json())
        .then(data => {
            document.getElementById('endereco').value = `${data.logradouro}, ${data.bairro}, ${data.localidade} - ${data.uf}`;
        })
        .catch(error => console.error('Erro ao buscar CEP:', error));
});

let form = document.getElementById('cadastroForm');

const salvar = async (e) => {
    e.preventDefault();
    const data = new URLSearchParams();
    for (const pair of new FormData(form)) {
        data.append(pair[0], pair[1]);
    }

    const result = await fetch('../php/salvar.php', {
        method: 'post',
        body: data,
    });

    let res = await result.json();



}    