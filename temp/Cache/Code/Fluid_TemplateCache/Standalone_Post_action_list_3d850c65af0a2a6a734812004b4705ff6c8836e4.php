<?php
class FluidCache_Standalone_Post_action_list_3d850c65af0a2a6a734812004b4705ff6c8836e4 extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
					<span class="record__list-date">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments10 = array();
$arguments10['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.crdate', $renderingContext);
$arguments10['keepQuotes'] = false;
$arguments10['encoding'] = 'UTF-8';
$arguments10['doubleEncode'] = true;
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$value12 = ($arguments10['value'] !== NULL ? $arguments10['value'] : $renderChildrenClosure11());

$output3 .= (!is_string($value12) ? $value12 : htmlspecialchars($value12, ($arguments10['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments10['encoding'], $arguments10['doubleEncode']));

$output3 .= '</span>
					<span class="record__list-controls">
						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper
$arguments13 = array();
$arguments13['partial'] = 'Records/Controls.html';
// Rendering Array
$array14 = array();
$array14['controller'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'settings.controller', $renderingContext);
$array14['action'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'settings.action', $renderingContext);
$array14['id'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.id', $renderingContext);
$arguments13['arguments'] = $array14;
$arguments13['section'] = NULL;
$arguments13['optional'] = false;
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper16 = $self->getViewHelper('$viewHelper16', $renderingContext, 'TYPO3\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper16->setArguments($arguments13);
$viewHelper16->setRenderingContext($renderingContext);
$viewHelper16->setRenderChildrenClosure($renderChildrenClosure15);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper

$output3 .= $viewHelper16->initializeArgumentsAndRender();

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
$output17 = '';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper
$arguments18 = array();
$arguments18['name'] = 'Backend';
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper20 = $self->getViewHelper('$viewHelper20', $renderingContext, 'TYPO3\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper20->setArguments($arguments18);
$viewHelper20->setRenderingContext($renderingContext);
$viewHelper20->setRenderChildrenClosure($renderChildrenClosure19);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper

$output17 .= $viewHelper20->initializeArgumentsAndRender();

$output17 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments21 = array();
$arguments21['name'] = 'main';
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$output23 = '';

$output23 .= '
<div class="content__container">
	<h1>BLOG posts</h1>
	<div class="dashboard__module">
		<h2>List</h2>
		<ul class="record__list">
			';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments24 = array();
$arguments24['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'posts', $renderingContext);
$arguments24['as'] = 'post';
$arguments24['key'] = '';
$arguments24['reverse'] = false;
$arguments24['iteration'] = NULL;
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$output26 = '';

$output26 .= '
				<li>
					<span class="record__list-id">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments27 = array();
$arguments27['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.id', $renderingContext);
$arguments27['keepQuotes'] = false;
$arguments27['encoding'] = 'UTF-8';
$arguments27['doubleEncode'] = true;
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$value29 = ($arguments27['value'] !== NULL ? $arguments27['value'] : $renderChildrenClosure28());

$output26 .= (!is_string($value29) ? $value29 : htmlspecialchars($value29, ($arguments27['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments27['encoding'], $arguments27['doubleEncode']));

$output26 .= '</span>
					<span class="record__list-label">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments30 = array();
$arguments30['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.title', $renderingContext);
$arguments30['keepQuotes'] = false;
$arguments30['encoding'] = 'UTF-8';
$arguments30['doubleEncode'] = true;
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$value32 = ($arguments30['value'] !== NULL ? $arguments30['value'] : $renderChildrenClosure31());

$output26 .= (!is_string($value32) ? $value32 : htmlspecialchars($value32, ($arguments30['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments30['encoding'], $arguments30['doubleEncode']));

$output26 .= '</span>
					<span class="record__list-date">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments33 = array();
$arguments33['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.crdate', $renderingContext);
$arguments33['keepQuotes'] = false;
$arguments33['encoding'] = 'UTF-8';
$arguments33['doubleEncode'] = true;
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$value35 = ($arguments33['value'] !== NULL ? $arguments33['value'] : $renderChildrenClosure34());

$output26 .= (!is_string($value35) ? $value35 : htmlspecialchars($value35, ($arguments33['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments33['encoding'], $arguments33['doubleEncode']));

$output26 .= '</span>
					<span class="record__list-controls">
						';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper
$arguments36 = array();
$arguments36['partial'] = 'Records/Controls.html';
// Rendering Array
$array37 = array();
$array37['controller'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'settings.controller', $renderingContext);
$array37['action'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'settings.action', $renderingContext);
$array37['id'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.id', $renderingContext);
$arguments36['arguments'] = $array37;
$arguments36['section'] = NULL;
$arguments36['optional'] = false;
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper39 = $self->getViewHelper('$viewHelper39', $renderingContext, 'TYPO3\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper39->setArguments($arguments36);
$viewHelper39->setRenderingContext($renderingContext);
$viewHelper39->setRenderChildrenClosure($renderChildrenClosure38);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper

$output26 .= $viewHelper39->initializeArgumentsAndRender();

$output26 .= '
					</span>
				</li>
			';
return $output26;
};

$output23 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output23 .= '
		</ul>
	</div>
</div>
';
return $output23;
};

$output17 .= '';

$output17 .= '
';

return $output17;
}


}
#1438960812    11215     