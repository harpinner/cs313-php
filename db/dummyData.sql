insert into timelines (universe_id) values (1);
insert into timelines (universe_id) values (2);
insert into timelines (universe_id) values (3);



insert into timeline_periods (timeline_id, title, description, order_num ) values (1, 'The War On Innovation', 'the ruling elite tries and fails to control or cease the rise of a magical internet', 1);
insert into timeline_periods (timeline_id, title, description, order_num ) values (1, 'Exposing of the Elite', 'the ruling elites hold on the media starts to wane rapidly as citizens become aware of the corruption of the rulign class', 2);
insert into timeline_periods (timeline_id, title, description, order_num ) values (1, 'Fall of the old order', 'the power of the ruling elite wanes as accountabilty for their actions starts to take hold', 3);

insert into timeline_periods (timeline_id, title, description, order_num ) values (2, 'the new normal', 'people reluctantly get used to the changes made from the magicking of the world', 2);
insert into timeline_periods (timeline_id, title, description, order_num ) values (2, 'Aftershocks', 'the world struggles to adjust to the massive changes to the world', 1);
insert into timeline_periods (timeline_id, title, description, order_num ) values (2, 'boiling point', 'forces behind the scenes causes things to get to a boling pont', 3);



insert into timeline_periods (timeline_id, title, description, order_num ) values (3, 'War Aftermath', 'the aftermath of the war and the damage caused', 3);
insert into timeline_periods (timeline_id, title, description, order_num ) values (3, 'War Climax', 'the war reaches its climax as the galaxy shakes from the impact', 3);
insert into timeline_periods (timeline_id, title, description, order_num ) values (3, 'War Middle', 'the war heats up', 2);
insert into timeline_periods (timeline_id, title, description, order_num ) values (3, 'War Start', 'Starting of the great war', 1);



SELECT universes.id, universes.name, universes.creator, universes.creation_date, users.username, users.id, users.email FROM universes INNER JOIN users ON universes.creator = users.id;


SELECT stories.id, stories.title, producers.username as p_name, producers.id AS p_id, producers.email as p_email, main_writers.username AS mw_name, main_writers.id AS mw_id, main_writers.email AS mw_email FROM stories LEFT JOIN users AS producers   ON stories.producer   = producers.id LEFT JOIN users AS main_writers  ON stories.main_writer = main_writers.id; 
SELECT stories.id, stories.title, stories.description, stories.creation_date, producers.username AS p_name, producers.id AS p_id, producers.email AS p_email, main_writers.username AS mw_name, main_writers.id AS mw_id, main_writers.email AS mw_email FROM stories  LEFT JOIN users AS producers   ON stories.producer   = producers.id LEFT JOIN users AS main_writers  ON stories.main_writer = main_writers.id WHERE stories.id = 1;
SELECT storylines.id, storylines.title, storylines.author, storylines.content, storylines.creation_date, users.id AS u_id, users.username, users.email, timeline_periods.id AS t_id, timeline_periods.title AS time_title FROM storylines  LEFT JOIN users ON storylines.author = users.id LEFT JOIN timeline_periods ON storylines.timeline_period = timeline_periods.id WHERE storylines.story = 1;

insert into storylines (title, author, content, story, timeline_period) values ('recruitment', 6, 'A poor innnocent man is kidnapped by a man claiming to need him to fight for the greater good' , 1, 1);
insert into storylines (title, author, content, story, timeline_period) values ('an idiotic betrayal', 8, 'The Rookie is given a traitors treatment for a very idiotic reason and in exasperation and rage he exposes his so-called masters on the internet' , 1, 2);
insert into storylines (title, author, content, story, timeline_period) values ('retribution', 6, 'After being lionized by the public the recruit hunts down and arrest the fools who nearly ended th world with their stupidity' , 1, 3);
insert into storylines (title, author, content, story, timeline_period) values ('a beginning forged', 6, 'A young man comes to learn at a blacksmith academy after discovering a gift with crafting' , 4, 4);
insert into storylines (title, author, content, story, timeline_period) values ('midterm clang', 6, 'our hero learns how to create a legendary weapon from the past' , 4, 5);
insert into storylines (title, author, content, story, timeline_period) values ('disarmamnent', 6, 'Our hero must join his knight girlfriend to forge a device capable of stopping the dommsday weapon he has inadvetadly forged' , 4, 6);
insert into storylines (title, author, content, story, timeline_period) values ('Revolution', 6, 'Corruption in the government leads to two seperate revolutions that overthrow the old order and bring about civil war' , 5, 7);
insert into storylines (title, author, content, story, timeline_period) values ('Lines', 6, 'The War Reaches nsane hieghts as galaxy ending superweapons are created and deployed.' , 5, 8);
insert into storylines (title, author, content, story, timeline_period) values ('Remorse', 6, 'The head of the intergalactic Arms company Mournes his loss of sales in peacetime' , 6, 9);
