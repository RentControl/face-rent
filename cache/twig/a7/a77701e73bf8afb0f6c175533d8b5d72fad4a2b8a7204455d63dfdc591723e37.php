<?php

/* modular/video.html.twig */
class __TwigTemplate_794432fe77fab8038bb97aee51a588b6aaeb5a4cbf491909329159f0ef279ec9 extends Twig_Template
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
        echo "<section class=\"video\" id=\"about\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 text-center\">
                ";
        // line 5
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "videos", array())) {
            // line 6
            echo "                <h1>
                    ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "videos", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
                // line 8
                echo "                        <a href=\"";
                echo $this->getAttribute($context["video"], "url", array());
                echo "\" class=\"youtube-media\"><i class=\"fa fa-";
                echo $this->getAttribute($context["video"], "icon", array());
                echo "\"></i> ";
                echo $this->getAttribute($context["video"], "text", array());
                echo "</a>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "                </h1>
                ";
        }
        // line 12
        echo "                ";
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/video.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 12,  47 => 10,  34 => 8,  30 => 7,  27 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"video\" id=\"about\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 text-center\">
                {% if page.header.videos %}
                <h1>
                    {% for video in page.header.videos %}
                        <a href=\"{{ video.url }}\" class=\"youtube-media\"><i class=\"fa fa-{{ video.icon }}\"></i> {{ video.text }}</a>
                    {% endfor %}
                </h1>
                {% endif %}
                {{ page.content }}
            </div>
        </div>
    </div>
</section>", "modular/video.html.twig", "/Users/csteuben/Github/grav-skeleton-boxify-site/user/themes/boxify/templates/modular/video.html.twig");
    }
}
