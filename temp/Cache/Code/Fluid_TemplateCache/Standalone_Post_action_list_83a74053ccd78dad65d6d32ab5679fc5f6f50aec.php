<?php
class FluidCache_Standalone_Post_action_list_83a74053ccd78dad65d6d32ab5679fc5f6f50aec extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
				<li class="record';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments4 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments5 = array();
$arguments5['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'hidden', $renderingContext);
$arguments5['keepQuotes'] = false;
$arguments5['encoding'] = 'UTF-8';
$arguments5['doubleEncode'] = true;
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$value7 = ($arguments5['value'] !== NULL ? $arguments5['value'] : $renderChildrenClosure6());
$arguments4['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value7) ? $value7 : htmlspecialchars($value7, ($arguments5['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments5['encoding'], $arguments5['doubleEncode'])), 1);
$arguments4['then'] = ' record__list-hidden';
$arguments4['else'] = NULL;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper9 = $self->getViewHelper('$viewHelper9', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper9->setArguments($arguments4);
$viewHelper9->setRenderingContext($renderingContext);
$viewHelper9->setRenderChildrenClosure($renderChildrenClosure8);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output3 .= $viewHelper9->initializeArgumentsAndRender();

$output3 .= '">
					<span class="record__list-id">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments10 = array();
$arguments10['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.id', $renderingContext);
$arguments10['keepQuotes'] = false;
$arguments10['encoding'] = 'UTF-8';
$arguments10['doubleEncode'] = true;
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$value12 = ($arguments10['value'] !== NULL ? $arguments10['value'] : $renderChildrenClosure11());

$output3 .= (!is_string($value12) ? $value12 : htmlspecialchars($value12, ($arguments10['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments10['encoding'], $arguments10['doubleEncode']));

$output3 .= '</span>
					<span class="record__list-label">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments13 = array();
$arguments13['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.title', $renderingContext);
$arguments13['keepQuotes'] = false;
$arguments13['encoding'] = 'UTF-8';
$arguments13['doubleEncode'] = true;
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$value15 = ($arguments13['value'] !== NULL ? $arguments13['value'] : $renderChildrenClosure14());

$output3 .= (!is_string($value15) ? $value15 : htmlspecialchars($value15, ($arguments13['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments13['encoding'], $arguments13['doubleEncode']));

$output3 .= '</span>
					<span class="record__list-label">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments16 = array();
$arguments16['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.author', $renderingContext);
$arguments16['keepQuotes'] = false;
$arguments16['encoding'] = 'UTF-8';
$arguments16['doubleEncode'] = true;
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$value18 = ($arguments16['value'] !== NULL ? $arguments16['value'] : $renderChildrenClosure17());

$output3 .= (!is_string($value18) ? $value18 : htmlspecialchars($value18, ($arguments16['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments16['encoding'], $arguments16['doubleEncode']));

$output3 .= '</span>
					<span class="record__list-date">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper
$arguments19 = array();
$arguments19['format'] = 'd.m.Y H:i';
$arguments19['date'] = NULL;
$arguments19['forceLocale'] = NULL;
$arguments19['localeFormatType'] = NULL;
$arguments19['localeFormatLength'] = NULL;
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.crdate', $renderingContext);
};
$viewHelper21 = $self->getViewHelper('$viewHelper21', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Format\DateViewHelper');
$viewHelper21->setArguments($arguments19);
$viewHelper21->setRenderingContext($renderingContext);
$viewHelper21->setRenderChildrenClosure($renderChildrenClosure20);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper

$output3 .= $viewHelper21->initializeArgumentsAndRender();

$output3 .= '</span>
					<span class="record__list-modified">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper
$arguments22 = array();
$arguments22['format'] = 'd.m.Y H:i';
$arguments22['date'] = NULL;
$arguments22['forceLocale'] = NULL;
$arguments22['localeFormatType'] = NULL;
$arguments22['localeFormatLength'] = NULL;
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.modified', $renderingContext);
};
$viewHelper24 = $self->getViewHelper('$viewHelper24', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Format\DateViewHelper');
$viewHelper24->setArguments($arguments22);
$viewHelper24->setRenderingContext($renderingContext);
$viewHelper24->setRenderChildrenClosure($renderChildrenClosure23);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper

$output3 .= $viewHelper24->initializeArgumentsAndRender();

$output3 .= '</span>
					<span class="record__list-controls">
						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper
$arguments25 = array();
$arguments25['partial'] = 'Records/Controls.html';
// Rendering Array
$array26 = array();
$array26['controller'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'settings.controller', $renderingContext);
$array26['action'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'settings.action', $renderingContext);
$array26['id'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.id', $renderingContext);
$array26['hidden'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.hidden', $renderingContext);
$arguments25['arguments'] = $array26;
$arguments25['section'] = NULL;
$arguments25['optional'] = false;
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper28 = $self->getViewHelper('$viewHelper28', $renderingContext, 'TYPO3\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper28->setArguments($arguments25);
$viewHelper28->setRenderingContext($renderingContext);
$viewHelper28->setRenderChildrenClosure($renderChildrenClosure27);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper

$output3 .= $viewHelper28->initializeArgumentsAndRender();

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
$output29 = '';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper
$arguments30 = array();
$arguments30['name'] = 'Backend';
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper32 = $self->getViewHelper('$viewHelper32', $renderingContext, 'TYPO3\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper32->setArguments($arguments30);
$viewHelper32->setRenderingContext($renderingContext);
$viewHelper32->setRenderChildrenClosure($renderChildrenClosure31);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper

$output29 .= $viewHelper32->initializeArgumentsAndRender();

$output29 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments33 = array();
$arguments33['name'] = 'main';
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$output35 = '';

$output35 .= '
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
$arguments36 = array();
$arguments36['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'posts', $renderingContext);
$arguments36['as'] = 'post';
$arguments36['key'] = '';
$arguments36['reverse'] = false;
$arguments36['iteration'] = NULL;
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
				<li class="record';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments39 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments40 = array();
$arguments40['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'hidden', $renderingContext);
$arguments40['keepQuotes'] = false;
$arguments40['encoding'] = 'UTF-8';
$arguments40['doubleEncode'] = true;
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$value42 = ($arguments40['value'] !== NULL ? $arguments40['value'] : $renderChildrenClosure41());
$arguments39['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value42) ? $value42 : htmlspecialchars($value42, ($arguments40['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments40['encoding'], $arguments40['doubleEncode'])), 1);
$arguments39['then'] = ' record__list-hidden';
$arguments39['else'] = NULL;
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper44 = $self->getViewHelper('$viewHelper44', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper44->setArguments($arguments39);
$viewHelper44->setRenderingContext($renderingContext);
$viewHelper44->setRenderChildrenClosure($renderChildrenClosure43);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output38 .= $viewHelper44->initializeArgumentsAndRender();

$output38 .= '">
					<span class="record__list-id">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments45 = array();
$arguments45['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.id', $renderingContext);
$arguments45['keepQuotes'] = false;
$arguments45['encoding'] = 'UTF-8';
$arguments45['doubleEncode'] = true;
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$value47 = ($arguments45['value'] !== NULL ? $arguments45['value'] : $renderChildrenClosure46());

$output38 .= (!is_string($value47) ? $value47 : htmlspecialchars($value47, ($arguments45['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments45['encoding'], $arguments45['doubleEncode']));

$output38 .= '</span>
					<span class="record__list-label">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments48 = array();
$arguments48['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.title', $renderingContext);
$arguments48['keepQuotes'] = false;
$arguments48['encoding'] = 'UTF-8';
$arguments48['doubleEncode'] = true;
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return NULL;
};
$value50 = ($arguments48['value'] !== NULL ? $arguments48['value'] : $renderChildrenClosure49());

$output38 .= (!is_string($value50) ? $value50 : htmlspecialchars($value50, ($arguments48['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments48['encoding'], $arguments48['doubleEncode']));

$output38 .= '</span>
					<span class="record__list-label">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments51 = array();
$arguments51['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.author', $renderingContext);
$arguments51['keepQuotes'] = false;
$arguments51['encoding'] = 'UTF-8';
$arguments51['doubleEncode'] = true;
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$value53 = ($arguments51['value'] !== NULL ? $arguments51['value'] : $renderChildrenClosure52());

$output38 .= (!is_string($value53) ? $value53 : htmlspecialchars($value53, ($arguments51['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments51['encoding'], $arguments51['doubleEncode']));

$output38 .= '</span>
					<span class="record__list-date">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper
$arguments54 = array();
$arguments54['format'] = 'd.m.Y H:i';
$arguments54['date'] = NULL;
$arguments54['forceLocale'] = NULL;
$arguments54['localeFormatType'] = NULL;
$arguments54['localeFormatLength'] = NULL;
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.crdate', $renderingContext);
};
$viewHelper56 = $self->getViewHelper('$viewHelper56', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Format\DateViewHelper');
$viewHelper56->setArguments($arguments54);
$viewHelper56->setRenderingContext($renderingContext);
$viewHelper56->setRenderChildrenClosure($renderChildrenClosure55);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper

$output38 .= $viewHelper56->initializeArgumentsAndRender();

$output38 .= '</span>
					<span class="record__list-modified">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper
$arguments57 = array();
$arguments57['format'] = 'd.m.Y H:i';
$arguments57['date'] = NULL;
$arguments57['forceLocale'] = NULL;
$arguments57['localeFormatType'] = NULL;
$arguments57['localeFormatLength'] = NULL;
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.modified', $renderingContext);
};
$viewHelper59 = $self->getViewHelper('$viewHelper59', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Format\DateViewHelper');
$viewHelper59->setArguments($arguments57);
$viewHelper59->setRenderingContext($renderingContext);
$viewHelper59->setRenderChildrenClosure($renderChildrenClosure58);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper

$output38 .= $viewHelper59->initializeArgumentsAndRender();

$output38 .= '</span>
					<span class="record__list-controls">
						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper
$arguments60 = array();
$arguments60['partial'] = 'Records/Controls.html';
// Rendering Array
$array61 = array();
$array61['controller'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'settings.controller', $renderingContext);
$array61['action'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'settings.action', $renderingContext);
$array61['id'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.id', $renderingContext);
$array61['hidden'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.hidden', $renderingContext);
$arguments60['arguments'] = $array61;
$arguments60['section'] = NULL;
$arguments60['optional'] = false;
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper63 = $self->getViewHelper('$viewHelper63', $renderingContext, 'TYPO3\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper63->setArguments($arguments60);
$viewHelper63->setRenderingContext($renderingContext);
$viewHelper63->setRenderChildrenClosure($renderChildrenClosure62);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper

$output38 .= $viewHelper63->initializeArgumentsAndRender();

$output38 .= '
					</span>
				</li>
			';
return $output38;
};

$output35 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output35 .= '
		</ul>
	</div>
</div>
';
return $output35;
};

$output29 .= '';

$output29 .= '
';

return $output29;
}


}
#1439045123    19414     