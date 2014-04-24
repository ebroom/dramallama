function O(obj)
{
    if (typeof obj == 'object') return obj
    else return document.getElementById(obj)
}

function S(obj)
{
    return O(obj).style
}

function C(name)
{
  var elements = document.getElementsByTagName('*')
  var objects  = []

  for (var i = 0 ; i < elements.length ; ++i)
    if (elements[i].className == name)
      objects.push(elements[i])

  return objects
} 
function check(form)/*function to check userid & password*/
{
/*the following code checkes whether the entered userid and password are matching*/
if(form.userid.value == "myuserid" && form.pswrd.value == "mypswrd")
{
window.open('index1.html#home')/*opens the target page while Id & password matches*/
}
else
{
alert("Error Password or Username")/*displays error message*/
}
}
function validateForm() {
    var x = document.forms["createUser"]["CrUserId"].value;
    var y = document.forms["createUser"]["CrUserPswrd"].value;
    if (x == null || x == "") {
        alert("UserName must be filled out");
        return false;
    }
    if (y == null || y == "") {
        alert("Password must be filled out");
        return false;
    }
}