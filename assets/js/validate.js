
function validate() { 

const username = document.getElementById('firstName').value; 
const lastname = document.getElementById('lastName').value ; 

if(username == "" && lastname == "")
{
    alert('Please enter your firstname and lastname');
}
else
{
    console.log('success')
}
}
