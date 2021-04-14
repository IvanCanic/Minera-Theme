import '../sass/main.scss';

function mineraMenuControl() {

    let menuToggler = document.querySelector('.navbar__toggle');
    let menuList = document.querySelector('.navbar__list');

    menuToggler.addEventListener('click', e => {
        if(menuList) {
            menuList.classList.toggle('open');
            menuList.style.animation = 'minera_menu_slide_down 2s';
        }
    });

    if(menuList) {

        let menuItems = menuList.querySelectorAll('li');

        menuItems.forEach( item => {
            item.addEventListener('click', () => {
                menuList.classList.remove('open');
            });
        });
            
        let menuLinks = menuList.querySelectorAll('li a');
        menuLinks.forEach( menuLink => {
            menuLink.addEventListener('click', e => {
                menuList.classList.toggle('open');
            });
        });

        let parents = menuList.querySelectorAll('li > ul');
        let dashicons = document.createElement('span');
        dashicons.classList.add('dashicons');
        dashicons.classList.add('dashicons-arrow-down');

        parents.forEach( element => {
            element.parentElement.classList.add('menu-list-parents');
        });

        let anchors = menuList.querySelectorAll('li a');

        anchors.forEach( anchor => {
            anchor.addEventListener('focus', e => {
                if(e.currentTarget.nextElementSibling !== null && e.currentTarget.nextElementSibling.localName == 'ul') {
                    e.currentTarget.nextElementSibling.style.visibility = 'visible';
                }
            });
            anchor.addEventListener('focusout', e => {
                parents.forEach( parent => {
                    if(e.currentTarget.parentElement.previousElementSibling !== null && e.currentTarget.parentElement.previousElementSibling.localName == 'li') {
                        parent.style.visibility = 'hidden';
                    }
                    //parent.style.visibility = 'hidden';
                    if( parent.parentElement.id == e.currentTarget.parentElement.id) {
                        e.currentTarget.nextElementSibling.style.visibility = 'visible';
                    }
                });
            });
        });

    }
}

mineraMenuControl();
