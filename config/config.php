<?php
    
    class Config{

        private $db_user_name = "root";
        private $host = "localhost";
        private $Password = "";
        private $db_name = "stock_management_system";
        private $Stock_category = "stock_category";
        private $company_list = "food_stock_company";
        private $Retailers_list = "retailers_list";
        private $conn;

        //For Connection of database
          
        public function connect() {
            $this->conn = mysqli_connect($this->host, $this->db_user_name, $this->Password, $this->db_name);  

            return $this->conn; 
        }


        //For adding food_stock_categories

        public function add_food_categories($stock_category) {

            $this->connect();
    
            $query = "INSERT INTO $this->Stock_category(stock_categories) VALUES('$stock_category');";
        
            $res = mysqli_query($this->conn, $query);

            return $res;        
        }


        //For deleting food_stock_categories

        public function delete_food_categories($id) {

            $this->connect();

            $query = "DELETE FROM $this->Stock_category WHERE id=$id;";

            $res = mysqli_query($this->conn, $query);

            return $res;  
        }

        //For adding food_stock_company

        public function add_food_company($company_name) {

            $this->connect();
    
            $query = "INSERT INTO $this->company_list(company_names) VALUES('$company_name');";
        
            $res = mysqli_query($this->conn, $query);

            return $res;        
        }

        //For deleting food_stock_company

        public function delete_food_company($id) {

            $this->connect();

            $query = "DELETE FROM $this->company_list WHERE id=$id;";

            $res = mysqli_query($this->conn, $query);

            return $res;  
        }


        //For retailer Insertion

        public function insert_retailer($name, $email, $contact, $password) {
            $this->connect();

            $Hased_password = password_hash($password,PASSWORD_DEFAULT);
            $query = "INSERT INTO retailers_list(name, email, contact, password) VALUES('$name', '$email', $contact, '$password');";

            $res = mysqli_query($this->conn, $query);  

            return $res;  
        }

        //For Supplier Insertion
        public function insert_supplier($name, $email, $contact, $company_id) {
            $this->connect();

            $query = "INSERT INTO suppliers_list(supplier_name, email, contact_no, company_id) VALUES('$name', '$email', $contact, $company_id);";

            $res = mysqli_query($this->conn, $query);  

            return $res;  // bool
        }

        //For Supplier Deletion 
        public function delete_supplier($id) {

            $this->connect();

            $query = "DELETE FROM suppliers_list WHERE id=$id;";

            $res = mysqli_query($this->conn, $query);

            return $res;  
        }

        //For pending Orders
        public function insert_order($r_id, $p_id, $c_id, $quantity) {
            $this->connect();

            $query = "INSERT INTO orders(r_id, p_id, c_id, quantity) VALUES('$r_id', $p_id, '$c_id', '$quantity');";

            $res = mysqli_query($this->conn, $query);  

            return $res;  
        }

        //For Fetching Orders
        public function fetch_orders(){
            $this->connect();

            $query = "SELECT * FROM orders;";

            $res = mysqli_query($this->conn, $query);

            return $res;   
        }

        //For deleting order 
        public function delete_order($id) {

            $this->connect();

            $query = "DELETE FROM orders WHERE id=$id;";

            $res = mysqli_query($this->conn, $query);

            return $res;  
        }

        //For update order
        public function update_order($r_id, $p_id, $c_id, $quantity, $id) {
            $this->connect();

            $query = "UPDATE orders SET r_id=$r_id, p_id=$p_id, c_id =$c_id, quantity = $quantity WHERE id=$id;";

            $res = mysqli_query($this->conn, $query);

            return $res;  
        }

        
    }

   
?>