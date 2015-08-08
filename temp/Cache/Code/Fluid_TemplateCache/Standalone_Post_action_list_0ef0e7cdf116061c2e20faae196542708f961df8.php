<?php
class FluidCache_Standalone_Post_action_list_0ef0e7cdf116061c2e20faae196542708f961df8 extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// TODO
	return new \TYPO3\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {

return 'Backend';
}
public function hasLayout() {
return TRUE;
}

/**
 * section main
 */
public function section_b28b7af69320201d1cf206ebf28373980add1451(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
<div class="content__container">
	<h1>BLOG posts</h1>
	<div class="dashboard__module">
		<h2>List</h2>
		<ul class="record__list">
			<li class="record__list-header">
				<span class="record__list-id">ID</span>
				<span class="record__list-label">Title</span>
				<span class="record__list-label">Author</span>
				<span class="record__list-date">Date/Time</span>
				<span class="record__list-date">Modified</span>
				<span class="record__list-controls">Controls</span>
			</li>
			';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments1 = array();
$arguments1['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'posts', $renderingContext);
$arguments1['as'] = 'post';
$arguments1['key'] = '';
$arguments1['reverse'] = false;
$arguments1['iteration'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
				<li>
					<span class="record__list-id">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments4 = array();
$arguments4['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.id', $renderingContext);
$arguments4['keepQuotes'] = false;
$arguments4['encoding'] = 'UTF-8';
$arguments4['doubleEncode'] = true;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$value6 = ($arguments4['value'] !== NULL ? $arguments4['value'] : $renderChildrenClosure5());

$output3 .= (!is_string($value6) ? $value6 : htmlspecialchars($value6, ($arguments4['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments4['encoding'], $arguments4['doubleEncode']));

$output3 .= '</span>
					<span class="record__list-label">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments7 = array();
$arguments7['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.title', $renderingContext);
$arguments7['keepQuotes'] = false;
$arguments7['encoding'] = 'UTF-8';
$arguments7['doubleEncode'] = true;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$value9 = ($arguments7['value'] !== NULL ? $arguments7['value'] : $renderChildrenClosure8());

$output3 .= (!is_string($value9) ? $value9 : htmlspecialchars($value9, ($arguments7['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments7['encoding'], $arguments7['doubleEncode']));

$output3 .= '</span>
					<span class="record__list-label">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments10 = array();
$arguments10['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.author', $renderingContext);
$arguments10['keepQuotes'] = false;
$arguments10['encoding'] = 'UTF-8';
$arguments10['doubleEncode'] = true;
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$value12 = ($arguments10['value'] !== NULL ? $arguments10['value'] : $renderChildrenClosure11());

$output3 .= (!is_string($value12) ? $value12 : htmlspecialchars($value12, ($arguments10['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments10['encoding'], $arguments10['doubleEncode']));

$output3 .= '</span>
					<span class="record__list-date">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper
$arguments13 = array();
$arguments13['format'] = 'd.m.Y H:i';
$arguments13['date'] = NULL;
$arguments13['forceLocale'] = NULL;
$arguments13['localeFormatType'] = NULL;
$arguments13['localeFormatLength'] = NULL;
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.crdate', $renderingContext);
};
$viewHelper15 = $self->getViewHelper('$viewHelper15', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Format\DateViewHelper');
$viewHelper15->setArguments($arguments13);
$viewHelper15->setRenderingContext($renderingContext);
$viewHelper15->setRenderChildrenClosure($renderChildrenClosure14);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper

$output3 .= $viewHelper15->initializeArgumentsAndRender();

$output3 .= '</span>
					<span class="record__list-modified">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper
$arguments16 = array();
$arguments16['format'] = 'd.m.Y H:i';
$arguments16['date'] = NULL;
$arguments16['forceLocale'] = NULL;
$arguments16['localeFormatType'] = NULL;
$arguments16['localeFormatLength'] = NULL;
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.modified', $renderingContext);
};
$viewHelper18 = $self->getViewHelper('$viewHelper18', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Format\DateViewHelper');
$viewHelper18->setArguments($arguments16);
$viewHelper18->setRenderingContext($renderingContext);
$viewHelper18->setRenderChildrenClosure($renderChildrenClosure17);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper

$output3 .= $viewHelper18->initializeArgumentsAndRender();

$output3 .= '</span>
					<span class="record__list-controls">
						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper
$arguments19 = array();
$arguments19['partial'] = 'Records/Controls.html';
// Rendering Array
$array20 = array();
$array20['controller'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'settings.controller', $renderingContext);
$array20['action'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'settings.action', $renderingContext);
$array20['id'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.id', $renderingContext);
$arguments19['arguments'] = $array20;
$arguments19['section'] = NULL;
$arguments19['optional'] = false;
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper22 = $self->getViewHelper('$viewHelper22', $renderingContext, 'TYPO3\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper22->setArguments($arguments19);
$viewHelper22->setRenderingContext($renderingContext);
$viewHelper22->setRenderChildrenClosure($renderChildrenClosure21);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper

$output3 .= $viewHelper22->initializeArgumentsAndRender();

$output3 .= '
					</span>
				</li>
			';
return $output3;
};

$output0 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
		</ul>
	</div>
</div>
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output23 = '';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper
$arguments24 = array();
$arguments24['name'] = 'Backend';
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper26 = $self->getViewHelper('$viewHelper26', $renderingContext, 'TYPO3\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper26->setArguments($arguments24);
$viewHelper26->setRenderingContext($renderingContext);
$viewHelper26->setRenderChildrenClosure($renderChildrenClosure25);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper

$output23 .= $viewHelper26->initializeArgumentsAndRender();

$output23 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments27 = array();
$arguments27['name'] = 'main';
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$output29 = '';

$output29 .= '
<div class="content__container">
	<h1>BLOG posts</h1>
	<div class="dashboard__module">
		<h2>List</h2>
		<ul class="record__list">
			<li class="record__list-header">
				<span class="record__list-id">ID</span>
				<span class="record__list-label">Title</span>
				<span class="record__list-label">Author</span>
				<span class="record__list-date">Date/Time</span>
				<span class="record__list-date">Modified</span>
				<span class="record__list-controls">Controls</span>
			</li>
			';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments30 = array();
$arguments30['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'posts', $renderingContext);
$arguments30['as'] = 'post';
$arguments30['key'] = '';
$arguments30['reverse'] = false;
$arguments30['iteration'] = NULL;
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
				<li>
					<span class="record__list-id">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments33 = array();
$arguments33['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.id', $renderingContext);
$arguments33['keepQuotes'] = false;
$arguments33['encoding'] = 'UTF-8';
$arguments33['doubleEncode'] = true;
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$value35 = ($arguments33['value'] !== NULL ? $arguments33['value'] : $renderChildrenClosure34());

$output32 .= (!is_string($value35) ? $value35 : htmlspecialchars($value35, ($arguments33['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments33['encoding'], $arguments33['doubleEncode']));

$output32 .= '</span>
					<span class="record__list-label">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments36 = array();
$arguments36['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.title', $renderingContext);
$arguments36['keepQuotes'] = false;
$arguments36['encoding'] = 'UTF-8';
$arguments36['doubleEncode'] = true;
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return NULL;
};
$value38 = ($arguments36['value'] !== NULL ? $arguments36['value'] : $renderChildrenClosure37());

$output32 .= (!is_string($value38) ? $value38 : htmlspecialchars($value38, ($arguments36['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments36['encoding'], $arguments36['doubleEncode']));

$output32 .= '</span>
					<span class="record__list-label">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments39 = array();
$arguments39['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.author', $renderingContext);
$arguments39['keepQuotes'] = false;
$arguments39['encoding'] = 'UTF-8';
$arguments39['doubleEncode'] = true;
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$value41 = ($arguments39['value'] !== NULL ? $arguments39['value'] : $renderChildrenClosure40());

$output32 .= (!is_string($value41) ? $value41 : htmlspecialchars($value41, ($arguments39['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments39['encoding'], $arguments39['doubleEncode']));

$output32 .= '</span>
					<span class="record__list-date">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper
$arguments42 = array();
$arguments42['format'] = 'd.m.Y H:i';
$arguments42['date'] = NULL;
$arguments42['forceLocale'] = NULL;
$arguments42['localeFormatType'] = NULL;
$arguments42['localeFormatLength'] = NULL;
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.crdate', $renderingContext);
};
$viewHelper44 = $self->getViewHelper('$viewHelper44', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Format\DateViewHelper');
$viewHelper44->setArguments($arguments42);
$viewHelper44->setRenderingContext($renderingContext);
$viewHelper44->setRenderChildrenClosure($renderChildrenClosure43);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper

$output32 .= $viewHelper44->initializeArgumentsAndRender();

$output32 .= '</span>
					<span class="record__list-modified">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper
$arguments45 = array();
$arguments45['format'] = 'd.m.Y H:i';
$arguments45['date'] = NULL;
$arguments45['forceLocale'] = NULL;
$arguments45['localeFormatType'] = NULL;
$arguments45['localeFormatLength'] = NULL;
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.modified', $renderingContext);
};
$viewHelper47 = $self->getViewHelper('$viewHelper47', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Format\DateViewHelper');
$viewHelper47->setArguments($arguments45);
$viewHelper47->setRenderingContext($renderingContext);
$viewHelper47->setRenderChildrenClosure($renderChildrenClosure46);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper

$output32 .= $viewHelper47->initializeArgumentsAndRender();

$output32 .= '</span>
					<span class="record__list-controls">
						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper
$arguments48 = array();
$arguments48['partial'] = 'Records/Controls.html';
// Rendering Array
$array49 = array();
$array49['controller'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'settings.controller', $renderingContext);
$array49['action'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'settings.action', $renderingContext);
$array49['id'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.id', $renderingContext);
$arguments48['arguments'] = $array49;
$arguments48['section'] = NULL;
$arguments48['optional'] = false;
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper51 = $self->getViewHelper('$viewHelper51', $renderingContext, 'TYPO3\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper51->setArguments($arguments48);
$viewHelper51->setRenderingContext($renderingContext);
$viewHelper51->setRenderChildrenClosure($renderChildrenClosure50);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper

$output32 .= $viewHelper51->initializeArgumentsAndRender();

$output32 .= '
					</span>
				</li>
			';
return $output32;
};

$output29 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output29 .= '
		</ul>
	</div>
</div>
';
return $output29;
};

$output23 .= '';

$output23 .= '
';

return $output23;
}


}
#1439044651    15923     