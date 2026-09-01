@extends('layouts.app')

@section('title', __('Privacy notice').' | Jeroen Bolhuis')
@section('meta_description', __('How this website handles contact messages, technical logs and functional cookies.'))

@section('content')
<article class="container mx-auto max-w-3xl px-4 pb-20 pt-32 text-ink">
    <header class="mb-12">
        <a href="{{ route('home') }}" class="inline-flex min-h-11 items-center text-navi underline decoration-navi/50 underline-offset-4 hover:decoration-navi">
            {{ __('Back to home') }}
        </a>
        <h1 class="mt-5 text-4xl font-bold lg:text-6xl">{{ __('Privacy notice') }}</h1>
        <p class="mt-4 text-mute">{{ __('Last updated: 1 September 2026') }}</p>
    </header>

    @if (app()->getLocale() === 'nl')
        <div class="privacy-copy space-y-10">
            <section aria-labelledby="controller-heading">
                <h2 id="controller-heading">Wie is verantwoordelijk?</h2>
                <p>Jeroen Bolhuis, gevestigd in Eindhoven, Nederland, is de verwerkingsverantwoordelijke voor deze website. Voor privacyvragen of een verzoek kun je mailen naar <a href="mailto:jeroen.bolhuis@hotmail.com">jeroen.bolhuis@hotmail.com</a>.</p>
            </section>

            <section aria-labelledby="contact-data-heading">
                <h2 id="contact-data-heading">Contactformulier en e-mail</h2>
                <p>Als je het contactformulier verstuurt, verwerk ik je naam, e-mailadres en bericht om je vraag te lezen, te beantwoorden en eventuele vervolgcorrespondentie af te handelen. Deze gegevens zijn nodig als je een antwoord wilt ontvangen.</p>
                <p>De grondslag is mijn gerechtvaardigd belang om te kunnen reageren op berichten (artikel 6 lid 1 onder f AVG). Als je bericht gaat over een mogelijke overeenkomst, kan de verwerking ook nodig zijn om op jouw verzoek stappen te nemen vóór het sluiten daarvan (artikel 6 lid 1 onder b AVG). Ik gebruik geen toestemming als grondslag en het formulier heeft daarom geen toestemmingsvakje.</p>
                <p>Contactberichten en antwoorden worden uiterlijk 12 maanden na het laatste contact uit de mailbox verwijderd. Ik bewaar ze langer wanneer dat nodig is voor een lopende samenwerking, een overeenkomst, een geschil of een wettelijke bewaarplicht.</p>
            </section>

            <section aria-labelledby="logs-heading">
                <h2 id="logs-heading">Technische logs en IP-adressen</h2>
                <p>Bij een bezoek verwerken de webserver en hostingprovider technische gegevens, zoals je IP-adres, tijdstip, opgevraagde URL, HTTP-status, verwijzende pagina en browser- of apparaatgegevens. Dit is nodig om de website veilig en beschikbaar te houden, misbruik te beperken en storingen te onderzoeken. De grondslag is mijn gerechtvaardigd belang bij een veilige en goed werkende website.</p>
                <p>Logs die ik kan beheren worden maximaal 30 dagen bewaard. Relevante gegevens kunnen langer worden bewaard wanneer dat noodzakelijk is om een beveiligingsincident of misbruik te onderzoeken of om aan een wettelijke verplichting te voldoen.</p>
            </section>

            <section aria-labelledby="recipients-heading">
                <h2 id="recipients-heading">Ontvangers, verwerkers en doorgifte</h2>
                <p>Vercel host de website en verwerkt verzoeken en technische logs. Google verzorgt de SMTP-verzending via Gmail. Het bericht komt terecht in een Microsoft Outlook/Hotmail-mailbox. Deze dienstverleners ontvangen alleen de gegevens die nodig zijn om hun dienst te leveren en kunnen hun eigen beveiligings- en misbruiklogs bijhouden.</p>
                <p>Deze leveranciers kunnen gegevens buiten de Europese Economische Ruimte verwerken, onder meer in de Verenigde Staten. Waar dat gebeurt, wordt gebruikgemaakt van toepasselijke waarborgen van de leverancier, zoals standaardcontractbepalingen en, waar van toepassing, een adequaatheidsbesluit. Er zijn geen andere vaste ontvangers; gegevens worden alleen gedeeld wanneer de wet dat verplicht of wanneer dit nodig is om juridische rechten te beschermen.</p>
            </section>

            <section aria-labelledby="cookies-heading">
                <h2 id="cookies-heading">Functionele cookies</h2>
                <p>Deze website gebruikt alleen noodzakelijke, first-party cookies. Er zijn geen advertentiecookies, trackingcookies of analytics.</p>
                <div class="overflow-x-auto">
                    <table>
                        <thead><tr><th>Cookie</th><th>Doel</th><th>Duur</th></tr></thead>
                        <tbody>
                            <tr><td><code>XSRF-TOKEN</code></td><td>Beschermt formulieren tegen vervalste verzoeken (CSRF).</td><td>Tot 2 uur na de laatste activiteit.</td></tr>
                            <tr><td><code>*-session</code></td><td>Houdt de beveiligde sessie bij, bewaart je taalkeuze en ondersteunt formuliermeldingen en de verzendlimiet.</td><td>Tot 2 uur na de laatste activiteit.</td></tr>
                        </tbody>
                    </table>
                </div>
                <p>Voor deze strikt noodzakelijke functies wordt geen voorafgaande cookietoestemming gevraagd. Als later tracking of privacygevoelige analytics worden toegevoegd, wordt deze aanpak eerst aangepast.</p>
            </section>

            <section aria-labelledby="external-assets-heading">
                <h2 id="external-assets-heading">Lettertypen en scripts</h2>
                <p>Alpine.js en de lettertypen Archivo en Azeret Mono worden vanaf deze website geleverd. Je browser maakt daarvoor geen runtimeverbinding met jsDelivr of Google Fonts.</p>
            </section>

            <section aria-labelledby="rights-heading">
                <h2 id="rights-heading">Jouw rechten</h2>
                <p>Je kunt vragen om inzage, correctie of verwijdering van je persoonsgegevens, beperking van de verwerking en, waar van toepassing, overdracht van je gegevens. Je kunt ook bezwaar maken tegen verwerking op basis van een gerechtvaardigd belang. Mail je verzoek naar <a href="mailto:jeroen.bolhuis@hotmail.com">jeroen.bolhuis@hotmail.com</a>. Ik kan om informatie vragen om je identiteit te controleren en reageer in beginsel binnen één maand.</p>
                <p>Je hebt het recht om een klacht in te dienen bij de Nederlandse toezichthouder, de <a href="https://autoriteitpersoonsgegevens.nl/een-tip-of-klacht-indienen-bij-de-ap" target="_blank" rel="noopener noreferrer">Autoriteit Persoonsgegevens (AP)</a>. Je persoonsgegevens worden niet gebruikt voor geautomatiseerde besluitvorming of profilering.</p>
            </section>
        </div>
    @else
        <div class="privacy-copy space-y-10">
            <section aria-labelledby="controller-heading">
                <h2 id="controller-heading">Who is responsible?</h2>
                <p>Jeroen Bolhuis, based in Eindhoven, the Netherlands, is the controller for this website. For a privacy question or request, email <a href="mailto:jeroen.bolhuis@hotmail.com">jeroen.bolhuis@hotmail.com</a>.</p>
            </section>

            <section aria-labelledby="contact-data-heading">
                <h2 id="contact-data-heading">Contact form and email</h2>
                <p>When you submit the contact form, I process your name, email address and message to read and answer your request and handle any follow-up correspondence. These details are required if you want to receive a reply.</p>
                <p>The legal basis is my legitimate interest in responding to messages (GDPR Article 6(1)(f)). If your message concerns a possible contract, processing may also be necessary to take steps at your request before entering into it (Article 6(1)(b)). I do not rely on consent, so the form does not include a consent checkbox.</p>
                <p>Contact messages and replies are deleted from the mailbox no later than 12 months after the last contact. I keep them longer when necessary for an active working relationship, a contract, a dispute or a legal retention obligation.</p>
            </section>

            <section aria-labelledby="logs-heading">
                <h2 id="logs-heading">Technical logs and IP addresses</h2>
                <p>When you visit, the web server and hosting provider process technical data such as your IP address, time of access, requested URL, HTTP status, referring page and browser or device information. This is necessary to keep the site secure and available, limit abuse and diagnose faults. The legal basis is my legitimate interest in a secure, reliable website.</p>
                <p>Logs under my control are retained for no more than 30 days. Relevant data may be kept longer when necessary to investigate a security incident or abuse or to comply with a legal obligation.</p>
            </section>

            <section aria-labelledby="recipients-heading">
                <h2 id="recipients-heading">Recipients, processors and transfers</h2>
                <p>Vercel hosts the website and processes requests and technical logs. Google provides SMTP delivery through Gmail. The message is delivered to a Microsoft Outlook/Hotmail mailbox. These providers receive only the data needed to provide their service and may keep their own security and abuse logs.</p>
                <p>These providers may process data outside the European Economic Area, including in the United States. Where this occurs, the provider's applicable safeguards are used, such as Standard Contractual Clauses and, where applicable, an adequacy decision. There are no other regular recipients; data is disclosed only when required by law or necessary to protect legal rights.</p>
            </section>

            <section aria-labelledby="cookies-heading">
                <h2 id="cookies-heading">Functional cookies</h2>
                <p>This website uses only necessary, first-party cookies. It has no advertising cookies, tracking cookies or analytics.</p>
                <div class="overflow-x-auto">
                    <table>
                        <thead><tr><th>Cookie</th><th>Purpose</th><th>Duration</th></tr></thead>
                        <tbody>
                            <tr><td><code>XSRF-TOKEN</code></td><td>Protects forms against forged requests (CSRF).</td><td>Up to 2 hours after your last activity.</td></tr>
                            <tr><td><code>*-session</code></td><td>Maintains the secure session, stores your language choice, and supports form notices and the submission limit.</td><td>Up to 2 hours after your last activity.</td></tr>
                        </tbody>
                    </table>
                </div>
                <p>No prior cookie consent is requested for these strictly necessary functions. If tracking or privacy-invasive analytics are added later, this approach will be reviewed first.</p>
            </section>

            <section aria-labelledby="external-assets-heading">
                <h2 id="external-assets-heading">Fonts and scripts</h2>
                <p>Alpine.js and the Archivo and Azeret Mono fonts are served by this website. Your browser does not make runtime requests to jsDelivr or Google Fonts for them.</p>
            </section>

            <section aria-labelledby="rights-heading">
                <h2 id="rights-heading">Your rights</h2>
                <p>You may ask to access, correct or erase your personal data, restrict its processing and, where applicable, receive a portable copy. You may also object to processing based on legitimate interests. Email your request to <a href="mailto:jeroen.bolhuis@hotmail.com">jeroen.bolhuis@hotmail.com</a>. I may ask for information to verify your identity and will generally respond within one month.</p>
                <p>You have the right to complain to the Dutch supervisory authority, the <a href="https://autoriteitpersoonsgegevens.nl/een-tip-of-klacht-indienen-bij-de-ap" target="_blank" rel="noopener noreferrer">Autoriteit Persoonsgegevens (AP)</a>. Your data is not used for automated decision-making or profiling.</p>
            </section>
        </div>
    @endif
</article>
@endsection
