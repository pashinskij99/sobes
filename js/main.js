document.addEventListener("DOMContentLoaded", function () {

	const btnRegister = document.querySelector('.profile_register'),
		btnSign = document.querySelector('.profile_sign'),
		formLogin = document.querySelector('.profile_login-form'),
		formRegister = document.querySelector('.profile_register-form'),
		lastBtnRegister = document.querySelector('.profile_btns-register-forlogin'),
		lastBtnLogin = document.querySelector('.profile_btns-sign');


	function changeBtnClassActive() {
		// allBtnProfile.forEach((e) => {
		// 	e.addEventListener('click', (element) => {
		// 		element.classList.add('profile_selection-active');
		// 	});
		// });
		btnSign.addEventListener('click', () => {
			btnSign.classList.add('profile_selection-active');
			btnRegister.classList.remove('profile_selection-active');
			formLogin.style.display = 'flex';
			formRegister.style.display = 'none';
		});
		btnRegister.addEventListener('click', () => {
			btnSign.classList.remove('profile_selection-active');
			btnRegister.classList.add('profile_selection-active');
			formLogin.style.display = 'none';
			formRegister.style.display = 'flex';
		});
		lastBtnRegister.addEventListener('click', (event) => {
			event.preventDefault();
			btnSign.classList.remove('profile_selection-active');
			btnRegister.classList.add('profile_selection-active');
			formLogin.style.display = 'none';
			formRegister.style.display = 'flex';
		});
		lastBtnLogin.addEventListener('click', (event) => {
			event.preventDefault();
			btnSign.classList.add('profile_selection-active');
			btnRegister.classList.remove('profile_selection-active');
			formLogin.style.display = 'flex';
			formRegister.style.display = 'none';

		});
	}
	changeBtnClassActive();

	// 

	document.querySelector('#signup-submit').onclick = function (event) {
		event.preventDefault();
		let name = document.querySelector('#signup-name').value;
		let pass = document.querySelector('#signup-pass').value;
		let email = document.querySelector('#signup-email').value;
		let data = {
			"name": name,
			"pass": pass,
			"email": email
		};

		ajax('../core/signup.php', 'POST', signup, data);

		function signup(result) {
			console.log(result);
			if (result == 2) {
				alert('Заполните поля');
			}
			else if (result == 1) {
				alert('Успех. Теперь можно войти!');
			}
			else {
				alert('Ошибка, повторите регистрацию позже!');
			}
		}
	}

	document.querySelector('#login-submit').onclick = function (event) {
		event.preventDefault();
		let pass = document.querySelector('#login-pass').value;
		let email = document.querySelector('#login-email').value;

		let data = {
			"pass": pass,
			"email": email
		};

		ajax('../core/login.php', 'POST', login, data);

		function login(result) {
			//console.log(result);
			if (result == 2) {
				alert('Заполните поля');
			}
			else if (result == 0) {
				alert('Пользователь не найден!');
			}
			else {
				console.log(result);
				result = JSON.parse(result);
				var d = new Date();
				d.setTime(d.getTime() + (60 * 1000));
				var expires = d.toUTCString();
				document.cookie = `email=${result.email}; expires=${expires}; path=/`;
				location.href = "../cabinet.php";
			}
		}
	}

});