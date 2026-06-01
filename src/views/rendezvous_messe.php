<!-- Main Content Section -->
<div class="bg-[#f8f9fa] min-h-screen flex flex-col">
    <!-- Header Section -->
    <section class="px-4 md:px-12 py-16 flex justify-center border-b border-[rgba(191,200,205,0.3)]">
        <div class="w-full max-w-[1200px]">
            <h1 class="font-['Noto_Serif'] font-bold text-[#0c6780] text-[48px] text-center leading-[57.6px] tracking-[-0.96px] mb-4">
                Prendre un Rendez-vous pour une Messe
            </h1>
            <p class="font-['Manrope'] text-[#3f484c] text-[16px] text-center leading-[26px]">
                Choisissez une date, une heure et rencontrez le prêtre pour discuter de votre intention.
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
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                        </svg>
                    </div>
                    <span class="font-['Inter'] font-bold text-[#0c6780] text-[12px] tracking-[0.6px]">DÉTAILS</span>
                </div>
                <div class="w-16 h-px bg-[#c5c6cf] hidden md:block"></div>
                <div class="flex flex-col gap-2 items-center">
                    <div class="bg-[#0c6780] w-10 h-10 rounded-full flex items-center justify-center">
                        <span class="font-['Inter'] font-bold text-white text-[16px]">3</span>
                    </div>
                    <span class="font-['Inter'] font-bold text-[#0c6780] text-[12px] tracking-[0.6px]">CONFIRMER</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="px-4 md:px-12 py-16 flex justify-center">
        <div class="w-full max-w-[1200px] grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Left Side - Calendar -->
            <div class="bg-white rounded-[8px] border border-[rgba(191,200,205,0.3)] shadow-sm p-8 space-y-6">
                <h2 class="font-['Manrope'] font-semibold text-[#0c6780] text-[18px] leading-[24px]">
                    Sélectionner une date
                </h2>
                
                <!-- Calendar Input -->
                <div>
                    <input type="date" class="w-full bg-[#f5f3f3] rounded-[4px] p-4 font-['Manrope'] text-[16px] outline-none border-none" />
                </div>

                <!-- Available Slots -->
                <div class="space-y-3">
                    <p class="font-['Manrope'] font-semibold text-[#0c6780] text-[12px] tracking-[1.2px] uppercase">
                        CRÉNEAUX DISPONIBLES
                    </p>
                    <div class="grid grid-cols-2 gap-3">
                        <button class="bg-[#f5f3f3] border border-[rgba(191,200,205,0.3)] rounded-[8px] py-3 px-4 font-['Manrope'] text-[16px] text-[#0c6780] font-semibold hover:bg-[#0c6780] hover:text-white transition-colors">
                            09:00 - 10:00
                        </button>
                        <button class="bg-[#f5f3f3] border border-[rgba(191,200,205,0.3)] rounded-[8px] py-3 px-4 font-['Manrope'] text-[16px] text-[#0c6780] font-semibold hover:bg-[#0c6780] hover:text-white transition-colors">
                            10:30 - 11:30
                        </button>
                        <button class="bg-[#f5f3f3] border border-[rgba(191,200,205,0.3)] rounded-[8px] py-3 px-4 font-['Manrope'] text-[16px] text-[#0c6780] font-semibold hover:bg-[#0c6780] hover:text-white transition-colors">
                            14:00 - 15:00
                        </button>
                        <button class="bg-[#f5f3f3] border border-[rgba(191,200,205,0.3)] rounded-[8px] py-3 px-4 font-['Manrope'] text-[16px] text-[#0c6780] font-semibold hover:bg-[#0c6780] hover:text-white transition-colors">
                            15:30 - 16:30
                        </button>
                    </div>
                </div>
            </div>

            <!-- Right Side - Priest Profile & Info -->
            <div class="space-y-6">
                <!-- Priest Card -->
                <div class="bg-white rounded-[8px] border border-[rgba(191,200,205,0.3)] shadow-sm p-8">
                    <div class="flex items-start gap-6">
                        <!-- Avatar -->
                        <div class="w-24 h-24 rounded-full bg-gradient-to-br from-[#0c6780] to-[#087d9a] flex-shrink-0 flex items-center justify-center">
                            <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                            </svg>
                        </div>

                        <!-- Info -->
                        <div class="flex-1 space-y-2">
                            <h3 class="font-['Noto_Serif'] font-bold text-[#0c6780] text-[24px] leading-[33.6px]">
                                Père Jean Dupont
                            </h3>
                            <p class="font-['Manrope'] text-[#3f484c] text-[14px] leading-[20px]">
                                Vicaire - Disponible lun-ven
                            </p>
                            <div class="flex gap-1 pt-2">
                                <svg class="w-4 h-4 text-[#ffc107]" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                </svg>
                                <svg class="w-4 h-4 text-[#ffc107]" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                </svg>
                                <svg class="w-4 h-4 text-[#ffc107]" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                </svg>
                                <svg class="w-4 h-4 text-[#ffc107]" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                </svg>
                                <svg class="w-4 h-4 text-[#ddd]" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Confirmation Button -->
                <button class="w-full bg-[#0c6780] text-white rounded-[12px] py-5 font-['Manrope'] font-semibold text-[18px] hover:opacity-90 transition-opacity flex items-center justify-center gap-2">
                    <span>Confirmer le rendez-vous</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>

                <!-- Info Box -->
                <div class="bg-[rgba(135,206,235,0.1)] border border-[rgba(135,206,235,0.3)] rounded-[8px] p-6 space-y-3">
                    <h3 class="font-['Manrope'] font-semibold text-[#0c6780] text-[14px] tracking-[0.7px]">
                        💡 Conseil pratique
                    </h3>
                    <p class="font-['Manrope'] text-[#3f484c] text-[14px] leading-[20px]">
                        Lors de la rencontre, vous pourrez discuter de tous les détails concernant votre messe. Le prêtre vous guidera aussi pour répondre à vos questions.
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>
