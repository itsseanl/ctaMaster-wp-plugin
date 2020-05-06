<?php

function view($enable){
    if ($enable == 1){
        $enable = 'checked';
    }
    else{
        $enable = '';
    }
?>
<script src="https://cdn.jsdelivr.net/npm/spectrum-colorpicker2@2.0.0/dist/spectrum.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/spectrum-colorpicker2@2.0.0/dist/spectrum.min.css">

<p style="display:none" id="pluginSrc"><?php echo plugins_url() . '/ctaMaster/'; ?></p>
<div class="view">
    <div class="header">
        <h1>ctaMaster</h1>
        <p>ctaMaster aims to provide easy to implement banners to your WordPress Website. Display your banner on a specific page, or on all of them. modal pop-ups and more are coming soon!</p>
    </div>
    <div class="body">
        <div class="controls">
            <div class="btn" id="addBanner">
                Create Banner    
            </div>
            <!-- <div class="btn" id="addPopUp">
                Create Popup    
            </div> -->
           
        </div>
        <?php 
        if (file_exists(plugin_dir_path('/banner.js'))){ ?>
        <div class="disable">
            <p>Disable Banner</p>
            <label class="switch">
                <input type="checkbox" id="disable" onchange="disable(this)" <?php echo $enable; ?>>
                <span class="slider round"></span>
            </label>
        </div>
        <?php
        }
        ?>
        <div id="preview">
            <h2>Preview:</h2>
            <div id="banner-wrap">
                <div id="banner">
                    <p id="preview-text">Your banner text goes here</p>
                    <a href="#" class="btn" id="preview-btn">Banner Button</a>
                </div>
            </div>
        </div>
        <div id="add-banner" class="add-section">
            <h2>New Banner:</h3>
            <form class="add-form" method="post" action="">
                <div class="text-inputs form-section">
                <label for="pagedisplay">Select which page(s) to display Banner on
                    <select id="pages" name="pagedisplay" onchange="updateBanner(this)"> 
                        <option value="all">All Pages</option>
                    <?php
                                if( $pages = get_pages() ){
                                    foreach( $pages as $page ){
                                        echo '<option value="' . $page->ID . '" ' . selected( $page->ID, $options['page_id'] ) . '>' . $page->post_title . '</option>';
                                    }
                                }
                                ?>
                    </select>
                    </label>
                    <label for="banner-text">Banner Text
                    <input id="banner-text" type="text" onkeyup="updateBanner(this)" placeholder="Banner text" name="banner-text" required></input>
                    </label>
                    <label for="button-link">button Link
                    <input type="text" onkeyup="updateBanner(this)" placeholder="Button link (optional)" name="button-link" id="button-link"></input>
                    </label>
                    <label for="button-link-text">Button Text
                    <input id="button-text" type="text" onkeyup="updateBanner(this)" placeholder="Button Text" name="button-link-text"></input>
                    </label>
                </div>
                <div class="bg-inputs form-section">
                    <label for="bg-color">Background Color
                    <input id="bg-color" type="color" onchange="updateBanner(this)" name="bg-color" value="#217297"></input>
                    </label>
                    <label for="text-color">Text Color
                    <input type="color" name="text-color" onchange="updateBanner(this)" id="banner-text-color" value="#F5EFE0"></input>
                    </label>
                    <label for="btn-color">Button Color
                    <input type="color" name="btn-color" onchange="updateBanner(this)" id="btn-color" value="#F5EFE0"></input>
                    </label>
                    <label for="btn-text">Button Text
                    <input type="color" name="btn-text" onchange="updateBanner(this)" id="btn-text-color" value="#CD2653"></input>
                    </label>
                </div>
                <div class="form-section">
                  
                    <input type="button" value="Create Banner" onclick="submitForm(event)"></input>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
jQuery("#bg-color").spectrum({
        color: "#f00"
    });
    jQuery("#btn-color").spectrum({
        color: "#f00"
    });
    jQuery("#banner-text-color").spectrum({
        color: "#f00"
    });
    jQuery("#btn-text-color").spectrum({
        color: "#f00"
    });
</script>
<?php
}