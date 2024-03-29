<?php 
/**
* @version      4.3.1 13.08.2013
* @author       MAXXmarketing GmbH
* @package      Jshopping
* @copyright    Copyright (C) 2010 webdesigner-profi.de. All rights reserved.
* @license      GNU/GPL
*/
defined('_JEXEC') or die('Restricted access');
?>
<div class="jshop">
	<div class="image_category_block">
		<a href = "<?php print $this->category->category_link;?>"><img class="category_img" src="<?php print $this->image_category_path;?>/<?php if ($this->category->category_image) print $this->category->category_image; else print $this->noimage;?>" alt="<?php print htmlspecialchars($this->category->name)?>" title="<?php print htmlspecialchars($this->category->name)?>" /></a>
	</div>
	<h1><?php print $this->category->name?></h1>
	<?php print $this->category->description?>
<!--     
    <div class="jshop_list_category">
    <?php if (count($this->categories)) : ?>
        <div class = "jshop list_category">
            <?php foreach($this->categories as $k=>$category) : ?>
                <?php if ($k % $this->count_category_to_row == 0) : ?>
                    <div class = "row-fluid">
                <?php endif; ?>
                <div class = "span<?php echo (($this->count_category_to_row > 0) ? 12 / $this->count_category_to_row : '1'); ?> jshop_categ category">
                    <div class = "span<?php echo 12 - 12 / $this->count_category_to_row; ?> image">
                        <a href = "<?php print $category->category_link;?>"><img class="jshop_img" src="<?php print $this->image_category_path;?>/<?php if ($category->category_image) print $category->category_image; else print $this->noimage;?>" alt="<?php print htmlspecialchars($category->name)?>" title="<?php print htmlspecialchars($category->name)?>" /></a>
                    </div>
                    <div class = "span<?php echo 12 / $this->count_category_to_row; ?>">
                       <a class = "product_link" href = "<?php print $category->category_link?>"><?php print $category->name?></a>
                       <p class = "category_short_description"><?php print $category->short_description?></p>
                    </div>
                </div>
                <?php if ($k % $this->count_category_to_row == $this->count_category_to_row - 1) : ?>
                    <div class = "clearfix"></div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
            <?php if ($k % $this->count_category_to_row != $this->count_category_to_row - 1) : ?>
                <div class = "clearfix"></div>
                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>
    </div>
-->
    <?php include(dirname(__FILE__)."/products.php");?>
</div>