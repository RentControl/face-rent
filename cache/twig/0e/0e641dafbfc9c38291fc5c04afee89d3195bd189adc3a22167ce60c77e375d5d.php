<?php

/* partials/header.html.twig */
class __TwigTemplate_8474e05817686b16fc5b2b012f5b1f2a226b7bac79e0c51db4b0658b1bcb3fca extends Twig_Template
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
        echo "<header>
  <section class=\"hero\">
    <div class=\"texture-overlay\"></div>
    <div class=\"container\">
      <div class=\"row nav-wrapper\">
        <div class=\"col-md-6 col-sm-6 col-xs-6 text-left\">
          <a href=\"#\"><img src=\"";
        // line 7
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/logo-white.png");
        echo "\" alt=\"Boxify Logo\"></a>
        </div>
        <div class=\"col-md-6 col-sm-6 col-xs-6 text-right navicon\">
          <p>MENU</p><a id=\"trigger-overlay\" class=\"nav_slide_button nav-toggle\" href=\"#\"><span></span></a>
        </div>
      </div>
      <div class=\"row hero-content\">
        <div class=\"col-md-12\">
          <h1 class=\"animated fadeInDown\">";
        // line 15
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "header", array()), "title", array());
        echo "</h1>
            
          ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["site"] ?? null), "header", array()), "buttons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 18
            echo "              <a href=\"";
            echo $this->getAttribute($context["button"], "link", array());
            echo "\" class=\"";
            echo $this->getAttribute($context["button"], "class", array());
            echo "\">";
            echo $this->getAttribute($context["button"], "text", array());
            echo " ";
            if ($this->getAttribute($context["button"], "icon", array())) {
                echo "<i class=\"fa fa-";
                echo $this->getAttribute($context["button"], "icon", array());
                echo "\"></i>";
            }
            echo "</a> 
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </div>
      </div>
    </div>
  </section>
</header>";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 20,  47 => 18,  43 => 17,  38 => 15,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header>
  <section class=\"hero\">
    <div class=\"texture-overlay\"></div>
    <div class=\"container\">
      <div class=\"row nav-wrapper\">
        <div class=\"col-md-6 col-sm-6 col-xs-6 text-left\">
          <a href=\"#\"><img src=\"{{ url('theme://img/logo-white.png') }}\" alt=\"Boxify Logo\"></a>
        </div>
        <div class=\"col-md-6 col-sm-6 col-xs-6 text-right navicon\">
          <p>MENU</p><a id=\"trigger-overlay\" class=\"nav_slide_button nav-toggle\" href=\"#\"><span></span></a>
        </div>
      </div>
      <div class=\"row hero-content\">
        <div class=\"col-md-12\">
          <h1 class=\"animated fadeInDown\">{{ site.header.title }}</h1>
            
          {% for button in site.header.buttons %}
              <a href=\"{{ button.link }}\" class=\"{{ button.class }}\">{{ button.text }} {% if button.icon %}<i class=\"fa fa-{{ button.icon }}\"></i>{% endif %}</a> 
          {% endfor %}
        </div>
      </div>
    </div>
  </section>
</header>", "partials/header.html.twig", "/Users/csteuben/Github/grav-skeleton-boxify-site/user/themes/boxify/templates/partials/header.html.twig");
    }
}
