<?php
	#---------------------------------------------
	#Dean Jones
	#Nov.08, 2016
	#CUSTOMER INSERT DATA FORM
	#-------------------------
	#SUPPORTING FILES
		#CUSTOMER_FORM_REGISTER.PHP		(customer insert data form)
		#CUSTOMER_TESTER.PHP			(InsertData FUNCTION, not on FUNCTIONS.PHP)
		#CUSTOMER_FORM_SUCCESSFUL.PHP	(if validated)
	#---------------------------------------------
	/* VARIABLES */
	$page_desc = "Customer Registration";

?>

<!DOCTYPE html>
<html>
	<head>	
		<meta charset="UTF-8">
		<meta name="Description" content="Travel Agency Project - Register">
		<meta name="Keywords" content="travel, contact, destination, html, css, php">
		<meta name="Author" content="Dean Jones">
		<meta name="Date" content="Nov.14, 2016">

		<!-- SEE STYLE.CSS FOR STYLES -->
		<link rel="stylesheet" type="text/css" href="style.css">
		
		<!-- SCRIPTS -->
		<script>
				//VARIABLES, ID'S
				var myfname = document.getElementById("firstname");			//LOOKS UP id="firstname"
				var mylname = document.getElementById("lastname");			//LOOKS UP id="lastname"
				var myaddr1 = document.getElementById("addr1");				//LOOKS UP id="addr1"
				var myaddr2 = document.getElementById("addr2");				//LOOKS UP id="addr2"
				var mycity = document.getElementById("city");				//LOOKS UP id="city"
				var myprov = document.getElementById("prov");				//LOOKS UP id="prov"
				var mycode = document.getElementById("postalcode");			//LOOKS UP id="postalcode"
				var mycountry = document.getElementById("country");			//LOOKS UP id="country"
				var myhphone = document.getElementById("hphone");			//LOOKS UP id="hphone"
				var mybphone = document.getElementById("bphone");			//LOOKS UP id="bphone"
				var myemail = document.getElementById("email");				//LOOKS UP id="email"
				
			function myinfoON(y)
			{
				document.getElementById(y).innerHTML = "Please enter the <strong>" + y + "</strong>.";
				//document.getElementById("info").innerHTML = "Please fill in the address box";

			}
			function myinfoOFF(x)
			{
				document.getElementById(x).innerHTML = "";
				//document.getElementById("info").innerHTML = "";
			}

					//**********************************************
					//VALIDATION FOR POSTAL CODE FORMAT (CHANGES TEXT TO RED IF INCORRECT)
					function validate_postal_code()
					{						
						var mypcode = document.getElementById("postalcode");			//LOOKS UP id="postalcode"
						//var regexp = /^[A-Z]\d[A-Z] ?\d[A-Z]\d$/i;					//PATTERN TO MATCH (/i leave off because we want capitalized)
						var regexp = /^[a-z]\d[a-z]\s?\d[a-z]\d$/i;						//HARVEY's version (\s? difference on SPACE)
						//mypcode.value.toUpperCase();									//?CHANGE TEXT TO UPPERCASE?
						mypcode.value = mypcode.value.toUpperCase().trim();				//convert to UPPERCASE AND TRIM SPACES
						if (regexp.test(mypcode.value))									//TEST method OF REGEXP in IF-statement								
							{
								mypcode.style.color = "black";
								pcode_status = true;
										console.log("pcode_status: " + pcode_status);
										//console.log("text" + mypcode.value);
							}
							else
							{
								mypcode.style.color = "red";
								pcode_status = false;
										console.log("pcode_status: " + pcode_status);
										//console.log("text" + mypcode.value);
							}
						console.log("postal code validation: " + pcode_status);
						return pcode_status;
						//document.getElementById("postalcode").innerHTML = n2;
						//console.log(postalcode.name[0]);
					}
					//VALIDATION FOR POSTAL CODE 
					//**********************************************
					
					
					//**********************************************
					//VALIDATE FOR PHONE# NUMBER OF DIGITS AND DASH?
					function validate_phone(phoneId)
					{						
						var myphone = document.getElementById(phoneId);					//LOOKS UP id="phone"
						var regexp = /^\d\d\d[-]\d\d\d[-]\d\d\d\d$/;		
						if (regexp.test(myphone.value))
						{
								myphone.style.color = "black";
								phone_status = true;
									console.log("phone_status: " + phone_status);
									//console.log("text" + myphone.value);
							}
							else
							{
								myphone.style.color = "red";
								phone_status = false;
									console.log("phone_status: " + phone_status);
									//console.log("text" + myphone.value);
							}
						console.log("phone validation: " + phone_status);
						return phone_status;
					}
					//VALIDATE FOR PHONE#
					//**********************************************			

			function validateForm() 
			{
				var x1 = document.forms["cust_form"]["CustFirstName"];
				var x2 = document.forms["cust_form"]["CustLastName"];
				var x3 = document.forms["cust_form"]["CustAddress"];
				var x4 = document.forms["cust_form"]["CustCity"];				
				var x5 = document.forms["cust_form"]["CustProv"];
				var x6 = document.forms["cust_form"]["CustPostal"];				
				var x7 = document.forms["cust_form"]["CustCountry"];
				var x8 = document.forms["cust_form"]["CustHomePhone"];
				var x9 = document.forms["cust_form"]["CustBusPhone"];
				var x10 = document.forms["cust_form"]["CustEmail"];
				
				
				if (x1.value == null || x1.value == "") 
				{
					x1.style.border = "2px solid red";
					x1.style.backgroundColor = "#F2C9CC";
					alert("FIRST NAME must be filled out");
					return false;
				}
				else if (x2.value == null || x2.value == "") 
				{
					x2.style.border = "2px solid red";
					x2.style.backgroundColor = "#F2C9CC";
					alert("LAST NAME must be filled out");
					return false;
				}
				else if (x3.value == null || x3.value == "") 
				{
					x3.style.border = "2px solid red";
					x3.style.backgroundColor = "#F2C9CC";
					alert("ADDRESS must be filled out");
					return false;
				}
				else if (x4.value == null || x4.value == "") 
				{
					x4.style.border = "2px solid red";
					x4.style.backgroundColor = "#F2C9CC";
					alert("CITY must be filled out");
					return false;
				}
				else if (x5.value == null || x5.value == "nil") //VALUE TO "nil"
				{
					x5.style.border = "2px solid red";
					x5.style.backgroundColor = "#F2C9CC";
					alert("PROVINCE must be filled out");
					return false;
				}
					//POSTAL CODE
					else if (x6.value == null || x6.value == "") 
					{
						x6.style.border = "2px solid red";
						x6.style.backgroundColor = "#F2C9CC";
						alert("POSTAL CODE must be filled out");
						return false;
					}
					else if(!validate_postal_code())
					{
						x6.style.border = "2px solid red";
						x6.style.backgroundColor = "#F2C9CC";
						alert("POSTAL CODE failed validation (eg.T2B2J5)");
						return false;
					}
					//---------------
				else if (x7.value == null || x7.value == "") 
				{
					x7.style.border = "2px solid red";
					x7.style.backgroundColor = "#F2C9CC";
					alert("COUNTRY must be filled out");
					return false;
				}
				//------------------
				//HOME PHONE isNULL
				else if (x8.value == null || x8.value == "") 
				{
					x8.style.border = "2px solid red";
					x8.style.backgroundColor = "#F2C9CC";
					alert("HOME PHONE must be filled out");
					return false;
				}
					//HOME PHONE VALIDATION
					else if(!validate_phone('hphone'))
						{
							x6.style.border = "2px solid red";
							x6.style.backgroundColor = "#F2C9CC";
							alert("HOME PHONE failed validation (eg.403-555-5555)");
							return false;
						}
				//----------------
				//------------------
				//WORK PHONE isNULL
				else if (x9.value == null || x9.value == "") 
				{
					x9.style.border = "2px solid red";
					x9.style.backgroundColor = "#F2C9CC";
					alert("WORK PHONE must be filled out");
					return false;
				}
					//WORK PHONE VALIDATION
					else if(!validate_phone('bphone'))
						{
							x6.style.border = "2px solid red";
							x6.style.backgroundColor = "#F2C9CC";
							alert("WORK PHONE failed validation (eg.403-555-5555)");
							return false;
						}
				//------------------
				else if (x10.value == null || x10.value == "") 
				{
					x10.style.border = "2px solid red";
					x10.style.backgroundColor = "#F2C9CC";
					alert("EMAIL must be filled out");
					return false;
				}
				//FINAL TEST PASS TO DATABASE
				else
				{
					return true;
				}
			}			
		</script>
		
		<!--TAB ON BROWSER-->
		<title> Travel Experts - Register</title>
	</head>
	<body>
			<!-- HEADER -->
			<?php include_once 'header.php';?>
			
			<!-- NAVBAR -->
			<?php include_once 'navbar.php';?>
						
			<!-- LOGINBAR -->
			<?php include_once 'loginbar.php';?>
			
			<!-- BANNER -->
			<div id="banner"><?php include_once 'banner.php';?></div>
			
			<main>
				<article>
					<!--
					`CustomerId`, `CustFirstName`, `CustLastName`, `CustAddress`, `CustCity`, 
							`CustProv`, `CustPostal`, `CustCountry`, `CustHomePhone`, `CustBusPhone`, `CustEmail`, `AgentId`
					-->
				<!--ADDED (ONSUBMIT) TO FORM, instead of SEND BUTTON -->
				<form method="post" name="cust_form" action="customer_tester.php" onsubmit="return validateForm()">
					<table id="tbl-register">
						<!-- NAME -->
						<th align="left">Customer Registration</th>
						<tr>
							<td> First Name: </td>
							<td> <input id="firstname" type="text" name="CustFirstName" placeholder="Firstname" onfocus="myinfoON('FirstName')" onfocusout="myinfoOFF('FirstName')" /></td> 	<!-- oninput="myvalidate()"  -->
							<td id="FirstName"></td>
							<!--USE EMPTY DATA TO SHOW CONFIRMATION <td id="fname"> </td> -->
						</tr>
						<tr>
							<td> Last Name: </td>
							<td> <input id="lastname" type="text" name="CustLastName" placeholder="Lastname" onfocus="myinfoON('LastName')" onfocusout="myinfoOFF('LastName')" /></td>	<!-- oninput="myvalidate2()"  -->																								<!-- <td id="comment2"></td> -->
							<td id="LastName"></td>
						</tr>
					
						<!-- ADDRESS -->
						<tr>
							<td> Address: </td>
							<td> <input id="addr1" type="text" name="CustAddress" placeholder="444 Road SW" onfocus="myinfoON('Address')" onfocusout="myinfoOFF('Address')" /></td>
							<td id="Address"></td>
						</tr>
						<!-- CITY -->
						<tr>
							<td> City: </td>
							<td> <input id="city" type="text" name="CustCity" placeholder="City" onfocus="myinfoON('City')" onfocusout="myinfoOFF('City')" />
							<td id="City"></td>
						</tr>
						<!-- PROVINCE (SELECT) -->
						<tr>
							<td> Province: </td>
							<td>
								<select id="prov" name="CustProv">
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
							<td> <input id="postalcode" type="text" name="CustPostal" placeholder="T2B2J5" oninput="validate_postal_code()" onfocus="myinfoON('PostalCode')" onfocusout="myinfoOFF('PostalCode')" />
							<td id="PostalCode"></td>
						</tr>
						<!-- COUNTRY -->
						<tr>
							<td> Country: </td>
							<td> <input id="country" type="text" name="CustCountry" placeholder="Country" onfocus="myinfoON('Country')" onfocusout="myinfoOFF('Country')" />
							<td id="Country"></td>
						</tr>
						<!-- HOME PHONE NUMBER -->
						<tr>
							<td> Home Phone: </td>
							<td> <input id="hphone" type="text" name="CustHomePhone" placeholder="403-555-5555" oninput="validate_phone('hphone')" onfocus="myinfoON('HomePhone')" onfocusout="myinfoOFF('HomePhone')" />
							<td id="HomePhone"></td>
						</tr>
						<!-- BUSINESS PHONE NUMBER -->
						<tr>
							<td> Business Phone: </td>
							<td> <input id="bphone" type="text" name="CustBusPhone" placeholder="403-555-5555" oninput="validate_phone('bphone')" onfocus="myinfoON('BusPhone')" onfocusout="myinfoOFF('BusPhone')" />
							<td id="BusPhone"></td>
						</tr>
						<!-- EMAIL -->
						<tr>
							<td> Email: </td>
							<td> <input id="email" type="text" name="CustEmail" placeholder="name.last@email.com" onfocus="myinfoON('Email')" onfocusout="myinfoOFF('Email')" /> </td>
							<td id="Email"></td>
						</tr>
						<tr>
							<!--- BUTTONS --->
							<!-- <td> <input type="submit" value="Send" /> </td> -->
							<!-- SUBMIT BUTTON -->
							<!-- <td> <input id="send" class="button" type="submit" value="Send" onclick="return validate_send()" /> </td>	 -->
							<td> <input id="send" class="button" type="submit" value="Send" /> </td>
							<!-- <td> <input type="reset" value="Reset" /> </td> -->
							<!-- RESET BUTTON -->
							<td> <input id="reset" class="button" type="reset" value="Reset" onclick="return confirm('Are you sure you want to RESET this form?')" /> </td>
						</tr>
					</table>
				</form>

				<!-- IMAGE CONTACTS LINK -->
				<?php include_once 'link_contacts.php';?>
					
				</article>
			</main>
			
			<!-- FOOTER -->
			<?php include_once 'footer.php';?>
	</body>
</html>