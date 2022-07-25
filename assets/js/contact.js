// $.ajax({
//     url: "http://localhost/My%20Landing%20Page/contact/send_email.php",
//     method: "GET"
// }).done(function(data) {
//     console.log(data)
// })

function sendMessage() {
    const name = document.querySelector('#first-name').value;
    const email = document.querySelector('#email').value;
    const message = document.querySelector('#message').value;

    if(!name) {
        alert('Por favor, preencha o campo nome!');
        return;
    }

    if(!email) {
        alert('Por favor, preencha o campo E-mail!');
        return;
    }
    
    if(!message) {
        alert('Por favor, preencha o campo Mensagem!');
        return;
    }

    $.ajax({
        url: 'http://localhost/My%20Landing%20Page/contact/send_email.php',
        method: 'POST',
        data: {
            name: name,
            email: email,
            message: message
        },
        dataType: 'json'
    }).done(function(retorno){
        console.log(retorno);
    })
}