<?php

/* core/themes/stable/templates/block/block--system-messages-block.html.twig */
class __TwigTemplate_391a056fa6546e0f0802a494efb420417f98c05c4ea20375f2cfed9855ad97ca extends Twig_Template
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
        $__internal_12edd4f7a4e883ae4a2896dcd4862b7e157484fe4ab7f3eed5f3f77488328b61 = $this->env->getExtension("native_profiler");
        $__internal_12edd4f7a4e883ae4a2896dcd4862b7e157484fe4ab7f3eed5f3f77488328b61->enter($__internal_12edd4f7a4e883ae4a2896dcd4862b7e157484fe4ab7f3eed5f3f77488328b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/stable/templates/block/block--system-messages-block.html.twig"));

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
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
";
        
        $__internal_12edd4f7a4e883ae4a2896dcd4862b7e157484fe4ab7f3eed5f3f77488328b61->leave($__internal_12edd4f7a4e883ae4a2896dcd4862b7e157484fe4ab7f3eed5f3f77488328b61_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/block/block--system-messages-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 13,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for the messages block.*/
/*  **/
/*  * Removes wrapper elements from block so that empty block does not appear when*/
/*  * there are no messages.*/
/*  **/
/*  * Available variables:*/
/*  * - content: The content of this block.*/
/*  *//* */
/* #}*/
/* {{ content }}*/
/* */