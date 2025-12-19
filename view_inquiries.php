<?php
// =======================
// DATABASE CONNECTION
// =======================
$conn = new mysqli("localhost", "root", "", "ittab_db");

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// =======================
// DELETE SINGLE INQUIRY
// =======================
if (isset($_GET['delete_id'])) {
    $id = (int)$_GET['delete_id'];
    $conn->query("DELETE FROM inquiries WHERE id = $id");
    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}

// =======================
// CLEAR ALL
// =======================
if (isset($_POST['clear_all'])) {
    $conn->query("TRUNCATE TABLE inquiries");
    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}

// =======================
// FETCH INQUIRIES
// =======================
$result = $conn->query("SELECT * FROM inquiries ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>ITTab — View Inquiries</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
:root{
  --blue:#0A2A5A;
  --yellow:#FFC300;
  --red:#d9534f;
}

body{
  font-family:system-ui,Segoe UI,Arial;
  background:linear-gradient(180deg,#071334,#0b2346);
  margin:0;
}

.container{
  max-width:1000px;
  margin:40px auto;
  background:#fff;
  padding:24px;
  border-radius:12px;
  box-shadow:0 15px 30px rgba(0,0,0,.2);
  position:relative;
}

h1{
  color:var(--blue);
  margin-bottom:20px;
}

table{
  width:100%;
  border-collapse:collapse;
}

th, td{
  border:1px solid #ccc;
  padding:12px;
  text-align:left;
}

th{
  background:var(--yellow);
  color:var(--blue);
}

.btn{
  display:inline-block;
  padding:8px 14px;
  border-radius:6px;
  background:var(--yellow);
  color:var(--blue);
  text-decoration:none;
  font-weight:700;
  border:none;
  cursor:pointer;
}

.btn.delete{
  background:var(--red);
  color:#fff;
}

.btn:hover{
  opacity:.9;
}

/* Clear All top-right */
.clear-all-btn{
  position:absolute;
  top:24px;
  right:24px;
}
</style>
</head>
<body>

<div class="container">

  <a href="Admin.php" class="btn">Back</a>

  <!-- Clear All -->
  <form method="post" class="clear-all-btn">
    <button type="submit" name="clear_all" class="btn"
      onclick="return confirm('Delete ALL inquiries?')">
      Clear All
    </button>
  </form>

  <h1>All Inquiries</h1>

  <table>
    <tr>
      <th>Action</th>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Subject</th>
      <th>Message</th>
      <th>Date</th>
    </tr>

    <?php if ($result && $result->num_rows > 0): ?>
      <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
          <!-- DELETE BUTTON (LEFT SIDE) -->
          <td>
            <a href="?delete_id=<?= $row['id'] ?>"
               class="btn delete"
               onclick="return confirm('Delete this inquiry?')">
               Delete
            </a>
          </td>

          <td><?= htmlspecialchars($row['id']) ?></td>
          <td><?= htmlspecialchars($row['name']) ?></td>
          <td><?= htmlspecialchars($row['email']) ?></td>
          <td><?= htmlspecialchars($row['subject']) ?></td>
          <td><?= htmlspecialchars($row['message']) ?></td>
          <td><?= htmlspecialchars($row['created_at'] ?? '') ?></td>
        </tr>
      <?php endwhile; ?>
    <?php else: ?>
      <tr>
        <td colspan="7" style="text-align:center;">No inquiries found.</td>
      </tr>
    <?php endif; ?>
  </table>

</div>

</body>
</html>

<?php $conn->close(); ?>
