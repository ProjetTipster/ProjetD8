<?php

/* themes/bootstrap/templates/input/datetime-wrapper.html.twig */
class __TwigTemplate_85443ba111b506cd6b4724ff0265ccfd3463bc578ede2c167f719513dfd1d6f2 extends Twig_Template
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
        $__internal_83b1df75a227d3eeeb06d076b33caa2b44e73a6a47e057c523902d5c00dd3099 = $this->env->getExtension("native_profiler");
        $__internal_83b1df75a227d3eeeb06d076b33caa2b44e73a6a47e057c523902d5c00dd3099->enter($__internal_83b1df75a227d3eeeb06d076b33caa2b44e73a6a47e057c523902d5c00dd3099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap/templates/input/datetime-wrapper.html.twig"));

        $tags = array("set" => 19, "if" => 24);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
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

        // line 19
        $context["title_classes"] = array(0 => "control-label", 1 => ((        // line 21
(isset($context["required"]) ? $context["required"] : null)) ? ("form-required") : ("")));
        // line 24
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 25
            echo "  <label";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => (isset($context["title_classes"]) ? $context["title_classes"] : null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</label>
";
        }
        // line 27
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
";
        // line 28
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 29
            echo "  <p class=\"help-block\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true));
            echo "</p>
";
        }
        
        $__internal_83b1df75a227d3eeeb06d076b33caa2b44e73a6a47e057c523902d5c00dd3099->leave($__internal_83b1df75a227d3eeeb06d076b33caa2b44e73a6a47e057c523902d5c00dd3099_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/input/datetime-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 29,  63 => 28,  59 => 27,  51 => 25,  49 => 24,  47 => 21,  46 => 19,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation of a datetime form wrapper.*/
/*  **/
/*  * Available variables:*/
/*  * - content: The form element to be output, usually a datelist, or datetime.*/
/*  * - title: The title of the form element.*/
/*  * - title_attributes: HTML attributes for the title wrapper.*/
/*  * - description: Description text for the form element.*/
/*  * - required: An indicator for whether the associated form element is required.*/
/*  **/
/*  * @ingroup templates*/
/*  **/
/*  * @see template_preprocess_datetime_wrapper()*/
/*  *//* */
/* #}*/
/* {%*/
/*   set title_classes = [*/
/*     'control-label',*/
/*     required ? 'form-required',*/
/*   ]*/
/* %}*/
/* {% if title %}*/
/*   <label{{ title_attributes.addClass(title_classes) }}>{{ title }}</label>*/
/* {% endif %}*/
/* {{ content }}*/
/* {% if description %}*/
/*   <p class="help-block">{{ description }}</p>*/
/* {% endif %}*/
/* */
