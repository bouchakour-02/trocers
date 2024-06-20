<?php
function addClient($client)
    {
        $sql = "INSERT INTO inscription  
        VALUES (:fn,:em, :ps,:cf,:cd)";
        $db = config::getConnexion();
        try {
            print_r($client->getDob()->format('Y-m-d'));
            $query = $db->prepare($sql);
            $query->execute([
                'fn' => $client->getName(), //   'fn' => $_POST['Name'],
                'em' => $client->getEmail(),
                'ps' => $client->getPassw(),
                'cf' => $client->getConfirm(),
                'cd' => $client->getCondit(),

            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    ?>