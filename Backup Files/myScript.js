// gets the element by ID
function getId(sP)
{
  return document.getElementById(sP);
}

// clears any errors and styles (instance change) due to errors.
function clearErrors() {
	var address = getId('address');
	address.style.removeProperty('background-color');
}

// Checks address textarea for valid characters and changes state if incorrect.
function addressCheck(){
	var addressRegex = /^[a-zA-Z0-9\s,.'-]*$/;
	var address = getId('address').value;
	var addressLines = address.split('\n');
	
	for(var i = 0; i < addressLines.length; i++){
		if(!addressLines[i].match(addressRegex)){
			getId('address').style.backgroundColor='#fee';
			getId('addressError').innerHTML="<br>Sorry, this address in not correct! Please use alphanumeric and no special symbols.";			
			return false;
		}
	}
	return true;
}
// Checks address input for valid characters.
function phoneCheck() {
	var phoneRegex = /^\+?\d{0,2}[\s|-]?\(?\d{3}\)?[\s|-]?\d{3}[\s|-]?\d{4}[\s|-]?x?[\s|-]?\d{0,5}$/;
	var phone = getId('phone');
	
	if(!phone.match(phoneRegex)) {
		alert('no match');
		return false;
	}
	alert('match');
	return true;
}

// removes invalid characters from phone input and checks for a NANP number to display NANP Image
function updatePhone() {
	var phoneNanp = /^\+{1}[1][\s|-]?\(?[2-9]\d{2}\)?[\s|-]?[2-9]\d{2}[\s|-]?\d{4}[\s|-]?x?[\s|-]?\d{0,5}$/;
	var phoneRegex = /[^0-9\s()x+-]|\s{3,}/g;
	var phone = getId('phone');
	phone.value = phone.value.replace(phoneRegex, '');
	var nanpImg = getId('phoneSpan').getElementsByTagName('img')[0];
	
	if(!phone.value.match(phoneNanp)){
		nanpImg.style.display = 'none';
	}
	else {
		nanpImg.style.display = 'inline-block';
	}
}

// stores and removes user input based on rememberMe box
function rememberMe() {
	rememberBox = getId('remember');
	if(rememberBox.checked) {
		localStorage.name = getId('name').value;
		localStorage.email = getId('email').value;
		localStorage.phone = getId('phone').value;
		localStorage.address = getId('address').value;
		localStorage.remember = getId('remember').checked;
	}
	else {
		localStorage.removeItem('name');
		localStorage.removeItem('email');
		localStorage.removeItem('phone');
		localStorage.removeItem('address');
		localStorage.removeItem('remember');
	}
}

// retrieves user details on page load
function rememberUser() {
	if(localStorage.remember) {
		getId('name').value = localStorage.name;
		getId('email').value = localStorage.email;
		getId('phone').value = localStorage.phone;
		getId('address').value = localStorage.address;
		getId('remember').checked = localStorage.remember;
	}
}

// validates the form and counts errors. If errors above 0 than it doesn't process the form.
function formValidate() {
	clearErrors();
	var errorCounter = 0;
	console.log(clearErrors);
	if(!addressCheck()) errorCounter++;
    return (errorCounter==0);
}
