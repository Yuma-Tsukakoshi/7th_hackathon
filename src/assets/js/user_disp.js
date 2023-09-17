let userlink = 

userlink.addEventListener('click', (e) => { 
  
  const param = user_id ;
  const url = "localhost8080/user/user_info/user_disp.php?id=" + param;
  window.location.href = url;
}, false)