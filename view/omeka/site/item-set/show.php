<?php $escape = $this->plugin('escapeHtml');?>
<?php $this->htmlElement('body')->appendAttribute('class', 'item-set resource browse'); ?>

<?php echo $this->pageTitle($this->translate('Item sets'), 2); ?>
HI
<?php echo $this->searchFilters(); ?>
<?php echo $this->hyperlink($this->translate('Advanced search'), $this->url(null, ['action' => 'search'], true), ['class' => 'advanced-search']); ?>
<?php echo $this->pagination(); ?>
<?php $this->trigger('view.browse.before'); ?>
<ul class="resource-list">
    <?php foreach ($itemSets as $itemSet): ?>
    <li class="item-set resource">
        <?php echo $itemSet->linkRaw($this->thumbnail($itemSet, 'medium')); ?>
        <h4><?php echo $itemSet->link($itemSet->displayTitle()); ?></h4>
        <?php if ($description = $itemSet->displayDescription()): ?>
        <div class="description"><?php echo $description; ?></div>
        <?php endif; ?>
    </li>
    <?php endforeach; ?>
</ul>
<?php $this->trigger('view.browse.after'); ?>
<?php echo $this->pagination(); ?>
