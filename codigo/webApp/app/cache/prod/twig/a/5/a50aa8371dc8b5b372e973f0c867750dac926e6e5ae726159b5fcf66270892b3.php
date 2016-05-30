<?php

/* MiContaSoporteBundle:Default:login.html.twig */
class __TwigTemplate_b5b6494778eeb9831add83f6c6ddee122f2e641aca6c8b8708929def14cd887f extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"UTF-8\">
    <title>AdminLTE 2 | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <!-- Bootstrap 3.3.4 -->
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Font Awesome Icons -->
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Theme style -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- iCheck -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/plugins/iCheck/square/blue.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>
  <body class=\"login-page\">
    <div class=\"login-box\">
      <div class=\"login-logo\">
        <a href=\"../../index2.html\"><b>GE</b>A</a>
      </div><!-- /.login-logo -->
      <div class=\"login-box-body\">
        <p class=\"login-box-msg\">Inicia tu sesión</p>
        ";
        // line 31
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 32
            echo "            <div class=\"login-box-msg has-error\">
            <label class='control-label'>
                <i class='fa fa-times-circle-o'></i>
                ";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
            echo "
            </label>
        </div>
        ";
        }
        // line 39
        echo "        <form action=\"";
        echo $this->env->getExtension('routing')->getPath("usuario_login");
        echo "\" method=\"post\">
          <div class=\"form-group has-feedback\">
            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "usuario", array()), 'widget');
        echo "
            <span class=\"fa fa-user form-control-feedback\"></span>
          </div>
          <div class=\"form-group has-feedback\">
            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "pass", array()), 'widget');
        echo "
            <span class=\"fa fa-lock form-control-feedback\"></span>
          </div>
            ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
          <div class=\"row\">
            <div class=\"col-xs-8\">
            </div><!-- /.col -->
            <div class=\"col-xs-4\">
              <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Ingresar</button>
            </div><!-- /.col -->
          </div>
        </form>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/plugins/jQuery/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- iCheck -->
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/plugins/iCheck/icheck.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script>
      \$(function () {
        \$('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "MiContaSoporteBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 66,  115 => 64,  110 => 62,  93 => 48,  87 => 45,  80 => 41,  74 => 39,  67 => 35,  62 => 32,  60 => 31,  41 => 15,  36 => 13,  29 => 9,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*   <head>*/
/*     <meta charset="UTF-8">*/
/*     <title>AdminLTE 2 | Log in</title>*/
/*     <!-- Tell the browser to be responsive to screen width -->*/
/*     <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">*/
/*     <!-- Bootstrap 3.3.4 -->*/
/*     <link href="{{asset('/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />*/
/*     <!-- Font Awesome Icons -->*/
/*     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />*/
/*     <!-- Theme style -->*/
/*     <link href="{{asset('/dist/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css" />*/
/*     <!-- iCheck -->*/
/*     <link href="{{asset('/plugins/iCheck/square/blue.css')}}" rel="stylesheet" type="text/css" />*/
/* */
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*         <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*         <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/*   </head>*/
/*   <body class="login-page">*/
/*     <div class="login-box">*/
/*       <div class="login-logo">*/
/*         <a href="../../index2.html"><b>GE</b>A</a>*/
/*       </div><!-- /.login-logo -->*/
/*       <div class="login-box-body">*/
/*         <p class="login-box-msg">Inicia tu sesión</p>*/
/*         {% if error %}*/
/*             <div class="login-box-msg has-error">*/
/*             <label class='control-label'>*/
/*                 <i class='fa fa-times-circle-o'></i>*/
/*                 {{ error }}*/
/*             </label>*/
/*         </div>*/
/*         {% endif %}*/
/*         <form action="{{ path('usuario_login') }}" method="post">*/
/*           <div class="form-group has-feedback">*/
/*             {{ form_widget(form.usuario) }}*/
/*             <span class="fa fa-user form-control-feedback"></span>*/
/*           </div>*/
/*           <div class="form-group has-feedback">*/
/*             {{ form_widget(form.pass) }}*/
/*             <span class="fa fa-lock form-control-feedback"></span>*/
/*           </div>*/
/*             {{ form_rest(form) }}*/
/*           <div class="row">*/
/*             <div class="col-xs-8">*/
/*             </div><!-- /.col -->*/
/*             <div class="col-xs-4">*/
/*               <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>*/
/*             </div><!-- /.col -->*/
/*           </div>*/
/*         </form>*/
/* */
/*       </div><!-- /.login-box-body -->*/
/*     </div><!-- /.login-box -->*/
/* */
/*     <!-- jQuery 2.1.4 -->*/
/*     <script src="{{asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}" type="text/javascript"></script>*/
/*     <!-- Bootstrap 3.3.2 JS -->*/
/*     <script src="{{asset('/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>*/
/*     <!-- iCheck -->*/
/*     <script src="{{asset('/plugins/iCheck/icheck.min.js') }}" type="text/javascript"></script>*/
/*     <script>*/
/*       $(function () {*/
/*         $('input').iCheck({*/
/*           checkboxClass: 'icheckbox_square-blue',*/
/*           radioClass: 'iradio_square-blue',*/
/*           increaseArea: '20%' // optional*/
/*         });*/
/*       });*/
/*     </script>*/
/*   </body>*/
/* </html>*/
/* */
