let txtPassword = document.getElementById('password')
let txtConfPassword = document.getElementById('confirmePassword')
let conf = document.getElementById('confirme')
let senha = (txtPassword.value)
let confSenha = (txtConfPassword.value)

if(senha != confSenha){
    conf.innerHTML = 'As senhas não confere, porgentileza digite novamente'
}