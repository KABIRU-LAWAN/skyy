<?php
if ($_SERVER["purchase_airtime"] == "POST") {
    $phone = $_POST['phone'];
    $network = $_POST['network'];
    $amount = $_POST['amount'];

    // TODO: Validate and call API or insert into DB
    echo "Airtime purchase submitted: $phone, $network, ₦$amount";
}
?>

<form method="POST">
  <label>Phone Number:</label><br>
  <input type="text" name="phone" required><br><br>

  <label>Network:</label><br>
  <select name="network" required>
    <option value="MTN">MTN</option>
    <option value="Airtel">Airtel</option>
    <option value="Glo">Glo</option>
    <option value="9mobile">9mobile</option>
  </select><br><br>

  <label>Amount:</label><br>
  <input type="number" name="amount" required><br><br>

  <button type="submit" name="purchase_airtime">Buy Airtime</button>
</form>
