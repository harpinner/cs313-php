--
-- PostgreSQL database dump
--

-- Dumped from database version 12.1
-- Dumped by pg_dump version 12.1

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: character_contradictions; Type: TABLE; Schema: public; Owner: Jared
--

CREATE TABLE public.character_contradictions (
    id integer NOT NULL,
    character_id integer,
    contradiction_id integer
);


ALTER TABLE public.character_contradictions OWNER TO "Jared";

--
-- Name: character_contradictions_id_seq; Type: SEQUENCE; Schema: public; Owner: Jared
--

CREATE SEQUENCE public.character_contradictions_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.character_contradictions_id_seq OWNER TO "Jared";

--
-- Name: character_contradictions_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: Jared
--

ALTER SEQUENCE public.character_contradictions_id_seq OWNED BY public.character_contradictions.id;


--
-- Name: character_usage; Type: TABLE; Schema: public; Owner: Jared
--

CREATE TABLE public.character_usage (
    id integer NOT NULL,
    character_id integer,
    storyline_id integer
);


ALTER TABLE public.character_usage OWNER TO "Jared";

--
-- Name: character_usage_id_seq; Type: SEQUENCE; Schema: public; Owner: Jared
--

CREATE SEQUENCE public.character_usage_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.character_usage_id_seq OWNER TO "Jared";

--
-- Name: character_usage_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: Jared
--

ALTER SEQUENCE public.character_usage_id_seq OWNED BY public.character_usage.id;


--
-- Name: characters; Type: TABLE; Schema: public; Owner: Jared
--

CREATE TABLE public.characters (
    id integer NOT NULL,
    name character varying(80),
    details text,
    creator integer,
    creation_date timestamp without time zone DEFAULT CURRENT_TIMESTAMP
);


ALTER TABLE public.characters OWNER TO "Jared";

--
-- Name: characters_id_seq; Type: SEQUENCE; Schema: public; Owner: Jared
--

CREATE SEQUENCE public.characters_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.characters_id_seq OWNER TO "Jared";

--
-- Name: characters_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: Jared
--

ALTER SEQUENCE public.characters_id_seq OWNED BY public.characters.id;


--
-- Name: contradictions; Type: TABLE; Schema: public; Owner: Jared
--

CREATE TABLE public.contradictions (
    id integer NOT NULL,
    title character varying(80),
    description text
);


ALTER TABLE public.contradictions OWNER TO "Jared";

--
-- Name: contradictions_id_seq; Type: SEQUENCE; Schema: public; Owner: Jared
--

CREATE SEQUENCE public.contradictions_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.contradictions_id_seq OWNER TO "Jared";

--
-- Name: contradictions_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: Jared
--

ALTER SEQUENCE public.contradictions_id_seq OWNED BY public.contradictions.id;


--
-- Name: stories; Type: TABLE; Schema: public; Owner: Jared
--

CREATE TABLE public.stories (
    id integer NOT NULL,
    title character varying(80),
    producer integer,
    main_writer integer,
    universe_id integer,
    description text,
    creation_date timestamp without time zone DEFAULT CURRENT_TIMESTAMP
);


ALTER TABLE public.stories OWNER TO "Jared";

--
-- Name: stories_id_seq; Type: SEQUENCE; Schema: public; Owner: Jared
--

CREATE SEQUENCE public.stories_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.stories_id_seq OWNER TO "Jared";

--
-- Name: stories_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: Jared
--

ALTER SEQUENCE public.stories_id_seq OWNED BY public.stories.id;


--
-- Name: story_contradictions; Type: TABLE; Schema: public; Owner: Jared
--

CREATE TABLE public.story_contradictions (
    id integer NOT NULL,
    story_id integer,
    contradiction_id integer
);


ALTER TABLE public.story_contradictions OWNER TO "Jared";

--
-- Name: story_contradictions_id_seq; Type: SEQUENCE; Schema: public; Owner: Jared
--

CREATE SEQUENCE public.story_contradictions_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.story_contradictions_id_seq OWNER TO "Jared";

--
-- Name: story_contradictions_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: Jared
--

ALTER SEQUENCE public.story_contradictions_id_seq OWNED BY public.story_contradictions.id;


--
-- Name: storyline_contradictions; Type: TABLE; Schema: public; Owner: Jared
--

CREATE TABLE public.storyline_contradictions (
    id integer NOT NULL,
    storyline_id integer,
    contradiction_id integer
);


ALTER TABLE public.storyline_contradictions OWNER TO "Jared";

--
-- Name: storyline_contradictions_id_seq; Type: SEQUENCE; Schema: public; Owner: Jared
--

CREATE SEQUENCE public.storyline_contradictions_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.storyline_contradictions_id_seq OWNER TO "Jared";

--
-- Name: storyline_contradictions_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: Jared
--

ALTER SEQUENCE public.storyline_contradictions_id_seq OWNED BY public.storyline_contradictions.id;


--
-- Name: storylines; Type: TABLE; Schema: public; Owner: Jared
--

CREATE TABLE public.storylines (
    id integer NOT NULL,
    title character varying(80),
    author integer,
    content text,
    story integer,
    timeline_period integer,
    creation_date timestamp without time zone DEFAULT CURRENT_TIMESTAMP
);


ALTER TABLE public.storylines OWNER TO "Jared";

--
-- Name: storylines_id_seq; Type: SEQUENCE; Schema: public; Owner: Jared
--

CREATE SEQUENCE public.storylines_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.storylines_id_seq OWNER TO "Jared";

--
-- Name: storylines_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: Jared
--

ALTER SEQUENCE public.storylines_id_seq OWNED BY public.storylines.id;


--
-- Name: timeline_contradictions; Type: TABLE; Schema: public; Owner: Jared
--

CREATE TABLE public.timeline_contradictions (
    id integer NOT NULL,
    timeline_id integer,
    contradiction_id integer
);


ALTER TABLE public.timeline_contradictions OWNER TO "Jared";

--
-- Name: timeline_contradictions_id_seq; Type: SEQUENCE; Schema: public; Owner: Jared
--

CREATE SEQUENCE public.timeline_contradictions_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.timeline_contradictions_id_seq OWNER TO "Jared";

--
-- Name: timeline_contradictions_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: Jared
--

ALTER SEQUENCE public.timeline_contradictions_id_seq OWNED BY public.timeline_contradictions.id;


--
-- Name: timeline_period_contradictions; Type: TABLE; Schema: public; Owner: Jared
--

CREATE TABLE public.timeline_period_contradictions (
    id integer NOT NULL,
    timeline_period_id integer,
    contradiction_id integer
);


ALTER TABLE public.timeline_period_contradictions OWNER TO "Jared";

--
-- Name: timeline_period_contradictions_id_seq; Type: SEQUENCE; Schema: public; Owner: Jared
--

CREATE SEQUENCE public.timeline_period_contradictions_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.timeline_period_contradictions_id_seq OWNER TO "Jared";

--
-- Name: timeline_period_contradictions_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: Jared
--

ALTER SEQUENCE public.timeline_period_contradictions_id_seq OWNED BY public.timeline_period_contradictions.id;


--
-- Name: timeline_periods; Type: TABLE; Schema: public; Owner: Jared
--

CREATE TABLE public.timeline_periods (
    id integer NOT NULL,
    timeline_id integer,
    title character varying(80),
    description text,
    order_num integer
);


ALTER TABLE public.timeline_periods OWNER TO "Jared";

--
-- Name: timeline_periods_id_seq; Type: SEQUENCE; Schema: public; Owner: Jared
--

CREATE SEQUENCE public.timeline_periods_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.timeline_periods_id_seq OWNER TO "Jared";

--
-- Name: timeline_periods_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: Jared
--

ALTER SEQUENCE public.timeline_periods_id_seq OWNED BY public.timeline_periods.id;


--
-- Name: timelines; Type: TABLE; Schema: public; Owner: Jared
--

CREATE TABLE public.timelines (
    id integer NOT NULL,
    universe_id integer,
    creation_date timestamp without time zone DEFAULT CURRENT_TIMESTAMP
);


ALTER TABLE public.timelines OWNER TO "Jared";

--
-- Name: timelines_id_seq; Type: SEQUENCE; Schema: public; Owner: Jared
--

CREATE SEQUENCE public.timelines_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.timelines_id_seq OWNER TO "Jared";

--
-- Name: timelines_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: Jared
--

ALTER SEQUENCE public.timelines_id_seq OWNED BY public.timelines.id;


--
-- Name: universes; Type: TABLE; Schema: public; Owner: Jared
--

CREATE TABLE public.universes (
    id integer NOT NULL,
    name character varying(80),
    description text,
    creator integer,
    creation_date timestamp without time zone DEFAULT CURRENT_TIMESTAMP
);


ALTER TABLE public.universes OWNER TO "Jared";

--
-- Name: universes_id_seq; Type: SEQUENCE; Schema: public; Owner: Jared
--

CREATE SEQUENCE public.universes_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.universes_id_seq OWNER TO "Jared";

--
-- Name: universes_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: Jared
--

ALTER SEQUENCE public.universes_id_seq OWNED BY public.universes.id;


--
-- Name: users; Type: TABLE; Schema: public; Owner: Jared
--

CREATE TABLE public.users (
    id integer NOT NULL,
    username character varying(80),
    email character varying(80),
    pass_word character varying(80)
);


ALTER TABLE public.users OWNER TO "Jared";

--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: Jared
--

CREATE SEQUENCE public.users_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO "Jared";

--
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: Jared
--

ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;


--
-- Name: character_contradictions id; Type: DEFAULT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.character_contradictions ALTER COLUMN id SET DEFAULT nextval('public.character_contradictions_id_seq'::regclass);


--
-- Name: character_usage id; Type: DEFAULT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.character_usage ALTER COLUMN id SET DEFAULT nextval('public.character_usage_id_seq'::regclass);


--
-- Name: characters id; Type: DEFAULT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.characters ALTER COLUMN id SET DEFAULT nextval('public.characters_id_seq'::regclass);


--
-- Name: contradictions id; Type: DEFAULT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.contradictions ALTER COLUMN id SET DEFAULT nextval('public.contradictions_id_seq'::regclass);


--
-- Name: stories id; Type: DEFAULT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.stories ALTER COLUMN id SET DEFAULT nextval('public.stories_id_seq'::regclass);


--
-- Name: story_contradictions id; Type: DEFAULT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.story_contradictions ALTER COLUMN id SET DEFAULT nextval('public.story_contradictions_id_seq'::regclass);


--
-- Name: storyline_contradictions id; Type: DEFAULT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.storyline_contradictions ALTER COLUMN id SET DEFAULT nextval('public.storyline_contradictions_id_seq'::regclass);


--
-- Name: storylines id; Type: DEFAULT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.storylines ALTER COLUMN id SET DEFAULT nextval('public.storylines_id_seq'::regclass);


--
-- Name: timeline_contradictions id; Type: DEFAULT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.timeline_contradictions ALTER COLUMN id SET DEFAULT nextval('public.timeline_contradictions_id_seq'::regclass);


--
-- Name: timeline_period_contradictions id; Type: DEFAULT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.timeline_period_contradictions ALTER COLUMN id SET DEFAULT nextval('public.timeline_period_contradictions_id_seq'::regclass);


--
-- Name: timeline_periods id; Type: DEFAULT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.timeline_periods ALTER COLUMN id SET DEFAULT nextval('public.timeline_periods_id_seq'::regclass);


--
-- Name: timelines id; Type: DEFAULT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.timelines ALTER COLUMN id SET DEFAULT nextval('public.timelines_id_seq'::regclass);


--
-- Name: universes id; Type: DEFAULT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.universes ALTER COLUMN id SET DEFAULT nextval('public.universes_id_seq'::regclass);


--
-- Name: users id; Type: DEFAULT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);


--
-- Data for Name: character_contradictions; Type: TABLE DATA; Schema: public; Owner: Jared
--

COPY public.character_contradictions (id, character_id, contradiction_id) FROM stdin;
\.


--
-- Data for Name: character_usage; Type: TABLE DATA; Schema: public; Owner: Jared
--

COPY public.character_usage (id, character_id, storyline_id) FROM stdin;
\.


--
-- Data for Name: characters; Type: TABLE DATA; Schema: public; Owner: Jared
--

COPY public.characters (id, name, details, creator, creation_date) FROM stdin;
1	Toby Torrance	Toby is a creative kitchen assistant who suffers from a severe phobia of chickens\r\n~ A Detailed Character Profile ~\r\nToby Garth Torrance is a 28-year-old kitchen assistant who enjoys cycling, watching sport and watching television. He is creative and energetic, but can also be very dull and a bit disloyal.\r\nHe is a French Christian who defines himself as asexual. He has a degree in food science. He has a severe phobia of chickens, and is obsessed with Donald Trump. \r\nPhysically, Toby is slightly overweight but otherwise in good shape. He is average-height with dark chocolate skin, brown hair and green eyes. He has a tattoo of Donald Trump on his left shoulder.\r\nHe grew up in an upper class neighbourhood. His parents separated when he was small, but remained friends and provided a happy, stable home. \r\nToby''s best friend is a kitchen assistant called Laurie Austin. They have a very firey friendship. He also hangs around with Andre Kumar and Mason Morrison. They enjoy spreading fake news on Facebook together. \r\nBasic Information\r\nName:\tToby Garth Torrance\r\nNickname:\tDull Toby\r\nReason for nickname:\tDescriptive\r\nDate of birth:\tSaturday, 15th Feb 1992 (Age 28)\r\nStar sign:\tAquarius\r\nNationality:\tFrench\r\nEthnicity:\tLatino/Hispanic\r\nSocial class:\tUpper class\r\nReligion:\tChristian\r\nSexuality:\tAsexual\r\nEducation:\tBachelor''s degree\r\nCourse:\tFood science\r\nPolitical views:\tFar right\r\nCareer paths:\tWriter / Culinary \r\nPhysical characteristics\r\nHeight:\taverage\r\nShape:\toverweight\r\nBuild:\twell-built\r\nHair colour:\tbrown (naturally black)\r\nEyes:\tgreen\r\nFace shape:\tlong\r\nGlasses/lenses:\tcontact lenses\r\nDistinguishing marks:\ta tattoo of Donald Trump on his left shoulder\r\nOther words that might be used:\taverage, brown-haired, brunette, curvacious, dark-haired, fair, moderate, muscular, normal, ordinary, overweight, well-built\r\nPersonality\r\nPositive characteristics:\tcreative, energetic\r\nNegative characteristics:\tdull, disloyal\r\nWords often used:\tcreative, disloyal, dull, energetic\r\nOther words that might be used:\tactive, arid, blimpish, blunt, bourgeois, bovine, canty, cautious, conservative, constructive, conventional, creative, damp, deadened, deadening, dense, dim, disloyal, drab, dreary, dull, dumb, edgeless, educated, energetic, enlightened, faithless, fanciful, fictive, flat, fusty, generative, gray, grey, gumptious, heavy, hidebound, humdrum, imaginative, indefatigable, industrious, informed, ingenious, instructed, insurgent, inventive, knowing, knowledgeable, lackluster, leaden, learned, lettered, literate, lusterless, materialistic, merry, monotonous, mute, muted, mutinous, nonprogressive, notional, numerate, obtuse, originative, physical, productive, rebellious, recreant, schooled, seditious, self-educated, semiliterate, slow, sluggish, snappy, soft, standpat, strenuous, stupid, subversive, taught, tedious, tireless, tiresome, traditionalist, traitorous, treasonable, treasonous, tutored, ultraconservative, un-american, unfaithful, unflagging, uninteresting, unpatriotic, unprogressive, unsharpened, unwearying, up-and-coming, vigorous, wearisome, well-educated, well-read, yeasty, zippy\r\nMoral:\tnot at all\r\nStable:\tsometimes\r\nLoyal:\tnot at all\r\nGenerous:\tsometimes\r\nExtrovert:\tnot at all\r\nCompassionate:\tsometimes\r\nIQ:\t83\r\nHobbies:\tcycling, watching sport, watching television, spreading fake news on Facebook, working on cars, stealing candy from babies, binge-watching boxed sets, sailing, worship, escapology, podcasting, repressing minorities\r\nPhobias:\tchickens\r\nObsessions:\tDonald Trump\r\nDiet\teats meat\r\nFavourite foods:\tcarbonara, suet pudding\r\nEmployment\r\nBlogger\tself-employed\t2008 - 2017\tresigned\r\nKitchen assistant\tThe Town Cafe\t2017 - present\t\r\nBackground\r\nEarly years\tToby grew up in a wealthy neighbourhood. His parents separated when he was small, but remained friends and provided a happy, stable home.\r\nFormative years\tToby got is first job as a blogger at age 16\r\n\tToby went to univeristy and got a degree.\r\n\tHe came out as asexual at age 25. His relationship with mother was strained at first but she accepted it with time.\r\nRelationships\r\nFriends\r\nLaurie Bernice Austin\t\r\n(Lifespan: 1997 - present)\r\nRelation\tFriend\r\nOccupation\tScientist\r\nAge\t23\r\nRelationship\tThey have a very firey friendship\r\nAndre Simone Kumar\t\r\n(Lifespan: 1991 - present)\r\nRelation\tFriend\r\nOccupation\tReceptionist\r\nAge\t29\r\nRelationship\tThey are inseparable\r\nMason Ruben Morrison\t\r\n(Lifespan: 1991 - present)\r\nRelation\tFriend\r\nOccupation\tLab assistant\r\nAge\t29\r\nRelationship\tThey are inseparable\r\nParents\r\nVienna Josephine Perry\t\r\n(Lifespan: 1958 - present)\r\nRelation\tMother\r\nOccupation\tElectrician\r\nAge\t62\r\nRelationship\tGenerally harmonious. Mother found it difficult coming to terms with his sexuality at first, but is fine with it now.\r\nCharles Norman Torrance\t\r\n(Lifespan: 1958 - present)\r\nRelation\tFather\r\nOccupation\tScreenplay writer\r\nAge\t62\r\nRelationship\tGenerally harmonious. \r\nSiblings\r\nMichael Jerome Perry\t\r\n(Lifespan: 1979 - present)\r\nRelation\tHalf brother (shared mother)\r\nOccupation\tManagement consultant\r\nAge\t41\r\nRelationship\tMichael has always looked out for Toby.\r\nBruno Nathanael Torrance\t\r\n(Lifespan: 1979 - present)\r\nRelation\tHalf brother (shared father)\r\nOccupation\tArtist\r\nAge\t41\r\nRelationship\tToby and Bruno grew up in separate homes but see each other a lot. Bruno has always looked out for Toby.\r\nCarole Lyla Torrance\t\r\n(Lifespan: 1983 - present)\r\nRelation\tHalf sister (shared father)\r\nOccupation\tNovelist\r\nAge\t36\r\nRelationship\tToby and Carole grew up in separate homes but see each other a lot. \r\nJade Minnie Torrance\t\r\n(Lifespan: 1987 - present)\r\nRelation\tSister\r\nOccupation\tScreenplay writer\r\nAge\t33\r\nRelationship\tThey are inseparable.\r\nDaniel Donald Torrance\t\r\n(Lifespan: 1990 - present)\r\nRelation\tBrother\r\nOccupation\tBuilder\r\nAge\t30\r\nRelationship\tThey get on well most of the time.\r\nPolitical Views\r\nAbortion:\tundecided\r\nRacial equality:\tvery pro\r\nLGBTQ rights:\tvery pro\r\nSubsidised healthcare:\tagainst\r\nGun control:\tpro\r\nNuclear disarmament:\tagainst\r\nDeath penalty:\tundecided\r\nTax cuts for the wealthy:\tpro\r\nProtecting the environment:\tundecided\r\nTimeline\r\n1992\tAge 0\tToby Torrance is born\r\n2008\tAge 16\tStarts self-employment as blogger\r\n2017\tAge 25\tToby came out as asexual\r\n\t\tStops working as blogger \r\n\t\tStarts work at The Town Cafe at kitchen assistant\r\n2020-02-08\t\tPresent Day\r\n\r\nFrom <https://www.character-generator.org.uk/eptqfek/toby-is-creative-kitchen-assistant-who-suffers-from-severe-phobia-of-chickens.html#personality> \r\n\r\n	8	2020-02-07 21:29:11.291519
2	Lori Cockle	Laura is a murderous tradesperson, traumatized by her father leaving when she was two.\r\n~ A Detailed Character Profile ~\r\n\r\nLaura May Cockle is a 40-year-old tradesperson with an unfortunate habit of bumping off the people around her. She is creative and loveable, but can also be very disloyal and a bit violent.\r\nHer first victim was her late girlfriend, Bethanie Shelley Walsh, who she killed because she looked at her funny. She has since killed two more people: her friend Garfield, and her friend Shanice.\r\nShe is a Colombian Hindu who defines herself as bisexual. She started college but never finished the course. She has a severe phobia of sausages\r\nPhysically, Laura is slightly overweight but otherwise in good shape. She is short with olive skin, purple hair and blue eyes. She has Scratch on the cheek from tustle with Garfield Franciszek Stewart just before killing him..\r\nShe grew up in a working class neighborhood. Her father left when she was young, leaving her with her mother, who was an addict. \r\nShe is currently single. Her most recent romance was with a novelist called Kristina Jorja Stevens, who was the same age as her. They broke up because the relationship was very passionate and became too intense.\r\nLaura''s best friend is a tradesperson called Jerome Perez. They get on well most of the time. They enjoy swimming together. \r\nBasic Information\r\nName:\tLaura May Cockle\r\nNicknames:\tLori / Short Laura\r\nReason for nicknames:\tDerived from Laura / Descriptive\r\nDate of birth:\tMonday, 18th Feb 1980 (Age 40)\r\nStar sign:\tAquarius\r\nNationality:\tColombian\r\nEthnicity:\tLatino/Hispanic\r\nSocial class:\tWorking class\r\nReligion:\tHindu\r\nSexuality:\tBisexual\r\nEducation:\tSome college\r\nPolitical views:\tFar left\r\nRelationship status:\tSingle\r\nCareer path:\tTradesperson \r\nPhysical characteristics\r\nHeight:\tshort\r\nShape:\toverweight\r\nBuild:\twell-built\r\nHair colour:\tpurple (naturally brown)\r\nEyes:\tblue\r\nFace shape:\tround\r\nGlasses/lenses:\tnone\r\nDistinguishing marks:\tScratch on the cheek from tustle with Garfield Franciszek Stewart just before killing him.\r\nOther words that might be used:\tclipped, curvacious, little, muscular, overweight, punky, purple-haired, short, squat, stumpy, well-built\r\nPersonality\r\nPositive characteristics:\tcreative, loveable\r\nNegative characteristics:\tdisloyal, violent\r\nWords often used:\tcreative, disloyal, loveable, violent\r\nOther words that might be used:\tbighearted, bounteous, bountiful, broad, broad-minded, constructive, convulsive, creative, crimson, disloyal, faithless, fanciful, ferocious, fictive, fierce, free, furious, generative, giving, hot, imaginative, inexact, ingenious, insurgent, intense, inventive, lashing, left, liberal, liberalistic, loveable, lurid, mutinous, neoliberal, notional, openhanded, originative, productive, progressive, raging, rampageous, rebellious, recreant, red, reformist, savage, seditious, socialized, stupid, subversive, tearing, tolerant, tough, traitorous, treasonable, treasonous, un-american, unfaithful, unintelligent, unpatriotic, vehement, violent, welfarist, wild, yeasty\r\nMoral:\tsometimes\r\nStable:\tsometimes\r\nLoyal:\tnot at all\r\nGenerous:\tvery\r\nExtrovert:\tsometimes\r\nCompassionate:\tvery\r\nIQ:\t85\r\nHobbies:\twatching television, swimming, murder, duck herding, travelling, podcasting, photography, escapology\r\nBad habits:\tbumping off her friends\r\nPhobias:\tsausages\r\nDiet\teats meat\r\nFavourite foods:\tsoup, carbonara\r\nEmployment\r\nTea maker\tSmith and Sons\t1996 - 1999\tresigned\r\nTradesperson''s assistant\tSmith and Sons\t1999 - 2003\tresigned\r\nTrainee tradesperson\tDana and Daughters\t2003 - 2006\tresigned\r\nTradesperson\tPat and Sons\t2006 - 2016\tresigned (7 year itch)\r\nTradesperson\tSimon and Sons\t2016 - present\t\r\nBackground\r\nEarly years\tLaura grew up in an impoverished neighbourhood. Her father left when she was young, leaving her with her mother, who was an addict.\r\nFormative years\tLaura got is first job as a tea maker at age 16\r\n\tShe came out as bisexual at age 18. \r\n\tLaura started college but quit part way through the course.\r\nMost traumatic childhood experience:\tHer father leaving when she was two.\r\nRelationships\r\nFriends\r\nShanice Selina O''Sullivan\t\r\n(Lifespan: 1983 - 2010)\r\nRelation\tFriend\r\nOccupation\tNovelist\r\nAge\tDied in 2010 aged 27. (Would have been 37.)\r\nCause of death\tmurdered - shot\r\nRelationship\tLaura killed her\r\nJerome Bruce Perez\t\r\n(Lifespan: 1977 - present)\r\nRelation\tFriend\r\nOccupation\tJournalist\r\nAge\t43\r\nRelationship\tThey get on well most of the time\r\nGarfield Franciszek Stewart\t\r\n(Lifespan: 1976 - 1996)\r\nRelation\tFriend\r\nOccupation\tPlumber\r\nAge\tDied in 1996 aged 20. (Would have been 44.)\r\nCause of death\tmurdered - shot\r\nRelationship\tLaura killed him\r\nParents\r\nOttilie Kim Cockle\t\r\n(Lifespan: 1964 - present)\r\nRelation\tMother\r\nOccupation\tElectrician\r\nAge\t56\r\nRelationship\tFractious. \r\nMatthew Reginald Hernandez\t\r\n(Lifespan: 1963 - present)\r\nRelation\tFather\r\nOccupation\tBurglar\r\nAge\t57\r\nRelationship\tNon-existent.\r\nFormer Partners\r\nBethanie Shelley Walsh\t\r\n(Lifespan: 1976 - 1997)\r\nRelation\tLate girlfriend (1 year : 1996 - 1997)\r\nOccupation\tKitchen assistant\r\nAge\tDied in 1997 aged 21. (Would have been 44.)\r\nCause of death\tmurdered - shot\r\nRelationship\tLaura killed her\r\nWendy Regina O''Neill\t\r\n(Lifespan: 1974 - 2015)\r\nRelation\tEx-girlfriend (1 year : 1999 - 2000)\r\nOccupation\tLab assistant\r\nReason for breakup\tLaura felt she could get someone hotter\r\nAge\tDied in 2015 aged 41. (Would have been 46.)\r\nCause of death\taccident - falling through ice into a lake\r\nRelationship\tThey remained friends until she died\r\nRicky Micheal Clarke\t\r\n(Lifespan: 1974 - 2018)\r\nRelation\tEx-boyfriend (1 year : 2004 - 2005)\r\nOccupation\tLab assistant\r\nReason for breakup\tRicky was afraid of Laura\r\nAge\tDied in 2018 aged 44. (Would have been 46.)\r\nCause of death\tpneumonia\r\nRelationship\tThey remained friends until he died\r\nEliot Verity Macdonald\t\r\n(Lifespan: 1981 - present)\r\nRelation\tEx-boyfriend (1 year : 2006 - 2007)\r\nOccupation\tJournalist\r\nReason for breakup\tEliot felt threatened by Laura''s intelligence\r\nAge\t39\r\nRelationship\tNo longer keep in touch\r\nGregory Hunter Reed\t\r\n(Lifespan: 1980 - present)\r\nRelation\tEx-boyfriend (1 year : 2008 - 2009)\r\nOccupation\tCarpenter\r\nReason for breakup\tGregory wanted a quieter life than Laura could provide\r\nAge\t40\r\nRelationship\tOccasional frosty contact\r\nKristina Jorja Stevens\t\r\n(Lifespan: 1981 - present)\r\nRelation\tEx-girlfriend (1 year : 2011 - 2012)\r\nOccupation\tNovelist\r\nReason for breakup\tthe relationship was very passionate and became too intense\r\nAge\t39\r\nRelationship\tRemained friends\r\nPolitical Views\r\nAbortion:\tvery pro\r\nRacial equality:\tvery pro\r\nLGBTQ rights:\tvery pro\r\nSubsidised healthcare:\tvery pro\r\nGun control:\tvery pro\r\nNuclear disarmament:\tvery pro\r\nDeath penalty:\tagainst\r\nTax cuts for the wealthy:\tvery against\r\nProtecting the environment:\tvery pro\r\nVictims\r\nBethanie Shelley Walsh (late girlfriend)\r\nGarfield Franciszek Stewart (friend)\r\nShanice Selina O''Sullivan (friend)\r\nTimeline\r\n1980\tAge 0\tLaura Cockle is born\r\n1982\tAge 2\tFather, Matthew Reginald Hernandez walks out\r\n1987\tAge 7\tLaura murders an innocent hamster\r\n1996\tAge 16\tLaura murders Garfield Franciszek Stewart.\r\n\t\tFriend, Garfield Franciszek Stewart dies aged 20 (murdered - shot)\r\n\t\tGets together with Bethanie Shelley Walsh.\r\n\t\tStarts work at Smith and Sons at tea maker\r\n1997\tAge 17\tLaura murders Bethanie Shelley Walsh.\r\n\t\tGirlfriend, Bethanie Shelley Walsh dies aged 21 (murdered - shot)\r\n1998\tAge 18\tLaura came out as bisexual\r\n1999\tAge 19\tGets together with Wendy Regina O''Neill.\r\n\t\tResigns from job as tea maker at Smith and Sons \r\n\t\tStarts work at Smith and Sons at tradesperson''s assistant\r\n2000\tAge 20\tRelationship with Wendy Regina O''Neill ends (Laura felt she could get someone hotter).\r\n2003\tAge 23\tResigns from job as tradesperson''s assistant at Smith and Sons \r\n\t\tStarts work at Dana and Daughters at trainee tradesperson\r\n2004\tAge 24\tGets together with Ricky Micheal Clarke.\r\n2005\tAge 25\tRelationship with Ricky Micheal Clarke ends (Ricky was afraid of Laura).\r\n2006\tAge 26\tGets together with Eliot Verity Macdonald.\r\n\t\tResigns from job as trainee tradesperson at Dana and Daughters \r\n\t\tStarts work at Pat and Sons at tradesperson\r\n2007\tAge 27\tRelationship with Eliot Verity Macdonald ends (Eliot felt threatened by Laura''s intelligence).\r\n2008\tAge 28\tGets together with Gregory Hunter Reed.\r\n2009\tAge 29\tRelationship with Gregory Hunter Reed ends (Gregory wanted a quieter life than Laura could provide).\r\n2010\tAge 30\tLaura murders Shanice Selina O''Sullivan.\r\n\t\tFriend, Shanice Selina O''Sullivan dies aged 27 (murdered - shot)\r\n2011\tAge 31\tGets together with Kristina Jorja Stevens.\r\n2012\tAge 32\tRelationship with Kristina Jorja Stevens ends (the relationship was very passionate and became too intense).\r\n2015\tAge 35\tEx-girlfriend, Wendy Regina O''Neill dies aged 41 (accident - falling through ice into a lake)\r\n2016\tAge 36\tResigns (7 year itch) from job as tradesperson at Pat and Sons \r\n\t\tStarts work at Simon and Sons at tradesperson\r\n2018\tAge 38\tEx-boyfriend, Ricky Micheal Clarke dies aged 44 (pneumonia)\r\n2020-02-08\t\tPresent Day\r\nFor privacy reasons, your creation will be removed from the web at 1:41am GMT and later deleted from our server, unless you choose to publish it.\r\n\r\nFrom <https://www.character-generator.org.uk/?i=1izf72b> \r\n\r\n	5	2020-02-07 21:31:55.055237
3	Harry Bond	 Harriet is a giving gym assistant who enjoys bowling\r\n~ A Biography ~\r\n\r\nHarriet Suzanne Bond is a 22-year-old gym assistant who enjoys bowling, tennis and vandalising bus stops. She is giving and loveable, but can also be very sadistic and a bit boring.\r\n\r\nShe is French who defines herself as straight. She started studying sports science at college but never finished the course.\r\n\r\nPhysically, Harriet is in pretty good shape. She is average-height with bronze skin, red hair and blue eyes. She has one or two distinguishing features including a birthmark on her forehead and asymmetrical ears.\r\n\r\nShe grew up in a working class neighbourhood. She was raised in a happy family home with two loving parents.\r\n\r\nShe is currently single. Her most recent romance was with an artist called Morgan Horace Cooper, who was the same age as her. They broke up because Harriet found Morgan''s political views too conservative.\r\n\r\nHarriet''s best friend is a gym assistant called Nadia Reed. They are inseparable. She also hangs around with Darnell Jeffery and Joel Rhodes. They enjoy planking together.\r\nFor privacy reasons, your creation will be removed from the web at 2:05am GMT and later deleted from our server, unless you choose to publish it.\r\n	17	2020-02-07 21:36:42.179929
4	Charlie Doop	\r\nCharlotte is a generous part time admin assistant who enjoys jigsaw puzzles\r\n~ A Biography ~\r\n\r\n\r\nCharlotte Rhiannon Doop is a 20-year-old part time admin assistant who enjoys jigsaw puzzles, social card games and escapology. She is generous and entertaining, but can also be very grumpy and a bit sneaky.\r\n\r\nShe is a Thai Hindu who defines herself as gay. She started studying business studies at college but never finished the course.\r\n\r\nPhysically, Charlotte is in pretty good shape. She is very short with olive skin, brown hair and black eyes.\r\n\r\nShe grew up in an upper class neighbourhood. After her mother died when she was young, she was raised by her father\r\n\r\nShe is currently in a relationship with Caprice Hannah Mitchell. Caprice is the same age as her and works as a scientist.\r\n\r\nCharlotte''s best friend is a part time admin assistant called Troy Wang. They are inseparable. She also hangs around with Abel Garcia and Shelby Reyes. They enjoy checking news stories against Snopes together.\r\nFor privacy reasons, your creation will be removed from the web at 2:07am GMT and later deleted from our server, unless you choose to publish it.\r\n	11	2020-02-07 21:37:26.010291
5	Phil Doop	\r\nPhil is an inspiring former local activist who suffers from a severe phobia of baked beans\r\n~ A Biography ~\r\n\r\nPhil Tristan Doop is a 30-year-old former local activist who enjoys walking, adult coloring books and stealing candy from babies. He is inspiring and exciting, but can also be very lazy and a bit untrustworthy.\r\n\r\nHe is the older brother of Charlie Doop\r\n\r\nHe is a Canadian Christian. He didn''t finish school. He has a severe phobia of baked beans\r\n\r\nPhysically, Phil is in pretty good shape. He is average-height with almond skin, white hair and black eyes.\r\n\r\nHe grew up in a middle class neighborhood. After his mother died when he was young, he was raised by his father\r\n\r\nHe is currently single. His most recent romance was with an admin assistant called Agatha Tamsyn Greene, who was 12 years older than him. They broke up because Agatha felt in the shadow of Phil''s brilliance.\r\n\r\nPhil''s best friend is a former local activist called Thom Jordan. They are inseparable. He also hangs around with Elis Warren and Davion Greenwood. They enjoy eating out together.\r\n\r\n\r\n	13	2020-02-07 21:38:14.964291
6	Steve Sparkle	\r\nSteven is a considerate medical student who is obsessed with gangnam style\r\n~ A Biography ~\r\n\r\nSteven Toby Sparkle is a 21-year-old medical student who enjoys painting, tennis and extreme ironing. He is considerate and inspiring, but can also be very boring and a bit greedy.\r\n\r\nHe is an American Muslim who defines himself as straight. He is currently at college. studying medicine. He is obsessed with gangnam style.\r\n\r\nPhysically, Steven is slightly overweight but otherwise in good shape. He is very tall with dark chocolate skin, brown hair and black eyes.\r\n\r\nHe grew up in a middle class neighbourhood. He was raised in a happy family home with two loving parents.\r\n\r\nHe is currently in a relationship with Elin Eloise Murphy. Elin is 1 years older than him and works as a receptionist.\r\n\r\nSteven''s best friend is a medical student called Deanna Wilson. They are inseparable. He also hangs around with Andre Lloyd and Otto Barnes. They enjoy upcycling together.\r\nFor privacy reasons, your creation will be removed from the web at 2:13am GMT and later deleted from our server, unless you choose to publish it.\r\n	14	2020-02-07 21:38:48.038392
7	Hannah Rockatansky	Harriet is an exciting part time health centre receptionist who suffers from a severe phobia of cats\r\n~ A Biography ~\r\n\r\nHarriet Hannah Rockatansky is a 20-year-old part time health centre receptionist who enjoys recycling, bowling and cycling. She is exciting and brave, but can also be very unfriendly and a bit standoffish.\r\n\r\nShe is an Italian Muslim who defines herself as bisexual. She started studying medicine at college but never finished the course. She has a severe phobia of cats, and is obsessed with colouring in.\r\n\r\nPhysically, Harriet is in pretty good shape. She is very tall with walnut skin, brown hair and brown eyes. She has a tattoo of a rainbow on her upper back.\r\n\r\nShe grew up in a working class neighbourhood. She was raised by her father, her mother having left when she was young.\r\n\r\nShe is currently in a relationship with Eric Devon Lewis. Eric is the same age as her and works as a student.\r\n\r\nHarriet''s best friend is a part time health centre receptionist called Rita Miller. They get on well most of the time. She also hangs around with Simone Blaese and Lincoln Brown. They enjoy watching YouTube videos together.	20	2020-02-07 21:39:20.537062
8	Suki Pitt	    Default Text\r\n\r\nSuki is a stable health centre receptionist who suffers from a severe phobia of snakes\r\n~ A Biography ~\r\n\r\nSuki Heather Pitt is a 28-year-old health centre receptionist who enjoys playing video games, reading and football. She is stable and considerate, but can also be very untrustworthy and a bit sneaky.\r\n\r\nShe is a British Jedi who defines herself as pansexual. She has a post-graduate degree in medicine. She is allergic to wool. She has a severe phobia of snakes\r\n\r\nPhysically, Suki is slightly overweight but otherwise in good shape. She is average-height with cocao skin, grey hair and green eyes. She has a mole on her right cheek.\r\n\r\nShe grew up in a working class neighbourhood. She was raised in a happy family home with two loving parents.\r\n\r\nShe is currently in a relationship with Vivien Clarissa Sanderson. Vivien is the same age as her and works as a sales assistant.\r\n\r\nSuki''s best friend is a health centre receptionist called Roosevelt Green. They are inseparable. She also hangs around with Leon Parker and Fayth Glen. They enjoy bowling together.\r\n	4	2020-02-07 21:42:23.048742
9	Una Sweet	\r\nUna is a loveable government politician who suffers from a severe phobia of heights\r\n~ A Biography ~\r\n\r\nUna Michelle Sweet is a 45-year-old government politician who enjoys going to the movies, cookery and adult colouring books. She is loveable and loveable, but can also be very selfish and a bit unfriendly.\r\n\r\nShe is an Argentinian Buddhist who defines herself as gay. She started studying philosophy, politics and economics at college but never finished the course. She has a severe phobia of heights, and is obsessed with organic vegetables.\r\n\r\nPhysically, Una is not in great shape. She needs to lose quite a lot of weight. She is tall with olive skin, grey hair and green eyes.\r\n\r\nShe grew up in a middle class neighbourhood. She was raised by her mother, her father having left when she was young.\r\n\r\nShe is currently single. Her most recent romance was with a chef called Emma Isa Ramos, who was 2 years older than her. They broke up because Emma said Una''s ego was too big.\r\n\r\nUna''s best friend is a government politician called Isla Ward. They have a very firey friendship. She also hangs around with Alina Thomson and Haley Walsh. They enjoy stealing candy from babies together.\r\n	15	2020-02-07 21:42:41.152118
10	Helen Butterscotch	Helen is a creative former celebrity chef who suffers from a severe phobia of balloons\r\n~ A Detailed Character Profile ~\r\nHelen Fairydust Butterscotch is a 73-year-old former celebrity chef who enjoys Rubix cube, jigsaw puzzles and adult colouring books. She is creative and entertaining, but can also be very greedy and a bit greedy.\r\nShe is a Thai Hindu. She started studying food science at college but never finished the course. She has a severe phobia of balloons, and is obsessed with gangnam style. \r\nPhysically, Helen is in good shape. She is very tall with walnut skin, black hair and green eyes. She has a tattoo of Psy on her upper back.\r\nShe grew up in a middle class neighbourhood. She was raised by her mother, her father having left when she was young. \r\nShe is currently single. Her most recent romance was with an electrician called Dexter Gerald Lewis, who was the same age as her. Dexter died in 2011.The papers reported the cause of death: ''stroke''\r\nHelen has one child with ex-boyfriend Grayson: Flynn aged 39.\r\nHelen''s best friend is a former celebrity chef called Carmen Richards. They get on well most of the time. They enjoy travelling together. \r\nBasic Information\r\nName:\tHelen Fairydust Butterscotch\r\nNicknames:\tLena / Tall Helen\r\nReason for nicknames:\tDerived from Helen / Descriptive\r\nDate of birth:\tWednesday, 26th Feb 1947 (Age 73)\r\nStar sign:\tPisces\r\nNationality:\tThai\r\nEthnicity:\tMiddle Eastern\r\nSocial class:\tMiddle class\r\nReligion:\tHindu\r\nSexuality:\tUnknown\r\nEducation:\tSome college\r\nCourse:\tFood science\r\nPolitical views:\tFar right\r\nRelationship status:\tSingle\r\nCareer path:\tCulinary \r\nPhysical characteristics\r\nHeight:\tvery tall\r\nShape:\tunderweight\r\nBuild:\tvery heavily built\r\nHair colour:\tblack (naturally brown)\r\nEyes:\tgreen\r\nFace shape:\theart-shaped\r\nGlasses/lenses:\tnone\r\nDistinguishing marks:\ta tattoo of Psy on her upper back\r\nOther words that might be used:\tblack-haired, dark-haired, full-length, goth, gothy, grandiloquent, leggy, long-legged, slim, stately, statuesque, tall\r\nPersonality\r\nPositive characteristics:\tcreative, entertaining\r\nNegative characteristics:\tgreedy, greedy\r\nWords often used:\tcreative, entertaining, greedy, greedy\r\nOther words that might be used:\tamusing, amusive, blimpish, bourgeois, cautious, conservative, constructive, conventional, creative, diverting, eager, entertaining, fanciful, fictive, fun, fusty, generative, greedy, hidebound, hungry, imaginative, impatient, ingenious, intelligent, inventive, materialistic, nonprogressive, notional, originative, productive, rapacious, smart, standpat, traditionalist, ultraconservative, unprogressive, yeasty\r\nMoral:\tnot at all\r\nStable:\tsometimes\r\nLoyal:\tsometimes\r\nGenerous:\tsometimes\r\nExtrovert:\tnot at all\r\nCompassionate:\tsometimes\r\nIQ:\t114\r\nHobbies:\tRubix cube, jigsaw puzzles, adult colouring books, travelling, podcasting, baking, duck herding, flower arranging\r\nPhobias:\tballoons\r\nObsessions:\tgangnam style\r\nDiet\teats meat\r\nFavourite foods:\tpizza, roast dinner\r\nEmployment\r\nKitchen assistant\tBrads Burgers\t1965 - 1969\tresigned\r\nSous chef\tBig Eats\t1969 - 1973\tresigned\r\nChef at chain restaurant\tBig Eats\t1973 - 1976\tresigned\r\nChef at own restaurant\tHelen''s\t1976 - 1979\tresigned\r\nCelebrity chef\tTV International\t1979 - 2007\tretires\r\nBackground\r\nEarly years\tHelen grew up in a middle class neighbourhood. She was raised by her mother, her father having left when she was young.\r\nFormative years\tHelen got is first job as a kitchen assistant at age 18\r\n\tHelen started college but quit part way through the course.\r\nMost traumatic childhood experience:\tHer father leaving when she was four.\r\nRelationships\r\nChildren\r\nFlynn Finn Butterscotch\t\r\n(Lifespan: 1981 - present)\r\nRelation\tSon\r\nOccupation\tLegal secretary\r\nOther parent\tGrayson Laurence Butler\r\nAge\t39\r\nRelationship\tThey are very close\r\nFriends\r\nNoel Pearl Morgan\t\r\n(Lifespan: 1949 - 2007)\r\nRelation\tFriend\r\nOccupation\tSenior programmer\r\nAge\tDied in 2007 aged 58. (Would have been 71.)\r\nCause of death\theart disease\r\nRelationship\tThey got on well most of the time\r\nLeonardo Ronnie Williams\t\r\n(Lifespan: 1949 - 1994)\r\nRelation\tFriend\r\nOccupation\tCleaner\r\nAge\tDied in 1994 aged 45. (Would have been 71.)\r\nCause of death\tsuicide\r\nRelationship\tThey got on well most of the time\r\nCarmen Gavin Richards\t\r\n(Lifespan: 1943 - present)\r\nRelation\tFriend\r\nOccupation\tBurglar\r\nAge\t77\r\nRelationship\tThey get on well most of the time\r\nParents\r\nJasmin Lacey Butterscotch\t\r\n(Lifespan: 1920 - 1985)\r\nRelation\tMother\r\nOccupation\tNovelist\r\nAge\tDied in 1985 aged 65. (Would have been 100.)\r\nCause of death\taccident - hit by a golf ball\r\nRelationship\tGenerally harmonious. \r\nAlan Tayla Li\t\r\n(Lifespan: 1915 - 1989)\r\nRelation\tFather\r\nOccupation\tArtist\r\nAge\tDied in 1989 aged 74.\r\nCause of death\tstroke\r\nRelationship\tNon-existent.\r\nSiblings\r\nArthur Vincent Butterscotch\t\r\n(Lifespan: 1936 - present)\r\nRelation\tHalf brother (shared mother)\r\nOccupation\tJournalist\r\nAge\t84\r\nRelationship\tArthur has always looked out for Helen.\r\nTroy Hannah Butterscotch\t\r\n(Lifespan: 1939 - present)\r\nRelation\tHalf sister (shared mother)\r\nOccupation\tElectrician\r\nAge\t81\r\nRelationship\tHelen and Troy grew up together. Nevertheless, they are not particularly close.\r\nGarrett Henry Li\t\r\n(Lifespan: 1931 - 1986)\r\nRelation\tHalf brother (shared father)\r\nOccupation\tReceptionist\r\nAge\tDied in 1986 aged 55. (Would have been 89.)\r\nCause of death\taccident - falling out of bed\r\nRelationship\tHelen and Garrett spent a lot of time togother before their father walked out on Helen''s mum but contact dwindled after that. \r\nRay Glen Li\t\r\n(Lifespan: 1941 - present)\r\nRelation\tHalf sister (shared father)\r\nOccupation\tArtist\r\nAge\t78\r\nRelationship\tHelen and Ray spent a lot of time together before their father walked out on Helen''s mum and see each other from time to time. \r\nLachlan Chad Li\t\r\n(Lifespan: 1943 - 2018)\r\nRelation\tHalf brother (shared father)\r\nOccupation\tPlumber\r\nAge\tDied in 2018 aged 75. (Would have been 77.)\r\nCause of death\tcancer\r\nRelationship\tHelen and Lachlan spent a lot of time togother before their father walked out on Helen''s mum but did not see each other as siblings. \r\nSam Robbie Butterscotch\t\r\n(Lifespan: 1944 - present)\r\nRelation\tBrother\r\nOccupation\tArtist\r\nAge\t75\r\nRelationship\tThey are inseparable.\r\nFormer Partners\r\nFreddie Walter Edwards\t\r\n(Lifespan: 1938 - present)\r\nRelation\tEx-boyfriend (2 years : 1964 - 1966)\r\nOccupation\tElectrician\r\nReason for breakup\tHelen found Freddie''s political views too progressive\r\nAge\t82\r\nRelationship\tOccasional frosty contact\r\nFloyd Dalton Ruiz\t\r\n(Lifespan: 1932 - 1982)\r\nRelation\tEx-boyfriend (1 year : 1967 - 1968)\r\nOccupation\tNovelist\r\nReason for breakup\tHelen found Floyd''s political views too progressive\r\nAge\tDied in 1982 aged 50. (Would have been 88.)\r\nCause of death\tpneumonia\r\nRelationship\tThey were in occasional contact until he died\r\nRick Maddison Cook\t\r\n(Lifespan: 1948 - 1988)\r\nRelation\tEx-boyfriend (3 years : 1971 - 1974)\r\nOccupation\tPersonal trainer\r\nReason for breakup\tRick was bored\r\nAge\tDied in 1988 aged 40. (Would have been 72.)\r\nCause of death\theart disease\r\nRelationship\tThey were in occasional contact until he died\r\nGrayson Laurence Butler\t\r\n(Lifespan: 1959 - present)\r\nRelation\tEx-boyfriend (5 years : 1976 - 1981)\r\nOccupation\tSenior programmer\r\nReason for breakup\tGrayson felt Helen was too closed to new ideas\r\nAge\t61\r\nRelationship\tOccasional frosty contact\r\nDexter Gerald Lewis\t\r\n(Lifespan: 1950 - 2011)\r\nRelation\tLate husband (26 years : 1985 - 2011)\r\nOccupation\tElectrician\r\nAge\tDied in 2011 aged 61. (Would have been 70.)\r\nCause of death\tstroke\r\nRelationship\t\r\nPolitical Views\r\nAbortion:\tagainst\r\nRacial equality:\tundecided\r\nLGBTQ rights:\tvery pro\r\nSubsidised healthcare:\tagainst\r\nGun control:\tpro\r\nNuclear disarmament:\tundecided\r\nDeath penalty:\tvery pro\r\nTax cuts for the wealthy:\tundecided\r\nProtecting the environment:\tundecided\r\nTimeline\r\n1947\tAge 0\tHelen Butterscotch is born\r\n1951\tAge 4\tFather, Alan Tayla Li walks out\r\n1964\tAge 17\tGets together with Freddie Walter Edwards.\r\n1965\tAge 18\tStarts work at Brads Burgers at kitchen assistant\r\n1966\tAge 19\tRelationship with Freddie Walter Edwards ends (Helen found Freddie''s political views too progressive).\r\n1967\tAge 20\tGets together with Floyd Dalton Ruiz.\r\n1968\tAge 21\tRelationship with Floyd Dalton Ruiz ends (Helen found Floyd''s political views too progressive).\r\n1969\tAge 22\tResigns from job as kitchen assistant at Brads Burgers \r\n\t\tStarts work at Big Eats at sous chef\r\n1971\tAge 24\tGets together with Rick Maddison Cook.\r\n1973\tAge 26\tResigns from job as sous chef at Big Eats \r\n\t\tStarts work at Big Eats at chef at chain restaurant\r\n1974\tAge 27\tRelationship with Rick Maddison Cook ends (Rick was bored).\r\n1976\tAge 29\tGets together with Grayson Laurence Butler.\r\n\t\tResigns from job as chef at chain restaurant at Big Eats \r\n\t\tStarts work at Helen''s at chef at own restaurant\r\n1979\tAge 32\tResigns from job as chef at own restaurant at Helen''s \r\n\t\tStarts work at TV International at celebrity chef\r\n1981\tAge 34\tSon, Flynn Finn Butterscotch is born\r\n\t\tRelationship with Grayson Laurence Butler ends (Grayson felt Helen was too closed to new ideas).\r\n1982\tAge 35\tEx-boyfriend, Floyd Dalton Ruiz dies aged 50 (pneumonia)\r\n1985\tAge 38\tMother, Jasmin Lacey Butterscotch dies aged 65 (accident - hit by a golf ball)\r\n\t\tGets together with Dexter Gerald Lewis.\r\n1986\tAge 39\tHalf brother (shared father), Garrett Henry Li dies aged 55 (accident - falling out of bed)\r\n1988\tAge 41\tEx-boyfriend, Rick Maddison Cook dies aged 40 (heart disease)\r\n1989\tAge 42\tFather, Alan Tayla Li dies aged 74 (stroke)\r\n1994\tAge 47\tFriend, Leonardo Ronnie Williams dies aged 45 (suicide)\r\n1997\tAge 50\tMarries Dexter Gerald Lewis.\r\n2007\tAge 60\tFriend, Noel Pearl Morgan dies aged 58 (heart disease)\r\n\t\tRetires from job as celebrity chef at TV International \r\n2011\tAge 64\tHusband, Dexter Gerald Lewis dies aged 61 (stroke)\r\n2018\tAge 71\tHalf brother (shared father), Lachlan Chad Li dies aged 75 (cancer)\r\n2020-02-08\t\tPresent Day\r\n\r\nFrom <https://www.character-generator.org.uk/?i=3eovlf8> \r\n	1	2020-02-07 21:43:09.100642
\.


--
-- Data for Name: contradictions; Type: TABLE DATA; Schema: public; Owner: Jared
--

COPY public.contradictions (id, title, description) FROM stdin;
\.


--
-- Data for Name: stories; Type: TABLE DATA; Schema: public; Owner: Jared
--

COPY public.stories (id, title, producer, main_writer, universe_id, description, creation_date) FROM stdin;
1	Kingdom of Fools	7	14	1	There is a kingdom where a secret cult known as the grand order moves in the shadows to ensure the greator good and to guide the chosen One to his goal or so they think in reality they are a bunch of selfish morons who try to control other morons with the "chosen one" being the only sane one in the room trying to keep the place from falling apart. \r\n	2020-02-07 22:42:58.52714
2	Gumshoe Elf	13	17	1	This stars An elf detective as he solves mysteries along cites and castles of this beautiful fantasy world\r\n	2020-02-07 22:48:42.598226
4	BlackSmiths	18	4	2	in this changed world blacksmiths that can forge magical weapons and armor have become a needed commodity however with so few knowing of the practice high schools around the world are formed to teach kids how to use the forge. Join our hero as he learns the way of the forge alongside his friends\r\n	2020-02-07 22:56:10.624117
3	The Dragon Scout	9	10	2	Join the Adventures of a boy scout with the powers of a dragon, a heart of gold, and an optimistic view even when the world tries to show him otherwise.\r\n	2020-02-07 22:52:21.430472
5	Mecha War	15	11	3	A great civil war is fought by two factions using mechas but everyone looses in the end. one faction struggles to survive and try to rebuild their wrecked civilization\r\n	2020-02-07 23:14:51.231784
6	Space Arms	1	20	3	This Story Follows the Exploits of a man running His Business as a weapons manufacturer and the bloody conflicts that he benefits from.	2020-02-07 23:17:52.76336
\.


--
-- Data for Name: story_contradictions; Type: TABLE DATA; Schema: public; Owner: Jared
--

COPY public.story_contradictions (id, story_id, contradiction_id) FROM stdin;
\.


--
-- Data for Name: storyline_contradictions; Type: TABLE DATA; Schema: public; Owner: Jared
--

COPY public.storyline_contradictions (id, storyline_id, contradiction_id) FROM stdin;
\.


--
-- Data for Name: storylines; Type: TABLE DATA; Schema: public; Owner: Jared
--

COPY public.storylines (id, title, author, content, story, timeline_period, creation_date) FROM stdin;
1	recruitment	6	A poor innnocent man is kidnapped by a man claiming to need him to fight for the greater good	1	1	2020-02-08 06:26:36.076984
2	an idiotic betrayal	8	The Rookie is given a traitors treatment for a very idiotic reason and in exasperation and rage he exposes his so-called masters on the internet	1	2	2020-02-08 06:26:36.199541
3	retribution	6	After being lionized by the public the recruit hunts down and arrest the fools who nearly ended th world with their stupidity	1	3	2020-02-08 06:26:36.207473
4	a beginning forged	6	A young man comes to learn at a blacksmith academy after discovering a gift with crafting	4	4	2020-02-08 06:26:36.215813
5	midterm clang	6	our hero learns how to create a legendary weapon from the past	4	5	2020-02-08 06:26:36.223983
6	disarmamnent	6	Our hero must join his knight girlfriend to forge a device capable of stopping the dommsday weapon he has inadvetadly forged	4	6	2020-02-08 06:26:36.257657
7	Revolution	6	Corruption in the government leads to two seperate revolutions that overthrow the old order and bring about civil war	5	7	2020-02-08 06:26:36.266586
8	Lines	6	The War Reaches nsane hieghts as galaxy ending superweapons are created and deployed.	5	8	2020-02-08 06:26:36.275778
9	Remorse	6	The head of the intergalactic Arms company Mournes his loss of sales in peacetime	6	9	2020-02-08 06:26:40.550174
\.


--
-- Data for Name: timeline_contradictions; Type: TABLE DATA; Schema: public; Owner: Jared
--

COPY public.timeline_contradictions (id, timeline_id, contradiction_id) FROM stdin;
\.


--
-- Data for Name: timeline_period_contradictions; Type: TABLE DATA; Schema: public; Owner: Jared
--

COPY public.timeline_period_contradictions (id, timeline_period_id, contradiction_id) FROM stdin;
\.


--
-- Data for Name: timeline_periods; Type: TABLE DATA; Schema: public; Owner: Jared
--

COPY public.timeline_periods (id, timeline_id, title, description, order_num) FROM stdin;
1	1	The War On Innovation	the ruling elite tries and fails to control or cease the rise of a magical internet	1
2	1	Exposing of the Elite	the ruling elites hold on the media starts to wane rapidly as citizens become aware of the corruption of the rulign class	2
3	1	Fall of the old order	the power of the ruling elite wanes as accountabilty for their actions starts to take hold	3
4	2	the new normal	people reluctantly get used to the changes made from the magicking of the world	2
5	2	Aftershocks	the world struggles to adjust to the massive changes to the world	1
6	2	boiling point	forces behind the scenes causes things to get to a boling pont	3
8	3	War Climax	the war reaches its climax as the galaxy shakes from the impact	3
9	3	War Middle	the war heats up	2
10	3	War Start	Starting of the great war	1
7	3	War Aftermath	the aftermath of the war and the damage caused	4
\.


--
-- Data for Name: timelines; Type: TABLE DATA; Schema: public; Owner: Jared
--

COPY public.timelines (id, universe_id, creation_date) FROM stdin;
1	1	2020-02-07 23:10:36.701531
2	2	2020-02-07 23:10:36.740745
3	3	2020-02-07 23:10:38.47591
\.


--
-- Data for Name: universes; Type: TABLE DATA; Schema: public; Owner: Jared
--

COPY public.universes (id, name, description, creator, creation_date) FROM stdin;
1	Fantasy Noir	In this world magic is used instead of science in a setting that contains both elements of the modern day and the world that has long past. Unfortunately the corrupt and despicable still hide within this universe. Has several countries and cities that have monarchs and kings. The internet is a tool that the powerful are trying to suppress. And in the middle of this world mercenaries, detectives, heroes and soldiers add to their story.\r\n\r\n	6	2020-02-07 22:05:56.294525
2	Fantasy Evolution	The world was changed one fateful day in 2008 when demons, deities, and dragons were summoned by an evil sorcerer looking to conquer the world however modern technology (specifically machines like jets, bombers, and tanks) killed those forces and defeated the sorcerer. However the blood spilled by those demons, deities, and dragons had the effect of bringing magic into our world. those who ingest the blood of these supernatural creatures through the contamination of water supplies before they were purified or who were drowned in it gained magical powers of their own while the mutation of plants gave them magical effects. Now the world has to adapt to these insane changes to the world.\r\n	16	2020-02-07 22:07:02.586526
3	Sci-Fi Setting	It is the far flung future and space travel has become extremely common. The human race has expanded to the stars with space colonies that are basically artificial planets with a shield surrounding the entire planet absorbing solar radiation to use to fuel the core of the planet which supplies Resources to their entire worlds.\r\n\r\n	7	2020-02-07 22:07:23.103123
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: Jared
--

COPY public.users (id, username, email, pass_word) FROM stdin;
1	esigmund0	rbubbings0@sourceforge.net	intermediate
2	rmeiklam1	ctaft1@europa.eu	neural-net
3	bjouanot2	dstodhart2@google.fr	parallelism
4	mpartridge3	kstrowan3@gmpg.org	Re-engineered
5	dclopton4	leardley4@unblog.fr	optimizing
6	bebhardt5	iburrel5@psu.edu	Graphical User Interface
7	jdambrogio6	sburford6@ask.com	knowledge base
8	lfeltoe7	kwallege7@godaddy.com	object-oriented
9	araleston8	estennet8@prweb.com	knowledge base
10	tstelle9	eofallon9@cpanel.net	instruction set
11	jchrispa	bcollumbella@whitehouse.gov	Triple-buffered
12	egonthardb	cdoghartieb@diigo.com	Up-sized
13	mselburnc	tlarcierc@elegantthemes.com	zero tolerance
14	lendd	kbrazeltond@ucsd.edu	encoding
15	jbarnewelle	holwene@ocn.ne.jp	Configurable
16	rmoultrief	afindleyf@guardian.co.uk	Upgradable
17	bbrunig	jnolang@bloomberg.com	dynamic
18	nmuglestonh	bangeauh@usatoday.com	function
19	jpoli	amcgirli@theguardian.com	scalable
20	lgrimmerj	hgiacomassoj@fastcompany.com	matrix
21	AdminCEO	headoftheplace@Mycompany.com	giveMetheMoney
\.


--
-- Name: character_contradictions_id_seq; Type: SEQUENCE SET; Schema: public; Owner: Jared
--

SELECT pg_catalog.setval('public.character_contradictions_id_seq', 1, false);


--
-- Name: character_usage_id_seq; Type: SEQUENCE SET; Schema: public; Owner: Jared
--

SELECT pg_catalog.setval('public.character_usage_id_seq', 1, false);


--
-- Name: characters_id_seq; Type: SEQUENCE SET; Schema: public; Owner: Jared
--

SELECT pg_catalog.setval('public.characters_id_seq', 10, true);


--
-- Name: contradictions_id_seq; Type: SEQUENCE SET; Schema: public; Owner: Jared
--

SELECT pg_catalog.setval('public.contradictions_id_seq', 1, false);


--
-- Name: stories_id_seq; Type: SEQUENCE SET; Schema: public; Owner: Jared
--

SELECT pg_catalog.setval('public.stories_id_seq', 6, true);


--
-- Name: story_contradictions_id_seq; Type: SEQUENCE SET; Schema: public; Owner: Jared
--

SELECT pg_catalog.setval('public.story_contradictions_id_seq', 1, false);


--
-- Name: storyline_contradictions_id_seq; Type: SEQUENCE SET; Schema: public; Owner: Jared
--

SELECT pg_catalog.setval('public.storyline_contradictions_id_seq', 1, false);


--
-- Name: storylines_id_seq; Type: SEQUENCE SET; Schema: public; Owner: Jared
--

SELECT pg_catalog.setval('public.storylines_id_seq', 9, true);


--
-- Name: timeline_contradictions_id_seq; Type: SEQUENCE SET; Schema: public; Owner: Jared
--

SELECT pg_catalog.setval('public.timeline_contradictions_id_seq', 1, false);


--
-- Name: timeline_period_contradictions_id_seq; Type: SEQUENCE SET; Schema: public; Owner: Jared
--

SELECT pg_catalog.setval('public.timeline_period_contradictions_id_seq', 1, false);


--
-- Name: timeline_periods_id_seq; Type: SEQUENCE SET; Schema: public; Owner: Jared
--

SELECT pg_catalog.setval('public.timeline_periods_id_seq', 10, true);


--
-- Name: timelines_id_seq; Type: SEQUENCE SET; Schema: public; Owner: Jared
--

SELECT pg_catalog.setval('public.timelines_id_seq', 3, true);


--
-- Name: universes_id_seq; Type: SEQUENCE SET; Schema: public; Owner: Jared
--

SELECT pg_catalog.setval('public.universes_id_seq', 3, true);


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: Jared
--

SELECT pg_catalog.setval('public.users_id_seq', 21, true);


--
-- Name: character_contradictions character_contradictions_pkey; Type: CONSTRAINT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.character_contradictions
    ADD CONSTRAINT character_contradictions_pkey PRIMARY KEY (id);


--
-- Name: character_usage character_usage_pkey; Type: CONSTRAINT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.character_usage
    ADD CONSTRAINT character_usage_pkey PRIMARY KEY (id);


--
-- Name: characters characters_pkey; Type: CONSTRAINT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.characters
    ADD CONSTRAINT characters_pkey PRIMARY KEY (id);


--
-- Name: contradictions contradictions_pkey; Type: CONSTRAINT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.contradictions
    ADD CONSTRAINT contradictions_pkey PRIMARY KEY (id);


--
-- Name: stories stories_pkey; Type: CONSTRAINT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.stories
    ADD CONSTRAINT stories_pkey PRIMARY KEY (id);


--
-- Name: story_contradictions story_contradictions_pkey; Type: CONSTRAINT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.story_contradictions
    ADD CONSTRAINT story_contradictions_pkey PRIMARY KEY (id);


--
-- Name: storyline_contradictions storyline_contradictions_pkey; Type: CONSTRAINT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.storyline_contradictions
    ADD CONSTRAINT storyline_contradictions_pkey PRIMARY KEY (id);


--
-- Name: storylines storylines_pkey; Type: CONSTRAINT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.storylines
    ADD CONSTRAINT storylines_pkey PRIMARY KEY (id);


--
-- Name: timeline_contradictions timeline_contradictions_pkey; Type: CONSTRAINT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.timeline_contradictions
    ADD CONSTRAINT timeline_contradictions_pkey PRIMARY KEY (id);


--
-- Name: timeline_period_contradictions timeline_period_contradictions_pkey; Type: CONSTRAINT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.timeline_period_contradictions
    ADD CONSTRAINT timeline_period_contradictions_pkey PRIMARY KEY (id);


--
-- Name: timeline_periods timeline_periods_pkey; Type: CONSTRAINT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.timeline_periods
    ADD CONSTRAINT timeline_periods_pkey PRIMARY KEY (id);


--
-- Name: timelines timelines_pkey; Type: CONSTRAINT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.timelines
    ADD CONSTRAINT timelines_pkey PRIMARY KEY (id);


--
-- Name: universes universes_pkey; Type: CONSTRAINT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.universes
    ADD CONSTRAINT universes_pkey PRIMARY KEY (id);


--
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- Name: character_contradictions character_contradictions_character_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.character_contradictions
    ADD CONSTRAINT character_contradictions_character_id_fkey FOREIGN KEY (character_id) REFERENCES public.characters(id);


--
-- Name: character_contradictions character_contradictions_contradiction_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.character_contradictions
    ADD CONSTRAINT character_contradictions_contradiction_id_fkey FOREIGN KEY (contradiction_id) REFERENCES public.contradictions(id);


--
-- Name: character_usage character_usage_character_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.character_usage
    ADD CONSTRAINT character_usage_character_id_fkey FOREIGN KEY (character_id) REFERENCES public.characters(id);


--
-- Name: character_usage character_usage_storyline_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.character_usage
    ADD CONSTRAINT character_usage_storyline_id_fkey FOREIGN KEY (storyline_id) REFERENCES public.storylines(id);


--
-- Name: characters characters_creator_fkey; Type: FK CONSTRAINT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.characters
    ADD CONSTRAINT characters_creator_fkey FOREIGN KEY (creator) REFERENCES public.users(id);


--
-- Name: stories stories_main_writer_fkey; Type: FK CONSTRAINT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.stories
    ADD CONSTRAINT stories_main_writer_fkey FOREIGN KEY (main_writer) REFERENCES public.users(id);


--
-- Name: stories stories_producer_fkey; Type: FK CONSTRAINT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.stories
    ADD CONSTRAINT stories_producer_fkey FOREIGN KEY (producer) REFERENCES public.users(id);


--
-- Name: stories stories_universe_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.stories
    ADD CONSTRAINT stories_universe_id_fkey FOREIGN KEY (universe_id) REFERENCES public.universes(id);


--
-- Name: story_contradictions story_contradictions_contradiction_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.story_contradictions
    ADD CONSTRAINT story_contradictions_contradiction_id_fkey FOREIGN KEY (contradiction_id) REFERENCES public.contradictions(id);


--
-- Name: story_contradictions story_contradictions_story_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.story_contradictions
    ADD CONSTRAINT story_contradictions_story_id_fkey FOREIGN KEY (story_id) REFERENCES public.stories(id);


--
-- Name: storyline_contradictions storyline_contradictions_contradiction_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.storyline_contradictions
    ADD CONSTRAINT storyline_contradictions_contradiction_id_fkey FOREIGN KEY (contradiction_id) REFERENCES public.contradictions(id);


--
-- Name: storyline_contradictions storyline_contradictions_storyline_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.storyline_contradictions
    ADD CONSTRAINT storyline_contradictions_storyline_id_fkey FOREIGN KEY (storyline_id) REFERENCES public.storylines(id);


--
-- Name: storylines storylines_author_fkey; Type: FK CONSTRAINT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.storylines
    ADD CONSTRAINT storylines_author_fkey FOREIGN KEY (author) REFERENCES public.users(id);


--
-- Name: storylines storylines_story_fkey; Type: FK CONSTRAINT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.storylines
    ADD CONSTRAINT storylines_story_fkey FOREIGN KEY (story) REFERENCES public.stories(id);


--
-- Name: storylines storylines_timeline_period_fkey; Type: FK CONSTRAINT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.storylines
    ADD CONSTRAINT storylines_timeline_period_fkey FOREIGN KEY (timeline_period) REFERENCES public.timeline_periods(id);


--
-- Name: timeline_contradictions timeline_contradictions_contradiction_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.timeline_contradictions
    ADD CONSTRAINT timeline_contradictions_contradiction_id_fkey FOREIGN KEY (contradiction_id) REFERENCES public.contradictions(id);


--
-- Name: timeline_contradictions timeline_contradictions_timeline_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.timeline_contradictions
    ADD CONSTRAINT timeline_contradictions_timeline_id_fkey FOREIGN KEY (timeline_id) REFERENCES public.timelines(id);


--
-- Name: timeline_period_contradictions timeline_period_contradictions_contradiction_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.timeline_period_contradictions
    ADD CONSTRAINT timeline_period_contradictions_contradiction_id_fkey FOREIGN KEY (contradiction_id) REFERENCES public.contradictions(id);


--
-- Name: timeline_period_contradictions timeline_period_contradictions_timeline_period_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.timeline_period_contradictions
    ADD CONSTRAINT timeline_period_contradictions_timeline_period_id_fkey FOREIGN KEY (timeline_period_id) REFERENCES public.timeline_periods(id);


--
-- Name: timeline_periods timeline_periods_timeline_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.timeline_periods
    ADD CONSTRAINT timeline_periods_timeline_id_fkey FOREIGN KEY (timeline_id) REFERENCES public.timelines(id);


--
-- Name: timelines universe_timelines_universe_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.timelines
    ADD CONSTRAINT universe_timelines_universe_id_fkey FOREIGN KEY (universe_id) REFERENCES public.universes(id);


--
-- Name: universes universes_creator_fkey; Type: FK CONSTRAINT; Schema: public; Owner: Jared
--

ALTER TABLE ONLY public.universes
    ADD CONSTRAINT universes_creator_fkey FOREIGN KEY (creator) REFERENCES public.users(id);


--
-- PostgreSQL database dump complete
--

