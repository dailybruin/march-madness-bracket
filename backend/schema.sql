-- Table definitions
CREATE TABLE team (
	tid INT AUTO_INCREMENT NOT NULL,
	tname VARCHAR(255) NOT NULL,
	tpic_url VARCHAR(255) NOT NULL,
	PRIMARY KEY (tid)
) ENGINE=InnoDB;

CREATE TABLE team_user (
	uid INT NOT NULL,
	bracket_location varchar(255) NOT NULL,
	tid INT NOT NULL,
	PRIMARY KEY (uid, bracket_location),
	FOREIGN KEY (tid) REFERENCES team(tid)
) ENGINE=InnoDB;

CREATE TABLE user (
	uid INT AUTO_INCREMENT NOT NULL,
	fb_id INT,
	PRIMARY KEY (uid)
) ENGINE=InnoDB;

-- Sample data
INSERT INTO user
	(uid, fb_id)
	VALUES
	(1, 34543);

INSERT INTO team
	(tid, tname, tpic_url)
	VALUES
	(1, 'UCLA', 'ucla.jpg'),
	(2, 'Duke', 'duke.jpg');

INSERT INTO team_user
	(uid, bracket_location, tid)
	VALUES
	(1, '1-1', 1),
	(1, '1-3', 2);