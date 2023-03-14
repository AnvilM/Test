const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: false,
  
  
    // Navigation arrows
    navigation: {
      nextEl: '.next',
      prevEl: '.prev',
    },
    
  

  });

let fio = document.getElementById('FIO')
let phone = document.getElementById('phone')

fio.addEventListener("input", (event) => {
    
    let regist = /[^a-zA-Zа-яА-Я .]/;
    if (regist.test(fio.value) == true)
    {
        fio.value = fio.value.replace(regist, '');
    }
});

phone.addEventListener("input", (event) => {
    
    let regist = /[^0-9 .]/;
    if (regist.test(phone.value) == true)
    {
        phone.value = phone.value.replace(regist, '');
    }
});


function formShow(){
    document.getElementById('form').classList.add('form-show');
}
function formHide(){
    document.getElementById('form').classList.remove('form-show');
}



swiper.on('activeIndexChange', function () {
    document.querySelector('.from').innerHTML = swiper.activeIndex+1
    
  });

function menuSwitch(){
    if(document.getElementById('menu').classList.contains('menu-close')){
        document.getElementById('menu').classList.remove('menu-close')
        document.getElementById('menu-button').innerHTML = '<img src="/images/menu-close.svg" alt=""></img>'
    }
    else{
        document.getElementById('menu').classList.add('menu-close')
        document.getElementById('menu-button').innerHTML = '<img src="/images/menu.svg" alt=""></img>'
        formHide();
    }
}