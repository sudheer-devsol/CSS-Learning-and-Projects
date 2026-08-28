let x = document.getElementById('menu');
let menubtn = document.querySelector('.menubtn');


let closebtn = document.querySelector('.closebtn')

function openMenu(){
    x.style.display = 'block';
    menubtn.style.display = 'none'
    closebtn.style.display= 'block'
}
function closeMenu(){
    x.style.display = 'none';
    menubtn.style.display ='block';
    closebtn.style.display=  'none'
}