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
echo "<small class='start-time'>Started - " . $period_start . "</small>";
echo "<dl class='pt'>";
echo "<dt>Fajr</dt><dd>" . $specific_row['fajr'] . "</dd>";
echo "<dt>Shurūq</dt><dd>" . $specific_row['shuruq'] . "</dd>";
echo "<dt>Dhuhr</dt><dd>" . $specific_row['dhuhr'] . "</dd>";
echo "<dt>Asr</dt><dd>" . $specific_row['asr'] . "</dd>";
echo "<dt>Maghrib</dt><dd>" . $specific_row['mag'] . "</dd>";
echo "<dt>Īshā</dt><dd>" . $specific_row['isha'] . "</dd>";
echo "</dl>";
else :

endif;

?>
