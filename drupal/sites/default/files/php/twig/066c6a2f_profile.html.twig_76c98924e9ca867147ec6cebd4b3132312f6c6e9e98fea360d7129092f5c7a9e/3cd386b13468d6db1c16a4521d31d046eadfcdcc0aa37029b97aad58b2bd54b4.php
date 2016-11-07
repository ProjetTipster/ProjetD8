<?php

/* modules/contrib/profile/templates/profile.html.twig */
class __TwigTemplate_0867fc7fa726efbf567f79706838452f2415f3e01b91027f1bf65ad3252499f9 extends Twig_Template
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
        $__internal_e580944db17fc4ec49e37956f5e9a953787aa5b80c74b011827297df26db218c = $this->env->getExtension("native_profiler");
        $__internal_e580944db17fc4ec49e37956f5e9a953787aa5b80c74b011827297df26db218c->enter($__internal_e580944db17fc4ec49e37956f5e9a953787aa5b80c74b011827297df26db218c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/profile/templates/profile.html.twig"));

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

        // line 22
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
  ";
        // line 23
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
</div>
";
        
        $__internal_e580944db17fc4ec49e37956f5e9a953787aa5b80c74b011827297df26db218c->leave($__internal_e580944db17fc4ec49e37956f5e9a953787aa5b80c74b011827297df26db218c_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/profile/templates/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 23,  46 => 22,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  **/
/*  * Default theme implementation for profiles.*/
/*  **/
/*  * Available variables:*/
/*  * - content: Items for the content of the profile.*/
/*  *   Use 'content' to print them all, or print a subset such as*/
/*  *   'content.title'. Use the following code to exclude the*/
/*  *   printing of a given child element:*/
/*  *   @code*/
/*  *   {{ content|without('title') }}*/
/*  *   @endcode*/
/*  * - attributes: HTML attributes for the wrapper.*/
/*  * - profile: The profile object.*/
/*  * - url: The profile URL.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <div{{ attributes }}>*/
/*   {{ content }}*/
/* </div>*/
/* */
