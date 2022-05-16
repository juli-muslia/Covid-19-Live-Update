<?php
$global = file_get_contents( 'https://api.covid19api.com/summary');

$global_cases = json_decode($global, true);


echo "<pre>";
//print_r($global_cases);
//echo $global_cases['Global']['NewConfirmed'];
$value = ' <table class="table table-bordered">

<tr class="bg-primary text-white">
    <th>New Confirmed</th>
    <th>Total Confirmed</th>
    <th>New Deaths</th>
    <th>Total Deaths</th>
    <th>New Recovered</th>
    <th>Total Recovered</th>
    <th>Date</th>
</tr>

';

$i=0;
while ($i<1){

    $value .=' <tr class="bg-dark text-white">';
    $value .='<td>' .$global_cases['Global']['NewConfirmed']. '</td>';
    $value .='<td>' .$global_cases['Global']['TotalConfirmed']. '</td>';
    $value .='<td>' .$global_cases['Global']['NewDeaths']. '</td>';
    $value .='<td>' .$global_cases['Global']['TotalDeaths']. '</td>';
    $value .='<td>' .$global_cases['Global']['NewRecovered']. '</td>';
    $value .='<td>' .$global_cases['Global']['TotalRecovered']. '</td>';
    $value .='<td>' .$global_cases['Global']['Date']. '</td>';
    $i++;


}
$value .=' </tr>';
$value .=' </table>';

echo $value;
?>

