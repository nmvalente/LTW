<?php
  function getNewsComments($id) {
    global $db;
    
    $stmt = $db->prepare('SELECT * FROM comments WHERE news_id = ?');
    $stmt->execute(array($id));  

    return $stmt->fetchAll();
  }
?>