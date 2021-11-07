<?php
        $conn = mysqli_connect("localhost", "root", "sns@123", "busproject",3306);
        $sql = "DELETE FROM passenger_info WHERE cid='" . $_GET["cid"] . "'" ;
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>