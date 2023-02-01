document.querySelector('#login-form').addEventListener('submit', (event) => {
    event.preventDefault()
    const form = document.getElementById('login-form')
    const formData = new FormData(form)
    const token = document.getElementsByName("csrf_token")[0].getAttribute('content')
    const url = base_url + '/backsite/auth/login'

    fetch(url, {
        headers: {
            "X-CSRF-TOKEN": token
        },
        method: 'post',
        body: formData
    })
    .then((response) => {
        if(response.ok) {
            return response.json();
        }
        return response.text().then(text => {throw new Error(text)})
    })
    .then((data) => {
        window.location = base_url + '/backsite/dashboard'
    })
    .catch((error) => {
        resp = JSON.parse(error.message)
        let messages = ``
        resp.message.forEach(element => {
            console.log(element)
            messages += `${element}<br>`
        });
        swal.fire('Error', messages, 'error')
    })
})
