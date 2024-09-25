const form = document.querySelector("form"),
	status_text = form.querySelector(".button-area span");

form.onsubmit = (e) => {
	e.preventDefault();
	status_text.style.display = "block";

	let xhr = new XMLHttpRequest(); // create new xml object
	xhr.open("POST", "./message.php", true);
	xhr.onload = () => {
		if (xhr.readyState == 4 && xhr.status == 200) { // if ajax response status is 200 and ready status is 4 means no error
			let response = xhr.response; // storing ajax response in a response variable
			console.log(response);
		}
	}
	let form_data = new FormData(form);
	xhr.send(form_data);
}
