8. /includes/admin_functions.php – (Optional Admin Utilities)

<?php
function getTotalLost($conn) {
    $result = $conn->query("SELECT COUNT(*) as total FROM lost_items");
    return $result->fetch_assoc()['total'];
}

function getTotalFound($conn) {
    $result = $conn->query("SELECT COUNT(*) as total FROM found_items");
    return $result->fetch_assoc()['total'];
}
?>
