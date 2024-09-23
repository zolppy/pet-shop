CREATE TABLE products(
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  SKU VARCHAR(50) NOT NULL,
  name VARCHAR(100) NOT NULL,
  price DECIMAL(10, 2) NOT NULL,
  brand VARCHAR(100),
  description VARCHAR(4095),
  image_url VARCHAR(511),
  category_id INT UNSIGNED NOT NULL,
  CONSTRAINT pk_products PRIMARY KEY(id),
  CONSTRAINT fk_products_categories FOREIGN KEY(category_id) REFERENCES categories(id)
);