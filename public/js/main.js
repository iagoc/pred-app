
function removeOptions(selectElement) {
    var i, L = selectElement.options.length - 1;
    for (i = L; i >= 0; i--) {
        selectElement.remove(i);
    }
}

function boraLa() {
    const url = '/resident/dados';
    const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    let selectAdrress = document.getElementById("info-address");
    let optionsAdrress = selectAdrress.options[selectAdrress.selectedIndex];

    let selectLocalAdrress = document.getElementById("info-address-local");


    fetch(url, { //https://5balloons.info/example-of-vanilla-javascript-fetch-post-api-in-laravel/
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json, text-plain, */*",
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-TOKEN": token
        },
        method: 'post',
        body: JSON.stringify({
            "name": optionsAdrress.text
        })
    })

        .then((resp) => resp.json())

        .then(function (respJson) {
            respJson.forEach(item => {
                removeOptions(selectLocalAdrress); //https://www.horadecodar.com.br/2021/08/03/como-adicionar-uma-option-a-um-select-com-javascript-puro/

                const optionsAdrressCode = [
                    [0, 'Kitnet'],
                    [0, 'Casa'],
                    [0, 'Loja'],
                ]

                for (let i = 0; i < optionsAdrressCode.length; i++) {
                    if (Object.values(item)[i] > optionsAdrressCode[i][0]) {
                        selectLocalAdrress.options[selectLocalAdrress.options.length] = new Option(optionsAdrressCode[i][1]);
                    }
                }
            });
        })

        .catch(function (error) {
            console.log(error);
        });

}