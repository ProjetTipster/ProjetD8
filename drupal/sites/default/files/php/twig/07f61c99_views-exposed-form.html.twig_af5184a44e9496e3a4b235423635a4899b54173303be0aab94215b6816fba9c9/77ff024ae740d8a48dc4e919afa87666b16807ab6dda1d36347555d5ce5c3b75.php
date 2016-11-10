<?php

/* core/themes/classy/templates/views/views-exposed-form.html.twig */
class __TwigTemplate_617d360a434ab1a6c1a1ba27473db25f8ba0b1eca3efe31ad98d7e685a346cac extends Twig_Template
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
        $__internal_cef099eb9efb3890660b4a372604c43d9582282d87534e6481a2526a62d39797 = $this->env->getExtension("native_profiler");
        $__internal_cef099eb9efb3890660b4a372604c43d9582282d87534e6481a2526a62d39797->enter($__internal_cef099eb9efb3890660b4a372604c43d9582282d87534e6481a2526a62d39797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/views/views-exposed-form.html.twig"));

        $tags = array("if" => 12);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 12
        if ( !twig_test_empty((isset($context["q"]) ? $context["q"] : null))) {
            // line 13
            echo "  ";
            // line 17
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["q"]) ? $context["q"] : null), "html", null, true));
            echo "
";
        }
        // line 19
        echo "<div class=\"form--inline clearfix\">
  ";
        // line 20
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["form"]) ? $context["form"] : null), "html", null, true));
        echo "
</div>
";
        
        $__internal_cef099eb9efb3890660b4a372604c43d9582282d87534e6481a2526a62d39797->leave($__internal_cef099eb9efb3890660b4a372604c43d9582282d87534e6481a2526a62d39797_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/views/views-exposed-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 20,  55 => 19,  50 => 17,  48 => 13,  46 => 12,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a views exposed form.*/
/*  **/
/*  * Available variables:*/
/*  * - form: A render element representing the form.*/
/*  **/
/*  * @see template_preprocess_views_exposed_form()*/
/*  *//* */
/* #}*/
/* {% if q is not empty %}*/
/*   {#*/
/*     This ensures that, if clean URLs are off, the 'q' is added first,*/
/*     as a hidden form element, so that it shows up first in the POST URL.*/
/*   #}*/
/* {{ q }}*/
/* {% endif %}*/
/* <div class="form--inline clearfix">*/
/*   {{ form }}*/
/* </div>*/
/* */
