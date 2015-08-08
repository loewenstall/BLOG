<?php
class FluidCache_Standalone_Post_action_list_3b2de2e245095c39fde7e5fad63abd660882eab3 extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
					<span class="record__list-modified">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments20 = array();
$arguments20['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.modified', $renderingContext);
$arguments20['keepQuotes'] = false;
$arguments20['encoding'] = 'UTF-8';
$arguments20['doubleEncode'] = true;
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$value22 = ($arguments20['value'] !== NULL ? $arguments20['value'] : $renderChildrenClosure21());

$output7 .= (!is_string($value22) ? $value22 : htmlspecialchars($value22, ($arguments20['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments20['encoding'], $arguments20['doubleEncode']));

$output7 .= '</span>
					<span class="record__list-controls">
						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper
$arguments23 = array();
$arguments23['partial'] = 'Records/Controls.html';
// Rendering Array
$array24 = array();
$array24['controller'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'settings.controller', $renderingContext);
$array24['action'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'settings.action', $renderingContext);
$array24['id'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.id', $renderingContext);
$arguments23['arguments'] = $array24;
$arguments23['section'] = NULL;
$arguments23['optional'] = false;
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper26 = $self->getViewHelper('$viewHelper26', $renderingContext, 'TYPO3\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper26->setArguments($arguments23);
$viewHelper26->setRenderingContext($renderingContext);
$viewHelper26->setRenderChildrenClosure($renderChildrenClosure25);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper

$output7 .= $viewHelper26->initializeArgumentsAndRender();

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
$output27 = '';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper
$arguments28 = array();
$arguments28['name'] = 'Backend';
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper30 = $self->getViewHelper('$viewHelper30', $renderingContext, 'TYPO3\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper30->setArguments($arguments28);
$viewHelper30->setRenderingContext($renderingContext);
$viewHelper30->setRenderChildrenClosure($renderChildrenClosure29);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper

$output27 .= $viewHelper30->initializeArgumentsAndRender();

$output27 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments31 = array();
$arguments31['name'] = 'main';
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
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
				<span class="record__list-controls">
					';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper
$arguments34 = array();
$arguments34['partial'] = 'Records/Controls.html';
// Rendering Array
$array35 = array();
$array35['controller'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'settings.controller', $renderingContext);
$array35['action'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'settings.action', $renderingContext);
$array35['id'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.id', $renderingContext);
$arguments34['arguments'] = $array35;
$arguments34['section'] = NULL;
$arguments34['optional'] = false;
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper37 = $self->getViewHelper('$viewHelper37', $renderingContext, 'TYPO3\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper37->setArguments($arguments34);
$viewHelper37->setRenderingContext($renderingContext);
$viewHelper37->setRenderChildrenClosure($renderChildrenClosure36);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper

$output33 .= $viewHelper37->initializeArgumentsAndRender();

$output33 .= '
				</span>
			</li>
			';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments38 = array();
$arguments38['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'posts', $renderingContext);
$arguments38['as'] = 'post';
$arguments38['key'] = '';
$arguments38['reverse'] = false;
$arguments38['iteration'] = NULL;
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$output40 = '';

$output40 .= '
				<li>
					<span class="record__list-id">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments41 = array();
$arguments41['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.id', $renderingContext);
$arguments41['keepQuotes'] = false;
$arguments41['encoding'] = 'UTF-8';
$arguments41['doubleEncode'] = true;
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return NULL;
};
$value43 = ($arguments41['value'] !== NULL ? $arguments41['value'] : $renderChildrenClosure42());

$output40 .= (!is_string($value43) ? $value43 : htmlspecialchars($value43, ($arguments41['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments41['encoding'], $arguments41['doubleEncode']));

$output40 .= '</span>
					<span class="record__list-label">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments44 = array();
$arguments44['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.title', $renderingContext);
$arguments44['keepQuotes'] = false;
$arguments44['encoding'] = 'UTF-8';
$arguments44['doubleEncode'] = true;
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$value46 = ($arguments44['value'] !== NULL ? $arguments44['value'] : $renderChildrenClosure45());

$output40 .= (!is_string($value46) ? $value46 : htmlspecialchars($value46, ($arguments44['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments44['encoding'], $arguments44['doubleEncode']));

$output40 .= '</span>
					<span class="record__list-label">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments47 = array();
$arguments47['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.author', $renderingContext);
$arguments47['keepQuotes'] = false;
$arguments47['encoding'] = 'UTF-8';
$arguments47['doubleEncode'] = true;
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$value49 = ($arguments47['value'] !== NULL ? $arguments47['value'] : $renderChildrenClosure48());

$output40 .= (!is_string($value49) ? $value49 : htmlspecialchars($value49, ($arguments47['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments47['encoding'], $arguments47['doubleEncode']));

$output40 .= '</span>
					<span class="record__list-date">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments50 = array();
$arguments50['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.crdate', $renderingContext);
$arguments50['keepQuotes'] = false;
$arguments50['encoding'] = 'UTF-8';
$arguments50['doubleEncode'] = true;
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return NULL;
};
$value52 = ($arguments50['value'] !== NULL ? $arguments50['value'] : $renderChildrenClosure51());

$output40 .= (!is_string($value52) ? $value52 : htmlspecialchars($value52, ($arguments50['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments50['encoding'], $arguments50['doubleEncode']));

$output40 .= '</span>
					<span class="record__list-modified">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments53 = array();
$arguments53['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.modified', $renderingContext);
$arguments53['keepQuotes'] = false;
$arguments53['encoding'] = 'UTF-8';
$arguments53['doubleEncode'] = true;
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return NULL;
};
$value55 = ($arguments53['value'] !== NULL ? $arguments53['value'] : $renderChildrenClosure54());

$output40 .= (!is_string($value55) ? $value55 : htmlspecialchars($value55, ($arguments53['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments53['encoding'], $arguments53['doubleEncode']));

$output40 .= '</span>
					<span class="record__list-controls">
						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper
$arguments56 = array();
$arguments56['partial'] = 'Records/Controls.html';
// Rendering Array
$array57 = array();
$array57['controller'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'settings.controller', $renderingContext);
$array57['action'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'settings.action', $renderingContext);
$array57['id'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.id', $renderingContext);
$arguments56['arguments'] = $array57;
$arguments56['section'] = NULL;
$arguments56['optional'] = false;
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper59 = $self->getViewHelper('$viewHelper59', $renderingContext, 'TYPO3\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper59->setArguments($arguments56);
$viewHelper59->setRenderingContext($renderingContext);
$viewHelper59->setRenderChildrenClosure($renderChildrenClosure58);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper

$output40 .= $viewHelper59->initializeArgumentsAndRender();

$output40 .= '
					</span>
				</li>
			';
return $output40;
};

$output33 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output33 .= '
		</ul>
	</div>
</div>
';
return $output33;
};

$output27 .= '';

$output27 .= '
';

return $output27;
}


}
#1438961077    17958     