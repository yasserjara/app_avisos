CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
	phone INT (9) NOT NULL,
	profession VARCHAR(80),  
	description VARCHAR(500),
	region VARCHAR(120),
	city VARCHAR(120),
	created DATETIME,
    modified DATETIME
);

CREATE TABLE notices (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    title VARCHAR(50),
    description TEXT,
    phone INT(9),
	region VARCHAR(120),
	city VARCHAR(120),
    created DATETIME,
    modified DATETIME,
    FOREIGN KEY user_key (user_id) REFERENCES users(email)
);
