/* menu button */
const menuBtn = document.querySelector('.menu-bar');
const menu = document.querySelector('nav');

menuBtn.addEventListener('click', () => {
    menu.classList.toggle('active');
    menuBtn.classList.toggle('fa-times');
});



/* login */
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
/* end */

/*validate Email and Password*/

function validate(){

    var email = document.getElementById("email").value;
    if(email =="" ||email == null){
        alert("email id required");
        return false;

    }
    var password = document.getElementById("password").value;
    if(password =="" || password ==null){
        alert("password is required");
        return false;
    }
}
