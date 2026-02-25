<?php
require '../api/db.php';
$pw = $_GET['pw'] ?? '';
if($pw !== 'letmein123') { echo 'Enter password ?pw=letmein123'; exit; }
$orders = $pdo->query("SELECT o.*,c.name AS cake_name FROM orders o JOIN cakes c ON o.cake_id = c.id ORDER BY o.created_at DESC")->fetchAll();
?>
<!doctype html><html><head><meta charset="utf-8"><title>Orders</title></head><body>
<h1>Orders</h1>
<table border="1" cellpadding="6">
<tr><th>ID</th><th>Cake</th><th>Customer</th><th>Phone</th><th>Delivery</th><th>Message</th><th>Status</th></tr>
<?php foreach($orders as $o): ?>
<tr>
  <td><?=htmlspecialchars($o['id'])?></td>
  <td><?=htmlspecialchars($o['cake_name'])?></td>
  <td><?=htmlspecialchars($o['customer_name'])?></td>
  <td><?=htmlspecialchars($o['phone'])?></td>
  <td><?=htmlspecialchars($o['delivery_date'])?></td>
  <td><?=htmlspecialchars($o['message'])?></td>
  <td><?=htmlspecialchars($o['status'])?></td>
</tr>
<?php endforeach; ?>
</table>
</body></html>
