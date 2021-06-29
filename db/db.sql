


CREATE TABLE chat( 
    id int AUTO_INCREMENT not null PRIMARY KEY, 
    username varchar(50) not null, 
    message varchar(255) not null, 
    creation_date timestamp not null DEFAULT CURRENT_TIMESTAMP 
);