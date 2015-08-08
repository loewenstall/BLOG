<?php
class FluidCache_Standalone_Backend_partial_Toolbar_1ed81b9d0ebe805cf044035e65e4e0fd345926f0 extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

return '<nav class="toolbar">
	<ul class="toolbar__group">
		<li>
			<a>Dashboard</a>
		</li>
		<li>
			<a>Posts</a>
			<ul class="toolbar__group-sub">
				<li><a>Overview</a></li>
				<li><a>New post</a></li>
				<li><a>Deleted posts</a></li>
			</ul>
		</li>
		<li>
			<a>Category</a>
			<ul class="toolbar__group-sub">
				<li><a>Overview</a></li>
				<li><a>New category</a></li>
			</ul>
		</li>
		<li>
			<a>Pages</a>
			<ul class="toolbar__group-sub">
				<li><a>Overview</a></li>
				<li><a>New page</a></li>
			</ul>
		</li>
		<li>
			<a>Plugins</a>
			<ul class="toolbar__group-sub">
				<li><a>Overview</a></li>
				<li><a>Install plugin</a></li>
			</ul>
		</li>
		<li>
			<a>Admin</a>
			<ul class="toolbar__group-sub">
				<li><a>Blog settings</a></li>
				<li><a>Themes</a></li>
			</ul>
		</li>
	</ul>
</nav>
';
}


}
#1438939171    1433      