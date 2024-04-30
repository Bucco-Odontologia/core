@extends('site.template')

@section('content')
    <main>
        <section class="py-8 grid grid-cols-1 px-9 md:grid-cols-2 gap-4 bg-brand-black text-white rounded-b-3xl">
            <div class="mb-6 ">
                <img src="{{ asset('images/icecream.jpeg') }}" class="mx-auto" alt="Descrição da imagem" style="width: 65%;">
            </div>

            <div class="max-w-2xl mx-auto md:order-first flex flex-col justify-center items-center">
                <h1 class="text-2xl text-brand-gold font-bold text-center mb-4 lg:text-3xl 2xl:text-4xl">Encontre o sorriso dos seus sonhos!</h1>
                <p class="text-lg text-center mb-0 mt-5">No Bucco, estamos comprometidos em proporcionar a você uma experiência odontológica excepcional. Nossa equipe dedicada está ansiosa para recebê-lo e cuidar da sua saúde bucal com atenção e carinho. Agende sua avaliação gratuita através do nosso site hoje mesmo e dê o primeiro passo rumo a um sorriso saudável e radiante.</p>

                <form method="POST" action=""
                    class="w-full space-y-4 md:space-y-8 mt-5">
                    @csrf

                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                            <svg class="w-6 h-6 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <div class="border-r-2 border-gray-400 h-4/5 "></div>
                        </div>
                        <input type="text" id="name" name="name" placeholder="Nome" required
                            class="pl-12 py-3 rounded-md w-full text-black">
                    </div>

                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                            <svg class="w-6 h-6 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M5 4a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V4Zm12 12V5H7v11h10Zm-5 1a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H12Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <div class="border-r-2 border-gray-400 h-4/5"></div>
                        </div>
                        <input type="tel" id="phone" name="phone" placeholder="Telefone" required
                            pattern="\(\d{2}\) \d{4,5}-\d{4}" title="Por favor, insira um número de telefone válido."
                            class="phone pl-12 py-3 rounded-md w-full text-black">
                    </div>

                    <div class="flex justify-center ">
                        <button type="submit" class="text-white font-bold py-2 px-12 rounded-md bg-brand-gold mt-4 md:mt-0">
                            Agendar avaliação gratuita
                        </button>
                    </div>
                </form>
            </div>
        </section>

        <section class="bg-white m-5 lg:px-20 space-y-10">
            <div class="mx-auto flex flex-col md:flex-row">
                <div class="w-full md:w-1/2 flex justify-center items-center">
                    <img src="{{ asset('images/kid1.jpeg') }}" alt="Descrição da imagem" width="250"
                        height="250">
                </div>
                <div class="w-full md:w-1/2 px-4 md:px-0 flex flex-col justify-center">
                    <h2 class="text-brand-gold text-2xl font-bold mb-4 lg:text-3xl text-center md:text-left">Os benefícios de uma boa saúde bucal</h2>
                    <p>Além de prevenir cáries e doenças gengivais, uma boca saudável contribui para a saúde cardiovascular, digestiva e respiratória. Com a ajuda da nossa equipe qualificada e tecnologia avançada, estamos aqui para garantir que cada paciente desfrute de uma saúde bucal ótima e um sorriso radiante. Invista em seu bem-estar hoje e descubra como uma boa saúde bucal pode transformar sua vida!</p>
                </div>
            </div>
            <div class="mx-auto flex flex-col md:flex-row">
                <div class="w-full md:w-1/2 px-4 md:px-0 flex flex-col justify-center">
                    <h2 class="text-brand-gold text-2xl font-bold mb-4 lg:text-3xl text-center">Sorria com confiança</h2>
                    <p>Oferecemos uma abordagem abrangente para cuidar da sua saúde bucal, com especialidades em ortodontia e endodontia. Nossa equipe experiente e dedicada está aqui para ajudá-lo a alcançar o sorriso dos seus sonhos, corrigindo problemas de alinhamento com tratamentos ortodônticos avançados. Além disso, nossos serviços de endodontia garantem o tratamento eficaz de problemas dentários complexos, como canal dentário, com técnicas modernas e avançadas. Confie em nós para cuidar da sua saúde bucal com excelência e dedicação.</p>
                </div>
                <div class="w-full md:w-1/2 flex justify-center items-center">
                    <img src="{{ asset('images/couple.jpeg') }}" alt="Descrição da imagem" width="250"
                        height="250">
                </div>
            </div>
            <div class="mx-auto flex flex-col-reverse md:flex-row">
                <div class="w-full md:w-1/2 flex justify-center items-center">
                    <img src="{{ asset('images/old.jpeg') }}" alt="Descrição da imagem" width="250"
                        height="250">
                </div>
                <div class="w-full md:w-1/2 px-4 md:px-0 flex flex-col justify-center">
                    <h2 class="text-brand-gold text-2xl font-bold mb-4 lg:text-3xl text-center">Restaurando sorrisos</h2>
                    <p>Compreendemos o impacto significativo que a perda dentária pode ter na qualidade de vida de um paciente. Seja você precisa de uma prótese parcial ou total, ou está considerando implantes para substituir dentes ausentes, estamos aqui para ajudar. Recupere seu sorriso e qualidade de vida com nossos serviços de prótese dentária e implantes.</p>
                </div>
            </div>
        </section>

        <section class="text-center my-20 p-20 xl:px-80 bg-[#B9820D33]">
            <div class="mx-auto">
                <h2 class="text-brand-red text-2xl font-bold mb-4 lg:text-3xl text-center">Experiência personalizada e  atendimento direto</h2>
                <p class="mb-6">No Bucco, acreditamos que cada paciente merece um cuidado personalizado e atencioso. É por isso que os proprietários do consultório, Dr. Leonardo e Dr. João, dedicam seu tempo e expertise para atender você. Assim, garantimos um atendimento próximo, comprometido e de alta qualidade em cada consulta. Você não será apenas mais um paciente, mas parte de nossa família odontológica, recebendo cuidados que refletem nosso compromisso genuíno com sua saúde bucal e bem-estar.</p>

                <a href="#send">
                    <button type="submit" class="text-white bg-brand-gold font-bold py-2 px-12 rounded-md mt-4 md:mt-0">
                        Agenda avaliação gratuita
                    </button>
                </a>
            </div>
        </section>

        <section class="bg-white">
            <div class=" mx-auto">
                <section id="depoimentos" class="py-8 mx-4 lg:mx-0">
                    <h1 class="text-2xl font-bold mb-4 lg:text-3xl text-center">Depoimentos</h1>
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div
                                    class="max-w-md mx-auto bg-brand-red bg-opacity-10 mb-12 rounded-xl shadow-md overflow-hidden md:max-w-4xl">
                                    <div class="md:flex p-8 md:space-x-8">
                                        <div class="md:flex-shrink-0">
                                            <img class="h-full w-full object-cover md:w-60 rounded"
                                                src="{{ asset('images/lead.jpeg') }}" alt="Descrição da imagem">
                                        </div>
                                        <div>
                                            <p class="mt-6 text-center italic md:mt-0">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum tempus mauris, in commodo ex interdum eu. Nunc egestas ut metus id blandit. Nunc sit amet blandit nisl. Praesent eleifend ullamcorper dolor sit amet mattis. Duis accumsan nisi non orci tempor, et pellentesque purus mollis. Pellentesque mollis lobortis lectus, eu ultricies diam sodales eu.”</p>
                                            <p class="font-medium text-center mt-2">
                                                Nome do usuário
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div
                                    class="max-w-md mx-auto bg-brand-red bg-opacity-10 mb-12 rounded-xl shadow-md overflow-hidden md:max-w-4xl">
                                    <div class="md:flex p-8 md:space-x-8">
                                        <div class="md:flex-shrink-0">
                                            <img class="h-full w-full object-cover md:w-60 rounded"
                                                src="{{ asset('images/lead.jpeg') }}" alt="Descrição da imagem">
                                        </div>
                                        <div>
                                            <p class="mt-6 text-center italic md:mt-0">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum tempus mauris, in commodo ex interdum eu. Nunc egestas ut metus id blandit. Nunc sit amet blandit nisl. Praesent eleifend ullamcorper dolor sit amet mattis. Duis accumsan nisi non orci tempor, et pellentesque purus mollis. Pellentesque mollis lobortis lectus, eu ultricies diam sodales eu.”</p>
                                            <p class="font-medium text-center mt-2">
                                                Nome do usuário
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div
                                    class="max-w-md mx-auto bg-brand-red bg-opacity-10 mb-12 rounded-xl shadow-md overflow-hidden md:max-w-4xl">
                                    <div class="md:flex p-8 md:space-x-8">
                                        <div class="md:flex-shrink-0">
                                            <img class="h-full w-full object-cover md:w-60 rounded"
                                                src="{{ asset('images/lead.jpeg') }}" alt="Descrição da imagem">
                                        </div>
                                        <div>
                                            <p class="mt-6 text-center italic md:mt-0">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum tempus mauris, in commodo ex interdum eu. Nunc egestas ut metus id blandit. Nunc sit amet blandit nisl. Praesent eleifend ullamcorper dolor sit amet mattis. Duis accumsan nisi non orci tempor, et pellentesque purus mollis. Pellentesque mollis lobortis lectus, eu ultricies diam sodales eu.”</p>
                                            <p class="font-medium text-center mt-2">
                                                Nome do usuário
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next lg:mr-12 lg:block hidden"></div>
                        <div class="swiper-button-prev lg:ml-12 lg:block hidden"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </section>

                <style>
                    .swiper-pagination-bullet-active {
                        color: #fff;
                        background: #B9820D;
                    }

                    .swiper-button-next {
                        color: #B9820D
                    }

                    .swiper-button-prev {
                        color: #B9820D
                    }
                </style>

            </div>
        </section>

        <section id="send" class="bg-[#B9820D] rounded-t-3xl">
            <section id="formulario" class="grid grid-cols-1 py-8 px-9 md:grid-cols-2 gap-4 text-white ">
                <div>
                    <img src="{{ asset('images/schedule.jpeg') }}" width="600" height="600" alt="Descrição da imagem">
                </div>
                <div class="max-w-2xl mx-auto flex flex-col justify-center items-center">
                    <h1 class="text-xl font-bold mb-4 lg:text-3xl 2xl:text-4xl">Alcance o sorriso dos seus sonhos!</h1>
                    <p class="text-lg text-center">No Bucco, estamos comprometidos em proporcionar a você uma experiência odontológica excepcional. Nossa equipe dedicada está ansiosa para recebê-lo e cuidar da sua saúde bucal com atenção e carinho. Agende sua avaliação gratuita através do nosso site hoje mesmo e dê o primeiro passo rumo a um sorriso saudável e radiante.</p>

                    <form method="POST" action="" class="w-full space-y-4 mt-4 md:space-y-8">
                        @csrf

                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <svg class="w-6 h-6 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <div class="border-r-2 border-gray-400 h-4/5 "></div>
                            </div>
                            <input type="text" id="name2" name="name" placeholder="Nome" required
                                class="pl-12 py-3 rounded-md w-full text-black">
                        </div>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <svg class="w-6 h-6 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M5 4a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V4Zm12 12V5H7v11h10Zm-5 1a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H12Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <div class="border-r-2 border-gray-400 h-4/5"></div>
                            </div>
                            <input type="tel" id="phone2" name="phone" placeholder="Telefone" required
                                pattern="\(\d{2}\) \d{4,5}-\d{4}" title="Por favor, insira um número de telefone válido."
                                class="phone pl-12 py-3 rounded-md w-full text-black">
                        </div>
                        <div class="flex justify-center ">
                            <button type="submit"
                                class="text-white bg-black font-bold py-2 px-12 rounded-md mt-4 md:mt-0">
                                Agendar avaliação gratuita
                            </button>
                        </div>
                    </form>
                </div>
            </section>

            <section id="duvidas" class="faq-section py-16 mx-9 lg:mx-0">
                <h1 class="text-2xl font-bold mb-4 lg:text-3xl text-center text-white">Dúvidas Frequentes</h1>
                <div
                    class="mx-auto mt-8 grid max-w-4xl divide-y divide-neutral-200 text-white border border-white rounded">
                    <div class="p-5">
                        <details class="group">
                            <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                                <span>Como posso identificar minha linguagem do amor predominante?</span>
                                <span class="transition group-open:rotate-180">
                                    <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                            </summary>
                            <p class="group-open:animate-fadeIn mt-3">
                                Para identificar sua linguagem do amor predominante, é útil observar como você expressa amor
                                aos outros e como prefere receber amor. Pergunte a si mesmo qual tipo de ação ou
                                comportamento faz você se sentir mais amado e valorizado em um relacionamento. Além disso,
                                reflita sobre como você tende a expressar seu amor pelos outros. A resposta a essas
                                perguntas pode ajudá-lo a determinar qual das cinco linguagens do amor - Palavras de
                                Afirmação, Atos de Serviço, Receber Presentes, Tempo de Qualidade ou Toque Físico - ressoa
                                mais profundamente com você. O teste das 5 linguagens do amor pode fornecer uma ferramenta
                                adicional para ajudá-lo a identificar sua linguagem do amor predominante.
                            </p>
                        </details>
                    </div>

                    <div class="p-5">
                        <details class="group">
                            <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                                <span>É possível ter mais de uma linguagem do amor?</span>
                                <span class="transition group-open:rotate-180">
                                    <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                            </summary>
                            <p class="group-open:animate-fadeIn mt-3">
                                Sim, é absolutamente possível ter mais de uma linguagem do amor. Embora muitas pessoas
                                tenham uma linguagem do amor predominante, é comum que outras também sejam significativas
                                para elas em diferentes graus. Algumas pessoas podem encontrar valor em duas ou mais
                                linguagens do amor de forma quase igual, enquanto outras podem ter uma linguagem do amor
                                primária mais clara, mas ainda assim se beneficiam das outras. O importante é reconhecer que
                                as linguagens do amor não são necessariamente exclusivas, e entender como cada uma contribui
                                para nutrir e fortalecer os relacionamentos pode ser fundamental para construir conexões
                                significativas.
                            </p>
                        </details>
                    </div>

                    <div class="p-5">
                        <details class="group">
                            <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                                <span>Como posso comunicar minha linguagem do amor ao meu parceiro de forma eficaz?</span>
                                <span class="transition group-open:rotate-180">
                                    <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                            </summary>
                            <p class="group-open:animate-fadeIn mt-3">
                                Comunicar sua linguagem do amor ao seu parceiro é crucial para garantir que suas
                                necessidades emocionais sejam atendidas. Aqui estão algumas maneiras eficazes de fazer isso:
                            <ul class="mt-5 mx-3" style="list-style-type: decimal">
                                <li>
                                    <strong>Converse Abertamente:</strong> Tenha uma conversa honesta e aberta com seu
                                    parceiro sobre as 5 linguagens do amor. Explique o que é importante para você e como
                                    você se sente amado(a) e valorizado(a).
                                </li>
                                <li>
                                    <strong>Exemplos Práticos:</strong> Forneça exemplos práticos do que faz você se sentir
                                    amado(a) em sua linguagem específica. Isso pode incluir ações ou comportamentos
                                    específicos que seu parceiro pode realizar para expressar amor de maneira significativa
                                    para você.
                                </li>
                                <li>
                                    <strong>Feedback Construtivo:</strong> Dê feedback construtivo ao seu parceiro quando
                                    ele expressar amor na sua linguagem preferida. Isso reforçará o comportamento positivo e
                                    incentivará seu parceiro a continuar a demonstrar amor de maneiras que ressoem com você.
                                </li>
                                <li>
                                    <strong>Demonstre Você Mesmo:</strong> Além de comunicar sua linguagem do amor,
                                    demonstre você mesmo amor na linguagem do seu parceiro. Isso mostra que você está
                                    disposto(a) a investir no relacionamento e a compreender as necessidades emocionais um
                                    do outro.
                                </li>
                                <li>
                                    <strong>Flexibilidade:</strong> Esteja aberto(a) para entender e apreciar a linguagem do
                                    amor do seu parceiro também. O relacionamento é uma via de mão dupla, e ambos devem se
                                    esforçar para compreender e atender às necessidades emocionais um do outro.
                                </li>
                            </ul>
                            </p>
                        </details>
                    </div>

                    <div class="p-5">
                        <details class="group">
                            <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                                <span>E se minha linguagem do amor for diferente da do meu parceiro? Como podemos nos
                                    ajustar?</span>
                                <span class="transition group-open:rotate-180">
                                    <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                            </summary>
                            <p class="group-open:animate-fadeIn mt-3">
                                Quando as linguagens do amor de vocês forem diferentes, é essencial que vocês se ajustem
                                para garantir que as necessidades emocionais de ambos sejam atendidas. Aqui estão algumas
                                maneiras de fazer isso:
                            <ul class="m-5" style="list-style-type: decimal">
                                <li>
                                    <strong>Comunicação Aberta:</strong> Tenham conversas honestas e abertas sobre suas
                                    linguagens do amor. Compreendam as preferências um do outro e estejam dispostos a ouvir
                                    e respeitar as necessidades emocionais de cada um.
                                </li>
                                <li>
                                    <strong>Compromisso e Flexibilidade:</strong> Estejam dispostos a comprometerem-se e
                                    serem flexíveis para atender às necessidades emocionais um do outro. Isso pode envolver
                                    fazer esforços conscientes para expressar amor na linguagem preferida do seu parceiro,
                                    mesmo que não seja natural para você.
                                </li>
                                <li>
                                    <strong>Experimentação:</strong> Estejam abertos a experimentar novas formas de
                                    expressar amor. Mesmo que uma linguagem do amor não seja natural para você, tente
                                    incorporá-la em suas interações diárias para ver como seu parceiro responde.
                                </li>
                                <li>
                                    <strong>Aprendizado Contínuo:</strong> Estejam dispostos a aprender e crescer juntos. À
                                    medida que vocês se ajustam e se comprometem a atender às necessidades emocionais um do
                                    outro, estarão fortalecendo seu relacionamento e construindo uma base mais sólida.
                                </li>
                                <li>
                                    <strong>Apreciação Mútua:</strong> Reconheçam e apreciem os esforços um do outro para
                                    expressar amor de maneiras diferentes. Mesmo que suas linguagens do amor sejam
                                    diferentes, é importante valorizar os gestos de amor e apreço do seu parceiro.
                                </li>
                            </ul>

                            Ao trabalharem juntos para compreender e atender às necessidades emocionais um do outro, vocês
                            podem fortalecer significativamente seu relacionamento e criar uma conexão mais profunda e
                            satisfatória.
                            </p>
                        </details>
                    </div>

                    <div class="p-5">
                        <details class="group">
                            <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                                <span>Como descobrir a linguagem do amor do meu parceiro se ele não estiver ciente
                                    dela?</span>
                                <span class="transition group-open:rotate-180">
                                    <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                            </summary>
                            <p class="group-open:animate-fadeIn mt-3">
                                Descobrir a linguagem do amor do seu parceiro, mesmo que ele não esteja ciente dela, requer
                                observação cuidadosa e comunicação aberta. Aqui estão algumas estratégias que você pode
                                utilizar:

                            <ul class="m-5" style="list-style-type: decimal">
                                <li>
                                    <strong>Observe seus Comportamentos:</strong> Preste atenção às maneiras pelas quais seu
                                    parceiro expressa amor e apreço por você e por outras pessoas. As ações que ele realiza
                                    com mais frequência podem indicar sua linguagem do amor predominante.
                                </li>
                                <li>
                                    <strong>Reflexão sobre suas Preferências:</strong> Pense sobre as coisas que seu
                                    parceiro valoriza e aprecia em um relacionamento. Isso pode incluir elogios, gestos de
                                    cuidado, presentes ou tempo de qualidade juntos.
                                </li>
                                <li>
                                    <strong>Experimente Diferentes Abordagens:</strong> Faça experiências para descobrir
                                    como seu parceiro responde a diferentes formas de expressão de amor. Tente elogiar,
                                    oferecer ajuda prática, presentear, passar tempo de qualidade juntos e demonstrar afeto
                                    físico para ver quais gestos são mais bem recebidos.
                                </li>
                                <li>
                                    <strong>Tenha Conversas Significativas:</strong> Envolva-se em conversas significativas
                                    com seu parceiro sobre o relacionamento e suas necessidades emocionais. Você pode trazer
                                    à tona o conceito das linguagens do amor de maneira leve e discutir como vocês podem
                                    melhor se conectar emocionalmente.
                                </li>
                                <li>
                                    <strong>Esteja Aberto(a) ao Feedback:</strong> Esteja aberto(a) para receber feedback do
                                    seu parceiro sobre o que ele valoriza em um relacionamento. Isso pode ajudá-lo(a) a
                                    entender melhor suas preferências e necessidades emocionais.
                                </li>
                            </ul>

                            Ao usar essas estratégias, você pode começar a ter uma compreensão mais clara da linguagem do
                            amor do seu parceiro, mesmo que ele ainda não esteja consciente desse conceito. Isso pode ajudar
                            a fortalecer seu relacionamento e criar uma conexão mais profunda e significativa.
                            </p>
                        </details>
                    </div>

                    <div class="p-5">
                        <details class="group">
                            <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                                <span>Quais são algumas dicas práticas para expressar minha linguagem do amor no dia a
                                    dia?</span>
                                <span class="transition group-open:rotate-180">
                                    <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                            </summary>
                            <p class="group-open:animate-fadeIn mt-3">
                                Expressar sua linguagem do amor no dia a dia pode fortalecer significativamente seu
                                relacionamento. Aqui estão algumas dicas práticas para fazer isso:

                            <ul class="m-5" style="list-style-type: decimal">
                                <li>
                                    <strong>Comunique-se de Forma Positiva:</strong> Se sua linguagem do amor é Palavras de
                                    Afirmação, elogie e elabore comentários positivos para seu parceiro. Diga "eu te amo",
                                    aprecie suas qualidades e reconheça suas realizações.
                                </li>
                                <li>
                                    <strong>Demonstre Atos de Serviço:</strong> Se sua linguagem do amor é Atos de Serviço,
                                    encontre maneiras de ajudar e apoiar seu parceiro nas tarefas diárias. Prepare uma
                                    refeição especial, ajude nas tarefas domésticas ou ofereça-se para cuidar de algo que
                                    seu parceiro está enfrentando
                                </li>
                                <li>
                                    <strong>Dê Presentes Significativos:</strong> Se sua linguagem do amor é Receber
                                    Presentes, presenteie seu parceiro com algo que você sabe que ele apreciará, mesmo que
                                    seja pequeno. Isso pode ser uma lembrança significativa, um bilhete escrito à mão ou um
                                    gesto simbólico de apreço.
                                </li>
                                <li>
                                    <strong>Mostre Afeto Físico:</strong> Se sua linguagem do amor é Toque Físico, demonstre
                                    seu afeto por meio de abraços, beijos, carícias e outros gestos físicos. Esteja presente
                                    fisicamente e mostre ao seu parceiro que você valoriza a conexão física entre vocês.
                                </li>
                                <li>
                                    <strong>Seja Consistente:</strong> Independentemente da sua linguagem do amor, seja
                                    consistente em suas demonstrações de afeto. Faça um esforço para expressar amor no dia a
                                    dia, mesmo nos pequenos gestos, para manter a conexão emocional com seu parceiro.
                                </li>
                            </ul>

                            Ao incorporar essas dicas em sua rotina diária, você estará demonstrando amor de uma forma que
                            ressoa com seu parceiro, fortalecendo assim seu relacionamento e criando uma base sólida de
                            entendimento e apreço mútuos.
                            </p>
                        </details>
                    </div>
                </div>

                <script>
                    document.querySelector('form').addEventListener('submit', function(e) {
                        // e.preventDefault();

                        document.getElementById('phone').value = document.getElementById('phone').value.replace(/\D/g, '');

                        var formData = new FormData(e.target);
                        for (var pair of formData.entries()) {
                            console.log(pair[0] + ', ' + pair[1]);
                        }
                    });

                    var swiper = new Swiper(".mySwiper", {
                        navigation: {
                            nextEl: ".swiper-button-next",
                            prevEl: ".swiper-button-prev",
                        },
                        pagination: {
                            el: ".swiper-pagination",
                        },
                    });

                    window.onload = function() {
                        var nameInputs = ['name', 'name2'];
                        var emailInputs = ['email', 'email2'];
                        var phoneInputs = ['phone', 'phone2'];

                        nameInputs.forEach(function(id) {
                            var input = document.getElementById(id);
                            input.oninvalid = function(event) {
                                event.target.setCustomValidity('Por favor, insira seu nome.');
                            }
                            input.oninput = function(event) {
                                event.target.setCustomValidity('');
                            }
                        });

                        emailInputs.forEach(function(id) {
                            var input = document.getElementById(id);
                            input.oninvalid = function(event) {
                                event.target.setCustomValidity(input.validity.valueMissing ?
                                    'Por favor, preencha este campo.' :
                                    'Por favor, insira um email válido.');
                            }
                            input.oninput = function(event) {
                                event.target.setCustomValidity('');
                            }
                        });

                        phoneInputs.forEach(function(id) {
                            var input = document.getElementById(id);
                            input.oninvalid = function(event) {
                                event.target.setCustomValidity(input.validity.valueMissing ?
                                    'Por favor, preencha este campo.' :
                                    'Por favor, insira um número de telefone válido.');
                            }
                            input.oninput = function(event) {
                                event.target.setCustomValidity('');
                            }
                        });
                    }

                    document.addEventListener('DOMContentLoaded', function() {
                        document.querySelectorAll('details').forEach(function(details) {
                            details.addEventListener('toggle', function() {
                                details.parentElement.style.backgroundColor = details.open ? '#252324' :
                                    'transparent';
                            });
                        });
                    });

                    document.querySelectorAll('.phone').forEach(function(input) {
                        input.addEventListener('input', function(e) {
                            var x = e.target.value.replace(/\D/g, '').match(/(\d{0,2})(\d{0,5})(\d{0,4})/);
                            e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
                            document.getElementById(input.id + '_raw').value = x[1] + x[2] + x[3];
                        });
                    });

                    document.addEventListener('DOMContentLoaded', function() {
                        const sendLink = document.querySelector('a[href="#send"]');
                        const sendSection = document.querySelector('#send');

                        if (sendLink) {
                            sendLink.addEventListener('click', function(event) {
                                event.preventDefault();
                                sendSection.scrollIntoView({
                                    behavior: 'smooth'
                                });
                            });
                        }
                    });
                </script>
            </section>
        </section>
    </main>
@endsection