<!-- Main Content Section -->
<div class="bg-[#f8f9fa] min-h-screen flex flex-col">
    <!-- Header & Title Section -->
    <section class="px-4 md:px-12 py-16 flex justify-center">
        <div class="w-full max-w-[672px] flex flex-col gap-16">
            <!-- Title & Description -->
            <div class="flex flex-col gap-4 items-center">
                <h1 class="font-['Noto_Serif'] font-bold text-[#0c6780] text-[48px] text-center leading-[57.6px] tracking-[-0.96px]">
                    Demander une Messe
                </h1>
                <p class="font-['Manrope'] text-[#3f484c] text-[18px] text-center leading-[28.8px]">
                    Confiez vos intentions à la prière de la communauté à travers le saint sacrifice de la messe.
                </p>
            </div>

            <!-- Progress Indicators -->
            <div class="flex gap-4 items-center justify-center w-full flex-wrap md:flex-nowrap">
                <!-- Step 1 -->
                <div class="flex flex-col gap-2 items-center">
                    <div class="bg-[#0c6780] w-10 h-10 rounded-full flex items-center justify-center">
                        <span class="font-['Inter'] font-bold text-white text-[16px] leading-[24px]">1</span>
                    </div>
                    <span class="font-['Inter'] font-bold text-[#0c6780] text-[12px] text-center tracking-[0.6px] whitespace-nowrap">
                        SÉLECTIONNER LE TYPE
                    </span>
                </div>

                <!-- Divider -->
                <div class="w-16 h-px bg-[#c5c6cf] hidden md:block"></div>

                <!-- Step 2 -->
                <div class="flex flex-col gap-2 items-center">
                    <div class="bg-[#e1e3e4] w-10 h-10 rounded-full flex items-center justify-center">
                        <span class="font-['Inter'] font-bold text-[#44474e] text-[16px] leading-[24px]">2</span>
                    </div>
                    <span class="font-['Inter'] font-bold text-[#44474e] text-[12px] text-center tracking-[0.6px] whitespace-nowrap">
                        DÉTAILS
                    </span>
                </div>

                <!-- Divider -->
                <div class="w-16 h-px bg-[#c5c6cf] hidden md:block"></div>

                <!-- Step 3 -->
                <div class="flex flex-col gap-2 items-center">
                    <div class="bg-[#e1e3e4] w-10 h-10 rounded-full flex items-center justify-center">
                        <span class="font-['Inter'] font-bold text-[#44474e] text-[16px] leading-[24px]">3</span>
                    </div>
                    <span class="font-['Inter'] font-bold text-[#44474e] text-[12px] text-center tracking-[0.6px] whitespace-nowrap">
                        CONFIRMER
                    </span>
                </div>
            </div>
        </div>
    </section>

    <!-- Selection Cards Section -->
    <section class="px-4 md:px-12 pb-16 flex justify-center">
        <div class="w-full max-w-[672px]">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Ordinary Mass Card -->
                <div class="bg-white rounded-[12px] shadow-[0px_4px_10px_rgba(3,22,54,0.08)] p-[34px] flex flex-col gap-6">
                    <!-- Icon -->
                    <div class="bg-[rgba(12,103,128,0.05)] w-12 h-12 rounded-[8px] flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-[#0c6780]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C11.45 2 11 2.45 11 3V5H9V3C9 2.45 8.55 2 8 2C7.45 2 7 2.45 7 3V5H5C3.9 5 3 5.9 3 7V19C3 20.1 3.9 21 5 21H19C20.1 21 21 20.1 21 19V7C21 5.9 20.1 5 19 5H17V3C17 2.45 16.55 2 16 2C15.45 2 15 2.45 15 3V5H13V3C13 2.45 12.55 2 12 2ZM5 7H19V19H5V7Z"/>
                        </svg>
                    </div>

                    <!-- Title -->
                    <h3 class="font-['Noto_Serif'] font-medium text-[#0c6780] text-[24px] leading-[33.6px]">
                        Messe Ordinaire
                    </h3>

                    <!-- Description -->
                    <p class="font-['Manrope'] text-[#3f484c] text-[16px] leading-[26px]">
                        Une célébration quotidienne pour vos intentions personnelles (action de grâce, défunts, santé).
                    </p>

                    <!-- Button -->
                    <a href="?p=demande-messe-form" class="bg-[#0c6780] text-white rounded-[8px] py-3 px-4 font-['Inter'] text-[16px] font-normal text-center hover:opacity-90 transition-opacity flex items-center justify-center gap-2">
                        Sélectionner
                        <svg class="w-[9.333px] h-[9.333px]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8.59 16.59L10.18 15l-4.59-4.59L10.18 5.82 8.59 4.23 0 12.82z"/>
                        </svg>
                    </a>
                </div>

                <!-- Special Mass Card -->
                <div class="bg-white rounded-[12px] shadow-[0px_4px_10px_rgba(3,22,54,0.08)] p-[34px] flex flex-col gap-6">
                    <!-- Icon -->
                    <div class="bg-[rgba(12,103,128,0.05)] w-12 h-12 rounded-[8px] flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-[#0c6780]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12S6.48 22 12 22S22 17.52 22 12 17.52 2 12 2M10 17L5 12L6.41 10.59L10 14.17L17.59 6.58L19 8L10 17Z"/>
                        </svg>
                    </div>

                    <!-- Title -->
                    <h3 class="font-['Noto_Serif'] font-medium text-[#1b1c1c] text-[24px] leading-[33.6px]">
                        Messe Spéciale
                    </h3>

                    <!-- Description -->
                    <p class="font-['Manrope'] text-[#3f484c] text-[16px] leading-[26px]">
                        Pour les étapes majeures de la vie (mariages, funérailles, anniversaires de sacerdoce ou jubilés).
                    </p>

                    <!-- Button -->
                    <button class="border-2 border-[#735c00] text-[#735c00] rounded-[8px] py-3 px-4 font-['Inter'] text-[16px] font-normal text-center hover:bg-[#735c00]/5 transition-colors flex items-center justify-center gap-2">
                        Voir plus
                        <svg class="w-[11.667px] h-[11.667px]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8.59 16.59L10.18 15l-4.59-4.59L10.18 5.82 8.59 4.23 0 12.82z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Request a Mass Section -->
    <section class="px-4 md:px-12 pb-16 flex justify-center">
        <div class="w-full max-w-[1104px]">
            <div class="bg-[rgba(135,206,235,0.2)] rounded-[8px] p-8 flex flex-col md:flex-row gap-8">
                <!-- Image -->
                <div class="flex-shrink-0 w-full md:w-[169px]">
                    <img alt="Intérieur du sanctuaire sacré" class="w-full h-48 object-cover rounded-[4px]" />
                </div>

                <!-- Content -->
                <div class="flex flex-col gap-2">
                    <h4 class="font-['Noto_Serif'] font-medium text-[#0c6780] text-[24px] leading-[33.6px]">
                        Pourquoi demander une messe ?
                    </h4>
                    <p class="font-['Manrope'] text-[#3f484c] text-[16px] leading-[26px]">
                        C'est un acte de foi et d'espérance. Chaque messe a une valeur infinie car elle est le sacrifice même du Christ offert pour le salut du monde. En demandant une intention particulière, vous participez plus intimement à ce mystère de grâce.
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>
