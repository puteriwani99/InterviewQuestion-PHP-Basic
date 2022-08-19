const name = document.getElementById('username')
const form = document.getElementById('form')
const errorElement = document.getElementById('error')

form.addEventListener('submit', (e) =>{
    let messages = []
    if (username.value === '' || username.value == null){          /*to check whether the user key in username or not*/
        messages.push('Key in username and click submit')
    }
    if(messages.length > 0){
        e.preventDefault()
        errorElement.innerText = messages.join(',')
    }
})