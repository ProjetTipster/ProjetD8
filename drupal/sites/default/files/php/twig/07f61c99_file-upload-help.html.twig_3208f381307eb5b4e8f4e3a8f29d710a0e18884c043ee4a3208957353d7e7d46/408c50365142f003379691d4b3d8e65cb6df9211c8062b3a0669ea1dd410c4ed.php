<?php

/* themes/bootstrap/templates/file/file-upload-help.html.twig */
class __TwigTemplate_6e5b4236fb54e063a4434f56865357fa521aa4191669395f8451f5e16c0c61fc extends Twig_Template
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
        $__internal_d927f6898a051d2997ad9524b993553b1380c80b55c35524d94fc15aebda5006 = $this->env->getExtension("native_profiler");
        $__internal_d927f6898a051d2997ad9524b993553b1380c80b55c35524d94fc15aebda5006->enter($__internal_d927f6898a051d2997ad9524b993553b1380c80b55c35524d94fc15aebda5006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap/templates/file/file-upload-help.html.twig"));

        $tags = array("if" => 16);
        $filters = array("safe_join" => 22);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('safe_join'),
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

        // line 16
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 17
            echo "  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true));
            echo "<br>
";
        }
        // line 19
        if ((isset($context["popover"]) ? $context["popover"] : null)) {
            // line 20
            echo "  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["popover"]) ? $context["popover"] : null), "html", null, true));
            echo "
";
        } else {
            // line 22
            echo "  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->safeJoin($this->env, (isset($context["descriptions"]) ? $context["descriptions"] : null), "<br>")));
            echo "
";
        }
        
        $__internal_d927f6898a051d2997ad9524b993553b1380c80b55c35524d94fc15aebda5006->leave($__internal_d927f6898a051d2997ad9524b993553b1380c80b55c35524d94fc15aebda5006_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/file/file-upload-help.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 22,  56 => 20,  54 => 19,  48 => 17,  46 => 16,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display help text for file fields.*/
/*  **/
/*  * Available variables:*/
/*  * - description: The normal description for this field, specified by the user.*/
/*  * - descriptions: Lines of help text for uploading a file.*/
/*  * - popover: Markup to display the descriptions as a popover instead.*/
/*  **/
/*  * @ingroup templates*/
/*  **/
/*  * @see template_preprocess_file_upload_help()*/
/*  *//* */
/* #}*/
/* {% if description %}*/
/*   {{ description }}<br>*/
/* {% endif %}*/
/* {% if popover %}*/
/*   {{ popover }}*/
/* {% else %}*/
/*   {{ descriptions|safe_join('<br>') }}*/
/* {% endif %}*/
/* */
