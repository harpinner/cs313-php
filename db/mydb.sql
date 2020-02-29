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























