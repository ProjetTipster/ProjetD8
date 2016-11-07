<?php

/* core/themes/stable/templates/admin/system-config-form.html.twig */
class __TwigTemplate_b82084867d5638f330ee6ff1828795a46e2ad9fdb10ca67221410449e2fee6eb extends Twig_Template
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
        $__internal_19e0eef9339af904b1f6ec63d09fb04adb7d6f9bcf1fea7f0b9140bbbe0b7b7d = $this->env->getExtension("native_profiler");
        $__internal_19e0eef9339af904b1f6ec63d09fb04adb7d6f9bcf1fea7f0b9140bbbe0b7b7d->enter($__internal_19e0eef9339af904b1f6ec63d09fb04adb7d6f9bcf1fea7f0b9140bbbe0b7b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/stable/templates/admin/system-config-form.html.twig"));

        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["form"]) ? $context["form"] : null), "html", null, true));
        echo "
";
        
        $__internal_19e0eef9339af904b1f6ec63d09fb04adb7d6f9bcf1fea7f0b9140bbbe0b7b7d->leave($__internal_19e0eef9339af904b1f6ec63d09fb04adb7d6f9bcf1fea7f0b9140bbbe0b7b7d_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/system-config-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 15,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a system settings form.*/
/*  **/
/*  * This template will be used when a system config form specifies 'config_form'*/
/*  * as its #theme callback.  Otherwise, by default, system config forms will be*/
/*  * themed by form.html.twig. This does not alter the appearance of a form at all,*/
/*  * but is provided as a convenience for themers.*/
/*  **/
/*  * Available variables:*/
/*  * - form: The confirm form.*/
/*  *//* */
/* #}*/
/* {{ form }}*/
/* */
