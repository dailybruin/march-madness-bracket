-- Table definitions
CREATE TABLE team (
	tid INT AUTO_INCREMENT NOT NULL,
	tname VARCHAR(255) NOT NULL,
	tpic_url VARCHAR(255) NOT NULL,
	PRIMARY KEY (tid)
) ENGINE=InnoDB;

CREATE TABLE user (
	uid INT AUTO_INCREMENT NOT NULL,
	fb_id INT,
	PRIMARY KEY (uid)
) ENGINE=InnoDB;

CREATE TABLE team_user (
	uid INT NOT NULL,
	bracket_location varchar(255) NOT NULL,
	tid INT NOT NULL,
	PRIMARY KEY (uid, bracket_location),
	FOREIGN KEY (tid) REFERENCES team(tid),
	FOREIGN KEY (uid) REFERENCES user(uid)
) ENGINE=InnoDB;


-- Sample data
INSERT INTO user
	(uid, fb_id)
	VALUES
	(1, 34543);

INSERT INTO team
	(tname, tpic_url)
	VALUES
	('Louisville', 'images/midwest/louisville_card.png'),
	('NCAT/LIB', 'images/midwest/ncat_lib.png'),
	('Colorado State', 'images/midwest/colorado_state_rams.png'),
	('Missouri', 'images/midwest/missou_tigers.png'),
	('Oklahoma State', 'images/midwest/ok_state.png'),
	('Oregon', 'images/midwest/oregon.png'),
	('Saint Louis', 'images/midwest/saint_louis.png'),
	('New Mexico St.', 'images/midwest/new_mex_state_aggies.png'),
	('Memphis', 'images/midwest/memphis_tigers.png'),
	('MTSU/STM', 'images/midwest/midd_tennessee_smc.png'),
	('Michigan State', 'images/midwest/mich_state.png'),
	('Valparaiso', 'images/midwest/valparaiso_crusaders.png'),
	('Creighton', 'images/midwest/creighton_blue_jays.png'),
	('Cincinnati', 'images/midwest/cincinnati_bearcats.png'),
	('Duke', 'images/midwest/duke_alt.png'),
	('Albany', 'images/midwest/albany.png'),
	('Gonzaga', 'images/west/gonzaga_bulldogs.png'),
	('Southern University', 'images/west/southern_univ.png'),
	('Pittsburgh', 'images/west/pittsburgh.png'),
	('Wichita State', 'images/west/wichita_state.png'),
	('Wisconsin', 'images/west/wisconsin.png'),
	('Mississippi', 'images/west/ole_miss.png'),
	('Kansas State', 'images/west/kansas_state.png'),
	('BSU/La Salle', 'images/west/boise_state_la_salle.png'),
	('Arizona', 'images/west/arizona.png'),
	('Belmont', 'images/west/belmont_bruins.png'),
	('New Mexico', 'images/west/new_mexico.png'),
	('Harvard', 'images/west/harvard.png'),
	('Notre Dame', 'images/west/notre_dame.png'),
	('Iowa State', 'images/west/iowa_state.png'),
	('Ohio State', 'images/west/ohio_state.png'),
	('Iona', 'images/west/iona.png'),
	('Kansas', 'images/south/kansas.png'),
	('Western Kentucky', 'images/south/w_kentucky.png'),
	('North Carolina', 'images/south/nc.png'),
	('Villanova', 'images/south/villanova.png'),
	('VCU', 'images/south/vcu_rams.png'),
	('Akron', 'images/south/akron.png'),
	('Michigan', 'images/south/mich.png'),
	('South Dakota St.', 'images/south/south_dakota_st.png'),
	('UCLA', 'images/south/ucla.png'),
	('Minnesota', 'images/south/minnesota.png'),
	('Florida', 'images/south/florida_gators.png'),
	('Northwestern St.', 'images/south/northwestern_state.png'),
	('San Diego State', 'images/south/san_diego_state.png'),
	('Oklahoma', 'images/south/ok.png'),
	('Georgetown', 'images/south/georgetown.png'),
	('Florida Gulf Coast', 'images/south/fla_gulf_coast.png'),
	('Indiana', 'images/east/indiana_hoosiers.png'),
	('LIU/JMU', 'images/east/liu_jamesmad.png'),
	('NC State', 'images/east/ncstate.png'),
	('Temple', 'images/east/temple.png'),
	('UNLV', 'images/east/unlv.png'),
	('California', 'images/east/cal_bears.png'),
	('Syracuse', 'images/east/syracuse_orange.png'),
	('Montana', 'images/east/montana.png'),
	('Butler', 'images/east/butler.png'),
	('Bucknell', 'images/east/bucknell.png'),
	('Marquette', 'images/east/marquette.png'),
	('Davidson', 'images/east/davidson.png'),
	('Illinois', 'images/east/illinois_alt.png'),
	('Colorado', 'images/east/colorado_buffalo.png'),
	('Miami', 'images/east/miami.png'),
	('Pacific', 'images/east/pacific_tigers.png');
	
INSERT INTO team_user
	(uid, bracket_location, tid)
	VALUES
	(1, '1-1', 1),
	(1, '1-3', 2);