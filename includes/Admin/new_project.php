<div class="container newProject">
        <?php
        
        if(isset($_POST['submit'])){
            $data = [
                'scroll_top_type'  => isset($_POST['scroll_top_type']) ? $_POST['scroll_top_type'] : '',
                'height' => isset($_POST['button_height']) ? $_POST['button_height'] : '',
                'button_width' => isset($_POST['button_width']) ? $_POST['button_width'] : '',
                'padding_right' => isset($_POST['padding_right']) ? $_POST['padding_right'] : '',
                'padding_buttom' => isset($_POST['padding_buttom']) ? $_POST['padding_buttom'] : '',
                'padding_all' => isset($_POST['padding_all']) ? $_POST['padding_all'] : '',
                'border_Radius' => isset($_POST['border_Radius']) ? $_POST['border_Radius'] : '',
                'background_color' => isset($_POST['background_color']) ? $_POST['background_color'] : '',
                'button_icon_img' => isset($_POST['button_image']) ? $_POST['button_image'] : '',
                'text_color' => isset($_POST['text_color']) ? $_POST['text_color'] : '',
                'font_size' => isset($_POST['font_size']) ? $_POST['font_size'] : ''
            ];
            update_option('scroll_to_top', wp_json_encode($data));
        }  
        ?>

	        <?php 
		    if( isset($data)){ ?>
			<h4 class='successfull'>Data Updated Successfully</h4>
			<?php }
             $settings = json_decode(get_option('scroll_to_top'),true);
            ?>
            
			<h2> Scroll To Top Settings</h2>
            <form class="scroll_top_form" id="scroll_top_form" action="" method="post">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Select Type</label>
                    <div class="col-sm-6">
                        <select class="form-control" id="scroll_top_type" name='scroll_top_type'>
                            <option value='<?php echo esc_html($settings['scroll_top_type']); ?>'><?php echo esc_html($settings['scroll_top_type']); ?></option>
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
                        <input type="text" class="form-control" id="button_height" name="button_height" value="<?php echo esc_html($settings['height']); ?>" placeholder="Enter Button Height. Ex - 10px">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Button Width</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="button_width" name="button_width" value="<?php echo esc_html($settings['button_width']); ?>" placeholder="Enter Button Width. Ex - 10px">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Right</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="padding_right" name="padding_right" value="<?php echo esc_html($settings['padding_right']); ?>" placeholder="Enter Padding Right. Ex - 10px">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Buttom</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="padding_buttom" name="padding_buttom" value="<?php echo esc_html($settings['padding_buttom']); ?>" placeholder="Enter Buttom Padding. Ex - 10px">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Padding</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="padding_all" name="padding_all" value="<?php echo esc_html($settings['padding_all']); ?>" placeholder="Enter Padding. Ex - 10px">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Border Radius</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="border_Radius" name="border_Radius" value="<?php echo esc_html($settings['border_Radius']); ?>" placeholder="Enter Border Radius. Ex - 10px">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Backgorund Color</label>
                    <div class="col-sm-2">
                        <input type="color" id="background_color" name="background_color" value="<?php echo esc_html($settings['background_color']); ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Button Icon/Images</label>
                    <div class="col-sm-2">
                        <input class="form-control form-control-md" value="Upload Image" id="button_icon_img" name="button_icon_img"  type="button" />
                        <span id="show_image"></span>
                        <input type="hidden" id="button_image" name="button_image" />
                    </div>
                    <!-- <div class="col-sm-4"><img src="<?php // echo @$settings['button_icon_img']; ?>" alt="Girl in a jacket" width="100" height="100"></div> -->
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Text Color</label>
                    <div class="col-sm-2">
                        <input type="color" id="text_color" name="text_color" value="<?php echo esc_html($settings['text_color']); ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Font-Size</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="font_size" name="font_size" value="<?php echo esc_html($settings['font_size']); ?>" placeholder="Enter Text Font Size Ex- 10px">
                    </div>

                </div>
                
                <div class="form-group row">
                    <div class="col-sm-4">

                    </div>
                    <div class="col-sm-8">
                    <?php wp_nonce_field('update-options'); ?>
                    <!-- <button type="submit" name="submit" id='submit' class="btn btn-primary">Save Information</button> -->
                    <button type="submit" name="submit_data" id='submit_data' class="btn btn-primary">Save Information</button>
                    </div>
                </div>
            </form>

</div>