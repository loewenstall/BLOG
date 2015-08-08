<?php
class FluidCache_Standalone_Backend_action_dashboard_b5a108df30f285d198f1a96a2223955ab7aea35b extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
return '
					No comments available at the moment.
				';
};
$viewHelper40 = $self->getViewHelper('$viewHelper40', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper40->setArguments($arguments38);
$viewHelper40->setRenderingContext($renderingContext);
$viewHelper40->setRenderChildrenClosure($renderChildrenClosure39);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper

$output27 .= $viewHelper40->initializeArgumentsAndRender();

$output27 .= '
			';
return $output27;
};
$arguments25['__thenClosure'] = function() use ($renderingContext, $self) {
$output41 = '';

$output41 .= '
					';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper
$arguments42 = array();
$arguments42['format'] = 'd.m.Y';
$arguments42['date'] = NULL;
$arguments42['forceLocale'] = NULL;
$arguments42['localeFormatType'] = NULL;
$arguments42['localeFormatLength'] = NULL;
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestComment.crdate', $renderingContext);
};
$viewHelper44 = $self->getViewHelper('$viewHelper44', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Format\DateViewHelper');
$viewHelper44->setArguments($arguments42);
$viewHelper44->setRenderingContext($renderingContext);
$viewHelper44->setRenderChildrenClosure($renderChildrenClosure43);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper

$output41 .= $viewHelper44->initializeArgumentsAndRender();

$output41 .= ': ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments45 = array();
$arguments45['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestComment.title', $renderingContext);
$arguments45['keepQuotes'] = false;
$arguments45['encoding'] = 'UTF-8';
$arguments45['doubleEncode'] = true;
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$value47 = ($arguments45['value'] !== NULL ? $arguments45['value'] : $renderChildrenClosure46());

$output41 .= (!is_string($value47) ? $value47 : htmlspecialchars($value47, ($arguments45['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments45['encoding'], $arguments45['doubleEncode']));

$output41 .= '
				';
return $output41;
};
$arguments25['__elseClosure'] = function() use ($renderingContext, $self) {
return '
					No comments available at the moment.
				';
};
$viewHelper48 = $self->getViewHelper('$viewHelper48', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper48->setArguments($arguments25);
$viewHelper48->setRenderingContext($renderingContext);
$viewHelper48->setRenderChildrenClosure($renderChildrenClosure26);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output0 .= $viewHelper48->initializeArgumentsAndRender();

$output0 .= '
		</p>
	</div>
	<div class="dashboard__module">
		<h2>Trash</h2>
		<p>Trash keeps ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments49 = array();
$arguments49['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'trash', $renderingContext);
$arguments49['keepQuotes'] = false;
$arguments49['encoding'] = 'UTF-8';
$arguments49['doubleEncode'] = true;
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$value51 = ($arguments49['value'] !== NULL ? $arguments49['value'] : $renderChildrenClosure50());

$output0 .= (!is_string($value51) ? $value51 : htmlspecialchars($value51, ($arguments49['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments49['encoding'], $arguments49['doubleEncode']));

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
$output52 = '';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper
$arguments53 = array();
$arguments53['name'] = 'Backend';
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper55 = $self->getViewHelper('$viewHelper55', $renderingContext, 'TYPO3\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper55->setArguments($arguments53);
$viewHelper55->setRenderingContext($renderingContext);
$viewHelper55->setRenderChildrenClosure($renderChildrenClosure54);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper

$output52 .= $viewHelper55->initializeArgumentsAndRender();

$output52 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments56 = array();
$arguments56['name'] = 'main';
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$output58 = '';

$output58 .= '
<div class="content__container">
	<h1>BLOG running V';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments59 = array();
$arguments59['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'version', $renderingContext);
$arguments59['keepQuotes'] = false;
$arguments59['encoding'] = 'UTF-8';
$arguments59['doubleEncode'] = true;
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return NULL;
};
$value61 = ($arguments59['value'] !== NULL ? $arguments59['value'] : $renderChildrenClosure60());

$output58 .= (!is_string($value61) ? $value61 : htmlspecialchars($value61, ($arguments59['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments59['encoding'], $arguments59['doubleEncode']));

$output58 .= '</h1>
	<div class="dashboard__module">
		<h2>Posts</h2>
		<p>
			The database keeps ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments62 = array();
$arguments62['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'postCount', $renderingContext);
$arguments62['keepQuotes'] = false;
$arguments62['encoding'] = 'UTF-8';
$arguments62['doubleEncode'] = true;
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$value64 = ($arguments62['value'] !== NULL ? $arguments62['value'] : $renderChildrenClosure63());

$output58 .= (!is_string($value64) ? $value64 : htmlspecialchars($value64, ($arguments62['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments62['encoding'], $arguments62['doubleEncode']));

$output58 .= ' posts.<br />
			- Public posts: ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments65 = array();
$arguments65['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'publicPostCount', $renderingContext);
$arguments65['keepQuotes'] = false;
$arguments65['encoding'] = 'UTF-8';
$arguments65['doubleEncode'] = true;
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
return NULL;
};
$value67 = ($arguments65['value'] !== NULL ? $arguments65['value'] : $renderChildrenClosure66());

$output58 .= (!is_string($value67) ? $value67 : htmlspecialchars($value67, ($arguments65['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments65['encoding'], $arguments65['doubleEncode']));

$output58 .= '<br />
			- Hidden posts: ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments68 = array();
$arguments68['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'hiddenPostCount', $renderingContext);
$arguments68['keepQuotes'] = false;
$arguments68['encoding'] = 'UTF-8';
$arguments68['doubleEncode'] = true;
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return NULL;
};
$value70 = ($arguments68['value'] !== NULL ? $arguments68['value'] : $renderChildrenClosure69());

$output58 .= (!is_string($value70) ? $value70 : htmlspecialchars($value70, ($arguments68['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments68['encoding'], $arguments68['doubleEncode']));

$output58 .= '
		</p>
		<h3>Latest post</h3>
		<p>
			';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper
$arguments71 = array();
$arguments71['format'] = 'd.m.Y';
$arguments71['date'] = NULL;
$arguments71['forceLocale'] = NULL;
$arguments71['localeFormatType'] = NULL;
$arguments71['localeFormatLength'] = NULL;
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestPost.crdate', $renderingContext);
};
$viewHelper73 = $self->getViewHelper('$viewHelper73', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Format\DateViewHelper');
$viewHelper73->setArguments($arguments71);
$viewHelper73->setRenderingContext($renderingContext);
$viewHelper73->setRenderChildrenClosure($renderChildrenClosure72);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper

$output58 .= $viewHelper73->initializeArgumentsAndRender();

$output58 .= ': ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments74 = array();
$arguments74['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestPost.title', $renderingContext);
$arguments74['keepQuotes'] = false;
$arguments74['encoding'] = 'UTF-8';
$arguments74['doubleEncode'] = true;
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
return NULL;
};
$value76 = ($arguments74['value'] !== NULL ? $arguments74['value'] : $renderChildrenClosure75());

$output58 .= (!is_string($value76) ? $value76 : htmlspecialchars($value76, ($arguments74['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments74['encoding'], $arguments74['doubleEncode']));

$output58 .= '
		</p>
	</div>
	<div class="dashboard__module">
	<h2>Comments</h2>
		<p>
			The database keeps ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments77 = array();
$arguments77['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'commentCount', $renderingContext);
$arguments77['keepQuotes'] = false;
$arguments77['encoding'] = 'UTF-8';
$arguments77['doubleEncode'] = true;
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return NULL;
};
$value79 = ($arguments77['value'] !== NULL ? $arguments77['value'] : $renderChildrenClosure78());

$output58 .= (!is_string($value79) ? $value79 : htmlspecialchars($value79, ($arguments77['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments77['encoding'], $arguments77['doubleEncode']));

$output58 .= ' comments in ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments80 = array();
$arguments80['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'postCount', $renderingContext);
$arguments80['keepQuotes'] = false;
$arguments80['encoding'] = 'UTF-8';
$arguments80['doubleEncode'] = true;
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
return NULL;
};
$value82 = ($arguments80['value'] !== NULL ? $arguments80['value'] : $renderChildrenClosure81());

$output58 .= (!is_string($value82) ? $value82 : htmlspecialchars($value82, ($arguments80['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments80['encoding'], $arguments80['doubleEncode']));

$output58 .= ' posts.<br />
		</p>
		<h3>Latest comment</h3>
		<p>
			';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments83 = array();
// Rendering Boolean node
$arguments83['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestComment', $renderingContext));
$arguments83['then'] = NULL;
$arguments83['else'] = NULL;
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
$output85 = '';

$output85 .= '
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper
$arguments86 = array();
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
$output88 = '';

$output88 .= '
					';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper
$arguments89 = array();
$arguments89['format'] = 'd.m.Y';
$arguments89['date'] = NULL;
$arguments89['forceLocale'] = NULL;
$arguments89['localeFormatType'] = NULL;
$arguments89['localeFormatLength'] = NULL;
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
return \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestComment.crdate', $renderingContext);
};
$viewHelper91 = $self->getViewHelper('$viewHelper91', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Format\DateViewHelper');
$viewHelper91->setArguments($arguments89);
$viewHelper91->setRenderingContext($renderingContext);
$viewHelper91->setRenderChildrenClosure($renderChildrenClosure90);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper

$output88 .= $viewHelper91->initializeArgumentsAndRender();

$output88 .= ': ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments92 = array();
$arguments92['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestComment.title', $renderingContext);
$arguments92['keepQuotes'] = false;
$arguments92['encoding'] = 'UTF-8';
$arguments92['doubleEncode'] = true;
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
return NULL;
};
$value94 = ($arguments92['value'] !== NULL ? $arguments92['value'] : $renderChildrenClosure93());

$output88 .= (!is_string($value94) ? $value94 : htmlspecialchars($value94, ($arguments92['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments92['encoding'], $arguments92['doubleEncode']));

$output88 .= '
				';
return $output88;
};
$viewHelper95 = $self->getViewHelper('$viewHelper95', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper95->setArguments($arguments86);
$viewHelper95->setRenderingContext($renderingContext);
$viewHelper95->setRenderChildrenClosure($renderChildrenClosure87);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper

$output85 .= $viewHelper95->initializeArgumentsAndRender();

$output85 .= '
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper
$arguments96 = array();
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
return '
					No comments available at the moment.
				';
};
$viewHelper98 = $self->getViewHelper('$viewHelper98', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper98->setArguments($arguments96);
$viewHelper98->setRenderingContext($renderingContext);
$viewHelper98->setRenderChildrenClosure($renderChildrenClosure97);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper

$output85 .= $viewHelper98->initializeArgumentsAndRender();

$output85 .= '
			';
return $output85;
};
$arguments83['__thenClosure'] = function() use ($renderingContext, $self) {
$output99 = '';

$output99 .= '
					';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper
$arguments100 = array();
$arguments100['format'] = 'd.m.Y';
$arguments100['date'] = NULL;
$arguments100['forceLocale'] = NULL;
$arguments100['localeFormatType'] = NULL;
$arguments100['localeFormatLength'] = NULL;
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
return \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestComment.crdate', $renderingContext);
};
$viewHelper102 = $self->getViewHelper('$viewHelper102', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Format\DateViewHelper');
$viewHelper102->setArguments($arguments100);
$viewHelper102->setRenderingContext($renderingContext);
$viewHelper102->setRenderChildrenClosure($renderChildrenClosure101);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper

$output99 .= $viewHelper102->initializeArgumentsAndRender();

$output99 .= ': ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments103 = array();
$arguments103['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestComment.title', $renderingContext);
$arguments103['keepQuotes'] = false;
$arguments103['encoding'] = 'UTF-8';
$arguments103['doubleEncode'] = true;
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
return NULL;
};
$value105 = ($arguments103['value'] !== NULL ? $arguments103['value'] : $renderChildrenClosure104());

$output99 .= (!is_string($value105) ? $value105 : htmlspecialchars($value105, ($arguments103['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments103['encoding'], $arguments103['doubleEncode']));

$output99 .= '
				';
return $output99;
};
$arguments83['__elseClosure'] = function() use ($renderingContext, $self) {
return '
					No comments available at the moment.
				';
};
$viewHelper106 = $self->getViewHelper('$viewHelper106', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper106->setArguments($arguments83);
$viewHelper106->setRenderingContext($renderingContext);
$viewHelper106->setRenderChildrenClosure($renderChildrenClosure84);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output58 .= $viewHelper106->initializeArgumentsAndRender();

$output58 .= '
		</p>
	</div>
	<div class="dashboard__module">
		<h2>Trash</h2>
		<p>Trash keeps ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments107 = array();
$arguments107['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'trash', $renderingContext);
$arguments107['keepQuotes'] = false;
$arguments107['encoding'] = 'UTF-8';
$arguments107['doubleEncode'] = true;
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
return NULL;
};
$value109 = ($arguments107['value'] !== NULL ? $arguments107['value'] : $renderChildrenClosure108());

$output58 .= (!is_string($value109) ? $value109 : htmlspecialchars($value109, ($arguments107['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments107['encoding'], $arguments107['doubleEncode']));

$output58 .= ' posts.</p>
	</div>
</div>
';
return $output58;
};

$output52 .= '';

$output52 .= '
';

return $output52;
}


}
#1439044645    29518     