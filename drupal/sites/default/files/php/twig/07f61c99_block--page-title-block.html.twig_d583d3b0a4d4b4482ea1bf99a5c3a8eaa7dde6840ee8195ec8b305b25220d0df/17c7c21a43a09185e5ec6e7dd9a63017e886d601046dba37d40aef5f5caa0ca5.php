<?php

/* themes/bootstrap/templates/block/block--page-title-block.html.twig */
class __TwigTemplate_eb02dc4d513d239cde4d7f8f16332da0cc82dc93c8f40a0ff91200c0ea2003a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("block--bare.html.twig", "themes/bootstrap/templates/block/block--page-title-block.html.twig", 9);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "block--bare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ffa8608a0bf02400f3d0626196b1a54ef5bf0338e37ed28d00503bbe8e25df34 = $this->env->getExtension("native_profiler");
        $__internal_ffa8608a0bf02400f3d0626196b1a54ef5bf0338e37ed28d00503bbe8e25df34->enter($__internal_ffa8608a0bf02400f3d0626196b1a54ef5bf0338e37ed28d00503bbe8e25df34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap/templates/block/block--page-title-block.html.twig"));

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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffa8608a0bf02400f3d0626196b1a54ef5bf0338e37ed28d00503bbe8e25df34->leave($__internal_ffa8608a0bf02400f3d0626196b1a54ef5bf0338e37ed28d00503bbe8e25df34_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/block/block--page-title-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 9,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for page title block.*/
/*  **/
/*  * @ingroup templates*/
/*  *//* */
/* #}*/
/* {% extends "block--bare.html.twig" %}*/
/* */
