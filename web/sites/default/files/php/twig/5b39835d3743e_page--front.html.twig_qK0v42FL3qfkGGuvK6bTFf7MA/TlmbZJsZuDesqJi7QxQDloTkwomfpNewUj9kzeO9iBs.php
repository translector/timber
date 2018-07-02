<?php

/* themes/custom/timber/templates/system/page--front.html.twig */
class __TwigTemplate_c9b26798c4adf721baef13faa1d41f523054db9519fb008e30973361538bc2ed extends Twig_Template
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
        $tags = array("set" => 54);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set'),
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

        // line 54
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 56
        echo "<div id=\"home\">
    <div class=\"headerLine\" style=\"background-image: url(";
        // line 57
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page_header_bg"] ?? null), "html", null, true));
        echo ")\">
        <div id=\"menuF\" class=\"default\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"logo col-md-4\">
                        <div>
                            ";
        // line 63
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "branding", array()), "html", null, true));
        echo "
                        </div>
                    </div>
                    <div class=\"col-md-8\">
                        ";
        // line 67
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation", array()), "html", null, true));
        echo "
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row wrap\">
                <div class=\"col-md-12 gallery\">
                    <div class=\"camera_wrap camera_white_skin\" id=\"camera_wrap_1\">
                        <div data-thumb=\"\" data-src=\"";
        // line 76
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["base_path"] ?? null), "html", null, true));
        echo "/themes/custom/timber/images/slides/blank.gif\">
                            <div class=\"img-responsive camera_caption fadeFromBottom\">
                                <h2>";
        // line 78
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["text_one"] ?? null), "html", null, true));
        echo ".</h2>
                            </div>
                        </div>
                        <div data-thumb=\"\" data-src=\"";
        // line 81
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["base_path"] ?? null), "html", null, true));
        echo "/themes/custom/timber/images/slides/blank.gif\">
                            <div class=\"img-responsive camera_caption fadeFromBottom\">
                                <h2>";
        // line 83
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["text_two"] ?? null), "html", null, true));
        echo ".</h2>
                            </div>
                        </div>
                        <div data-thumb=\"\" data-src=\"";
        // line 86
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["base_path"] ?? null), "html", null, true));
        echo "/themes/custom/timber/images/slides/blank.gif\">
                            <div class=\"img-responsive camera_caption fadeFromBottom\">
                                <h2>";
        // line 88
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["text_three"] ?? null), "html", null, true));
        echo ".</h2>
                            </div>
                        </div>
                    </div><!-- #camera_wrap_1 -->
                </div>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 98
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_header", array()), "html", null, true));
        echo "
        </div>
    </div>
</div>
<!--about start-->
<div id=\"about\">
    <div class=\"line2\">
        <div class=\"container\">
            <div class=\"row Fresh\">
                <div class=\"col-md-4 Des\">
                    <i class=\"fa fa-heart\"></i>
                    ";
        // line 109
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "about_left", array()), "html", null, true));
        echo "
                </div>
                <div class=\"col-md-4 Ver\">
                    <i class=\"fa fa-cog\"></i>
                    ";
        // line 113
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "about_middle", array()), "html", null, true));
        echo "
                </div>
                <div class=\"col-md-4 Fully\">
                    <i class=\"fa fa-tablet\"></i>
                    ";
        // line 117
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "about_right", array()), "html", null, true));
        echo "
                </div>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 124
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "about_us", array()), "html", null, true));
        echo "
        </div>
    </div>
</div>
<!--project start-->
<div id=\"project\">
    <div class=\"line3\">
        <div class=\"container\">
            <div id=\"project1\" ></div>
            <div class=\"row Ama\">
                <div class=\"col-md-12\">
                    <span name=\"projects\" id=\"projectss\"></span>
                    <h3>Our Amazing Works</h3>
                    <p>Right here we've got something you gonna love</p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 144
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "project", array()), "html", null, true));
        echo "
        </div>
    </div>
</div>
<!--news start-->
<div id=\"news\">
    <div class=\"line4\">
        <div class=\"container\">
            <div class=\"row Ama\">
                <div class=\"col-md-12\">
                    <h3>What&rsquo;s New?</h3>
                    <p>Get the latest news from our blog</p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row news\">
            ";
        // line 162
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "news", array()), "html", null, true));
        echo "
        </div>
    </div>
</div>
<!--contact start-->
<div id=\"contact\">
    <div class=\"line5\">
        <div class=\"container\">
            <div class=\"row Ama\">
                <div class=\"col-md-12\">
                    <h3>";
        // line 172
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["contact_title"] ?? null), "html", null, true));
        echo "</h3>
                    <p>";
        // line 173
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["contact_subtitle"] ?? null), "html", null, true));
        echo "</p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-9 col-xs-12 forma\">
                ";
        // line 181
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "contact", array()), "html", null, true));
        echo "
            </div>
            <div class=\"col-md-3 col-xs-12 cont\">
                <ul>
                    <li><i class=\"fa fa-home\"></i>";
        // line 185
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["contact_address"] ?? null), "html", null, true));
        echo "</li>
                    <li><i class=\"fa fa-phone\"></i>";
        // line 186
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["contact_phone"] ?? null), "html", null, true));
        echo "</li>
                    <li><a href=\"#\"><i class=\"fa fa-envelope\"></i>";
        // line 187
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["contact_email"] ?? null), "html", null, true));
        echo "</li></a>
                    <li><i class=\"fa fa-skype\"></i>";
        // line 188
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["contact_skype"] ?? null), "html", null, true));
        echo "</li>
                    <li><a href=\"#\"><i class=\"fa fa-twitter\"></i>";
        // line 189
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["contact_twitter"] ?? null), "html", null, true));
        echo "</li></a>
                    <li><a href=\"#\"><i class=\"fa fa-facebook-square\"></i>";
        // line 190
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["contact_facebook"] ?? null), "html", null, true));
        echo "</li></a>
                    <li><a href=\"#\"><i class=\"fa fa-flickr\"></i>";
        // line 191
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["contact_flickr"] ?? null), "html", null, true));
        echo "</li></a>
                    <li><a href=\"#\"><i class=\"fa fa-youtube-play\"></i>";
        // line 192
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["contact_youtube"] ?? null), "html", null, true));
        echo "</li></a>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"line6\">
        ";
        // line 198
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "contact_first", array()), "html", null, true));
        echo "
    </div>
    <div class=\"container\">
        <div class=\"row ftext\">
            ";
        // line 202
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "contact_second", array()), "html", null, true));
        echo "
        </div>
    </div>
    <div class=\"line7\">
        <div class=\"container\">
            <div class=\"row footer\">
                <div class=\"col-md-12\">
                    ";
        // line 209
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "contact_third", array()), "html", null, true));
        echo "
                </div>
                <div class=\"soc col-md-12\">
                    <ul>
                        <li class=\"soc1\"><a href=\"";
        // line 213
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["social_linkedlin"] ?? null), "html", null, true));
        echo "\"></a></li>
                        <li class=\"soc2\"><a href=\"";
        // line 214
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["social_facebook"] ?? null), "html", null, true));
        echo "\"></a></li>
                        <li class=\"soc3\"><a href=\"";
        // line 215
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["social_twitter"] ?? null), "html", null, true));
        echo "\"></a></li>
                        <li class=\"soc5\"><a href=\"";
        // line 216
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["social_flickr"] ?? null), "html", null, true));
        echo "\"></a></li>
                        <li class=\"soc6\"><a href=\"";
        // line 217
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["social_youtube"] ?? null), "html", null, true));
        echo "\"></a></li>
                        <li class=\"soc8\"><a href=\"";
        // line 218
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["social_google"] ?? null), "html", null, true));
        echo "\"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class=\"lineBlack\">
        <div class=\"container\">
            <div class=\"row downLine\">
                <div class=\"col-md-6 text-left copy\">
                    ";
        // line 228
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["copyright_text"] ?? null), "html", null, true));
        echo "
                </div>
                <div class=\"col-md-6 text-right dm\">
                    ";
        // line 231
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
        echo "
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/timber/templates/system/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 231,  327 => 228,  314 => 218,  310 => 217,  306 => 216,  302 => 215,  298 => 214,  294 => 213,  287 => 209,  277 => 202,  270 => 198,  261 => 192,  257 => 191,  253 => 190,  249 => 189,  245 => 188,  241 => 187,  237 => 186,  233 => 185,  226 => 181,  215 => 173,  211 => 172,  198 => 162,  177 => 144,  154 => 124,  144 => 117,  137 => 113,  130 => 109,  116 => 98,  103 => 88,  98 => 86,  92 => 83,  87 => 81,  81 => 78,  76 => 76,  64 => 67,  57 => 63,  48 => 57,  45 => 56,  43 => 54,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/timber/templates/system/page--front.html.twig", "/opt/lampp/apps/timber/web/themes/custom/timber/templates/system/page--front.html.twig");
    }
}
