<?php include '../view/header.php'; ?>
<main>

    <!-- display a table of customer information -->
    <h2>View/Update Customer</h2>
    <form action="." method="post" id="aligned">
        <input type="hidden" name="action" value="update_customer">
        <input type="hidden" name="customer_id" 
               value="<?php echo htmlspecialchars($customer['customerID']); ?>">

        <label>First Name:</label>
        <input type="text" name="first_name" 
               value="<?php echo htmlspecialchars($customer['firstName']); ?>">
        <span class="error">* <?php echo $errorStr;?></span><br>

        <label>Last Name:</label>
        <input type="text" name="last_name" 
               value="<?php echo htmlspecialchars($customer['lastName']); ?>">
        <span class="error">* <?php echo $errorStr;?></span><br>

        <label>Address:</label>
        <input type="text" name="address" 
               value="<?php echo htmlspecialchars($customer['address']); ?>" 
               size="50">
        <span class="error">* <?php echo $errorStr;?></span><br>

        <label>City:</label>
        <input type="text" name="city" 
               value="<?php echo htmlspecialchars($customer['city']); ?>">
        <span class="error">* <?php echo $errorStr;?></span><br>

        <label>State:</label>
        <input type="text" name="state" 
               value="<?php echo htmlspecialchars($customer['state']); ?>">
        <span class="error">* <?php echo $errorStr;?></span><br>

        <label>Postal Code:</label>
        <input type="text" name="postal_code" 
               value="<?php echo htmlspecialchars($customer['postalCode']); ?>">
        <span class="error">* <?php echo $errorStr;?></span><br>

        <label>Country Code:</label>
        <input type="text" name="country_code" 
               value="<?php echo htmlspecialchars($customer['countryCode']); ?>"><br>

        <label>Phone:</label>
        <input type="text" name="phone" 
               value="<?php echo htmlspecialchars($customer['phone']); ?>">
        <span class="error">* <?php echo $phoneError;?></span><br>

        <label>Email:</label>
        <input type="text" name="email" 
               value="<?php echo htmlspecialchars($customer['email']); ?>" 
               size="50">
        <span class="error">* <?php echo $emailError;?></span><br>

        <label>Password:</label>
        <input type="text" name="password" 
               value="<?php echo htmlspecialchars($customer['password']); ?>">
        <span class="error">* <?php echo $pwError;?></span><br>

        <label>&nbsp;</label>
        <input type="submit" value="Update Customer"><br>
    </form>
    <p><a href="">Search Customers</a></p>

</main>
<?php include '../view/footer.php'; ?>