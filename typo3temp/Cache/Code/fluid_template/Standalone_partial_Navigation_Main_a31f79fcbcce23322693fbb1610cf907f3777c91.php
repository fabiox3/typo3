<?php
class FluidCache_Standalone_partial_Navigation_Main_a31f79fcbcce23322693fbb1610cf907f3777c91 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$self = $this;

return NULL;
}
public function hasLayout() {
return FALSE;
}

/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '<header class="navbar navbar-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments1 = array();
$arguments1['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'navigation.style', $renderingContext);
$arguments1['keepQuotes'] = false;
$arguments1['encoding'] = NULL;
$arguments1['doubleEncode'] = true;
$renderChildrenClosure2 = function() {return NULL;};
$value3 = ($arguments1['value'] !== NULL ? $arguments1['value'] : $renderChildrenClosure2());

$output0 .= (!is_string($value3) ? $value3 : htmlspecialchars($value3, ($arguments1['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments1['encoding'] !== NULL ? $arguments1['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments1['doubleEncode']));
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments4 = array();
// Rendering Boolean node
$arguments4['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'logo.file', $renderingContext));
$arguments4['then'] = ' navbar-has-image';
$arguments4['else'] = NULL;
$renderChildrenClosure5 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments6 = array();
// Rendering Boolean node
$arguments6['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'navigation.type', $renderingContext));
$arguments6['else'] = ' navbar-top';
$output7 = '';

$output7 .= ' navbar-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments8 = array();
$arguments8['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'navigation.type', $renderingContext);
$arguments8['keepQuotes'] = false;
$arguments8['encoding'] = NULL;
$arguments8['doubleEncode'] = true;
$renderChildrenClosure9 = function() {return NULL;};
$value10 = ($arguments8['value'] !== NULL ? $arguments8['value'] : $renderChildrenClosure9());

$output7 .= (!is_string($value10) ? $value10 : htmlspecialchars($value10, ($arguments8['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments8['encoding'] !== NULL ? $arguments8['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments8['doubleEncode']));

$output7 .= ' navbar-fixed-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments11 = array();
$arguments11['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'navigation.type', $renderingContext);
$arguments11['keepQuotes'] = false;
$arguments11['encoding'] = NULL;
$arguments11['doubleEncode'] = true;
$renderChildrenClosure12 = function() {return NULL;};
$value13 = ($arguments11['value'] !== NULL ? $arguments11['value'] : $renderChildrenClosure12());

$output7 .= (!is_string($value13) ? $value13 : htmlspecialchars($value13, ($arguments11['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments11['encoding'] !== NULL ? $arguments11['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments11['doubleEncode']));
$arguments6['then'] = $output7;
$renderChildrenClosure14 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments6, $renderChildrenClosure14, $renderingContext);

$output0 .= '">
    <div class="container">
        <div class="navbar-header navbar-header-main">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments15 = array();
// Rendering Boolean node
$arguments15['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'logo.file', $renderingContext));
$arguments15['then'] = NULL;
$arguments15['else'] = NULL;
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output17 = '';

$output17 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments18 = array();
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output20 = '';

$output20 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments21 = array();
$arguments21['pageUid'] = $currentVariableContainer->getOrNull('rootPage');
$arguments21['class'] = 'navbar-brand navbar-brand-image';
$arguments21['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'logo.linktitle', $renderingContext);
$arguments21['additionalAttributes'] = NULL;
$arguments21['data'] = NULL;
$arguments21['additionalParams'] = array (
);
$arguments21['pageType'] = 0;
$arguments21['noCache'] = false;
$arguments21['noCacheHash'] = false;
$arguments21['section'] = '';
$arguments21['linkAccessRestrictedPages'] = false;
$arguments21['absolute'] = false;
$arguments21['addQueryString'] = false;
$arguments21['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments21['addQueryStringMethod'] = NULL;
$arguments21['dir'] = NULL;
$arguments21['id'] = NULL;
$arguments21['lang'] = NULL;
$arguments21['style'] = NULL;
$arguments21['accesskey'] = NULL;
$arguments21['tabindex'] = NULL;
$arguments21['onclick'] = NULL;
$arguments21['target'] = NULL;
$arguments21['rel'] = NULL;
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output23 = '';

$output23 .= '
                        <img class="navbar-brand-logo-normal" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$arguments24 = array();
$arguments24['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'logo.file', $renderingContext);
$arguments24['image'] = NULL;
$arguments24['width'] = NULL;
$arguments24['height'] = NULL;
$arguments24['minWidth'] = NULL;
$arguments24['minHeight'] = NULL;
$arguments24['maxWidth'] = NULL;
$arguments24['maxHeight'] = NULL;
$arguments24['treatIdAsReference'] = false;
$arguments24['crop'] = NULL;
$arguments24['absolute'] = false;
$renderChildrenClosure25 = function() {return NULL;};

$output23 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output23 .= '" alt="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments26 = array();
$arguments26['value'] = $currentVariableContainer->getOrNull('logoAlt');
$arguments26['keepQuotes'] = false;
$arguments26['encoding'] = NULL;
$arguments26['doubleEncode'] = true;
$renderChildrenClosure27 = function() {return NULL;};
$value28 = ($arguments26['value'] !== NULL ? $arguments26['value'] : $renderChildrenClosure27());

$output23 .= (!is_string($value28) ? $value28 : htmlspecialchars($value28, ($arguments26['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments26['encoding'] !== NULL ? $arguments26['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments26['doubleEncode']));

$output23 .= '" height="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments29 = array();
$arguments29['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'logo.height', $renderingContext);
$arguments29['keepQuotes'] = false;
$arguments29['encoding'] = NULL;
$arguments29['doubleEncode'] = true;
$renderChildrenClosure30 = function() {return NULL;};
$value31 = ($arguments29['value'] !== NULL ? $arguments29['value'] : $renderChildrenClosure30());

$output23 .= (!is_string($value31) ? $value31 : htmlspecialchars($value31, ($arguments29['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments29['encoding'] !== NULL ? $arguments29['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments29['doubleEncode']));

$output23 .= '" width="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments32 = array();
$arguments32['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'logo.width', $renderingContext);
$arguments32['keepQuotes'] = false;
$arguments32['encoding'] = NULL;
$arguments32['doubleEncode'] = true;
$renderChildrenClosure33 = function() {return NULL;};
$value34 = ($arguments32['value'] !== NULL ? $arguments32['value'] : $renderChildrenClosure33());

$output23 .= (!is_string($value34) ? $value34 : htmlspecialchars($value34, ($arguments32['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments32['encoding'] !== NULL ? $arguments32['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments32['doubleEncode']));

$output23 .= '">
                        <img class="navbar-brand-logo-inverted" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$arguments35 = array();
$arguments35['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'logo.fileInverted', $renderingContext);
$arguments35['image'] = NULL;
$arguments35['width'] = NULL;
$arguments35['height'] = NULL;
$arguments35['minWidth'] = NULL;
$arguments35['minHeight'] = NULL;
$arguments35['maxWidth'] = NULL;
$arguments35['maxHeight'] = NULL;
$arguments35['treatIdAsReference'] = false;
$arguments35['crop'] = NULL;
$arguments35['absolute'] = false;
$renderChildrenClosure36 = function() {return NULL;};

$output23 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output23 .= '" alt="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments37 = array();
$arguments37['value'] = $currentVariableContainer->getOrNull('logoAlt');
$arguments37['keepQuotes'] = false;
$arguments37['encoding'] = NULL;
$arguments37['doubleEncode'] = true;
$renderChildrenClosure38 = function() {return NULL;};
$value39 = ($arguments37['value'] !== NULL ? $arguments37['value'] : $renderChildrenClosure38());

$output23 .= (!is_string($value39) ? $value39 : htmlspecialchars($value39, ($arguments37['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments37['encoding'] !== NULL ? $arguments37['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments37['doubleEncode']));

$output23 .= '" height="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments40 = array();
$arguments40['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'logo.height', $renderingContext);
$arguments40['keepQuotes'] = false;
$arguments40['encoding'] = NULL;
$arguments40['doubleEncode'] = true;
$renderChildrenClosure41 = function() {return NULL;};
$value42 = ($arguments40['value'] !== NULL ? $arguments40['value'] : $renderChildrenClosure41());

$output23 .= (!is_string($value42) ? $value42 : htmlspecialchars($value42, ($arguments40['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments40['encoding'] !== NULL ? $arguments40['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments40['doubleEncode']));

$output23 .= '" width="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments43 = array();
$arguments43['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'logo.width', $renderingContext);
$arguments43['keepQuotes'] = false;
$arguments43['encoding'] = NULL;
$arguments43['doubleEncode'] = true;
$renderChildrenClosure44 = function() {return NULL;};
$value45 = ($arguments43['value'] !== NULL ? $arguments43['value'] : $renderChildrenClosure44());

$output23 .= (!is_string($value45) ? $value45 : htmlspecialchars($value45, ($arguments43['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments43['encoding'] !== NULL ? $arguments43['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments43['doubleEncode']));

$output23 .= '">
                    ';
return $output23;
};
$viewHelper46 = $self->getViewHelper('$viewHelper46', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper46->setArguments($arguments21);
$viewHelper46->setRenderingContext($renderingContext);
$viewHelper46->setRenderChildrenClosure($renderChildrenClosure22);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output20 .= $viewHelper46->initializeArgumentsAndRender();

$output20 .= '
                ';
return $output20;
};

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output17 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments47 = array();
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output49 = '';

$output49 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments50 = array();
$arguments50['pageUid'] = $currentVariableContainer->getOrNull('rootPage');
$arguments50['class'] = 'navbar-brand';
$arguments50['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'logo.linktitle', $renderingContext);
$arguments50['additionalAttributes'] = NULL;
$arguments50['data'] = NULL;
$arguments50['additionalParams'] = array (
);
$arguments50['pageType'] = 0;
$arguments50['noCache'] = false;
$arguments50['noCacheHash'] = false;
$arguments50['section'] = '';
$arguments50['linkAccessRestrictedPages'] = false;
$arguments50['absolute'] = false;
$arguments50['addQueryString'] = false;
$arguments50['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments50['addQueryStringMethod'] = NULL;
$arguments50['dir'] = NULL;
$arguments50['id'] = NULL;
$arguments50['lang'] = NULL;
$arguments50['style'] = NULL;
$arguments50['accesskey'] = NULL;
$arguments50['tabindex'] = NULL;
$arguments50['onclick'] = NULL;
$arguments50['target'] = NULL;
$arguments50['rel'] = NULL;
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments52 = array();
$arguments52['value'] = $currentVariableContainer->getOrNull('siteTitle');
$arguments52['keepQuotes'] = false;
$arguments52['encoding'] = NULL;
$arguments52['doubleEncode'] = true;
$renderChildrenClosure53 = function() {return NULL;};
$value54 = ($arguments52['value'] !== NULL ? $arguments52['value'] : $renderChildrenClosure53());
return (!is_string($value54) ? $value54 : htmlspecialchars($value54, ($arguments52['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments52['encoding'] !== NULL ? $arguments52['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments52['doubleEncode']));
};
$viewHelper55 = $self->getViewHelper('$viewHelper55', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper55->setArguments($arguments50);
$viewHelper55->setRenderingContext($renderingContext);
$viewHelper55->setRenderChildrenClosure($renderChildrenClosure51);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output49 .= $viewHelper55->initializeArgumentsAndRender();

$output49 .= '
                ';
return $output49;
};

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output17 .= '
            ';
return $output17;
};
$arguments15['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output56 = '';

$output56 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments57 = array();
$arguments57['pageUid'] = $currentVariableContainer->getOrNull('rootPage');
$arguments57['class'] = 'navbar-brand navbar-brand-image';
$arguments57['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'logo.linktitle', $renderingContext);
$arguments57['additionalAttributes'] = NULL;
$arguments57['data'] = NULL;
$arguments57['additionalParams'] = array (
);
$arguments57['pageType'] = 0;
$arguments57['noCache'] = false;
$arguments57['noCacheHash'] = false;
$arguments57['section'] = '';
$arguments57['linkAccessRestrictedPages'] = false;
$arguments57['absolute'] = false;
$arguments57['addQueryString'] = false;
$arguments57['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments57['addQueryStringMethod'] = NULL;
$arguments57['dir'] = NULL;
$arguments57['id'] = NULL;
$arguments57['lang'] = NULL;
$arguments57['style'] = NULL;
$arguments57['accesskey'] = NULL;
$arguments57['tabindex'] = NULL;
$arguments57['onclick'] = NULL;
$arguments57['target'] = NULL;
$arguments57['rel'] = NULL;
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output59 = '';

$output59 .= '
                        <img class="navbar-brand-logo-normal" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$arguments60 = array();
$arguments60['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'logo.file', $renderingContext);
$arguments60['image'] = NULL;
$arguments60['width'] = NULL;
$arguments60['height'] = NULL;
$arguments60['minWidth'] = NULL;
$arguments60['minHeight'] = NULL;
$arguments60['maxWidth'] = NULL;
$arguments60['maxHeight'] = NULL;
$arguments60['treatIdAsReference'] = false;
$arguments60['crop'] = NULL;
$arguments60['absolute'] = false;
$renderChildrenClosure61 = function() {return NULL;};

$output59 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output59 .= '" alt="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments62 = array();
$arguments62['value'] = $currentVariableContainer->getOrNull('logoAlt');
$arguments62['keepQuotes'] = false;
$arguments62['encoding'] = NULL;
$arguments62['doubleEncode'] = true;
$renderChildrenClosure63 = function() {return NULL;};
$value64 = ($arguments62['value'] !== NULL ? $arguments62['value'] : $renderChildrenClosure63());

$output59 .= (!is_string($value64) ? $value64 : htmlspecialchars($value64, ($arguments62['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments62['encoding'] !== NULL ? $arguments62['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments62['doubleEncode']));

$output59 .= '" height="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments65 = array();
$arguments65['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'logo.height', $renderingContext);
$arguments65['keepQuotes'] = false;
$arguments65['encoding'] = NULL;
$arguments65['doubleEncode'] = true;
$renderChildrenClosure66 = function() {return NULL;};
$value67 = ($arguments65['value'] !== NULL ? $arguments65['value'] : $renderChildrenClosure66());

$output59 .= (!is_string($value67) ? $value67 : htmlspecialchars($value67, ($arguments65['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments65['encoding'] !== NULL ? $arguments65['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments65['doubleEncode']));

$output59 .= '" width="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments68 = array();
$arguments68['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'logo.width', $renderingContext);
$arguments68['keepQuotes'] = false;
$arguments68['encoding'] = NULL;
$arguments68['doubleEncode'] = true;
$renderChildrenClosure69 = function() {return NULL;};
$value70 = ($arguments68['value'] !== NULL ? $arguments68['value'] : $renderChildrenClosure69());

$output59 .= (!is_string($value70) ? $value70 : htmlspecialchars($value70, ($arguments68['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments68['encoding'] !== NULL ? $arguments68['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments68['doubleEncode']));

$output59 .= '">
                        <img class="navbar-brand-logo-inverted" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$arguments71 = array();
$arguments71['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'logo.fileInverted', $renderingContext);
$arguments71['image'] = NULL;
$arguments71['width'] = NULL;
$arguments71['height'] = NULL;
$arguments71['minWidth'] = NULL;
$arguments71['minHeight'] = NULL;
$arguments71['maxWidth'] = NULL;
$arguments71['maxHeight'] = NULL;
$arguments71['treatIdAsReference'] = false;
$arguments71['crop'] = NULL;
$arguments71['absolute'] = false;
$renderChildrenClosure72 = function() {return NULL;};

$output59 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output59 .= '" alt="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments73 = array();
$arguments73['value'] = $currentVariableContainer->getOrNull('logoAlt');
$arguments73['keepQuotes'] = false;
$arguments73['encoding'] = NULL;
$arguments73['doubleEncode'] = true;
$renderChildrenClosure74 = function() {return NULL;};
$value75 = ($arguments73['value'] !== NULL ? $arguments73['value'] : $renderChildrenClosure74());

$output59 .= (!is_string($value75) ? $value75 : htmlspecialchars($value75, ($arguments73['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments73['encoding'] !== NULL ? $arguments73['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments73['doubleEncode']));

$output59 .= '" height="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments76 = array();
$arguments76['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'logo.height', $renderingContext);
$arguments76['keepQuotes'] = false;
$arguments76['encoding'] = NULL;
$arguments76['doubleEncode'] = true;
$renderChildrenClosure77 = function() {return NULL;};
$value78 = ($arguments76['value'] !== NULL ? $arguments76['value'] : $renderChildrenClosure77());

$output59 .= (!is_string($value78) ? $value78 : htmlspecialchars($value78, ($arguments76['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments76['encoding'] !== NULL ? $arguments76['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments76['doubleEncode']));

$output59 .= '" width="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments79 = array();
$arguments79['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'logo.width', $renderingContext);
$arguments79['keepQuotes'] = false;
$arguments79['encoding'] = NULL;
$arguments79['doubleEncode'] = true;
$renderChildrenClosure80 = function() {return NULL;};
$value81 = ($arguments79['value'] !== NULL ? $arguments79['value'] : $renderChildrenClosure80());

$output59 .= (!is_string($value81) ? $value81 : htmlspecialchars($value81, ($arguments79['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments79['encoding'] !== NULL ? $arguments79['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments79['doubleEncode']));

$output59 .= '">
                    ';
return $output59;
};
$viewHelper82 = $self->getViewHelper('$viewHelper82', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper82->setArguments($arguments57);
$viewHelper82->setRenderingContext($renderingContext);
$viewHelper82->setRenderChildrenClosure($renderChildrenClosure58);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output56 .= $viewHelper82->initializeArgumentsAndRender();

$output56 .= '
                ';
return $output56;
};
$arguments15['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output83 = '';

$output83 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments84 = array();
$arguments84['pageUid'] = $currentVariableContainer->getOrNull('rootPage');
$arguments84['class'] = 'navbar-brand';
$arguments84['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'logo.linktitle', $renderingContext);
$arguments84['additionalAttributes'] = NULL;
$arguments84['data'] = NULL;
$arguments84['additionalParams'] = array (
);
$arguments84['pageType'] = 0;
$arguments84['noCache'] = false;
$arguments84['noCacheHash'] = false;
$arguments84['section'] = '';
$arguments84['linkAccessRestrictedPages'] = false;
$arguments84['absolute'] = false;
$arguments84['addQueryString'] = false;
$arguments84['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments84['addQueryStringMethod'] = NULL;
$arguments84['dir'] = NULL;
$arguments84['id'] = NULL;
$arguments84['lang'] = NULL;
$arguments84['style'] = NULL;
$arguments84['accesskey'] = NULL;
$arguments84['tabindex'] = NULL;
$arguments84['onclick'] = NULL;
$arguments84['target'] = NULL;
$arguments84['rel'] = NULL;
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments86 = array();
$arguments86['value'] = $currentVariableContainer->getOrNull('siteTitle');
$arguments86['keepQuotes'] = false;
$arguments86['encoding'] = NULL;
$arguments86['doubleEncode'] = true;
$renderChildrenClosure87 = function() {return NULL;};
$value88 = ($arguments86['value'] !== NULL ? $arguments86['value'] : $renderChildrenClosure87());
return (!is_string($value88) ? $value88 : htmlspecialchars($value88, ($arguments86['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments86['encoding'] !== NULL ? $arguments86['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments86['doubleEncode']));
};
$viewHelper89 = $self->getViewHelper('$viewHelper89', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper89->setArguments($arguments84);
$viewHelper89->setRenderingContext($renderingContext);
$viewHelper89->setRenderChildrenClosure($renderChildrenClosure85);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output83 .= $viewHelper89->initializeArgumentsAndRender();

$output83 .= '
                ';
return $output83;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments90 = array();
// Rendering Boolean node
$arguments90['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('mainnavigation'));
$arguments90['then'] = NULL;
$arguments90['else'] = NULL;
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            ';
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output0 .= '
            <span class="navbar-header-border-bottom"></span>
        </div>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments92 = array();
// Rendering Boolean node
$arguments92['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('mainnavigation'));
$arguments92['then'] = NULL;
$arguments92['else'] = NULL;
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output94 = '';

$output94 .= '
            <nav class="navbar-collapse collapse" role="navigation">
                <ul class="nav navbar-nav navbar-main">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments95 = array();
$arguments95['each'] = $currentVariableContainer->getOrNull('mainnavigation');
$arguments95['as'] = 'mainnavigationItem';
$arguments95['key'] = '';
$arguments95['reverse'] = false;
$arguments95['iteration'] = NULL;
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output97 = '';

$output97 .= '
                        <li class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments98 = array();
// Rendering Boolean node
$arguments98['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainnavigationItem'), 'active', $renderingContext));
$arguments98['then'] = 'active';
$arguments98['else'] = NULL;
$renderChildrenClosure99 = function() {return NULL;};

$output97 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);

$output97 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments100 = array();
// Rendering Boolean node
$arguments100['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainnavigationItem'), 'children', $renderingContext));
$arguments100['then'] = 'dropdown';
$arguments100['else'] = NULL;
$renderChildrenClosure101 = function() {return NULL;};

$output97 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output97 .= '">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments102 = array();
// Rendering Boolean node
$arguments102['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainnavigationItem'), 'spacer', $renderingContext));
$arguments102['then'] = NULL;
$arguments102['else'] = NULL;
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output104 = '';

$output104 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments105 = array();
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output107 = '';

$output107 .= '
                                    <p class="navbar-text">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments108 = array();
$arguments108['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainnavigationItem'), 'title', $renderingContext);
$arguments108['keepQuotes'] = false;
$arguments108['encoding'] = NULL;
$arguments108['doubleEncode'] = true;
$renderChildrenClosure109 = function() {return NULL;};
$value110 = ($arguments108['value'] !== NULL ? $arguments108['value'] : $renderChildrenClosure109());

$output107 .= (!is_string($value110) ? $value110 : htmlspecialchars($value110, ($arguments108['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments108['encoding'] !== NULL ? $arguments108['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments108['doubleEncode']));

$output107 .= '</p>
                                ';
return $output107;
};

$output104 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output104 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments111 = array();
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output113 = '';

$output113 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments114 = array();
// Rendering Boolean node
$arguments114['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainnavigationItem'), 'children', $renderingContext));
$arguments114['then'] = NULL;
$arguments114['else'] = NULL;
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output116 = '';

$output116 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments117 = array();
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output119 = '';

$output119 .= '
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments120 = array();
$arguments120['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainnavigationItem'), 'title', $renderingContext);
$arguments120['keepQuotes'] = false;
$arguments120['encoding'] = NULL;
$arguments120['doubleEncode'] = true;
$renderChildrenClosure121 = function() {return NULL;};
$value122 = ($arguments120['value'] !== NULL ? $arguments120['value'] : $renderChildrenClosure121());

$output119 .= (!is_string($value122) ? $value122 : htmlspecialchars($value122, ($arguments120['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments120['encoding'] !== NULL ? $arguments120['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments120['doubleEncode']));

$output119 .= '</span>
                                                <b class="caret"></b>
                                                <span class="bar"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments123 = array();
$arguments123['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainnavigationItem'), 'children', $renderingContext);
$arguments123['as'] = 'child';
$arguments123['key'] = '';
$arguments123['reverse'] = false;
$arguments123['iteration'] = NULL;
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output125 = '';

$output125 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments126 = array();
// Rendering Boolean node
$arguments126['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'spacer', $renderingContext));
$arguments126['then'] = NULL;
$arguments126['else'] = NULL;
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output128 = '';

$output128 .= '
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments129 = array();
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output131 = '';

$output131 .= '
                                                            <li class="dropdown-header">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments132 = array();
$arguments132['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'title', $renderingContext);
$arguments132['keepQuotes'] = false;
$arguments132['encoding'] = NULL;
$arguments132['doubleEncode'] = true;
$renderChildrenClosure133 = function() {return NULL;};
$value134 = ($arguments132['value'] !== NULL ? $arguments132['value'] : $renderChildrenClosure133());

$output131 .= (!is_string($value134) ? $value134 : htmlspecialchars($value134, ($arguments132['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments132['encoding'] !== NULL ? $arguments132['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments132['doubleEncode']));

$output131 .= '</li>
                                                        ';
return $output131;
};

$output128 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);

$output128 .= '
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments135 = array();
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output137 = '';

$output137 .= '
                                                            <li class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments138 = array();
// Rendering Boolean node
$arguments138['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'active', $renderingContext));
$arguments138['then'] = 'active';
$arguments138['else'] = NULL;
$renderChildrenClosure139 = function() {return NULL;};

$output137 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext);

$output137 .= '">
                                                                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments140 = array();
$arguments140['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'link', $renderingContext);
$arguments140['keepQuotes'] = false;
$arguments140['encoding'] = NULL;
$arguments140['doubleEncode'] = true;
$renderChildrenClosure141 = function() {return NULL;};
$value142 = ($arguments140['value'] !== NULL ? $arguments140['value'] : $renderChildrenClosure141());

$output137 .= (!is_string($value142) ? $value142 : htmlspecialchars($value142, ($arguments140['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments140['encoding'] !== NULL ? $arguments140['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments140['doubleEncode']));

$output137 .= '" target="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments143 = array();
$arguments143['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'target', $renderingContext);
$arguments143['keepQuotes'] = false;
$arguments143['encoding'] = NULL;
$arguments143['doubleEncode'] = true;
$renderChildrenClosure144 = function() {return NULL;};
$value145 = ($arguments143['value'] !== NULL ? $arguments143['value'] : $renderChildrenClosure144());

$output137 .= (!is_string($value145) ? $value145 : htmlspecialchars($value145, ($arguments143['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments143['encoding'] !== NULL ? $arguments143['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments143['doubleEncode']));

$output137 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments146 = array();
$arguments146['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'title', $renderingContext);
$arguments146['keepQuotes'] = false;
$arguments146['encoding'] = NULL;
$arguments146['doubleEncode'] = true;
$renderChildrenClosure147 = function() {return NULL;};
$value148 = ($arguments146['value'] !== NULL ? $arguments146['value'] : $renderChildrenClosure147());

$output137 .= (!is_string($value148) ? $value148 : htmlspecialchars($value148, ($arguments146['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments146['encoding'] !== NULL ? $arguments146['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments146['doubleEncode']));

$output137 .= '">
                                                                    <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments149 = array();
$arguments149['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'title', $renderingContext);
$arguments149['keepQuotes'] = false;
$arguments149['encoding'] = NULL;
$arguments149['doubleEncode'] = true;
$renderChildrenClosure150 = function() {return NULL;};
$value151 = ($arguments149['value'] !== NULL ? $arguments149['value'] : $renderChildrenClosure150());

$output137 .= (!is_string($value151) ? $value151 : htmlspecialchars($value151, ($arguments149['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments149['encoding'] !== NULL ? $arguments149['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments149['doubleEncode']));

$output137 .= '</span>
                                                                </a>
                                                            </li>
                                                        ';
return $output137;
};

$output128 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);

$output128 .= '
                                                    ';
return $output128;
};
$arguments126['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output152 = '';

$output152 .= '
                                                            <li class="dropdown-header">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments153 = array();
$arguments153['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'title', $renderingContext);
$arguments153['keepQuotes'] = false;
$arguments153['encoding'] = NULL;
$arguments153['doubleEncode'] = true;
$renderChildrenClosure154 = function() {return NULL;};
$value155 = ($arguments153['value'] !== NULL ? $arguments153['value'] : $renderChildrenClosure154());

$output152 .= (!is_string($value155) ? $value155 : htmlspecialchars($value155, ($arguments153['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments153['encoding'] !== NULL ? $arguments153['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments153['doubleEncode']));

$output152 .= '</li>
                                                        ';
return $output152;
};
$arguments126['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output156 = '';

$output156 .= '
                                                            <li class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments157 = array();
// Rendering Boolean node
$arguments157['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'active', $renderingContext));
$arguments157['then'] = 'active';
$arguments157['else'] = NULL;
$renderChildrenClosure158 = function() {return NULL;};

$output156 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext);

$output156 .= '">
                                                                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments159 = array();
$arguments159['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'link', $renderingContext);
$arguments159['keepQuotes'] = false;
$arguments159['encoding'] = NULL;
$arguments159['doubleEncode'] = true;
$renderChildrenClosure160 = function() {return NULL;};
$value161 = ($arguments159['value'] !== NULL ? $arguments159['value'] : $renderChildrenClosure160());

$output156 .= (!is_string($value161) ? $value161 : htmlspecialchars($value161, ($arguments159['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments159['encoding'] !== NULL ? $arguments159['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments159['doubleEncode']));

$output156 .= '" target="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments162 = array();
$arguments162['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'target', $renderingContext);
$arguments162['keepQuotes'] = false;
$arguments162['encoding'] = NULL;
$arguments162['doubleEncode'] = true;
$renderChildrenClosure163 = function() {return NULL;};
$value164 = ($arguments162['value'] !== NULL ? $arguments162['value'] : $renderChildrenClosure163());

$output156 .= (!is_string($value164) ? $value164 : htmlspecialchars($value164, ($arguments162['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments162['encoding'] !== NULL ? $arguments162['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments162['doubleEncode']));

$output156 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments165 = array();
$arguments165['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'title', $renderingContext);
$arguments165['keepQuotes'] = false;
$arguments165['encoding'] = NULL;
$arguments165['doubleEncode'] = true;
$renderChildrenClosure166 = function() {return NULL;};
$value167 = ($arguments165['value'] !== NULL ? $arguments165['value'] : $renderChildrenClosure166());

$output156 .= (!is_string($value167) ? $value167 : htmlspecialchars($value167, ($arguments165['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments165['encoding'] !== NULL ? $arguments165['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments165['doubleEncode']));

$output156 .= '">
                                                                    <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments168 = array();
$arguments168['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'title', $renderingContext);
$arguments168['keepQuotes'] = false;
$arguments168['encoding'] = NULL;
$arguments168['doubleEncode'] = true;
$renderChildrenClosure169 = function() {return NULL;};
$value170 = ($arguments168['value'] !== NULL ? $arguments168['value'] : $renderChildrenClosure169());

$output156 .= (!is_string($value170) ? $value170 : htmlspecialchars($value170, ($arguments168['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments168['encoding'] !== NULL ? $arguments168['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments168['doubleEncode']));

$output156 .= '</span>
                                                                </a>
                                                            </li>
                                                        ';
return $output156;
};

$output125 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext);

$output125 .= '
                                                ';
return $output125;
};

$output119 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);

$output119 .= '
                                            </ul>
                                        ';
return $output119;
};

$output116 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);

$output116 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments171 = array();
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output173 = '';

$output173 .= '
                                            <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments174 = array();
$arguments174['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainnavigationItem'), 'link', $renderingContext);
$arguments174['keepQuotes'] = false;
$arguments174['encoding'] = NULL;
$arguments174['doubleEncode'] = true;
$renderChildrenClosure175 = function() {return NULL;};
$value176 = ($arguments174['value'] !== NULL ? $arguments174['value'] : $renderChildrenClosure175());

$output173 .= (!is_string($value176) ? $value176 : htmlspecialchars($value176, ($arguments174['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments174['encoding'] !== NULL ? $arguments174['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments174['doubleEncode']));

$output173 .= '" target="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments177 = array();
$arguments177['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainnavigationItem'), 'target', $renderingContext);
$arguments177['keepQuotes'] = false;
$arguments177['encoding'] = NULL;
$arguments177['doubleEncode'] = true;
$renderChildrenClosure178 = function() {return NULL;};
$value179 = ($arguments177['value'] !== NULL ? $arguments177['value'] : $renderChildrenClosure178());

$output173 .= (!is_string($value179) ? $value179 : htmlspecialchars($value179, ($arguments177['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments177['encoding'] !== NULL ? $arguments177['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments177['doubleEncode']));

$output173 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments180 = array();
$arguments180['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainnavigationItem'), 'title', $renderingContext);
$arguments180['keepQuotes'] = false;
$arguments180['encoding'] = NULL;
$arguments180['doubleEncode'] = true;
$renderChildrenClosure181 = function() {return NULL;};
$value182 = ($arguments180['value'] !== NULL ? $arguments180['value'] : $renderChildrenClosure181());

$output173 .= (!is_string($value182) ? $value182 : htmlspecialchars($value182, ($arguments180['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments180['encoding'] !== NULL ? $arguments180['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments180['doubleEncode']));

$output173 .= '">
                                                <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments183 = array();
$arguments183['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainnavigationItem'), 'title', $renderingContext);
$arguments183['keepQuotes'] = false;
$arguments183['encoding'] = NULL;
$arguments183['doubleEncode'] = true;
$renderChildrenClosure184 = function() {return NULL;};
$value185 = ($arguments183['value'] !== NULL ? $arguments183['value'] : $renderChildrenClosure184());

$output173 .= (!is_string($value185) ? $value185 : htmlspecialchars($value185, ($arguments183['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments183['encoding'] !== NULL ? $arguments183['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments183['doubleEncode']));

$output173 .= '</span>
                                                <span class="bar"></span>
                                            </a>
                                        ';
return $output173;
};

$output116 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments171, $renderChildrenClosure172, $renderingContext);

$output116 .= '
                                    ';
return $output116;
};
$arguments114['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output186 = '';

$output186 .= '
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments187 = array();
$arguments187['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainnavigationItem'), 'title', $renderingContext);
$arguments187['keepQuotes'] = false;
$arguments187['encoding'] = NULL;
$arguments187['doubleEncode'] = true;
$renderChildrenClosure188 = function() {return NULL;};
$value189 = ($arguments187['value'] !== NULL ? $arguments187['value'] : $renderChildrenClosure188());

$output186 .= (!is_string($value189) ? $value189 : htmlspecialchars($value189, ($arguments187['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments187['encoding'] !== NULL ? $arguments187['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments187['doubleEncode']));

$output186 .= '</span>
                                                <b class="caret"></b>
                                                <span class="bar"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments190 = array();
$arguments190['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainnavigationItem'), 'children', $renderingContext);
$arguments190['as'] = 'child';
$arguments190['key'] = '';
$arguments190['reverse'] = false;
$arguments190['iteration'] = NULL;
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output192 = '';

$output192 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments193 = array();
// Rendering Boolean node
$arguments193['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'spacer', $renderingContext));
$arguments193['then'] = NULL;
$arguments193['else'] = NULL;
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output195 = '';

$output195 .= '
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments196 = array();
$renderChildrenClosure197 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output198 = '';

$output198 .= '
                                                            <li class="dropdown-header">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments199 = array();
$arguments199['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'title', $renderingContext);
$arguments199['keepQuotes'] = false;
$arguments199['encoding'] = NULL;
$arguments199['doubleEncode'] = true;
$renderChildrenClosure200 = function() {return NULL;};
$value201 = ($arguments199['value'] !== NULL ? $arguments199['value'] : $renderChildrenClosure200());

$output198 .= (!is_string($value201) ? $value201 : htmlspecialchars($value201, ($arguments199['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments199['encoding'] !== NULL ? $arguments199['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments199['doubleEncode']));

$output198 .= '</li>
                                                        ';
return $output198;
};

$output195 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments196, $renderChildrenClosure197, $renderingContext);

$output195 .= '
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments202 = array();
$renderChildrenClosure203 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output204 = '';

$output204 .= '
                                                            <li class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments205 = array();
// Rendering Boolean node
$arguments205['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'active', $renderingContext));
$arguments205['then'] = 'active';
$arguments205['else'] = NULL;
$renderChildrenClosure206 = function() {return NULL;};

$output204 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments205, $renderChildrenClosure206, $renderingContext);

$output204 .= '">
                                                                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments207 = array();
$arguments207['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'link', $renderingContext);
$arguments207['keepQuotes'] = false;
$arguments207['encoding'] = NULL;
$arguments207['doubleEncode'] = true;
$renderChildrenClosure208 = function() {return NULL;};
$value209 = ($arguments207['value'] !== NULL ? $arguments207['value'] : $renderChildrenClosure208());

$output204 .= (!is_string($value209) ? $value209 : htmlspecialchars($value209, ($arguments207['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments207['encoding'] !== NULL ? $arguments207['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments207['doubleEncode']));

$output204 .= '" target="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments210 = array();
$arguments210['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'target', $renderingContext);
$arguments210['keepQuotes'] = false;
$arguments210['encoding'] = NULL;
$arguments210['doubleEncode'] = true;
$renderChildrenClosure211 = function() {return NULL;};
$value212 = ($arguments210['value'] !== NULL ? $arguments210['value'] : $renderChildrenClosure211());

$output204 .= (!is_string($value212) ? $value212 : htmlspecialchars($value212, ($arguments210['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments210['encoding'] !== NULL ? $arguments210['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments210['doubleEncode']));

$output204 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments213 = array();
$arguments213['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'title', $renderingContext);
$arguments213['keepQuotes'] = false;
$arguments213['encoding'] = NULL;
$arguments213['doubleEncode'] = true;
$renderChildrenClosure214 = function() {return NULL;};
$value215 = ($arguments213['value'] !== NULL ? $arguments213['value'] : $renderChildrenClosure214());

$output204 .= (!is_string($value215) ? $value215 : htmlspecialchars($value215, ($arguments213['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments213['encoding'] !== NULL ? $arguments213['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments213['doubleEncode']));

$output204 .= '">
                                                                    <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments216 = array();
$arguments216['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'title', $renderingContext);
$arguments216['keepQuotes'] = false;
$arguments216['encoding'] = NULL;
$arguments216['doubleEncode'] = true;
$renderChildrenClosure217 = function() {return NULL;};
$value218 = ($arguments216['value'] !== NULL ? $arguments216['value'] : $renderChildrenClosure217());

$output204 .= (!is_string($value218) ? $value218 : htmlspecialchars($value218, ($arguments216['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments216['encoding'] !== NULL ? $arguments216['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments216['doubleEncode']));

$output204 .= '</span>
                                                                </a>
                                                            </li>
                                                        ';
return $output204;
};

$output195 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext);

$output195 .= '
                                                    ';
return $output195;
};
$arguments193['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output219 = '';

$output219 .= '
                                                            <li class="dropdown-header">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments220 = array();
$arguments220['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'title', $renderingContext);
$arguments220['keepQuotes'] = false;
$arguments220['encoding'] = NULL;
$arguments220['doubleEncode'] = true;
$renderChildrenClosure221 = function() {return NULL;};
$value222 = ($arguments220['value'] !== NULL ? $arguments220['value'] : $renderChildrenClosure221());

$output219 .= (!is_string($value222) ? $value222 : htmlspecialchars($value222, ($arguments220['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments220['encoding'] !== NULL ? $arguments220['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments220['doubleEncode']));

$output219 .= '</li>
                                                        ';
return $output219;
};
$arguments193['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output223 = '';

$output223 .= '
                                                            <li class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments224 = array();
// Rendering Boolean node
$arguments224['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'active', $renderingContext));
$arguments224['then'] = 'active';
$arguments224['else'] = NULL;
$renderChildrenClosure225 = function() {return NULL;};

$output223 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments224, $renderChildrenClosure225, $renderingContext);

$output223 .= '">
                                                                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments226 = array();
$arguments226['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'link', $renderingContext);
$arguments226['keepQuotes'] = false;
$arguments226['encoding'] = NULL;
$arguments226['doubleEncode'] = true;
$renderChildrenClosure227 = function() {return NULL;};
$value228 = ($arguments226['value'] !== NULL ? $arguments226['value'] : $renderChildrenClosure227());

$output223 .= (!is_string($value228) ? $value228 : htmlspecialchars($value228, ($arguments226['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments226['encoding'] !== NULL ? $arguments226['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments226['doubleEncode']));

$output223 .= '" target="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments229 = array();
$arguments229['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'target', $renderingContext);
$arguments229['keepQuotes'] = false;
$arguments229['encoding'] = NULL;
$arguments229['doubleEncode'] = true;
$renderChildrenClosure230 = function() {return NULL;};
$value231 = ($arguments229['value'] !== NULL ? $arguments229['value'] : $renderChildrenClosure230());

$output223 .= (!is_string($value231) ? $value231 : htmlspecialchars($value231, ($arguments229['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments229['encoding'] !== NULL ? $arguments229['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments229['doubleEncode']));

$output223 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments232 = array();
$arguments232['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'title', $renderingContext);
$arguments232['keepQuotes'] = false;
$arguments232['encoding'] = NULL;
$arguments232['doubleEncode'] = true;
$renderChildrenClosure233 = function() {return NULL;};
$value234 = ($arguments232['value'] !== NULL ? $arguments232['value'] : $renderChildrenClosure233());

$output223 .= (!is_string($value234) ? $value234 : htmlspecialchars($value234, ($arguments232['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments232['encoding'] !== NULL ? $arguments232['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments232['doubleEncode']));

$output223 .= '">
                                                                    <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments235 = array();
$arguments235['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'title', $renderingContext);
$arguments235['keepQuotes'] = false;
$arguments235['encoding'] = NULL;
$arguments235['doubleEncode'] = true;
$renderChildrenClosure236 = function() {return NULL;};
$value237 = ($arguments235['value'] !== NULL ? $arguments235['value'] : $renderChildrenClosure236());

$output223 .= (!is_string($value237) ? $value237 : htmlspecialchars($value237, ($arguments235['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments235['encoding'] !== NULL ? $arguments235['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments235['doubleEncode']));

$output223 .= '</span>
                                                                </a>
                                                            </li>
                                                        ';
return $output223;
};

$output192 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext);

$output192 .= '
                                                ';
return $output192;
};

$output186 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext);

$output186 .= '
                                            </ul>
                                        ';
return $output186;
};
$arguments114['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output238 = '';

$output238 .= '
                                            <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments239 = array();
$arguments239['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainnavigationItem'), 'link', $renderingContext);
$arguments239['keepQuotes'] = false;
$arguments239['encoding'] = NULL;
$arguments239['doubleEncode'] = true;
$renderChildrenClosure240 = function() {return NULL;};
$value241 = ($arguments239['value'] !== NULL ? $arguments239['value'] : $renderChildrenClosure240());

$output238 .= (!is_string($value241) ? $value241 : htmlspecialchars($value241, ($arguments239['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments239['encoding'] !== NULL ? $arguments239['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments239['doubleEncode']));

$output238 .= '" target="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments242 = array();
$arguments242['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainnavigationItem'), 'target', $renderingContext);
$arguments242['keepQuotes'] = false;
$arguments242['encoding'] = NULL;
$arguments242['doubleEncode'] = true;
$renderChildrenClosure243 = function() {return NULL;};
$value244 = ($arguments242['value'] !== NULL ? $arguments242['value'] : $renderChildrenClosure243());

$output238 .= (!is_string($value244) ? $value244 : htmlspecialchars($value244, ($arguments242['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments242['encoding'] !== NULL ? $arguments242['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments242['doubleEncode']));

$output238 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments245 = array();
$arguments245['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainnavigationItem'), 'title', $renderingContext);
$arguments245['keepQuotes'] = false;
$arguments245['encoding'] = NULL;
$arguments245['doubleEncode'] = true;
$renderChildrenClosure246 = function() {return NULL;};
$value247 = ($arguments245['value'] !== NULL ? $arguments245['value'] : $renderChildrenClosure246());

$output238 .= (!is_string($value247) ? $value247 : htmlspecialchars($value247, ($arguments245['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments245['encoding'] !== NULL ? $arguments245['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments245['doubleEncode']));

$output238 .= '">
                                                <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments248 = array();
$arguments248['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainnavigationItem'), 'title', $renderingContext);
$arguments248['keepQuotes'] = false;
$arguments248['encoding'] = NULL;
$arguments248['doubleEncode'] = true;
$renderChildrenClosure249 = function() {return NULL;};
$value250 = ($arguments248['value'] !== NULL ? $arguments248['value'] : $renderChildrenClosure249());

$output238 .= (!is_string($value250) ? $value250 : htmlspecialchars($value250, ($arguments248['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments248['encoding'] !== NULL ? $arguments248['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments248['doubleEncode']));

$output238 .= '</span>
                                                <span class="bar"></span>
                                            </a>
                                        ';
return $output238;
};

$output113 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output113 .= '
                                ';
return $output113;
};

$output104 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext);

$output104 .= '
                            ';
return $output104;
};
$arguments102['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output251 = '';

$output251 .= '
                                    <p class="navbar-text">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments252 = array();
$arguments252['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainnavigationItem'), 'title', $renderingContext);
$arguments252['keepQuotes'] = false;
$arguments252['encoding'] = NULL;
$arguments252['doubleEncode'] = true;
$renderChildrenClosure253 = function() {return NULL;};
$value254 = ($arguments252['value'] !== NULL ? $arguments252['value'] : $renderChildrenClosure253());

$output251 .= (!is_string($value254) ? $value254 : htmlspecialchars($value254, ($arguments252['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments252['encoding'] !== NULL ? $arguments252['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments252['doubleEncode']));

$output251 .= '</p>
                                ';
return $output251;
};
$arguments102['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output255 = '';

$output255 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments256 = array();
// Rendering Boolean node
$arguments256['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainnavigationItem'), 'children', $renderingContext));
$arguments256['then'] = NULL;
$arguments256['else'] = NULL;
$renderChildrenClosure257 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output258 = '';

$output258 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments259 = array();
$renderChildrenClosure260 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output261 = '';

$output261 .= '
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments262 = array();
$arguments262['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainnavigationItem'), 'title', $renderingContext);
$arguments262['keepQuotes'] = false;
$arguments262['encoding'] = NULL;
$arguments262['doubleEncode'] = true;
$renderChildrenClosure263 = function() {return NULL;};
$value264 = ($arguments262['value'] !== NULL ? $arguments262['value'] : $renderChildrenClosure263());

$output261 .= (!is_string($value264) ? $value264 : htmlspecialchars($value264, ($arguments262['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments262['encoding'] !== NULL ? $arguments262['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments262['doubleEncode']));

$output261 .= '</span>
                                                <b class="caret"></b>
                                                <span class="bar"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments265 = array();
$arguments265['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainnavigationItem'), 'children', $renderingContext);
$arguments265['as'] = 'child';
$arguments265['key'] = '';
$arguments265['reverse'] = false;
$arguments265['iteration'] = NULL;
$renderChildrenClosure266 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output267 = '';

$output267 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments268 = array();
// Rendering Boolean node
$arguments268['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'spacer', $renderingContext));
$arguments268['then'] = NULL;
$arguments268['else'] = NULL;
$renderChildrenClosure269 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output270 = '';

$output270 .= '
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments271 = array();
$renderChildrenClosure272 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output273 = '';

$output273 .= '
                                                            <li class="dropdown-header">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments274 = array();
$arguments274['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'title', $renderingContext);
$arguments274['keepQuotes'] = false;
$arguments274['encoding'] = NULL;
$arguments274['doubleEncode'] = true;
$renderChildrenClosure275 = function() {return NULL;};
$value276 = ($arguments274['value'] !== NULL ? $arguments274['value'] : $renderChildrenClosure275());

$output273 .= (!is_string($value276) ? $value276 : htmlspecialchars($value276, ($arguments274['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments274['encoding'] !== NULL ? $arguments274['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments274['doubleEncode']));

$output273 .= '</li>
                                                        ';
return $output273;
};

$output270 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments271, $renderChildrenClosure272, $renderingContext);

$output270 .= '
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments277 = array();
$renderChildrenClosure278 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output279 = '';

$output279 .= '
                                                            <li class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments280 = array();
// Rendering Boolean node
$arguments280['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'active', $renderingContext));
$arguments280['then'] = 'active';
$arguments280['else'] = NULL;
$renderChildrenClosure281 = function() {return NULL;};

$output279 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments280, $renderChildrenClosure281, $renderingContext);

$output279 .= '">
                                                                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments282 = array();
$arguments282['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'link', $renderingContext);
$arguments282['keepQuotes'] = false;
$arguments282['encoding'] = NULL;
$arguments282['doubleEncode'] = true;
$renderChildrenClosure283 = function() {return NULL;};
$value284 = ($arguments282['value'] !== NULL ? $arguments282['value'] : $renderChildrenClosure283());

$output279 .= (!is_string($value284) ? $value284 : htmlspecialchars($value284, ($arguments282['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments282['encoding'] !== NULL ? $arguments282['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments282['doubleEncode']));

$output279 .= '" target="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments285 = array();
$arguments285['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'target', $renderingContext);
$arguments285['keepQuotes'] = false;
$arguments285['encoding'] = NULL;
$arguments285['doubleEncode'] = true;
$renderChildrenClosure286 = function() {return NULL;};
$value287 = ($arguments285['value'] !== NULL ? $arguments285['value'] : $renderChildrenClosure286());

$output279 .= (!is_string($value287) ? $value287 : htmlspecialchars($value287, ($arguments285['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments285['encoding'] !== NULL ? $arguments285['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments285['doubleEncode']));

$output279 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments288 = array();
$arguments288['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'title', $renderingContext);
$arguments288['keepQuotes'] = false;
$arguments288['encoding'] = NULL;
$arguments288['doubleEncode'] = true;
$renderChildrenClosure289 = function() {return NULL;};
$value290 = ($arguments288['value'] !== NULL ? $arguments288['value'] : $renderChildrenClosure289());

$output279 .= (!is_string($value290) ? $value290 : htmlspecialchars($value290, ($arguments288['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments288['encoding'] !== NULL ? $arguments288['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments288['doubleEncode']));

$output279 .= '">
                                                                    <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments291 = array();
$arguments291['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'title', $renderingContext);
$arguments291['keepQuotes'] = false;
$arguments291['encoding'] = NULL;
$arguments291['doubleEncode'] = true;
$renderChildrenClosure292 = function() {return NULL;};
$value293 = ($arguments291['value'] !== NULL ? $arguments291['value'] : $renderChildrenClosure292());

$output279 .= (!is_string($value293) ? $value293 : htmlspecialchars($value293, ($arguments291['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments291['encoding'] !== NULL ? $arguments291['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments291['doubleEncode']));

$output279 .= '</span>
                                                                </a>
                                                            </li>
                                                        ';
return $output279;
};

$output270 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments277, $renderChildrenClosure278, $renderingContext);

$output270 .= '
                                                    ';
return $output270;
};
$arguments268['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output294 = '';

$output294 .= '
                                                            <li class="dropdown-header">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments295 = array();
$arguments295['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'title', $renderingContext);
$arguments295['keepQuotes'] = false;
$arguments295['encoding'] = NULL;
$arguments295['doubleEncode'] = true;
$renderChildrenClosure296 = function() {return NULL;};
$value297 = ($arguments295['value'] !== NULL ? $arguments295['value'] : $renderChildrenClosure296());

$output294 .= (!is_string($value297) ? $value297 : htmlspecialchars($value297, ($arguments295['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments295['encoding'] !== NULL ? $arguments295['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments295['doubleEncode']));

$output294 .= '</li>
                                                        ';
return $output294;
};
$arguments268['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output298 = '';

$output298 .= '
                                                            <li class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments299 = array();
// Rendering Boolean node
$arguments299['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'active', $renderingContext));
$arguments299['then'] = 'active';
$arguments299['else'] = NULL;
$renderChildrenClosure300 = function() {return NULL;};

$output298 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments299, $renderChildrenClosure300, $renderingContext);

$output298 .= '">
                                                                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments301 = array();
$arguments301['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'link', $renderingContext);
$arguments301['keepQuotes'] = false;
$arguments301['encoding'] = NULL;
$arguments301['doubleEncode'] = true;
$renderChildrenClosure302 = function() {return NULL;};
$value303 = ($arguments301['value'] !== NULL ? $arguments301['value'] : $renderChildrenClosure302());

$output298 .= (!is_string($value303) ? $value303 : htmlspecialchars($value303, ($arguments301['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments301['encoding'] !== NULL ? $arguments301['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments301['doubleEncode']));

$output298 .= '" target="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments304 = array();
$arguments304['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'target', $renderingContext);
$arguments304['keepQuotes'] = false;
$arguments304['encoding'] = NULL;
$arguments304['doubleEncode'] = true;
$renderChildrenClosure305 = function() {return NULL;};
$value306 = ($arguments304['value'] !== NULL ? $arguments304['value'] : $renderChildrenClosure305());

$output298 .= (!is_string($value306) ? $value306 : htmlspecialchars($value306, ($arguments304['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments304['encoding'] !== NULL ? $arguments304['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments304['doubleEncode']));

$output298 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments307 = array();
$arguments307['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'title', $renderingContext);
$arguments307['keepQuotes'] = false;
$arguments307['encoding'] = NULL;
$arguments307['doubleEncode'] = true;
$renderChildrenClosure308 = function() {return NULL;};
$value309 = ($arguments307['value'] !== NULL ? $arguments307['value'] : $renderChildrenClosure308());

$output298 .= (!is_string($value309) ? $value309 : htmlspecialchars($value309, ($arguments307['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments307['encoding'] !== NULL ? $arguments307['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments307['doubleEncode']));

$output298 .= '">
                                                                    <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments310 = array();
$arguments310['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'title', $renderingContext);
$arguments310['keepQuotes'] = false;
$arguments310['encoding'] = NULL;
$arguments310['doubleEncode'] = true;
$renderChildrenClosure311 = function() {return NULL;};
$value312 = ($arguments310['value'] !== NULL ? $arguments310['value'] : $renderChildrenClosure311());

$output298 .= (!is_string($value312) ? $value312 : htmlspecialchars($value312, ($arguments310['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments310['encoding'] !== NULL ? $arguments310['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments310['doubleEncode']));

$output298 .= '</span>
                                                                </a>
                                                            </li>
                                                        ';
return $output298;
};

$output267 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments268, $renderChildrenClosure269, $renderingContext);

$output267 .= '
                                                ';
return $output267;
};

$output261 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments265, $renderChildrenClosure266, $renderingContext);

$output261 .= '
                                            </ul>
                                        ';
return $output261;
};

$output258 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments259, $renderChildrenClosure260, $renderingContext);

$output258 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments313 = array();
$renderChildrenClosure314 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output315 = '';

$output315 .= '
                                            <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments316 = array();
$arguments316['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainnavigationItem'), 'link', $renderingContext);
$arguments316['keepQuotes'] = false;
$arguments316['encoding'] = NULL;
$arguments316['doubleEncode'] = true;
$renderChildrenClosure317 = function() {return NULL;};
$value318 = ($arguments316['value'] !== NULL ? $arguments316['value'] : $renderChildrenClosure317());

$output315 .= (!is_string($value318) ? $value318 : htmlspecialchars($value318, ($arguments316['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments316['encoding'] !== NULL ? $arguments316['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments316['doubleEncode']));

$output315 .= '" target="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments319 = array();
$arguments319['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainnavigationItem'), 'target', $renderingContext);
$arguments319['keepQuotes'] = false;
$arguments319['encoding'] = NULL;
$arguments319['doubleEncode'] = true;
$renderChildrenClosure320 = function() {return NULL;};
$value321 = ($arguments319['value'] !== NULL ? $arguments319['value'] : $renderChildrenClosure320());

$output315 .= (!is_string($value321) ? $value321 : htmlspecialchars($value321, ($arguments319['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments319['encoding'] !== NULL ? $arguments319['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments319['doubleEncode']));

$output315 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments322 = array();
$arguments322['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainnavigationItem'), 'title', $renderingContext);
$arguments322['keepQuotes'] = false;
$arguments322['encoding'] = NULL;
$arguments322['doubleEncode'] = true;
$renderChildrenClosure323 = function() {return NULL;};
$value324 = ($arguments322['value'] !== NULL ? $arguments322['value'] : $renderChildrenClosure323());

$output315 .= (!is_string($value324) ? $value324 : htmlspecialchars($value324, ($arguments322['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments322['encoding'] !== NULL ? $arguments322['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments322['doubleEncode']));

$output315 .= '">
                                                <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments325 = array();
$arguments325['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainnavigationItem'), 'title', $renderingContext);
$arguments325['keepQuotes'] = false;
$arguments325['encoding'] = NULL;
$arguments325['doubleEncode'] = true;
$renderChildrenClosure326 = function() {return NULL;};
$value327 = ($arguments325['value'] !== NULL ? $arguments325['value'] : $renderChildrenClosure326());

$output315 .= (!is_string($value327) ? $value327 : htmlspecialchars($value327, ($arguments325['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments325['encoding'] !== NULL ? $arguments325['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments325['doubleEncode']));

$output315 .= '</span>
                                                <span class="bar"></span>
                                            </a>
                                        ';
return $output315;
};

$output258 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments313, $renderChildrenClosure314, $renderingContext);

$output258 .= '
                                    ';
return $output258;
};
$arguments256['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output328 = '';

$output328 .= '
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments329 = array();
$arguments329['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainnavigationItem'), 'title', $renderingContext);
$arguments329['keepQuotes'] = false;
$arguments329['encoding'] = NULL;
$arguments329['doubleEncode'] = true;
$renderChildrenClosure330 = function() {return NULL;};
$value331 = ($arguments329['value'] !== NULL ? $arguments329['value'] : $renderChildrenClosure330());

$output328 .= (!is_string($value331) ? $value331 : htmlspecialchars($value331, ($arguments329['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments329['encoding'] !== NULL ? $arguments329['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments329['doubleEncode']));

$output328 .= '</span>
                                                <b class="caret"></b>
                                                <span class="bar"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments332 = array();
$arguments332['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainnavigationItem'), 'children', $renderingContext);
$arguments332['as'] = 'child';
$arguments332['key'] = '';
$arguments332['reverse'] = false;
$arguments332['iteration'] = NULL;
$renderChildrenClosure333 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output334 = '';

$output334 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments335 = array();
// Rendering Boolean node
$arguments335['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'spacer', $renderingContext));
$arguments335['then'] = NULL;
$arguments335['else'] = NULL;
$renderChildrenClosure336 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output337 = '';

$output337 .= '
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments338 = array();
$renderChildrenClosure339 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output340 = '';

$output340 .= '
                                                            <li class="dropdown-header">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments341 = array();
$arguments341['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'title', $renderingContext);
$arguments341['keepQuotes'] = false;
$arguments341['encoding'] = NULL;
$arguments341['doubleEncode'] = true;
$renderChildrenClosure342 = function() {return NULL;};
$value343 = ($arguments341['value'] !== NULL ? $arguments341['value'] : $renderChildrenClosure342());

$output340 .= (!is_string($value343) ? $value343 : htmlspecialchars($value343, ($arguments341['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments341['encoding'] !== NULL ? $arguments341['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments341['doubleEncode']));

$output340 .= '</li>
                                                        ';
return $output340;
};

$output337 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments338, $renderChildrenClosure339, $renderingContext);

$output337 .= '
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments344 = array();
$renderChildrenClosure345 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output346 = '';

$output346 .= '
                                                            <li class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments347 = array();
// Rendering Boolean node
$arguments347['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'active', $renderingContext));
$arguments347['then'] = 'active';
$arguments347['else'] = NULL;
$renderChildrenClosure348 = function() {return NULL;};

$output346 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments347, $renderChildrenClosure348, $renderingContext);

$output346 .= '">
                                                                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments349 = array();
$arguments349['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'link', $renderingContext);
$arguments349['keepQuotes'] = false;
$arguments349['encoding'] = NULL;
$arguments349['doubleEncode'] = true;
$renderChildrenClosure350 = function() {return NULL;};
$value351 = ($arguments349['value'] !== NULL ? $arguments349['value'] : $renderChildrenClosure350());

$output346 .= (!is_string($value351) ? $value351 : htmlspecialchars($value351, ($arguments349['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments349['encoding'] !== NULL ? $arguments349['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments349['doubleEncode']));

$output346 .= '" target="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments352 = array();
$arguments352['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'target', $renderingContext);
$arguments352['keepQuotes'] = false;
$arguments352['encoding'] = NULL;
$arguments352['doubleEncode'] = true;
$renderChildrenClosure353 = function() {return NULL;};
$value354 = ($arguments352['value'] !== NULL ? $arguments352['value'] : $renderChildrenClosure353());

$output346 .= (!is_string($value354) ? $value354 : htmlspecialchars($value354, ($arguments352['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments352['encoding'] !== NULL ? $arguments352['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments352['doubleEncode']));

$output346 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments355 = array();
$arguments355['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'title', $renderingContext);
$arguments355['keepQuotes'] = false;
$arguments355['encoding'] = NULL;
$arguments355['doubleEncode'] = true;
$renderChildrenClosure356 = function() {return NULL;};
$value357 = ($arguments355['value'] !== NULL ? $arguments355['value'] : $renderChildrenClosure356());

$output346 .= (!is_string($value357) ? $value357 : htmlspecialchars($value357, ($arguments355['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments355['encoding'] !== NULL ? $arguments355['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments355['doubleEncode']));

$output346 .= '">
                                                                    <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments358 = array();
$arguments358['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'title', $renderingContext);
$arguments358['keepQuotes'] = false;
$arguments358['encoding'] = NULL;
$arguments358['doubleEncode'] = true;
$renderChildrenClosure359 = function() {return NULL;};
$value360 = ($arguments358['value'] !== NULL ? $arguments358['value'] : $renderChildrenClosure359());

$output346 .= (!is_string($value360) ? $value360 : htmlspecialchars($value360, ($arguments358['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments358['encoding'] !== NULL ? $arguments358['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments358['doubleEncode']));

$output346 .= '</span>
                                                                </a>
                                                            </li>
                                                        ';
return $output346;
};

$output337 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments344, $renderChildrenClosure345, $renderingContext);

$output337 .= '
                                                    ';
return $output337;
};
$arguments335['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output361 = '';

$output361 .= '
                                                            <li class="dropdown-header">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments362 = array();
$arguments362['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'title', $renderingContext);
$arguments362['keepQuotes'] = false;
$arguments362['encoding'] = NULL;
$arguments362['doubleEncode'] = true;
$renderChildrenClosure363 = function() {return NULL;};
$value364 = ($arguments362['value'] !== NULL ? $arguments362['value'] : $renderChildrenClosure363());

$output361 .= (!is_string($value364) ? $value364 : htmlspecialchars($value364, ($arguments362['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments362['encoding'] !== NULL ? $arguments362['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments362['doubleEncode']));

$output361 .= '</li>
                                                        ';
return $output361;
};
$arguments335['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output365 = '';

$output365 .= '
                                                            <li class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments366 = array();
// Rendering Boolean node
$arguments366['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'active', $renderingContext));
$arguments366['then'] = 'active';
$arguments366['else'] = NULL;
$renderChildrenClosure367 = function() {return NULL;};

$output365 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments366, $renderChildrenClosure367, $renderingContext);

$output365 .= '">
                                                                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments368 = array();
$arguments368['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'link', $renderingContext);
$arguments368['keepQuotes'] = false;
$arguments368['encoding'] = NULL;
$arguments368['doubleEncode'] = true;
$renderChildrenClosure369 = function() {return NULL;};
$value370 = ($arguments368['value'] !== NULL ? $arguments368['value'] : $renderChildrenClosure369());

$output365 .= (!is_string($value370) ? $value370 : htmlspecialchars($value370, ($arguments368['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments368['encoding'] !== NULL ? $arguments368['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments368['doubleEncode']));

$output365 .= '" target="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments371 = array();
$arguments371['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'target', $renderingContext);
$arguments371['keepQuotes'] = false;
$arguments371['encoding'] = NULL;
$arguments371['doubleEncode'] = true;
$renderChildrenClosure372 = function() {return NULL;};
$value373 = ($arguments371['value'] !== NULL ? $arguments371['value'] : $renderChildrenClosure372());

$output365 .= (!is_string($value373) ? $value373 : htmlspecialchars($value373, ($arguments371['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments371['encoding'] !== NULL ? $arguments371['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments371['doubleEncode']));

$output365 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments374 = array();
$arguments374['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'title', $renderingContext);
$arguments374['keepQuotes'] = false;
$arguments374['encoding'] = NULL;
$arguments374['doubleEncode'] = true;
$renderChildrenClosure375 = function() {return NULL;};
$value376 = ($arguments374['value'] !== NULL ? $arguments374['value'] : $renderChildrenClosure375());

$output365 .= (!is_string($value376) ? $value376 : htmlspecialchars($value376, ($arguments374['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments374['encoding'] !== NULL ? $arguments374['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments374['doubleEncode']));

$output365 .= '">
                                                                    <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments377 = array();
$arguments377['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('child'), 'title', $renderingContext);
$arguments377['keepQuotes'] = false;
$arguments377['encoding'] = NULL;
$arguments377['doubleEncode'] = true;
$renderChildrenClosure378 = function() {return NULL;};
$value379 = ($arguments377['value'] !== NULL ? $arguments377['value'] : $renderChildrenClosure378());

$output365 .= (!is_string($value379) ? $value379 : htmlspecialchars($value379, ($arguments377['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments377['encoding'] !== NULL ? $arguments377['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments377['doubleEncode']));

$output365 .= '</span>
                                                                </a>
                                                            </li>
                                                        ';
return $output365;
};

$output334 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments335, $renderChildrenClosure336, $renderingContext);

$output334 .= '
                                                ';
return $output334;
};

$output328 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments332, $renderChildrenClosure333, $renderingContext);

$output328 .= '
                                            </ul>
                                        ';
return $output328;
};
$arguments256['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output380 = '';

$output380 .= '
                                            <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments381 = array();
$arguments381['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainnavigationItem'), 'link', $renderingContext);
$arguments381['keepQuotes'] = false;
$arguments381['encoding'] = NULL;
$arguments381['doubleEncode'] = true;
$renderChildrenClosure382 = function() {return NULL;};
$value383 = ($arguments381['value'] !== NULL ? $arguments381['value'] : $renderChildrenClosure382());

$output380 .= (!is_string($value383) ? $value383 : htmlspecialchars($value383, ($arguments381['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments381['encoding'] !== NULL ? $arguments381['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments381['doubleEncode']));

$output380 .= '" target="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments384 = array();
$arguments384['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainnavigationItem'), 'target', $renderingContext);
$arguments384['keepQuotes'] = false;
$arguments384['encoding'] = NULL;
$arguments384['doubleEncode'] = true;
$renderChildrenClosure385 = function() {return NULL;};
$value386 = ($arguments384['value'] !== NULL ? $arguments384['value'] : $renderChildrenClosure385());

$output380 .= (!is_string($value386) ? $value386 : htmlspecialchars($value386, ($arguments384['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments384['encoding'] !== NULL ? $arguments384['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments384['doubleEncode']));

$output380 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments387 = array();
$arguments387['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainnavigationItem'), 'title', $renderingContext);
$arguments387['keepQuotes'] = false;
$arguments387['encoding'] = NULL;
$arguments387['doubleEncode'] = true;
$renderChildrenClosure388 = function() {return NULL;};
$value389 = ($arguments387['value'] !== NULL ? $arguments387['value'] : $renderChildrenClosure388());

$output380 .= (!is_string($value389) ? $value389 : htmlspecialchars($value389, ($arguments387['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments387['encoding'] !== NULL ? $arguments387['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments387['doubleEncode']));

$output380 .= '">
                                                <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments390 = array();
$arguments390['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainnavigationItem'), 'title', $renderingContext);
$arguments390['keepQuotes'] = false;
$arguments390['encoding'] = NULL;
$arguments390['doubleEncode'] = true;
$renderChildrenClosure391 = function() {return NULL;};
$value392 = ($arguments390['value'] !== NULL ? $arguments390['value'] : $renderChildrenClosure391());

$output380 .= (!is_string($value392) ? $value392 : htmlspecialchars($value392, ($arguments390['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments390['encoding'] !== NULL ? $arguments390['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments390['doubleEncode']));

$output380 .= '</span>
                                                <span class="bar"></span>
                                            </a>
                                        ';
return $output380;
};

$output255 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments256, $renderChildrenClosure257, $renderingContext);

$output255 .= '
                                ';
return $output255;
};

$output97 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output97 .= '
                        </li>
                    ';
return $output97;
};

$output94 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output94 .= '
                </ul>
            </nav>
        ';
return $output94;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output0 .= '
    </div>
</header>
';


return $output0;
}


}
#1608311943    122863    