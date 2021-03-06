WEBSITE REQUIREMENTS
<?php
D1-HTML
x	1.	3 pages (“index.html”, “register.html”, and “contact.html”)
	2.	index.html
x			-image - LOGO
x			-<h1> Welcome to TRAVEL EXPERTS
x			-DISPLAY some travel pictures (header-left and header-right)
x			-TWO IMAGE LINKS (“contact.html” and “register.html”) 
x			-COPYRIGHT on footer
	3.	contact.html 
x			-<p> TAGS for CONTACTS FOR AGENCY and individual agents
	4.	register.html
x			-under construction

D2-HTML (day that I missed, was at the hospital)
	1.	index.html
x			-HTML5 SEMANTIC ELEMENTS (footer, header, main)
	2.	register.html
x			-form, with action (bouncer.php)

D3-HTML/CSS
	1.	style.css 
x		-(create file and link to it to overide settings)
x		-font, (size, style, color)
x 		-alignment of tags (header-left, header-right)
x 		-borders 
x 		-input tags (using a light color background)
x		-main page (set a background image for the entire page)

D4-JAVASCRIPT
	1.	register.html
x 		-setup form for customers (name, address, etc.)
x 		-add confirmation alert when submitting
x 		-add reset button alert, (are you sure?)

D5-JAVASCRIPT
	1.	index.html
x 		-add table array (left) (image and description)(javascript)
//OPTIONAL, extra challenge (mouseover on desc to show image?)
	
D6-JAVASCRIPT
	1.	register.html
x 		-on form (add onfocus) that will add (description to right with instructions)
//?			-asked to use <p> to be added, instead I've pre-added a <td> and fill in the value with (innerHTML)
//?				-use visibility settings to (hide or show) appropriate paragraph
x 		-validation function
			-validate postal code (regular expression)
			-validate each field... before submitting

D7-JAVASCRIPT	
	1.	index.html
x 		-add image array (right) with URL link
x		-open link (to new window)
	2.	loadImages.js
XXX(DONE)		-set timer to close window after (10s)
//OPTIONAL, have image move across screen, bounce away from pointer

D8-PHP
	1.	index.php, register.php, contacts.php, links.php
x		-rename 3 files (to *.php)
x 		-add links.php (reference to it)
x 			-loop (links to other sites)
x			-PageNo. for row, (use test pages page1.php, page2.php, page3.php, etc.)

D9-PHP
	1.	index.php, variables.php
 	2.	banner.php, 
x 			-(shows MESSAGE Good Morning!)
//OPTIONAL, customize page for time of day or year?
	3.	variables.php
x			-create file
x 			-create (array of URLs) that point to sites (MOVE array from load_links.php)
x 			-loop to go to (REAL sites, instead of dummy page1.php, etc.)
	4. 	index.php, register.php, contacts.php, links.php
x 			-chop out (header, footer, and navbar) to (SEPARATE *.PHP files)
x 			-reference (USE REQUIRE)(include or require) these on each page.

D10-PHP (CUSTOMER INSERT)
	1.	function.php (used customer_tester.php)
x		-customer_form_register.php
x		-customer_form_tester.php
x		-customer_form_successful.php	
//??CHECK PHP VALIDATION examples...
	
D11-PHP (AGENT INSERT)
	1. Add an AGENT to SQL DATABASE
x 		-agent update
x 		-links to navbar_agent
//?		-agent insert (need to copy over...)
	
D13-PHP (CREATE A CLASS)
	1. Agent_class_php
x		-created PROPERTIES
x 		-CONSTRUCTOR
x		-toString (method to creat an ARRAY OF PROPERTIES)
x		test it... (agent_testpage.php)
	
D12-PHP (AGENT LOGIN PAGE)
	1. login.php
x		-login link (below banner on right)
x		-CHECKS VALIDATION (from SQL DATABASE)
x			-user1
x			-pass1
x		-FIX, isLoggedIn (YES/NO), isLogInValid (YES/NO)
x		-FIX, ifValid, 
x			-(start a SESSION)
x			-goto Agent page
x		-FIX, ifNotValid
x			-(ERROR, TRY AGAIN)

LOGIN3.PHP
x	-session_start();
x 	-load proper navbar isLoggedIn true or false

LOGIN_CHECK3.PHP
x	-session_start();
x 	-connect to SQL DB
x 	-if... $_SESSION["isLoggedIn"] = true; else false...	

LOGIN_BANNER.PHP
x 	-FIXED LOGIC ON BOTH (login_check3.php and login_banner.php)
//?	-trying to get the message, TRY AGAIN if they enter a bad USER OR PASS, not working?




			



				


		
?>