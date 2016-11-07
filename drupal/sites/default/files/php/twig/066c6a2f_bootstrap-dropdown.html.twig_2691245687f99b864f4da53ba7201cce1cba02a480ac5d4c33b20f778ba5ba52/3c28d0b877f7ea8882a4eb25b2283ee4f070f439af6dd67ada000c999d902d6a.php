<?php

/* themes/bootstrap/templates/bootstrap/bootstrap-dropdown.html.twig */
class __TwigTemplate_f26b776f1d98b2065fbc5c477c2ff645c8a4f6fb1faceff9c59e64f3c6c8f4f4 extends Twig_Template
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
        $__internal_f276c64b9c6af904f52c1b8c9ea60d1f8261c7a735b0ff8ed08a72267d143911 = $this->env->getExtension("native_profiler");
        $__internal_f276c64b9c6af904f52c1b8c9ea60d1f8261c7a735b0ff8ed08a72267d143911->enter($__internal_f276c64b9c6af904f52c1b8c9ea60d1f8261c7a735b0ff8ed08a72267d143911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap/templates/bootstrap/bootstrap-dropdown.html.twig"));

        $tags = array("set" => 17);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set'),
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

        // line 17
        $context["classes"] = array(0 => "btn-group", 1 => (((        // line 19
(isset($context["alignment"]) ? $context["alignment"] : null) == "up")) ? ("dropup") : ("")));
        // line 22
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  ";
        // line 23
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["toggle"]) ? $context["toggle"] : null), "html", null, true));
        echo "
  ";
        // line 24
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["items"]) ? $context["items"] : null), "html", null, true));
        echo "
</div>
";
        
        $__internal_f276c64b9c6af904f52c1b8c9ea60d1f8261c7a735b0ff8ed08a72267d143911->leave($__internal_f276c64b9c6af904f52c1b8c9ea60d1f8261c7a735b0ff8ed08a72267d143911_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/bootstrap/bootstrap-dropdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 24,  54 => 23,  49 => 22,  47 => 19,  46 => 17,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a Bootstrap Dropdown component.*/
/*  **/
/*  * Available variables:*/
/*  * - alignment: (optional) The alignment of the dropdown menu.*/
/*  * - attributes: An array of HTML attributes intended to be added to the main*/
/*  *   container tag of this template.*/
/*  * - items: The dropdown menu items.*/
/*  * - toggle: The toggle element.*/
/*  **/
/*  * @ingroup templates*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'btn-group',*/
/*     alignment == 'up' ? 'dropup',*/
/*   ]*/
/* %}*/
/* <div{{ attributes.addClass(classes) }}>*/
/*   {{ toggle }}*/
/*   {{ items }}*/
/* </div>*/
/* */
