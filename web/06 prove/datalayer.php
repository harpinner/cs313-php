<?php


    abstract class dataItem
    {
        public $id;
        public function __construct($dataRow)
        {
            $this->id = $dataRow['id'];
        }
    }
    



    class universe extends dataitem
    {
        public $name;
        public $description;
        public $creator;
        public $creatorName;
        public $creation_date;
        const selectQuery = "SELECT universes.id, universes.description, universes.name, universes.creator, users.username AS creator_name, universes.creation_date FROM universes JOIN users ON universes.creator = users.id %s";
        const insertQuery = "INSERT INTO universes (name, description, creator) VALUES (:name, :description, :creator)";
        const updateQuery = "UPDATE universes SET name = :name, description = :description WHERE id = :id";
        public function __construct($dataRow)
        {
            parent::__construct($dataRow);
            $this->producer = $dataRow['name'];
            $this->creator = $dataRow['creator'];
            $this->creatorName = $dataRow['creator_name'];
            $this->description = $dataRow['description'];
            $this->creation_date = $dataRow['creation_date'];
        }        
    }
    


    class story extends dataitem
    {
        public $title;
        public $producer;
        public $producer_name;
        public $main_writer;
        public $main_writer_name;
        public $universe_id;
        public $universe_name;
        public $description;
        public $creation_date;
        const selectQuery = "SELECT stories.id, stories.title, stories.producer, universes.name AS universe_name, stories.main_writer, writers.username AS main_writer_name, producers.username AS pro_user_name,  stories.universe_id, stories.description, stories.creation_date FROM stories  JOIN users AS producers ON stories.producer = producers.id JOIN users AS writers ON stories.main_writer = writers.id JOIN universes ON stories.universe_id = universes.id %s";
        const insertQuery = "INSERT INTO stories (title, description, producer, main_writer) VALUES (:title, :description, :producer, :writer)";
        const updateQuery = "UPDATE stories SET title = :title, description = :description WHERE id = :id";
        public function __construct($dataRow)
        {
            parent::__construct($dataRow);
            $this->producer = $dataRow['producer'];
            $this->title = $dataRow['title'];
            $this->main_writer = $dataRow['main_writer'];
            $this->main_writer_name = $dataRow['main_writer_name'];
            $this->universe_id = $dataRow['universe_id'];
            $this->universe_name = $dataRow['universe_name'];
            $this->producer_name = $dataRow['pro_user_name'];
            $this->description = $dataRow['description'];
            $this->creation_date = $dataRow['creation_date'];
        }
        
    }

    class storyline extends dataitem
    {
        public $txt;
        public $title;
        public $author;
        public $authorId;
        public $story;
        public $storyId;
        public $timeline_period;
        public $timeline_periodId;
        public $creation_date;
        const selectQuery = "SELECT storylines.id, storylines.title, storylines.timeline_period, storylines.story, storylines.content, storylines.author, users.username, storylines.creation_date, stories.title AS storyTitle, timeline_periods.title AS event_I FROM storylines JOIN users ON storylines.author = users.id JOIN stories ON storylines.story = stories.id JOIN timeline_periods ON storylines.timeline_period = timeline_periods.id %s";
        const insertQuery = "INSERT INTO storlines (title, author, story, content, timeline_period) VALUES (:title, :author, :story, :content :timeline_period)";
        const updateQuery = "UPDATE storlines SET title = :title, content = :content WHERE id = :id";
        public function __construct($dataRow)
        {
            parent::__construct($dataRow);
            $this->txt = $dataRow['content'];
            $this->title = $dataRow['title'];
            $this->author = $dataRow['username'];
            $this->authorId = $dataRow['author'];
            $this->story = $dataRow['storytitle'];
            $this->storyId = $dataRow['story'];
            $this->timeline_period = $dataRow['event_i'];
            $this->timeline_periodId = $dataRow['timeline_period'];
            $this->creation_date = $dataRow['creation_date'];
        }
        
    }

    class contradiction extends dataitem
    {
        public $txt;
        public $title;
        public $author;
        public $authorId;
        public $creation_date;
        const selectQuery = "SELECT contradictions.id, contradictions.title, contradictions.author, users.username AS creator_name, universes.creation_date FROM contradictions JOIN users ON contradictions.author = users.id %s";
        const insertQuery = "INSERT INTO contradictions (title, description, author) VALUES (:value1, :value2, :value3)";
        public function __construct($dataRow)
        {
            parent::__construct($dataRow);
            $this->txt = $dataRow['description'];
            $this->title = $dataRow['title'];
            $this->creation_date = $dataRow['creation_date'];
            $this->author = $dataRow['creator_name'];
            $this->authorId = $dataRow['author'];
        }
        
    }

    class contradiction_item extends dataitem
    {
        public $itemType;
        public $itemID;
        public $contraID;
        public $itemName;                  
        const selectQuery = "SELECT :table_contradictions.id, :table_contradictions.contradiction_id, contradictions.author, users.username AS creator_name, universes.creation_date FROM :table_contradictions JOIN users ON contradictions.author = :table.id %s";
        const insertQuery = "INSERT INTO :table_contradictions (storyline_id, contradiction_id) VALUES (:value1, :value2)";
        public function __construct($dataRow)
        {
            parent::__construct($dataRow);
            $this->itemName = $dataRow['name'];
            $this->itemType = $dataRow['type'];
            $this->contraID = $dataRow['contradiction_id'];
            $this->$itemID = $dataRow['id'];

        }
        
    }
    

    class user extends dataItem
    {
        public $username;
        public $email;
        const selectQuery = "SELECT id,username,email FROM users %s";
        public function __construct($dataRow)
        {
            parent::__construct($dataRow);
            $this->username = $dataRow['username'];
            $this->email = $dataRow['email'];
        }
        
    }

    class character extends dataItem
    {
        public $name;
        public $details;
        public $creator;
        public $creatorName;
        public $creation_date;
        const selectQuery = "SELECT characters.id, characters.name, characters.details, characters.creator, users.username, characters.creation_date FROM characters JOIN users ON characters.creator = users.id %s";
        const insertQuery = "INSERT INTO characters (name, details, creator) VALUES (:name, :details, :creator)";
        const updateQuery = "UPDATE characters SET name = :name, details = :details WHERE id = :id";
        public function __construct($dataRow)
        {
            parent::__construct($dataRow);
            $this->name = $dataRow['name'];
            $this->details = $dataRow['details'];
            $this->creator = $dataRow['creator'];
            $this->creatorName = $dataRow['username'];
            $this->creation_date = $dataRow['creation_date'];
        }
    }
    
    class timeline_period extends dataItem
    {
        public $universe_id;
        public $universe;
        public $title;
        public $description;
        public $order_num;
        const selectQuery = "SELECT timeline_periods.id, timeline_periods.universe_id, universes.name AS universe, timeline_periods.title, timeline_periods.description, timeline_periods.order_num  FROM timeline_periods JOIN universes ON timeline_periods.universe_id = universes.id %s";
        const insertQuery = "INSERT INTO timeline_periods (title, description, universe_id, order_num) VALUES (:title, :description, :universe_id, :order_num)";
        const updateQuery = "UPDATE timeline_periods SET title = :title, description = :description, universe_id = :universe_id, order_num = :order_num WHERE id = :id";
        public function __construct($dataRow)
        {
            parent::__construct($dataRow);
            $this->universe_id = $dataRow['universe_id'];
            $this->universe = $dataRow['universe'];
            $this->title = $dataRow['title'];
            $this->description = $dataRow['description'];
            $this->order_num = $dataRow['order_num'];
        }

    }
    
    
    







    class datalayer 
    {
        private $db;
        const deleteQuery = "DELETE FROM :table WHERE id = :id";
        public function __construct()
        {

            if (isset($_SERVER['DATABASE_URL'])) {
                try
                {
                    $dbUrl = $_SERVER['DATABASE_URL'];
            
                    $dbOpts = parse_url($dbUrl);
            
                    $dbHost = $dbOpts["host"];
                    $dbPort = $dbOpts["port"];
                    $dbUser = $dbOpts["user"];
                    $dbPassword = $dbOpts["pass"];
                    $dbName = ltrim($dbOpts["path"],'/');
            
                    $this->db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
            
                    $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                }
                catch (PDOException $ex)
                {
                    echo 'Error!: ' . $ex->getMessage();
                    die();
                }
            
            
            
            } else {
                try
                {
                    
                    $user = $_SERVER['DBUSER'];
                    $password = $_SERVER['DBPASS'];
                    $this->db = new PDO('pgsql:host=localhost;dbname=newdb', $user, $password);
                  
                    // this line makes PDO give us an exception when there are problems,
                    // and can be very helpful in debugging! (But you would likely want
                    // to disable it for production environments.)
                    $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                }
                catch (PDOException $ex)
                {
                    echo 'Error!: ' . $ex->getMessage();
                    die();
                }
            }
        }

        public function selectQuery(string $Query, $vars, $ManyResult, $class)
        {
            $finalQuery = sprintf($class::selectQuery, $Query);
            $stmt = $this->db->prepare($finalQuery);

            foreach ($vars as $key => $value) {
                $stmt->bindValue($key, $value);
            }
            
            $stmt->execute();
            
            $returnValue;
            if ($ManyResult == true) {
                $objectArray = $stmt->fetchAll();
                
                $returnValue = array();
                foreach ($objectArray as $value) {
                    array_push($returnValue, new $class($value));
                }
                
            } else {
                $arrtt = $stmt->fetch();
                $returnValue = new $class($arrtt);
            }
    
            return $returnValue;

        }

        public function intanQuery(string $Query, $vars, $insert = false, $table = "null")
        {
            $stmt = $this->db->prepare($Query);

            foreach ($vars as $key => $value) {
                $stmt->bindValue($key, $value);
            }

            $stmt->execute();
            $proof = $stmt->rowCount();
            if ($insert == true) {
                $proof = $this->db->lastInsertId($table.'_id_seq');
            }
            return $proof;

        }

        

        



        

        public function addContradictionItem(string $type,int $contraID,int $itemID)
        {

        }

        
    }
    
?>