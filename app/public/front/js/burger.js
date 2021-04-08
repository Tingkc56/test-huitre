var burger = document.querySelector('#burger')
var ul = document.querySelector('.burger-ul')

    burger.addEventListener('click',() => {
        ul.classList.toggle('switch')
    })