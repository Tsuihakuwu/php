<!--Section-->
<div class="d-flex mt-2">
            <section id="section" class="w-100">

                <h2>Contact</h2>
                <hr>

                <article id="article" class="w-100">
                    <!--Formulaire-->
                    <form id="evjs_ex5" action="../jardiform.php" method="POST" class="d-flex justify-content-center w-100">

                        <fieldset id="evjs_ex5_fs1" class="form-group p-3">
                            <p class="text-danger">* Ces zones sont obligatoires</p>
                            <fieldset id="evjs_ex5_fs2" class="form-group p-3 s1">
                                <legend class="w-auto px-2">
                                    <h5>Vos coordonnées</h5>
                                </legend>
                                <div class="d-flex justify-content-between mt-1 w-100">
                                    <label for="nom" class="form-inline">Votre nom <span
                                            class="form-inline text-danger">*</span> : </label><input type="text"
                                        name="nom" id="nom" class="form-inline">
                                </div>
                                <div class="d-flex justify-content-end"><small class="error" id="er_nom"></small>
                                </div>
                                <div class="d-flex justify-content-between mt-1 w-100">
                                    <label for="prenom">Votre pr&eacute;nom <span class="text-danger">*</span> :
                                    </label><input type="text" name="prenom" id="prenom">
                                </div>
                                <div class="d-flex justify-content-end"><small class="error" id="er_prenom"></small>
                                </div>
                                <div class="d-flex justify-content-between mt-1 w-100">
                                    <div id="sx" class="d-flex justify-content-between w-100">
                                        <div id="lblsx" class="">Sexe <span class="text-danger">*</span> : </div>
                                        <div class="d-flex justify-content-start">
                                            <div class="mx-1">
                                                <input type="radio" name="sexe" id="s_feminin" value="feminin"
                                                    class="radio_inp" checked required><label for="s_feminin">
                                                    F&eacute;minin</label>
                                            </div>
                                            <div class="mx-1">
                                                <input type="radio" name="sexe" id="s_masculin" value="masculin"
                                                    class="radio_inp" required><label for="s_masculin">
                                                    Masculin</label>
                                            </div>
                                            <div class="mx-1">
                                                <input type="radio" name="sexe" id="s_autre" value="autre"
                                                    class="radio_inp" required><label for="s_autre">
                                                    Autre</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between mt-1 w-100">
                                    <label for="ddn">Date de naissance <span class="text-danger">*</span> :
                                    </label><input type="date" name="ddn" id="ddn" required>
                                </div>
                                <div class="d-flex justify-content-end"><small class="error" id="er_ddn"></small>
                                </div>
                                <div class="d-flex justify-content-between mt-1 w-100">
                                    <label for="cp">Code postal <span class="text-danger">*</span> : </label><input
                                        type="text" name="cp" id="cp" required>
                                </div>
                                <div class="d-flex justify-content-end"><small class="error" id="er_cp"></small>
                                </div>
                                <div class="d-flex justify-content-between mt-1 w-100">
                                    <label for="adr">Adresse : </label><input type="text" name="adr" id="adr">
                                </div>
                                <div class="d-flex justify-content-between mt-1 w-100">
                                    <label for="ville">Ville : </label><input type="text" name="ville" id="ville">
                                </div>
                                <div class="d-flex justify-content-between mt-1 w-100"><label for="email">Email
                                        <span class="text-danger">*</span> : </label><input type="text" name="email"
                                        id="email" required></div>
                                <div class="d-flex justify-content-end"><small class="error" id="er_mail"></small>
                                </div>
                            </fieldset>
                            <br>
                            <fieldset id="evjs_ex5_fs3" class="form-group p-3 s1">
                                <legend class="w-auto px-2">
                                    <h5>Votre demande</h5>
                                </legend>
                                <div class="d-flex justify-content-left mt-1 w-100">
                                    <label for="sujet" id="lb_sujet">Sujet <span class="text-danger">*</span> :
                                    </label>
                                    <select name="sujet" id="sujet">
                                        <option value="" selected disabled hidden>Veuillez sel&eacute;ctionner un
                                            sujet
                                        </option>
                                        <option value="commande">Mes commandes</option>
                                        <option value="question">Question sur un produit</option>
                                        <option value="reclam">R&eacute;clamation</option>
                                        <option value="autre">Autres</option>
                                    </select>
                                </div>
                                <div>
                                    <small class="error" id="er_sujet"></small>
                                </div>

                                <div class="d-flex justify-content-between mt-1 w-100">
                                    <label for="question">Votre question <span class="text-danger">*</span> :
                                    </label>
                                </div>
                                <div>
                                    <textarea name="question" id="question" rows="3" cols="70"></textarea>
                                </div>
                                <div>
                                    <small class="error" id="er_quest"></small>
                                </div>
                            </fieldset>
                            <div id="qu_flex" class="d-flex justify-content-start w-100 mt-2">
                                <input type="checkbox" name="accept" id="accept" required><label for="accept"
                                    id="c_accept">
                                    <span class="text-danger">&nbsp;*</span> J'accepte le traitement informatique de
                                    ce formulaire </label>
                            </div>
                            <div>
                                <small class="error" id="er_accept"></small>
                            </div>
                            <div id="accept_flex" class="d-flex justify-content-end">
                                <!-- Type button pour debugage -->
                                <input type="submit" value="Envoyer" class="" id="evjs_jarditou_sb"><input type="reset"
                                    value="Annuler" class="ml-5">
                            </div>
                        </fieldset>
                    </form>
                </article>
            </section>