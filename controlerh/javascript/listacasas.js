const mapaAcentos = {
    à: 'a', á: 'a', â: 'a', ä: 'a', ã: 'a',
    è: 'e', é: 'e', ê: 'e', ë: 'e',
    ì: 'i', í: 'i', î: 'i', ï: 'i',
    ò: 'o', ó: 'o', ô: 'o', ö: 'o', õ: 'o',
    ù: 'u', ú: 'u', û: 'u', ü: 'u',
};
let input_field = document.querySelector("input[name=busca]");
var data;

input_field.addEventListener('keyup', async function (e) {
    const busca = e.target.value;
    const res = filtroPorNome(data, busca);
    montaTabela(res);
});

function filtroPorNome(array, termo) {
    termo = termo
        .toLowerCase()
        .replace(/[àáâãäåèéêëìíîïòóôöùúûü]/g, (match) => mapaAcentos[match] || match)
        .replace(/[^a-z0-9]/gi, '');
    return array.filter(item => {
        let nome = item.nomeCasa
            .toLowerCase()
            .replace(/[àáâãäåèéêëìíîïòóôöùúûü]/g, (match) => mapaAcentos[match] || match)
            .replace(/[^a-z0-9]/gi, '');
        console.log(nome, termo);
        const nomeEncontrado = nome.toLowerCase().includes(termo);
        return nomeEncontrado;
    });
}

const montaTabela = (data) => {
    let html = '';
    data.map(function (item) {
        html += "<tr>";
        html += `<td>${item.nomeCasa}</td>`;
        html += `<td>${item.cep}</td>`;
        html += `<td>${item.cidade}</td>`;
        html += `<td>${item.estado}</td>`;
        html += `<td>${item.bairro}</td>`;
        html += `<td>${item.rua}</td>`;
        html += `<td>${item.numero}</td>`;
        html += `<td>${item.quantidade_quarto}</td>`;

        html += `<td><a title="Editar" id="" href="editarcasa.php?id=${item.id_casa}"><i class="fa-solid fa-pen-to-square text-info"></i></a></td>`;
        html += `<td><a title="Excluir" id="ECasa" onclick="confimacaoExcluir(${item.id_casa})" href="../back/deletarcasa.php?id=${item.id_casa}"><i class="fa-solid fa-pen-to-square text-danger"></i></a></td>`;
        html += "</tr>";
    });
    document.querySelector("#bodyTableBuscaCasa").innerHTML = html;
}

function pegar_dados(busca) {
    let ajax = new XMLHttpRequest();

    ajax.open('GET', `http://localhost/controlerh/back/buscadorcasa.php?busca=${busca}`);

    ajax.onreadystatechange = () => {
        if (ajax.readyState == 4) {
            if (ajax.status == 200) {
                data = JSON.parse(ajax.responseText);
                montaTabela(data);
            }
        }
    };

    ajax.send();
}

function confimacaoExcluir(id){
    let res = confirm("Deseja  deletar essa Casa?")
    event.preventDefault()
    if(res == true){
        let url = "../back/deletarcasa.php?id="
        let convestidoid = new String(id);
        url = `${url}${convestidoid}`
         
        window.location.href = url;
    }   
}

pegar_dados('');