<?php 
$fromAmount = $_GET['From'];
$fromMoney = $_GET['moneyFrom'];
$toMoney = $_GET['moneyTo'];
$toAmount = $_GET['to'];
$USD_rates = array('1','0.91','1.35');//usd,eur,cad Rates
if($_GET){
   if(isset($_GET['From']) && isset($_GET['moneyFrom']) && isset($_GET['moneyTo']) && isset($_GET['To'])) {
    if($fromMoney=='USD'){
        $toAmount = match ($toMoney) {
          'USD' => floatval($fromAmount),
          'EUR' => floatval($fromAmount) *$USD_rates[1],
          'CAD' => floatval($fromAmount) *$USD_rates[2],
        };
    }
    if($fromMoney=='EUR'){
        $toAmount = match ($toMoney) {
          'USD' => floatval($fromAmount) / $USD_rates[1],
          'EUR' => floatval($fromAmount),
          'CAD' => floatval($fromAmount) * $USD_rates[2] / $USD_rates[1],
        };
    }
    if($fromMoney=='CAD'){
        $toAmount = match ($toMoney) {
          'USD' => floatval($fromAmount) / $USD_rates[2],
          'EUR' => floatval($fromAmount) * $USD_rates[1] / $USD_rates[2],
          'CAD' => floatval($fromAmount),
        };
    }
   }
}
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>My Currency Page</title>
    </head>
    <body>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="get" autocomplete="off">
          From:   <input type="number" name="From" value="<?php echo $fromAmount; ?>" autocomplete="off">
            Currency: <select name="moneyFrom">
                <option value="none" select disabled>Choose Currency</option>
                <option value="USD">US Dollar</option>
                <option value="EUR">Euro</option>
                <option value="CAD">Canadian Dollar</option>
            </select> <br>
          To:  <input type="number" name="To" value= "<?php echo $toAmount; ?>"autocomplete="off" >
          Currency:  <select name="moneyTo">
                <option value="none" select disabled>Choose Currency</option>
                <option value="USD">US Dollar</option>
                <option value="EUR">Euro</option>
                <option value="CAD">Canadian Dollar</option>
            </select> <br>
            <input type="submit" value="Convert">
    </form>
    </body>
</html>
