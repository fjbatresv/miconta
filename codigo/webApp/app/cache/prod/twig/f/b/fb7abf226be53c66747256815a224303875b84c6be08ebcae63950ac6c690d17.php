<?php

/* AdmingeneratorGeneratorBundle:Form:fields.html.twig */
class __TwigTemplate_427249c6ad598eaf45ce7817393274d15fa2cc0ba9f61f81b19919245a7d7e92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'form_rows' => array($this, 'block_form_rows'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
            'form_errors' => array($this, 'block_form_errors'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('form_rows', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 38
        echo "
";
        // line 39
        $this->displayBlock('form_label', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('form_errors', $context, $blocks);
        // line 73
        echo "
";
        // line 74
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 89
        echo "
";
        // line 90
        $this->displayBlock('widget_attributes', $context, $blocks);
    }

    // line 1
    public function block_form_widget_compound($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 4
        if (twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()))) {
            // line 5
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            echo "
        ";
        }
        // line 7
        echo "        ";
        $this->displayBlock("form_rows", $context, $blocks);
        echo "
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 13
    public function block_form_rows($context, array $blocks = array())
    {
        // line 14
        ob_start();
        // line 15
        echo "    ";
        if (array_key_exists("options", $context)) {
            // line 16
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 17
                echo "            ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row', (isset($context["options"]) ? $context["options"] : null));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    ";
        } else {
            // line 20
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 21
                echo "            ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        // line 28
        ob_start();
        // line 29
        echo "    <div class=\"form-group ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            echo " has-error";
        }
        echo "\">
        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label');
        echo "
        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
        ";
        // line 32
        if ( !(isset($context["compound"]) ? $context["compound"] : null)) {
            // line 33
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            echo "
        ";
        }
        // line 35
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 39
    public function block_form_label($context, array $blocks = array())
    {
        // line 40
        ob_start();
        // line 41
        if ( !((isset($context["label"]) ? $context["label"] : null) === false)) {
            // line 42
            echo "    ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
            // line 43
            echo "    ";
            if ( !(isset($context["compound"]) ? $context["compound"] : null)) {
                // line 44
                echo "        ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("for" => (isset($context["id"]) ? $context["id"] : null)));
                // line 45
                echo "    ";
            }
            // line 46
            echo "    ";
            if ((isset($context["required"]) ? $context["required"] : null)) {
                // line 47
                echo "        ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 48
                echo "    ";
            }
            // line 49
            echo "    ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
                // line 50
                echo "        ";
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : null));
                // line 51
                echo "    ";
            }
            // line 52
            echo "    <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
            echo "</label>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 57
    public function block_form_errors($context, array $blocks = array())
    {
        // line 58
        ob_start();
        // line 59
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 60
            echo "    <span class=\"help-block form-control-feedback\">
        <ul class=\"form-errors\">
        ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 63
                echo "            <li>";
                echo twig_escape_filter($this->env, (((null === $this->getAttribute($context["error"], "messagePluralization", array()))) ? ($this->env->getExtension('translator')->trans($this->getAttribute(                // line 64
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messageParameters", array()), "validators")) : ($this->env->getExtension('translator')->transchoice($this->getAttribute(                // line 65
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messagePluralization", array()), $this->getAttribute($context["error"], "messageParameters", array()), "validators"))), "html", null, true);
                // line 66
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "        </ul>
    </span>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 74
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        // line 75
        ob_start();
        // line 76
        if ( !twig_test_empty((isset($context["id"]) ? $context["id"] : null))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\"";
        }
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 78
            echo " ";
            // line 79
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 80
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
                echo "\"";
            } elseif ((            // line 81
$context["attrvalue"] === true)) {
                // line 82
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 83
$context["attrvalue"] === false)) {
                // line 84
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 90
    public function block_widget_attributes($context, array $blocks = array())
    {
        // line 91
        ob_start();
        // line 92
        echo "    id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : null), "html", null, true);
        echo "\"";
        // line 93
        if ((isset($context["read_only"]) ? $context["read_only"] : null)) {
            echo " readonly=\"readonly\"";
        }
        // line 94
        if ((isset($context["disabled"]) ? $context["disabled"] : null)) {
            echo " disabled=\"disabled\"";
        }
        // line 95
        if ((isset($context["required"]) ? $context["required"] : null)) {
            echo " required=\"required\"";
        }
        // line 96
        if ((isset($context["max_length"]) ? $context["max_length"] : null)) {
            echo " maxlength=\"";
            echo twig_escape_filter($this->env, (isset($context["max_length"]) ? $context["max_length"] : null), "html", null, true);
            echo "\"";
        }
        // line 97
        if ((isset($context["pattern"]) ? $context["pattern"] : null)) {
            echo " pattern=\"";
            echo twig_escape_filter($this->env, (isset($context["pattern"]) ? $context["pattern"] : null), "html", null, true);
            echo "\"";
        }
        // line 99
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 102
            echo " ";
            // line 103
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 104
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
                echo "\"";
            } elseif ((            // line 105
$context["attrvalue"] === true)) {
                // line 106
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 107
$context["attrvalue"] === false)) {
                // line 108
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "AdmingeneratorGeneratorBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  371 => 108,  369 => 107,  364 => 106,  362 => 105,  357 => 104,  355 => 103,  353 => 102,  349 => 101,  347 => 99,  341 => 97,  335 => 96,  331 => 95,  327 => 94,  323 => 93,  317 => 92,  315 => 91,  312 => 90,  299 => 84,  297 => 83,  292 => 82,  290 => 81,  285 => 80,  283 => 79,  281 => 78,  277 => 77,  271 => 76,  269 => 75,  266 => 74,  258 => 68,  251 => 66,  249 => 65,  248 => 64,  246 => 63,  242 => 62,  238 => 60,  235 => 59,  233 => 58,  230 => 57,  208 => 52,  205 => 51,  202 => 50,  199 => 49,  196 => 48,  193 => 47,  190 => 46,  187 => 45,  184 => 44,  181 => 43,  178 => 42,  176 => 41,  174 => 40,  171 => 39,  165 => 35,  159 => 33,  157 => 32,  153 => 31,  149 => 30,  141 => 29,  139 => 28,  136 => 27,  130 => 23,  121 => 21,  116 => 20,  113 => 19,  104 => 17,  99 => 16,  96 => 15,  94 => 14,  91 => 13,  83 => 8,  78 => 7,  72 => 5,  70 => 4,  65 => 3,  63 => 2,  60 => 1,  56 => 90,  53 => 89,  51 => 74,  48 => 73,  46 => 57,  43 => 56,  41 => 39,  38 => 38,  36 => 27,  33 => 26,  31 => 13,  28 => 12,  26 => 1,);
    }
}
/* {% block form_widget_compound %}*/
/* {% spaceless %}*/
/*     <div {{ block('widget_container_attributes') }}>*/
/*         {% if form.parent is empty %}*/
/*             {{ form_errors(form) }}*/
/*         {% endif %}*/
/*         {{ block('form_rows') }}*/
/*         {{ form_rest(form) }}*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock form_widget_compound %}*/
/* */
/* {% block form_rows %}*/
/* {% spaceless %}*/
/*     {% if options is defined %}*/
/*         {% for child in form %}*/
/*             {{ form_row(child, options) }}*/
/*         {% endfor %}*/
/*     {% else %}*/
/*         {% for child in form %}*/
/*             {{ form_row(child) }}*/
/*         {% endfor %}*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock form_rows %}*/
/* */
/* {% block form_row %}*/
/* {% spaceless %}*/
/*     <div class="form-group {{ name }}{% if errors|length > 0 %} has-error{% endif %}">*/
/*         {{ form_label(form) }}*/
/*         {{ form_widget(form) }}*/
/*         {% if not compound %}*/
/*             {{ form_errors(form) }}*/
/*         {% endif %}*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock form_row %}*/
/* */
/* {% block form_label %}*/
/* {% spaceless %}*/
/* {% if label is not sameas(false) %}*/
/*     {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' control-label')|trim}) %}*/
/*     {% if not compound %}*/
/*         {% set label_attr = label_attr|merge({'for': id}) %}*/
/*     {% endif %}*/
/*     {% if required %}*/
/*         {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}*/
/*     {% endif %}*/
/*     {% if label is empty %}*/
/*         {% set label = name|humanize %}*/
/*     {% endif %}*/
/*     <label{% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>{{ label|trans({}, translation_domain) }}</label>*/
/* {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock form_label %}*/
/* */
/* {% block form_errors %}*/
/* {% spaceless %}*/
/*     {% if errors|length > 0 %}*/
/*     <span class="help-block form-control-feedback">*/
/*         <ul class="form-errors">*/
/*         {% for error in errors %}*/
/*             <li>{{ error.messagePluralization is null*/
/*                 ? error.messageTemplate|trans(error.messageParameters, 'validators')*/
/*                 : error.messageTemplate|transchoice(error.messagePluralization, error.messageParameters, 'validators')*/
/*             }}</li>*/
/*         {% endfor %}*/
/*         </ul>*/
/*     </span>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock form_errors %}*/
/* */
/* {% block widget_container_attributes %}*/
/* {% spaceless %}*/
/*     {%- if id is not empty %}id="{{ id }}"{% endif -%}*/
/*     {%- for attrname, attrvalue in attr -%}*/
/*         {{- " " -}}*/
/*         {%- if attrname in ['placeholder', 'title'] -%}*/
/*             {{- attrname }}="{{ attrvalue|trans({}, translation_domain) }}"*/
/*         {%- elseif attrvalue is sameas(true) -%}*/
/*             {{- attrname }}="{{ attrname }}"*/
/*         {%- elseif attrvalue is not sameas(false) -%}*/
/*             {{- attrname }}="{{ attrvalue }}"*/
/*         {%- endif -%}*/
/*     {%- endfor -%}*/
/* {% endspaceless %}*/
/* {% endblock widget_container_attributes %}*/
/* */
/* {% block widget_attributes %}*/
/* {% spaceless %}*/
/*     id="{{ id }}" name="{{ full_name }}"*/
/*     {%- if read_only %} readonly="readonly"{% endif -%}*/
/*     {%- if disabled %} disabled="disabled"{% endif -%}*/
/*     {%- if required %} required="required"{% endif -%}*/
/*     {%- if max_length %} maxlength="{{ max_length }}"{% endif -%}*/
/*     {%- if pattern %} pattern="{{ pattern }}"{% endif -%}*/
/* 	*/
/* 	{% set attr = attr|merge({'class': (attr.class|default('') ~ ' form-control')|trim}) %}*/
/* 	*/
/*     {%- for attrname, attrvalue in attr -%}*/
/*         {{- " " -}}*/
/*         {%- if attrname in ['placeholder', 'title'] -%}*/
/*             {{- attrname }}="{{ attrvalue|trans({}, translation_domain) }}"*/
/*         {%- elseif attrvalue is sameas(true) -%}*/
/*             {{- attrname }}="{{ attrname }}"*/
/*         {%- elseif attrvalue is not sameas(false) -%}*/
/*             {{- attrname }}="{{ attrvalue }}"*/
/*         {%- endif -%}*/
/*     {%- endfor -%}*/
/* {% endspaceless %}*/
/* {% endblock widget_attributes %}*/
/* */
