let square = x => x * x;
console.log( "result =" + square(8) );

document.addEventListener('DOMContentLoaded', () => {
  [].forEach.call(document.getElementsByClassName('js-trigger'), (e) => {
    e.addEventListener('click', function () {
      this.classList.toggle('active');
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
