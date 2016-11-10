<?php

/* themes/bootstrap/templates/system/pager.html.twig */
class __TwigTemplate_3ba1a70357a136a0e95f721533f24448bf982866bfbd283be9ba857a678025fd extends Twig_Template
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
        $__internal_dc1de66269c969f496870646e2557d0ff839f6253e21c088cebfc5a83b4d2050 = $this->env->getExtension("native_profiler");
        $__internal_dc1de66269c969f496870646e2557d0ff839f6253e21c088cebfc5a83b4d2050->enter($__internal_dc1de66269c969f496870646e2557d0ff839f6253e21c088cebfc5a83b4d2050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap/templates/system/pager.html.twig"));

        $tags = array("if" => 34, "for" => 60, "set" => 63);
        $filters = array("t" => 36, "default" => 44);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for', 'set'),
                array('t', 'default'),
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

        // line 34
        if ((isset($context["items"]) ? $context["items"] : null)) {
            // line 35
            echo "  <nav class=\"pager-nav text-center\" role=\"navigation\" aria-labelledby=\"pagination-heading\">
    <h4 id=\"pagination-heading\" class=\"visually-hidden\">";
            // line 36
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Pagination")));
            echo "</h4>
    <ul class=\"pagination js-pager__items\">

      ";
            // line 40
            echo "      ";
            if ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "first", array())) {
                // line 41
                echo "        <li class=\"pager__item pager__item--first\">
          <a href=\"";
                // line 42
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "first", array()), "href", array()), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Go to first page")));
                echo "\" rel=\"prev\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "first", array()), "attributes", array()), "html", null, true));
                echo ">
            <span class=\"visually-hidden\">";
                // line 43
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("First page")));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 44
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "first", array(), "any", false, true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "first", array(), "any", false, true), "text", array()), t("first"))) : (t("first"))), "html", null, true));
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 48
            echo "
      ";
            // line 50
            echo "      ";
            if ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array())) {
                // line 51
                echo "        <li class=\"pager__item pager__item--previous\">
          <a href=\"";
                // line 52
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array()), "href", array()), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Go to previous page")));
                echo "\" rel=\"prev\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array()), "attributes", array()), "html", null, true));
                echo ">
            <span class=\"visually-hidden\">";
                // line 53
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Previous page")));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 54
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array(), "any", false, true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array(), "any", false, true), "text", array()), t("previous"))) : (t("previous"))), "html", null, true));
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 58
            echo "
      ";
            // line 60
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "pages", array()));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 61
                echo "        <li class=\"pager__item";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(((((isset($context["current"]) ? $context["current"] : null) == $context["key"])) ? (" is-active active") : (""))));
                echo "\">
          ";
                // line 62
                if (((isset($context["current"]) ? $context["current"] : null) == $context["key"])) {
                    // line 63
                    echo "            ";
                    $context["title"] = t("Current page");
                    // line 64
                    echo "          ";
                } else {
                    // line 65
                    echo "            ";
                    $context["title"] = t("Go to page @key", array("@key" => $context["key"]));
                    // line 66
                    echo "          ";
                }
                // line 67
                echo "          <a href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "href", array()), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
                echo "\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "attributes", array()), "html", null, true));
                echo ">
            <span class=\"visually-hidden\">
              ";
                // line 69
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(((((isset($context["current"]) ? $context["current"] : null) == $context["key"])) ? (t("Current page")) : (t("Page")))));
                echo "
            </span>";
                // line 71
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["key"], "html", null, true));
                // line 72
                echo "</a>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "
      ";
            // line 77
            echo "      ";
            if ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array())) {
                // line 78
                echo "        <li class=\"pager__item pager__item--next\">
          <a href=\"";
                // line 79
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array()), "href", array()), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Go to next page")));
                echo "\" rel=\"next\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array()), "attributes", array()), "html", null, true));
                echo ">
            <span class=\"visually-hidden\">";
                // line 80
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Next page")));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 81
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array(), "any", false, true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array(), "any", false, true), "text", array()), t("next"))) : (t("next"))), "html", null, true));
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 85
            echo "
      ";
            // line 87
            echo "      ";
            if ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "last", array())) {
                // line 88
                echo "      <li class=\"pager__item pager__item--last\">
        <a href=\"";
                // line 89
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "last", array()), "href", array()), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Go to last page")));
                echo "\" rel=\"last\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "last", array()), "attributes", array()), "html", null, true));
                echo ">
          <span class=\"visually-hidden\">";
                // line 90
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Last page")));
                echo "</span>
          <span aria-hidden=\"true\">";
                // line 91
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "last", array(), "any", false, true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "last", array(), "any", false, true), "text", array()), t("last"))) : (t("last"))), "html", null, true));
                echo "</span>
        </a>
      </li>
      ";
            }
            // line 95
            echo "
    </ul>
  </nav>
";
        }
        
        $__internal_dc1de66269c969f496870646e2557d0ff839f6253e21c088cebfc5a83b4d2050->leave($__internal_dc1de66269c969f496870646e2557d0ff839f6253e21c088cebfc5a83b4d2050_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/system/pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 95,  210 => 91,  206 => 90,  198 => 89,  195 => 88,  192 => 87,  189 => 85,  182 => 81,  178 => 80,  170 => 79,  167 => 78,  164 => 77,  161 => 75,  153 => 72,  151 => 71,  147 => 69,  137 => 67,  134 => 66,  131 => 65,  128 => 64,  125 => 63,  123 => 62,  118 => 61,  113 => 60,  110 => 58,  103 => 54,  99 => 53,  91 => 52,  88 => 51,  85 => 50,  82 => 48,  75 => 44,  71 => 43,  63 => 42,  60 => 41,  57 => 40,  51 => 36,  48 => 35,  46 => 34,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a pager.*/
/*  **/
/*  * Available variables:*/
/*  * - items: List of pager items.*/
/*  *   The list is keyed by the following elements:*/
/*  *   - first: Item for the first page; not present on the first page of results.*/
/*  *   - previous: Item for the previous page; not present on the first page*/
/*  *     of results.*/
/*  *   - next: Item for the next page; not present on the last page of results.*/
/*  *   - last: Item for the last page; not present on the last page of results.*/
/*  *   - pages: List of pages, keyed by page number.*/
/*  *   Sub-sub elements:*/
/*  *   items.first, items.previous, items.next, items.last, and each item inside*/
/*  *   items.pages contain the following elements:*/
/*  *   - href: URL with appropriate query parameters for the item.*/
/*  *   - attributes: A keyed list of HTML attributes for the item.*/
/*  *   - text: The visible text used for the item link, such as "‹ previous"*/
/*  *     or "next ›".*/
/*  * - current: The page number of the current page.*/
/*  * - ellipses: If there are more pages than the quantity allows, then an*/
/*  *   ellipsis before or after the listed pages may be present.*/
/*  *   - previous: Present if the currently visible list of pages does not start*/
/*  *     at the first page.*/
/*  *   - next: Present if the visible list of pages ends before the last page.*/
/*  **/
/*  * @ingroup templates*/
/*  **/
/*  * @see template_preprocess_pager()*/
/*  *//* */
/* #}*/
/* {% if items %}*/
/*   <nav class="pager-nav text-center" role="navigation" aria-labelledby="pagination-heading">*/
/*     <h4 id="pagination-heading" class="visually-hidden">{{ 'Pagination'|t }}</h4>*/
/*     <ul class="pagination js-pager__items">*/
/* */
/*       {# Print first item if we are not on the first page. #}*/
/*       {% if items.first %}*/
/*         <li class="pager__item pager__item--first">*/
/*           <a href="{{ items.first.href }}" title="{{ 'Go to first page'|t }}" rel="prev"{{ items.first.attributes }}>*/
/*             <span class="visually-hidden">{{ 'First page'|t }}</span>*/
/*             <span aria-hidden="true">{{ items.first.text|default('first'|t) }}</span>*/
/*           </a>*/
/*         </li>*/
/*       {% endif %}*/
/* */
/*       {# Print previous item if we are not on the first page. #}*/
/*       {% if items.previous %}*/
/*         <li class="pager__item pager__item--previous">*/
/*           <a href="{{ items.previous.href }}" title="{{ 'Go to previous page'|t }}" rel="prev"{{ items.previous.attributes }}>*/
/*             <span class="visually-hidden">{{ 'Previous page'|t }}</span>*/
/*             <span aria-hidden="true">{{ items.previous.text|default('previous'|t) }}</span>*/
/*           </a>*/
/*         </li>*/
/*       {% endif %}*/
/* */
/*       {# Now generate the actual pager piece. #}*/
/*       {% for key, item in items.pages %}*/
/*         <li class="pager__item{{ current == key ? ' is-active active' : '' }}">*/
/*           {% if current == key %}*/
/*             {% set title = 'Current page'|t %}*/
/*           {% else %}*/
/*             {% set title = 'Go to page @key'|t({'@key': key}) %}*/
/*           {% endif %}*/
/*           <a href="{{ item.href }}" title="{{ title }}"{{ item.attributes }}>*/
/*             <span class="visually-hidden">*/
/*               {{ current == key ? 'Current page'|t : 'Page'|t }}*/
/*             </span>*/
/*             {{- key -}}*/
/*           </a>*/
/*         </li>*/
/*       {% endfor %}*/
/* */
/*       {# Print next item if we are not on the last page. #}*/
/*       {% if items.next %}*/
/*         <li class="pager__item pager__item--next">*/
/*           <a href="{{ items.next.href }}" title="{{ 'Go to next page'|t }}" rel="next"{{ items.next.attributes }}>*/
/*             <span class="visually-hidden">{{ 'Next page'|t }}</span>*/
/*             <span aria-hidden="true">{{ items.next.text|default('next'|t) }}</span>*/
/*           </a>*/
/*         </li>*/
/*       {% endif %}*/
/* */
/*       {# Print last item if we are not on the last page. #}*/
/*       {% if items.last %}*/
/*       <li class="pager__item pager__item--last">*/
/*         <a href="{{ items.last.href }}" title="{{ 'Go to last page'|t }}" rel="last"{{ items.last.attributes }}>*/
/*           <span class="visually-hidden">{{ 'Last page'|t }}</span>*/
/*           <span aria-hidden="true">{{ items.last.text|default('last'|t) }}</span>*/
/*         </a>*/
/*       </li>*/
/*       {% endif %}*/
/* */
/*     </ul>*/
/*   </nav>*/
/* {% endif %}*/
/* */
