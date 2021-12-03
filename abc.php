<?php
//start_epoch: the starting for a given subscription
//last_epoch: the 
//time_units: daily, weekly, monthly and yearly
//period 

function get_next_billing_date($start_epoch, $last_epoch, $unit, $period){
    //check if the start epoch

    if(!$start_epoch){
        echo "Start epoch is needed";
        return;
    }

    if(!$last_epoch){
        $last_epoch = $start_epoch;
    }

    //period defined we assume period to be 1

    if(!$period){
        $period = 1;
    }

    //we define all time

    $known_units = array(
        'daily' => 1,
        'weekly' => 7,
        'monthly' => 1,
        'yearly' => 1,
    );

    if(!array_keys_exists($unit, $known_units)){
        echo 'time unit' .$unit. 'is not known';
        return;
    }


    $duration = $known_units[$unit];
    $duration = $duration * $period;


    $start = new DateTime('@'.$start_epoch);
    $last = new DateTime('@',$last_epoch);

    $year = (int)$last->format('Y');
    $month = (int)$last->format('n');
    $day = (int)$start->format('j');

    switch($unit){
        case 'daily':
        case 'weekly':
            $day += $duration;
            break;
        case 'monthly':
            $month +=$duration;
            break;
        case 'yearly':
            $year += $duration;
            break;
        default:
            echo 'unknown time unit';
            return; 
    }

    if($day > 31){
        $num_of_days = $last->format('t');
        while($day > 31){
            $day = $day - $num_of_days;
            $month += 1;
        }
    }

    if($month > 12){
        $month = 1;
        $year += 1;
    }

    while(true){
        $next = new DateTime("{$year}-{$month}-{$day} UTC");

        if($next->format('n') == $month){
            break;
        }else{
            $day--;
        }
    }
    return(int)$next->format('U') ;
}

$verbs = array(
    'daily' => 12,
    'weekly' => 14,
    'monthly' => 7,
    'yearly' => 5,
);
$this_date = '2020-01-01';
$start_at = strtotime(date('$this_date'));
foreach($verbs as $time_unit => $period){
    $next = get_next_billing_date($start_at,null,$time_unit,$period);
    $next_date = date('Y-m-d',$next);
    echo "From {$this_date} after {$period} in {$time_unit} the next billing date will be $next_date\n";
}


?>