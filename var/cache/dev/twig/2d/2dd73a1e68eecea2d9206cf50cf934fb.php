<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* base.html.twig */
class __TwigTemplate_fb8e4008109a4336f40ad21b181f7ae6 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'importmap' => [$this, 'block_importmap'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
  <link rel=\"icon\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/icon.png"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"https://bootswatch.com/5/darkly/bootstrap.min.css\">

  <style>
    h1 {
      text-align: center;
      margin-top: 50px;
      font-size: 50px;
    }

    h4 {
      text-align: center;
      font-size: 35px;
    }

    h2 {
      font-size: 50px;
    }

    h3 {
      font-size: 40px;
    }

    ul {
      list-style-type: none;
    }

    .card-container {
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
      gap: 30px;
      margin-top: 50px;
      width: 100%;
      flex-wrap: wrap;
    }

    /* Styles pour les cartes */
    .flip-card {
      background-color: transparent;
      width: 500px; /* Augmenter la largeur des cartes */
      height: 400px; /* Hauteur ajustée */
      perspective: 1000px;
      cursor: pointer;
      margin-bottom: 20px;
    }

    /* Partie interne des cartes */
    .flip-card-inner {
      width: 100%;
      height: 100%;
      text-align: center;
      transition: transform 0.8s;
      transform-style: preserve-3d;
      position: relative;
    }

    .flip-card-front,
    .flip-card-back {
      position: absolute;
      width: 100%;
      height: 100%;
      backface-visibility: hidden;
      display: flex;
      justify-content: center;
      align-items: center;
      align:center;
      border-radius: 15px;
      box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);
    }

    .flip-card-front {
      background: rgb(134, 120, 117);
      color: white;
      font-size: 30px;
        display: flex;
        flex-direction: column;
        justify-content: center;  /* Centre verticalement */
        align-items: center;      /* Centre horizontalement */
        text-align: center;
    }

    .flip-card-back {
      background: rgb(74, 66, 65);
      color: white;
      font-size: 24px;
      transform: rotateY(180deg);
      display: flex;
      flex-direction: column;
      justify-content: center;  /* Centre verticalement */
      align-items: center;      /* Centre horizontalement */
      text-align: center;
    }
    .flip-card-back ul {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 0;
    margin: 0;
    width: 100%;
    height: 100%;
    list-style: none;
    }

    .flip-card-back ul li {
    width: 100%;
    text-align: center;
    }

    .flip-card-back ul img {
    max-width: 90%;
    height: auto;
    border-radius: 10px;
    margin-bottom: 10px;
    }
    .flip-card-inner.flipped {
      transform: rotateY(180deg);
    }

    /* Responsive */
    @media (max-width: 768px) {
      .flip-card {
        width: 300px; /* Réduit la largeur pour les petits écrans */
        height: 400px; /* Réduit la hauteur pour les petits écrans */
      }
      h1 {
        font-size: 35px;
      }

      h4 {
        font-size: 24px;
      }

      h2 {
        font-size: 30px;
      }
    }
  </style>

  ";
        // line 148
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 149
        yield "  ";
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 152
        yield "</head>
<body>
  ";
        // line 154
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 155
        yield "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 148
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 149
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 150
        yield "    ";
        yield from $this->unwrap()->yieldBlock('importmap', $context, $blocks);
        // line 151
        yield "  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 150
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_importmap(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\ImportMapRuntime')->importmap("app");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 154
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  327 => 154,  304 => 150,  293 => 151,  290 => 150,  277 => 149,  255 => 148,  232 => 6,  219 => 155,  217 => 154,  213 => 152,  210 => 149,  208 => 148,  64 => 7,  60 => 6,  53 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title>{% block title %}Welcome!{% endblock %}</title>
  <link rel=\"icon\" href=\"{{ asset('uploads/icon.png') }}\">
  <link rel=\"stylesheet\" href=\"https://bootswatch.com/5/darkly/bootstrap.min.css\">

  <style>
    h1 {
      text-align: center;
      margin-top: 50px;
      font-size: 50px;
    }

    h4 {
      text-align: center;
      font-size: 35px;
    }

    h2 {
      font-size: 50px;
    }

    h3 {
      font-size: 40px;
    }

    ul {
      list-style-type: none;
    }

    .card-container {
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
      gap: 30px;
      margin-top: 50px;
      width: 100%;
      flex-wrap: wrap;
    }

    /* Styles pour les cartes */
    .flip-card {
      background-color: transparent;
      width: 500px; /* Augmenter la largeur des cartes */
      height: 400px; /* Hauteur ajustée */
      perspective: 1000px;
      cursor: pointer;
      margin-bottom: 20px;
    }

    /* Partie interne des cartes */
    .flip-card-inner {
      width: 100%;
      height: 100%;
      text-align: center;
      transition: transform 0.8s;
      transform-style: preserve-3d;
      position: relative;
    }

    .flip-card-front,
    .flip-card-back {
      position: absolute;
      width: 100%;
      height: 100%;
      backface-visibility: hidden;
      display: flex;
      justify-content: center;
      align-items: center;
      align:center;
      border-radius: 15px;
      box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);
    }

    .flip-card-front {
      background: rgb(134, 120, 117);
      color: white;
      font-size: 30px;
        display: flex;
        flex-direction: column;
        justify-content: center;  /* Centre verticalement */
        align-items: center;      /* Centre horizontalement */
        text-align: center;
    }

    .flip-card-back {
      background: rgb(74, 66, 65);
      color: white;
      font-size: 24px;
      transform: rotateY(180deg);
      display: flex;
      flex-direction: column;
      justify-content: center;  /* Centre verticalement */
      align-items: center;      /* Centre horizontalement */
      text-align: center;
    }
    .flip-card-back ul {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 0;
    margin: 0;
    width: 100%;
    height: 100%;
    list-style: none;
    }

    .flip-card-back ul li {
    width: 100%;
    text-align: center;
    }

    .flip-card-back ul img {
    max-width: 90%;
    height: auto;
    border-radius: 10px;
    margin-bottom: 10px;
    }
    .flip-card-inner.flipped {
      transform: rotateY(180deg);
    }

    /* Responsive */
    @media (max-width: 768px) {
      .flip-card {
        width: 300px; /* Réduit la largeur pour les petits écrans */
        height: 400px; /* Réduit la hauteur pour les petits écrans */
      }
      h1 {
        font-size: 35px;
      }

      h4 {
        font-size: 24px;
      }

      h2 {
        font-size: 30px;
      }
    }
  </style>

  {% block stylesheets %}{% endblock %}
  {% block javascripts %}
    {% block importmap %}{{ importmap('app') }}{% endblock %}
  {% endblock %}
</head>
<body>
  {% block body %}{% endblock %}
</body>
</html>
", "base.html.twig", "C:\\Users\\maxen\\Desktop\\Maxence\\IUT\\BUT1\\S2\\Portfolio\\ePortfolio\\templates\\base.html.twig");
    }
}
