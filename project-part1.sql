-- Step 1: (5 points) Create and use a database called 'project01'
-- Ensure you check first if it already exists
-- CREATE YOUR DATABASE AND SET IT TO BE USED BELOW THIS LINE --
USE db_200443680;



-- Step 2: (30 points) Create a table called 'supers' (3 points) with the following fields
-- Ensure you use logical data types
-- Ensure you use the NULL and NOT NULL logically
-- Ensure you check first if it already exists
--    id (must be the primary key and auto incrementing) (5 points)
--    first_name (2 points)
--    last_name (2 points)
--    date_of_birth (2 points)
--    alias (2 points)
--    active (2 points)
--    hero (2 points)
--    created_at (default is the current date and time) (4 points)
--    updated_at (default is the current date and time but when updated it should update the date and time) (6 points)

-- * HINT: Only 2 of the data types are strings...

-- CREATE YOUR TABLE BELOW THIS LINE --



create table if not exists supers (

id INT(10) not null auto_increment,
first_name VARCHAR(50) not null,
last_name VARCHAR(50) not null,
date_of_birth VARCHAR(20) not null,
alias VARCHAR(20) not null,
active VARCHAR(10) not null,
hero VARCHAR(30) not null,
created_at TIMESTAMP NOT NULL,
updated_at TIMESTAMP NOT NULL DEFAULT NOW() ON UPDATE NOW(),
PRIMARY KEY(id)
);

-- TOTAL POINTS POSSIBLE: 35