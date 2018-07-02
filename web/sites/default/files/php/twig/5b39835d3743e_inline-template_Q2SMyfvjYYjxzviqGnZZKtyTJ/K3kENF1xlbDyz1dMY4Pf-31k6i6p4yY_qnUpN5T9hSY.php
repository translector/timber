<?php

/* {# inline_template_start #}<div class="col-md-4 b1">
	<img class="img-responsive" src="{{ field_image }}">
	<h4>{{ title }}</h4>
	<h5>{{ field_designation }}</h5>
	<p>{{ body }}</p>
	<ul>
		<li><a href="{{ field_facebook }}"><i class="fa fa-facebook-square"></i></a></li>
		<li><a href="{{ field_skype }}"><i class="fa fa-skype"></i></a></li>
		<li><a href="{{ field_twitter }}"><i class="fa fa-twitter" ></i></a></li>
		<li><a href="{{ field_google_ }}"><i class="fa fa-google-plus-square"></i></a></li>
	</ul>
</div> */
class __TwigTemplate_b80883d1fb621c50ee337c07f077151f7af40ab8343a8febafef38b0a0dba73f extends Twig_Template
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
        echo "<div class=\"col-md-4 b1\">
\t<img class=\"img-responsive\" src=\"";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_image"] ?? null), "html", null, true));
        echo "\">
\t<h4>";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</h4>
\t<h5>";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_designation"] ?? null), "html", null, true));
        echo "</h5>
\t<p>";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["body"] ?? null), "html", null, true));
        echo "</p>
\t<ul>
\t\t<li><a href=\"";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_facebook"] ?? null), "html", null, true));
        echo "\"><i class=\"fa fa-facebook-square\"></i></a></li>
\t\t<li><a href=\"";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_skype"] ?? null), "html", null, true));
        echo "\"><i class=\"fa fa-skype\"></i></a></li>
\t\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_twitter"] ?? null), "html", null, true));
        echo "\"><i class=\"fa fa-twitter\" ></i></a></li>
\t\t<li><a href=\"";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_google_"] ?? null), "html", null, true));
        echo "\"><i class=\"fa fa-google-plus-square\"></i></a></li>
\t</ul>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"col-md-4 b1\">
\t<img class=\"img-responsive\" src=\"{{ field_image }}\">
\t<h4>{{ title }}</h4>
\t<h5>{{ field_designation }}</h5>
\t<p>{{ body }}</p>
\t<ul>
\t\t<li><a href=\"{{ field_facebook }}\"><i class=\"fa fa-facebook-square\"></i></a></li>
\t\t<li><a href=\"{{ field_skype }}\"><i class=\"fa fa-skype\"></i></a></li>
\t\t<li><a href=\"{{ field_twitter }}\"><i class=\"fa fa-twitter\" ></i></a></li>
\t\t<li><a href=\"{{ field_google_ }}\"><i class=\"fa fa-google-plus-square\"></i></a></li>
\t</ul>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 10,  82 => 9,  78 => 8,  74 => 7,  69 => 5,  65 => 4,  61 => 3,  57 => 2,  54 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"col-md-4 b1\">
\t<img class=\"img-responsive\" src=\"{{ field_image }}\">
\t<h4>{{ title }}</h4>
\t<h5>{{ field_designation }}</h5>
\t<p>{{ body }}</p>
\t<ul>
\t\t<li><a href=\"{{ field_facebook }}\"><i class=\"fa fa-facebook-square\"></i></a></li>
\t\t<li><a href=\"{{ field_skype }}\"><i class=\"fa fa-skype\"></i></a></li>
\t\t<li><a href=\"{{ field_twitter }}\"><i class=\"fa fa-twitter\" ></i></a></li>
\t\t<li><a href=\"{{ field_google_ }}\"><i class=\"fa fa-google-plus-square\"></i></a></li>
\t</ul>
</div>", "");
    }
}
