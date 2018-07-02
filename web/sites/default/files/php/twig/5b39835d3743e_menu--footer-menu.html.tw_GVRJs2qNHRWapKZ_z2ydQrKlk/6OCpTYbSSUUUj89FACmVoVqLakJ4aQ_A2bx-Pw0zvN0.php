<?php

/* themes/custom/timber/templates/menu/menu--footer-menu.html.twig */
class __TwigTemplate_6f8b83b83f8d81cc051639f282c142bc9491ce6f7dcd0b9c49867e6a3e1923b9 extends Twig_Template
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
        $tags = array("import" => 18, "macro" => 27, "if" => 29, "set" => 30, "for" => 36);
        $filters = array("clean_class" => 25);
        $functions = array("link" => 49);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('import', 'macro', 'if', 'set', 'for'),
                array('clean_class'),
                array('link')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 18
        $context["menus"] = $this;
        // line 19
        echo "
";
        // line 24
        echo "
";
        // line 25
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0, \Drupal\Component\Utility\Html::getClass(($context["menu_name"] ?? null)))));
        echo "

";
    }

    // line 27
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__menu_name__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "menu_name" => $__menu_name__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 28
            echo "  ";
            $context["menus"] = $this;
            // line 29
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 30
                echo "\t";
                $context["menu_footer_id"] = "downMenu";
                // line 31
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 32
                    echo "      <ul";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "timber-fmenu"), "method"), "setAttribute", array(0 => "id", 1 => ($context["menu_footer_id"] ?? null)), "method"), "html", null, true));
                    echo ">
    ";
                } else {
                    // line 34
                    echo "      <ul";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "dropdown-menu", 1 => ($context["menu_name"] ?? null)), "method"), "html", null, true));
                    echo ">
    ";
                }
                // line 36
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 37
                    echo "      ";
                    // line 38
                    $context["item_classes"] = array(0 => (($this->getAttribute(                    // line 39
$context["item"], "is_expanded", array())) ? ("expanded") : ("")), 1 => ((($this->getAttribute(                    // line 40
$context["item"], "is_expanded", array()) && (($context["menu_level"] ?? null) == 0))) ? ("dropdown") : ("")), 2 => (($this->getAttribute(                    // line 41
$context["item"], "in_active_trail", array())) ? ("active") : ("")));
                    // line 44
                    echo "      ";
                    if (((($context["menu_level"] ?? null) == 0) && $this->getAttribute($context["item"], "is_expanded", array()))) {
                        // line 45
                        echo "        <li";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => ($context["item_classes"] ?? null)), "method"), "html", null, true));
                        echo ">
        <a href=\"";
                        // line 46
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                        echo " <span class=\"caret\"></span></a>
      ";
                    } else {
                        // line 48
                        echo "        <li";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => ($context["item_classes"] ?? null)), "method"), "html", null, true));
                        echo ">
        ";
                        // line 49
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array())), "html", null, true));
                        echo "
      ";
                    }
                    // line 51
                    echo "      ";
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 52
                        echo "        ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), $this->getAttribute(($context["attributes"] ?? null), "removeClass", array(0 => "nav"), "method"), (($context["menu_level"] ?? null) + 1), ($context["menu_name"] ?? null))));
                        echo "
      ";
                    }
                    // line 54
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "    </ul>
  ";
            }
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
        return "themes/custom/timber/templates/menu/menu--footer-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 56,  143 => 54,  137 => 52,  134 => 51,  129 => 49,  124 => 48,  117 => 46,  112 => 45,  109 => 44,  107 => 41,  106 => 40,  105 => 39,  104 => 38,  102 => 37,  97 => 36,  91 => 34,  85 => 32,  82 => 31,  79 => 30,  76 => 29,  73 => 28,  58 => 27,  51 => 25,  48 => 24,  45 => 19,  43 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/timber/templates/menu/menu--footer-menu.html.twig", "/opt/lampp/apps/timber/web/themes/custom/timber/templates/menu/menu--footer-menu.html.twig");
    }
}
