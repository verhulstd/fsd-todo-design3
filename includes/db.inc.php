<?php
function connectToDB()
{
  try {
    $db = new PDO('mysql:host=' . DB_HOST . '; port=' . DB_PORT . '; dbname=' . DB_DB, DB_USER, DB_PASSWORD);
  } catch (PDOException $e) {
    echo "Error!: " . $e->getMessage() . "<br/>";
    die();
  }
  $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);

  return $db;
}