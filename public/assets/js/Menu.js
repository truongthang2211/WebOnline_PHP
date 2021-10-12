const Menu_bar = document.getElementById('Menu-btn');
const Menu_box = document.getElementById('navbarNav');
const Mask = document.getElementById('mask')


console.log(Menu_box.clientHeight)
Menu_bar.onclick = function () {
    var isClose = Menu_box.style.left === '-350px' || Menu_box.style.left === '';
    console.log(isClose)
    console.log(Menu_box.style.left)
    if (isClose) {
        Menu_box.style.left = '0';
        Mask.style.visibility = 'visible';
        Mask.style.zIndex='98';
        Mask.style.opacity='.6';

    }
}
Mask.onclick = ()=>{
    Menu_box.style.left = '-350px'
        Mask.style.zIndex='-1';
        Mask.style.opacity='0';
        Mask.style.visibility = 'hidden';
}