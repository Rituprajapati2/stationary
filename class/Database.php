<?php
abstract class Database
{
    // database connection
    // pdo
    //abstract==no object..use for inhertitate(could extend to other files)

    protected $conn = null;
    protected $sql = null;
    protected $stmt = null;
    protected $table = null;

    public function __construct()
    {
        try {
            $this->conn = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';', DB_USER, DB_PWD);// working on pdo error handeling
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//

            $this->sql = "SET NAMES utf8";  // encoding for unicode char//converting nepali character
            $this->stmt = $this->conn->prepare($this->sql);

            $this->stmt->execute();
        } catch (PDOException $e) {
            $error_log = date('Y-m-d h:i:s A') . " Connection pdo: " . $e->getmessage() . "\r\n";//making error folder with error.log name
            error_log($error_log, 3, ERROR_LOG);
            return false;
        } catch (Exception $e) {
            $error_log = date('Y-m-d h:i:s A') . " Connection, General: " . $e->getmessage() . "\r\n";
            error_log($error_log, 3, ERROR_LOG);
            return false;
        }
    }

    protected function table($_table)
    {
        $this->table = $_table;
    }

    protected final   function select($args = array())
    {
        try {
            /**
             * SELECT fields FROM table
             *  LEFT/RIGHT JOIN statement
             *  WHERE statement
             *  GROUP BY statement
             *  ORDER BY statement
             *  LIMIT start, count
             *////included on user(login too)select query
            $this->sql = "SELECT ";

            if (isset($args['fields'])) {
                $this->sql .= " " . $args['fields'];
            } else {
                $this->sql .= " * ";
            }
            $this->sql .= " FROM " . $this->table;
            

            if (isset($args['where']) && !empty($args['where'])) {
                $this->sql .= " WHERE " . $args['where'];
            }
            if(isset($args['order_by'])){
                $this->sql .= " ORDER BY ".$args['order_by'];
            } else {
                $this->sql .= " ORDER BY id DESC ";
            }



            if(isset($args['limit'])){
                $this->sql .= " LIMIT ".$args['limit'];
            }

            $this->stmt = $this->conn->prepare($this->sql);
            $this->stmt->execute();
            return $this->stmt->fetchAll(PDO::FETCH_OBJ);
            
        } catch (PDOException $e) {
            $error_log = date('Y-m-d h:i:s A') . " select pdo: " . $e->getmessage() . "\r\n";
            error_log($error_log, 3, ERROR_LOG);
            return false;
        } catch (Exception $e) {
            $error_log = date('Y-m-d h:i:s A') . " select, General: " . $e->getmessage() . "\r\n";
            error_log($error_log, 3, ERROR_LOG);
            return false;
        }
       
    }

    protected final function update($data = array(), $args = array()){
        try {
            /**
             * UPDATE table SET 
             *  column_name = value,
             *  column_name = value .... 
             * WHERE condition
             */
            $this->sql = " UPDATE ";//space is needded btween semicolon
            $this->sql .= $this->table;
            $this->sql .= " SET ";

            if(!isset($data) || empty($data)){
                throw new Exception('Data not set.');
            } 

            $temp = array();
            foreach($data as $column_name => $value){
                $temp[] = $column_name." = '".$value."'";
            }
            $this->sql .= implode(", ", $temp);


            if (isset($args['where']) && !empty($args['where'])) {
                $this->sql .= " WHERE " . $args['where'];
            }

            $this->stmt = $this->conn->prepare($this->sql);
            $success = $this->stmt->execute();

            return $success;
        } catch (PDOException $e) {
            $error_log = date('Y-m-d h:i:s A') . " update pdo: " . $e->getmessage() . "\r\n";
            error_log($error_log, 3, ERROR_LOG);
            return false;
        } catch (Exception $e) {
            $error_log = date('Y-m-d h:i:s A') . " update, General: " . $e->getmessage() . "\r\n";
            error_log($error_log, 3, ERROR_LOG);
            return false;
        }
    }

    protected final function insert($data = array()){
        try {
            /**
             * INSERT INTO table SET 
             *  column_name = value,
             *  column_name = value .... 
             */
            $this->sql = "INSERT INTO ";        // INSERT INTO
            $this->sql .= $this->table;         // INSERT INTO categories
            $this->sql .= " SET ";              // INSERT INTO categories SET 

            if(!isset($data) || empty($data)){
                throw new Exception('Data not set.');
            } 

            $temp = array();
            foreach($data as $column_name => $value){
                $temp[] = $column_name." = '".$value."'";
            }
            $this->sql .= implode(", ", $temp);


            $this->stmt = $this->conn->prepare($this->sql);
            $this->stmt->execute();
            
            return $this->conn->lastInsertId();
            
        } catch (PDOException $e) {
            $error_log = date('Y-m-d h:i:s A') . " INSERT pdo: " . $e->getmessage() . "\r\n";
            error_log($error_log, 3, ERROR_LOG);
            return false;
        } catch (Exception $e) {
            $error_log = date('Y-m-d h:i:s A') . " INSERT, General: " . $e->getmessage() . "\r\n";
            error_log($error_log, 3, ERROR_LOG);
            return false;
        }
    }

    protected final function delete($args = array())
    {
        try {
            /**
             * DELETE FROM table 
             * WHERE condition 
             */
            $this->sql = "DELETE ";

            $this->sql .= " FROM " . $this->table;

            if (isset($args['where']) && !empty($args['where'])) {
                $this->sql .= " WHERE " . $args['where'];
            }

            $this->stmt = $this->conn->prepare($this->sql);
            return $this->stmt->execute();

        } catch (PDOException $e) {
            $error_log = date('Y-m-d h:i:s A') . " delete pdo: " . $e->getmessage() . "\r\n";
            error_log($error_log, 3, ERROR_LOG);
            return false;
        } catch (Exception $e) {
            $error_log = date('Y-m-d h:i:s A') . " delete, General: " . $e->getmessage() . "\r\n";
            error_log($error_log, 3, ERROR_LOG);
            return false;
        }
    }
    
}
