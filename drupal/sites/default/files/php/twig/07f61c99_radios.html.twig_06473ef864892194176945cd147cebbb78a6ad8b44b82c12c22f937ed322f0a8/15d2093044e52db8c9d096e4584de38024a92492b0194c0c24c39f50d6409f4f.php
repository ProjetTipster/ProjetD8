<?php

/* core/modules/system/templates/radios.html.twig */
class __TwigTemplate_416fddc2f9ce5f44cbcb6317be9c42ed539911185b281cc6949a7d2cd7c56a80 extends Twig_Template
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
        $__internal_f26a3c85ad9a5bd6616006d721307995f483344e910eb23d6e5bd4f331adc0fa = $this->env->getExtension("native_profiler");
        $__internal_f26a3c85ad9a5bd6616006d721307995f483344e910eb23d6e5bd4f331adc0fa->enter($__internal_f26a3c85ad9a5bd6616006d721307995f483344e910eb23d6e5bd4f331adc0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/modules/system/templates/radios.html.twig"));

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
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "</div>
";
        
        $__internal_f26a3c85ad9a5bd6616006d721307995f483344e910eb23d6e5bd4f331adc0fa->leave($__internal_f26a3c85ad9a5bd6616006d721307995f483344e910eb23d6e5bd4f331adc0fa_prof);

    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/radios.html.twig";
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
/*  * Default theme implementation for a 'radios' #type form element.*/
/*  **/
/*  * Available variables*/
/*  * - attributes: A list of HTML attributes for the wrapper element.*/
/*  * - children: The rendered radios.*/
/*  **/
/*  * @see template_preprocess_radios()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <div{{ attributes }}>{{ children }}</div>*/
/* */
