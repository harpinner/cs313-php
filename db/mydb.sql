CREATE TABLE users(
   id  SERIAL PRIMARY KEY,
   username    varchar(80),
   email       varchar(80),
   pass_word varchar(80)
);


CREATE TABLE universes(
   id  SERIAL PRIMARY KEY,
   name varchar(80),
   description   TEXT,
   creator int references users(id),
   creation_date timestamp default current_timestamp
);


CREATE TABLE characters(
   id  SERIAL PRIMARY KEY,
   name varchar(80),
   details TEXT,
   creator int references users(id),
   creation_date timestamp default current_timestamp
);

CREATE TABLE stories(
   id  SERIAL PRIMARY KEY,
   title varchar(80),
   producer int references users(id),
   main_writer int references users(id),
   universe_id int references universes(id),
   description TEXT,
   creation_date timestamp default current_timestamp
);


CREATE TABLE timeline_periods(
	id SERIAL PRIMARY KEY,
	universe_id int references universes(id),
	title varchar(80),
	description TEXT,
	order_num int
);

CREATE TABLE storylines(
   id  SERIAL PRIMARY KEY,
   title varchar(80),
   author int references users(id),
   content TEXT,
   story int references stories(id),
   timeline_period int references timeline_periods(id),
   creation_date timestamp default current_timestamp
   
);



CREATE TABLE character_usage(
	id SERIAL PRIMARY KEY,
	character_id int references characters(id),
	storyline_id int references storylines(id)
);

CREATE TABLE contradictions(
	id SERIAL PRIMARY KEY,
	title varchar(80),
	description TEXT
);

CREATE TABLE character_contradictions(
	id SERIAL PRIMARY KEY,
	character_id int references characters(id),
	contradiction_id int references contradictions(id)
);

CREATE TABLE storyline_contradictions(
	id SERIAL PRIMARY KEY,
	storyline_id int references storylines(id),
	contradiction_id int references contradictions(id)
);

CREATE TABLE story_contradictions(
	id SERIAL PRIMARY KEY,
	story_id int references stories(id),
	contradiction_id int references contradictions(id)
);


CREATE TABLE timeline_period_contradictions(
	id SERIAL PRIMARY KEY,
	timeline_period_id int references timeline_periods(id),
	contradiction_id int references contradictions(id)
);

CREATE TABLE universe_contradictions(id SERIAL PRIMARY KEY,contradiction_id int references contradictions(id),universe_id int references universes(id));






SELECT * FROM information_schema.constraint_table_usage WHERE table_name = 'timeline_periods';

--ALTER TABLE timeline_periods RENAME COLUMN timeline_id TO universe_id;

SELECT universes.id, universes.name, universes.creator, users.username AS creator_name, universes.creation_date FROM universes JOIN users ON universes.creator = users.id;
INSERT INTO universes (name, description, creator) VALUES (value1, value2, value3); 
SELECT id,name,'character' AS type FROM characters UNION SELECT id,name,'universe' AS type FROM universes UNION SELECT id, title AS name, 'storyline' AS type FROM storylines UNION SELECT id, title AS name, 'timeline_period' AS type FROM timeline_periods;
ALTER TABLE contradictions ADD COLUMN author int references users(id);
SELECT id,username,email FROM users WHERE username = 'jchrispa' AND pass_word = 'Triple-buffered';

SELECT stories.id, stories.producer, universes.name AS universe_name, stories.main_writer, writers.username AS main_writer_name, producers.username AS pro_user_name,  stories.universe_id, stories.description, stories.creation_date FROM stories  JOIN users AS producers ON stories.producer = producers.id JOIN users AS writers ON stories.main_writer = writers.id JOIN universes ON stories.universe_id = universes.id WHERE producer = 7;
SELECT characters.id, characters.name, characters.creator, users.username, characters.creation_date FROM characters JOIN users ON characters.creator = users.id;
SELECT storylines.id, storylines.title, storylines.author, users.username, storylines.creation_date, stories.title AS storyTitle, timeline_periods.title AS event_I FROM storylines JOIN users ON storylines.author = users.id JOIN stories ON storylines.story = stories.id JOIN timeline_periods ON storylines.timeline_period = timeline_periods.id;
SELECT universes.id, universes.name, universes.creator, users.username AS creator_name, universes.creation_date FROM universes JOIN users ON universes.creator = users.id;
SELECT characters.id, characters.name, characters.creator, users.username, characters.creation_date FROM characters JOIN users ON characters.creator = users.id WHERE creator = 11;
SELECT universes.id, universes.name, universes.creator, users.username AS creator_name, universes.creation_date FROM universes JOIN users ON universes.creator = users.id WHERE creator = 11;
SELECT timeline_periods.id, timeline_periods.universe_id, universes.id AS universe, timeline_periods.title, timeline_periods.description, timeline_periods.order_num  FROM timeline_periods JOIN universes ON timeline_periods.universe_id = universes.id WHERE timeline_periods.universe_id = 3;
SELECT storylines.id, storylines.timeline_period, storylines.title, storylines.story, storylines.author, users.username, storylines.creation_date, stories.title AS storyTitle, timeline_periods.title AS event_I FROM storylines JOIN users ON storylines.author = users.id JOIN stories ON storylines.story = stories.id JOIN timeline_periods ON storylines.timeline_period = timeline_periods.id WHERE storylines.story = 5;
--universes.description




select id,title,producer,main_writer from stories;


















