<x-layout>
    <x-slot name="title">Contacts </x-slot>
    
    <div class="container bg-light mt-2 border rounded">
        <h1 class="text-center">Contacts</h1>
        <p>Nous sommes joignable via les plateformes suivantes:</p>
        <p><i class="bi bi-facebook" aria-label="facebook"></i> <i class="bi bi-twitter" aria-label="twitter"></i> <i class="bi bi-instagram" aria-label="instagram"></i> <i class="bi bi-linkedin" aria-label="linkedin"></i> <i class="bi bi-twitch" aria-label="twitch"></i> <i class="bi bi-discord" aria-label="discord"></i></p>

        <p>N'hésitez pas à nous poser vos questions.</p>
        <form action="{{ url('contacts') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control  @error('nom') is-invalid @enderror" name="nom" id="nom" placeholder="Votre nom" value="{{ old('nom') }}">
                    @error('nom')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" id="email" placeholder="Votre email" value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <textarea class="form-control  @error('message') is-invalid @enderror" name="message" id="message" placeholder="Votre message">{{ old('message') }}</textarea>
                    @error('message')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-secondary">Envoyer !</button>
            </form>
    </div>
</x-layout>