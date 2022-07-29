const burgerMenu = document.querySelector('.burger-mobile')
const burgerMenuClose = document.querySelector('.burger-mobile-close')
const headerMobile = document.querySelector('header .mobile')
const html = document.querySelector('html');

if (burgerMenu !== null) {
  burgerMenu.addEventListener('click', () => {
    if (headerMobile !== null) {
      headerMobile.classList.add('js-active-menu')
      html.classList.add('js-active-menu')
      burgerMenuClose.style.display = 'block';
      burgerMenu.style.display = 'none';

    }
  })

  burgerMenuClose.addEventListener('click', () => {
    if (burgerMenuClose !== null) {
      headerMobile.classList.remove('js-active-menu')
      html.classList.remove('js-active-menu')
      burgerMenuClose.style.display = 'none';
      burgerMenu.style.display = 'block';
    }
  })
}