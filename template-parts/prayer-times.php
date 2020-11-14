<?php

if( have_rows('prayer_times', 'option') ):
$i=-1;
$current_date = date("md");
    while ( have_rows('prayer_times', 'option') ) : the_row();

       $start = get_sub_field('start_date');
        $start_date_time = DateTime::createFromFormat('Y-m-d', $start);
        $start_date = $start_date_time->format('md');
    
    if($start_date <= $current_date): $i++; else: break; endif; 

    endwhile;
$rows = get_field('prayer_times', 'option' ); // get all the rows
$specific_row = $rows[$i]; // 0 will get the first row, remember that the count starts at 0
$period_start = $specific_row['start_date']; // get the sub field value
$period_start = DateTime::createFromFormat('Y-m-d', $period_start);
$period_start = $period_start->format('F j');
echo "<ul class='pt'>";
echo "<li><small>Started - " . $period_start . "</small></li>";
echo "<li>Fajr - " . $specific_row['fajr'] . "</li>";
echo "<li>Shurūq - " . $specific_row['shuruq'] . "</li>";
echo "<li>Żuhr - " . $specific_row['zuhr'] . "</li>";
echo "<li>Asr - " . $specific_row['asr'] . "</li>";
echo "<li>Maghrib - " . $specific_row['mag'] . "</li>";
echo "<li>Īshā - " . $specific_row['isha'] . "</li>";
echo "</ul>";
else :

endif;

?>
