<form class="" action="{{ route('public.form') }}" method="POST">
    @csrf
    <x-honeypot />
    @if (isset($errors) && $errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <input type="hidden" name="page" value="{{ $page }}">
    <div class="flex flex-col space-y-2 py-5">
        <label for="service">Scegli il servizio</label>
        <select class="p-3 border bg-gray-100 border-orange-500 rounded-lg text-black" name="service" id="service">
            <option value="Sito web">Sito web</option>
            <option value="Restyling sito">Restyling sito web</option>
            <option value="Ecommerce">Portale E-Commerce</option>
            <option value="Gestionale">Gestionale</option>
            <option value="Registrazione dominio">Resgistrazione dominio</option>
            <option value="Hosting">Spazio web</option>
            <option value="Altro">Altro</option>
        </select>
    </div>
    <div class="flex flex-col space-y-2 pb-5">
        <label for="name">Nome</label>
        <input type="text" class="p-3 border bg-gray-100 border-orange-500 rounded-lg focus:bg-green-300" name="name" id="name" value="{{ old('name') }}" placeholder="Il tuo nome" required>
    </div>
    <div class="flex flex-col space-y-2 pb-5">
        <label for="email">Email</label>
        <input type="email" class="p-3 border bg-gray-100 border-orange-500 rounded-lg focus:bg-green-300" name="email" id="email" value="{{ old('email') }}" placeholder="La tua mail" required>
    </div>
    <div class="flex flex-col space-y-2 pb-5">
        <label for="phone">Telefono</label>
        <input type="text" class="p-3 border bg-gray-100 border-orange-500 rounded-lg focus:bg-green-300" name="phone" id="phone" value="{{ old('phone') }}" placeholder="Il tuo telefono" required>
    </div>
    <div class="flex flex-col space-y-2 pb-5">
        <label for="message">Il tuo messaggio</label>
        <textarea class="p-3 border bg-gray-100 border-orange-500 rounded-lg focus:bg-green-300 resize-none" name="message" id="message" rows="10" placeholder="Inserisci qui il tuo messaggio; ti chiedo di includere quante più informazioni possibili riguardo il progetto che vuoi realizzare.">{{ old('message') }}</textarea>
    </div>
    <div class="flex pb-5">
        <input type="checkbox" class="scale-150" name="privacy" id="privacy" required>
        <label for="privacy"><p class="text-sm pl-5">Dichiaro di aver preso visione dell'informativa sulla privacy, pertanto presto il mio consenso al trattamento dei dati per ricevere le informazioni richieste</p></label>
        
    </div>
    <div class="flex justify-center">
        <button class="py-3 w-9/12 border-2 border-orange-500 rounded-full uppercase hover:bg-orange-500 hover:text-white duration-200">Invia</button>
    </div>
</form>