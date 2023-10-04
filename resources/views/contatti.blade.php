
<x-layout>


    <form action="{{route('contatti.nuovo')}}" method="POST">

    @csrf

    <div class="container container-fluid mt-lg-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <div class="image">
                    <img src="https://media.istockphoto.com/id/1444325054/it/foto/segno-di-spunta-per-scegliere-la-figura-umana-in-legno-per-reclutare-in-azienda-assunzione.webp?b=1&s=170667a&w=0&k=20&c=5CcmsywvnWR3vIN3r2cP-xb5GrZBGEio_Z8WRuoeKwA=" alt="Immagine di candidatura">
                </div>
            </div>
            <div class="col-8 col-md-6">
                <div class="form">
                    <form id="candidaturaForm">

                        <div class="mb-3">
                            <label class="form-label" for="nome">Esperienza:</label>
                            <input type="text" id="nome" name="nome" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="motivazioni">Motivazione:</label>
                            <textarea id="motivazioni" name="motive" class="form-control" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn button-custom">Invia la tua candidatura</button>
                    </form>
                </div>
            </div>
            </div>
        </div>



    <style>


/* .container {
    display: flex;
    align-items: center;
    background-color: black;
    justify-content: center;
    height: 100vh;
} */

.image {
    flex: 1;
    padding: 100px;
    text-align: center;

}

.image img {
    max-width: 100%;
    height: auto;
    border-radius: 50%;
}





h2 {
    font-size: 24px;
    margin-bottom: 20px;
}

form {
    display: flex;
    flex-direction: column;

}

label {
    font-weight: bold;
}

input[type="text"],
input[type="email"],
textarea {
    margin-bottom: 10px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    background-color:gray;
}

input[type="submit"] {
    background-color: #007E90;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

input[type="submit"]:hover {
    background-color: #005A64;
}
    </style>


    </x-layout>
