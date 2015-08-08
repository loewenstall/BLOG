<?php
class FluidCache_Standalone_Backend_partial_Toolbar_ef430f9ef68768639f4d5f7905d1bebe661d7660 extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
				<li><a href="?controller=Post&action=list">Overview</a></li>
				<li><a href="?controller=Post&action=new">New post</a></li>
			</ul>
		</li>
		<li>
			<a>Category</a>
			<ul class="toolbar__group-sub">
				<li><a href="?controller=Category&action=list">Overview</a></li>
				<li><a href="?controller=Category&action=new">New category</a></li>
			</ul>
		</li>
		<li>
			<a>Pages</a>
			<ul class="toolbar__group-sub">
				<li><a href="?controller=Page&action=list">Overview</a></li>
				<li><a href="?controller=Page&action=new">New page</a></li>
			</ul>
		</li>
		<li>
			<a>Plugins</a>
			<ul class="toolbar__group-sub">
				<li><a href="?controller=Plugin&action=list">Overview</a></li>
				<li><a href="?controller=Plugin&action=install">Install plugin</a></li>
			</ul>
		</li>
		<li>
			<a>Admin</a>
			<ul class="toolbar__group-sub">
				<li><a href="?controller=Backend&action=settings">Blog settings</a></li>
				<li><a href="?controller=Theme&action=list">Themes</a></li>
			</ul>
		</li>
	</ul>
</nav>
';
}


}
#1438948103    1779      