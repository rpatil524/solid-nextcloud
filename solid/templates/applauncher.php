<?php
script('solid', 'script');
style('solid', 'style');
?>

<div id="app">
	<div id="app-navigation">
		<?php print_unescaped($this->inc('navigation/index')); ?>
		<?php print_unescaped($this->inc('settings/index')); ?>
	</div>

	<div id="app-content">
		<div id="app-content-wrapper" class="viewcontainer">
			<?php print_unescaped($this->inc('applauncher/index')); ?>
		</div>
	</div>
</div>

