const signinBtn = document.querySelector('.signinBtn');
const sigupBtn = document.querySelector('.sigupBtn');
const formBx = document.querySelector('.formBx');
const body = document.querySelector('body')


sigupBtn.onclick = function(){
    formBx.classList.add('active')
    body.classList.add('active')
}

signinBtn.onclick = function(){
    formBx.classList.remove('active')
    body.classList.remove('active')
}