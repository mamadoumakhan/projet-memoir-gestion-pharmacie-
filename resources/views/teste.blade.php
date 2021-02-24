
    <form action="{{ route('agent') }}" method="POST">
        @csrf
        <label for="nom">Entrez votre nom : </label>
        <input type="text" name="nom" id="nom">

        <label for="prenom">Entrez votre prenom : </label>
        <input type="text" name="prenom" id="prenom">

        <label for="email">Entrez votre email : </label>
        <input type="text" name="email" id="email">

        <label for="telephone">Entrez votre telephone : </label>
        <input type="text" name="telephone" id="telephone">

        <label for="etat">Entrez votre etat : </label>
        <input type="text" name="etat" id="etat">

        <input type="submit" value="Envoyer !">
    </form>
