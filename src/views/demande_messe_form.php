        <section class="px-margin-mobile py-12 md:px-margin-desktop md:py-16 max-w-[1200px] mx-auto">
            <div class="grid gap-8 lg:grid-cols-[0.95fr_1.05fr] items-start">
                <aside class="space-y-6">
                    <div class="space-y-4">
                        <p class="text-sm uppercase tracking-[0.35em] text-primary font-semibold">Étape 2</p>
                        <h1 class="text-4xl md:text-5xl font-black text-primary leading-tight">Formulaire de demande de messe ordinaire</h1>
                        <p class="text-lg text-on-surface-variant max-w-xl">Renseignez les informations essentielles pour finaliser votre intention avec la paroisse Saint Gabriel de Cococodji.</p>
                    </div>

                    <article class="rounded-3xl bg-primary text-on-primary p-6 md:p-8 shadow-lg border border-primary/10">
                        <p class="text-sm uppercase tracking-[0.35em] text-on-primary/80">Messe ordinaire</p>
                        <h2 class="mt-3 text-2xl font-semibold">Récapitulatif pastoral</h2>
                        <ul class="mt-6 space-y-3 text-sm text-on-primary/90">
                            <li class="flex items-start gap-3"><span class="material-symbols-outlined text-secondary-fixed">church</span> Intention simple et spirituelle, idéale pour une prière personnelle ou familiale.</li>
                            <li class="flex items-start gap-3"><span class="material-symbols-outlined text-secondary-fixed">calendar_month</span> Date et heure à confirmer selon la disponibilité du célébrant.</li>
                            <li class="flex items-start gap-3"><span class="material-symbols-outlined text-secondary-fixed">payments</span> Paiement sécurisé pour valider votre demande de messe.</li>
                        </ul>
                    </article>

                    <article class="form-card p-6 md:p-8">
                        <h3 class="text-xl font-semibold text-primary">Ce que vous obtenez</h3>
                        <div class="mt-5 space-y-4 text-sm text-on-surface-variant">
                            <div class="flex items-start gap-3 rounded-2xl bg-surface-container-low p-4">
                                <span class="material-symbols-outlined text-primary">verified</span>
                                <p>Un suivi clair de votre demande, avec confirmation professionnelle de la paroisse.</p>
                            </div>
                            <div class="flex items-start gap-3 rounded-2xl bg-surface-container-low p-4">
                                <span class="material-symbols-outlined text-primary">forum</span>
                                <p>Une interface moderne, lisible et cohérente avec le reste de votre application.</p>
                            </div>
                        </div>
                    </article>
                </aside>

                <section class="form-card p-6 md:p-8">
                    <div class="flex flex-col gap-4 border-b border-outline-variant pb-6 md:flex-row md:items-end md:justify-between">
                        <div>
                            <p class="text-sm uppercase tracking-[0.35em] text-secondary">Détails de la demande</p>
                            <h2 class="mt-2 text-2xl font-semibold text-primary">Informations à renseigner</h2>
                            <p class="mt-2 text-sm text-on-surface-variant">Les champs ci-dessous respectent le système de design déjà utilisé sur la page d’accueil et la page de demande de messe.</p>
                        </div>
                        <a href="?p=demande-messe" class="btn-secondary">Retour au choix <span class="material-symbols-outlined">arrow_back</span></a>
                    </div>

                    <form class="mt-8 space-y-6">
                        <div class="grid gap-6 md:grid-cols-2">
                            <label class="form-label">
                                Intention de messe
                                <input class="form-input" type="text" placeholder="Ex. Pour la paix de la famille ..." />
                            </label>
                            <label class="form-label">
                                Date souhaitée
                                <input class="form-input" type="date" />
                            </label>
                            <label class="form-label">
                                Heure souhaitée
                                <select class="form-input">
                                    <option>08h30</option>
                                    <option>10h00</option>
                                    <option>12h00</option>
                                    <option>17h30</option>
                                </select>
                            </label>
                            <label class="form-label">
                                Demandeur
                                <input class="form-input" type="text" placeholder="Nom complet du demandeur" />
                            </label>
                            <label class="form-label">
                                Email
                                <input class="form-input" type="email" placeholder="nom@exemple.com" />
                            </label>
                            <label class="form-label">
                                Téléphone
                                <input class="form-input" type="tel" placeholder="+228 99 99 99 99" />
                            </label>
                        </div>

                        <label class="form-label">
                            Message ou intention supplémentaire
                            <textarea class="form-input" rows="4" placeholder="Précisez le contexte, un nom, une date particulière ou une demande de prière."></textarea>
                        </label>

                        <div class="rounded-3xl bg-surface-container-low p-5 border border-outline-variant/80">
                            <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                                <div>
                                    <p class="text-sm uppercase tracking-[0.35em] text-secondary">Paiement</p>
                                    <h3 class="mt-2 text-xl font-semibold text-primary">Valider votre demande</h3>
                                    <p class="mt-1 text-sm text-on-surface-variant">Le bouton ci-dessous prépare la validation de votre démarche avec le service paroissial.</p>
                                </div>
                                <button type="button" class="btn-primary">Procéder au paiement <span class="material-symbols-outlined">payments</span></button>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </section>
