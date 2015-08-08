<?php
class FluidCache_Standalone_Post_action_list_f4208844fbd30651672afb2d2dc0adc6bff48d1f extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
				<span class="record__list-controls">
					';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper
$arguments1 = array();
$arguments1['partial'] = 'Records/Controls.html';
// Rendering Array
$array2 = array();
$array2['controller'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'settings.controller', $renderingContext);
$array2['action'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'settings.action', $renderingContext);
$array2['id'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.id', $renderingContext);
$arguments1['arguments'] = $array2;
$arguments1['section'] = NULL;
$arguments1['optional'] = false;
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper4 = $self->getViewHelper('$viewHelper4', $renderingContext, 'TYPO3\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper4->setArguments($arguments1);
$viewHelper4->setRenderingContext($renderingContext);
$viewHelper4->setRenderChildrenClosure($renderChildrenClosure3);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper

$output0 .= $viewHelper4->initializeArgumentsAndRender();

$output0 .= '
				</span>
			</li>
			';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments5 = array();
$arguments5['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'posts', $renderingContext);
$arguments5['as'] = 'post';
$arguments5['key'] = '';
$arguments5['reverse'] = false;
$arguments5['iteration'] = NULL;
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$output7 = '';

$output7 .= '
				<li>
					<span class="record__list-id">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments8 = array();
$arguments8['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.id', $renderingContext);
$arguments8['keepQuotes'] = false;
$arguments8['encoding'] = 'UTF-8';
$arguments8['doubleEncode'] = true;
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$value10 = ($arguments8['value'] !== NULL ? $arguments8['value'] : $renderChildrenClosure9());

$output7 .= (!is_string($value10) ? $value10 : htmlspecialchars($value10, ($arguments8['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments8['encoding'], $arguments8['doubleEncode']));

$output7 .= '</span>
					<span class="record__list-label">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments11 = array();
$arguments11['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.title', $renderingContext);
$arguments11['keepQuotes'] = false;
$arguments11['encoding'] = 'UTF-8';
$arguments11['doubleEncode'] = true;
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$value13 = ($arguments11['value'] !== NULL ? $arguments11['value'] : $renderChildrenClosure12());

$output7 .= (!is_string($value13) ? $value13 : htmlspecialchars($value13, ($arguments11['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments11['encoding'], $arguments11['doubleEncode']));

$output7 .= '</span>
					<span class="record__list-label">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments14 = array();
$arguments14['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.author', $renderingContext);
$arguments14['keepQuotes'] = false;
$arguments14['encoding'] = 'UTF-8';
$arguments14['doubleEncode'] = true;
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$value16 = ($arguments14['value'] !== NULL ? $arguments14['value'] : $renderChildrenClosure15());

$output7 .= (!is_string($value16) ? $value16 : htmlspecialchars($value16, ($arguments14['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments14['encoding'], $arguments14['doubleEncode']));

$output7 .= '</span>
					<span class="record__list-date">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments17 = array();
$arguments17['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.crdate', $renderingContext);
$arguments17['keepQuotes'] = false;
$arguments17['encoding'] = 'UTF-8';
$arguments17['doubleEncode'] = true;
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$value19 = ($arguments17['value'] !== NULL ? $arguments17['value'] : $renderChildrenClosure18());

$output7 .= (!is_string($value19) ? $value19 : htmlspecialchars($value19, ($arguments17['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments17['encoding'], $arguments17['doubleEncode']));

$output7 .= '</span>
					<span class="record__list-controls">
						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper
$arguments20 = array();
$arguments20['partial'] = 'Records/Controls.html';
// Rendering Array
$array21 = array();
$array21['controller'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'settings.controller', $renderingContext);
$array21['action'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'settings.action', $renderingContext);
$array21['id'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.id', $renderingContext);
$arguments20['arguments'] = $array21;
$arguments20['section'] = NULL;
$arguments20['optional'] = false;
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper23 = $self->getViewHelper('$viewHelper23', $renderingContext, 'TYPO3\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper23->setArguments($arguments20);
$viewHelper23->setRenderingContext($renderingContext);
$viewHelper23->setRenderChildrenClosure($renderChildrenClosure22);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper

$output7 .= $viewHelper23->initializeArgumentsAndRender();

$output7 .= '
					</span>
				</li>
			';
return $output7;
};

$output0 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

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
$output24 = '';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper
$arguments25 = array();
$arguments25['name'] = 'Backend';
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper27 = $self->getViewHelper('$viewHelper27', $renderingContext, 'TYPO3\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper27->setArguments($arguments25);
$viewHelper27->setRenderingContext($renderingContext);
$viewHelper27->setRenderChildrenClosure($renderChildrenClosure26);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper

$output24 .= $viewHelper27->initializeArgumentsAndRender();

$output24 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments28 = array();
$arguments28['name'] = 'main';
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
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
				<span class="record__list-controls">
					';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper
$arguments31 = array();
$arguments31['partial'] = 'Records/Controls.html';
// Rendering Array
$array32 = array();
$array32['controller'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'settings.controller', $renderingContext);
$array32['action'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'settings.action', $renderingContext);
$array32['id'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.id', $renderingContext);
$arguments31['arguments'] = $array32;
$arguments31['section'] = NULL;
$arguments31['optional'] = false;
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper34 = $self->getViewHelper('$viewHelper34', $renderingContext, 'TYPO3\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper34->setArguments($arguments31);
$viewHelper34->setRenderingContext($renderingContext);
$viewHelper34->setRenderChildrenClosure($renderChildrenClosure33);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper

$output30 .= $viewHelper34->initializeArgumentsAndRender();

$output30 .= '
				</span>
			</li>
			';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments35 = array();
$arguments35['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'posts', $renderingContext);
$arguments35['as'] = 'post';
$arguments35['key'] = '';
$arguments35['reverse'] = false;
$arguments35['iteration'] = NULL;
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$output37 = '';

$output37 .= '
				<li>
					<span class="record__list-id">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments38 = array();
$arguments38['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.id', $renderingContext);
$arguments38['keepQuotes'] = false;
$arguments38['encoding'] = 'UTF-8';
$arguments38['doubleEncode'] = true;
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$value40 = ($arguments38['value'] !== NULL ? $arguments38['value'] : $renderChildrenClosure39());

$output37 .= (!is_string($value40) ? $value40 : htmlspecialchars($value40, ($arguments38['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments38['encoding'], $arguments38['doubleEncode']));

$output37 .= '</span>
					<span class="record__list-label">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments41 = array();
$arguments41['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.title', $renderingContext);
$arguments41['keepQuotes'] = false;
$arguments41['encoding'] = 'UTF-8';
$arguments41['doubleEncode'] = true;
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return NULL;
};
$value43 = ($arguments41['value'] !== NULL ? $arguments41['value'] : $renderChildrenClosure42());

$output37 .= (!is_string($value43) ? $value43 : htmlspecialchars($value43, ($arguments41['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments41['encoding'], $arguments41['doubleEncode']));

$output37 .= '</span>
					<span class="record__list-label">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments44 = array();
$arguments44['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.author', $renderingContext);
$arguments44['keepQuotes'] = false;
$arguments44['encoding'] = 'UTF-8';
$arguments44['doubleEncode'] = true;
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$value46 = ($arguments44['value'] !== NULL ? $arguments44['value'] : $renderChildrenClosure45());

$output37 .= (!is_string($value46) ? $value46 : htmlspecialchars($value46, ($arguments44['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments44['encoding'], $arguments44['doubleEncode']));

$output37 .= '</span>
					<span class="record__list-date">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments47 = array();
$arguments47['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.crdate', $renderingContext);
$arguments47['keepQuotes'] = false;
$arguments47['encoding'] = 'UTF-8';
$arguments47['doubleEncode'] = true;
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$value49 = ($arguments47['value'] !== NULL ? $arguments47['value'] : $renderChildrenClosure48());

$output37 .= (!is_string($value49) ? $value49 : htmlspecialchars($value49, ($arguments47['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments47['encoding'], $arguments47['doubleEncode']));

$output37 .= '</span>
					<span class="record__list-controls">
						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper
$arguments50 = array();
$arguments50['partial'] = 'Records/Controls.html';
// Rendering Array
$array51 = array();
$array51['controller'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'settings.controller', $renderingContext);
$array51['action'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'settings.action', $renderingContext);
$array51['id'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.id', $renderingContext);
$arguments50['arguments'] = $array51;
$arguments50['section'] = NULL;
$arguments50['optional'] = false;
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper53 = $self->getViewHelper('$viewHelper53', $renderingContext, 'TYPO3\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper53->setArguments($arguments50);
$viewHelper53->setRenderingContext($renderingContext);
$viewHelper53->setRenderChildrenClosure($renderChildrenClosure52);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper

$output37 .= $viewHelper53->initializeArgumentsAndRender();

$output37 .= '
					</span>
				</li>
			';
return $output37;
};

$output30 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output30 .= '
		</ul>
	</div>
</div>
';
return $output30;
};

$output24 .= '';

$output24 .= '
';

return $output24;
}


}
#1438961047    16170     