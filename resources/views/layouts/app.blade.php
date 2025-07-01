<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Kelola Mahasiswa</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      background-color: #f8fafc;
      font-family: Arial, sans-serif;
      color: #333;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 900px;
      margin: 50px auto;
      padding: 20px;
      background: white;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    h1, h2 {
      color: #0d6efd;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      padding: 12px;
      border: 1px solid #ccc;
      text-align: left;
    }

    a.button {
      display: inline-block;
      padding: 8px 16px;
      background: #0d6efd;
      color: white;
      text-decoration: none;
      border-radius: 4px;
      margin-right: 5px;
    }

    a.button.edit {
      background: #ffc107;
      color: black;
    }
    a.button.edit:hover {
      background: #e0a800;
      color: black;
    }

    a.button:hover {
      background: #0b5ed7;
    }

    form label {
        display: block;
        margin-top: 12px;
        font-weight: 500;
    }

    form input[type="text"],
    form input[type="number"],
    form input[type="date"],
    form input[type="email"],
    form select {
        width: 100%;
        padding: 8px;
        border-radius: 6px;
        border: 1px solid #ccc;
        margin-top: 4px;
        box-sizing: border-box;
    }

    form input:focus,
    form select:focus {
        border-color: #0d6efd;
        outline: none;
        box-shadow: 0 0 0 2px rgba(13, 110, 253, 0.2);
    }

    form button[type="submit"] {
        background-color: #0d6efd;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
    }

    form button[type="submit"]:hover {
        background-color: #0b5ed7;
    }

    table form .btn-delete {
        background-color: #ff0000;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
    }
    
    table form .btn-delete:hover {
        background-color: #d90000;
    }

    .detail-box {
      padding: 20px;
      background-color: #f8f9fa;
      border: 1px solid #ddd;
      border-radius: 8px;
      margin-block: 20px;
    }

    .detail-box p {
        margin: 8px 0;
    }

    .btn-back {
        display: inline-block;
        padding: 8px 14px;
        background-color: #ff0000;
        color: white;
        border: none;
        border-radius: 6px;
        text-decoration: none;
    }

    .btn-back:hover {
        background-color: #d90000;
    }
  </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    <p style="text-align: center; color: #666;">&copy; 2025 by Muhammad Prasetya Nugroho - 22552011054 - TIF RP 22 CNS</p>
</body>
</html>
