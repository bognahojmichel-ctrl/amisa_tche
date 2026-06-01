<!-- Main Content Section -->
<div class="bg-[#f8f9fa] min-h-screen flex flex-col">
    <!-- Header Section -->
    <section class="px-4 md:px-12 py-16 flex justify-center border-b border-[rgba(191,200,205,0.3)]">
        <div class="w-full max-w-[1200px]">
            <h1 class="font-['Noto_Serif'] font-bold text-[#0c6780] text-[48px] text-center leading-[57.6px] tracking-[-0.96px] mb-4">
                Demander une Messe Spéciale
            </h1>
            <p class="font-['Manrope'] text-[#3f484c] text-[16px] text-center leading-[26px]">
                Célébrez un événement particulier ou une intention spéciale avec une messe dédiée à la paroisse.
            </p>

            <!-- Progress Indicators -->
            <div class="flex gap-4 items-center justify-center w-full flex-wrap md:flex-nowrap mt-8">
                <div class="flex flex-col gap-2 items-center">
                    <div class="bg-[#0c6780] w-10 h-10 rounded-full flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                        </svg>
                    </div>
                    <span class="font-['Inter'] font-bold text-[#0c6780] text-[12px] tracking-[0.6px]">SÉLECTIONNER LE TYPE</span>
                </div>
                <div class="w-16 h-px bg-[#c5c6cf] hidden md:block"></div>
                <div class="flex flex-col gap-2 items-center">
                    <div class="bg-[#0c6780] w-10 h-10 rounded-full flex items-center justify-center">
                        <span class="font-['Inter'] font-bold text-white text-[16px]">2</span>
                    </div>
                    <span class="font-['Inter'] font-bold text-[#0c6780] text-[12px] tracking-[0.6px]">DÉTAILS</span>
                </div>
                <div class="w-16 h-px bg-[#c5c6cf] hidden md:block"></div>
                <div class="flex flex-col gap-2 items-center">
                    <div class="bg-[#e1e3e4] w-10 h-10 rounded-full flex items-center justify-center">
                        <span class="font-['Inter'] font-bold text-[#44474e] text-[16px]">3</span>
                    </div>
                    <span class="font-['Inter'] font-bold text-[#44474e] text-[12px] tracking-[0.6px]">CONFIRMER</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="px-4 md:px-12 py-16 flex justify-center">
        <div class="w-full max-w-[1200px]">
            <div class="bg-white rounded-[8px] border border-[rgba(191,200,205,0.3)] shadow-sm p-8 space-y-8">
                <!-- Type of Celebration -->
                <div>
                    <label class="font-['Manrope'] font-semibold text-[#0c6780] text-[12px] tracking-[1.2px] uppercase block mb-4">
                        TYPE DE CÉLÉBRATION
                    </label>
                    <select class="w-full bg-[#f5f3f3] rounded-t-[4px] p-4 font-['Manrope'] text-[16px] outline-none border-none">
                        <option>Mariage</option>
                        <option>Baptême</option>
                        <option>Confirmation</option>
                        <option>Anniversaire de mariage</option>
                        <option>Autres événements</option>
                    </select>
                </div>

                <!-- Description/Context -->
                <div>
                    <label class="font-['Manrope'] font-semibold text-[#0c6780] text-[12px] tracking-[1.2px] uppercase block mb-4">
                        CONTEXTE ET DÉTAILS
                    </label>
                    <textarea class="w-full bg-[#f5f3f3] rounded-t-[4px] p-4 font-['Manrope'] text-[16px] min-h-[140px] placeholder-[#6b7280] resize-none outline-none" placeholder="Décrivez l'événement ou l'occasion célébrée, les personnes concernées, et toute intention particulière..."></textarea>
                </div>

                <!-- Three Column Grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <label class="font-['Manrope'] font-semibold text-[#0c6780] text-[12px] tracking-[1.2px] uppercase block mb-4">
                            DATE PRÉFÉRÉE
                        </label>
                        <input type="date" class="w-full bg-[#f5f3f3] rounded-t-[4px] p-4 font-['Manrope'] text-[16px] outline-none border-none" />
                    </div>
                    <div>
                        <label class="font-['Manrope'] font-semibold text-[#0c6780] text-[12px] tracking-[1.2px] uppercase block mb-4">
                            HEURE PRÉFÉRÉE
                        </label>
                        <input type="time" class="w-full bg-[#f5f3f3] rounded-t-[4px] p-4 font-['Manrope'] text-[16px] outline-none border-none" />
                    </div>
                    <div>
                        <label class="font-['Manrope'] font-semibold text-[#0c6780] text-[12px] tracking-[1.2px] uppercase block mb-4">
                            NOMBRE DE PERSONNES
                        </label>
                        <input type="number" min="1" class="w-full bg-[#f5f3f3] rounded-t-[4px] p-4 font-['Manrope'] text-[16px] placeholder-[#6b7280] outline-none border-none" placeholder="Env. 50" />
                    </div>
                </div>

                <!-- Contact Info -->
                <div>
                    <label class="font-['Manrope'] font-semibold text-[#0c6780] text-[12px] tracking-[1.2px] uppercase block mb-4">
                        PERSONNE DE CONTACT
                    </label>
                    <input type="text" class="w-full bg-[#f5f3f3] rounded-t-[4px] p-4 font-['Manrope'] text-[16px] placeholder-[#6b7280] outline-none border-none" placeholder="Votre nom" />
                </div>

                <!-- Button -->
                <div class="pt-4 space-y-3">
                    <button class="w-full bg-[#0c6780] text-white rounded-[12px] py-5 font-['Manrope'] font-semibold text-[18px] hover:opacity-90 transition-opacity flex items-center justify-center gap-2">
                        <span>Suivant</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Info Section -->
    <section class="px-4 md:px-12 pb-16 flex justify-center">
        <div class="w-full max-w-[1200px]">
            <div class="bg-white rounded-[8px] border border-[rgba(191,200,205,0.3)] p-8 space-y-6">
                <h2 class="font-['Noto_Serif'] font-bold text-[#0c6780] text-[32px] leading-[57.6px] tracking-[-0.96px]">
                    À propos des messes spéciales
                </h2>
                <p class="font-['Manrope'] text-[#3f484c] text-[16px] leading-[24px]">
                    Les messes spéciales offrent une occasion unique de célébrer les moments importants de votre vie en communion avec la paroisse. Notre équipe pastorale sera heureuse d'adapter la célébration à votre intention particulière et de répondre à vos questions.
                </p>
            </div>
        </div>
    </section>
</div>
