
// Retorna Tabela dos 6 ultimos jogos

const URL_TEN = '/api/v1/lotomania/concurso/last/6';

removeAppendChild();

fetch(URL_TEN).then(function(res){ 
    res.json().then(function(data){

        for (let i = 0; i < data.length; i++) {

            div = document.createElement('div');

            document.getElementById('ultimosJogos').appendChild(div);

            div.setAttribute('class', 'col-12 col-sm-6 col-lg-4');

            let num = document.createElement('div');
            num.setAttribute('class', 'single-feature');
            div.appendChild(num);
        
            num.innerHTML += `
            <i class="ti-world" aria-hidden="true"></i>
            <h5>Concurso ${data[i]['numero']} (${data[i]['dataApuracao']})</h5>
            `;

            data[i]['listaDezenas'].forEach(function (item, indice, array) {
                num.innerHTML += `
                    <label class="resultado">${item}</label>
                `;
            });    
  
        }

    })
}).catch(function(err){
    console.error('Não foi possível achar a informacao', err)
})
