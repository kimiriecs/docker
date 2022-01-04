USE docker;

CREATE TABLE IF NOT EXISTS pets
(
  id              INT unsigned NOT NULL AUTO_INCREMENT, 
  owner_id        INT unsigned NOT NULL,                
  name            VARCHAR(150) NOT NULL,                
  birth           DATE NOT NULL,                        
  PRIMARY KEY     (id),
  FOREIGN KEY     (owner_id)
    REFERENCES    owners(id)
    ON UPDATE CASCADE ON DELETE restrict                                 
);

LOAD DATA LOCAL INFILE 'docker-entrypoint-initdb.d/pets.txt' INTO TABLE `pets`;