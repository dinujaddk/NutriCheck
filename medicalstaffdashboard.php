<?php
include 'connect.php'; // Include database connection
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Staff Admin Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel='stylesheet' type='text/css' media='screen' href="CSS/home.css">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link rel="stylesheet" href="CSS/medstaff.css">
</head>
<body>
    <h2 style="text-align:center;">Manage Diet Plans</h2>
    
    <table>
        <thead>
            <tr>
                <th>Package Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Product Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM dietplan";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "
                    <tr>
                        <td>{$row['planname']}</td>
                        <td>{$row['pdescrption']}</td>
                        <td>{$row['price']}</td>
                        <td><img src='data:image/jpeg;base64," . base64_encode($row['Img']) . "' class='product-img'/></td>
                        <td>
                            <button onclick='openUpdateForm({$row['planid']}, \"{$row['planname']}\", \"{$row['pdescrption']}\", {$row['price']})'>Update</button>
                            <form action='delete_dietplan.php' method='POST' style='display:inline;'>
                                <input type='hidden' name='planid' value='{$row['planid']}'>
                                <button type='submit'>Remove</button>
                            </form>
                        </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No diet plans found</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <button onclick="showAddForm()">Add Package</button>

    <div id="packageFormContainer" style="display:none;">
        <h3 id="formTitle">Add New Package</h3>
        <form id="dietPlanForm" action="add_diet_plan.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" id="planid" name="planid"> <!-- Hidden input for plan ID -->
            <label for="packageName">Package Name</label>
            <input type="text" id="packageName" name="packageName" required>

            <label for="packageDesc">Description</label>
            <input type="text" id="packageDesc" name="packageDesc" required>

            <label for="packagePrice">Price</label>
            <input type="number" step="0.01" id="packagePrice" name="packagePrice" required>

            <label for="packageType">Type</label>
            <input type="text" id="packageType" name="packageType" required>

            <label for="packageImage">Upload Image</label>
            <input type="file" id="packageImage" name="packageImage" accept="image/*" required>

            <button type="submit">Submit Package</button>
        </form>
    </div>

    <script>
        function showAddForm() {
            document.getElementById('formTitle').innerText = "Add New Package";
            document.getElementById('planid').value = ""; // Clear the plan ID
            document.getElementById('dietPlanForm').action = "add_diet_plan.php"; // Set action to add
            document.getElementById('packageFormContainer').style.display = 'block';
        }

        function openUpdateForm(id, name, desc, price) {
            document.getElementById('formTitle').innerText = "Update Package";
            document.getElementById('planid').value = id; // Set the plan ID
            document.getElementById('packageName').value = name;
            document.getElementById('packageDesc').value = desc;
            document.getElementById('packagePrice').value = price; // Ensure this is correctly set
            document.getElementById('dietPlanForm').action = "update_diet_plan.php"; // Set action to update
            document.getElementById('packageFormContainer').style.display = 'block';
        }
    </script>
</body>
</html>
