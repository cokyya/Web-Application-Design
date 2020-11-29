# Web-Application-Design

Project work of 2

This is a web portal for movie village “Cine” online ticket booking. With this webpage, customer/staff will be able to view the current movie information, check screening schedule, book the tickets online and select their seats. Cine (client-side) contains 8 main pages, namely: (1) Home Page (2) Movie Screening Schedule Page (3) Seat Selection Page (4) Payment Page (5) Confirmation Page (6) Member Sign-up Page (7) About Us Page (8) Contact Us Page. Meanwhile, Cine (admin-side) contains 5 pages, individually: (1) Admin page (2) Update movie page (3) Update timeslot page (4) Update price page (5) Update carousel information page.  

Customer can sign up to enjoy member promotion price. \n
Customer can see recent highlights on Homepage carousel.  
Customers can view a table of movies both on show and coming soon in the home page. They can also quick purchase if no further information browsing is needed. /n
Customer can view more details of a specific movie in an individual page, including cast, photos and synopsis and can also view its schedule. 
Customers can view the schedule of screening for all movies for future days. 
A customer can make multiple bookings in order of his/her preference. 
A customer can select her preferred seats for a specific movie. 
Upon confirmation of the final booking, an email acknowledgement on the booking details will be sent to the customer via email. 
Customers can find more information about Cine by browsing “about us” page and contact us page. 

Common PHP file used; Functionality
Header	Including Cine logo membership sign-up function, and greeting.
Footer	Include index page button , about us redirect button , contact us redirect button.
Home Page	
Carousel	Provide a dynamic photo slider to provide recent highlights
Quick Book Window	Include all movies and available screening schedule to choose and quick buy in 10 seconds. 
Movie table	A table including movie posters and name. Click can direct to movie details. 
Ticket Booking	Buttons on each movie card will lead to detailed introduction of movie and purchase page
About Us Page	
Portal introduction	Webpage summary, what services will be provided and company details
Movie Screening Schedule Page	
Detailed information of a specific Movie 	Including movie poster, details such as casting, director, genre, duration and synopsis
Screening schedule information	Display available dates and timeslot (future dates only)
Seating Plan Page	
Selected movie information	A block consisting of what the customer has chosen selected consisting of movie title, date and timeslot chosen, etc.
Seating plan	A simulated cinema seat plan graph showing occupied and available seats. Occupied seats cannot be selected again. 
Payment Page	
Summary	Include all the details and how much to pay 
Personal  Information 	A Form for customer including name, email and mobile number, which are required to generate and send booking confirmation.  
Summary Page	
Confirmation Message	Tell the customer if their booking is successful or not. 
Confirmation Email 	Automatic confirmation email generated and send to customers once successful booking has been made
Membership Sign-up Page	
Membership sign-up	Name, contact number, password setting and email address information need to be filled in and stored in our db. 
About Us 	
About Us 	Introduction of Cine
Contact Us 	
Contact Us information	Including contact no., email address, personal address, service hotline and open hours
Check Booking Page	
Booking details	Customers can always re-check their booking history details by keying in booking email address
Administration Page	
Selection Form 	Administration can choose what to update by clicking individual button
Update movie page	
Update movie form 	Including movie id, movie name, PG, director, run time, movie poster, cast and synopsis. 
Update timeslot page	
Update timeslot form	Including movie id, movie name, movie date and timeslot. 
Update price page	
Update price form	Including normal price and member price
Update Slider information page	
Update Slider information form	Including Slider id, slider picture and caption. 
