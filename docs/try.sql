CREATE TABLE administrator(
	employee_no VARCHAR(128) PRIMARY KEY,
	fname VARCHAR(128) NOT NULL,
	minit VARCHAR(128) NOT NULL,
	lname VARCHAR(128) NOT NULL,
	position VARCHAR(128) NOT NULL,
	email_address VARCHAR(128) NOT NULL,
	password VARCHAR(128) NOT NULL,
	facebook_url VARCHAR(128),
	twitter_url VARCHAR(128),
	youtube_url VARCHAR(128)
);

CREATE TABLE student(
	student_id VARCHAR(128) PRIMARY KEY,
	fname VARCHAR(128) NOT NULL,
	minit VARCHAR(128) NOT NULL,
	lname VARCHAR(128) NOT NULL,
	home_address VARCHAR(128) NOT NULL,
	college_address VARCHAR(128) NOT NULL,
	home_address_contact_no VARCHAR(128) NOT NULL,
	college_address_contact_no VARCHAR(128) NOT NULL,
	student_mobile_no VARCHAR(128) NOT NULL,
	curriculum VARCHAR(128) NOT NULL,
	password VARCHAR(128) NOT NULL,
	deactivated_flag BOOLEAN NOT NULL,
	approved_flag BOOLEAN NOT NULL,
	facebook_url VARCHAR(128),
	twitter_url VARCHAR(128),
	youtube_url VARCHAR(128),
	instructor_employee_no_fk INTEGER,
	administrator_employee_no_fk INTEGER,
	FOREIGN KEY (instructor_employee_no_fk) REFERENCES instructor(employee_no),
	FOREIGN KEY (administrator_employee_no_fk) REFERENCES administrator(employee_no)
);

CREATE TABLE instructor(
	employee_no VARCHAR(128) PRIMARY KEY,
	fname VARCHAR(128) NOT NULL,
	minit VARCHAR(128) NOT NULL,
	lname VARCHAR(128) NOT NULL,
	mobile_no VARCHAR(128) NOT NULL,
	current_sched VARCHAR(128) NOT NULL,
	password VARCHAR(128) NOT NULL,
	deactivated_flag BOOLEAN NOT NULL,
	approved_flag BOOLEAN NOT NULL,
	designation VARCHAR(128) NOT NULL,
	instructor_rank VARCHAR(128) NOT NULL,
	faculty_room VARCHAR(128) NOT NULL,
	facebook_url VARCHAR(128),
	twitter_url VARCHAR(128),
	youtube_url VARCHAR(128)
);

CREATE TABLE encoder(
	encoder_id VARCHAR(128) PRIMARY KEY,
	fname VARCHAR(128) NOT NULL,
	minit VARCHAR(128) NOT NULL,
	lname VARCHAR(128) NOT NULL,
	occupation VARCHAR(128) NOT NULL,
	password VARCHAR(128) NOT NULL,
	deactivated_flag BOOLEAN NOT NULL,
	approved_flag BOOLEAN NOT NULL,
	facebook_url VARCHAR(128),
	twitter_url VARCHAR(128),
	youtube_url VARCHAR(128)
);

CREATE TABLE course(
	course_no INTEGER PRIMARY KEY,
	classification VARCHAR(128) NOT NULL,
	unit FLOAT NOT NULL
);

CREATE TABLE messages(
	message_id INTEGER PRIMARY KEY,
	message VARCHAR(128) NOT NULL,
	student_student_id_fk INTEGER,
	administrator_employee_no_fk INTEGER,
	FOREIGN KEY (student_student_id_fk) REFERENCES student(student_id),
	FOREIGN KEY (administrator_employee_no_fk) REFERENCES administrator(employee_no)
);

CREATE TABLE takes(
	takes_id INTEGER PRIMARY KEY AUTO_INCREMENT,
	semester_taken VARCHAR(128) NOT NULL,
	year_taken VARCHAR(128) NOT NULL,
	student_student_id_fk INTEGER,
	course_course_no_fk INTEGER,
	FOREIGN KEY (student_student_id_fk) REFERENCES student(student_id),
	FOREIGN KEY (course_course_no_fk) REFERENCES course(course_no)
);

CREATE TABLE teaches(
	teaches_id INTEGER PRIMARY KEY AUTO_INCREMENT,
	semester_taught VARCHAR(128) NOT NULL,
	year_taught VARCHAR(128) NOT NULL,
	instructor_employee_no_fk INTEGER,
	course_course_no_fk INTEGER,
	FOREIGN KEY (instructor_employee_no_fk) REFERENCES instructor(employee_no),
	FOREIGN KEY (course_course_no_fk) REFERENCES course(course_no)
);

CREATE TABLE advises(
	advises_id INTEGER PRIMARY KEY AUTO_INCREMENT,
	starting_date DATE NOT NULL,
	ending_date DATE NOT NULL,
	student_student_id_fk INTEGER,
	instructor_employee_no_fk INTEGER,
	FOREIGN KEY (student_student_id_fk) REFERENCES student(student_id),
	FOREIGN KEY (instructor_employee_no_fk) REFERENCES instructor(employee_no)
);

CREATE TABLE cases(
	cases_id INTEGER PRIMARY KEY AUTO_INCREMENT,
	title VARCHAR(128) NOT NULL,
	student_student_id_fk INTEGER,
	FOREIGN KEY (student_student_id_fk) REFERENCES student(student_id)
);

CREATE TABLE has_approved_ge(
	has_approved_ge_id INTEGER PRIMARY KEY AUTO_INCREMENT,
	semester_to_take VARCHAR(128) NOT NULL,
	year_to_take VARCHAR(128) NOT NULL,
	student_student_id_fk INTEGER,
	course_course_no_fk INTEGER,
	FOREIGN KEY (student_student_id_fk) REFERENCES student(student_id),
	FOREIGN KEY (course_course_no_fk) REFERENCES course(course_no)
);

CREATE TABLE has_approved_elective(
	has_approved_elective_id INTEGER PRIMARY KEY AUTO_INCREMENT,
	semester_to_take VARCHAR(128) NOT NULL,
	year_to_take VARCHAR(128) NOT NULL,
	student_student_id_fk INTEGER,
	course_course_no_fk INTEGER,
	FOREIGN KEY (student_student_id_fk) REFERENCES student(student_id),
	FOREIGN KEY (course_course_no_fk) REFERENCES course(course_no)
);

CREATE TABLE course_prereq(
	course_prereq_id INTEGER PRIMARY KEY AUTO_INCREMENT,
	course_course_no_fk INTEGER,
	FOREIGN KEY (course_course_no_fk) REFERENCES course(course_no)
);