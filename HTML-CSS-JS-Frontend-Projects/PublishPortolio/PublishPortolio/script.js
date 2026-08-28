let x = document.getElementById("menu");
let menuBtn = document.querySelector('.menubtn');
let closeBtn = document.querySelector('.closebtn');

function openMenu(){
    x.style.display = 'block';
    menuBtn.style.display = 'none';
    closeBtn.style.display = 'block';
}

function closeMenu(){
    x.style.display = 'none';
    menuBtn.style.display = 'block';
    closeBtn.style.display = 'none';
}


function CloseNav(){
    x.style.display = 'none';
    menuBtn.style.display = 'block';
    closeBtn.style.display = 'none';
}


// -----FOr Show More Box
function hide() {
    document.getElementById('hidebox').style.display = 'none';
}

function show() {
    document.getElementById('hidebox').style.display = 'block';
}
