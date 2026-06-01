<!-- Main Content Section -->
<div class="bg-[#f8f9fa] min-h-screen flex flex-col">
    <!-- Header Section -->
    <section class="px-4 md:px-12 py-16 flex justify-center border-b border-[rgba(191,200,205,0.3)]">
        <div class="w-full max-w-[1200px] text-center space-y-6">
            <!-- Success Icon -->
            <div class="flex justify-center">
                <div class="w-20 h-20 rounded-full bg-[#4caf50] flex items-center justify-center">
                    <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                    </svg>
                </div>
            </div>

            <div>
                <h1 class="font-['Noto_Serif'] font-bold text-[#0c6780] text-[48px] leading-[57.6px] tracking-[-0.96px] mb-4">
                    Rendez-vous confirmé !
                </h1>
                <p class="font-['Manrope'] text-[#3f484c] text-[16px] leading-[26px]">
                    Votre rendez-vous a été planifié avec succès. Vous recevrez une confirmation par email.
                </p>
            </div>

            <!-- Progress Indicators (All Complete) -->
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
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                        </svg>
                    </div>
                    <span class="font-['Inter'] font-bold text-[#0c6780] text-[12px] tracking-[0.6px]">DÉTAILS</span>
                </div>
                <div class="w-16 h-px bg-[#c5c6cf] hidden md:block"></div>
                <div class="flex flex-col gap-2 items-center">
                    <div class="bg-[#0c6780] w-10 h-10 rounded-full flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                        </svg>
                    </div>
                    <span class="font-['Inter'] font-bold text-[#0c6780] text-[12px] tracking-[0.6px]">CONFIRMER</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Confirmation Details -->
    <section class="px-4 md:px-12 py-16 flex justify-center">
        <div class="w-full max-w-[800px]">
            <div class="bg-white rounded-[8px] border border-[rgba(191,200,205,0.3)] shadow-sm p-8 space-y-8">
                <!-- Reference Code -->
                <div class="text-center space-y-3">
                    <p class="font-['Manrope'] text-[#3f484c] text-[14px] leading-[20px]">
                        NUMÉRO DE CONFIRMATION
                    </p>
                    <p class="font-['Noto_Serif'] font-bold text-[#0c6780] text-[32px] leading-[40px] tracking-[-0.64px]">
                        #RDV-2026-05-12345
                    </p>
                </div>

                <!-- Divider -->
                <div class="border-t border-[rgba(191,200,205,0.2)]"></div>

                <!-- Appointment Details -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Détails de la rencontre -->
                    <div class="space-y-4">
                        <h3 class="font-['Manrope'] font-semibold text-[#0c6780] text-[12px] tracking-[1.2px] uppercase">
                            Détails de la rencontre
                        </h3>

                        <div class="space-y-3">
                            <div class="flex gap-3 items-start">
                                <svg class="w-5 h-5 text-[#0c6780] mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14zm-5-7h-3v3H9v-3H6v-2h3V6h2v3h3v2z"/>
                                </svg>
                                <div>
                                    <p class="font-['Manrope'] text-[#3f484c] text-[14px]">dimanche 12 mai 2026</p>
                                    <p class="font-['Manrope'] text-[#3f484c] text-[14px]">10:30 - 11:30</p>
                                </div>
                            </div>

                            <div class="flex gap-3 items-start">
                                <svg class="w-5 h-5 text-[#0c6780] mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/>
                                </svg>
                                <div>
                                    <p class="font-['Manrope'] text-[#3f484c] text-[14px]">Lieu : Église Paroissiale</p>
                                    <p class="font-['Manrope'] text-[#3f484c] text-[14px]">Sacristie (accès arrière)</p>
                                </div>
                            </div>

                            <div class="flex gap-3 items-start">
                                <svg class="w-5 h-5 text-[#0c6780] mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/>
                                </svg>
                                <div>
                                    <p class="font-['Manrope'] text-[#3f484c] text-[14px]">Prêtre : Père Jean Dupont</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Informations de la demande -->
                    <div class="space-y-4">
                        <h3 class="font-['Manrope'] font-semibold text-[#0c6780] text-[12px] tracking-[1.2px] uppercase">
                            Informations de la demande
                        </h3>

                        <div class="space-y-3">
                            <div>
                                <p class="font-['Manrope'] text-[#6b7280] text-[12px] uppercase tracking-[0.6px]">Type</p>
                                <p class="font-['Manrope'] text-[#0c6780] text-[16px] font-semibold">Messe Ordinaire</p>
                            </div>

                            <div>
                                <p class="font-['Manrope'] text-[#6b7280] text-[12px] uppercase tracking-[0.6px]">Intention</p>
                                <p class="font-['Manrope'] text-[#3f484c] text-[14px]">Pour le repos de l'âme de ma mère</p>
                            </div>

                            <div>
                                <p class="font-['Manrope'] text-[#6b7280] text-[12px] uppercase tracking-[0.6px]">Montant</p>
                                <p class="font-['Noto_Serif'] text-[#0c6780] text-[20px] font-bold">18,00 €</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Divider -->
                <div class="border-t border-[rgba(191,200,205,0.2)]"></div>

                <!-- Info Box -->
                <div class="bg-[rgba(135,206,235,0.1)] border border-[rgba(135,206,235,0.3)] rounded-[8px] p-6 space-y-2">
                    <p class="font-['Manrope'] font-semibold text-[#0c6780] text-[14px]">
                        📧 Confirmation envoyée par email
                    </p>
                    <p class="font-['Manrope'] text-[#3f484c] text-[14px] leading-[20px]">
                        Vous recevrez un email de confirmation avec tous les détails à votre adresse email et vous pourrez l'utiliser comme référence pour le jour du rendez-vous.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Action Buttons -->
    <section class="px-4 md:px-12 pb-16 flex justify-center">
        <div class="w-full max-w-[800px] flex flex-col md:flex-row gap-4">
            <button class="flex-1 bg-[#0c6780] text-white rounded-[12px] py-4 font-['Manrope'] font-semibold text-[16px] hover:opacity-90 transition-opacity">
                Télécharger la confirmation
            </button>
            <button class="flex-1 bg-white border border-[#0c6780] text-[#0c6780] rounded-[12px] py-4 font-['Manrope'] font-semibold text-[16px] hover:bg-[#f5f3f3] transition-colors">
                Retour à l'accueil
            </button>
        </div>
    </section>
</div>
