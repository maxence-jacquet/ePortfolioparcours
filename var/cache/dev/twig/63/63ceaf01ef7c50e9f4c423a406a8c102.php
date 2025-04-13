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

/* portfolio/integration_environnement_propice.twig */
class __TwigTemplate_1a7af183cd106747b9acfe46524091fa extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio/integration_environnement_propice.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio/integration_environnement_propice.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "portfolio/integration_environnement_propice.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "S’intégrer dans un environnement propice au développement et au travail collaboratif";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<nav class=\"navbar navbar-expand-lg bg-primary\" data-bs-theme=\"dark\">

  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"/accueil\">Accueil</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
      <ul class=\"navbar-nav me-auto\">

        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/pour_en_savoir_plus\">Pour en savoir plus
            <span class=\"visually-hidden\">(current)</span>
          </a>
        </li>

        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/cv\">CV</a>
        </li>

        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/eportfolio\">ePortfolio</a>
        </li>

  </div>
</nav>

<h8> S’intégrer dans un environnement propice au développement et au travail collaboratif </h8>

<div class=\"card-container\">
  <div class=\"flip-card\">

    <div class=\"flip-card-inner\">
      <div class=\"flip-card-front\">
        <h2>Preuves</h2>
      </div>

      <div class=\"flip-card-back\">
        <ul>
        <li class=\"li_apprentissage\">
        <img src=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/github.png"), "html", null, true);
        yield "\" alt:\"lettre de motivation\" style=\"width: 500px; height:250px\">
        </li>
        <li class=\"li_apprentissage\">
        <h4>J'utilise github afin de partager des fichiers et dossiers à d'autres personnes</h4>
        </li>
        </ul>
      </div>
    </div>
    
  </div>

  <div class=\"flip-card\">

    <div class=\"flip-card-inner\">

      <div class=\"flip-card-front\">
        <h2>Analyses réfléxives</h2>
      </div>

      <div class=\"flip-card-back\">
        <ul>
        <li class=\"li_apprentissage\">
        <h4>Je ne connaissais pas du tout l'éxistence de github j'ai donc appris à l'utiliser et j'apprends encore toutes la puissances de cette plateforme</h4>
        </li>
        </ul>
      </div>

    </div>

  </div>

  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 80
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

        // line 81
        yield "  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
  <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js\"></script>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const cards = document.querySelectorAll('.flip-card');
      cards.forEach(card => {
        card.addEventListener('click', () => {
          const inner = card.querySelector('.flip-card-inner');
          inner.classList.toggle('flipped');
        });
      });
    });
  </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "portfolio/integration_environnement_propice.twig";
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
        return array (  200 => 81,  187 => 80,  144 => 47,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}S’intégrer dans un environnement propice au développement et au travail collaboratif{% endblock %}

{% block body %}
<nav class=\"navbar navbar-expand-lg bg-primary\" data-bs-theme=\"dark\">

  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"/accueil\">Accueil</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
      <ul class=\"navbar-nav me-auto\">

        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/pour_en_savoir_plus\">Pour en savoir plus
            <span class=\"visually-hidden\">(current)</span>
          </a>
        </li>

        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/cv\">CV</a>
        </li>

        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/eportfolio\">ePortfolio</a>
        </li>

  </div>
</nav>

<h8> S’intégrer dans un environnement propice au développement et au travail collaboratif </h8>

<div class=\"card-container\">
  <div class=\"flip-card\">

    <div class=\"flip-card-inner\">
      <div class=\"flip-card-front\">
        <h2>Preuves</h2>
      </div>

      <div class=\"flip-card-back\">
        <ul>
        <li class=\"li_apprentissage\">
        <img src=\"{{ asset('uploads/github.png') }}\" alt:\"lettre de motivation\" style=\"width: 500px; height:250px\">
        </li>
        <li class=\"li_apprentissage\">
        <h4>J'utilise github afin de partager des fichiers et dossiers à d'autres personnes</h4>
        </li>
        </ul>
      </div>
    </div>
    
  </div>

  <div class=\"flip-card\">

    <div class=\"flip-card-inner\">

      <div class=\"flip-card-front\">
        <h2>Analyses réfléxives</h2>
      </div>

      <div class=\"flip-card-back\">
        <ul>
        <li class=\"li_apprentissage\">
        <h4>Je ne connaissais pas du tout l'éxistence de github j'ai donc appris à l'utiliser et j'apprends encore toutes la puissances de cette plateforme</h4>
        </li>
        </ul>
      </div>

    </div>

  </div>

  {% endblock %}

{% block javascripts %}
  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
  <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js\"></script>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const cards = document.querySelectorAll('.flip-card');
      cards.forEach(card => {
        card.addEventListener('click', () => {
          const inner = card.querySelector('.flip-card-inner');
          inner.classList.toggle('flipped');
        });
      });
    });
  </script>
{% endblock %}", "portfolio/integration_environnement_propice.twig", "C:\\Users\\maxen\\Desktop\\Maxence\\IUT\\BUT1\\S1\\SAE 1.4 Se présenter sur internet\\ePortfolio\\templates\\portfolio\\integration_environnement_propice.twig");
    }
}
