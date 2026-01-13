const container = document.getElementById('container-home');
const arrow = document.getElementById('arrow');
const wrapper = document.querySelector('.wrapper-home');
const buttonLeft = document.querySelector('#arrow-left');
const buttonRight = document.querySelector('#arrow-right');

buttonLeft.addEventListener('click', function() {
    wrapper.scrollBy(-1000, 0); 
});

buttonRight.addEventListener('click', function() {
    wrapper.scrollBy(1000, 0); 
});

container.addEventListener('mouseover', showArrows);
container.addEventListener('mouseout', showArrows);

function showArrows(e) {
if (e.type === 'mouseover') {
buttonLeft.classList.add('show');
buttonRight.classList.add('show');
} else if (e.type === 'mouseout') {
buttonLeft.classList.remove('show');
buttonRight.classList.remove('show');
}
}