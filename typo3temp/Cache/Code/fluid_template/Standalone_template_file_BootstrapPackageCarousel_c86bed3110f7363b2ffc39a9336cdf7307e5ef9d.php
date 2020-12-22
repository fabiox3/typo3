<?php
class FluidCache_Standalone_template_file_BootstrapPackageCarousel_c86bed3110f7363b2ffc39a9336cdf7307e5ef9d extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$self = $this;

return 'Default';
}
public function hasLayout() {
return TRUE;
}

/**
 * section Header
 */
public function section_31341c6f0c7af677ffb8fadcb92038e8ac2b6193(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments1 = array();
$arguments1['partial'] = 'Header/All';
$arguments1['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments1['section'] = NULL;
$arguments1['optional'] = false;
$renderChildrenClosure2 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';


return $output0;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output3 = '';

$output3 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments4 = array();
// Rendering Boolean node
$arguments4['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('records'));
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output6 = '';

$output6 .= '
        <div id="carousel-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments7 = array();
$arguments7['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$arguments7['keepQuotes'] = false;
$arguments7['encoding'] = NULL;
$arguments7['doubleEncode'] = true;
$renderChildrenClosure8 = function() {return NULL;};
$value9 = ($arguments7['value'] !== NULL ? $arguments7['value'] : $renderChildrenClosure8());

$output6 .= (!is_string($value9) ? $value9 : htmlspecialchars($value9, ($arguments7['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments7['encoding'] !== NULL ? $arguments7['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments7['doubleEncode']));

$output6 .= '" class="carousel carousel-transition-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments10 = array();
$arguments10['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'pi_flexform.transition', $renderingContext);
$arguments10['keepQuotes'] = false;
$arguments10['encoding'] = NULL;
$arguments10['doubleEncode'] = true;
$renderChildrenClosure11 = function() {return NULL;};
$value12 = ($arguments10['value'] !== NULL ? $arguments10['value'] : $renderChildrenClosure11());

$output6 .= (!is_string($value12) ? $value12 : htmlspecialchars($value12, ($arguments10['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments10['encoding'] !== NULL ? $arguments10['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments10['doubleEncode']));

$output6 .= ' slide" data-interval="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments13 = array();
$arguments13['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'pi_flexform.interval', $renderingContext);
$arguments13['keepQuotes'] = false;
$arguments13['encoding'] = NULL;
$arguments13['doubleEncode'] = true;
$renderChildrenClosure14 = function() {return NULL;};
$value15 = ($arguments13['value'] !== NULL ? $arguments13['value'] : $renderChildrenClosure14());

$output6 .= (!is_string($value15) ? $value15 : htmlspecialchars($value15, ($arguments13['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments13['encoding'] !== NULL ? $arguments13['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments13['doubleEncode']));

$output6 .= '" data-wrap="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments16 = array();
$arguments16['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'pi_flexform.wrap', $renderingContext);
$arguments16['keepQuotes'] = false;
$arguments16['encoding'] = NULL;
$arguments16['doubleEncode'] = true;
$renderChildrenClosure17 = function() {return NULL;};
$value18 = ($arguments16['value'] !== NULL ? $arguments16['value'] : $renderChildrenClosure17());

$output6 .= (!is_string($value18) ? $value18 : htmlspecialchars($value18, ($arguments16['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments16['encoding'] !== NULL ? $arguments16['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments16['doubleEncode']));

$output6 .= '" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments19 = array();
$arguments19['each'] = $currentVariableContainer->getOrNull('records');
$arguments19['as'] = 'item';
$arguments19['iteration'] = 'iteration';
$arguments19['key'] = '';
$arguments19['reverse'] = false;
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output21 = '';

$output21 .= '
                    ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\VarViewHelper
$arguments22 = array();
$arguments22['name'] = 'itemStyleImage';
$arguments22['value'] = NULL;
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments24 = array();
// Rendering Boolean node
$arguments24['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'backgroundImage.0', $renderingContext));
$arguments24['then'] = NULL;
$arguments24['else'] = NULL;
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output26 = '';

$output26 .= 'background-image: url(\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$arguments27 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments28 = array();
$arguments28['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'backgroundImage.0', $renderingContext);
$arguments28['keepQuotes'] = false;
$arguments28['encoding'] = NULL;
$arguments28['doubleEncode'] = true;
$renderChildrenClosure29 = function() {return NULL;};
$value30 = ($arguments28['value'] !== NULL ? $arguments28['value'] : $renderChildrenClosure29());
$arguments27['image'] = (!is_string($value30) ? $value30 : htmlspecialchars($value30, ($arguments28['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments28['encoding'] !== NULL ? $arguments28['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments28['doubleEncode']));
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments31 = array();
$arguments31['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'pi_flexform.background_image_maxwidth', $renderingContext);
$arguments31['keepQuotes'] = false;
$arguments31['encoding'] = NULL;
$arguments31['doubleEncode'] = true;
$renderChildrenClosure32 = function() {return NULL;};
$value33 = ($arguments31['value'] !== NULL ? $arguments31['value'] : $renderChildrenClosure32());
$arguments27['maxWidth'] = (!is_string($value33) ? $value33 : htmlspecialchars($value33, ($arguments31['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments31['encoding'] !== NULL ? $arguments31['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments31['doubleEncode']));
$arguments27['src'] = NULL;
$arguments27['width'] = NULL;
$arguments27['height'] = NULL;
$arguments27['minWidth'] = NULL;
$arguments27['minHeight'] = NULL;
$arguments27['maxHeight'] = NULL;
$arguments27['treatIdAsReference'] = false;
$arguments27['crop'] = NULL;
$arguments27['absolute'] = false;
$renderChildrenClosure34 = function() {return NULL;};

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments27, $renderChildrenClosure34, $renderingContext);

$output26 .= '\');';
return $output26;
};
return TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);
};

$output21 .= BK2K\BootstrapPackage\ViewHelpers\VarViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output21 .= '
                    ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\VarViewHelper
$arguments35 = array();
$arguments35['name'] = 'itemStyleColor';
$arguments35['value'] = NULL;
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments37 = array();
// Rendering Boolean node
$arguments37['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'data.background_color', $renderingContext));
$arguments37['then'] = NULL;
$arguments37['else'] = NULL;
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output39 = '';

$output39 .= 'background-color: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments40 = array();
$arguments40['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'data.background_color', $renderingContext);
$arguments40['keepQuotes'] = false;
$arguments40['encoding'] = NULL;
$arguments40['doubleEncode'] = true;
$renderChildrenClosure41 = function() {return NULL;};
$value42 = ($arguments40['value'] !== NULL ? $arguments40['value'] : $renderChildrenClosure41());

$output39 .= (!is_string($value42) ? $value42 : htmlspecialchars($value42, ($arguments40['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments40['encoding'] !== NULL ? $arguments40['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments40['doubleEncode']));

$output39 .= ';';
return $output39;
};
return TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);
};

$output21 .= BK2K\BootstrapPackage\ViewHelpers\VarViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output21 .= '
                    <div class="item';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments43 = array();
// Rendering Boolean node
$arguments43['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('iteration'), 'isFirst', $renderingContext));
$arguments43['then'] = ' active';
$arguments43['else'] = NULL;
$renderChildrenClosure44 = function() {return NULL;};

$output21 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output21 .= ' carousel-item-type carousel-item-type-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments45 = array();
$arguments45['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'data.item_type', $renderingContext);
$arguments45['keepQuotes'] = false;
$arguments45['encoding'] = NULL;
$arguments45['doubleEncode'] = true;
$renderChildrenClosure46 = function() {return NULL;};
$value47 = ($arguments45['value'] !== NULL ? $arguments45['value'] : $renderChildrenClosure46());

$output21 .= (!is_string($value47) ? $value47 : htmlspecialchars($value47, ($arguments45['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments45['encoding'] !== NULL ? $arguments45['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments45['doubleEncode']));

$output21 .= '" data-itemno="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments48 = array();
$arguments48['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('iteration'), 'index', $renderingContext);
$arguments48['keepQuotes'] = false;
$arguments48['encoding'] = NULL;
$arguments48['doubleEncode'] = true;
$renderChildrenClosure49 = function() {return NULL;};
$value50 = ($arguments48['value'] !== NULL ? $arguments48['value'] : $renderChildrenClosure49());

$output21 .= (!is_string($value50) ? $value50 : htmlspecialchars($value50, ($arguments48['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments48['encoding'] !== NULL ? $arguments48['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments48['doubleEncode']));

$output21 .= '" style="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments51 = array();
$arguments51['value'] = $currentVariableContainer->getOrNull('itemStyleImage');
$arguments51['keepQuotes'] = false;
$arguments51['encoding'] = NULL;
$arguments51['doubleEncode'] = true;
$renderChildrenClosure52 = function() {return NULL;};
$value53 = ($arguments51['value'] !== NULL ? $arguments51['value'] : $renderChildrenClosure52());

$output21 .= (!is_string($value53) ? $value53 : htmlspecialchars($value53, ($arguments51['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments51['encoding'] !== NULL ? $arguments51['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments51['doubleEncode']));

$output21 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments54 = array();
$arguments54['value'] = $currentVariableContainer->getOrNull('itemStyleColor');
$arguments54['keepQuotes'] = false;
$arguments54['encoding'] = NULL;
$arguments54['doubleEncode'] = true;
$renderChildrenClosure55 = function() {return NULL;};
$value56 = ($arguments54['value'] !== NULL ? $arguments54['value'] : $renderChildrenClosure55());

$output21 .= (!is_string($value56) ? $value56 : htmlspecialchars($value56, ($arguments54['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments54['encoding'] !== NULL ? $arguments54['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments54['doubleEncode']));

$output21 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SwitchViewHelper
$arguments57 = array();
$arguments57['expression'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'data.item_type', $renderingContext);
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output59 = '';

$output59 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments60 = array();
$arguments60['value'] = 'header';
$arguments60['default'] = false;
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output62 = '';

$output62 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments63 = array();
$arguments63['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'data.link', $renderingContext);
// Rendering Array
$array64 = array();
$array64['draggable'] = 'false';
$arguments63['additionalAttributes'] = $array64;
$arguments63['data'] = NULL;
$arguments63['additionalParams'] = array (
);
$arguments63['pageType'] = 0;
$arguments63['noCache'] = false;
$arguments63['noCacheHash'] = false;
$arguments63['section'] = '';
$arguments63['linkAccessRestrictedPages'] = false;
$arguments63['absolute'] = false;
$arguments63['addQueryString'] = false;
$arguments63['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments63['addQueryStringMethod'] = NULL;
$arguments63['class'] = NULL;
$arguments63['dir'] = NULL;
$arguments63['id'] = NULL;
$arguments63['lang'] = NULL;
$arguments63['style'] = NULL;
$arguments63['title'] = NULL;
$arguments63['accesskey'] = NULL;
$arguments63['tabindex'] = NULL;
$arguments63['onclick'] = NULL;
$arguments63['target'] = NULL;
$arguments63['rel'] = NULL;
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output66 = '';

$output66 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments67 = array();
$arguments67['partial'] = 'Carousel/Item/Header';
$arguments67['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments67['section'] = NULL;
$arguments67['optional'] = false;
$renderChildrenClosure68 = function() {return NULL;};

$output66 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output66 .= '
                                ';
return $output66;
};
$viewHelper69 = $self->getViewHelper('$viewHelper69', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper69->setArguments($arguments63);
$viewHelper69->setRenderingContext($renderingContext);
$viewHelper69->setRenderChildrenClosure($renderChildrenClosure65);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output62 .= $viewHelper69->initializeArgumentsAndRender();

$output62 .= '
                            ';
return $output62;
};

$output59 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output59 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments70 = array();
$arguments70['value'] = 'textandimage';
$arguments70['default'] = false;
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output72 = '';

$output72 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments73 = array();
$arguments73['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'data.link', $renderingContext);
// Rendering Array
$array74 = array();
$array74['draggable'] = 'false';
$arguments73['additionalAttributes'] = $array74;
$arguments73['data'] = NULL;
$arguments73['additionalParams'] = array (
);
$arguments73['pageType'] = 0;
$arguments73['noCache'] = false;
$arguments73['noCacheHash'] = false;
$arguments73['section'] = '';
$arguments73['linkAccessRestrictedPages'] = false;
$arguments73['absolute'] = false;
$arguments73['addQueryString'] = false;
$arguments73['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments73['addQueryStringMethod'] = NULL;
$arguments73['class'] = NULL;
$arguments73['dir'] = NULL;
$arguments73['id'] = NULL;
$arguments73['lang'] = NULL;
$arguments73['style'] = NULL;
$arguments73['title'] = NULL;
$arguments73['accesskey'] = NULL;
$arguments73['tabindex'] = NULL;
$arguments73['onclick'] = NULL;
$arguments73['target'] = NULL;
$arguments73['rel'] = NULL;
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output76 = '';

$output76 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments77 = array();
$arguments77['partial'] = 'Carousel/Item/TextAndImage';
$arguments77['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments77['section'] = NULL;
$arguments77['optional'] = false;
$renderChildrenClosure78 = function() {return NULL;};

$output76 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output76 .= '
                                ';
return $output76;
};
$viewHelper79 = $self->getViewHelper('$viewHelper79', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper79->setArguments($arguments73);
$viewHelper79->setRenderingContext($renderingContext);
$viewHelper79->setRenderChildrenClosure($renderChildrenClosure75);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output72 .= $viewHelper79->initializeArgumentsAndRender();

$output72 .= '
                            ';
return $output72;
};

$output59 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output59 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments80 = array();
$arguments80['value'] = 'html';
$arguments80['default'] = false;
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments82 = array();
$arguments82['value'] = NULL;
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'data.bodytext', $renderingContext);
};
return TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);
};

$output59 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output59 .= '
                        ';
return $output59;
};

$output21 .= TYPO3\CMS\Fluid\ViewHelpers\SwitchViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output21 .= '
                    </div>
                ';
return $output21;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output6 .= '
            </div>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments84 = array();
$arguments84['partial'] = 'Carousel/Control/Indicator';
$arguments84['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments84['section'] = NULL;
$arguments84['optional'] = false;
$renderChildrenClosure85 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output6 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments86 = array();
$arguments86['partial'] = 'Carousel/Control/Control';
$arguments86['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments86['section'] = NULL;
$arguments86['optional'] = false;
$renderChildrenClosure87 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);

$output6 .= '
        </div>
    ';
return $output6;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '

';


return $output3;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output88 = '';

$output88 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments89 = array();
$arguments89['name'] = 'Default';
$renderChildrenClosure90 = function() {return NULL;};
$viewHelper91 = $self->getViewHelper('$viewHelper91', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper91->setArguments($arguments89);
$viewHelper91->setRenderingContext($renderingContext);
$viewHelper91->setRenderChildrenClosure($renderChildrenClosure90);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output88 .= $viewHelper91->initializeArgumentsAndRender();

$output88 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments92 = array();
$arguments92['name'] = 'Header';
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output94 = '';

$output94 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments95 = array();
$arguments95['partial'] = 'Header/All';
$arguments95['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments95['section'] = NULL;
$arguments95['optional'] = false;
$renderChildrenClosure96 = function() {return NULL;};

$output94 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output94 .= '

';
return $output94;
};

$output88 .= '';

$output88 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments97 = array();
$arguments97['name'] = 'Main';
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output99 = '';

$output99 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments100 = array();
// Rendering Boolean node
$arguments100['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('records'));
$arguments100['then'] = NULL;
$arguments100['else'] = NULL;
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output102 = '';

$output102 .= '
        <div id="carousel-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments103 = array();
$arguments103['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$arguments103['keepQuotes'] = false;
$arguments103['encoding'] = NULL;
$arguments103['doubleEncode'] = true;
$renderChildrenClosure104 = function() {return NULL;};
$value105 = ($arguments103['value'] !== NULL ? $arguments103['value'] : $renderChildrenClosure104());

$output102 .= (!is_string($value105) ? $value105 : htmlspecialchars($value105, ($arguments103['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments103['encoding'] !== NULL ? $arguments103['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments103['doubleEncode']));

$output102 .= '" class="carousel carousel-transition-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments106 = array();
$arguments106['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'pi_flexform.transition', $renderingContext);
$arguments106['keepQuotes'] = false;
$arguments106['encoding'] = NULL;
$arguments106['doubleEncode'] = true;
$renderChildrenClosure107 = function() {return NULL;};
$value108 = ($arguments106['value'] !== NULL ? $arguments106['value'] : $renderChildrenClosure107());

$output102 .= (!is_string($value108) ? $value108 : htmlspecialchars($value108, ($arguments106['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments106['encoding'] !== NULL ? $arguments106['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments106['doubleEncode']));

$output102 .= ' slide" data-interval="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments109 = array();
$arguments109['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'pi_flexform.interval', $renderingContext);
$arguments109['keepQuotes'] = false;
$arguments109['encoding'] = NULL;
$arguments109['doubleEncode'] = true;
$renderChildrenClosure110 = function() {return NULL;};
$value111 = ($arguments109['value'] !== NULL ? $arguments109['value'] : $renderChildrenClosure110());

$output102 .= (!is_string($value111) ? $value111 : htmlspecialchars($value111, ($arguments109['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments109['encoding'] !== NULL ? $arguments109['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments109['doubleEncode']));

$output102 .= '" data-wrap="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments112 = array();
$arguments112['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'pi_flexform.wrap', $renderingContext);
$arguments112['keepQuotes'] = false;
$arguments112['encoding'] = NULL;
$arguments112['doubleEncode'] = true;
$renderChildrenClosure113 = function() {return NULL;};
$value114 = ($arguments112['value'] !== NULL ? $arguments112['value'] : $renderChildrenClosure113());

$output102 .= (!is_string($value114) ? $value114 : htmlspecialchars($value114, ($arguments112['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments112['encoding'] !== NULL ? $arguments112['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments112['doubleEncode']));

$output102 .= '" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments115 = array();
$arguments115['each'] = $currentVariableContainer->getOrNull('records');
$arguments115['as'] = 'item';
$arguments115['iteration'] = 'iteration';
$arguments115['key'] = '';
$arguments115['reverse'] = false;
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output117 = '';

$output117 .= '
                    ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\VarViewHelper
$arguments118 = array();
$arguments118['name'] = 'itemStyleImage';
$arguments118['value'] = NULL;
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments120 = array();
// Rendering Boolean node
$arguments120['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'backgroundImage.0', $renderingContext));
$arguments120['then'] = NULL;
$arguments120['else'] = NULL;
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output122 = '';

$output122 .= 'background-image: url(\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$arguments123 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments124 = array();
$arguments124['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'backgroundImage.0', $renderingContext);
$arguments124['keepQuotes'] = false;
$arguments124['encoding'] = NULL;
$arguments124['doubleEncode'] = true;
$renderChildrenClosure125 = function() {return NULL;};
$value126 = ($arguments124['value'] !== NULL ? $arguments124['value'] : $renderChildrenClosure125());
$arguments123['image'] = (!is_string($value126) ? $value126 : htmlspecialchars($value126, ($arguments124['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments124['encoding'] !== NULL ? $arguments124['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments124['doubleEncode']));
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments127 = array();
$arguments127['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'pi_flexform.background_image_maxwidth', $renderingContext);
$arguments127['keepQuotes'] = false;
$arguments127['encoding'] = NULL;
$arguments127['doubleEncode'] = true;
$renderChildrenClosure128 = function() {return NULL;};
$value129 = ($arguments127['value'] !== NULL ? $arguments127['value'] : $renderChildrenClosure128());
$arguments123['maxWidth'] = (!is_string($value129) ? $value129 : htmlspecialchars($value129, ($arguments127['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments127['encoding'] !== NULL ? $arguments127['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments127['doubleEncode']));
$arguments123['src'] = NULL;
$arguments123['width'] = NULL;
$arguments123['height'] = NULL;
$arguments123['minWidth'] = NULL;
$arguments123['minHeight'] = NULL;
$arguments123['maxHeight'] = NULL;
$arguments123['treatIdAsReference'] = false;
$arguments123['crop'] = NULL;
$arguments123['absolute'] = false;
$renderChildrenClosure130 = function() {return NULL;};

$output122 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments123, $renderChildrenClosure130, $renderingContext);

$output122 .= '\');';
return $output122;
};
return TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext);
};

$output117 .= BK2K\BootstrapPackage\ViewHelpers\VarViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);

$output117 .= '
                    ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\VarViewHelper
$arguments131 = array();
$arguments131['name'] = 'itemStyleColor';
$arguments131['value'] = NULL;
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments133 = array();
// Rendering Boolean node
$arguments133['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'data.background_color', $renderingContext));
$arguments133['then'] = NULL;
$arguments133['else'] = NULL;
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output135 = '';

$output135 .= 'background-color: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments136 = array();
$arguments136['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'data.background_color', $renderingContext);
$arguments136['keepQuotes'] = false;
$arguments136['encoding'] = NULL;
$arguments136['doubleEncode'] = true;
$renderChildrenClosure137 = function() {return NULL;};
$value138 = ($arguments136['value'] !== NULL ? $arguments136['value'] : $renderChildrenClosure137());

$output135 .= (!is_string($value138) ? $value138 : htmlspecialchars($value138, ($arguments136['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments136['encoding'] !== NULL ? $arguments136['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments136['doubleEncode']));

$output135 .= ';';
return $output135;
};
return TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);
};

$output117 .= BK2K\BootstrapPackage\ViewHelpers\VarViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext);

$output117 .= '
                    <div class="item';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments139 = array();
// Rendering Boolean node
$arguments139['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('iteration'), 'isFirst', $renderingContext));
$arguments139['then'] = ' active';
$arguments139['else'] = NULL;
$renderChildrenClosure140 = function() {return NULL;};

$output117 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output117 .= ' carousel-item-type carousel-item-type-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments141 = array();
$arguments141['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'data.item_type', $renderingContext);
$arguments141['keepQuotes'] = false;
$arguments141['encoding'] = NULL;
$arguments141['doubleEncode'] = true;
$renderChildrenClosure142 = function() {return NULL;};
$value143 = ($arguments141['value'] !== NULL ? $arguments141['value'] : $renderChildrenClosure142());

$output117 .= (!is_string($value143) ? $value143 : htmlspecialchars($value143, ($arguments141['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments141['encoding'] !== NULL ? $arguments141['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments141['doubleEncode']));

$output117 .= '" data-itemno="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments144 = array();
$arguments144['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('iteration'), 'index', $renderingContext);
$arguments144['keepQuotes'] = false;
$arguments144['encoding'] = NULL;
$arguments144['doubleEncode'] = true;
$renderChildrenClosure145 = function() {return NULL;};
$value146 = ($arguments144['value'] !== NULL ? $arguments144['value'] : $renderChildrenClosure145());

$output117 .= (!is_string($value146) ? $value146 : htmlspecialchars($value146, ($arguments144['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments144['encoding'] !== NULL ? $arguments144['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments144['doubleEncode']));

$output117 .= '" style="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments147 = array();
$arguments147['value'] = $currentVariableContainer->getOrNull('itemStyleImage');
$arguments147['keepQuotes'] = false;
$arguments147['encoding'] = NULL;
$arguments147['doubleEncode'] = true;
$renderChildrenClosure148 = function() {return NULL;};
$value149 = ($arguments147['value'] !== NULL ? $arguments147['value'] : $renderChildrenClosure148());

$output117 .= (!is_string($value149) ? $value149 : htmlspecialchars($value149, ($arguments147['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments147['encoding'] !== NULL ? $arguments147['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments147['doubleEncode']));

$output117 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments150 = array();
$arguments150['value'] = $currentVariableContainer->getOrNull('itemStyleColor');
$arguments150['keepQuotes'] = false;
$arguments150['encoding'] = NULL;
$arguments150['doubleEncode'] = true;
$renderChildrenClosure151 = function() {return NULL;};
$value152 = ($arguments150['value'] !== NULL ? $arguments150['value'] : $renderChildrenClosure151());

$output117 .= (!is_string($value152) ? $value152 : htmlspecialchars($value152, ($arguments150['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments150['encoding'] !== NULL ? $arguments150['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments150['doubleEncode']));

$output117 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SwitchViewHelper
$arguments153 = array();
$arguments153['expression'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'data.item_type', $renderingContext);
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output155 = '';

$output155 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments156 = array();
$arguments156['value'] = 'header';
$arguments156['default'] = false;
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output158 = '';

$output158 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments159 = array();
$arguments159['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'data.link', $renderingContext);
// Rendering Array
$array160 = array();
$array160['draggable'] = 'false';
$arguments159['additionalAttributes'] = $array160;
$arguments159['data'] = NULL;
$arguments159['additionalParams'] = array (
);
$arguments159['pageType'] = 0;
$arguments159['noCache'] = false;
$arguments159['noCacheHash'] = false;
$arguments159['section'] = '';
$arguments159['linkAccessRestrictedPages'] = false;
$arguments159['absolute'] = false;
$arguments159['addQueryString'] = false;
$arguments159['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments159['addQueryStringMethod'] = NULL;
$arguments159['class'] = NULL;
$arguments159['dir'] = NULL;
$arguments159['id'] = NULL;
$arguments159['lang'] = NULL;
$arguments159['style'] = NULL;
$arguments159['title'] = NULL;
$arguments159['accesskey'] = NULL;
$arguments159['tabindex'] = NULL;
$arguments159['onclick'] = NULL;
$arguments159['target'] = NULL;
$arguments159['rel'] = NULL;
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output162 = '';

$output162 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments163 = array();
$arguments163['partial'] = 'Carousel/Item/Header';
$arguments163['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments163['section'] = NULL;
$arguments163['optional'] = false;
$renderChildrenClosure164 = function() {return NULL;};

$output162 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext);

$output162 .= '
                                ';
return $output162;
};
$viewHelper165 = $self->getViewHelper('$viewHelper165', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper165->setArguments($arguments159);
$viewHelper165->setRenderingContext($renderingContext);
$viewHelper165->setRenderChildrenClosure($renderChildrenClosure161);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output158 .= $viewHelper165->initializeArgumentsAndRender();

$output158 .= '
                            ';
return $output158;
};

$output155 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext);

$output155 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments166 = array();
$arguments166['value'] = 'textandimage';
$arguments166['default'] = false;
$renderChildrenClosure167 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output168 = '';

$output168 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments169 = array();
$arguments169['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'data.link', $renderingContext);
// Rendering Array
$array170 = array();
$array170['draggable'] = 'false';
$arguments169['additionalAttributes'] = $array170;
$arguments169['data'] = NULL;
$arguments169['additionalParams'] = array (
);
$arguments169['pageType'] = 0;
$arguments169['noCache'] = false;
$arguments169['noCacheHash'] = false;
$arguments169['section'] = '';
$arguments169['linkAccessRestrictedPages'] = false;
$arguments169['absolute'] = false;
$arguments169['addQueryString'] = false;
$arguments169['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments169['addQueryStringMethod'] = NULL;
$arguments169['class'] = NULL;
$arguments169['dir'] = NULL;
$arguments169['id'] = NULL;
$arguments169['lang'] = NULL;
$arguments169['style'] = NULL;
$arguments169['title'] = NULL;
$arguments169['accesskey'] = NULL;
$arguments169['tabindex'] = NULL;
$arguments169['onclick'] = NULL;
$arguments169['target'] = NULL;
$arguments169['rel'] = NULL;
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output172 = '';

$output172 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments173 = array();
$arguments173['partial'] = 'Carousel/Item/TextAndImage';
$arguments173['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments173['section'] = NULL;
$arguments173['optional'] = false;
$renderChildrenClosure174 = function() {return NULL;};

$output172 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments173, $renderChildrenClosure174, $renderingContext);

$output172 .= '
                                ';
return $output172;
};
$viewHelper175 = $self->getViewHelper('$viewHelper175', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper175->setArguments($arguments169);
$viewHelper175->setRenderingContext($renderingContext);
$viewHelper175->setRenderChildrenClosure($renderChildrenClosure171);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output168 .= $viewHelper175->initializeArgumentsAndRender();

$output168 .= '
                            ';
return $output168;
};

$output155 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments166, $renderChildrenClosure167, $renderingContext);

$output155 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments176 = array();
$arguments176['value'] = 'html';
$arguments176['default'] = false;
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments178 = array();
$arguments178['value'] = NULL;
$renderChildrenClosure179 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'data.bodytext', $renderingContext);
};
return TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments178, $renderChildrenClosure179, $renderingContext);
};

$output155 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);

$output155 .= '
                        ';
return $output155;
};

$output117 .= TYPO3\CMS\Fluid\ViewHelpers\SwitchViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output117 .= '
                    </div>
                ';
return $output117;
};

$output102 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output102 .= '
            </div>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments180 = array();
$arguments180['partial'] = 'Carousel/Control/Indicator';
$arguments180['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments180['section'] = NULL;
$arguments180['optional'] = false;
$renderChildrenClosure181 = function() {return NULL;};

$output102 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext);

$output102 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments182 = array();
$arguments182['partial'] = 'Carousel/Control/Control';
$arguments182['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments182['section'] = NULL;
$arguments182['optional'] = false;
$renderChildrenClosure183 = function() {return NULL;};

$output102 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext);

$output102 .= '
        </div>
    ';
return $output102;
};

$output99 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output99 .= '

';
return $output99;
};

$output88 .= '';

$output88 .= '
';


return $output88;
}


}
#1608314113    51768     