<?php

/* core/themes/classy/templates/form/datetime-form.html.twig */
class __TwigTemplate_7de7aaa98bb645cd3c5e73405cf8f4e694b945a3759519300d4fbe9ccdf68604 extends Twig_Template
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
        $__internal_02bb1c2a093ff893c1abb0ae5e2a6c483648a4b21247b521d17c224392653704 = $this->env->getExtension("native_profiler");
        $__internal_02bb1c2a093ff893c1abb0ae5e2a6c483648a4b21247b521d17c224392653704->enter($__internal_02bb1c2a093ff893c1abb0ae5e2a6c483648a4b21247b521d17c224392653704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/form/datetime-form.html.twig"));

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

        // line 13
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "container-inline"), "method"), "html", null, true));
        echo ">
  ";
        // line 14
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
</div>
";
        
        $__internal_02bb1c2a093ff893c1abb0ae5e2a6c483648a4b21247b521d17c224392653704->leave($__internal_02bb1c2a093ff893c1abb0ae5e2a6c483648a4b21247b521d17c224392653704_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/datetime-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 14,  46 => 13,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override of a datetime form element.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the datetime form element.*/
/*  * - content: The datelist form element to be output.*/
/*  **/
/*  * @see template_preprocess_datetime_form()*/
/*  *//* */
/* #}*/
/* <div{{ attributes.addClass('container-inline') }}>*/
/*   {{ content }}*/
/* </div>*/
/* */
