<?php

/* core/themes/classy/templates/misc/rdf-metadata.html.twig */
class __TwigTemplate_4b6aa252e01b77954543aa6b5b312c3408d891ddbdabb582c173c37b681b033d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["metadata"]) ? $context["metadata"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["attributes"]) {
            // line 19
            echo "  <span";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["attributes"], "addClass", array(0 => "rdf-meta", 1 => "hidden"), "method"), "html", null, true);
            echo "></span>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attributes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/misc/rdf-metadata.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 19,  19 => 18,);
    }
}
