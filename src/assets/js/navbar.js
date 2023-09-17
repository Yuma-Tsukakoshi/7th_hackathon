const navattend = document.getElementById('nav_attend');
const navstatus = document.getElementById('nav_status');


navattend.addEventListener('click', function () {
  console.log('attend');
  navstatus.style.borderBottom = 'none';
  navattend.style.borderBottom = '0.3rem solid #0074BB';
});

