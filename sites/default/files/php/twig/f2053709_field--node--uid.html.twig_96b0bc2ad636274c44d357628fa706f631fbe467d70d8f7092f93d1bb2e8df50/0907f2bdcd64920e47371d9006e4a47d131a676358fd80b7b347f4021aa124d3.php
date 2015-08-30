<?php

/* core/themes/classy/templates/field/field--node--uid.html.twig */
class __TwigTemplate_96b0bc2ad636274c44d357628fa706f631fbe467d70d8f7092f93d1bb2e8df50 extends Twig_Template
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
        $context["classes"] = array(0 => "field", 1 => ("field--name-" .         // line 25
(isset($context["field_name_class"]) ? $context["field_name_class"] : null)), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass(        // line 26
(isset($context["field_type"]) ? $context["field_type"] : null))), 3 => ("field--label-" .         // line 27
(isset($context["label_display"]) ? $context["label_display"] : null)));
        // line 30
        echo "<span";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo ">";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 32
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/field/field--node--uid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 34,  32 => 32,  28 => 31,  24 => 30,  22 => 27,  21 => 26,  20 => 25,  19 => 23,);
    }
}
