function new_user(){
    location.assign('create_user.php');
}

function update_user(){
    location.assign('index.php');
}


function transaction(){
    location.assign('transaction.html');
}

function menu(){
    //alert('open');
    var menu_list = document.getElementsByClassName('menu_list')[0];
    var head_section = document.getElementsByClassName('head_section')[0];
    var menu_list = document.getElementsByClassName('menu_list')[0];

    var head_bound = document.getElementsByClassName('head_bound')[0];
    //head_bound.style.marginTop = '15px';
  


    menu_list.style.opacity = '1';
    menu_list.style.height = '140px';
    menu_list.style.transition = 'all 1.4s linear';

    head_section.style.height = '150px';
    head_section.style.transition = 'all 1s linear';

    var menu_bar = document.getElementsByClassName('menu_bar')[0];
    menu_bar.setAttribute('onclick', 'menu_close()');

}

function menu_close(){
    //alert('closing');

    var menu_list = document.getElementsByClassName('menu_list')[0];
    var head_section = document.getElementsByClassName('head_section')[0];
    var menu_list = document.getElementsByClassName('menu_list')[0];


    menu_list.style.opacity = '0';
    menu_list.style.height = '20px';
    menu_list.style.transition = 'all 0.4s linear';

    head_section.style.height = '50px';
    head_section.style.transition = 'all 1s linear';

    var menu_bar = document.getElementsByClassName('menu_bar')[0];
    menu_bar.setAttribute('onclick', 'menu()');
}