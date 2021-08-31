1. index.php is the main page of the website.

// FOLDERS

2. The /css folder contains the file for the CSS stylesheet used (styles.css).

3. The /db folder contains all files relating to the database. It mainly contains all PHP files that are responsible for creating the databases and tables.

4. Inside the /db folder,
	a. create_db.php is responsible for creating the database called 'WAPdb'.
	b. create_table.php is responsible for creating all 4 tables used: 'feedback', 'member', 'reservations' and 'eventbookings'. 
	c. connect_db.php is linked in the different php files to establish a connection from the website to the database.
	d. functions.php contains the functions used in some other php files in the /db folder.
	e. bookingform.php and reserveform.php is used to send data from booking and reservations to the database.
	f. contactform.php is used to send data from the feedback form to the database.
	g. loginform.php and logout.php is used to login and logout the user.
	h. signupform.php is used to send data from the signup form to the database after verification for the user to sign up as member.
	
5. The /images folder contains all the images used in the webpage.

6. The /js folder contains the file for the Javascript script used (slideshow.js).

// INDIVIDUAL FILES

7. These are the breakdown of the pages.
	a. accountcreated.php: Page displayed when an account is created.
	b. bookingreceived.php: Page displayed when a booking or reservations is created.
	c. contactus.php: Feedback page.
	d. drinks.php: Drinks menu page.
	e. eventbookings.php: Private event booking page.
	f. feedbackreceived.php: Page displayed when a feedback is received.
	g. footer.html: Codes for the footer to be included in all other pages.
	h. header.php: Codes for the header to be included in all other pages.
	i. index.php: The main page of the website.
	j. login.php: Login page.
	k. login&signup.php: Login or signup page.
	l. menu.php: Menu page displaying all categories.
	m. nothinghere.php: Error page.
	n. pancakes.php: Pancakes menu page.
	o. reservations.php: Reservations page.
	p. reservations&events.php: Reservations or bookings page.
	q. signup.php: Sign up page.
	r. waffles.php: Waffles menu page.
	s. whoweare.php: Introduction page.
