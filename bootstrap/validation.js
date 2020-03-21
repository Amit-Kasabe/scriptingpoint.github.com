  function validate(){
  var username=document.getElementById("email").value;
  var password=document.getElementById("pwd").value;
  var repass=document.getElementById("cpwd").value;
  if (username==""||password==""||repass=="") {
    alert("you should fill username");
    return false;
  }
}