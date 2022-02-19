const parent = document.querySelector('.hv');
const child = document.querySelector('.hov');
const icon = document.querySelector('.icon-hover-2');

parent.addEventListener('click', function(){
    icon.classList.toggle('hv2');
    child.classList.toggle('d-none');
}); 
