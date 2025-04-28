const signUpButton = document.getElementById('signUp');
const signUptButton = document.getElementById('signUp2');
const signInButton = document.getElementById('signIn');
const signIntButton = document.getElementById('signIn2');
const container = document.getElementById('container');

signUpButton.addEventListener('click', function(){
	container.classList.add("right-panel-active");
});

signUptButton.addEventListener('click', function(){
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', function(){
	container.classList.remove("right-panel-active");
});

signIntButton.addEventListener('click', function(){
	container.classList.remove("right-panel-active");
});