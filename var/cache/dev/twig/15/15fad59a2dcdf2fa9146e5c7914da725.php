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

/* portfolio/accueil.html.twig */
class __TwigTemplate_c37082da69948738ceab2c29a68c0584 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio/accueil.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio/accueil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "portfolio/accueil.html.twig", 1);
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

        yield "Accueil";
        
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
        yield "<nav class=\"navbar navbar-expand-lg bg-dark\" data-bs-theme=\"dark\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"/accueil\">Accueil</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
      <ul class=\"navbar-nav me-auto\">
        <li class=\"nav-item\"><a class=\"nav-link\" href=\"/pour_en_savoir_plus\">Pour en savoir plus</a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" href=\"/cv\">CV</a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" href=\"/eportfolio\">ePortfolio</a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" href=\"/parcours\">Parcours</a></li>
      </ul>
    </div>
  </div>
</nav>

<h1>Maxence JACQUET</h1>

<div class=\"container py-5\">
  <div class=\"row w-100\">
    <div class=\"col-lg-6 d-flex align-items-center justify-content-center\">
      <div class=\"text-center\">
        <h4>Je suis étudiant en BUT Réseaux et Télécommunications à l'IUT de Roanne</h4>
        <br>
        <a href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("download_pdf", ["filename" => "cv.pdf"]);
        yield "\" class=\"btn btn-secondary btn-lg px-4 py-2 fs-5\">Mon CV</a>
      </div>
    </div>

    <div class=\"col-lg-6 d-flex align-items-center justify-content-center\">
      <div class=\"card-container\">
        <div class=\"flip-card\">
          <div class=\"flip-card-inner\">
            <div class=\"flip-card-front\">
              <h2>Informations</h2>
            </div>
            <div class=\"flip-card-back\">
              <ul class=\"list-unstyled text-start\">
                <li><h4><i class=\"fas fa-phone me-2\"></i>06 65 37 57 75</h4></li>
                <li><h4><i class=\"fas fa-envelope me-2\"></i>maxence.1686@gmail.com</h4></li>
                <li><h4><i class=\"fas fa-location-dot me-2\"></i>14 impasse Chassain de la Plasse, 42300 Roanne</h4></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 58
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

        // line 59
        yield "  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
  <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js\"></script>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const cards = document.querySelectorAll('.flip-card');
      cards.forEach(card => {
        const inner = card.querySelector('.flip-card-inner');
        card.addEventListener('click', () => inner.classList.toggle('flipped'));
        card.addEventListener('touchstart', () => inner.classList.toggle('flipped'));
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
        return "portfolio/accueil.html.twig";
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
        return array (  178 => 59,  165 => 58,  128 => 31,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body %}
<nav class=\"navbar navbar-expand-lg bg-dark\" data-bs-theme=\"dark\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"/accueil\">Accueil</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
      <ul class=\"navbar-nav me-auto\">
        <li class=\"nav-item\"><a class=\"nav-link\" href=\"/pour_en_savoir_plus\">Pour en savoir plus</a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" href=\"/cv\">CV</a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" href=\"/eportfolio\">ePortfolio</a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" href=\"/parcours\">Parcours</a></li>
      </ul>
    </div>
  </div>
</nav>

<h1>Maxence JACQUET</h1>

<div class=\"container py-5\">
  <div class=\"row w-100\">
    <div class=\"col-lg-6 d-flex align-items-center justify-content-center\">
      <div class=\"text-center\">
        <h4>Je suis étudiant en BUT Réseaux et Télécommunications à l'IUT de Roanne</h4>
        <br>
        <a href=\"{{ path('download_pdf', { 'filename': 'cv.pdf' }) }}\" class=\"btn btn-secondary btn-lg px-4 py-2 fs-5\">Mon CV</a>
      </div>
    </div>

    <div class=\"col-lg-6 d-flex align-items-center justify-content-center\">
      <div class=\"card-container\">
        <div class=\"flip-card\">
          <div class=\"flip-card-inner\">
            <div class=\"flip-card-front\">
              <h2>Informations</h2>
            </div>
            <div class=\"flip-card-back\">
              <ul class=\"list-unstyled text-start\">
                <li><h4><i class=\"fas fa-phone me-2\"></i>06 65 37 57 75</h4></li>
                <li><h4><i class=\"fas fa-envelope me-2\"></i>maxence.1686@gmail.com</h4></li>
                <li><h4><i class=\"fas fa-location-dot me-2\"></i>14 impasse Chassain de la Plasse, 42300 Roanne</h4></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
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
        const inner = card.querySelector('.flip-card-inner');
        card.addEventListener('click', () => inner.classList.toggle('flipped'));
        card.addEventListener('touchstart', () => inner.classList.toggle('flipped'));
      });
    });
  </script>
{% endblock %}
", "portfolio/accueil.html.twig", "C:\\Users\\maxen\\Desktop\\Maxence\\IUT\\BUT1\\S2\\Portfolio\\ePortfolio\\templates\\portfolio\\accueil.html.twig");
    }
}
