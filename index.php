<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
    
        <script type="text/javascript" src="jquery-3.1.1.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    
    <link rel="stylesheet" type="text/css" href="jquery-ui/jquery-ui.css">
    
    

    <script type="text/javascript" src="jquery-ui/jquery-ui.js"></script>
    
	<title>Asset & Inventorty Tracking</title>
        <script>
      $( function() {
        $( "#datepicker" ).datepicker();
      } );
      </script>
    
</head>
<body>
    <div class="header">
    <p>DeepAfrica Inventory tracking</p>
    </div>
    
    <table>
        <tr><td>Category of Item:</td>
         <td>
             <select class="select" id="item" name="item">
                <option value="hardware">HARDWARE</option>
                <option value="software">SOFTWARE</option>
             </select>
        </td>
     </tr>
    </table>
    
    <div class="form">
        <form name="input" method="post" action="insert.php">
            <table>
                <tr><td>Category of Item:</td>
                    <td>
                        <select class="select" id="item" name="item">
                          <option value="hardware">HARDWARE</option>
                          <option value="software">SOFTWARE</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        Type of Item:
                    </td>
                    <td>
                        <input type="text" class="input" id="type" name="type" required placeholder="Monitor, CPU, RAM...">
                    </td>
                </tr>
                <tr>
                    <td>
                        Manufacturer:
                    </td>
                    <td>
                        <input type="text" class="input" id="manufacturer" name="manufacturer" required placeholder="DELL,HP,ACER...">
                    </td>
                </tr>
                <tr>
                    <td>
                        Model Number:
                    </td>
                    <td>
                        <input type="text" class="input" id="model" name="model" required placeholder="MQ12e,D3eW...">
                    </td>
                </tr>
                <tr>
                    <td>
                        Serial Number:
                    </td>
                    <td>
                        <input type="text" class="input" id="serial" name="serial" required placeholder="MQ12e,D3eW...">
                    </td>
                </tr>
                <tr>
                    <td>
                        Date Acquired:
                    </td>
                    <td>
                    
                            <input type="date" id="datepicker" class="date"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        User Station:
                    </td>
                    <td>
                        <input type="text" class="input" id="user" name="user" required placeholder="Station 1, Station 2...">
                    </td>
                </tr>
            </table>
            <input type="submit" name="submit" value="SUBMIT" class="sub">
        </form>
    </div>
         
</body>
</html>