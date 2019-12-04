  
<?php 
    $amount = floor(floatval($argv[1]) * 100) / 100;
    $otherCase = false;
    while ($amount > 0.04) {
        switch ($amount) {
            // 500 euro
            case (floor($amount / 500) > 0 ):
                $amount = checkChange(500, $amount);
                $otherCase = true;
                break; 
            // 200 euro
            case (floor($amount / 200) > 0 ):
                $amount = checkChange(200, $amount);
                $otherCase = true;
                break; 
            // 100 euro
            case (floor($amount / 100) > 0 ):
                $amount = checkChange(100, $amount);
                $otherCase = true;
                break; 
            // 50 euro
            case (floor($amount / 50) > 0 ):
                $amount = checkChange(50, $amount);
                $otherCase = true;
                break; 
            // 20 euro
            case (floor($amount / 20) > 0 ):
                $amount = checkChange(20, $amount);
                $otherCase = true;
                break; 
            // 10 euro
            case (floor($amount / 10) > 0 ):
                $amount = checkChange(10, $amount);
                $otherCase = true;
                break; 
            // 5 euro
            case (floor($amount / 5) > 0 ):
                $amount = checkChange(5, $amount);
                $otherCase = true;
                break; 
            // 2 euro
            case (floor($amount / 2) > 0 ):
                $amount = checkChange(2, $amount);
                $otherCase = true;
                break; 
            // 1 euro
            case (floor($amount / 1) > 0 ):
                $amount = checkChange(1, $amount);
                $otherCase = true;
                break;  
            // 0.5 euro
            case (floor($amount / 0.5) > 0 ):
                $amount = checkChange(0.5, $amount);
                $otherCase = true;
                break;             
            // 0.2 euro
            case (floor($amount / 0.2) > 0 ):
                $amount = checkChange(0.2, $amount);
                $otherCase = true;
                break;             
            // 0.1 euro
            case (floor($amount / 0.1) > 0 ):
                $amount = checkChange(0.1, $amount);
                $otherCase = true;
                break;             
            // 0.05 euro
            case (floor($amount / 0.05) > 0 ):
                $amount = checkChange(0.05, $amount);
                $otherCase = true;
                break; 
            default:
                if(!$otherCase && $amount > 0.00){
                    exit('Geen wisselgeld (Eind bedrag 0)');
                } elseif (!$otherCase && $amount < 0){
                    exit('Geen wisselgeld (Eind bedrag te weinig minder dan 5 cent)');
                }
                break;
        }
    }
    function checkChange($devider, $amount){
        $result = floor($amount / $devider); 
        $after = $amount - ($result * $devider);
        $amount = $after;
        
        echo($result . ' x ' . $devider .' euro' . PHP_EOL);
        return $amount;
    }
?>
<!-- What the fuck was going through your head? What did you think was gonna happen? Are you just a fucken idiot? Do you just not think? What the fuck were you thinking? That's why they're sending you this video because it absolutely fucking baffles them, that you did something so fucking retarded! They know you're not this fucking stupid, but for some reason, you just decided to through every bit of fucking common sense you ever had and act like a total fucking moron, ok?! So they really want you to know (and you should tell them as soon as possible), exactly what the fuck you were thinking? And if you weren't thinking, apologise as soon as fucking possible, because you were totally out of fucking line, ok? -->