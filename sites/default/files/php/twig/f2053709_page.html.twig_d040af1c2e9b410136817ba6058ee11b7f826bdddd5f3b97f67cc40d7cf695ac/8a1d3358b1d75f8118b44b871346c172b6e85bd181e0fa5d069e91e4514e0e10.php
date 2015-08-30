<?php

/* themes/zircon/templates/page.html.twig */
class __TwigTemplate_d040af1c2e9b410136817ba6058ee11b7f826bdddd5f3b97f67cc40d7cf695ac extends Twig_Template
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
        // line 1
        echo "<div class=\"page\">
<a name=\"Top\" id=\"Top\"></a>
<header id=\"header\" class=\"header\" role=\"header\">
  <div class=\"container\">
    ";
        // line 5
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 6
            echo "      <a id=\"logo\" href=\"";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true);
            echo "\" title=\"";
            echo $this->env->getExtension('drupal_core')->renderVar(t("Home"));
            echo "\" rel=\"home\">
        <img src=\"";
            // line 7
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["logo"]) ? $context["logo"] : null), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('drupal_core')->renderVar(t("Home"));
            echo "\"/>
      </a>
    ";
        }
        // line 10
        echo "
    ";
        // line 11
        if (((isset($context["site_name"]) ? $context["site_name"] : null) || (isset($context["site_slogan"]) ? $context["site_slogan"] : null))) {
            // line 12
            echo "      <div class=\"name-and-slogan\">

        ";
            // line 15
            echo "        ";
            if ((isset($context["title"]) ? $context["title"] : null)) {
                // line 16
                echo "          <strong class=\"site-name\">
            <a href=\"";
                // line 17
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('drupal_core')->renderVar(t("Home"));
                echo "\" rel=\"home\">";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true);
                echo "</a>
          </strong>
        ";
            } else {
                // line 20
                echo "          <h1 class=\"site-name\">
            <a href=\"";
                // line 21
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('drupal_core')->renderVar(t("Home"));
                echo "\" rel=\"home\">";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true);
                echo "</a>
          </h1>
        ";
            }
            // line 24
            echo "
        ";
            // line 25
            if ((isset($context["site_slogan"]) ? $context["site_slogan"] : null)) {
                // line 26
                echo "          <div class=\"site-slogan\">";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true);
                echo "</div>
        ";
            }
            // line 28
            echo "      </div>
   ";
        }
        // line 30
        echo "   <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-menu-inner\">
      <span class=\"sr-only\">Toggle navigation</span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
    </button>

    ";
        // line 37
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true);
        echo "
    
  </div>
</header>

  ";
        // line 42
        if (((isset($context["main_menu"]) ? $context["main_menu"] : null) || (isset($context["secondary_menu"]) ? $context["secondary_menu"] : null))) {
            // line 43
            echo "    <nav id=\"navigation\" class=\"navigation\" role=\"navigation\">
      <div class=\"container\">
        ";
            // line 45
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["main_menu"]) ? $context["main_menu"] : null), "html", null, true);
            echo "
        ";
            // line 46
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["secondary_menu"]) ? $context["secondary_menu"] : null), "html", null, true);
            echo "
      </div>
    </nav>
  ";
        }
        // line 50
        echo "
  ";
        // line 51
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_menu", array())) {
            // line 52
            echo "    <nav id=\"main-menu\" class=\"navbar navbar-default\" role=\"navigation\">\t
  \t\t  <div class=\"collapse navbar-collapse\" id=\"main-menu-inner\">
          <div class=\"container\">
            ";
            // line 55
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_menu", array()), "html", null, true);
            echo "\t\t\t\t\t\t
          </div>
        </div>
    </nav>
  ";
        }
        // line 60
        echo "
  ";
        // line 61
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slideshow", array())) {
            // line 62
            echo "    <section id=\"slideshow\" class=\"slideshow\">
      <div class=\"container\">
        ";
            // line 64
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slideshow", array()), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 68
        echo "
  ";
        // line 69
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured", array())) {
            // line 70
            echo "    <section id=\"featured\" class=\"featured\">
      <div class=\"container\">
        ";
            // line 72
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured", array()), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 76
        echo "
  ";
        // line 77
        if ((isset($context["messages"]) ? $context["messages"] : null)) {
            // line 78
            echo "    <section id=\"messages\" class=\"messages\">
      <div class=\"container\">
        ";
            // line 80
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["messages"]) ? $context["messages"] : null), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 84
        echo "
  ";
        // line 85
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 86
            echo "    <section id=\"help\" class=\"help\">
      <div class=\"container\">
        ";
            // line 88
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 91
        echo "    

  <section id=\"main\" class=\"main\" role=\"main\">
    <a id=\"main-content\"></a>
    <div class=\"container\">
      <div class=\"row\">
        
\t\t";
        // line 98
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 99
            echo "          <aside class=\"sidebar-first sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12\" role=\"complementary\">
            ";
            // line 100
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true);
            echo "
          </aside>
        ";
        }
        // line 103
        echo "\t\t
\t<div class=\"content col-lg-";
        // line 104
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_content_width", array()), "html", null, true);
        echo " col-md-";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_content_width", array()), "html", null, true);
        echo " col-sm-12 col-xs-12\">
          ";
        // line 105
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true);
        echo "

          ";
        // line 107
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true);
        echo "
          ";
        // line 108
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 109
            echo "            <h1>";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</h1>
          ";
        }
        // line 111
        echo "          ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true);
        echo "

          ";
        // line 113
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["tabs"]) ? $context["tabs"] : null), "html", null, true);
        echo "

          ";
        // line 115
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 116
            echo "            <nav class=\"action-links\">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true);
            echo "</nav>
          ";
        }
        // line 118
        echo "
          ";
        // line 119
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true);
        echo "

          <!--";
        // line 121
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["feed_icons"]) ? $context["feed_icons"] : null), "html", null, true);
        echo "-->
        </div>

        ";
        // line 124
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 125
            echo "          <aside class=\"sidebar-second sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12\" role=\"complementary\">
            ";
            // line 126
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true);
            echo "
          </aside>
        ";
        }
        // line 129
        echo "      </div>
    </div>
  </section>

  ";
        // line 133
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_first_1", array())) {
            // line 134
            echo "    <section id=\"panel_first\" class=\"panel_first\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            ";
            // line 138
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_first_1", array()), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </section>
  ";
        }
        // line 144
        echo "    
  ";
        // line 145
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_2", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_3", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_4", array()))) {
            // line 146
            echo "    <section id=\"panel_second\" class=\"panel_second\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 150
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_1", array()), "html", null, true);
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 153
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_2", array()), "html", null, true);
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 156
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_3", array()), "html", null, true);
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 159
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_4", array()), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </section>
  ";
        }
        // line 165
        echo "  
  ";
        // line 166
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 167
            echo "    <section id=\"breadcrumb\" class=\"breadcrumb\">
      <div class=\"container\">
        ";
            // line 169
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 173
        echo "  <a href=\"#Top\" class=\"btn-btt\" title=\"Back to Top\" style=\"display: block;\"></a>          
  
  ";
        // line 175
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 176
            echo "    <footer id=\"footer\" class=\"footer\" role=\"contentinfo\">
      <div class=\"container\">
        ";
            // line 178
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true);
            echo "
      </div>
    </footer>
  ";
        }
        // line 182
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/zircon/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  395 => 182,  388 => 178,  384 => 176,  382 => 175,  378 => 173,  371 => 169,  367 => 167,  365 => 166,  362 => 165,  353 => 159,  347 => 156,  341 => 153,  335 => 150,  329 => 146,  327 => 145,  324 => 144,  315 => 138,  309 => 134,  307 => 133,  301 => 129,  295 => 126,  292 => 125,  290 => 124,  284 => 121,  279 => 119,  276 => 118,  270 => 116,  268 => 115,  263 => 113,  257 => 111,  251 => 109,  249 => 108,  245 => 107,  240 => 105,  234 => 104,  231 => 103,  225 => 100,  222 => 99,  220 => 98,  211 => 91,  204 => 88,  200 => 86,  198 => 85,  195 => 84,  188 => 80,  184 => 78,  182 => 77,  179 => 76,  172 => 72,  168 => 70,  166 => 69,  163 => 68,  156 => 64,  152 => 62,  150 => 61,  147 => 60,  139 => 55,  134 => 52,  132 => 51,  129 => 50,  122 => 46,  118 => 45,  114 => 43,  112 => 42,  104 => 37,  95 => 30,  91 => 28,  85 => 26,  83 => 25,  80 => 24,  70 => 21,  67 => 20,  57 => 17,  54 => 16,  51 => 15,  47 => 12,  45 => 11,  42 => 10,  34 => 7,  27 => 6,  25 => 5,  19 => 1,);
    }
}
