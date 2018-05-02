<?php 
session_start();
if(isset($_SESSION['staf_id']))
{
        require "../database.php";
        $sess = $_SESSION['staf_id'];
        $result = $dbh->prepare("SELECT * FROM tempahan WHERE id = :sess");
        $result->bindParam(':sess', $sess);
        $result->execute();
        $event_array = array();
        $result->setFetchMode(PDO::FETCH_ASSOC);
        while ($record = $result->fetch()) {
            $event_array[] = array(
                'id' => $record['nama_ruang'],
                'title' => $record['tujuan_tempahan'],
                'start' => $record['nama'],
                'end' => $record['no_id'],
            );
        }
    echo json_encode($event_array);
}
?>