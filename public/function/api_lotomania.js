
// Retorna numeros suas repeticao nos ultimos PARAMETRO jogos
function listaRepeticao($var){

    const URL_TEN = '/api/v1/lotomania/last/'+$var;

    removeAppendChild();

    fetch(URL_TEN).then(function(res){ 
        res.json().then(function(data){

            ul = document.createElement('ul');

            document.getElementById('myItemList').appendChild(ul);

            ul.setAttribute('class', 'dezenas-sc dezenas-sc--sorteio-0 dezenas-sc--lotomania');

            for (let i = 0; i < data.length; i++) {

                let num = document.createElement('li');
                num.setAttribute('class', 'dezenas-sc__item shortcode dezenas-sc__item--lotomania');
                ul.appendChild(num);
            
                num.innerHTML += `<div class='dezenas-sc__dezena shortcode dezenas-sc__dezena--lotomania'>${data[i]['numero']}</div>
                <div class='dezenas-sc__quantidade shortcode dezenas-sc__quantidade--lotomania'>${data[i]['repetido']} vezes</div>`;
               
            }
        })
    }).catch(function(err){
        console.error('Não foi possível achar a informacao', err)
    })
}

// LIMPAR LISTA DE NUMEROS QUE MAIS SAIRAM
function removeAppendChild() {
    const list = document.getElementById("myItemList");
    while (list.hasChildNodes()) {
        list.removeChild(list.firstChild);
    }
}

