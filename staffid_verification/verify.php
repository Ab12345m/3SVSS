<?php
include 'db.php';

if (isset($_POST['staffId'])) {
    $staffId = $_POST['staffId'];

    $stmt = $conn->prepare("SELECT * FROM staff WHERE staff_id = ?");
    $stmt->bind_param("s", $staffId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $staff = $result->fetch_assoc();
        echo "<div class='alert alert-success'>
                <strong>Verified!</strong><br>
                Name: {$staff['name']}<br>
                Department: {$staff['department']}
              </div>";
    } else {
        echo "<div class='alert alert-danger'>Staff ID not found!</div>";
    }
}
?>
