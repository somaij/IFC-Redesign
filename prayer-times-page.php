<?php
/**
 * Template Name: Prayer Times Page
 * @package IFC
 */

get_header();
get_template_part( 'template-parts/page-header');
$array = get_field('prayer_times', 'option' );
$group = array();

//Grouping the array by month.

foreach ( $array as $value ) {
    $month = DateTime::createFromFormat('Y-m-d',$value['start_date']);
    $month = $month->format('F');
    $month = strval($month);
    $group[$month][] = $value;
}

//print_r($group);
?>
<section id="prayer-intro" class="intro">
<?php if ( have_rows( 'intro_section' ) ) : ?>
    <?php while ( have_rows( 'intro_section' ) ) : the_row(); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 text-center">
		<h2><?php the_sub_field( 'title' ); ?></h2>
		<p><?php the_sub_field( 'text' ); ?></p>
		
		<?php $link = get_sub_field( 'link' ); ?>
		<?php if ( $link ) : ?>
			<a href="<?php echo esc_url( $link); ?>" class="btn-ar"><?php the_sub_field( 'button_text' ); ?></a>
        <?php endif; ?>
        </div>
        </div>
        </div>
	<?php endwhile; ?>
<?php endif; ?>
</section>
<section id="full-list-prayers">
<div class="container">
    <div class="row">
    <div class="col-12 col-md-2">
    <div class="sidebar">
    <?php
foreach($group as $key=>$val){ 
    echo "<a href='#".$key."'>".$key."</a>";
}
    ?>
    </div>
    </div>
    
    <div class="col-12 col-md-10">
    <div class="headline text-center">
<h2>All Prayer Times</h2>
</div>
	<?php

foreach($group as $key=>$val){ 
    //setting up each month div
    echo "<div id=".$key." class='month-full-width'>";
    echo "<div class='month-indicator'><h3>".$key."</h3></div>";
    echo "<table>
    <tr>
    <td></td>
    <td>Fajr</td>
    <td>Shurūq</td>
    <td>Dhuhr</td>
    <td>Asr</td>
    <td>Maghrib</td>
    <td>Īshā</td>
    </tr>";
    foreach($val as $k=>$v){ 
        //the data is printed here
        $list_day = DateTime::createFromFormat('Y-m-d',$v['start_date']);
        $list_day = $list_day->format('jS');
        echo "<tr>";
        echo "<td>" . $list_day . "</td>";
        echo "<td>" . $v['fajr'] . "</td>";
        echo "<td>" . $v['shuruq'] . "</td>";
        echo "<td>" . $v['dhuhr'] . "</td>";
        echo "<td>" . $v['asr'] . "</td>";
        echo "<td>" . $v['mag'] . "</td>";
        echo "<td>" . $v['isha'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "</div>";
}
?>
</div>
</div>
    </div>
</section>
<?php get_footer(); ?>
