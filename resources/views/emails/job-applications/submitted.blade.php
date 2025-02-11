@component('mail::message')
# Nouvelle candidature reçue

Une nouvelle candidature a été reçue pour le poste: **{{ $application->jobOffer->title }}**

## Informations du candidat:
- Nom: {{ $application->first_name }} {{ $application->last_name }}
- Email: {{ $application->email }}
- Téléphone: {{ $application->phone }}
- Ville: {{ $application->city }}
- Adresse: {{ $application->address }}

## Message du candidat:
{{ $application->message }}

Le CV du candidat est joint à cet email.

Cordialement,<br>
{{ config('app.name') }}
@endcomponent