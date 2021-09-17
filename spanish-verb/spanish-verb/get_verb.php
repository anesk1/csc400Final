<?php 
    include "db.php";
    session_start();

    $verb_ending = $_SESSION['verb_ending'];
    $verb_tense = $_SESSION['verb_tense'];

    // Question Types:
    // 1: Fill in the blank
    // 2: Multiple choice - complete the sentence
    // 3: Muatching columns

    //$testing1 = "SELECT * FROM verbs WHERE verb = 'Estar'";
    //$testing2 = "SELECT * FROM verbs WHERE verb = 'Cantar'";
    //$testing3 = "SELECT * FROM verbs WHERE verb = 'Jugar'";

    $random_verb_row = "SELECT * FROM verbs WHERE type = '$verb_ending' ORDER BY RAND() LIMIT 1";
    $verb = array();

    if ($result = $DBcon->query($random_verb_row)) {
        while($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $verb[] = $row;
            //echo json_encode($row);
        }
    }
    
    $_SESSION['verb'] = $verb;

    $verb_id = json_encode($verb[0]['id']);
    $verb_id = str_replace('"', "", $verb_id);
    $_SESSION['verb_id'] = $verb_id;


?>