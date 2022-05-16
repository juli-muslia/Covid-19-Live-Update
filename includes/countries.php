<?php
$global = file_get_contents( 'https://api.covid19api.com/summary');

$global_cases = json_decode($global, true);

$total_countries = count($global_cases['Countries']);

echo "<pre>";
//print_r($total_countries);
//print_r($global_cases);
//echo $global_cases['Global']['NewConfirmed'];


$value = ' <table class="table table-bordered">

<tr class="bg-primary text-white">
    <th>Country</th>
    <th>New Confirmed</th>
    <th>Total Confirmed</th>
    <th>New Deaths</th>
    <th>Total Deaths</th>
    <th>Date</th>
</tr>

';

$i=0;
while ($i<$total_countries){

    $value .=' <tr class="bg-dark text-white">';
    $value .='<td>' .$global_cases['Countries'][$i]['Country']. '</td>';
    $value .='<td>' .$global_cases['Countries'][$i]['NewConfirmed']. '</td>';
    $value .='<td>' .$global_cases['Countries'][$i]['TotalConfirmed']. '</td>';
    $value .='<td>' .$global_cases['Countries'][$i]['NewDeaths']. '</td>';
    $value .='<td>' .$global_cases['Countries'][$i]['TotalDeaths']. '</td>';
    $value .='<td>' .$global_cases['Countries'][$i]['Date']. '</td>';
    $i++;


}
$value .=' </tr>';
$value .=' </table>';

 echo $value;
?>

