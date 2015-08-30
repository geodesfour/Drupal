<?php

/* core/themes/classy/templates/form/datetime-wrapper.html.twig */
class __TwigTemplate_1c73ef66eaf3a2878336a557bfa7d4a96aade29b2e0598380f08dd824d73fc7f extends Twig_Template
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
        // line 17
        $context["title_classes"] = array(0 => "label", 1 => ((        // line 19
(isset($context["required"]) ? $context["required"] : null)) ? ("js-form-required") : ("")), 2 => ((        // line 20
(isset($context["required"]) ? $context["required"] : null)) ? ("form-required") : ("")));
        // line 23
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 24
            echo "  <h4";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => (isset($context["title_classes"]) ? $context["title_classes"] : null)), "method"), "html", null, true);
            echo ">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</h4>
";
        }
        // line 26
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        echo "
";
        // line 27
        if ((isset($context["errors"]) ? $context["errors"] : null)) {
            // line 28
            echo "  <div class=\"form-item--error-message\">
    <strong>";
            // line 29
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["errors"]) ? $context["errors"] : null), "html", null, true);
            echo "</strong>
  </div>
";
        }
        // line 32
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 33
            echo "  <div class=\"description\">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/datetime-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 33,  48 => 32,  42 => 29,  39 => 28,  37 => 27,  33 => 26,  25 => 24,  23 => 23,  21 => 20,  20 => 19,  19 => 17,);
    }
}
