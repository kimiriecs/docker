USE docker;

CREATE TABLE IF NOT EXISTS owners
(
  id              INT unsigned NOT NULL AUTO_INCREMENT, 
  first_name      VARCHAR(150) NOT NULL,                
  last_name       VARCHAR(150) NOT NULL,                
  email           VARCHAR(150) NOT NULL,                
  gender          VARCHAR(150) NOT NULL,                
  ip_address      VARCHAR(150) NOT NULL,                
  PRIMARY KEY     (id)                                  
);

LOAD DATA LOCAL INFILE 'docker-entrypoint-initdb.d/owners.txt' INTO TABLE `owners`;