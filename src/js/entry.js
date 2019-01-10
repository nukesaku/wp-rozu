let square = x => x * x;
console.log( "result =" + square(7) );

document.addEventListener('DOMContentLoaded', () => {
  [].forEach.call(document.getElementsByClassName('js-trigger'), (e) => {
    e.addEventListener('click', function () {
      this.classList.toggle('active');
    }, false);
  });
}, false);
