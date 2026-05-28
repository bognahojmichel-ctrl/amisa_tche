        <main class="flex-grow flex items-center justify-center py-section-gap px-margin-mobile relative overflow-hidden">
            <div class="absolute inset-0 sacred-gradient pointer-events-none"></div>
            <div class="max-w-[800px] w-full z-10">
                <div class="text-center mb-12">
                    <div class="inline-flex items-center justify-center w-20 h-20 bg-primary-container/20 rounded-full mb-6">
                        <span class="material-symbols-outlined text-primary text-5xl" style="font-variation-settings: 'wght' 300;">check_circle</span>
                    </div>
                    <h1 class="font-headline-xl text-headline-xl text-primary mb-4">Confirmation et Code de Rendez-vous</h1>
                    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto">
                        Que la paix soit avec vous. Votre demande pour une Messe Spéciale a été enregistrée avec succès dans notre sanctuaire numérique.
                    </p>
                </div>

                <div class="bg-surface-container-lowest border border-primary/10 rounded-xl shadow-[0_8px_30px_rgb(135,206,235,0.08)] overflow-hidden">
                    <div class="md:grid md:grid-cols-5">
                        <div class="p-8 md:col-span-3 border-b md:border-b-0 md:border-r border-outline-variant/20">
                            <h2 class="font-headline-md text-headline-md text-on-surface mb-8">Récapitulatif de votre rencontre</h2>
                            <div class="space-y-6">
                                <div class="flex items-start gap-4">
                                    <span class="material-symbols-outlined text-primary mt-1">calendar_today</span>
                                    <div>
                                        <p class="font-label-sm text-label-sm text-on-surface-variant mb-1">DATE</p>
                                        <p class="font-body-lg text-body-lg text-on-surface"><?= isset($date) ? htmlspecialchars($date) : 'Dimanche 24 Mars 2024' ?></p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-4">
                                    <span class="material-symbols-outlined text-primary mt-1">schedule</span>
                                    <div>
                                        <p class="font-label-sm text-label-sm text-on-surface-variant mb-1">HEURE</p>
                                        <p class="font-body-lg text-body-lg text-on-surface"><?= isset($heure) ? htmlspecialchars($heure) : '10:30 — Messe Dominicale' ?></p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-4">
                                    <span class="material-symbols-outlined text-primary mt-1">location_on</span>
                                    <div>
                                        <p class="font-label-sm text-label-sm text-on-surface-variant mb-1">LIEU</p>
                                        <p class="font-body-lg text-body-lg text-on-surface"><?= isset($lieu) ? htmlspecialchars($lieu) : 'Paroisse de la Lumière Divine' ?><br/><?= isset($chapelle) ? htmlspecialchars($chapelle) : 'Chapelle Saint-Michel' ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="p-8 md:col-span-2 bg-surface-container-low flex flex-col justify-center items-center text-center">
                            <p class="font-label-sm text-label-sm text-on-surface-variant mb-4">CODE CONFIDENTIEL</p>
                            <div class="bg-white border-2 border-dashed border-primary-container px-6 py-4 rounded-lg mb-4">
                                <span class="font-headline-lg text-headline-lg tracking-widest text-primary"><?= isset($code) ? htmlspecialchars($code) : 'LD-882-X' ?></span>
                            </div>
                            <p class="font-label-sm text-label-sm text-on-surface-variant px-4">
                                Veuillez présenter ce code à l'accueil lors de votre arrivée.
                            </p>
                            <div class="mt-8 w-full h-32 rounded-lg overflow-hidden border border-outline-variant/30 grayscale opacity-80">
                                <img alt="Plan d'accès" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCXB2xQV6XREFSbP7ZGhQedSgAtIMGlol_JnxCXOnsbhMnVqCSOhHagi9fda4lDDRBv4D9J-tL2chCYhIv-bVF9IPOAddsiYzupt5L8AY55iMPAyYZ7WINmSZKcs2wkHyMJOVWVIoSNMTuuKgKni6fChjMhSdA1iW2-Gf90AYiIzdTdy9IHobZOfO7TQnoiDlyZEI5YDGKdyFdmbD5Dga7BdaHBh-tpDf9npxmmPyJ62dvwEdsnt9G4vtu6VDedh0Te6BTh_Z1gpP0"/>
                            </div>
                        </div>
                    </div>

                    <div class="bg-primary-container/5 px-8 py-4 border-t border-outline-variant/20">
                        <p class="font-body-md text-body-md text-on-surface-variant italic text-center">
                            "Là où deux ou trois sont assemblés en mon nom, je suis au milieu d'eux."
                        </p>
                    </div>
                </div>

                <div class="mt-12 flex flex-col md:flex-row justify-center gap-gutter">
                    <button onclick="window.print()" class="bg-primary text-on-primary px-8 py-4 rounded-full font-label-sm text-label-sm flex items-center justify-center gap-2 hover:shadow-lg hover:shadow-primary/20 transition-all">
                        <span class="material-symbols-outlined">print</span>
                        IMPRIMER LE RÉCAPITULATIF
                    </button>
                    <a href="?p=home" class="bg-transparent border border-secondary text-secondary px-8 py-4 rounded-full font-label-sm text-label-sm hover:bg-secondary/5 transition-colors flex items-center justify-center">
                        RETOURNER À L'ACCUEIL
                    </a>
                </div>
            </div>
        </main>
