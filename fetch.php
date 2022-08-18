<?php

   class Chat{


     public function __construct(Database $Database)
     {
         $db=$Database;
         $this->conn=$db->Connect();
     }

       public function Search($chat){
           $query="SELECT Reply FROM messages  WHERE message LIKE ?";
           $stmt=$this->conn->prepare($query);
           $Chat=htmlspecialchars("%chat%");
           $stmt->bindParam(1, $chat);
           $stmt->execute();
          $result=$stmt->fetch(PDO::FETCH_ASSOC);
              return $result;
       }
   }

?>