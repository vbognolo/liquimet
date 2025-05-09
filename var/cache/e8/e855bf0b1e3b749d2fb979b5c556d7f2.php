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

/* profile-edit.twig */
class __TwigTemplate_370a59ce1c746c622f93427af7cc4061 extends Template
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
            'head' => [$this, 'block_head'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 5
        yield "
    <div class=\"container profile\">   
        <div class=\"row align-items-center\">
            <div class=\"card-header m-auto\">
                <h2 class=\"form-title text-center mx-auto my-3\"> 
                    <i class=\"bi bi-person-vcard me-2 d-none d-md-inline\"></i>
                        <span class=\"d-inline profile-title-text\">MODIFICA PROFILO</span>
                    <i class=\"bi bi-person-vcard ms-2 d-none d-md-inline\"></i>
                </h2>
            </div>       

            <form id=\"profile-edit\" action=\"profile-edit\" method=\"POST\" novalidate>
                <div class=\"card-body row mt-2\">
                    <input type=\"hidden\" name=\"id_user\" id=\"id_user\" value=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "id_user", [], "any", false, false, false, 18), "html", null, true);
        yield "\" />
                    <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrf_token"] ?? null), "html", null, true);
        yield "\" />
                    <input type=\"hidden\" name=\"original_username\" value=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 20), "html", null, true);
        yield "\">
                    <input type=\"hidden\" name=\"original_email\" value=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 21), "html", null, true);
        yield "\">

                    ";
        // line 24
        yield "                    <div class=\"row form-group mb-2\">
                        <label for=\"name\" class=\"col-5 form-control-label my-1\"> Nome: </label>

                        <div class=\"col-6\">
                            <input name=\"name\" type=\"text\" id=\"name\" value=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 28)), "html", null, true);
        yield "\"
                                class=\"form-control ";
        // line 29
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "name", [], "any", false, false, false, 29)) {
            yield "is-invalid";
        }
        yield "\" />

                            <div class=\"error-placeholder\">
                                ";
        // line 32
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "name", [], "any", false, false, false, 32)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "name", [], "any", false, false, false, 32), "html", null, true);
            yield "</div>";
        }
        // line 33
        yield "                            </div>
                        </div>
                    </div>

                    ";
        // line 38
        yield "                    <div class=\"row form-group mb-2\">
                        <label for=\"surname\" class=\"col-5 form-control-label my-1\"> Cognome: </label>
                                    
                        <div class=\"col-6\">
                            <input name=\"surname\" type=\"text\" id=\"surname\" value=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "surname", [], "any", false, false, false, 42)), "html", null, true);
        yield "\"
                                class=\"form-control ";
        // line 43
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "surname", [], "any", false, false, false, 43)) {
            yield "is-invalid";
        }
        yield "\" />

                            <div class=\"error-placeholder\">
                                ";
        // line 46
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "surname", [], "any", false, false, false, 46)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "surname", [], "any", false, false, false, 46), "html", null, true);
            yield "</div>";
        }
        // line 47
        yield "                            </div>
                        </div>
                    </div>

                    ";
        // line 52
        yield "                    <div class=\"row form-group mb-2\">
                        <label for=\"bday\" class=\"col-5 form-control-label my-1\"> Data di nascita: </label>
                                    
                        <div class=\"col-6\">
                            <input name=\"bday\" type=\"text\" id=\"bday\" value=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "bday_input", [], "any", false, false, false, 56), "html", null, true);
        yield "\"
                                class=\"form-control datepicker ";
        // line 57
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "bday", [], "any", false, false, false, 57)) {
            yield "is-invalid";
        }
        yield "\" />

                            <div class=\"error-placeholder\">
                                ";
        // line 60
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "bday", [], "any", false, false, false, 60)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "bday", [], "any", false, false, false, 60), "html", null, true);
            yield "</div>";
        }
        // line 61
        yield "                            </div>
                        </div>
                    </div>
            
                    ";
        // line 66
        yield "                    <div class=\"row form-group mb-2\"> 
                        <label for=\"city\" class=\"col-5 form-control-label my-1\"> Luogo di nascita: </label>
                                    
                        <div class=\"col-6\">
                            <input name=\"city\" type=\"text\" id=\"city\" value=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "city", [], "any", false, false, false, 70)), "html", null, true);
        yield "\"
                                class=\"form-control ";
        // line 71
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "city", [], "any", false, false, false, 71)) {
            yield "is-invalid";
        }
        yield "\" />

                            <div class=\"error-placeholder\">
                                ";
        // line 74
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "city", [], "any", false, false, false, 74)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "city", [], "any", false, false, false, 74), "html", null, true);
            yield "</div>";
        }
        yield "                                    
                            </div>
                        </div>
                    </div>
            
                    ";
        // line 80
        yield "                    <div class=\"row form-group mb-2\"> 
                        <label for=\"country\" class=\"col-5 form-control-label my-1\"> </label>
                                    
                        <div class=\"col-6\">
                            <input name=\"country\" type=\"text\" id=\"country\" value=\"";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "country", [], "any", false, false, false, 84)), "html", null, true);
        yield "\"
                                class=\"form-control ";
        // line 85
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "country", [], "any", false, false, false, 85)) {
            yield "is-invalid";
        }
        yield "\" />

                            <div class=\"error-placeholder\">
                                ";
        // line 88
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "country", [], "any", false, false, false, 88)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "country", [], "any", false, false, false, 88), "html", null, true);
            yield "</div>";
        }
        // line 89
        yield "                            </div>
                        </div>
                    </div>

                    ";
        // line 94
        yield "                    <div class=\"row form-group mb-2\">
                        <label for=\"username\" class=\"col-5 form-control-label my-1\"> Username: </label>
                                    
                        <div class=\"col-6\">
                            <input name=\"username\" type=\"text\" id=\"username\" value=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 98), "html", null, true);
        yield "\" data-original=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 98), "html", null, true);
        yield "\"
                                class=\"form-control ";
        // line 99
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "username", [], "any", false, false, false, 99)) {
            yield "is-invalid";
        }
        yield "\" />

                            <div class=\"error-placeholder\">
                                ";
        // line 102
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "username", [], "any", false, false, false, 102)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "username", [], "any", false, false, false, 102), "html", null, true);
            yield "</div>";
        }
        // line 103
        yield "                            </div>
                        </div>
                    </div>
                        
                    ";
        // line 108
        yield "                    <div class=\"row form-group\">        
                        <label for=\"email\" class=\"col-5 form-control-label my-1\"> E-mail: </label>
                                    
                        <div class=\"col-6\">
                            <input name=\"email\" type=\"text\" id=\"email\" value=\"";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 112), "html", null, true);
        yield "\" data-original=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 112), "html", null, true);
        yield "\"
                                class=\"form-control ";
        // line 113
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 113)) {
            yield "is-invalid";
        }
        yield "\" />

                            <div class=\"error-placeholder\">
                                ";
        // line 116
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 116)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 116), "html", null, true);
            yield "</div>";
        }
        // line 117
        yield "                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"card-footer mx-auto\">      
                    <button type=\"submit\" class=\"my-3 action-button save\" name=\"update_profile\">
                        <span class=\"m-auto\">
                            SALVA <i class=\"bi bi-check-circle\"></i>
                        </span>
                    </button>
                </div>   
            </form>
        </div>
    </div>

";
        // line 133
        yield from $this->unwrap()->yieldBlock('scripts', $context, $blocks);
        yield from [];
    }

    // line 1
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "    ";
        // line 3
        yield "    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css\">
";
        yield from [];
    }

    // line 133
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 134
        yield "    ";
        // line 135
        yield "<script src=\"https://code.jquery.com/jquery-3.7.1.min.js\"
        integrity=\"sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=\" 
        crossorigin=\"anonymous\">
</script>
    ";
        // line 140
        yield "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js\" 
        integrity=\"sha512-KFHXdr2oObHKI9w4Hv1XPKc898mE4kgYx58oqsc/JqqdLMDI4YjOLzom+EMlW8HFUd0QfjfAvxSL6sEq/a42fQ==\" 
        crossorigin=\"anonymous\" 
        referrerpolicy=\"no-referrer\">
</script>
    ";
        // line 146
        yield "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/additional-methods.min.js\" 
        integrity=\"sha512-owaCKNpctt4R4oShUTTraMPFKQWG9UdWTtG6GRzBjFV4VypcFi6+M3yc4Jk85s3ioQmkYWJbUl1b2b2r41RTjA==\" 
        crossorigin=\"anonymous\" 
        referrerpolicy=\"no-referrer\">
</script>
    ";
        // line 152
        yield "<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" 
        integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" 
        crossorigin=\"anonymous\">
</script> 
    ";
        // line 157
        yield "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\" 
        integrity=\"sha384-duAtk5RV7s42V6Zuw+tRBFcqD8RjRKw6RFnxmxIj1lUGAQJyum/vtcUQX8lqKQjp\" 
        crossorigin=\"anonymous\"
        referrerpolicy=\"no-referrer\">
</script>
<script>
\$(document).ready(function(){
//  Datepicker 
    \$(\".datepicker\").datepicker({
        format: 'dd-mm-yyyy',
        autoclose: true,
        todayHighlight: true
    }); 

    \$('.datepicker').on('changeDate', function(e) {
        \$(this).datepicker('hide');        
    });

//  Method for string validation (only letters and spaces allowed, no initial space, at least 3 letters)
    \$.validator.addMethod(\"onlyLettersPattern\", function(value, element) {
        if (this.optional(element)) return true;

        const startsWithSpace = /^\\s/.test(value);
        const hasOnlyLettersAndSpaces = /^[A-Za-z ]+\$/.test(value);
        const letterCount = (value.match(/[A-Za-z]/g) || []).length;

        return !startsWithSpace && hasOnlyLettersAndSpaces && letterCount >= 3;
    });

//  Method for validating age
    \$.validator.addMethod(\"minAge\", function(value, element, min) {
        let parts = value.split('-');
        let birthDate = new Date(parts[2], parts[1] - 1, parts[0]);
        let today = new Date();

            if (birthDate > today) {
                return false;
            }

        let age = today.getFullYear() - birthDate.getFullYear();
        let monthDiff = today.getMonth() - birthDate.getMonth();

        if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
            age--;
        }

        return age >= min;
    });

//  Method for checking if username already exists
    \$.validator.addMethod(\"usernameAvailable\", function (value, element) {
        const original = \$('[name=\"original_username\"]').val();
        if (value === original) return true;

        let isSuccess = false;
            \$.ajax({
                url: 'check-username',
                type: 'POST',
                data: { username: value },
                dataType: 'json',
                async: false,
                success: function (response) {
                    isSuccess = response.available === true;
                }
            });
        return isSuccess;
    });

//  Method for checking if e-mail already exists
    \$.validator.addMethod(\"emailAvailable\", function (value, element) {
        const original = \$('[name=\"original_email\"]').val();
            if (value === original) return true;

        let isSuccess = false;
            \$.ajax({
                url: 'check-email',
                type: 'POST',
                data: { email: value },
                dataType: 'json',
                async: false,
                success: function (response) {
                    isSuccess = response.available === true;
                }
            });
        return isSuccess;
    });

//  JQuery validation and errors
    \$(\"#profile-edit\").validate({
        onfocusout: function(element) {
            \$(element).valid();     // validate the field when it loses focus
        },
        rules: {
            name: { required: true, rangelength: [3, 50], onlyLettersPattern: true },
            surname: { required: true, rangelength: [3, 50], onlyLettersPattern: true },
            bday: { required: true, minAge: 18 },
            city: { required: true, rangelength: [3, 50], onlyLettersPattern: true },
            country: { required: true, rangelength: [3, 50], onlyLettersPattern: true },
            username: { required: true, rangelength: [4, 20], pattern: /^(?=.*[A-Za-z])[A-Za-z0-9]+\$/, usernameAvailable: true },
            email: { required: true, email: true, emailAvailable: true }
        },
        messages: {
            name: {
                required: \"Campo obbligatorio.\",
                rangelength: \"Usare almeno 3 e al massimo 50 caratteri.\",
                onlyLettersPattern: \"Il nome può contenere solo lettere e spazi (usare almeno 3 lettere, senza spazio iniziale).\"
            }, 
            surname: {
                required: \"Campo obbligatorio.\",
                rangelength: \"Usare almeno 3 e al massimo 50 caratteri.\",
                onlyLettersPattern: \"Il cognome può contenere solo lettere e spazi (usare almeno 3 lettere, senza spazio iniziale).\"
            }, 
            bday: {
                required: \"Campo obbligatorio.\",
                minAge: \"Inserire una data valida (18+). Non sono permesse date future.\"
            },
            city: {
                required: \"Campo obbligatorio.\",
                rangelength: \"Usare almeno 3 e al massimo 50 caratteri.\",
                onlyLettersPattern: \"La città può contenere solo lettere e spazi (usare almeno 3 lettere, senza spazio iniziale).\"
            }, 
            country: {
                required: \"Campo obbligatorio.\",
                rangelength: \"Usare almeno 3 e al massimo 50 caratteri.\",
                onlyLettersPattern: \"Lo stato può contenere solo lettere e spazi (usare almeno 3 lettere, senza spazio iniziale).\"
            }, 
            username: {
                required: \"Campo obbligatorio.\",
                rangelength: \"Usare almeno 4 e al massimo 20 caratteri.\",
                pattern: \"Username deve avere almeno 1 lettera. Sono permesse lettere e numeri.\",
                usernameAvailable: \"Username gia in uso.\"
            },
            email: {
                required: \"Campo obbligatorio.\",
                email: \"Inserire un'indirizzo e-mail valido.\",
                emailAvailable: \"Indirizzo e-mail gia in uso.\"
            }
        },
        errorPlacement: function (error, element) {
            error.addClass(\"text-danger small\");
            element.addClass(\"is-invalid\");                                             // Bootstrap error class
            element.closest(\".form-group\").find(\".error-placeholder\").html(error);      // Insert error inside the reserved space
        },
        highlight: function (element) {
            \$(element).addClass('is-invalid');
        },
        unhighlight: function (element) {
            \$(element).removeClass('is-invalid');
            \$(element).closest('.form-group').find('.error-placeholder').html('');
        },
        submitHandler: function (form) {
            const \$form = \$(form);
            const oEmail = \$(\"#email\").data(\"original\");
            const oUsername = \$(\"#username\").data(\"original\");

            \$.ajax({
                url: 'profile-edit',
                type: 'POST',
                data: \$form.serialize() + '&original_email=' + encodeURIComponent(oEmail) + '&original_username=' + encodeURIComponent(oUsername),
                dataType: 'json',
                success: function (response) {
                    if (response.success) {
                        // Update profile view with latest values
                        \$('#profile-name').text(response.user.name);
                        \$('#profile-surname').text(response.user.surname);
                        \$('#profile-bday').text(response.user.bday_display);
                        \$('#profile-city').text(`\${response.user.city}, \${response.user.country}`);
                        \$('#profile-username').text(response.user.username);
                        \$('#profile-email').text(response.user.email);

                        // Switch to overview tab
                        const overviewTab = new bootstrap.Tab(\$('#p-overview')[0]);
                        overviewTab.show();

                        // Store updated values as new \"original\"
                        updateOriginalDataFromResponse(response);
                    } else if (response.errors) {
                        \$.each(response.errors, function (field, message) {
                            const input = \$('[name=\"' + field + '\"]');
                            input.addClass('is-invalid');
                            input.next('.error-placeholder').html('<div class=\"invalid-feedback\">' + message + '</div>');
                        });
                    }
                },
                error: function () {
                    alert('Si è verificato un errore.');
                }
            });

            return false;
        }
    });

    let originalData = {};
//  Store original form values
    function storeOriginalFormData() {
        originalData = {};
        \$('#profile-edit').find(':input').each(function () {
            const name = \$(this).attr('name');
                if (name) {
                    originalData[name] = \$(this).val();
                }
        });
    }

//  Reset form to original values
    function resetFormToOriginal() {
        \$('#profile-edit').find(':input').each(function () {
            const name = \$(this).attr('name');
                if (name && originalData.hasOwnProperty(name)) {
                    \$(this).val(originalData[name]).trigger('change').removeClass('is-invalid');
                    \$(this).closest('.form-group').find('.error-placeholder').html('');
                }
        });
        \$('#profile-edit').removeClass('is-invalid');
    }

//  Detect changes and reset if changed
    function formHasChanged() {
        let changed = false;
        \$('#profile-edit').find(':input').each(function () {
            const name = \$(this).attr('name');
                if (name && originalData[name] !== \$(this).val()) {
                    changed = true;
                    return false; // exit early
                }
        });
        return changed;
    }

//  When switching to overview tab
    \$('button[data-bs-toggle=\"pill\"]').on('shown.bs.tab', function (e) {
        const targetId = \$(e.target).attr('href');
            if (targetId === '#p-overview') {
                if (formHasChanged()) {
                    resetFormToOriginal();
                }
            }
    });

//  Re-store original data on successful submission
//  (Put this inside your AJAX success response when update is successful)
    function updateOriginalDataFromResponse(data) {
        if (!data || !data.user) return;
        \$('#profile-edit').find(':input').each(function () {
            const name = \$(this).attr('name');
                if (name && data.user.hasOwnProperty(name)) {
                    originalData[name] = data.user[name];
                }
        });
    }

//  Debounced e-mail and username check
    function debounce(fn, delay) {
        let timer;
        return function(...args) {
            clearTimeout(timer);
            timer = setTimeout(() => fn.apply(this, args), delay);
        };
    }

    \$('[name=\"email\"]').on('input', debounce(function () {
        const \$input = \$(this);
        const newVal = \$input.val().trim().toLowerCase();
        const originalVal = \$input.data('original').trim().toLowerCase();

        if (newVal !== originalVal && newVal !== '') {
            \$.post('check-email', { email: newVal, original: originalVal }, function (data) {
                if (data.exists) {
                    \$input.addClass('is-invalid');
                    \$input.closest('.form-group').find('.error-placeholder').html('<div class=\"invalid-feedback\">Email già in uso.</div>');
                } else {
                    \$input.removeClass('is-invalid');
                    \$input.closest('.form-group').find('.error-placeholder').html('');
                }
            }, 'json');
        }
    }, 500));

    \$('[name=\"username\"]').on('input', debounce(function () {
        const \$input = \$(this);
        const newVal = \$input.val().trim();
        const originalVal = \$input.data('original').trim();

        if (newVal !== originalVal && newVal !== '') {
            \$.post('check-username', { username: newVal, original: originalVal }, function (data) {
                if (data.exists) {
                    \$input.addClass('is-invalid');
                    \$input.closest('.form-group').find('.error-placeholder').html('<div class=\"invalid-feedback\">Username già in uso.</div>');
                } else {
                    \$input.removeClass('is-invalid');
                    \$input.closest('.form-group').find('.error-placeholder').html('');
                }
            }, 'json');
        }
    }, 500));
});
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profile-edit.twig";
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
        return array (  359 => 157,  353 => 152,  346 => 146,  339 => 140,  333 => 135,  331 => 134,  324 => 133,  318 => 3,  316 => 2,  309 => 1,  304 => 133,  286 => 117,  280 => 116,  272 => 113,  266 => 112,  260 => 108,  254 => 103,  248 => 102,  240 => 99,  234 => 98,  228 => 94,  222 => 89,  216 => 88,  208 => 85,  204 => 84,  198 => 80,  186 => 74,  178 => 71,  174 => 70,  168 => 66,  162 => 61,  156 => 60,  148 => 57,  144 => 56,  138 => 52,  132 => 47,  126 => 46,  118 => 43,  114 => 42,  108 => 38,  102 => 33,  96 => 32,  88 => 29,  84 => 28,  78 => 24,  73 => 21,  69 => 20,  65 => 19,  61 => 18,  46 => 5,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block head %}
    {# Bootstrap Datepicker - CSS #}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css\">
{% endblock %}

    <div class=\"container profile\">   
        <div class=\"row align-items-center\">
            <div class=\"card-header m-auto\">
                <h2 class=\"form-title text-center mx-auto my-3\"> 
                    <i class=\"bi bi-person-vcard me-2 d-none d-md-inline\"></i>
                        <span class=\"d-inline profile-title-text\">MODIFICA PROFILO</span>
                    <i class=\"bi bi-person-vcard ms-2 d-none d-md-inline\"></i>
                </h2>
            </div>       

            <form id=\"profile-edit\" action=\"profile-edit\" method=\"POST\" novalidate>
                <div class=\"card-body row mt-2\">
                    <input type=\"hidden\" name=\"id_user\" id=\"id_user\" value=\"{{ user.id_user }}\" />
                    <input type=\"hidden\" name=\"csrf_token\" value=\"{{ csrf_token }}\" />
                    <input type=\"hidden\" name=\"original_username\" value=\"{{ user.username }}\">
                    <input type=\"hidden\" name=\"original_email\" value=\"{{ user.email }}\">

                    {# Name #}
                    <div class=\"row form-group mb-2\">
                        <label for=\"name\" class=\"col-5 form-control-label my-1\"> Nome: </label>

                        <div class=\"col-6\">
                            <input name=\"name\" type=\"text\" id=\"name\" value=\"{{ user.name|capitalize }}\"
                                class=\"form-control {% if errors.name %}is-invalid{% endif %}\" />

                            <div class=\"error-placeholder\">
                                {% if errors.name %}<div class=\"invalid-feedback\">{{ errors.name }}</div>{% endif %}
                            </div>
                        </div>
                    </div>

                    {# Surname #}
                    <div class=\"row form-group mb-2\">
                        <label for=\"surname\" class=\"col-5 form-control-label my-1\"> Cognome: </label>
                                    
                        <div class=\"col-6\">
                            <input name=\"surname\" type=\"text\" id=\"surname\" value=\"{{ user.surname|capitalize }}\"
                                class=\"form-control {% if errors.surname %}is-invalid{% endif %}\" />

                            <div class=\"error-placeholder\">
                                {% if errors.surname %}<div class=\"invalid-feedback\">{{ errors.surname }}</div>{% endif %}
                            </div>
                        </div>
                    </div>

                    {# Birthday #}
                    <div class=\"row form-group mb-2\">
                        <label for=\"bday\" class=\"col-5 form-control-label my-1\"> Data di nascita: </label>
                                    
                        <div class=\"col-6\">
                            <input name=\"bday\" type=\"text\" id=\"bday\" value=\"{{ user.bday_input }}\"
                                class=\"form-control datepicker {% if errors.bday %}is-invalid{% endif %}\" />

                            <div class=\"error-placeholder\">
                                {% if errors.bday %}<div class=\"invalid-feedback\">{{ errors.bday }}</div>{% endif %}
                            </div>
                        </div>
                    </div>
            
                    {# City #}
                    <div class=\"row form-group mb-2\"> 
                        <label for=\"city\" class=\"col-5 form-control-label my-1\"> Luogo di nascita: </label>
                                    
                        <div class=\"col-6\">
                            <input name=\"city\" type=\"text\" id=\"city\" value=\"{{ user.city|capitalize }}\"
                                class=\"form-control {% if errors.city %}is-invalid{% endif %}\" />

                            <div class=\"error-placeholder\">
                                {% if errors.city %}<div class=\"invalid-feedback\">{{ errors.city }}</div>{% endif %}                                    
                            </div>
                        </div>
                    </div>
            
                    {# Country #}
                    <div class=\"row form-group mb-2\"> 
                        <label for=\"country\" class=\"col-5 form-control-label my-1\"> </label>
                                    
                        <div class=\"col-6\">
                            <input name=\"country\" type=\"text\" id=\"country\" value=\"{{ user.country|capitalize }}\"
                                class=\"form-control {% if errors.country %}is-invalid{% endif %}\" />

                            <div class=\"error-placeholder\">
                                {% if errors.country %}<div class=\"invalid-feedback\">{{ errors.country }}</div>{% endif %}
                            </div>
                        </div>
                    </div>

                    {# Username #}
                    <div class=\"row form-group mb-2\">
                        <label for=\"username\" class=\"col-5 form-control-label my-1\"> Username: </label>
                                    
                        <div class=\"col-6\">
                            <input name=\"username\" type=\"text\" id=\"username\" value=\"{{ user.username }}\" data-original=\"{{ user.username }}\"
                                class=\"form-control {% if errors.username %}is-invalid{% endif %}\" />

                            <div class=\"error-placeholder\">
                                {% if errors.username %}<div class=\"invalid-feedback\">{{ errors.username }}</div>{% endif %}
                            </div>
                        </div>
                    </div>
                        
                    {# Email #}
                    <div class=\"row form-group\">        
                        <label for=\"email\" class=\"col-5 form-control-label my-1\"> E-mail: </label>
                                    
                        <div class=\"col-6\">
                            <input name=\"email\" type=\"text\" id=\"email\" value=\"{{ user.email }}\" data-original=\"{{ user.email }}\"
                                class=\"form-control {% if errors.email %}is-invalid{% endif %}\" />

                            <div class=\"error-placeholder\">
                                {% if errors.email %}<div class=\"invalid-feedback\">{{ errors.email }}</div>{% endif %}
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"card-footer mx-auto\">      
                    <button type=\"submit\" class=\"my-3 action-button save\" name=\"update_profile\">
                        <span class=\"m-auto\">
                            SALVA <i class=\"bi bi-check-circle\"></i>
                        </span>
                    </button>
                </div>   
            </form>
        </div>
    </div>

{% block scripts %}
    {# jQuery (must be first) #}
<script src=\"https://code.jquery.com/jquery-3.7.1.min.js\"
        integrity=\"sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=\" 
        crossorigin=\"anonymous\">
</script>
    {# jQuery Validation (depends on jQuery) #}
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js\" 
        integrity=\"sha512-KFHXdr2oObHKI9w4Hv1XPKc898mE4kgYx58oqsc/JqqdLMDI4YjOLzom+EMlW8HFUd0QfjfAvxSL6sEq/a42fQ==\" 
        crossorigin=\"anonymous\" 
        referrerpolicy=\"no-referrer\">
</script>
    {# jQuery Additional Methods (depends on jQuery) #}
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/additional-methods.min.js\" 
        integrity=\"sha512-owaCKNpctt4R4oShUTTraMPFKQWG9UdWTtG6GRzBjFV4VypcFi6+M3yc4Jk85s3ioQmkYWJbUl1b2b2r41RTjA==\" 
        crossorigin=\"anonymous\" 
        referrerpolicy=\"no-referrer\">
</script>
    {# Bootstrap JS bundle (includes modal) #}
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" 
        integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" 
        crossorigin=\"anonymous\">
</script> 
    {# Bootstrap Datepicker (depends on jQuery) #}
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\" 
        integrity=\"sha384-duAtk5RV7s42V6Zuw+tRBFcqD8RjRKw6RFnxmxIj1lUGAQJyum/vtcUQX8lqKQjp\" 
        crossorigin=\"anonymous\"
        referrerpolicy=\"no-referrer\">
</script>
<script>
\$(document).ready(function(){
//  Datepicker 
    \$(\".datepicker\").datepicker({
        format: 'dd-mm-yyyy',
        autoclose: true,
        todayHighlight: true
    }); 

    \$('.datepicker').on('changeDate', function(e) {
        \$(this).datepicker('hide');        
    });

//  Method for string validation (only letters and spaces allowed, no initial space, at least 3 letters)
    \$.validator.addMethod(\"onlyLettersPattern\", function(value, element) {
        if (this.optional(element)) return true;

        const startsWithSpace = /^\\s/.test(value);
        const hasOnlyLettersAndSpaces = /^[A-Za-z ]+\$/.test(value);
        const letterCount = (value.match(/[A-Za-z]/g) || []).length;

        return !startsWithSpace && hasOnlyLettersAndSpaces && letterCount >= 3;
    });

//  Method for validating age
    \$.validator.addMethod(\"minAge\", function(value, element, min) {
        let parts = value.split('-');
        let birthDate = new Date(parts[2], parts[1] - 1, parts[0]);
        let today = new Date();

            if (birthDate > today) {
                return false;
            }

        let age = today.getFullYear() - birthDate.getFullYear();
        let monthDiff = today.getMonth() - birthDate.getMonth();

        if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
            age--;
        }

        return age >= min;
    });

//  Method for checking if username already exists
    \$.validator.addMethod(\"usernameAvailable\", function (value, element) {
        const original = \$('[name=\"original_username\"]').val();
        if (value === original) return true;

        let isSuccess = false;
            \$.ajax({
                url: 'check-username',
                type: 'POST',
                data: { username: value },
                dataType: 'json',
                async: false,
                success: function (response) {
                    isSuccess = response.available === true;
                }
            });
        return isSuccess;
    });

//  Method for checking if e-mail already exists
    \$.validator.addMethod(\"emailAvailable\", function (value, element) {
        const original = \$('[name=\"original_email\"]').val();
            if (value === original) return true;

        let isSuccess = false;
            \$.ajax({
                url: 'check-email',
                type: 'POST',
                data: { email: value },
                dataType: 'json',
                async: false,
                success: function (response) {
                    isSuccess = response.available === true;
                }
            });
        return isSuccess;
    });

//  JQuery validation and errors
    \$(\"#profile-edit\").validate({
        onfocusout: function(element) {
            \$(element).valid();     // validate the field when it loses focus
        },
        rules: {
            name: { required: true, rangelength: [3, 50], onlyLettersPattern: true },
            surname: { required: true, rangelength: [3, 50], onlyLettersPattern: true },
            bday: { required: true, minAge: 18 },
            city: { required: true, rangelength: [3, 50], onlyLettersPattern: true },
            country: { required: true, rangelength: [3, 50], onlyLettersPattern: true },
            username: { required: true, rangelength: [4, 20], pattern: /^(?=.*[A-Za-z])[A-Za-z0-9]+\$/, usernameAvailable: true },
            email: { required: true, email: true, emailAvailable: true }
        },
        messages: {
            name: {
                required: \"Campo obbligatorio.\",
                rangelength: \"Usare almeno 3 e al massimo 50 caratteri.\",
                onlyLettersPattern: \"Il nome può contenere solo lettere e spazi (usare almeno 3 lettere, senza spazio iniziale).\"
            }, 
            surname: {
                required: \"Campo obbligatorio.\",
                rangelength: \"Usare almeno 3 e al massimo 50 caratteri.\",
                onlyLettersPattern: \"Il cognome può contenere solo lettere e spazi (usare almeno 3 lettere, senza spazio iniziale).\"
            }, 
            bday: {
                required: \"Campo obbligatorio.\",
                minAge: \"Inserire una data valida (18+). Non sono permesse date future.\"
            },
            city: {
                required: \"Campo obbligatorio.\",
                rangelength: \"Usare almeno 3 e al massimo 50 caratteri.\",
                onlyLettersPattern: \"La città può contenere solo lettere e spazi (usare almeno 3 lettere, senza spazio iniziale).\"
            }, 
            country: {
                required: \"Campo obbligatorio.\",
                rangelength: \"Usare almeno 3 e al massimo 50 caratteri.\",
                onlyLettersPattern: \"Lo stato può contenere solo lettere e spazi (usare almeno 3 lettere, senza spazio iniziale).\"
            }, 
            username: {
                required: \"Campo obbligatorio.\",
                rangelength: \"Usare almeno 4 e al massimo 20 caratteri.\",
                pattern: \"Username deve avere almeno 1 lettera. Sono permesse lettere e numeri.\",
                usernameAvailable: \"Username gia in uso.\"
            },
            email: {
                required: \"Campo obbligatorio.\",
                email: \"Inserire un'indirizzo e-mail valido.\",
                emailAvailable: \"Indirizzo e-mail gia in uso.\"
            }
        },
        errorPlacement: function (error, element) {
            error.addClass(\"text-danger small\");
            element.addClass(\"is-invalid\");                                             // Bootstrap error class
            element.closest(\".form-group\").find(\".error-placeholder\").html(error);      // Insert error inside the reserved space
        },
        highlight: function (element) {
            \$(element).addClass('is-invalid');
        },
        unhighlight: function (element) {
            \$(element).removeClass('is-invalid');
            \$(element).closest('.form-group').find('.error-placeholder').html('');
        },
        submitHandler: function (form) {
            const \$form = \$(form);
            const oEmail = \$(\"#email\").data(\"original\");
            const oUsername = \$(\"#username\").data(\"original\");

            \$.ajax({
                url: 'profile-edit',
                type: 'POST',
                data: \$form.serialize() + '&original_email=' + encodeURIComponent(oEmail) + '&original_username=' + encodeURIComponent(oUsername),
                dataType: 'json',
                success: function (response) {
                    if (response.success) {
                        // Update profile view with latest values
                        \$('#profile-name').text(response.user.name);
                        \$('#profile-surname').text(response.user.surname);
                        \$('#profile-bday').text(response.user.bday_display);
                        \$('#profile-city').text(`\${response.user.city}, \${response.user.country}`);
                        \$('#profile-username').text(response.user.username);
                        \$('#profile-email').text(response.user.email);

                        // Switch to overview tab
                        const overviewTab = new bootstrap.Tab(\$('#p-overview')[0]);
                        overviewTab.show();

                        // Store updated values as new \"original\"
                        updateOriginalDataFromResponse(response);
                    } else if (response.errors) {
                        \$.each(response.errors, function (field, message) {
                            const input = \$('[name=\"' + field + '\"]');
                            input.addClass('is-invalid');
                            input.next('.error-placeholder').html('<div class=\"invalid-feedback\">' + message + '</div>');
                        });
                    }
                },
                error: function () {
                    alert('Si è verificato un errore.');
                }
            });

            return false;
        }
    });

    let originalData = {};
//  Store original form values
    function storeOriginalFormData() {
        originalData = {};
        \$('#profile-edit').find(':input').each(function () {
            const name = \$(this).attr('name');
                if (name) {
                    originalData[name] = \$(this).val();
                }
        });
    }

//  Reset form to original values
    function resetFormToOriginal() {
        \$('#profile-edit').find(':input').each(function () {
            const name = \$(this).attr('name');
                if (name && originalData.hasOwnProperty(name)) {
                    \$(this).val(originalData[name]).trigger('change').removeClass('is-invalid');
                    \$(this).closest('.form-group').find('.error-placeholder').html('');
                }
        });
        \$('#profile-edit').removeClass('is-invalid');
    }

//  Detect changes and reset if changed
    function formHasChanged() {
        let changed = false;
        \$('#profile-edit').find(':input').each(function () {
            const name = \$(this).attr('name');
                if (name && originalData[name] !== \$(this).val()) {
                    changed = true;
                    return false; // exit early
                }
        });
        return changed;
    }

//  When switching to overview tab
    \$('button[data-bs-toggle=\"pill\"]').on('shown.bs.tab', function (e) {
        const targetId = \$(e.target).attr('href');
            if (targetId === '#p-overview') {
                if (formHasChanged()) {
                    resetFormToOriginal();
                }
            }
    });

//  Re-store original data on successful submission
//  (Put this inside your AJAX success response when update is successful)
    function updateOriginalDataFromResponse(data) {
        if (!data || !data.user) return;
        \$('#profile-edit').find(':input').each(function () {
            const name = \$(this).attr('name');
                if (name && data.user.hasOwnProperty(name)) {
                    originalData[name] = data.user[name];
                }
        });
    }

//  Debounced e-mail and username check
    function debounce(fn, delay) {
        let timer;
        return function(...args) {
            clearTimeout(timer);
            timer = setTimeout(() => fn.apply(this, args), delay);
        };
    }

    \$('[name=\"email\"]').on('input', debounce(function () {
        const \$input = \$(this);
        const newVal = \$input.val().trim().toLowerCase();
        const originalVal = \$input.data('original').trim().toLowerCase();

        if (newVal !== originalVal && newVal !== '') {
            \$.post('check-email', { email: newVal, original: originalVal }, function (data) {
                if (data.exists) {
                    \$input.addClass('is-invalid');
                    \$input.closest('.form-group').find('.error-placeholder').html('<div class=\"invalid-feedback\">Email già in uso.</div>');
                } else {
                    \$input.removeClass('is-invalid');
                    \$input.closest('.form-group').find('.error-placeholder').html('');
                }
            }, 'json');
        }
    }, 500));

    \$('[name=\"username\"]').on('input', debounce(function () {
        const \$input = \$(this);
        const newVal = \$input.val().trim();
        const originalVal = \$input.data('original').trim();

        if (newVal !== originalVal && newVal !== '') {
            \$.post('check-username', { username: newVal, original: originalVal }, function (data) {
                if (data.exists) {
                    \$input.addClass('is-invalid');
                    \$input.closest('.form-group').find('.error-placeholder').html('<div class=\"invalid-feedback\">Username già in uso.</div>');
                } else {
                    \$input.removeClass('is-invalid');
                    \$input.closest('.form-group').find('.error-placeholder').html('');
                }
            }, 'json');
        }
    }, 500));
});
</script>
{% endblock %}", "profile-edit.twig", "C:\\wamp64\\www\\liquimet\\templates\\profile-edit.twig");
    }
}
