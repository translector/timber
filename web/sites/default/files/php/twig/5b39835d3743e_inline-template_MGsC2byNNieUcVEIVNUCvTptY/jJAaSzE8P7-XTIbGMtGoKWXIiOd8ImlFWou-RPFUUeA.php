<?php

/* {# inline_template_start #}<div class="col-md-6 text-left">
	<img class="img-responsive picsGall" src="{{ field_image }}"/>
	<h3 >{{ title }}</h3>
	<ul>
		<li><i class="fa fa-calendar"></i>{{ created }}</li>
		<li><a href="#"><i class="fa fa-folder-open"></i>{{ field_tags }}</a></li>
		<li><a href="#"><i class="fa fa-comments"></i>{{ comment_count }} comments</a></li>
	</ul>
	<p>{{ body }}<a class="use-ajax" data-dialog-type="modal" href="{{ path }}">Read More<i class="fa fa-angle-right"></i></a></p>
	<hr class="hrNews">
</div> */
class __TwigTemplate_4fcb62bc60a9f840e8fbd4c450f9ea7c1a9267bcdf0f25e63158f328f591a8f4 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
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

        // line 1
        echo "<div class=\"col-md-6 text-left\">
\t<img class=\"img-responsive picsGall\" src=\"";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_image"] ?? null), "html", null, true));
        echo "\"/>
\t<h3 >";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</h3>
\t<ul>
\t\t<li><i class=\"fa fa-calendar\"></i>";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["created"] ?? null), "html", null, true));
        echo "</li>
\t\t<li><a href=\"#\"><i class=\"fa fa-folder-open\"></i>";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_tags"] ?? null), "html", null, true));
        echo "</a></li>
\t\t<li><a href=\"#\"><i class=\"fa fa-comments\"></i>";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["comment_count"] ?? null), "html", null, true));
        echo " comments</a></li>
\t</ul>
\t<p>";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["body"] ?? null), "html", null, true));
        echo "<a class=\"use-ajax\" data-dialog-type=\"modal\" href=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["path"] ?? null), "html", null, true));
        echo "\">Read More<i class=\"fa fa-angle-right\"></i></a></p>
\t<hr class=\"hrNews\">
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"col-md-6 text-left\">
\t<img class=\"img-responsive picsGall\" src=\"{{ field_image }}\"/>
\t<h3 >{{ title }}</h3>
\t<ul>
\t\t<li><i class=\"fa fa-calendar\"></i>{{ created }}</li>
\t\t<li><a href=\"#\"><i class=\"fa fa-folder-open\"></i>{{ field_tags }}</a></li>
\t\t<li><a href=\"#\"><i class=\"fa fa-comments\"></i>{{ comment_count }} comments</a></li>
\t</ul>
\t<p>{{ body }}<a class=\"use-ajax\" data-dialog-type=\"modal\" href=\"{{ path }}\">Read More<i class=\"fa fa-angle-right\"></i></a></p>
\t<hr class=\"hrNews\">
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 9,  73 => 7,  69 => 6,  65 => 5,  60 => 3,  56 => 2,  53 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"col-md-6 text-left\">
\t<img class=\"img-responsive picsGall\" src=\"{{ field_image }}\"/>
\t<h3 >{{ title }}</h3>
\t<ul>
\t\t<li><i class=\"fa fa-calendar\"></i>{{ created }}</li>
\t\t<li><a href=\"#\"><i class=\"fa fa-folder-open\"></i>{{ field_tags }}</a></li>
\t\t<li><a href=\"#\"><i class=\"fa fa-comments\"></i>{{ comment_count }} comments</a></li>
\t</ul>
\t<p>{{ body }}<a class=\"use-ajax\" data-dialog-type=\"modal\" href=\"{{ path }}\">Read More<i class=\"fa fa-angle-right\"></i></a></p>
\t<hr class=\"hrNews\">
</div>", "");
    }
}
