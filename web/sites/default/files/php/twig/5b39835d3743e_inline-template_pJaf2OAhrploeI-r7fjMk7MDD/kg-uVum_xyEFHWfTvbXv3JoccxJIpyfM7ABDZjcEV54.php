<?php

/* {# inline_template_start #}<div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter {{ field_portfolio_categories}}">
	<a class="plS" href="{{ field_image}}" rel="prettyPhoto[gallery2]">
		<img src="{{ field_image}}" class="img-responsive">
	</a>
        <div class="view project_descr ">
    <h3><a class="use-ajax" data-dialog-type="modal" href="{{ path}}">{{ title}}</a></h3>
    <ul>
      <li><i class="fa fa-calendar"></i>{{ created }}</li>
      <li><i class="fa fa-user"></i>{{ uid }}</li>
    </ul>
  </div>
</div> */
class __TwigTemplate_b60d09f3d248240d4601041178232401e69a1a2a30a11114cd2d31c2021b03bb extends Twig_Template
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
        echo "<div class=\"gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_portfolio_categories"] ?? null), "html", null, true));
        echo "\">
\t<a class=\"plS\" href=\"";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_image"] ?? null), "html", null, true));
        echo "\" rel=\"prettyPhoto[gallery2]\">
\t\t<img src=\"";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_image"] ?? null), "html", null, true));
        echo "\" class=\"img-responsive\">
\t</a>
        <div class=\"view project_descr \">
    <h3><a class=\"use-ajax\" data-dialog-type=\"modal\" href=\"";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["path"] ?? null), "html", null, true));
        echo "\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</a></h3>
    <ul>
      <li><i class=\"fa fa-calendar\"></i>";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["created"] ?? null), "html", null, true));
        echo "</li>
      <li><i class=\"fa fa-user\"></i>";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["uid"] ?? null), "html", null, true));
        echo "</li>
    </ul>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter {{ field_portfolio_categories}}\">
\t<a class=\"plS\" href=\"{{ field_image}}\" rel=\"prettyPhoto[gallery2]\">
\t\t<img src=\"{{ field_image}}\" class=\"img-responsive\">
\t</a>
        <div class=\"view project_descr \">
    <h3><a class=\"use-ajax\" data-dialog-type=\"modal\" href=\"{{ path}}\">{{ title}}</a></h3>
    <ul>
      <li><i class=\"fa fa-calendar\"></i>{{ created }}</li>
      <li><i class=\"fa fa-user\"></i>{{ uid }}</li>
    </ul>
  </div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 9,  76 => 8,  69 => 6,  63 => 3,  59 => 2,  54 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter {{ field_portfolio_categories}}\">
\t<a class=\"plS\" href=\"{{ field_image}}\" rel=\"prettyPhoto[gallery2]\">
\t\t<img src=\"{{ field_image}}\" class=\"img-responsive\">
\t</a>
        <div class=\"view project_descr \">
    <h3><a class=\"use-ajax\" data-dialog-type=\"modal\" href=\"{{ path}}\">{{ title}}</a></h3>
    <ul>
      <li><i class=\"fa fa-calendar\"></i>{{ created }}</li>
      <li><i class=\"fa fa-user\"></i>{{ uid }}</li>
    </ul>
  </div>
</div>", "");
    }
}
