<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form input</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
		integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
	<header>
		<h1 class="text-center">Form Blabalbalabla</h1>
	</header>
	<hr>
	<main class="container">
		<div class="row">
			<div class="form-group col-6">
				<label for="employeeName">Employee Name</label>
				<input class="form-control" type="text">
			</div>
			<div class="form-group col-6">
				<label for="employeeName">Designation</label>
				<input class="form-control" type="text">
			</div>
		</div>
		<div class="row">
			<div class="form-group col-6">
				<label for="employeeName">Employee Number</label>
				<div class="autocomplete w-100" style="width:300px;">
					<input class="form-control " id="empNum" type="text" name="myCountry">
				</div>
			</div>
			<div class="form-group col-6">
				<label for="employeeName">Departement</label>
				<input class="form-control" type="text">
			</div>
		</div>
		<div class="row">
			<div class="form-group col-6">
				<label for="employeeName">Day</label>
				<input class="form-control" type="text">
			</div>
			<div class="form-group col-6">
				<label for="employeeName">Reason</label>
				<input class="form-control" type="text">
			</div>
		</div>
		<button class="btn btn-primary mt-2" id="submitEmployee" onclick="showForm()">Submit</button>

		<section id="employeeForm" class="d-none">
			<h1>Form</h1>
			<article>
				<h2>1. Dues Blalbalbal</h2>
				<form action="">
					<div class="form-group d-flex">
						<p>1. Dues owning to the company</p>
						  <label for="html">Yes</label>
						  <input type="radio" id="html" name="fav_language" value="Yes">
						  <label for="css">No</label>
						  <input type="radio" id="css" name="fav_language" value="No">
					</div>
					<div class="form-group">
						  <label for="dues">IF you blablablabal</label>
						  <input type="text" id="dues" name="" placeholder="Input Value">
						<input type="button" value="Approve">
						<input type="file">
					</div>
					<input type="submit" value="Submit">
				</form>
			</article>
			<article>
				<h2>2. IT equipment lalalallalala</h2>
				<form action="">
					<div class="form-group d-flex">
						<p>Laptop</p>
						  <label for="html">Yes</label>
						  <input type="radio" id="html" name="fav_language" value="Yes">
						  <label for="css">No</label>
						  <input type="radio" id="css" name="fav_language" value="No">
					</div>
					<div class="form-group d-flex">
						<p>Mobile Phone</p>
						  <label for="html">Yes</label>
						  <input type="radio" id="html" name="fav_language" value="Yes">
						  <label for="css">No</label>
						  <input type="radio" id="css" name="fav_language" value="No">
					</div>
					<div class="form-group d-flex">
						<p>Ipad</p>
						  <label for="html">Yes</label>
						  <input type="radio" id="html" name="fav_language" value="Yes">
						  <label for="css">No</label>
						  <input type="radio" id="css" name="fav_language" value="No">
					</div>
					<div class="form-group d-flex">
						<p>Door Access</p>
						  <label for="html">Yes</label>
						  <input type="radio" id="html" name="fav_language" value="Yes">
						  <label for="css">No</label>
						  <input type="radio" id="css" name="fav_language" value="No">
					</div>
					<div class="form-group d-flex">
						<p>Others (Specify)</p>
						  <label for="html">Yes</label>
						  <input type="radio" id="html" name="fav_language" value="Yes">
						  <label for="css">No</label>
						  <input type="radio" id="css" name="fav_language" value="No">
					</div>
					<input type="submit" value="Submit">
				</form>
			</article>
			<article>
				<h2>3. Email Account</h2>
				<form action="">
					  <label for="javascript">Choose Account on</label>
					  <input type="text" id="javascript" name="fav_language" placeholder="Input Value">
					<input type="submit" value="Submit">
				</form>
			</article>
			<article>
				<h2>4. Phone Account</h2>
				<form action="">
					<div class="form-group d-flex">
						<p>Transfer Blbalbalb</p>
						  <label for="html">Yes</label>
						  <input type="radio" id="html" name="fav_language" value="Yes">
						  <label for="css">No</label>
						  <input type="radio" id="css" name="fav_language" value="No">
					</div>
					<div class="form-group d-flex">
						<p>Terminate</p>
						  <label for="html">Yes</label>
						  <input type="radio" id="html" name="fav_language" value="Yes">
						  <label for="css">No</label>
						  <input type="radio" id="css" name="fav_language" value="No">
					</div>
					<div class="form-group d-flex">
						<p>Retain By blblabla</p>
						  <label for="html">Yes</label>
						  <input type="radio" id="html" name="fav_language" value="Yes">
						  <label for="css">No</label>
						  <input type="radio" id="css" name="fav_language" value="No">
					</div>
					<input type="submit" value="Submit">
				</form>
			</article>
			<article>
				<h2>5. Vehicle</h2>
				<form action="">
					<div class="form-group d-flex">
						<p>Retain by bblalbalbal</p>
						  <label for="html">Yes</label>
						  <input type="radio" id="html" name="fav_language" value="Yes">
						  <label for="css">No</label>
						  <input type="radio" id="css" name="fav_language" value="No">
					</div>
					<input type="submit" value="Submit">
				</form>
			</article>
			<article>
				<h2>6. Personal Protective blablablal</h2>
				<form action="">
					<div class="form-group d-flex">
						<p>Uniform</p>
						  <label for="html">Yes</label>
						  <input type="radio" id="html" name="fav_language" value="Yes">
						  <label for="css">No</label>
						  <input type="radio" id="css" name="fav_language" value="No">
					</div>
					<div class="form-group d-flex">
						<p>Helmet</p>
						  <label for="html">Yes</label>
						  <input type="radio" id="html" name="fav_language" value="Yes">
						  <label for="css">No</label>
						  <input type="radio" id="css" name="fav_language" value="No">
					</div>
					<div class="form-group d-flex">
						<p>Glasses</p>
						  <label for="html">Yes</label>
						  <input type="radio" id="html" name="fav_language" value="Yes">
						  <label for="css">No</label>
						  <input type="radio" id="css" name="fav_language" value="No">
					</div>
					<div class="form-group d-flex">
						<p>Safety Shoes</p>
						  <label for="html">Yes</label>
						  <input type="radio" id="html" name="fav_language" value="Yes">
						  <label for="css">No</label>
						  <input type="radio" id="css" name="fav_language" value="No">
					</div>
					<input type="submit" value="Submit">
				</form>
			</article>
			<article>
				<h2>7. Key/Access Card</h2>
				<form action="">
				</form>
			</article>
			<article>
				<h2>8. Store blbalblabal</h2>
				<form action="">

				</form>
			</article>
			<article>
				<h2>9. Company Blalbalbal</h2>
				<form action="">

				</form>
			</article>
		</section>
	</main>

	<script>
		function autocomplete(inp, arr) {
			/*the autocomplete function takes two arguments,
			the text field element and an array of possible autocompleted values:*/
			var currentFocus;
			/*execute a function when someone writes in the text field:*/
			inp.addEventListener("input", function (e) {
				var a, b, i, val = this.value;
				/*close any already open lists of autocompleted values*/
				closeAllLists();
				if (!val) { return false; }
				currentFocus = -1;
				/*create a DIV element that will contain the items (values):*/
				a = document.createElement("DIV");
				a.setAttribute("id", this.id + "autocomplete-list");
				a.setAttribute("class", "autocomplete-items");
				/*append the DIV element as a child of the autocomplete container:*/
				this.parentNode.appendChild(a);
				/*for each item in the array...*/
				for (i = 0; i < arr.length; i++) {
					/*check if the item starts with the same letters as the text field value:*/
					if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
						/*create a DIV element for each matching element:*/
						b = document.createElement("DIV");
						/*make the matching letters bold:*/
						b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
						b.innerHTML += arr[i].substr(val.length);
						/*insert a input field that will hold the current array item's value:*/
						b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
						/*execute a function when someone clicks on the item value (DIV element):*/
						b.addEventListener("click", function (e) {
							/*insert the value for the autocomplete text field:*/
							inp.value = this.getElementsByTagName("input")[0].value;
							/*close the list of autocompleted values,
							(or any other open lists of autocompleted values:*/
							closeAllLists();
						});
						a.appendChild(b);
					}
				}
			});
			/*execute a function presses a key on the keyboard:*/
			inp.addEventListener("keydown", function (e) {
				var x = document.getElementById(this.id + "autocomplete-list");
				if (x) x = x.getElementsByTagName("div");
				if (e.keyCode == 40) {
					/*If the arrow DOWN key is pressed,
					increase the currentFocus variable:*/
					currentFocus++;
					/*and and make the current item more visible:*/
					addActive(x);
				} else if (e.keyCode == 38) { //up
					/*If the arrow UP key is pressed,
					decrease the currentFocus variable:*/
					currentFocus--;
					/*and and make the current item more visible:*/
					addActive(x);
				} else if (e.keyCode == 13) {
					/*If the ENTER key is pressed, prevent the form from being submitted,*/
					e.preventDefault();
					if (currentFocus > -1) {
						/*and simulate a click on the "active" item:*/
						if (x) x[currentFocus].click();

					}
				}
			});
			function addActive(x) {
				/*a function to classify an item as "active":*/

				if (!x) return false;
				/*start by removing the "active" class on all items:*/
				removeActive(x);
				if (currentFocus >= x.length) currentFocus = 0;
				if (currentFocus < 0) currentFocus = (x.length - 1);
				/*add class "autocomplete-active":*/
				x[currentFocus].classList.add("autocomplete-active");
			}
			function removeActive(x) {
				/*a function to remove the "active" class from all autocomplete items:*/
				for (var i = 0; i < x.length; i++) {
					x[i].classList.remove("autocomplete-active");
				}
			}
			function closeAllLists(elmnt) {
				/*close all autocomplete lists in the document,
				except the one passed as an argument:*/
				var x = document.getElementsByClassName("autocomplete-items");
				for (var i = 0; i < x.length; i++) {
					if (elmnt != x[i] && elmnt != inp) {
						x[i].parentNode.removeChild(x[i]);
					}
				}
			}
		}
	</script>

	<script>
		/*An array containing all the country names in the world:*/
		let countries = ["Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Anguilla", "Antigua & Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia & Herzegovina", "Botswana", "Brazil", "British Virgin Islands", "Brunei", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central Arfrican Republic", "Chad", "Chile", "China", "Colombia", "Congo", "Cook Islands", "Costa Rica", "Cote D Ivoire", "Croatia", "Cuba", "Curacao", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands", "Faroe Islands", "Fiji", "Finland", "France", "French Polynesia", "French West Indies", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guam", "Guatemala", "Guernsey", "Guinea", "Guinea Bissau", "Guyana", "Haiti", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Isle of Man", "Israel", "Italy", "Jamaica", "Japan", "Jersey", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Kosovo", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia", "Montenegro", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauro", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "North Korea", "Norway", "Oman", "Pakistan", "Palau", "Palestine", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russia", "Rwanda", "Saint Pierre & Miquelon", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Korea", "South Sudan", "Spain", "Sri Lanka", "St Kitts & Nevis", "St Lucia", "St Vincent", "Sudan", "Suriname", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Timor L'Este", "Togo", "Tonga", "Trinidad & Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks & Caicos", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States of America", "Uruguay", "Uzbekistan", "Vanuatu", "Vatican City", "Venezuela", "Vietnam", "Virgin Islands (US)", "Yemen", "Zambia", "Zimbabwe"];
		let dataEmployee = [];
		let dataNumber = [];
		/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/


		document.getElementById('employeeForm').addEventListener("click", function (e) {
			// closeAllLists(e.target);
			let buttons = document.getElementById("myInput").value
			if (buttons) {
				countries.map((data) => {
					if (data == buttons) {
						console.log(buttons)
					}
				})
			} else {
				console.log("nothing")
			}
		});
		$(document).ready(function () {
			fetch(`http://localhost/ecp/employee?emp_number=a`)
				.then(response => response.json())
				.then(data => {
					dataEmployee = [];
					dataNumber = [];
					dataEmployee = data
					dataEmployee.map(data => {
						console.log(data.emp_number)
						dataNumber.push(data.emp_number)
					})
					autocomplete(document.getElementById("empNum"), dataNumber);
				});
		});

		function showForm() {
			let employeeNumber = document.getElementById("empNum").value
			if (dataNumber.includes(employeeNumber)) {
				document.getElementById('employeeForm').classList.remove('d-none')
			} else {
				document.getElementById('employeeForm').classList.add('d-none')
			}
		}
	</script>
</body>

</html>


<!-- <form action="/ecp/owning-company" method="post" enctype="multipart/form-data">
		<p>emp_number</p>
		<input id="empNum" type="text" name="emp_number"/>
		<p>owned</p>
		<input type="radio" name="owned" value="0"/>FALSE
		<input type="radio" name="owned" value="1"/>TRUE
		<p>amount</p>
		<input type="number" name="amount"/>
		<p>Foto</p>
		<input type="file" name="image"/>
		<br><input type="submit" value="submit"/>
	</form> -->