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

/* portfolio/cv.html.twig */
class __TwigTemplate_1b177ff8e1e1966bb6a641c35fc9fd84 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio/cv.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio/cv.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "portfolio/cv.html.twig", 1);
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

        yield "CV";
        
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
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/pour_en_savoir_plus\">Pour en savoir plus</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/cv\">CV</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/eportfolio\">ePortfolio</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/parcours\">Parcours</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<h1>Curriculum Vitae (CV)</h1>

<div class=\"card-container\">
  <!-- Section Formations -->
  <div class=\"flip-card\">
    <div class=\"flip-card-inner\">
      <div class=\"flip-card-front\">
        <h2>Formations</h2>
      </div>
      <div class=\"flip-card-back\">
        <ul>
          <li><h4>BAC spécialité Mathématiques et Numériques et Sciences Informatiques</h4></li>
          <li><h4>BUT Réseaux et Télécommunications</h4></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Section Expériences Professionnelles -->
  <div class=\"flip-card\">
    <div class=\"flip-card-inner\">
      <div class=\"flip-card-front\">
        <h2>Expériences Professionnelles</h2>
      </div>
      <div class=\"flip-card-back\">
        <ul>
          <li><h4>Réserviste Marine Nationale Décembre 2024</h4></li>
          <li><h4>Sauveteur aquatique Été 2024</h4></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Section Compétences -->
  <div class=\"flip-card\">
    <div class=\"flip-card-inner\">
      <div class=\"flip-card-front\">
        <h2>Compétences</h2>
      </div>
      <div class=\"flip-card-back\">
        <ul>
          <li><h4>Anglais A2</h4></li>
          <li><h4>Espagnol A2</h4></li>
          <li><h4>Utilisation de Visual Studio Code</h4></li>
          <li><h4>Utilisation de Cisco Packet Tracer</h4></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Section Formulaire -->
<br><br>
<h2 style=\"text-align: center;\">Formulaire et Téléchargement</h2>
<div class=\"form-container\">
  <form class=\"formulaire\">
    <label for=\"nom\"><h5>Nom</h5></label>
    <input type=\"text\" id=\"nom\" name=\"nom\" required>

    <label for=\"prenom\"><h5>Prénom</h5></label>
    <input type=\"text\" id=\"prenom\" name=\"prenom\" required>

    <label for=\"email\"><h5>Adresse e-mail</h5></label>
    <input type=\"email\" id=\"email\" name=\"email\" required>

    <button type=\"submit\" class=\"submit-btn\"><a href=\"";
        // line 96
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("download_pdf", ["filename" => "cv.pdf"]);
        yield "\">Envoyer et Télécharger</a></button>
  </form>
</div>



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 104
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

        // line 105
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
        return "portfolio/cv.html.twig";
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
        return array (  224 => 105,  211 => 104,  193 => 96,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}CV{% endblock %}

{% block body %}
<nav class=\"navbar navbar-expand-lg bg-dark\" data-bs-theme=\"dark\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"/accueil\">Accueil</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
      <ul class=\"navbar-nav me-auto\">
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/pour_en_savoir_plus\">Pour en savoir plus</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/cv\">CV</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/eportfolio\">ePortfolio</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/parcours\">Parcours</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<h1>Curriculum Vitae (CV)</h1>

<div class=\"card-container\">
  <!-- Section Formations -->
  <div class=\"flip-card\">
    <div class=\"flip-card-inner\">
      <div class=\"flip-card-front\">
        <h2>Formations</h2>
      </div>
      <div class=\"flip-card-back\">
        <ul>
          <li><h4>BAC spécialité Mathématiques et Numériques et Sciences Informatiques</h4></li>
          <li><h4>BUT Réseaux et Télécommunications</h4></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Section Expériences Professionnelles -->
  <div class=\"flip-card\">
    <div class=\"flip-card-inner\">
      <div class=\"flip-card-front\">
        <h2>Expériences Professionnelles</h2>
      </div>
      <div class=\"flip-card-back\">
        <ul>
          <li><h4>Réserviste Marine Nationale Décembre 2024</h4></li>
          <li><h4>Sauveteur aquatique Été 2024</h4></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Section Compétences -->
  <div class=\"flip-card\">
    <div class=\"flip-card-inner\">
      <div class=\"flip-card-front\">
        <h2>Compétences</h2>
      </div>
      <div class=\"flip-card-back\">
        <ul>
          <li><h4>Anglais A2</h4></li>
          <li><h4>Espagnol A2</h4></li>
          <li><h4>Utilisation de Visual Studio Code</h4></li>
          <li><h4>Utilisation de Cisco Packet Tracer</h4></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Section Formulaire -->
<br><br>
<h2 style=\"text-align: center;\">Formulaire et Téléchargement</h2>
<div class=\"form-container\">
  <form class=\"formulaire\">
    <label for=\"nom\"><h5>Nom</h5></label>
    <input type=\"text\" id=\"nom\" name=\"nom\" required>

    <label for=\"prenom\"><h5>Prénom</h5></label>
    <input type=\"text\" id=\"prenom\" name=\"prenom\" required>

    <label for=\"email\"><h5>Adresse e-mail</h5></label>
    <input type=\"email\" id=\"email\" name=\"email\" required>

    <button type=\"submit\" class=\"submit-btn\"><a href=\"{{ path('download_pdf', { 'filename': 'cv.pdf' }) }}\">Envoyer et Télécharger</a></button>
  </form>
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
{% endblock %}
", "portfolio/cv.html.twig", "C:\\Users\\maxen\\Desktop\\Maxence\\IUT\\BUT1\\S2\\Portfolio\\ePortfolio\\templates\\portfolio\\cv.html.twig");
    }
}
