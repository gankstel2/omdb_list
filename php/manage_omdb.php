<?php
include ('db_connect.php');
    $action = $_REQUEST['action'];
    switch ($action) {
        case 'create':
            $arr_count = count($_POST['dataAll']);
            $data = $_POST['dataAll'];

            for ($i=0; $i< $arr_count; $i++) {
                // print_r($data[$i]['Title']);
                $sql = "INSERT INTO `omdbs`(`title`, `year`, `imdbID`, `type`, `poster`) 
                        VALUES (
                            '".$data[$i]['Title']."',
                            '".$data[$i]['Year']."',
                            '".$data[$i]['imdbID']."',
                            '".$data[$i]['Type']."',
                            '".$data[$i]['Poster']."')";
                $result = mysqli_query($conn, $sql) or die("Error :" . mysqli_error());
            }
            echo $result;
            
        break;
        case 'show' :
            $sql = "SELECT `title`, `year`, `imdbID`, `type`, `poster` FROM `omdbs` ";
            $res = mysqli_query($conn, $sql) or die ("Error :" . mysqli_error($conn));
            if (mysqli_num_rows($res) > 0) {
                // output data of each row
                $row = mysqli_fetch_all($res, MYSQLI_ASSOC);
              } else {
                echo "0 results";
              }
              echo json_encode($row);
        break;
        case 'edit' :
            $sql = "UPDATE `omdbs` SET `title`='".$_POST['title_txt']."', `year`='".$_POST['year_txt']."', `poster`='".$_POST['post_url']."' WHERE imdbID='".$_POST['imdbID']."' ";
            $query = mysqli_query($conn, $sql) or die ("Error :". mysqli_error($conn));
            if ($query) {
               echo "successfully";
            }
        case 'delete' :
            $sql = "DELETE FROM `omdbs` WHERE imdbID='".$_POST['imdbID']."' ";
            $query = mysqli_query($conn, $sql) or die ("Error :". mysqli_error($conn));
            if ($query) {
                echo "successfully";
             }
        default:
            
            break;
    }
    
    

