<?php

/* themes/zircon/templates/views/views-view.html.twig */
class __TwigTemplate_c4b67519e681da86c49f05300a3639f80a516ec70a4eef2466af31cf30a3e114 extends Twig_Template
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
        // line 40
        echo "<div";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">
  ";
        // line 41
        if ((isset($context["header"]) ? $context["header"] : null)) {
            // line 42
            echo "    <div class=\"view-header\">
      ";
            // line 43
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header"]) ? $context["header"] : null), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 46
        echo "  ";
        if ((isset($context["exposed"]) ? $context["exposed"] : null)) {
            // line 47
            echo "    <div class=\"view-filters\">
      ";
            // line 48
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["exposed"]) ? $context["exposed"] : null), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 51
        echo "  ";
        if ((isset($context["attachment_before"]) ? $context["attachment_before"] : null)) {
            // line 52
            echo "    <div class=\"attachment attachment-before\">
      ";
            // line 53
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attachment_before"]) ? $context["attachment_before"] : null), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 56
        echo "
  ";
        // line 57
        if ((isset($context["rows"]) ? $context["rows"] : null)) {
            // line 58
            echo "    <div class=\"view-content\">
      ";
            // line 59
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["rows"]) ? $context["rows"] : null), "html", null, true);
            echo "
    </div>
  ";
        } elseif (        // line 61
(isset($context["empty"]) ? $context["empty"] : null)) {
            // line 62
            echo "    <div class=\"view-empty\">
      ";
            // line 63
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["empty"]) ? $context["empty"] : null), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 66
        echo "
  ";
        // line 67
        if ((isset($context["pager"]) ? $context["pager"] : null)) {
            // line 68
            echo "    ";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["pager"]) ? $context["pager"] : null), "html", null, true);
            echo "
  ";
        }
        // line 70
        echo "  ";
        if ((isset($context["attachment_after"]) ? $context["attachment_after"] : null)) {
            // line 71
            echo "    <div class=\"attachment attachment-after\">
      ";
            // line 72
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attachment_after"]) ? $context["attachment_after"] : null), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 75
        echo "  ";
        if ((isset($context["more"]) ? $context["more"] : null)) {
            // line 76
            echo "    ";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["more"]) ? $context["more"] : null), "html", null, true);
            echo "
  ";
        }
        // line 78
        echo "  ";
        if ((isset($context["footer"]) ? $context["footer"] : null)) {
            // line 79
            echo "    <div class=\"view-footer\">
      ";
            // line 80
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer"]) ? $context["footer"] : null), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 83
        echo "  ";
        if ((isset($context["feed_icons"]) ? $context["feed_icons"] : null)) {
            // line 84
            echo "    <div class=\"feed-icons\">
      ";
            // line 85
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["feed_icons"]) ? $context["feed_icons"] : null), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 88
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/zircon/templates/views/views-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 88,  133 => 85,  130 => 84,  127 => 83,  121 => 80,  118 => 79,  115 => 78,  109 => 76,  106 => 75,  100 => 72,  97 => 71,  94 => 70,  88 => 68,  86 => 67,  83 => 66,  77 => 63,  74 => 62,  72 => 61,  67 => 59,  64 => 58,  62 => 57,  59 => 56,  53 => 53,  50 => 52,  47 => 51,  41 => 48,  38 => 47,  35 => 46,  29 => 43,  26 => 42,  24 => 41,  19 => 40,);
    }
}
