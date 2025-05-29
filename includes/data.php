<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = $_POST['phone'];
    $network = $_POST['network'];
    $plan = $_POST['plan'];

    // TODO: Validate and call API or insert into DB
    echo "Data purchase submitted: $phone, $network, Plan: $plan";
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

  <label>Data Plan:</label><br>
  <select name="plan" required>
    <option value="500MB">500MB – ₦150</option>
    <option value="1GB">1GB – ₦250</option>
    <option value="2GB">2GB – ₦500</option>
    <!-- Add more based on your plans -->
  </select><br><br>

  <button type="submit">Buy Data</button>
</form>
