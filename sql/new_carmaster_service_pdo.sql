-- Створення таблиці клієнтів
CREATE TABLE clients
(
    client_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    phone_number VARCHAR(15) NULL
);

-- Створення таблиці автомобілів
CREATE TABLE cars (
    car_id INT AUTO_INCREMENT PRIMARY KEY,
    model VARCHAR(50) NOT NULL,
    brand VARCHAR(50) NOT NULL,
    year INT NOT NULL,
    client_id INT,
    FOREIGN KEY (client_id) REFERENCES clients(client_id)
);

-- Створення таблиці послуг
CREATE TABLE services (
    service_id INT AUTO_INCREMENT PRIMARY KEY,
    description VARCHAR(255) NOT NULL,
    category VARCHAR(50) NOT NULL
);

-- Створення таблиці зв'язку клієнтів і автомобілів (one-to-many)
CREATE TABLE client_cars (
    client_id INT,
    car_id INT,
    PRIMARY KEY (client_id, car_id),
    FOREIGN KEY (client_id) REFERENCES clients(client_id),
    FOREIGN KEY (car_id) REFERENCES cars(car_id)
);

-- Створення таблиці замовлень
CREATE TABLE orders (
    order_id INT AUTO_INCREMENT PRIMARY KEY,
    client_id INT,
    service_id INT,
    FOREIGN KEY (client_id) REFERENCES clients(client_id),
    FOREIGN KEY (service_id) REFERENCES services(service_id)
);
