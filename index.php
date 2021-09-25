<!DOC   TYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KPS:R</title>
    <link rel="stylesheet" href="CSS/style.css" type="text/css">
</head>
<body>
<?php   $submit = filter_input(INPUT_POST, 'submit');
   if(isset($submit))
   {
    $amount = $_POST['amount'];
    $from = $_POST['from'];
    $to = $_POST['to'];
    switch($from)
    {
    case "czk":
            switch($to)
            {
                case "czk":
                    $exchange_rate = 1;
                    break;
                case "eur":
                    $exchange_rate = 0.039;
                    break; 
                case "usd":
                    $exchange_rate = 0.046;
                    break;
                case "gbp":
                    $exchange_rate = 0.034;
                    break;
                case "rub":
                    $exchange_rate = 3.37;
                    break;
                case "rm":
                    $exchange_rate = 2.5;
                    break;
            }
            break;
        case "eur":
            switch($to)
            {
                case "czk":
                    $exchange_rate = 25.37;
                    break;
                case "eur":
                    $exchange_rate = 1;
                    break;
                case "usd":
                    $exchange_rate = 1.17;
                    break;        
                case "gbp":
                    $exchange_rate = 0.85;
                    break;
                case "rub":
                    $exchange_rate = 85.44;
                    break;
                case "rm":
                    $exchange_rate = 2.5;
                    break;
            }
            break;
        case "usd":                                                       
                switch($to)
                {
                    case "czk":
                        $exchange_rate = 21.62;
                        break; 
                    case "eur":
                        $exchange_rate = 0.85;
                        break;
                    case "usd":
                        $exchange_rate = 1;
                        break;
                    case "gbp":
                        $exchange_rate = 0.73;
                        break;
                    case "rub":
                        $exchange_rate = 72.84;
                        break;
                    case "rm":
                        $exchange_rate = 2.5;
                        break;
                }
                break;                                                        
            case "gbp":                                                       
                switch($to)
                {
                    case "czk":
                        $exchange_rate = 29.73;
                        break; 
                    case "eur":
                        $exchange_rate = 1.17;
                        break;
                    case "usd":
                        $exchange_rate = 1.38;
                        break;
                    case "gbp":
                        $exchange_rate = 1;
                        break;
                    case "rub":
                        $exchange_rate = 100.24;
                        break;
                    case "rm":
                        $exchange_rate = 2.5;
                        break;
                }
                break;                                                        
            case "rub":                                                       
                switch($to)
                {
                    case "czk":
                        $exchange_rate = 0.3;
                        break; 
                    case "eur":
                        $exchange_rate = 0.012;
                        break;
                    case "usd":
                        $exchange_rate = 0.014;
                        break;
                    case "gbp":
                        $exchange_rate = 0.01;
                        break;
                    case "rub":
                        $exchange_rate = 1;
                        break;
                    case "rm":
                        $exchange_rate = 2.5;
                        break;
                }
                break;
            case "rm":                                                       
                switch($to)
                {
                    case "czk":
                        $exchange_rate = 0.3;
                        break; 
                    case "eur":
                        $exchange_rate = 0.012;
                        break;
                    case "usd":
                        $exchange_rate = 0.014;
                        break;
                    case "gbp":
                        $exchange_rate = 0.01;
                        break;
                    case "rub":
                        $exchange_rate = 1;
                        break;
                    case "rm":
                        $exchange_rate = 2.5;
                        break;
                }
                break;                                             
    }                    
        $result = $amount * $exchange_rate;
        
        echo "$amount$from je $result$to."; 
    }
     else {?>
    <h1>Kokešova Pirátská Směnárna:Revival</h1>
    <h2>"Měníme Vaší měnu pomocí magie již od roku 2021"</h2>
    <hr>
    <form method="post">
    <h2>Přál bych si proměnit ...</h2>
    <label for="amount"> Částka: </label> 
    <input type="number" min="0" id="amount" name="amount"> 

    <select name="from" id="from"> 
    <option value="czk">CZK</option>
    <option value="eur">EUR</option>
    <option value="usd">USD</option>
    <option value="gbp">GBP</option>
    <option value="rub">RUB</option>
    <option value="rm">RM</option>
    </select>
    <br>
    <hr>
    <h2>na ...</h2>
    <select name="to" id="to">
    <option value="czk">CZK</option>
    <option value="eur">EUR</option>
    <option value="usd">USD</option>
    <option value="gbp">GBP</option>
    <option value="rub">RUB</option>
    <option value="rm">RM</option>
    </select>
  </br>
  <hr>
  <label for="submit">Podat žádost</label> <input type="submit" name="submit" value="Potvrdit">
    <?php } ?>
</body>
</html>