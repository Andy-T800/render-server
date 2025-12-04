<?php
// Initialize result message and input variable
$checkResult = "<span style='color:red'>Hint: try 'fred'</span>";
$myInputText01 = '';

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get user input safely and trim whitespace
    $myInputText01 = isset($_POST['code']) ? trim($_POST['code']) : '';

    // Check the secret code (case-insensitive)
    if (strtolower($myInputText01) === 'fred') {
        $checkResult = "<b style='color:green'>Access Granted!</b>";
    } else {
        $checkResult = "<span style='color:red'>Hint: try 'fred'</span>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Secret Code Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #f5f5f5;
        }
        .box {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        input[type="text"] {
            padding: 10px;
            width: 200px;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            padding: 10px 20px;
        }
    </style>
</head>
<body>
    <div class="box">
        <h2>Enter Secret Code</h2>

        <form method="POST">
            <input type="text" name="code" placeholder="Enter code..." 
                value="<?php echo htmlspecialchars($myInputText01); ?>" required>
            <br>
            <input type="submit" value="Submit">
        </form>

        <div style="margin-top:10px;">
            <?php echo $checkResult; ?>
        </div>
    </div>
</body>
</html>
