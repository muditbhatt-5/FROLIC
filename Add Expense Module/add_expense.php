<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect form data
    $expense_name = $_POST['expense_name'];
    $amount = $_POST['amount'];
    $members = $_POST['members'];

    // Get existing expenses from cookies
    if (isset($_COOKIE['expenses'])) {
        $expenses = json_decode($_COOKIE['expenses'], true);
    } else {
        $expenses = [];
    }

    // Add new expense to the array
    $expenses[] = [
        'name' => $expense_name,
        'amount' => $amount,
        'members' => $members
    ];

    // Save updated expenses back to cookies
    setcookie('expenses', json_encode($expenses), time() + (86400 * 30), "/");  // 86400 = 1 day

    // Redirect back to the homepage
    header("Location: index.php");
    exit();
}
?>
