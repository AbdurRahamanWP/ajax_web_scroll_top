<div class="container newProject">
    <?php
    // Fetch saved settings
    $saved_settings = get_option('scroll_to_top', '{}'); // Default to empty JSON if no value exists
    $settings = json_decode($saved_settings, true); // Decode JSON into an associative array
    ?>




    <h2> Scroll To Top Settings</h2>
    <form class="scroll_top_form" id="scroll_top_form" method="post">
        <?php wp_nonce_field('simple_ajax_scroll_top', 'scroll_top_nonce'); ?>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Select Type</label>
            <div class="col-sm-6">
                <select class="form-control" id="scroll_top_type" name='scroll_top_type'>
                    <option value='tab'>Tab Format</option>
                    <option value='images'>Images Format</option>
                    <option value='link'>Link Format</option>
                    <option value='pill'>Pill Format</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Button Height</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="button_height" name="button_height"
                    value="<?php echo isset($settings['button_height']) ? esc_attr($settings['button_height']) : ''; ?>"
                    placeholder="Enter Button Height. Ex - 10px">



            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Button Width</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="button_width" name="button_width"
                    value="<?php echo esc_attr($settings['button_width'] ?? ''); ?>"
                    placeholder="Enter Button Width. Ex - 10px">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Right</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="padding_right" name="padding_right"
                    value="<?php echo esc_attr($settings['padding_right'] ?? ''); ?>"
                    placeholder="Enter Padding Right. Ex - 10px">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Buttom</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="padding_buttom" name="padding_buttom"
                    value="<?php echo esc_attr($settings['padding_buttom'] ?? ''); ?>"
                    placeholder="Enter Buttom Padding. Ex - 10px">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Padding</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="padding_all" name="padding_all"
                    value="<?php echo esc_attr($settings['padding_all'] ?? ''); ?>"
                    placeholder="Enter Padding. Ex - 10px">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Border Radius</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="border_Radius" name="border_Radius"
                    value="<?php echo esc_attr($settings['border_Radius'] ?? ''); ?>"
                    placeholder="Enter Border Radius. Ex - 10px">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Backgorund Color</label>
            <div class="col-sm-2">
                <input type="color" id="background_color" name="background_color"
                    value="<?php echo esc_attr($settings['background_color'] ?? ''); ?>">
            </div>
        </div>

        <div class="form-group row">
            <!-- <label for="inputEmail3" class="col-sm-4 col-form-label">Button Icon/Images</label>
            <div class="col-sm-2">
                <input class="form-control form-control-md" value="Upload Image" id="button_icon_img"
                    name="button_icon_img" type="button" />
                <span id="show_image"></span>
                <input type="hidden" id="button_image" name="button_image" />
            </div> -->
            <!-- <div class="col-sm-4"><img src="<?php // echo @$settings['button_icon_img']; 
                                                    ?>" alt="Girl in a jacket" width="100" height="100"></div> -->
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Text Color</label>
            <div class="col-sm-2">
                <input type="color" id="text_color" value="<?php echo esc_attr($settings['text_color'] ?? ''); ?>"
                    name="text_color">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Font-Size</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="font_size" name="font_size"
                    value="<?php echo esc_attr($settings['font_size'] ?? ''); ?>"
                    placeholder="Enter Text Font Size Ex- 10px">
            </div>

        </div>

        <div class="form-group row">
            <div class="col-sm-4">

            </div>
            <div class="col-sm-8">



                <!-- <button type="submit" name="submit" id='submit' class="btn btn-primary">Save Information</button> -->
                <button type="submit" name="submit_data" id='submit_data' class="btn btn-primary">Save
                    Information</button>
            </div>
        </div>
    </form>

</div>