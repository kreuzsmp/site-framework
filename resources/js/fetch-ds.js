let stub = document.getElementById('checkds');
(async () => {
    let res = await fetch('/check-ds', {
        headers: {
            'X-DISCORD-ID-REQUEST': true
        }
    })

    let s = await res.text()

    console.log(s, typeof s)
    if (s == "true") {
        stub.innerHTML="Вы есть на Discord-сервере!";
    } else {
        stub.innerHTML="Вас нет на Discord-сервере, самое время зайти! (обязательно) (ссылки пока нет.)";
    }
})();

async function check() {
    stub.innerHTML = "<svg class=\"h-6 fill-white\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><style>.spinner_nOfF{animation:spinner_qtyZ 2s cubic-bezier(0.36,.6,.31,1) infinite}.spinner_fVhf{animation-delay:-.5s}.spinner_piVe{animation-delay:-1s}.spinner_MSNs{animation-delay:-1.5s}@keyframes spinner_qtyZ{0%{r:0}25%{r:3px;cx:4px}50%{r:3px;cx:12px}75%{r:3px;cx:20px}100%{r:0;cx:20px}}</style><circle class=\"spinner_nOfF\" cx=\"4\" cy=\"12\" r=\"3\"/><circle class=\"spinner_nOfF spinner_fVhf\" cx=\"4\" cy=\"12\" r=\"3\"/><circle class=\"spinner_nOfF spinner_piVe\" cx=\"4\" cy=\"12\" r=\"3\"/><circle class=\"spinner_nOfF spinner_MSNs\" cx=\"4\" cy=\"12\" r=\"3\"/></svg>"
    let res = await fetch('/check-ds', {
        headers: {
            'X-DISCORD-ID-REQUEST': true
        }
    })

    let s = await res.text()

    console.log(s, typeof s)
    if (s == "true") {
        stub.innerHTML="✔Вы есть на Discord-сервере!";
    } else {
        stub.innerHTML="Вас нет на Discord-сервере, самое время зайти! (обязательно) (ссылки пока нет.)";
    }
}
