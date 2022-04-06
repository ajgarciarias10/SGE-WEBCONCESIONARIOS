<h1>Car Projects Plugin Settings</h1>


<h2>Usage</h2>
<h4>Insert this code to display some custom fields in my custom post type index</h4>
<blockquote>
<pre> &lt;php do_shortcode('[show_fields id="'.$post->ID.'"]')&gt;</pre>
</blockquote>
<h4>Insert this code to display some custom fields in my custom post type single</h4>
<pre> &lt;php do_shortcode('[show_fields_single id="'.$post->ID.'"]')&gt;</pre>
<h2>Customize your plugin</h2>

<form action="options.php" method="post">
    <?php 
        settings_fields('ajgarciarias_cr_settings');
        do_settings_sections('ajgarciarias_cr_settings');
        $options = get_option('ajgarciarias_cr_settings');
    ?>
    <label>Custom type color</label>
    <input type="color" id ="ajgarciarias_cr_color" name="ajgarciarias_cr_settings[ajgarciarias_cr_color]" value="<?php echo (isset($options['ajgarciarias_cr_color']) && $options['ajgarciarias_cr_color']!='') ? $options['ajgarciarias_cr_color']:'';?>"/>
    <br><label for="num_stars">Rating stars number [50,100] </label><br>
    <input type="text" id="ajgarciarias_cr_num_stars" name="ajgarciarias_cr_settings[ajgarciarias_cr_num_stars]" value="<?php echo (isset($options['ajgarciarias_cr_num_stars']) &&  $options['ajgarciarias_cr_num_stars']!='') ? $options['ajgarciarias_cr_num_stars']:'';?>"/>
    <input type="submit" name="submit" value="Save">
</form>
