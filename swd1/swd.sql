create table users(
	id INT AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(255) NOT NULL,
	age INT NOT NULL,
	birth DATE NOT NULL,
	cpf VARCHAR(255) NOT NULL,
	password VARCHAR(255) NOT NULL
);

create table complaint(
	id INT AUTO_INCREMENT PRIMARY KEY,
	user_id INT NOT NULL,
	neighborhood VARCHAR(255) NOT NULL,
	street VARCHAR(255) NOT NULL,
	numb INT NOT NULL,
	description TEXT,
	FOREIGN KEY user_key (user_id) REFERENCES users(id)
);