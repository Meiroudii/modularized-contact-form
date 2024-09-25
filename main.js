const form = document.querySelector("form"),
	status_text = form.querySelector(".button-area span");

form.onsubmit = (e) => {
	e.preventDefault();
	status_text.style.color = "#0D6EFD";
	status_text.style.display = "block";

	let xhr = new XMLHttpRequest(); // create new xml object
	xhr.open("POST", "./message.php", true);

	xhr.onerror = () => {
		status_text.innerText = "Something went wrong please try again.";
		console.error("Request Failed");
	};

	xhr.onload = () => {
		if (xhr.readyState == 4 && xhr.status == 200) { // if ajax response status is 200 and ready status is 4 means no error
			let response = xhr.response; // storing ajax response in a response variable
			if (response.indexOf("Email and message field is required!") != -1 || response.indexOf("Enter a valid email address.") || response.indexOf("Your message cannot be send.")) {
				status_text.style.color = "red";
			} else {
				form.reset();
				setTimeout(() => {
					status_text.style.display = "none";
				}, 3000);
			}
			status_text.innerText = response;
		}
	}
	let form_data = new FormData(form);
	xhr.send(form_data);
}
