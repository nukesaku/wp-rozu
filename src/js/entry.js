let square = x => x * x;
console.log( "result =" + square(8) );

document.addEventListener('DOMContentLoaded', () => {
  [].forEach.call(document.getElementsByClassName('js-trigger'), (e) => {
    e.addEventListener('click', function () {
      this.classList.toggle('active');
      let menu_top = document.getElementById('menu-top');
      menu_top.classList.toggle('hide');
      menu_top.classList.toggle('show');
    }, false);
  });

  document.querySelectorAll('#menu-top > .menu-item').forEach((e) => {
    e.addEventListener('mouseover', function () {
      var element = this.querySelector('.sub-menu');
      if (element) {
        element.classList.remove('hide');
        element.classList.add('show');
      }
    });
    e.addEventListener('mouseout', function () {
      var element = this.querySelector('.sub-menu');
      if (element) {
        element.classList.remove('show');
        element.classList.add('hide');
      }
    });
  });
}, false);

let slideToggle = (e) => {

}
