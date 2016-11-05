<?php
	/* VARIABLES */
	$page_desc = "Register";

	/* FUNCTIONS */
?>

<!DOCTYPE html>
<html>
	<head>	
		<meta charset="UTF-8">
		<meta name="Description" content="Travel Agency Project - Register">
		<meta name="Keywords" content="travel, contact, destination, html, css, php">
		<meta name="Author" content="Dean Jones">
		<meta name="Date" content="Oct.27, 2016">

		<title> Travel Experts - Register</title>

		<!-- SEE STYLE.CSS FOR STYLES -->
		<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		<!-- SEE STYLE.CSS FOR STYLES -->		
		<!-- input[value='a']{
			background-color: pink;
		}
		
		.info {
			position: absolute;
			right:10%;
			top:10%
			width:50%;
		} -->
	</style>
	
	<!-- SCRIPTS -->
		<script>
			function myinfoON(y)
			{
				document.getElementById(y).innerHTML = "Please fix the <strong>" + y + "</strong> box.";
				//document.getElementById("info").innerHTML = "Please fill in the address box";

			}
			function myinfoOFF(x)
			{
				document.getElementById(x).innerHTML = "";
				//document.getElementById("info").innerHTML = "";
			}
			
			//VALIDATE FOR PHONE# NUMBER OF DIGITS AND DASH?
			function validate_phone()
			{
				var status = true;
				var myphone = document.getElementById("phone");					//LOOKS UP id="phone"
				var regexp = /^\d\d\d[-]\d\d\d[-]\d\d\d\d$/;		
				if (regexp.test(myphone.value))
				{
						myphone.style.color = "black";
						status = true;
						console.log("status: " + status);
						console.log("text" + myphone.value);
					}
					else
					{
						myphone.style.color = "red";
						status = false;
						console.log("status: " + status);
						console.log("text" + myphone.value);
					}
			}
			//VALIDATION FOR POSTAL CODE FORMAT (CHANGES TEXT TO RED IF INCORRECT)
			function validate_postal_code()
			{
				var status = true;
				var mypcode = document.getElementById("postalcode");			//LOOKS UP id="postalcode"
				//var regexp = /^[A-Z]\d[A-Z] ?\d[A-Z]\d$/i;					//PATTERN TO MATCH (/i leave off because we want capitalized)
				var regexp = /^[a-z]\d[a-z]\s?\d[a-z]\d$/i;						//HARVEY's version (\s? difference on SPACE)
				//mypcode.value.toUpperCase();									//?CHANGE TEXT TO UPPERCASE?
				mypcode.value = mypcode.value.toUpperCase().trim();				//convert to UPPERCASE AND TRIM SPACES
				if (regexp.test(mypcode.value))									//TEST method OF REGEXP in IF-statement								
					{
						mypcode.style.color = "black";
						status = true;
						console.log("status: " + status);
						console.log("text" + mypcode.value);
					}
					else
					{
						mypcode.style.color = "red";
						status = false;
						console.log("status: " + status);
						console.log("text" + mypcode.value);
					}
					return status;
				//document.getElementById("postalcode").innerHTML = n2;
				//console.log(postalcode.name[0]);
			}
			/*var str2 = "T2H 3J4" //.toUpperCase();
				var regexp2 = /^[A-Z]\d[A-Z] ?\d[A-Z]\d$/i;
						//	  /^[A-Z]\d[A-Z] ?\d[A-Z]\d$/
				var n2 = regexp2.exec(str2);
				console.log("regexp: " + regexp2);
				console.log("exec: " + n2);
				console.log(/[a]+/g.exec('deaaan apple ask'));
			*/		
			
		</script>
		<script>		

			//VALIDATION FOR SUBMIT
			function validate_send()
			{
				//CHECK AGAINST ALL FIELDS NEXT
				//PUT UP RED X, OR RED BORDER AROUND THE FIELD THAT NEED FILLING IN?
				
				var myfname = document.getElementById("firstname");			//LOOKS UP id="firstname"
				var mylname = document.getElementById("lastname");			//LOOKS UP id="lastname"
				var myaddr1 = document.getElementById("addr1");				//LOOKS UP id="addr1"
				var myaddr2 = document.getElementById("addr2");				//LOOKS UP id="addr2"
				var mycity = document.getElementById("city");				//LOOKS UP id="city"
				/* PROVINCE PULLDOWN */
				var myprov = document.getElementById("prov");				//LOOKS UP id="prov"
				var mycode = document.getElementById("postalcode");			//LOOKS UP id="postalcode"
				var myphone = document.getElementById("phone");				//LOOKS UP id="phone"
				
				var status = true;
				//TEST FUNCTION
				function test(id, str_desc)
				{
					if (id.value == "" || id.value == "nil")
					{
						alert(str_desc);
						id.style.border = "2px solid red";
						id.style.backgroundColor = "#F2C9CC"; /*ff6666*/
						status = false;
						
					}
				}
				test(myfname, "The FIRST NAME box is not filled in correctly");
				test(mylname, "The LAST NAME box is not filled in correctly");
				test(myaddr1, "The ADDRESS1 box is not filled in correctly");
				test(mycity, "The CITY box is not filled in correctly");
				/* PROVINCE PULLDOWN */
				test(myprov, "Please select a PROVINCE from the pulldown");
				test(mycode, "The POSTAL CODE box is not filled in correctly");
				test(myphone, "The PHONE# box is not filled in correctly");

				
				/* if (myfname.value == "")
				{
					alert("The FIRST NAME box is not filled in correctly");
					myfname.style.backgroundColor = "#ff6666";
					status = false;
				} */
				/* else
				{
					myfname.style.backgroundColor = initial";
				} */
				/* if (mylname.value == "")
				{
					alert("The LAST NAME box is not filled in correctly");
					mylname.style.backgroundColor = "#ff6666";
					status = false;
				} */
				/* if (myaddr1.value == "")
				{
					status = false;
					alert("The ADDRESS1 box is not filled in correctly");
					myaddr1.style.backgroundColor = "#ff6666";
					
				} */
				/* if (myaddr2.value == "")
				{
					status = false;
					alert("The ADDRESS2 box is not filled in correctly");
					myaddr2.style.backgroundColor = "#ff6666";
				} */
				/* if (mycity.value == "")
				{
					status = false;
					alert("The CITY box is not filled in correctly");
					mycity.style.backgroundColor = "#ff6666";
				} */
				
				return status;
			}
		</script>
	</head>
		<body>
			<!-- HEADER -->
			<?php include_once 'header.php';?>
			
			<!-- NAVBAR -->
			<?php include_once 'navbar.php';?>
			<main>
				<form method="get" action="bouncer.php">
					<table>
						<!-- NAME -->
						<tr>
							<td> First Name: </td>
							<td> <input id="firstname" type="text" name="firstname" placeholder="Enter Firstname" onfocus="myinfoON('FirstName')" onfocusout="myinfoOFF('FirstName')" /></td> 	<!-- oninput="myvalidate()"  -->
							<td id="FirstName"></td>
							<!--USE EMPTY DATA TO SHOW CONFIRMATION <td id="fname"> </td> -->
						</tr>
						<tr>
							<td> Last Name: </td>
							<td> <input id="lastname" type="text" name="lastname" placeholder="Enter Lastname" onfocus="myinfoON('LastName')" onfocusout="myinfoOFF('LastName')" /></td>	<!-- oninput="myvalidate2()"  -->																								<!-- <td id="comment2"></td> -->
							<td id="LastName"></td>
						</tr>
						
						<!-- ADDRESS -->
						<tr>
							<td> Address: </td>
							<td> <input id="addr1" type="text" name="address1" placeholder="PO Box# or Unit#" onfocus="myinfoON('Address1')" onfocusout="myinfoOFF('Address1')" /></td>
							<td id="Address1"></td>
						</tr>
						<!--<tr>
							<td> </td>
							<td> <input id="addr2" type="text" name="address2" placeholder="Street Address" onfocus="myinfoON('Address2')" onfocusout="myinfoOFF('Address2')" /></td>
							<td id="Address2"></td>
						</tr> -->
						<tr>
							<td> City: </td>
							<td> <input id="city" type="text" name="city" placeholder="City" onfocus="myinfoON('City')" onfocusout="myinfoOFF('City')" />
							<td id="City"></td>
						</tr>
						<tr>
							<td> Province: </td>
							<td>
								<select id="prov" name="province">
									<option value="nil">&lt;  Select Province  &gt;</option>
									<option value="AB">Alberta</option>
									<option value="BC">British Columbia</option>
									<option value="MB">Manitoba</option>								
									<option value="NB">New Brunswick</option>
									<option value="NL">Newfoundland and Labrador</option>
									<option value="NT">Northwest Territories</option>
									<option value="NS">Nova Scotia</option>
									<option value="NU">Nunavut</option>
									<option value="ON">Ontario</option>
									<option value="PE">Prince Edward Island</option>
									<option value="QC">Quebec</option>
									<option value="SK">Saskatchewan</option>
									<option value="YT">Yukon</option>
								</select>
							</td>
							<td id="Province"></td>
						</tr>
						<!-- POSTAL CODE -->
						<tr>
							<td> Postal Code: </td>
							<td> <input id="postalcode" type="text" name="postalcode" placeholder="T2B 2J5" oninput="validate_postal_code()" onfocus="myinfoON('PostalCode')" onfocusout="myinfoOFF('PostalCode')" />
							<td id="PostalCode"></td>
						</tr>
						<!-- PHONE NUMBER -->
						<tr>
							<td> Phone: </td>
							<!--<td> <input id="phone" type="text" name="phone" placeholder="403-555-5555" onfocus="myinfoON('Phone')" onfocusout="myinfoOFF('Phone')" />-->
							<td> <input id="phone" type="text" name="phone" placeholder="403-555-5555" oninput="validate_phone()" onfocus="myinfoON('Phone')" onfocusout="myinfoOFF('Phone')" />
							<td id="Phone"></td>
						</tr>
					</table>
					<hr />
					<table>
						<tr>
							<td> Email: </td>
							<td> <input type="text" name="email" placeholder="Enter Email"/> </td>
						</tr>
					
						<tr>
							<td><label for="pw">Password:</label></td>
							<td><input type="password" name="pw" id="pw" placeholder="Enter Password" /></td>
						</tr>
						
						<tr>
							<td><label for="gender">Gender:</label></td>
							<td><label for="gender">Male:</label></td>
							<td><label for="gender">Female:</label></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="radio" name="gender" id="male" value="male" /></td>
							<td><input type="radio" name="gender" id="female" value="female" /></td> <!-- checked="checked" -->
						</tr>
						
						<tr>
							<td><label for="age">Age:</label></td>
							<td><input type="number" name="age" id="age" min="18" max="100" /></td>
							<td>Must be at least 18 years or older</td>
						</tr>
						
						<tr>
							<td><label for="form_num"></label></td>
							<td><input type="hidden" name="form_num" id="form_num" value="form1" /></td>
						</tr>
						
						<tr>
							<td><label for="dest">Favorite Vacation Destination:</label></td>
							<td>
								<select id="dest" name="destination">
									<option value="nil">&lt;  Pick a Destination  &gt;</option>
									<option value="GR">Greenland</option>
									<option value="HI">Hawaii</option>
									<option value="PR">Paris</option>
									<option value="UK">Ucluelet/Tofino</option>
								</select>
							</td>
						</tr>
					
						<tr>
							<td><label for="about">Tell us about yourself</label></td>
							<td><textarea name="about" id="about" rows="4" cols="40" wrap="hard" placeholder="tell us about yourself"/></textarea></td>
						</tr>
					
						<tr>
							<!-- <td> <input type="submit" value="Send" /> </td> -->
							<!-- SUBMIT BUTTON -->
							<td> <input id="send" type="submit" value="Send" onclick="return validate_send()" /> </td>	
							<!-- <td> <input type="reset" value="Reset" /> </td> -->
							<!-- RESET BUTTON -->
							<td> <input id="reset" type="reset" value="Reset" onclick="return confirm('Are you sure you want to RESET this form?')" /> </td>
						</tr>
						<tr>
							<td><label for="spam">Send me spam:</label></td>
							<td><input type="checkbox" name="spam" id="spam" /></td>
						</tr>
					</table>

					<!-- MOVE DOWN TO HEADER -->
					<a class="img-link" href="register.php" id="footer-left">
						<img src="images/register.jpg" alt="register.jpg" width="100" height="100" />
					</a>
					<a class="img-link" href="contact.php" id="footer-left">
						<img src="images/contact.jpg" alt="contact.jpg" width="100" height="100" />
					</a>
				</form>
			</main>
			
			<!-- FOOTER -->
			<?php include_once 'footer.php';?>
	</body>
</html>