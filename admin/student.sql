CREATE DATABASE student_data_info;
USE student_data_info;

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_id VARCHAR(255) NOT NULL,
    profileImage VARCHAR(255) NOT NULL,
    student_name VARCHAR(255) NOT NULL,
	trainer_name VARCHAR(255) NOT NULL,
    institution_name VARCHAR(255) NOT NULL,
    course_title VARCHAR(255),
    course_details TEXT,
    course_duration INT,
    course_start_date VARCHAR(255) NOT NULL,
    course_completion_date VARCHAR(255) NOT NULL,
    certificateImagePath VARCHAR(255) NOT NULL
);
