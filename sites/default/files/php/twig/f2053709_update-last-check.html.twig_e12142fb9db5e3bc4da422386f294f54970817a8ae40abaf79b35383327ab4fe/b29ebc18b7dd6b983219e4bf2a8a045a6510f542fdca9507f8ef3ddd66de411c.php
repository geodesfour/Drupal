<?php

/* core/modules/update/templates/update-last-check.html.twig */
class __TwigTemplate_e12142fb9db5e3bc4da422386f294f54970817a8ae40abaf79b35383327ab4fe extends Twig_Template
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
        echo "<p>
  ";
        // line 17
        if ((isset($context["last"]) ? $context["last"] : null)) {
            // line 18
            echo "    ";
            echo $this->env->getExtension('drupal_core')->renderVar(t("Last checked: @time ago", array("@time" => (isset($context["time"]) ? $context["time"] : null))));
            echo "
  ";
        } else {
            // line 20
            echo "    ";
            echo $this->env->getExtension('drupal_core')->renderVar(t("Last checked: never"));
            echo "
  ";
        }
        // line 22
        echo "  (";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
        echo ")
</p>
";
    }

    public function getTemplateName()
    {
        return "core/modules/update/templates/update-last-check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 22,  30 => 20,  24 => 18,  22 => 17,  19 => 16,);
    }
}
