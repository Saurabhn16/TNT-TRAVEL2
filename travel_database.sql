
CREATE database `travel_website`;


CREATE TABLE `Booking` (user_id varchar(10) NOT NULL, booking_id varchar(20) NOT NULL, name varchar(50) NOT NULL, email varchar(100) NOT NULL, phone int(10) NOT NULL, address varchar(200) NOT NULL, `from` varchar(50) NOT NULL, `to` varchar(50) NOT NULL, boarding_date date NOT NULL, arrival_date date     );


CREATE TABLE master_login(user_id varchar(10) NOT NULL PRIMARY KEY, pass_word varchar(100) NOT NULL);


CREATE TABLE customer(user_id varchar(10) NOT NULL PRIMARY KEY, fname varchar(100) NOT NULL, lname varchar(100) NOT NULL, pass_word varchar(100) NOT NULL, email varchar(200) NOT NULL, address text(200) NOT NULL, phone int(10) NOT NULL, aadhaar_no int(12) NOT NULL , createdate date NOT NULL );


CREATE TABLE hotels(hotel_id int(10) AUTO_INCREMENT NOT NULL PRIMARY KEY, name varchar(100) NOT NULL, location varchar(100) NOT NULL, state varchar(100) NOT NULL, price int(10) NOT NULL, dis_from_city varchar(100) NOT NULL, star int(5) NOT NULL, no_review int(20) NOT NULL, img1 varchar(100) NOT NULL,img2 varchar(100) ,img3 varchar(100) , img4 varchar(100)  ,img5 varchar(100)  );


CREATE TABLE places(place_id int(10) AUTO_INCREMENT NOT NULL PRIMARY KEY, name varchar(100) NOT NULL, location varchar(100) NOT NULL, state varchar(100) NOT NULL, duration varchar(100) NOT NULL, from_date date NOT NULL, till_date date NOT NULL, description varchar(500) NOT NULL, route varchar(100) NOT NULL, price int(10) NOT NULL, dis_from_city varchar(100) NOT NULL, star int(5) NOT NULL, no_review int(20) NOT NULL, img1 varchar(100) NOT NULL,img2 varchar(100) ,img3 varchar(100) , img4 varchar(100)  ,img5 varchar(100)  );


CREATE TABLE transaction(transac_id varchar(20) NOT NULL PRIMARY KEY, user_id varchar(10) NOT NULL,booking_id varchar(20) NOT NULL ,pay_method varchar(50) NOT NULL, pay_time datetime NOT NULL, amount int(20) NOT NULL );


CREATE TABLE contact_us(user_id varchar(20) NOT NULL, fname varchar(100) NOT NULL, lname varchar(100) NOT NULL, email varchar(200) NOT NULL, phone int(10),  message varchar(1000) NOT NULL);


CREATE TABLE `flight` (
  `user_id` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone_no` bigint(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `aadhar_no` bigint(12) NOT NULL,
  `passengers` int(2) NOT NULL,
  `departure_date` date NOT NULL,
  `return_date` date NOT NULL,
  `departure_from` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `airline` varchar(100) NOT NULL,
  `fare` int(11) NOT NULL,
  `booking_time` datetime NOT NULL
) 


CREATE TABLE `train` (
  `user_id` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_no` bigint(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `passport_id_no` int(11) NOT NULL,
  `passengers` int(11) NOT NULL,
  `departure_date` date NOT NULL,
  `return_date` date NOT NULL,
  `departure_from` varchar(30) NOT NULL,
  `destination` varchar(30) NOT NULL,
  `airline` varchar(30) NOT NULL,
  `fare` int(11) NOT NULL,
  `booking_time` datetime NOT NULL
)
