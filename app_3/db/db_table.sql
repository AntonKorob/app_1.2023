CREATE TABLE my_text
(
    id INT(6)
        PRIMARY KEY,
    name VARCHAR
    (30) NOT NULL,
    date INT
    (30) NOT NULL,
    text VARCHAR
    (50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)