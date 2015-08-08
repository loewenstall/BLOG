<?php
class FluidCache_Standalone_Backend_action_dashboard_6484f1091db6675979244c4d18a3909803c0abfe extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
		<p>
			';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments25 = array();
// Rendering Boolean node
$arguments25['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestComment', $renderingContext));
$arguments25['then'] = NULL;
$arguments25['else'] = NULL;
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper
$arguments28 = array();
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
					';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper
$arguments31 = array();
$arguments31['format'] = 'd.m.Y';
$arguments31['date'] = NULL;
$arguments31['forceLocale'] = NULL;
$arguments31['localeFormatType'] = NULL;
$arguments31['localeFormatLength'] = NULL;
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestComment.crdate', $renderingContext);
};
$viewHelper33 = $self->getViewHelper('$viewHelper33', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Format\DateViewHelper');
$viewHelper33->setArguments($arguments31);
$viewHelper33->setRenderingContext($renderingContext);
$viewHelper33->setRenderChildrenClosure($renderChildrenClosure32);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper

$output30 .= $viewHelper33->initializeArgumentsAndRender();

$output30 .= ': ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments34 = array();
$arguments34['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestComment.title', $renderingContext);
$arguments34['keepQuotes'] = false;
$arguments34['encoding'] = 'UTF-8';
$arguments34['doubleEncode'] = true;
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$value36 = ($arguments34['value'] !== NULL ? $arguments34['value'] : $renderChildrenClosure35());

$output30 .= (!is_string($value36) ? $value36 : htmlspecialchars($value36, ($arguments34['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments34['encoding'], $arguments34['doubleEncode']));

$output30 .= '
				';
return $output30;
};
$viewHelper37 = $self->getViewHelper('$viewHelper37', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper37->setArguments($arguments28);
$viewHelper37->setRenderingContext($renderingContext);
$viewHelper37->setRenderChildrenClosure($renderChildrenClosure29);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper

$output27 .= $viewHelper37->initializeArgumentsAndRender();

$output27 .= '
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper
$arguments38 = array();
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$output40 = '';

$output40 .= '
					';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper
$arguments41 = array();
$arguments41['format'] = 'd.m.Y';
$arguments41['date'] = NULL;
$arguments41['forceLocale'] = NULL;
$arguments41['localeFormatType'] = NULL;
$arguments41['localeFormatLength'] = NULL;
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestComment.crdate', $renderingContext);
};
$viewHelper43 = $self->getViewHelper('$viewHelper43', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Format\DateViewHelper');
$viewHelper43->setArguments($arguments41);
$viewHelper43->setRenderingContext($renderingContext);
$viewHelper43->setRenderChildrenClosure($renderChildrenClosure42);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper

$output40 .= $viewHelper43->initializeArgumentsAndRender();

$output40 .= ': ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments44 = array();
$arguments44['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestComment.title', $renderingContext);
$arguments44['keepQuotes'] = false;
$arguments44['encoding'] = 'UTF-8';
$arguments44['doubleEncode'] = true;
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$value46 = ($arguments44['value'] !== NULL ? $arguments44['value'] : $renderChildrenClosure45());

$output40 .= (!is_string($value46) ? $value46 : htmlspecialchars($value46, ($arguments44['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments44['encoding'], $arguments44['doubleEncode']));

$output40 .= '
				';
return $output40;
};
$viewHelper47 = $self->getViewHelper('$viewHelper47', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper47->setArguments($arguments38);
$viewHelper47->setRenderingContext($renderingContext);
$viewHelper47->setRenderChildrenClosure($renderChildrenClosure39);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper

$output27 .= $viewHelper47->initializeArgumentsAndRender();

$output27 .= '
			';
return $output27;
};
$arguments25['__thenClosure'] = function() use ($renderingContext, $self) {
$output48 = '';

$output48 .= '
					';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper
$arguments49 = array();
$arguments49['format'] = 'd.m.Y';
$arguments49['date'] = NULL;
$arguments49['forceLocale'] = NULL;
$arguments49['localeFormatType'] = NULL;
$arguments49['localeFormatLength'] = NULL;
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestComment.crdate', $renderingContext);
};
$viewHelper51 = $self->getViewHelper('$viewHelper51', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Format\DateViewHelper');
$viewHelper51->setArguments($arguments49);
$viewHelper51->setRenderingContext($renderingContext);
$viewHelper51->setRenderChildrenClosure($renderChildrenClosure50);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper

$output48 .= $viewHelper51->initializeArgumentsAndRender();

$output48 .= ': ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments52 = array();
$arguments52['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestComment.title', $renderingContext);
$arguments52['keepQuotes'] = false;
$arguments52['encoding'] = 'UTF-8';
$arguments52['doubleEncode'] = true;
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$value54 = ($arguments52['value'] !== NULL ? $arguments52['value'] : $renderChildrenClosure53());

$output48 .= (!is_string($value54) ? $value54 : htmlspecialchars($value54, ($arguments52['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments52['encoding'], $arguments52['doubleEncode']));

$output48 .= '
				';
return $output48;
};
$arguments25['__elseClosure'] = function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= '
					';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper
$arguments56 = array();
$arguments56['format'] = 'd.m.Y';
$arguments56['date'] = NULL;
$arguments56['forceLocale'] = NULL;
$arguments56['localeFormatType'] = NULL;
$arguments56['localeFormatLength'] = NULL;
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestComment.crdate', $renderingContext);
};
$viewHelper58 = $self->getViewHelper('$viewHelper58', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Format\DateViewHelper');
$viewHelper58->setArguments($arguments56);
$viewHelper58->setRenderingContext($renderingContext);
$viewHelper58->setRenderChildrenClosure($renderChildrenClosure57);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper

$output55 .= $viewHelper58->initializeArgumentsAndRender();

$output55 .= ': ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments59 = array();
$arguments59['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestComment.title', $renderingContext);
$arguments59['keepQuotes'] = false;
$arguments59['encoding'] = 'UTF-8';
$arguments59['doubleEncode'] = true;
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return NULL;
};
$value61 = ($arguments59['value'] !== NULL ? $arguments59['value'] : $renderChildrenClosure60());

$output55 .= (!is_string($value61) ? $value61 : htmlspecialchars($value61, ($arguments59['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments59['encoding'], $arguments59['doubleEncode']));

$output55 .= '
				';
return $output55;
};
$viewHelper62 = $self->getViewHelper('$viewHelper62', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper62->setArguments($arguments25);
$viewHelper62->setRenderingContext($renderingContext);
$viewHelper62->setRenderChildrenClosure($renderChildrenClosure26);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output0 .= $viewHelper62->initializeArgumentsAndRender();

$output0 .= '
		</p>
	</div>
	<div class="dashboard__module">
		<h2>Trash</h2>
		<p>Trash keeps ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments63 = array();
$arguments63['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'trash', $renderingContext);
$arguments63['keepQuotes'] = false;
$arguments63['encoding'] = 'UTF-8';
$arguments63['doubleEncode'] = true;
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
return NULL;
};
$value65 = ($arguments63['value'] !== NULL ? $arguments63['value'] : $renderChildrenClosure64());

$output0 .= (!is_string($value65) ? $value65 : htmlspecialchars($value65, ($arguments63['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments63['encoding'], $arguments63['doubleEncode']));

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
$output66 = '';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper
$arguments67 = array();
$arguments67['name'] = 'Backend';
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper69 = $self->getViewHelper('$viewHelper69', $renderingContext, 'TYPO3\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper69->setArguments($arguments67);
$viewHelper69->setRenderingContext($renderingContext);
$viewHelper69->setRenderChildrenClosure($renderChildrenClosure68);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper

$output66 .= $viewHelper69->initializeArgumentsAndRender();

$output66 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments70 = array();
$arguments70['name'] = 'main';
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$output72 = '';

$output72 .= '
<div class="content__container">
	<h1>BLOG running V';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments73 = array();
$arguments73['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'version', $renderingContext);
$arguments73['keepQuotes'] = false;
$arguments73['encoding'] = 'UTF-8';
$arguments73['doubleEncode'] = true;
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
return NULL;
};
$value75 = ($arguments73['value'] !== NULL ? $arguments73['value'] : $renderChildrenClosure74());

$output72 .= (!is_string($value75) ? $value75 : htmlspecialchars($value75, ($arguments73['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments73['encoding'], $arguments73['doubleEncode']));

$output72 .= '</h1>
	<div class="dashboard__module">
		<h2>Posts</h2>
		<p>
			The database keeps ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments76 = array();
$arguments76['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'postCount', $renderingContext);
$arguments76['keepQuotes'] = false;
$arguments76['encoding'] = 'UTF-8';
$arguments76['doubleEncode'] = true;
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
return NULL;
};
$value78 = ($arguments76['value'] !== NULL ? $arguments76['value'] : $renderChildrenClosure77());

$output72 .= (!is_string($value78) ? $value78 : htmlspecialchars($value78, ($arguments76['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments76['encoding'], $arguments76['doubleEncode']));

$output72 .= ' posts.<br />
			- Public posts: ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments79 = array();
$arguments79['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'publicPostCount', $renderingContext);
$arguments79['keepQuotes'] = false;
$arguments79['encoding'] = 'UTF-8';
$arguments79['doubleEncode'] = true;
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
return NULL;
};
$value81 = ($arguments79['value'] !== NULL ? $arguments79['value'] : $renderChildrenClosure80());

$output72 .= (!is_string($value81) ? $value81 : htmlspecialchars($value81, ($arguments79['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments79['encoding'], $arguments79['doubleEncode']));

$output72 .= '<br />
			- Hidden posts: ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments82 = array();
$arguments82['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'hiddenPostCount', $renderingContext);
$arguments82['keepQuotes'] = false;
$arguments82['encoding'] = 'UTF-8';
$arguments82['doubleEncode'] = true;
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return NULL;
};
$value84 = ($arguments82['value'] !== NULL ? $arguments82['value'] : $renderChildrenClosure83());

$output72 .= (!is_string($value84) ? $value84 : htmlspecialchars($value84, ($arguments82['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments82['encoding'], $arguments82['doubleEncode']));

$output72 .= '
		</p>
		<h3>Latest post</h3>
		<p>
			';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper
$arguments85 = array();
$arguments85['format'] = 'd.m.Y';
$arguments85['date'] = NULL;
$arguments85['forceLocale'] = NULL;
$arguments85['localeFormatType'] = NULL;
$arguments85['localeFormatLength'] = NULL;
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
return \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestPost.crdate', $renderingContext);
};
$viewHelper87 = $self->getViewHelper('$viewHelper87', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Format\DateViewHelper');
$viewHelper87->setArguments($arguments85);
$viewHelper87->setRenderingContext($renderingContext);
$viewHelper87->setRenderChildrenClosure($renderChildrenClosure86);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper

$output72 .= $viewHelper87->initializeArgumentsAndRender();

$output72 .= ': ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments88 = array();
$arguments88['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestPost.title', $renderingContext);
$arguments88['keepQuotes'] = false;
$arguments88['encoding'] = 'UTF-8';
$arguments88['doubleEncode'] = true;
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return NULL;
};
$value90 = ($arguments88['value'] !== NULL ? $arguments88['value'] : $renderChildrenClosure89());

$output72 .= (!is_string($value90) ? $value90 : htmlspecialchars($value90, ($arguments88['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments88['encoding'], $arguments88['doubleEncode']));

$output72 .= '
		</p>
	</div>
	<div class="dashboard__module">
	<h2>Comments</h2>
		<p>
			The database keeps ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments91 = array();
$arguments91['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'commentCount', $renderingContext);
$arguments91['keepQuotes'] = false;
$arguments91['encoding'] = 'UTF-8';
$arguments91['doubleEncode'] = true;
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
return NULL;
};
$value93 = ($arguments91['value'] !== NULL ? $arguments91['value'] : $renderChildrenClosure92());

$output72 .= (!is_string($value93) ? $value93 : htmlspecialchars($value93, ($arguments91['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments91['encoding'], $arguments91['doubleEncode']));

$output72 .= ' comments in ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments94 = array();
$arguments94['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'postCount', $renderingContext);
$arguments94['keepQuotes'] = false;
$arguments94['encoding'] = 'UTF-8';
$arguments94['doubleEncode'] = true;
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
return NULL;
};
$value96 = ($arguments94['value'] !== NULL ? $arguments94['value'] : $renderChildrenClosure95());

$output72 .= (!is_string($value96) ? $value96 : htmlspecialchars($value96, ($arguments94['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments94['encoding'], $arguments94['doubleEncode']));

$output72 .= ' posts.<br />
		</p>
		<h3>Latest comment</h3>
		<p>
			';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments97 = array();
// Rendering Boolean node
$arguments97['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestComment', $renderingContext));
$arguments97['then'] = NULL;
$arguments97['else'] = NULL;
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$output99 = '';

$output99 .= '
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper
$arguments100 = array();
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$output102 = '';

$output102 .= '
					';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper
$arguments103 = array();
$arguments103['format'] = 'd.m.Y';
$arguments103['date'] = NULL;
$arguments103['forceLocale'] = NULL;
$arguments103['localeFormatType'] = NULL;
$arguments103['localeFormatLength'] = NULL;
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
return \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestComment.crdate', $renderingContext);
};
$viewHelper105 = $self->getViewHelper('$viewHelper105', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Format\DateViewHelper');
$viewHelper105->setArguments($arguments103);
$viewHelper105->setRenderingContext($renderingContext);
$viewHelper105->setRenderChildrenClosure($renderChildrenClosure104);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper

$output102 .= $viewHelper105->initializeArgumentsAndRender();

$output102 .= ': ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments106 = array();
$arguments106['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestComment.title', $renderingContext);
$arguments106['keepQuotes'] = false;
$arguments106['encoding'] = 'UTF-8';
$arguments106['doubleEncode'] = true;
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
return NULL;
};
$value108 = ($arguments106['value'] !== NULL ? $arguments106['value'] : $renderChildrenClosure107());

$output102 .= (!is_string($value108) ? $value108 : htmlspecialchars($value108, ($arguments106['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments106['encoding'], $arguments106['doubleEncode']));

$output102 .= '
				';
return $output102;
};
$viewHelper109 = $self->getViewHelper('$viewHelper109', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper109->setArguments($arguments100);
$viewHelper109->setRenderingContext($renderingContext);
$viewHelper109->setRenderChildrenClosure($renderChildrenClosure101);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper

$output99 .= $viewHelper109->initializeArgumentsAndRender();

$output99 .= '
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper
$arguments110 = array();
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
$output112 = '';

$output112 .= '
					';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper
$arguments113 = array();
$arguments113['format'] = 'd.m.Y';
$arguments113['date'] = NULL;
$arguments113['forceLocale'] = NULL;
$arguments113['localeFormatType'] = NULL;
$arguments113['localeFormatLength'] = NULL;
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
return \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestComment.crdate', $renderingContext);
};
$viewHelper115 = $self->getViewHelper('$viewHelper115', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Format\DateViewHelper');
$viewHelper115->setArguments($arguments113);
$viewHelper115->setRenderingContext($renderingContext);
$viewHelper115->setRenderChildrenClosure($renderChildrenClosure114);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper

$output112 .= $viewHelper115->initializeArgumentsAndRender();

$output112 .= ': ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments116 = array();
$arguments116['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestComment.title', $renderingContext);
$arguments116['keepQuotes'] = false;
$arguments116['encoding'] = 'UTF-8';
$arguments116['doubleEncode'] = true;
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
return NULL;
};
$value118 = ($arguments116['value'] !== NULL ? $arguments116['value'] : $renderChildrenClosure117());

$output112 .= (!is_string($value118) ? $value118 : htmlspecialchars($value118, ($arguments116['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments116['encoding'], $arguments116['doubleEncode']));

$output112 .= '
				';
return $output112;
};
$viewHelper119 = $self->getViewHelper('$viewHelper119', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper119->setArguments($arguments110);
$viewHelper119->setRenderingContext($renderingContext);
$viewHelper119->setRenderChildrenClosure($renderChildrenClosure111);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper

$output99 .= $viewHelper119->initializeArgumentsAndRender();

$output99 .= '
			';
return $output99;
};
$arguments97['__thenClosure'] = function() use ($renderingContext, $self) {
$output120 = '';

$output120 .= '
					';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper
$arguments121 = array();
$arguments121['format'] = 'd.m.Y';
$arguments121['date'] = NULL;
$arguments121['forceLocale'] = NULL;
$arguments121['localeFormatType'] = NULL;
$arguments121['localeFormatLength'] = NULL;
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
return \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestComment.crdate', $renderingContext);
};
$viewHelper123 = $self->getViewHelper('$viewHelper123', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Format\DateViewHelper');
$viewHelper123->setArguments($arguments121);
$viewHelper123->setRenderingContext($renderingContext);
$viewHelper123->setRenderChildrenClosure($renderChildrenClosure122);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper

$output120 .= $viewHelper123->initializeArgumentsAndRender();

$output120 .= ': ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments124 = array();
$arguments124['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestComment.title', $renderingContext);
$arguments124['keepQuotes'] = false;
$arguments124['encoding'] = 'UTF-8';
$arguments124['doubleEncode'] = true;
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
return NULL;
};
$value126 = ($arguments124['value'] !== NULL ? $arguments124['value'] : $renderChildrenClosure125());

$output120 .= (!is_string($value126) ? $value126 : htmlspecialchars($value126, ($arguments124['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments124['encoding'], $arguments124['doubleEncode']));

$output120 .= '
				';
return $output120;
};
$arguments97['__elseClosure'] = function() use ($renderingContext, $self) {
$output127 = '';

$output127 .= '
					';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper
$arguments128 = array();
$arguments128['format'] = 'd.m.Y';
$arguments128['date'] = NULL;
$arguments128['forceLocale'] = NULL;
$arguments128['localeFormatType'] = NULL;
$arguments128['localeFormatLength'] = NULL;
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
return \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestComment.crdate', $renderingContext);
};
$viewHelper130 = $self->getViewHelper('$viewHelper130', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Format\DateViewHelper');
$viewHelper130->setArguments($arguments128);
$viewHelper130->setRenderingContext($renderingContext);
$viewHelper130->setRenderChildrenClosure($renderChildrenClosure129);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper

$output127 .= $viewHelper130->initializeArgumentsAndRender();

$output127 .= ': ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments131 = array();
$arguments131['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestComment.title', $renderingContext);
$arguments131['keepQuotes'] = false;
$arguments131['encoding'] = 'UTF-8';
$arguments131['doubleEncode'] = true;
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
return NULL;
};
$value133 = ($arguments131['value'] !== NULL ? $arguments131['value'] : $renderChildrenClosure132());

$output127 .= (!is_string($value133) ? $value133 : htmlspecialchars($value133, ($arguments131['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments131['encoding'], $arguments131['doubleEncode']));

$output127 .= '
				';
return $output127;
};
$viewHelper134 = $self->getViewHelper('$viewHelper134', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper134->setArguments($arguments97);
$viewHelper134->setRenderingContext($renderingContext);
$viewHelper134->setRenderChildrenClosure($renderChildrenClosure98);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output72 .= $viewHelper134->initializeArgumentsAndRender();

$output72 .= '
		</p>
	</div>
	<div class="dashboard__module">
		<h2>Trash</h2>
		<p>Trash keeps ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments135 = array();
$arguments135['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'trash', $renderingContext);
$arguments135['keepQuotes'] = false;
$arguments135['encoding'] = 'UTF-8';
$arguments135['doubleEncode'] = true;
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
return NULL;
};
$value137 = ($arguments135['value'] !== NULL ? $arguments135['value'] : $renderChildrenClosure136());

$output72 .= (!is_string($value137) ? $value137 : htmlspecialchars($value137, ($arguments135['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments135['encoding'], $arguments135['doubleEncode']));

$output72 .= ' posts.</p>
	</div>
</div>
';
return $output72;
};

$output66 .= '';

$output66 .= '
';

return $output66;
}


}
#1439044606    36723     