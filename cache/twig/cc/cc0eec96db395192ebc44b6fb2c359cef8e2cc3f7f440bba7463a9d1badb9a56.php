<?php

/* modular/showcase.html.twig */
class __TwigTemplate_1a6784e9ff44d919144108d5fa4dd9cab870321d65541f612b1f35e67aa38d55 extends Twig_Template
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
        echo "    <section class=\"showcase\">
      <div class=\"showcase-wrap\">
        <div class=\"texture-overlay\"></div>
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-6\">
              <div class=\"device wp3\">
                <div class=\"device-content\">
                  <div class=\"showcase-slider\">
                    <ul class=\"slides\" id=\"showcaseSlider\">
                     ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
            echo "                       <li>
                        <img src=\"";
            // line 13
            echo $this->getAttribute($context["item"], "url", array());
            echo "\" alt=\"Device Content Image\">
                      </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-md-6\">
                ";
        // line 22
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
              <blockquote class=\"team-quote\">
                <div class=\"avatar\"><img src=\"";
        // line 24
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/avatar.png");
        echo "\" alt=\"User Avatar\"></div>
                <p>";
        // line 25
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "bio", array());
        echo "</p>
                <div class=\"logo-quote\">
                  <a href=\"http://tympanus.net/codrops/\"><img src=\"";
        // line 27
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/codrops-logo.png");
        echo "\" alt=\"Codrops Logo\"></a>
                </div>
              </blockquote>
              <a href=\"http://tympanus.net/codrops/?p=22554\" class=\"download-btn\">Download! <i class=\"fa fa-download\"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>";
    }

    public function getTemplateName()
    {
        return "modular/showcase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 27,  64 => 25,  60 => 24,  55 => 22,  47 => 16,  38 => 13,  35 => 12,  31 => 11,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("    <section class=\"showcase\">
      <div class=\"showcase-wrap\">
        <div class=\"texture-overlay\"></div>
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-6\">
              <div class=\"device wp3\">
                <div class=\"device-content\">
                  <div class=\"showcase-slider\">
                    <ul class=\"slides\" id=\"showcaseSlider\">
                     {% for item in page.media.images %}
                       <li>
                        <img src=\"{{ item.url }}\" alt=\"Device Content Image\">
                      </li>
                    {% endfor %}
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-md-6\">
                {{ page.content }}
              <blockquote class=\"team-quote\">
                <div class=\"avatar\"><img src=\"{{ url('theme://img/avatar.png') }}\" alt=\"User Avatar\"></div>
                <p>{{ page.header.bio }}</p>
                <div class=\"logo-quote\">
                  <a href=\"http://tympanus.net/codrops/\"><img src=\"{{ url('theme://img/codrops-logo.png') }}\" alt=\"Codrops Logo\"></a>
                </div>
              </blockquote>
              <a href=\"http://tympanus.net/codrops/?p=22554\" class=\"download-btn\">Download! <i class=\"fa fa-download\"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>", "modular/showcase.html.twig", "/Users/csteuben/Github/grav-skeleton-boxify-site/user/themes/boxify/templates/modular/showcase.html.twig");
    }
}
