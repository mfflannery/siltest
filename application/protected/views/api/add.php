<?php
/* @var $this ApiController */
/* @var $form YbHorizForm */

// Set the page title.
$this->pageTitle = 'Publish a new API';

// Set up the breadcrumbs.
$this->breadcrumbs = array(
    'Home' => array('/dashboard/'),
    'APIs' => array('/api/'),
    $this->pageTitle
);

?>
<div class="pad-top">
    <?php
    
    // Show the form.
    echo $form;
    
    ?>
</div>
