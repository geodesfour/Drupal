<?php

/* core/themes/classy/templates/content-edit/text-format-wrapper.html.twig */
class __TwigTemplate_02529053f4d8e5f77d59f23b15ba735629fbec2382675641da1cdb1e1f8e24e7 extends Twig_Template
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
        // line 16
        echo "<div class=\"js-text-format-wrapper text-format-wrapper form-item\">
  ";
        // line 17
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true);
        echo "
  ";
        // line 18
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 19
            echo "    ";
            // line 20
            $context["classes"] = array(0 => ((            // line 21
(isset($context["aria_description"]) ? $context["aria_description"] : null)) ? ("description") : ("")));
            // line 24
            echo "    <div";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
            echo ">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true);
            echo "</div>
  ";
        }
        // line 26
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/content-edit/text-format-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 26,  33 => 24,  31 => 21,  30 => 20,  28 => 19,  26 => 18,  22 => 17,  19 => 16,);
    }
}
