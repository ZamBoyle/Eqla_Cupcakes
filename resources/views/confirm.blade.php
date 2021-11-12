<x-layout>
    <x-slot name='title'>Confirmation formulaire de contacts</x-slot>
    <br />
    <div class="container">
        <p>Madame/Monsieur {{ request()->get('nom') }}, vous recevrez une réponse rapidement.</p>
        <p>Votre demande sera traîtée dans les plus brefs délais:</p>
        <p class='font-italic border p-2'>{{ request()->get('message') }}</p>
    </div>
</x-layout>
