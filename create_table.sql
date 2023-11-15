CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    code VARCHAR(255),
    name VARCHAR(255),
    level1 VARCHAR(255),
    level2 VARCHAR(255),
    level3 VARCHAR(255),
    price DECIMAL(10, 2),
    price_sp DECIMAL(10, 2),
    quantity DECIMAL(10, 2),
    properties TEXT,
    purchases VARCHAR(255),
    unit VARCHAR(255),
    image VARCHAR(255),
    display_on_main BOOLEAN,
    description TEXT
)