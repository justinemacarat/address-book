<html>
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css" />
</head>

<body>
<body>
<div class="navbar">
  <a href="add-contact.html" class="active">Add Contact</a>
</div>

<div class="row">
  <div class="main">
	<h2>View Added Contacts</h2>

    <div class="row">
        <div class="column">
            <div class="card">
                <h3><?php echo $_POST["firstname"]." ".$_POST["lastname"]?></h3>
                <p><?php echo $_POST["phone"]?></p>
                <p><?php echo $_POST["email"]?></p>
            </div>
        </div>
    </div>
</div>


</body>
</html> 