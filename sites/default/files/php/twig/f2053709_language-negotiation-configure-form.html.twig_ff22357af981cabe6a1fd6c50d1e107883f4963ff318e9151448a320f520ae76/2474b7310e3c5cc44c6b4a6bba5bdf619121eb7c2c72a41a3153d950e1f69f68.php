<?php

/* core/modules/language/templates/language-negotiation-configure-form.html.twig */
class __TwigTemplate_ff22357af981cabe6a1fd6c50d1e107883f4963ff318e9151448a320f520ae76 extends Twig_Template
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
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["language_types"]) ? $context["language_types"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language_type"]) {
            // line 24
            echo "  ";
            // line 25
            $context["language_classes"] = array(0 => "form-item", 1 => "table-language-group", 2 => (("table-" . $this->getAttribute(            // line 28
$context["language_type"], "type", array())) . "-wrapper"));
            // line 31
            echo "  <div";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["language_type"], "attributes", array()), "addClass", array(0 => (isset($context["language_classes"]) ? $context["language_classes"] : null)), "method"), "html", null, true);
            echo ">
    <h2>";
            // line 32
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["language_type"], "title", array()), "html", null, true);
            echo "</h2>
    <div class=\"description\">";
            // line 33
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["language_type"], "description", array()), "html", null, true);
            echo "</div>
    ";
            // line 34
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["language_type"], "configurable", array()), "html", null, true);
            echo "
    ";
            // line 35
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["language_type"], "table", array()), "html", null, true);
            echo "
    ";
            // line 36
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["language_type"], "children", array()), "html", null, true);
            echo "
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language_type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "core/modules/language/templates/language-negotiation-configure-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 39,  49 => 36,  45 => 35,  41 => 34,  37 => 33,  33 => 32,  28 => 31,  26 => 28,  25 => 25,  23 => 24,  19 => 23,);
    }
}
