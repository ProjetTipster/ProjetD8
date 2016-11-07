<?php

/* themes/bootstrap/templates/input/input--button--split.html.twig */
class __TwigTemplate_f0b0d20271063781bed37808e0703f009d39df5c7dbd7184d08bb1cb3cad8848 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("input--button.html.twig", "themes/bootstrap/templates/input/input--button--split.html.twig", 1);
        $this->blocks = array(
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "input--button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1de99ab511bc0aad8fded3b83afd03b6772363134aeb397a8d9ab25e1712394 = $this->env->getExtension("native_profiler");
        $__internal_d1de99ab511bc0aad8fded3b83afd03b6772363134aeb397a8d9ab25e1712394->enter($__internal_d1de99ab511bc0aad8fded3b83afd03b6772363134aeb397a8d9ab25e1712394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap/templates/input/input--button--split.html.twig"));

        $tags = array("spaceless" => 25, "set" => 27, "if" => 34);
        $filters = array("t" => 55);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('spaceless', 'set', 'if'),
                array('t'),
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

        // line 25
        ob_start();
        // line 27
        $context["classes"] = array(0 => "btn", 1 => (((        // line 29
(isset($context["type"]) ? $context["type"] : null) == "submit")) ? ("js-form-submit") : ("")), 2 => ((((        // line 30
(isset($context["icon"]) ? $context["icon"] : null) && (isset($context["icon_position"]) ? $context["icon_position"] : null)) &&  !(isset($context["icon_only"]) ? $context["icon_only"] : null))) ? (("icon-" . (isset($context["icon_position"]) ? $context["icon_position"] : null))) : ("")));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1de99ab511bc0aad8fded3b83afd03b6772363134aeb397a8d9ab25e1712394->leave($__internal_d1de99ab511bc0aad8fded3b83afd03b6772363134aeb397a8d9ab25e1712394_prof);

    }

    // line 33
    public function block_input($context, array $blocks = array())
    {
        $__internal_a6aa3764932eef6882865db3cb98ed217ce336a5072ab74a5374b9706b68cebc = $this->env->getExtension("native_profiler");
        $__internal_a6aa3764932eef6882865db3cb98ed217ce336a5072ab74a5374b9706b68cebc->enter($__internal_a6aa3764932eef6882865db3cb98ed217ce336a5072ab74a5374b9706b68cebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "input"));

        // line 34
        echo "    ";
        if ((isset($context["icon_only"]) ? $context["icon_only"] : null)) {
            // line 35
            echo "      <button";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null), 1 => "icon-only"), "method"), "html", null, true));
            echo ">
        <span class=\"sr-only\">";
            // line 36
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</span>
        ";
            // line 37
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true));
            echo "
      </button>
    ";
        } else {
            // line 40
            echo "      ";
            if (((isset($context["icon_position"]) ? $context["icon_position"] : null) == "after")) {
                // line 41
                echo "        <button";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
                echo ">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true));
                echo "</button>";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
                echo "
      ";
            } else {
                // line 43
                echo "        <button";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
                echo ">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true));
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
                echo "</button>";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
                echo "
      ";
            }
            // line 45
            echo "    ";
        }
        // line 46
        echo "    ";
        // line 47
        $context["classes"] = array(0 => "btn", 1 => "dropdown-toggle", 2 => (($this->getAttribute($this->getAttribute(        // line 50
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "button_size", array())) ? ($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "button_size", array())) : ("")));
        // line 53
        echo "    <button";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["split_button_attributes"]) ? $context["split_button_attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo " type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
      <span class=\"caret\"></span>
      <span class=\"sr-only\">";
        // line 55
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Toggle Dropdown")));
        echo "</span>
    </button>
    ";
        // line 57
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "
  ";
        
        $__internal_a6aa3764932eef6882865db3cb98ed217ce336a5072ab74a5374b9706b68cebc->leave($__internal_a6aa3764932eef6882865db3cb98ed217ce336a5072ab74a5374b9706b68cebc_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/input/input--button--split.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 57,  129 => 55,  123 => 53,  121 => 50,  120 => 47,  118 => 46,  115 => 45,  104 => 43,  93 => 41,  90 => 40,  84 => 37,  80 => 36,  75 => 35,  72 => 34,  66 => 33,  59 => 1,  56 => 30,  55 => 29,  54 => 27,  52 => 25,  11 => 1,);
    }
}
/* {% extends "input--button.html.twig" %}*/
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme suggestion for "button__split" input form element.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: A list of HTML attributes for the input element.*/
/*  * - children: Optional additional rendered elements.*/
/*  * - icon: An icon.*/
/*  * - icon_only: Flag to display only the icon and not the label.*/
/*  * - icon_position: Where an icon should be displayed.*/
/*  * - label: button label.*/
/*  * - prefix: Markup to display before the input element.*/
/*  * - suffix: Markup to display after the input element.*/
/*  * - type: The type of input.*/
/*  **/
/*  * @ingroup templates*/
/*  **/
/*  * @see \Drupal\bootstrap\Plugin\Preprocess\InputButton*/
/*  * @see \Drupal\bootstrap\Plugin\Preprocess\Input*/
/*  * @see template_preprocess_input()*/
/*  *//* */
/* #}*/
/* {% spaceless %}*/
/*   {%*/
/*     set classes = [*/
/*       'btn',*/
/*       type == 'submit' ? 'js-form-submit',*/
/*       icon and icon_position and not icon_only ? 'icon-' ~ icon_position,*/
/*     ]*/
/*   %}*/
/*   {% block input %}*/
/*     {% if icon_only %}*/
/*       <button{{ attributes.addClass(classes, 'icon-only') }}>*/
/*         <span class="sr-only">{{ label }}</span>*/
/*         {{ icon }}*/
/*       </button>*/
/*     {% else %}*/
/*       {% if icon_position == 'after' %}*/
/*         <button{{ attributes.addClass(classes) }}>{{ label }}{{ icon }}</button>{{ children }}*/
/*       {% else %}*/
/*         <button{{ attributes.addClass(classes) }}>{{ icon }}{{ label }}</button>{{ children }}*/
/*       {% endif %}*/
/*     {% endif %}*/
/*     {%*/
/*       set classes = [*/
/*         'btn',*/
/*         'dropdown-toggle',*/
/*         theme.settings.button_size ? theme.settings.button_size,*/
/*       ]*/
/*     %}*/
/*     <button{{ split_button_attributes.addClass(classes) }} type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">*/
/*       <span class="caret"></span>*/
/*       <span class="sr-only">{{ 'Toggle Dropdown'|t }}</span>*/
/*     </button>*/
/*     {{ children }}*/
/*   {% endblock %}*/
/* {% endspaceless %}*/
/* */
