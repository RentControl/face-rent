<?php

/* partials/footer.html.twig */
class __TwigTemplate_bb559ac0ac9f306ea3a7f21b9802f2fa8a6784f46590d332290697c9130e1b60 extends Twig_Template
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
        echo "<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-5\">
                <h1 class=\"footer-logo\">
                    <img src=\"";
        // line 6
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/logo-blue.png");
        echo "\" alt=\"Footer Logo Blue\">
                </h1>
                <p>© Boxify 2015 - <a href=\"http://tympanus.net/codrops/licensing/\">License</a> - Designed &amp; Developed by <a href=\"http://www.peterfinlan.com/\">Peter Finlan</a></p>
            </div>
            <div class=\"col-md-7\">
                <ul class=\"footer-nav\">
                    ";
        // line 12
        $context["show_onpage_menu"] = (($this->getAttribute(($context["header"] ?? null), "onpage_menu", array()) == true) || (null === $this->getAttribute(($context["header"] ?? null), "onpage_menu", array())));
        // line 13
        echo "                        ";
        // line 14
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 15
            echo "                               ";
            if ( !$this->getAttribute($this->getAttribute($context["module"], "header", array()), "hidemenu", array())) {
                // line 16
                echo "                                ";
                $context["current_module"] = ((($this->getAttribute($context["module"], "active", array()) || $this->getAttribute($context["module"], "activeChild", array()))) ? ("active") : (""));
                // line 17
                echo "                                    <li class=\"";
                echo ($context["current_module"] ?? null);
                echo "\">
                                        <a href=\"#";
                // line 18
                echo $this->getAttribute($this, "pageLinkName", array(0 => $this->getAttribute($context["module"], "menu", array())), "method");
                echo "\">";
                echo $this->getAttribute($context["module"], "menu", array());
                echo "</a>
                                    </li>
                                ";
            }
            // line 20
            echo "    
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                            </ul>           
                        </div>
                    </div>
                </div>
            </footer>";
    }

    // line 13
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
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 13,  70 => 22,  63 => 20,  55 => 18,  50 => 17,  47 => 16,  44 => 15,  39 => 14,  37 => 13,  35 => 12,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-5\">
                <h1 class=\"footer-logo\">
                    <img src=\"{{ url('theme://img/logo-blue.png') }}\" alt=\"Footer Logo Blue\">
                </h1>
                <p>© Boxify 2015 - <a href=\"http://tympanus.net/codrops/licensing/\">License</a> - Designed &amp; Developed by <a href=\"http://www.peterfinlan.com/\">Peter Finlan</a></p>
            </div>
            <div class=\"col-md-7\">
                <ul class=\"footer-nav\">
                    {% set show_onpage_menu = header.onpage_menu == true or header.onpage_menu is null %}
                        {% macro pageLinkName(text) %}{{ text|lower|replace({' ':'_'}) }}{% endmacro %}
                            {% for module in page.collection() %}
                               {% if not module.header.hidemenu %}
                                {% set current_module = (module.active or module.activeChild) ? 'active' : '' %}
                                    <li class=\"{{ current_module }}\">
                                        <a href=\"#{{ _self.pageLinkName(module.menu) }}\">{{ module.menu }}</a>
                                    </li>
                                {% endif %}    
                            {% endfor %}
                            </ul>           
                        </div>
                    </div>
                </div>
            </footer>", "partials/footer.html.twig", "/Users/csteuben/Github/grav-skeleton-boxify-site/user/themes/boxify/templates/partials/footer.html.twig");
    }
}
