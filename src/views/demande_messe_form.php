<!-- Main Content Section -->
<div class="bg-[#f8f9fa] min-h-screen flex flex-col">
    <!-- Header Section -->
    <section class="px-4 md:px-12 py-16 flex justify-center border-b border-[rgba(191,200,205,0.3)]">
        <div class="w-full max-w-[1200px]">
            <h1 class="font-['Noto_Serif'] font-bold text-[#0c6780] text-[48px] text-center leading-[57.6px] tracking-[-0.96px] mb-4">
                Demander une Messe
            </h1>
            <p class="font-['Manrope'] text-[#3f484c] text-[16px] text-center leading-[26px]">
                Confiez vos intentions à la prière de la communauté à travers le saint sacrifice de la messe.
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
        <div class="w-full max-w-[1200px] grid grid-cols-1 lg:grid-cols-12 gap-6">
            <!-- Left Side -->
            <div class="lg:col-span-5 space-y-6">
                <h2 class="font-['Noto_Serif'] font-bold text-[#0c6780] text-[32px] leading-[57.6px] tracking-[-0.96px]">
                    Messe Ordinaire
                </h2>
                <p class="font-['Manrope'] text-[#3f484c] text-[18px] leading-[29px]">
                    Confiez vos intentions de prière à la communauté. Que ce soit pour un défunt, une action de grâce ou une intention particulière, chaque messe célébrée porte la lumière de vos demandes.
                </p>
                
                <!-- Info Box -->
                <div class="bg-[rgba(135,206,235,0.2)] border border-[rgba(135,206,235,0.3)] rounded-[8px] p-6 space-y-3">
                    <h3 class="font-['Noto_Serif'] font-medium text-[#0c6780] text-[24px] leading-[33.6px]">
                        Une pratique séculaire
                    </h3>
                    <p class="font-['Manrope'] text-[#3f484c] text-[16px] leading-[24px]">
                        "L'offrande de messe est un geste de partage et de soutien à la vie de votre paroisse et de ses prêtres."
                    </p>
                </div>
            </div>

            <!-- Right Side - Form -->
            <div class="lg:col-span-7 bg-white rounded-[8px] border border-[rgba(191,200,205,0.3)] shadow-sm p-8 space-y-8">
                <!-- Intention -->
                <div>
                    <label class="font-['Manrope'] font-semibold text-[#0c6780] text-[12px] tracking-[1.2px] uppercase block mb-4">
                        INTENTION DE MESSE
                    </label>
                    <textarea class="w-full bg-[#f5f3f3] rounded-t-[4px] p-4 font-['Manrope'] text-[16px] min-h-[120px] placeholder-[#6b7280] resize-none outline-none" placeholder="Pour le repos de l'âme de..., en action de grâce pour..."></textarea>
                </div>

                <!-- Date & Time -->
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label class="font-['Manrope'] font-semibold text-[#0c6780] text-[12px] tracking-[1.2px] uppercase block mb-4">
                            DATES DISPONIBLES
                        </label>
                        <input type="date" class="w-full bg-[#f5f3f3] rounded-t-[4px] p-4 font-['Manrope'] text-[16px] outline-none border-none" value="2026-05-10" />
                    </div>
                    <div>
                        <label class="font-['Manrope'] font-semibold text-[#0c6780] text-[12px] tracking-[1.2px] uppercase block mb-4">
                            HEURES DISPONIBLES
                        </label>
                        <select class="w-full bg-[#f5f3f3] rounded-t-[4px] p-4 font-['Manrope'] text-[16px] outline-none border-none">
                            <option>08:30 - Messe matinale</option>
                            <option>12:00 - Messe de midi</option>
                            <option>18:00 - Messe du soir</option>
                        </select>
                    </div>
                </div>

                <!-- Requester -->
                <div>
                    <label class="font-['Manrope'] font-semibold text-[#0c6780] text-[12px] tracking-[1.2px] uppercase block mb-4">
                        DEMANDEUR (FACULTATIF)
                    </label>
                    <input type="text" class="w-full bg-[#f5f3f3] rounded-t-[4px] p-4 font-['Manrope'] text-[16px] placeholder-[#6b7280] outline-none border-none" placeholder="Votre nom ou celui de votre famille" />
                </div>

                <!-- Button -->
                <div class="pt-4 space-y-3">
                    <button class="w-full bg-[#0c6780] text-white rounded-[12px] py-5 font-['Manrope'] font-semibold text-[18px] hover:opacity-90 transition-opacity flex items-center justify-center gap-3">
                        <svg class="w-6 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
                        </svg>
                        Procéder au paiement
                    </button>
                    <p class="font-['Manrope'] font-semibold text-[#3f484c] text-[12px] text-center opacity-70">
                        Montant de l'offrande suggéré : 18,00 €
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Info Cards -->
    <section class="px-4 md:px-12 pb-16 flex justify-center">
        <div class="w-full max-w-[1200px]">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Sécurité -->
                <div class="bg-[#efeded] border border-[rgba(191,200,205,0.2)] rounded-[8px] p-6 space-y-3">
                    <svg class="w-6 h-6 text-[#0c6780]" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.72-7 8.77V12z"/>
                    </svg>
                    <h3 class="font-['Noto_Serif'] font-medium text-[#1b1c1c] text-[24px] leading-[33.6px]">Sécurité</h3>
                    <p class="font-['Manrope'] text-[#3f484c] text-[16px] leading-[24px]">Vos informations et paiements sont protégés par cryptage SSL sécurisé.</p>
                </div>

                <!-- Solidarité -->
                <div class="bg-[#efeded] border border-[rgba(191,200,205,0.2)] rounded-[8px] p-6 space-y-3">
                    <svg class="w-6 h-6 text-[#0c6780]" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                    </svg>
                    <h3 class="font-['Noto_Serif'] font-medium text-[#1b1c1c] text-[24px] leading-[33.6px]">Solidarité</h3>
                    <p class="font-['Manrope'] text-[#3f484c] text-[16px] leading-[24px]">Votre don soutient directement la mission liturgique de notre paroisse.</p>
                </div>

                <!-- Suivi -->
                <div class="bg-[#efeded] border border-[rgba(191,200,205,0.2)] rounded-[8px] p-6 space-y-3">
                    <svg class="w-6 h-6 text-[#0c6780]" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/>
                    </svg>
                    <h3 class="font-['Noto_Serif'] font-medium text-[#1b1c1c] text-[24px] leading-[33.6px]">Suivi</h3>
                    <p class="font-['Manrope'] text-[#3f484c] text-[16px] leading-[24px]">Vous recevrez une confirmation par email dès que la messe sera planifiée.</p>
                </div>
            </div>
        </div>
    </section>
</div>
