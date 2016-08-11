<?php
namespace TwigDebugHelperBundle\Twig;

abstract class DebugTemplate extends \Twig_Template
{

    public function display(array $context, array $blocks = array())
    {
        echo "\n<!-- START: " . $this->getTemplateName() . " -->\n";
        $this->displayWithErrorHandling($this->env->mergeGlobals($context), array_merge($this->blocks, $blocks));
        echo "\n<!-- END: " . $this->getTemplateName() . " -->\n";
    }
}