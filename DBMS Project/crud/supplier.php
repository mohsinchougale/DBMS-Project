<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Supplier Database</title>
    <style>
      .table-fill
      {
        background: white;
        border-radius:3px;
        border-collapse: collapse;
        height: 320px;
        margin: auto;
        max-width: 600px;
        padding:5px;
        width: 100%;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        animation: float 5s infinite;
        }

        th
        {
        color:#D5DDE5;;
        background:#1b1e24;
        border-bottom:4px solid #9ea7af;
        border-right: 1px solid #343a45;
        font-size:23px;
        font-weight: 100;
        padding:24px;
        text-align:left;
        text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        vertical-align:middle;
        }

        tr
        {
        border-top: 1px solid #C1C3D1;
        border-bottom-: 1px solid #C1C3D1;
        color:#666B85;
        font-size:16px;
        font-weight:normal;
        text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
        }

        tr:hover td
        {
        background:#4E5066;
        color:#FFFFFF;
        border-top: 1px solid #22262e;
        }

        tr:first-child
        {
        border-top:none;
        }

        tr:last-child
        {
        border-bottom:none;
        }

        tr:nth-child(odd) td
        {
        background:#EBEBEB;
        }

        tr:nth-child(odd):hover td
        {
        background:#4E5066;
        }

        tr:last-child td:first-child
        {
        border-bottom-left-radius:3px;
        }

        tr:last-child td:last-child
        {
        border-bottom-right-radius:3px;
        }

        td
        {
        background:#FFFFFF;
        padding:20px;
        text-align:left;
        vertical-align:middle;
        font-weight:300;
        font-size:18px;
        text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
        border-right: 1px solid #C1C3D1;
        }

        td:last-child
        {
        border-right: 0px;
        }

        th.text-left
        {
        text-align: left;
        }

        th.text-center
        {
        text-align: center;
        }

        th.text-right
        {
        text-align: right;
        }

        td.text-left
        {
        text-align: left;
        }

        td.text-center
        {
        text-align: center;
        }

        td.text-right
        {
        text-align: right;
        }

    </style>


  </head>
  <body>
    <?php require "include/navbar.php" ?>

    <table>
      <tr>
        <th>Supplier ID</th>
        <th>Supplier name</th>
        <th>City</th>
        <th>State</th>
        <th>Pin Code</th>
        <th>Supplier ID</th>
      </tr>
      <?php
      $conn = mysqli_connect("localhost","root","","test");
      //Error condition
      if($conn->connect_error)
      {
        die("Connection Failed".$conn->connect_error);
      }

      $sql = "SELECT * FROM supplier ORDER BY supplier_id;";
      $result = $conn->query($sql);

      //If data is present in database
      if($result->num_rows > 0)
      {
        while($row = $result->fetch_assoc())
        {
          echo "<tr><td>".$row["supplier_id"]."</td>
          <td>".$row["name"]."</td>
          <td>".$row["city"]."</td>
          <td>".$row["state"]."</td>
          <td>".$row["zip"]."</td>
          <td>".$row["phone"]."</td></tr>";
        }

      }

      //Empty database case
      else
      {
        echo "No data present";
      }

      $conn->close();
      ?>


    </table>

  </body>
</html>
