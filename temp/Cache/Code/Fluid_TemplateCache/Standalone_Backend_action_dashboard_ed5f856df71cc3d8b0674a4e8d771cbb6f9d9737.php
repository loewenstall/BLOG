<?php
class FluidCache_Standalone_Backend_action_dashboard_ed5f856df71cc3d8b0674a4e8d771cbb6f9d9737 extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
	<h1>BLOG running V';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments1 = array();
$arguments1['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'version', $renderingContext);
$arguments1['keepQuotes'] = false;
$arguments1['encoding'] = 'UTF-8';
$arguments1['doubleEncode'] = true;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$value3 = ($arguments1['value'] !== NULL ? $arguments1['value'] : $renderChildrenClosure2());

$output0 .= (!is_string($value3) ? $value3 : htmlspecialchars($value3, ($arguments1['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments1['encoding'], $arguments1['doubleEncode']));

$output0 .= '</h1>
	<div class="dashboard__module">
		<h2>Posts</h2>
		<p>
			The database keeps ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments4 = array();
$arguments4['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'postCount', $renderingContext);
$arguments4['keepQuotes'] = false;
$arguments4['encoding'] = 'UTF-8';
$arguments4['doubleEncode'] = true;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$value6 = ($arguments4['value'] !== NULL ? $arguments4['value'] : $renderChildrenClosure5());

$output0 .= (!is_string($value6) ? $value6 : htmlspecialchars($value6, ($arguments4['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments4['encoding'], $arguments4['doubleEncode']));

$output0 .= ' posts.<br />
			- Public posts: ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments7 = array();
$arguments7['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'publicPostCount', $renderingContext);
$arguments7['keepQuotes'] = false;
$arguments7['encoding'] = 'UTF-8';
$arguments7['doubleEncode'] = true;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$value9 = ($arguments7['value'] !== NULL ? $arguments7['value'] : $renderChildrenClosure8());

$output0 .= (!is_string($value9) ? $value9 : htmlspecialchars($value9, ($arguments7['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments7['encoding'], $arguments7['doubleEncode']));

$output0 .= '<br />
			- Hidden posts: ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments10 = array();
$arguments10['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'hiddenPostCount', $renderingContext);
$arguments10['keepQuotes'] = false;
$arguments10['encoding'] = 'UTF-8';
$arguments10['doubleEncode'] = true;
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$value12 = ($arguments10['value'] !== NULL ? $arguments10['value'] : $renderChildrenClosure11());

$output0 .= (!is_string($value12) ? $value12 : htmlspecialchars($value12, ($arguments10['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments10['encoding'], $arguments10['doubleEncode']));

$output0 .= '
		</p>
		<h3>Latest post</h3>
		<p>
			';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper
$arguments13 = array();
$arguments13['format'] = 'd.m.Y';
$arguments13['date'] = NULL;
$arguments13['forceLocale'] = NULL;
$arguments13['localeFormatType'] = NULL;
$arguments13['localeFormatLength'] = NULL;
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestPost.crdate', $renderingContext);
};
$viewHelper15 = $self->getViewHelper('$viewHelper15', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Format\DateViewHelper');
$viewHelper15->setArguments($arguments13);
$viewHelper15->setRenderingContext($renderingContext);
$viewHelper15->setRenderChildrenClosure($renderChildrenClosure14);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper

$output0 .= $viewHelper15->initializeArgumentsAndRender();

$output0 .= ': ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments16 = array();
$arguments16['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestPost.title', $renderingContext);
$arguments16['keepQuotes'] = false;
$arguments16['encoding'] = 'UTF-8';
$arguments16['doubleEncode'] = true;
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$value18 = ($arguments16['value'] !== NULL ? $arguments16['value'] : $renderChildrenClosure17());

$output0 .= (!is_string($value18) ? $value18 : htmlspecialchars($value18, ($arguments16['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments16['encoding'], $arguments16['doubleEncode']));

$output0 .= '
		</p>
	</div>
	<div class="dashboard__module">
	<h2>Comments</h2>
		<p>
			The database keeps ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments19 = array();
$arguments19['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'commentCount', $renderingContext);
$arguments19['keepQuotes'] = false;
$arguments19['encoding'] = 'UTF-8';
$arguments19['doubleEncode'] = true;
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$value21 = ($arguments19['value'] !== NULL ? $arguments19['value'] : $renderChildrenClosure20());

$output0 .= (!is_string($value21) ? $value21 : htmlspecialchars($value21, ($arguments19['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments19['encoding'], $arguments19['doubleEncode']));

$output0 .= ' comments in ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments22 = array();
$arguments22['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'postCount', $renderingContext);
$arguments22['keepQuotes'] = false;
$arguments22['encoding'] = 'UTF-8';
$arguments22['doubleEncode'] = true;
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$value24 = ($arguments22['value'] !== NULL ? $arguments22['value'] : $renderChildrenClosure23());

$output0 .= (!is_string($value24) ? $value24 : htmlspecialchars($value24, ($arguments22['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments22['encoding'], $arguments22['doubleEncode']));

$output0 .= ' posts.<br />
		</p>
		<h3>Latest comment</h3>
	</div>
	<div class="dashboard__module">
		<h2>Trash</h2>
		<p>Trash keeps ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments25 = array();
$arguments25['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'trash', $renderingContext);
$arguments25['keepQuotes'] = false;
$arguments25['encoding'] = 'UTF-8';
$arguments25['doubleEncode'] = true;
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$value27 = ($arguments25['value'] !== NULL ? $arguments25['value'] : $renderChildrenClosure26());

$output0 .= (!is_string($value27) ? $value27 : htmlspecialchars($value27, ($arguments25['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments25['encoding'], $arguments25['doubleEncode']));

$output0 .= ' posts.</p>
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
$output28 = '';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper
$arguments29 = array();
$arguments29['name'] = 'Backend';
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper31 = $self->getViewHelper('$viewHelper31', $renderingContext, 'TYPO3\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper31->setArguments($arguments29);
$viewHelper31->setRenderingContext($renderingContext);
$viewHelper31->setRenderChildrenClosure($renderChildrenClosure30);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper

$output28 .= $viewHelper31->initializeArgumentsAndRender();

$output28 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments32 = array();
$arguments32['name'] = 'main';
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$output34 = '';

$output34 .= '
<div class="content__container">
	<h1>BLOG running V';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments35 = array();
$arguments35['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'version', $renderingContext);
$arguments35['keepQuotes'] = false;
$arguments35['encoding'] = 'UTF-8';
$arguments35['doubleEncode'] = true;
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$value37 = ($arguments35['value'] !== NULL ? $arguments35['value'] : $renderChildrenClosure36());

$output34 .= (!is_string($value37) ? $value37 : htmlspecialchars($value37, ($arguments35['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments35['encoding'], $arguments35['doubleEncode']));

$output34 .= '</h1>
	<div class="dashboard__module">
		<h2>Posts</h2>
		<p>
			The database keeps ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments38 = array();
$arguments38['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'postCount', $renderingContext);
$arguments38['keepQuotes'] = false;
$arguments38['encoding'] = 'UTF-8';
$arguments38['doubleEncode'] = true;
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$value40 = ($arguments38['value'] !== NULL ? $arguments38['value'] : $renderChildrenClosure39());

$output34 .= (!is_string($value40) ? $value40 : htmlspecialchars($value40, ($arguments38['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments38['encoding'], $arguments38['doubleEncode']));

$output34 .= ' posts.<br />
			- Public posts: ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments41 = array();
$arguments41['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'publicPostCount', $renderingContext);
$arguments41['keepQuotes'] = false;
$arguments41['encoding'] = 'UTF-8';
$arguments41['doubleEncode'] = true;
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return NULL;
};
$value43 = ($arguments41['value'] !== NULL ? $arguments41['value'] : $renderChildrenClosure42());

$output34 .= (!is_string($value43) ? $value43 : htmlspecialchars($value43, ($arguments41['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments41['encoding'], $arguments41['doubleEncode']));

$output34 .= '<br />
			- Hidden posts: ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments44 = array();
$arguments44['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'hiddenPostCount', $renderingContext);
$arguments44['keepQuotes'] = false;
$arguments44['encoding'] = 'UTF-8';
$arguments44['doubleEncode'] = true;
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$value46 = ($arguments44['value'] !== NULL ? $arguments44['value'] : $renderChildrenClosure45());

$output34 .= (!is_string($value46) ? $value46 : htmlspecialchars($value46, ($arguments44['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments44['encoding'], $arguments44['doubleEncode']));

$output34 .= '
		</p>
		<h3>Latest post</h3>
		<p>
			';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper
$arguments47 = array();
$arguments47['format'] = 'd.m.Y';
$arguments47['date'] = NULL;
$arguments47['forceLocale'] = NULL;
$arguments47['localeFormatType'] = NULL;
$arguments47['localeFormatLength'] = NULL;
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestPost.crdate', $renderingContext);
};
$viewHelper49 = $self->getViewHelper('$viewHelper49', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Format\DateViewHelper');
$viewHelper49->setArguments($arguments47);
$viewHelper49->setRenderingContext($renderingContext);
$viewHelper49->setRenderChildrenClosure($renderChildrenClosure48);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper

$output34 .= $viewHelper49->initializeArgumentsAndRender();

$output34 .= ': ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments50 = array();
$arguments50['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestPost.title', $renderingContext);
$arguments50['keepQuotes'] = false;
$arguments50['encoding'] = 'UTF-8';
$arguments50['doubleEncode'] = true;
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return NULL;
};
$value52 = ($arguments50['value'] !== NULL ? $arguments50['value'] : $renderChildrenClosure51());

$output34 .= (!is_string($value52) ? $value52 : htmlspecialchars($value52, ($arguments50['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments50['encoding'], $arguments50['doubleEncode']));

$output34 .= '
		</p>
	</div>
	<div class="dashboard__module">
	<h2>Comments</h2>
		<p>
			The database keeps ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments53 = array();
$arguments53['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'commentCount', $renderingContext);
$arguments53['keepQuotes'] = false;
$arguments53['encoding'] = 'UTF-8';
$arguments53['doubleEncode'] = true;
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return NULL;
};
$value55 = ($arguments53['value'] !== NULL ? $arguments53['value'] : $renderChildrenClosure54());

$output34 .= (!is_string($value55) ? $value55 : htmlspecialchars($value55, ($arguments53['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments53['encoding'], $arguments53['doubleEncode']));

$output34 .= ' comments in ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments56 = array();
$arguments56['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'postCount', $renderingContext);
$arguments56['keepQuotes'] = false;
$arguments56['encoding'] = 'UTF-8';
$arguments56['doubleEncode'] = true;
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$value58 = ($arguments56['value'] !== NULL ? $arguments56['value'] : $renderChildrenClosure57());

$output34 .= (!is_string($value58) ? $value58 : htmlspecialchars($value58, ($arguments56['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments56['encoding'], $arguments56['doubleEncode']));

$output34 .= ' posts.<br />
		</p>
		<h3>Latest comment</h3>
	</div>
	<div class="dashboard__module">
		<h2>Trash</h2>
		<p>Trash keeps ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments59 = array();
$arguments59['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'trash', $renderingContext);
$arguments59['keepQuotes'] = false;
$arguments59['encoding'] = 'UTF-8';
$arguments59['doubleEncode'] = true;
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return NULL;
};
$value61 = ($arguments59['value'] !== NULL ? $arguments59['value'] : $renderChildrenClosure60());

$output34 .= (!is_string($value61) ? $value61 : htmlspecialchars($value61, ($arguments59['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments59['encoding'], $arguments59['doubleEncode']));

$output34 .= ' posts.</p>
	</div>
</div>
';
return $output34;
};

$output28 .= '';

$output28 .= '
';

return $output28;
}


}
#1439044515    17305     