<?php

/* themes/bootstrap/templates/input/datetime-form.html.twig */
class __TwigTemplate_05970ccb9c37f24e25efeb78a4c5e207e619529dc0b3a139e9a47ece93b3c6a0 extends Twig_Template
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
        $__internal_f18566703fbb89b60471bb5fccf2a506b8c4550608acd62a7391258873f23bf5 = $this->env->getExtension("native_profiler");
        $__internal_f18566703fbb89b60471bb5fccf2a506b8c4550608acd62a7391258873f23bf5->enter($__internal_f18566703fbb89b60471bb5fccf2a506b8c4550608acd62a7391258873f23bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap/templates/input/datetime-form.html.twig"));

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
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "container-inline", 1 => "form-inline"), "method"), "html", null, true));
        echo ">
  ";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
</div>
";
        
        $__internal_f18566703fbb89b60471bb5fccf2a506b8c4550608acd62a7391258873f23bf5->leave($__internal_f18566703fbb89b60471bb5fccf2a506b8c4550608acd62a7391258873f23bf5_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/input/datetime-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  46 => 15,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation of a datetime form element.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the datetime form element.*/
/*  * - content: The datelist form element to be output.*/
/*  **/
/*  * @see template_preprocess_datetime_form()*/
/*  **/
/*  * @ingroup templates*/
/*  *//* */
/* #}*/
/* <div{{ attributes.addClass('container-inline', 'form-inline') }}>*/
/*   {{ content }}*/
/* </div>*/
/* */
