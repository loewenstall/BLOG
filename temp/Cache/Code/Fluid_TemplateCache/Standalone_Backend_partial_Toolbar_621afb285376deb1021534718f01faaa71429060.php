<?php
class FluidCache_Standalone_Backend_partial_Toolbar_621afb285376deb1021534718f01faaa71429060 extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// TODO
	return new \TYPO3\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {

return NULL;
}
public function hasLayout() {
return FALSE;
}

/**
 * Main Render function
 */
public function render(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return '<nav class="toolbar__nav">
		<li>
			<a>Cache</a>
			<ul>
				<li><a href="#" data-module="cache" data-type="fe">Clear frontend cache</a></li>
				<li><a href="#" data-module="cache" data-type="syslog">Clear syslog</a></li>
				<li><a href="#" data-module="cache" data-type="all">Clear all caches</a></li>
			</ul>
		</li>
		<li>
			<a>Dashboard</a>
		</li>
		<li>
			<a>Posts</a>
			<ul>
				<li><a>Overview</a></li>
				<li><a>New post</a></li>
				<li><a>Deleted posts</a></li>
			</ul>
		</li>
		<li>
			<a>Category</a>
			<ul>
				<li><a>Overview</a></li>
				<li><a>New category</a></li>
			</ul>
		</li>
		<li>
			<a>Pages</a>
			<ul>
				<li><a>Overview</a></li>
				<li><a>New page</a></li>
			</ul>
		</li>
		<li>
			<a>Plugins</a>
			<ul>
				<li><a>Overview</a></li>
				<li><a>Install plugin</a></li>
			</ul>
		</li>
		<li>
			<a>Admin</a>
			<ul>
				<li><a>Blog settings</a></li>
				<li><a>Themes</a></li>
			</ul>
		</li>
	</nav>
';
}


}
#1438937182    1564      