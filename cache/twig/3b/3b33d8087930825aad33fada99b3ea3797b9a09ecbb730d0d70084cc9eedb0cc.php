<?php

/* partials/navigation.html.twig */
class __TwigTemplate_3df40bad25f0a9227914546dedfd1f1208e044aa355046c12feef7a38ce6cde2 extends Twig_Template
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
        echo "<div class=\"overlay overlay-boxify\">
    <nav>
        ";
        // line 3
        $context["show_onpage_menu"] = (($this->getAttribute(($context["header"] ?? null), "onpage_menu", array()) == true) || (null === $this->getAttribute(($context["header"] ?? null), "onpage_menu", array())));
        // line 4
        echo "        ";
        // line 5
        echo "            
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute(($context["page"] ?? null), "collection", array(), "method"), 2));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 7
            echo "         <ul>
          ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                echo " 
            ";
                // line 9
                if ( !$this->getAttribute($this->getAttribute($context["module"], "header", array()), "hidemenu", array())) {
                    // line 10
                    echo "            ";
                    $context["current_module"] = ((($this->getAttribute($context["module"], "active", array()) || $this->getAttribute($context["module"], "activeChild", array()))) ? ("active") : (""));
                    // line 11
                    echo "                <li class=\"";
                    echo ($context["current_module"] ?? null);
                    echo "\">
                    <a href=\"#";
                    // line 12
                    echo $this->getAttribute($this, "pageLinkName", array(0 => $this->getAttribute($context["module"], "menu", array())), "method");
                    echo "\"><i class=\"fa fa-link\"></i>";
                    echo $this->getAttribute($context["module"], "menu", array());
                    echo "</a>
                </li>
            ";
                }
                // line 14
                echo "    
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "    </ul>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
    </nav>
</div>";
    }

    // line 4
    public function getpageLinkName($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            echo twig_replace_filter(twig_lower_filter($this->env, ($context["text"] ?? null)), array(" " => "_"));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 4,  75 => 18,  68 => 16,  61 => 14,  53 => 12,  48 => 11,  45 => 10,  43 => 9,  37 => 8,  34 => 7,  30 => 6,  27 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"overlay overlay-boxify\">
    <nav>
        {% set show_onpage_menu = header.onpage_menu == true or header.onpage_menu is null %}
        {% macro pageLinkName(text) %}{{ text|lower|replace({' ':'_'}) }}{% endmacro %}
            
        {% for row in page.collection()|batch(2) %}
         <ul>
          {% for module in row %} 
            {% if not module.header.hidemenu %}
            {% set current_module = (module.active or module.activeChild) ? 'active' : '' %}
                <li class=\"{{ current_module }}\">
                    <a href=\"#{{ _self.pageLinkName(module.menu) }}\"><i class=\"fa fa-link\"></i>{{ module.menu }}</a>
                </li>
            {% endif %}    
        {% endfor %}
    </ul>
        {% endfor %}

    </nav>
</div>", "partials/navigation.html.twig", "/Users/csteuben/Github/grav-skeleton-boxify-site/user/themes/boxify/templates/partials/navigation.html.twig");
    }
}
