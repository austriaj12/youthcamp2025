<?php
session_start();

// Ensure only admin can access
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    die("Unauthorized access!");
}

require __DIR__ . '/vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "youth_camp";

$conn = new mysqli($servername, $username, $password, $database);

// Check database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch campers' data
$query = "SELECT fullname, nickname, address, contact_number, birthdate, age, church_name, church_address, head_pastor, years_christian, delegation, suggestions FROM registered_campers";
$result = $conn->query($query);

// Check if the query was successful
if (!$result) {
    die("Query failed: " . $conn->error);
}

// Create a new Spreadsheet
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Set column headers
$headers = ["Full Name", "Nickname", "Address", "Contact Number", "Birth Date", "Age", "Church Name", "Church Address", "Head Pastor", "Years as Christian", "Delegation", "Suggestions"];
$sheet->fromArray([$headers], NULL, 'A1');

// Insert rows from database
$rowNumber = 2;
while ($row = $result->fetch_assoc()) {
    $sheet->fromArray(array_values($row), NULL, 'A' . $rowNumber);
    $rowNumber++;
}

// Auto-size columns
foreach (range('A', 'L') as $columnID) {
    $sheet->getColumnDimension($columnID)->setAutoSize(true);
}

// Set headers for the Excel file download
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="registered_campers.xlsx"');

// Ensure no further output
ob_clean();
flush();

// Generate and download Excel file
$writer = new Xlsx($spreadsheet);
$writer->save("php://output");

// Close database connection
$conn->close();
exit();
?>
