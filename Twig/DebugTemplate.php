<?php
namespace Webonaute\TwigDebugHelperBundle\Twig;

class DebugTemplate extends \Twig_Template
{
	/**
	 * {@inheritDoc}
	 */
	public function display(array $context, array $blocks = array())
	{
		echo "\n<!-- START: " . $this->getTemplateName() . " -->\n";
		parent::display($context, $blocks);
		echo "\n<!-- END: " . $this->getTemplateName() . " -->\n";
	}

	/**
	 * {@inheritDoc}
	 */
	protected function doDisplay(array $context, array $blocks = array())
	{
		throw new \RuntimeException('This method should not be called. It must be overriden at runtime');
	}

	/**
	 * {@inheritDoc}
	 */
	public function getTemplateName()
	{
		throw new \RuntimeException('This method should not be called. It must be overriden at runtime.');
	}
}
