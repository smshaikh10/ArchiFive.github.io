<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Submission Response</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      background-color: #f4f4f4;
      color: #333;
      text-align: center;
      padding: 20px;
    }

    h2 {
      font-size: 28px;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <h2><?php
    $name = $_POST['name'];
    echo $name;
    ?>, Thank you for your message!</h2>
  
  <p>We have received your message and will get back to you soon.</p>

  <p>If you have any further questions, feel free to contact us:</p>
  
  <p>Email: <a href="mailto:archifive2023@gmail.com">archifive2023@gmail.com</a></p>
  
  <p>Phone: <a href="tel:+917743876156">+91 7743876156</a></p>
</body>
</html>
