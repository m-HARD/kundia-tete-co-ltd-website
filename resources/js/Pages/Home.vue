<template>
  <AppLayout>
    <div class="space-y-0">
      <!-- ─── قسم الهيرو (Hero) ─────────────────────────────────────────────
           ماهية القسم: البانر الرئيسي للصفحة — عنوان «شريكك الاستراتيجي»، فقرة التعريف،
           شعار «دعنا نبدأ الرحلة معاً»، وأزرار (تواصل معنا / خدماتنا). يحتوي على دوائر
           زينة في الخلفية. -->
      <section
        id="hero"
        class="section-bg-transparent relative w-full overflow-hidden bg-linear-to-b from-gray-50 to-white py-24 sm:py-32"
      >
        <!-- إضاءة خلفية: دوائر بلون الأساسي مائلة للأبيض (وضع داكن فقط) -->
        <div
          class="pointer-events-none absolute inset-0 overflow-hidden opacity-100 dark:opacity-100"
          aria-hidden="true"
        >
          <!-- في الوضع الفاتح والداكن: دوائر بتوهج وحد مضيء -->
          <div class="absolute -top-24 -inset-e-24 h-96 w-96 rounded-full border-2 border-primary-400/50 shadow-[0_0_140px_70px_rgba(210,180,140,0.4),0_0_200px_90px_rgba(245,238,228,0.25),0_0_280px_120px_rgba(210,180,140,0.18)] dark:border-2 dark:border-primary-400/70 dark:bg-transparent dark:shadow-[0_0_140px_70px_rgba(210,180,140,0.72),0_0_200px_90px_rgba(245,238,228,0.58),0_0_280px_120px_rgba(210,180,140,0.4)]" />
          <div class="absolute -bottom-24 -inset-s-24 h-80 w-80 rounded-full border-2 border-primary-400/50 shadow-[0_0_120px_55px_rgba(210,180,140,0.38),0_0_160px_70px_rgba(255,250,240,0.22),0_0_240px_100px_rgba(210,180,140,0.18)] dark:border-2 dark:border-primary-400/70 dark:bg-transparent dark:shadow-[0_0_120px_55px_rgba(210,180,140,0.68),0_0_160px_70px_rgba(255,250,240,0.52),0_0_240px_100px_rgba(210,180,140,0.5)]" />
          <div class="absolute inset-s-1/2 top-1/2 h-64 w-64 -translate-x-1/2 -translate-y-1/2 rounded-full border-2 border-primary-400/50 shadow-[0_0_100px_50px_rgba(232,221,200,0.35),0_0_140px_60px_rgba(255,252,245,0.22),0_0_220px_90px_rgba(210,180,140,0.18)] dark:border-2 dark:border-primary-400/70 dark:bg-transparent dark:shadow-[0_0_100px_50px_rgba(232,221,200,0.72),0_0_140px_60px_rgba(255,252,245,0.58),0_0_220px_90px_rgba(210,180,140,0.5)]" />
          <div class="absolute top-1/4 inset-e-1/4 h-72 w-72 rounded-full border-2 border-primary-400/50 shadow-[0_0_90px_45px_rgba(210,180,140,0.35),0_0_180px_80px_rgba(210,180,140,0.18)] dark:border-2 dark:border-primary-400/70 dark:bg-transparent dark:shadow-[0_0_90px_45px_rgba(210,180,140,0.68),0_0_180px_80px_rgba(210,180,140,0.5)]" />
          <div class="absolute bottom-1/3 inset-s-1/3 h-56 w-56 rounded-full border-2 border-primary-400/50 shadow-[0_0_80px_40px_rgba(245,238,228,0.3),0_0_160px_70px_rgba(210,180,140,0.18)] dark:border-2 dark:border-primary-400/70 dark:bg-transparent dark:shadow-[0_0_80px_40px_rgba(245,238,228,0.62),0_0_160px_70px_rgba(210,180,140,0.5)]" />
          <div class="absolute top-1/3 inset-s-1/4 h-40 w-40 rounded-full border-2 border-primary-400/50 shadow-[0_0_70px_35px_rgba(210,180,140,0.35),0_0_150px_60px_rgba(210,180,140,0.2)] dark:border-2 dark:border-primary-400/70 dark:bg-transparent dark:shadow-[0_0_70px_35px_rgba(210,180,140,0.5),0_0_150px_60px_rgba(210,180,140,0.5)]" />
          <div class="absolute bottom-1/4 inset-e-1/3 h-48 w-48 rounded-full border-2 border-primary-400/50 shadow-[0_0_75px_38px_rgba(232,221,200,0.35),0_0_160px_70px_rgba(210,180,140,0.2)] dark:border-2 dark:border-primary-400/70 dark:bg-transparent dark:shadow-[0_0_75px_38px_rgba(232,221,200,0.7),0_0_160px_70px_rgba(210,180,140,0.5)]" />
        </div>

        <!-- طبقة شفافة خفيفة في الوضع الداكن -->
        <div
          class="pointer-events-none absolute inset-0 bg-gray-900/15 dark:bg-black/80"
          aria-hidden="true"
        />

        <div class="relative mx-auto max-w-7xl px-4 text-center sm:px-6 lg:px-8">
          <h1 class="text-5xl font-bold leading-tight tracking-tight text-gray-900 dark:text-white sm:text-6xl lg:text-6xl">
            شريكك الاستراتيجي في التحول الرقمي
          </h1>
          <p class="mx-auto mt-20 max-w-2xl text-xl leading-loose text-gray-600 opacity-90 dark:text-gray-300 sm:text-2xl sm:leading-loose">
            في عالم تتسارع فيه التغيرات، تنطلق «كنديا تيتي المحدودة» برؤية طموحة مستوحاة من
            ديناميكية التكنولوجيا الحديثة وآفاق الطيران. نحن لا نقدم مجرد برمجيات، بل نكرس جهودنا
            لدمج التكنولوجيا المتقدمة مع الفهم العميق لاحتياجات العمل، لنضع بين يديك حلولاً متكاملة
            تصنع الفارق.
          </p>
          <p class="mt-8 text-2xl font-medium leading-relaxed text-primary-600 dark:text-primary-400">
            كنديا تيتي المحدودة — دعنا نبدأ الرحلة معاً.
          </p>
          <div class="mt-10 flex flex-wrap items-center justify-center gap-4">
            <Link
              href="/contact"
              class="inline-flex items-center rounded-lg bg-primary-600 px-6 py-3 text-lg font-medium text-white shadow transition hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 dark:focus:ring-offset-gray-900"
            >
              تواصل معنا
            </Link>
            <Link
              href="/services"
              class="inline-flex items-center rounded-lg border border-gray-300 bg-white px-6 py-3 text-lg font-medium text-gray-700 transition hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-200 dark:hover:bg-gray-700 dark:focus:ring-offset-gray-900"
            >
              خدماتنا
            </Link>
          </div>
        </div>
      </section>

      <!-- ─── قسم الشركاء (Partners) ────────────────────────────────────────
           ماهية القسم: عرض ثقة العملاء والشركاء — عنوان «يثق بنا شركاء رائعون» ووصف
           التعاون مع الجهات والشركات. (يمكن لاحقاً إضافة شعارات الشركاء.) -->
      <section
        id="partners"
        class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8"
      >
        <h2 class="text-center text-4xl font-bold leading-tight text-gray-900 dark:text-gray-100 sm:text-5xl">
          يثق بنا شركاء رائعون
        </h2>
        <p class="mx-auto mt-10 max-w-xl text-center text-lg leading-loose text-gray-600 opacity-80 dark:text-gray-400">
          نتعاون مع أفضل الجهات والشركات في مختلف القطاعات.
        </p>
        <div class="mt-12 flex flex-wrap items-center justify-center gap-8 text-gray-500 opacity-70 dark:text-gray-400">
          <span class="text-base font-medium leading-relaxed">شركاء وعملاء متميزون</span>
          <span class="hidden sm:inline">•</span>
          <span class="text-base leading-relaxed">مجموعة متميزة من العملاء في القطاعين العام والخاص</span>
        </div>
      </section>

      <!-- ─── قسم الإحصائيات (Stats) ───────────────────────────────────────
           ماهية القسم: شريط أرقام (مشاريع، عملاء، سنوات خبرة، دعم 24/7) مع عدّادات
           GSAP تتحرك عند ظهور القسم في الشاشة. خلفية مثل الهيرو: دوائر زينة وطبقة شفافية. -->
      <section
        id="stats"
        class="section-bg-transparent relative w-full overflow-hidden bg-linear-to-b from-gray-50 to-white py-16"
        ref="statsSection"
      >
        <!-- إضاءة خلفية: دوائر بلون الأساسي (نفس شكل الهيرو) -->
        <div
          class="pointer-events-none absolute inset-0 overflow-hidden opacity-100 dark:opacity-100"
          aria-hidden="true"
        >
          <div class="absolute -top-24 -inset-e-24 h-96 w-96 rounded-full border-2 border-primary-400/50 shadow-[0_0_140px_70px_rgba(210,180,140,0.4),0_0_200px_90px_rgba(245,238,228,0.25),0_0_280px_120px_rgba(210,180,140,0.18)] dark:border-2 dark:border-primary-400/70 dark:bg-transparent dark:shadow-[0_0_140px_70px_rgba(210,180,140,0.72),0_0_200px_90px_rgba(245,238,228,0.58),0_0_280px_120px_rgba(210,180,140,0.4)]" />
          <div class="absolute -bottom-24 -inset-s-24 h-80 w-80 rounded-full border-2 border-primary-400/50 shadow-[0_0_120px_55px_rgba(210,180,140,0.38),0_0_160px_70px_rgba(255,250,240,0.22),0_0_240px_100px_rgba(210,180,140,0.18)] dark:border-2 dark:border-primary-400/70 dark:bg-transparent dark:shadow-[0_0_120px_55px_rgba(210,180,140,0.68),0_0_160px_70px_rgba(255,250,240,0.52),0_0_240px_100px_rgba(210,180,140,0.5)]" />
          <div class="absolute inset-s-1/2 top-1/2 h-64 w-64 -translate-x-1/2 -translate-y-1/2 rounded-full border-2 border-primary-400/50 shadow-[0_0_100px_50px_rgba(232,221,200,0.35),0_0_140px_60px_rgba(255,252,245,0.22),0_0_220px_90px_rgba(210,180,140,0.18)] dark:border-2 dark:border-primary-400/70 dark:bg-transparent dark:shadow-[0_0_100px_50px_rgba(232,221,200,0.72),0_0_140px_60px_rgba(255,252,245,0.58),0_0_220px_90px_rgba(210,180,140,0.5)]" />
          <div class="absolute top-1/4 inset-e-1/4 h-72 w-72 rounded-full border-2 border-primary-400/50 shadow-[0_0_90px_45px_rgba(210,180,140,0.35),0_0_180px_80px_rgba(210,180,140,0.18)] dark:border-2 dark:border-primary-400/70 dark:bg-transparent dark:shadow-[0_0_90px_45px_rgba(210,180,140,0.68),0_0_180px_80px_rgba(210,180,140,0.5)]" />
          <div class="absolute top-1/3 inset-s-1/4 h-40 w-40 rounded-full border-2 border-primary-400/50 shadow-[0_0_70px_35px_rgba(210,180,140,0.35),0_0_150px_60px_rgba(210,180,140,0.2)] dark:border-2 dark:border-primary-400/70 dark:bg-transparent dark:shadow-[0_0_70px_35px_rgba(210,180,140,0.5),0_0_150px_60px_rgba(210,180,140,0.5)]" />
        </div>
        <!-- طبقة شفافية خفيفة (نفس الهيرو) -->
        <div
          class="pointer-events-none absolute inset-0 bg-gray-900/15 dark:bg-black/80"
          aria-hidden="true"
        />
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <div class="grid grid-cols-2 gap-8 sm:grid-cols-4">
            <div v-for="(stat, idx) in stats" :key="stat.label" class="text-center">
              <div class="text-4xl font-bold leading-none tabular-nums text-gray-900 sm:text-5xl dark:text-gray-100">
                <span>{{ stat.display }} </span>{{ stat.suffix }}
              </div>
              <div class="mt-2 text-lg font-medium leading-relaxed text-gray-700 dark:text-gray-400">
                {{ stat.label }}
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ─── قسم الخدمات المصغّرة (Services Preview) ──────────────────────
           ماهية القسم: شبكة بطاقات خدمات (3×2) — خلفية مثل الهيرو بدوائر صغيرة،
           أيقونة بتوهج لون أساسي، عنوان ووصف، وزر «عرض الكل». -->
      <section
        id="services-preview"
        class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8"
      >
        <h2 class="text-center text-3xl font-bold leading-tight text-gray-900 dark:text-white sm:text-4xl">
          خدماتنا
        </h2>
        <p class="mx-auto mt-3 max-w-2xl text-center text-lg leading-loose text-gray-600 dark:text-gray-400">
          نقدم مجموعة متكاملة من الخدمات التقنية
        </p>
        <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-3" dir="rtl">
          <Link
            v-for="(svc, i) in servicesPreview"
            :key="svc.title"
            href="/services"
            dir="rtl"
            class="card-bg-transparent group relative flex flex-col overflow-hidden rounded-xl border border-gray-200/70 bg-linear-to-b from-gray-50 to-white p-6 transition hover:border-primary-400 focus:outline-none focus:ring-2 focus:ring-primary-500 dark:border-gray-600/50 dark:hover:border-primary-500/50"
          >
            <!-- خلفية مثل الهيرو: دوائر صغيرة -->
            <div
              class="pointer-events-none absolute inset-0 overflow-hidden opacity-100 dark:opacity-100"
              aria-hidden="true"
            >
              <div class="absolute -top-6 -inset-e-6 h-24 w-24 rounded-full border-2 border-primary-400/50 shadow-[0_0_50px_25px_rgba(210,180,140,0.35),0_0_90px_40px_rgba(210,180,140,0.2)] dark:border-2 dark:border-primary-400/70 dark:bg-transparent dark:shadow-[0_0_50px_25px_rgba(210,180,140,0.72),0_0_90px_40px_rgba(210,180,140,0.42)]" />
              <div class="absolute -bottom-4 -inset-s-4 h-20 w-20 rounded-full border-2 border-primary-400/50 shadow-[0_0_40px_20px_rgba(210,180,140,0.35),0_0_70px_35px_rgba(210,180,140,0.2)] dark:border-2 dark:border-primary-400/70 dark:bg-transparent dark:shadow-[0_0_40px_20px_rgba(210,180,140,0.68),0_0_70px_35px_rgba(210,180,140,0.5)]" />
              <div class="absolute inset-e-1/2 top-1/2 h-16 w-16 translate-x-1/2 -translate-y-1/2 rounded-full border-2 border-primary-400/50 shadow-[0_0_35px_18px_rgba(232,221,200,0.3),0_0_65px_30px_rgba(210,180,140,0.18)] dark:border-2 dark:border-primary-400/70 dark:bg-transparent dark:shadow-[0_0_35px_18px_rgba(232,221,200,0.55),0_0_65px_30px_rgba(210,180,140,0.4)]" />
            </div>
            <div class="pointer-events-none absolute inset-0 bg-gray-900/15 dark:bg-black/90" aria-hidden="true" />
            <div class="relative z-10 flex flex-1 flex-col">
              <!-- أيقونة في الطرف (RTL) مع توهج لون أساسي -->
              <span
                class="me-auto flex h-14 w-14 shrink-0 items-center justify-center rounded-xl text-2xl ring-2 ring-primary-400/50 bg-primary-50 text-primary-700 dark:ring-primary-400/60 dark:bg-primary-500/15 dark:text-primary-300 dark:shadow-[0_0_20px_rgba(210,180,140,0.45)]"
              >
                {{ svc.icon }}
              </span>
              <h3 class="mt-4 text-xl font-bold leading-snug text-gray-900 dark:text-white">
                {{ svc.title }}
              </h3>
              <p class="mt-2 flex-1 text-base leading-loose text-gray-600 dark:text-gray-400 sm:text-lg">
                {{ svc.desc }}
              </p>
            </div>
          </Link>
        </div>
        <div class="mt-12 text-center">
          <Link
            href="/services"
            class="inline-flex items-center rounded-xl bg-primary-600 px-6 py-3 text-lg font-medium text-white shadow-md transition hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 dark:focus:ring-offset-gray-900"
          >
            <span class="me-2" aria-hidden="true">←</span>
            عرض الكل
          </Link>
        </div>
      </section>

      <!-- ─── قسم آراء عملائنا (Testimonials) ─────────────────────────────────
           ماهية القسم: نفس خلفية الهيرو — دوائر زينة وطبقة شفافية، ثم شبكة بطاقات آراء العملاء. -->
      <section
        id="testimonials"
        class="section-bg-transparent relative w-full overflow-hidden bg-linear-to-b from-gray-50 to-white py-20 sm:py-24"
      >
        <!-- إضاءة خلفية: دوائر بلون الأساسي مائلة للأبيض (نفس شكل الهيرو) -->
        <div
          class="pointer-events-none absolute inset-0 overflow-hidden opacity-100 dark:opacity-100"
          aria-hidden="true"
        >
          <div class="absolute -top-24 -inset-e-24 h-96 w-96 rounded-full border-2 border-primary-400/50 shadow-[0_0_140px_70px_rgba(210,180,140,0.4),0_0_200px_90px_rgba(245,238,228,0.25),0_0_280px_120px_rgba(210,180,140,0.18)] dark:border-2 dark:border-primary-400/70 dark:bg-transparent dark:shadow-[0_0_140px_70px_rgba(210,180,140,0.72),0_0_200px_90px_rgba(245,238,228,0.58),0_0_280px_120px_rgba(210,180,140,0.4)]" />
          <div class="absolute -bottom-24 -inset-s-24 h-80 w-80 rounded-full border-2 border-primary-400/50 shadow-[0_0_120px_55px_rgba(210,180,140,0.38),0_0_160px_70px_rgba(255,250,240,0.22),0_0_240px_100px_rgba(210,180,140,0.18)] dark:border-2 dark:border-primary-400/70 dark:bg-transparent dark:shadow-[0_0_120px_55px_rgba(210,180,140,0.68),0_0_160px_70px_rgba(255,250,240,0.52),0_0_240px_100px_rgba(210,180,140,0.5)]" />
          <div class="absolute inset-s-1/2 top-1/2 h-64 w-64 -translate-x-1/2 -translate-y-1/2 rounded-full border-2 border-primary-400/50 shadow-[0_0_100px_50px_rgba(232,221,200,0.35),0_0_140px_60px_rgba(255,252,245,0.22),0_0_220px_90px_rgba(210,180,140,0.18)] dark:border-2 dark:border-primary-400/70 dark:bg-transparent dark:shadow-[0_0_100px_50px_rgba(232,221,200,0.72),0_0_140px_60px_rgba(255,252,245,0.58),0_0_220px_90px_rgba(210,180,140,0.5)]" />
          <div class="absolute top-1/4 inset-e-1/4 h-72 w-72 rounded-full border-2 border-primary-400/50 shadow-[0_0_90px_45px_rgba(210,180,140,0.35),0_0_180px_80px_rgba(210,180,140,0.18)] dark:border-2 dark:border-primary-400/70 dark:bg-transparent dark:shadow-[0_0_90px_45px_rgba(210,180,140,0.68),0_0_180px_80px_rgba(210,180,140,0.5)]" />
          <div class="absolute bottom-1/3 inset-s-1/3 h-56 w-56 rounded-full border-2 border-primary-400/50 shadow-[0_0_80px_40px_rgba(245,238,228,0.3),0_0_160px_70px_rgba(210,180,140,0.18)] dark:border-2 dark:border-primary-400/70 dark:bg-transparent dark:shadow-[0_0_80px_40px_rgba(245,238,228,0.62),0_0_160px_70px_rgba(210,180,140,0.5)]" />
          <div class="absolute top-1/3 inset-s-1/4 h-40 w-40 rounded-full border-2 border-primary-400/50 shadow-[0_0_70px_35px_rgba(210,180,140,0.35),0_0_150px_60px_rgba(210,180,140,0.2)] dark:border-2 dark:border-primary-400/70 dark:bg-transparent dark:shadow-[0_0_70px_35px_rgba(210,180,140,0.5),0_0_150px_60px_rgba(210,180,140,0.5)]" />
          <div class="absolute bottom-1/4 inset-e-1/3 h-48 w-48 rounded-full border-2 border-primary-400/50 shadow-[0_0_75px_38px_rgba(232,221,200,0.35),0_0_160px_70px_rgba(210,180,140,0.2)] dark:border-2 dark:border-primary-400/70 dark:bg-transparent dark:shadow-[0_0_75px_38px_rgba(232,221,200,0.7),0_0_160px_70px_rgba(210,180,140,0.5)]" />
        </div>

        <!-- طبقة شفافية خفيفة (نفس الهيرو) -->
        <div
          class="pointer-events-none absolute inset-0 bg-gray-900/15 dark:bg-black/80"
          aria-hidden="true"
        />

        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <h2 class="text-center text-3xl font-bold leading-tight text-gray-900 dark:text-gray-100 sm:text-4xl">
            آراء عملائنا
          </h2>
          <p class="mx-auto mt-3 max-w-2xl text-center text-lg leading-loose text-gray-600 dark:text-gray-400">
            اكتشف ما يقوله عملاؤنا عنا
          </p>
          <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-3" dir="rtl">
            <article
              v-for="(item, i) in testimonials"
              :key="i"
              class="card-bg-transparent relative flex flex-col overflow-hidden rounded-xl border border-gray-200/70 bg-linear-to-b from-gray-50 to-white p-6 text-start dark:border-gray-600/50"
              dir="rtl"
            >
              <!-- خلفية مثل الخدمات: دوائر صغيرة -->
              <div
                class="pointer-events-none absolute inset-0 overflow-hidden opacity-100 dark:opacity-100"
                aria-hidden="true"
              >
                <div class="absolute -top-6 -inset-e-6 h-24 w-24 rounded-full border-2 border-primary-400/50 shadow-[0_0_50px_25px_rgba(210,180,140,0.35),0_0_90px_40px_rgba(210,180,140,0.2)] dark:border-2 dark:border-primary-400/70 dark:bg-transparent dark:shadow-[0_0_50px_25px_rgba(210,180,140,0.72),0_0_90px_40px_rgba(210,180,140,0.42)]" />
                <div class="absolute -bottom-4 -inset-s-4 h-20 w-20 rounded-full border-2 border-primary-400/50 shadow-[0_0_40px_20px_rgba(210,180,140,0.35),0_0_70px_35px_rgba(210,180,140,0.2)] dark:border-2 dark:border-primary-400/70 dark:bg-transparent dark:shadow-[0_0_40px_20px_rgba(210,180,140,0.68),0_0_70px_35px_rgba(210,180,140,0.5)]" />
                <div class="absolute inset-e-1/2 top-1/2 h-16 w-16 translate-x-1/2 -translate-y-1/2 rounded-full border-2 border-primary-400/50 shadow-[0_0_35px_18px_rgba(232,221,200,0.3),0_0_65px_30px_rgba(210,180,140,0.18)] dark:border-2 dark:border-primary-400/70 dark:bg-transparent dark:shadow-[0_0_35px_18px_rgba(232,221,200,0.55),0_0_65px_30px_rgba(210,180,140,0.4)]" />
              </div>
              <div class="pointer-events-none absolute inset-0 bg-gray-900/20 dark:bg-black/90" aria-hidden="true" />
              <div class="relative z-10 flex flex-1 flex-col">
                <!-- أيقونة الاقتباس -->
                <span
                  class="text-4xl font-serif leading-none text-gray-300 dark:text-gray-600"
                  aria-hidden="true"
                >
                  "
                </span>
                <p class="mt-2 flex-1 text-base leading-loose text-gray-600 dark:text-gray-300 sm:text-lg">
                  {{ item.text }}
                </p>
                <!-- اسم ومنصب صاحب التعليق مع النجوم مقابلهم -->
                <div class="mt-4 flex flex-wrap items-center justify-between gap-3 border-t border-gray-200 pt-4 dark:border-gray-600">
                  <div>
                    <p class="text-lg font-semibold leading-snug text-gray-900 dark:text-white">
                      {{ item.name }}
                    </p>
                    <p class="mt-0.5 text-base leading-relaxed text-gray-500 dark:text-gray-400">
                      {{ item.role }}
                    </p>
                  </div>
                  <div class="flex gap-0.5 shrink-0" aria-label="تقييم 5 من 5">
                    <span
                      v-for="star in 5"
                      :key="star"
                      class="text-amber-400"
                      aria-hidden="true"
                    >★</span>
                  </div>
                </div>
              </div>
            </article>
          </div>
        </div>
      </section>

      <!-- ─── قسم الأسئلة الشائعة (FAQ) ──────────────────────────────────────
           ماهية القسم: أكورديون — سؤال واحد مفتوح في كل مرة، عنوان «الأسئلة الشائعة»،
           وصف «كل ما تحتاج معرفته قبل أن نبدأ». -->
      <section
        id="faq"
        class="section-bg-transparent relative w-full overflow-hidden bg-gray-50 py-20 sm:py-24"
        dir="rtl"
      >
        <div class="pointer-events-none absolute inset-0 dark:bg-black/10" aria-hidden="true" />
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <h2 class="text-center text-3xl font-bold leading-tight text-gray-900 dark:text-white sm:text-4xl">
            الأسئلة الشائعة
          </h2>
          <p class="mx-auto mt-3 max-w-2xl text-center text-lg leading-loose text-gray-600 dark:text-gray-400">
            كل ما تحتاج معرفته قبل أن نبدأ.
          </p>
          <div class="mt-12 space-y-3">
            <div
              v-for="(item, i) in faqItems"
              :key="i"
              class="card-bg-transparent overflow-hidden rounded-xl border border-gray-200/70 dark:border-gray-600/50 shadow"
            >
              <button
                type="button"
                class="flex w-full items-center justify-between gap-4 px-5 py-4 text-start transition hover:bg-gray-100/80 dark:hover:bg-gray-800/50"
                :aria-expanded="faqOpenIndex === i"
                :aria-controls="'faq-answer-' + i"
                :id="'faq-question-' + i"
                @click="faqOpenIndex = faqOpenIndex === i ? null : i"
              >
                <span class="text-lg font-medium leading-snug text-gray-900 dark:text-gray-100 sm:text-xl">
                  {{ item.question }}
                </span>
                <span
                  class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg text-gray-500 dark:text-gray-400 transition-transform duration-200"
                  :class="{ 'rotate-180': faqOpenIndex === i }"
                  aria-hidden="true"
                >
                  <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                  </svg>
                </span>
              </button>
              <div
                :id="'faq-answer-' + i"
                :aria-labelledby="'faq-question-' + i"
                role="region"
                class="border-t border-gray-200/70 bg-gray-100/80 dark:border-gray-600/50 dark:bg-gray-800/60"
                :hidden="faqOpenIndex !== i"
              >
                <p class="px-5 py-4 text-base leading-loose text-gray-600 dark:text-gray-300 sm:text-lg">
                  {{ item.answer }}
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ─── قسم الدعوة للإجراء (CTA) ──────────────────────────────────────
           ماهية القسم: بطاقة بارزة بزوايا دائرية — خلفية البطاقة باللون الأساسي،
           خلفية القسم مثل الهيرو: دوائر زينة وطبقة شفافية. -->
      <section
        id="cta"
        class="section-bg-transparent relative w-full overflow-hidden bg-linear-to-b from-gray-50 to-white py-20"
      >
        <!-- إضاءة خلفية: دوائر بلون الأساسي (نفس شكل الهيرو) -->
        <div
          class="pointer-events-none absolute inset-0 overflow-hidden opacity-100 dark:opacity-100"
          aria-hidden="true"
        >
          <div class="absolute -top-24 -inset-e-24 h-96 w-96 rounded-full border-2 border-primary-400/50 shadow-[0_0_140px_70px_rgba(210,180,140,0.4),0_0_200px_90px_rgba(245,238,228,0.25),0_0_280px_120px_rgba(210,180,140,0.18)] dark:border-2 dark:border-primary-400/70 dark:bg-transparent dark:shadow-[0_0_140px_70px_rgba(210,180,140,0.72),0_0_200px_90px_rgba(245,238,228,0.58),0_0_280px_120px_rgba(210,180,140,0.4)]" />
          <div class="absolute -bottom-24 -inset-s-24 h-80 w-80 rounded-full border-2 border-primary-400/50 shadow-[0_0_120px_55px_rgba(210,180,140,0.38),0_0_160px_70px_rgba(255,250,240,0.22),0_0_240px_100px_rgba(210,180,140,0.18)] dark:border-2 dark:border-primary-400/70 dark:bg-transparent dark:shadow-[0_0_120px_55px_rgba(210,180,140,0.68),0_0_160px_70px_rgba(255,250,240,0.52),0_0_240px_100px_rgba(210,180,140,0.5)]" />
          <div class="absolute inset-s-1/2 top-1/2 h-64 w-64 -translate-x-1/2 -translate-y-1/2 rounded-full border-2 border-primary-400/50 shadow-[0_0_100px_50px_rgba(232,221,200,0.35),0_0_140px_60px_rgba(255,252,245,0.22),0_0_220px_90px_rgba(210,180,140,0.18)] dark:border-2 dark:border-primary-400/70 dark:bg-transparent dark:shadow-[0_0_100px_50px_rgba(232,221,200,0.72),0_0_140px_60px_rgba(255,252,245,0.58),0_0_220px_90px_rgba(210,180,140,0.5)]" />
          <div class="absolute top-1/4 inset-e-1/4 h-72 w-72 rounded-full border-2 border-primary-400/50 shadow-[0_0_90px_45px_rgba(210,180,140,0.35),0_0_180px_80px_rgba(210,180,140,0.18)] dark:border-2 dark:border-primary-400/70 dark:bg-transparent dark:shadow-[0_0_90px_45px_rgba(210,180,140,0.68),0_0_180px_80px_rgba(210,180,140,0.5)]" />
          <div class="absolute bottom-1/3 inset-s-1/3 h-56 w-56 rounded-full border-2 border-primary-400/50 shadow-[0_0_80px_40px_rgba(245,238,228,0.3),0_0_160px_70px_rgba(210,180,140,0.18)] dark:border-2 dark:border-primary-400/70 dark:bg-transparent dark:shadow-[0_0_80px_40px_rgba(245,238,228,0.62),0_0_160px_70px_rgba(210,180,140,0.5)]" />
          <div class="absolute top-1/3 inset-s-1/4 h-40 w-40 rounded-full border-2 border-primary-400/50 shadow-[0_0_70px_35px_rgba(210,180,140,0.35),0_0_150px_60px_rgba(210,180,140,0.2)] dark:border-2 dark:border-primary-400/70 dark:bg-transparent dark:shadow-[0_0_70px_35px_rgba(210,180,140,0.5),0_0_150px_60px_rgba(210,180,140,0.5)]" />
          <div class="absolute bottom-1/4 inset-e-1/3 h-48 w-48 rounded-full border-2 border-primary-400/50 shadow-[0_0_75px_38px_rgba(232,221,200,0.35),0_0_160px_70px_rgba(210,180,140,0.2)] dark:border-2 dark:border-primary-400/70 dark:bg-transparent dark:shadow-[0_0_75px_38px_rgba(232,221,200,0.7),0_0_160px_70px_rgba(210,180,140,0.5)]" />
        </div>
        <!-- طبقة شفافية خفيفة (نفس الهيرو) -->
        <div
          class="pointer-events-none absolute inset-0 bg-gray-900/15 dark:bg-black/80"
            aria-hidden="true"
        />
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <!-- البطاقة: خلفية باللون الأساسي، زوايا دائرية كبيرة -->
          <div
            class="relative mx-auto max-w-4xl rounded-4xl bg-primary-200/90 px-8 py-12 text-center shadow-xl dark:bg-primary-500 dark:shadow-2xl sm:px-14 sm:py-16"
          >
            <h2 class="text-3xl font-bold leading-tight text-primary-800 sm:text-4xl dark:text-primary-900">
              جاهز لبناء شيء مميز؟
            </h2>
            <p class="mx-auto mt-4 max-w-xl text-xl leading-loose text-primary-700 dark:text-primary-800">
              شاركنا تفاصيل مشروعك وسنتواصل معك.
            </p>
            <Link
              href="/contact"
              class="mt-8 inline-flex items-center gap-2 rounded-2xl bg-white px-8 py-4 text-xl font-medium text-gray-600 shadow-md transition hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-primary-400 focus:ring-offset-2 dark:bg-gray-100 dark:text-gray-700 dark:hover:bg-gray-200 dark:focus:ring-offset-primary-500"
            >
              ابدأ مشروعك
              <span class="text-gray-500 dark:text-gray-600" aria-hidden="true">←</span>
            </Link>
          </div>
        </div>
      </section>

      <!-- ─── قسم تواصل معنا (Contact) ──────────────────────────────────────
           خلفية مثل قسم الأسئلة الشائعة: بطاقات معلومات اتصال + خريطة + نموذج إرسال. -->
      <section
        id="contact"
        class="section-bg-transparent relative w-full overflow-hidden bg-gray-50 py-20 sm:py-24"
        dir="rtl"
      >
        <div class="pointer-events-none absolute inset-0 dark:bg-black/10" aria-hidden="true" />
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <h2 class="text-center text-3xl font-bold leading-tight text-gray-900 dark:text-white sm:text-4xl">
            تواصل معنا
          </h2>
          <p class="mx-auto mt-3 max-w-2xl text-center text-lg leading-loose text-gray-600 dark:text-gray-400">
            نسعد بالرد
          </p>

          <div class="mt-14 grid gap-10 lg:grid-cols-2 lg:gap-12">
            <!-- العمود الأيسر: معلومات الاتصال + الخريطة -->
            <div class="space-y-6">
              <div class="grid gap-4 sm:grid-cols-2">
                <div class="card-bg-transparent flex items-start gap-4 rounded-xl border border-gray-200/70 p-5 dark:border-gray-600/50">
                  <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-primary-500/20 text-primary-600 dark:bg-primary-500/30 dark:text-primary-400">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                  </span>
                  <div>
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">الهاتف</p>
                    <p class="mt-1 text-base leading-relaxed text-gray-900 dark:text-gray-100">+249-XXX-XXX-XXXX</p>
                  </div>
                </div>
                <div class="card-bg-transparent flex items-start gap-4 rounded-xl border border-gray-200/70 p-5 dark:border-gray-600/50">
                  <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-primary-500/20 text-primary-600 dark:bg-primary-500/30 dark:text-primary-400">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                  </span>
                  <div>
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">البريد الإلكتروني</p>
                    <p class="mt-1 text-base leading-relaxed text-gray-900 dark:text-gray-100">info@kundiatete.com</p>
                  </div>
                </div>
                <div class="card-bg-transparent flex items-start gap-4 rounded-xl border border-gray-200/70 p-5 dark:border-gray-600/50 sm:col-span-2">
                  <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-primary-500/20 text-primary-600 dark:bg-primary-500/30 dark:text-primary-400">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                  </span>
                  <div>
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">ساعات العمل</p>
                    <p class="mt-1 text-base leading-relaxed text-gray-900 dark:text-gray-100">الأحد — الخميس: 9 صباحاً - 6 مساءً</p>
                  </div>
                </div>
                <div class="card-bg-transparent flex items-start gap-4 rounded-xl border border-gray-200/70 p-5 dark:border-gray-600/50 sm:col-span-2">
                  <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-primary-500/20 text-primary-600 dark:bg-primary-500/30 dark:text-primary-400">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                  </span>
                  <div>
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">العنوان</p>
                    <p class="mt-1 text-base leading-relaxed text-gray-900 dark:text-gray-100">الخرطوم، السودان</p>
                  </div>
                </div>
              </div>
              <div class="overflow-hidden rounded-xl border border-gray-200/70 dark:border-gray-600/50">
                <iframe
                  src="https://www.openstreetmap.org/export/embed.html?bbox=32.45%2C15.45%2C32.65%2C15.55&layer=mapnik"
                  class="h-72 w-full border-0 dark:opacity-90"
                  title="الخرطوم، السودان"
                  loading="lazy"
                />
              </div>
            </div>

            <!-- العمود الأيمن: نموذج التواصل -->
            <form
              action="/contact"
              method="post"
              class="card-bg-transparent flex flex-col gap-4 rounded-xl border border-gray-200/70 p-6 dark:border-gray-600/50 sm:p-8"
            >
              <input type="hidden" name="_token" :value="csrfToken" />
              <div>
                <label for="contact-name" class="mb-1 block text-sm font-medium text-gray-700 dark:text-gray-300">الاسم</label>
                <input id="contact-name" type="text" name="name" placeholder="أدخل اسمك الكامل" required class="w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-base text-gray-900 placeholder-gray-500 transition focus:border-primary-500 focus:outline-none focus:ring-2 focus:ring-primary-500/20 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-100 dark:placeholder-gray-400" />
              </div>
              <div>
                <label for="contact-email" class="mb-1 block text-sm font-medium text-gray-700 dark:text-gray-300">البريد</label>
                <input id="contact-email" type="email" name="email" placeholder="example@email.com" required class="w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-base text-gray-900 placeholder-gray-500 transition focus:border-primary-500 focus:outline-none focus:ring-2 focus:ring-primary-500/20 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-100 dark:placeholder-gray-400" />
              </div>
              <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <div>
                  <label for="contact-mobile" class="mb-1 block text-sm font-medium text-gray-700 dark:text-gray-300">الجوال</label>
                  <input id="contact-mobile" type="tel" name="mobile" placeholder="+249 XXX XXX XXXX" class="w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-base text-gray-900 placeholder-gray-500 transition focus:border-primary-500 focus:outline-none focus:ring-2 focus:ring-primary-500/20 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-100 dark:placeholder-gray-400" />
                </div>
                <div>
                  <label for="contact-company" class="mb-1 block text-sm font-medium text-gray-700 dark:text-gray-300">الشركة</label>
                  <input id="contact-company" type="text" name="company" placeholder="اسم شركتك" class="w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-base text-gray-900 placeholder-gray-500 transition focus:border-primary-500 focus:outline-none focus:ring-2 focus:ring-primary-500/20 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-100 dark:placeholder-gray-400" />
                </div>
              </div>
              <div>
                <label for="contact-subject" class="mb-1 block text-sm font-medium text-gray-700 dark:text-gray-300">الموضوع</label>
                <input id="contact-subject" type="text" name="subject" placeholder="موضوع رسالتك" class="w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-base text-gray-900 placeholder-gray-500 transition focus:border-primary-500 focus:outline-none focus:ring-2 focus:ring-primary-500/20 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-100 dark:placeholder-gray-400" />
              </div>
              <div>
                <label for="contact-message" class="mb-1 block text-sm font-medium text-gray-700 dark:text-gray-300">رسالتك</label>
                <textarea id="contact-message" name="message" rows="2" placeholder="اكتب رسالتك هنا..." required class="w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-base text-gray-900 placeholder-gray-500 transition focus:border-primary-500 focus:outline-none focus:ring-2 focus:ring-primary-500/20 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-100 dark:placeholder-gray-400" />
              </div>
              <button
                type="submit"
                class="mt-2 w-full rounded-xl bg-primary-600 px-6 py-4 text-lg font-medium text-white shadow-md transition hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 dark:focus:ring-offset-gray-900"
              >
                إرسال
              </button>
            </form>
          </div>
        </div>
      </section>

      <!-- ─── قسم شريكك الاستراتيجي (About / Digital Transformation) ─────────
           خلفية مثل الهيرو: دوائر زينة وطبقة شفافية. محتوى موسّع عن كنديا تيتي والتحول الرقمي. -->
      <section
        id="strategic-partner"
        class="section-bg-transparent relative w-full overflow-hidden bg-linear-to-b from-gray-50 to-white py-24 sm:py-32"
        dir="rtl"
      >
        <!-- إضاءة خلفية: دوائر بلون الأساسي مائلة للأبيض (عدد أكبر من دوائر الزينة) -->
        <div
          class="pointer-events-none absolute inset-0 overflow-hidden opacity-100 dark:opacity-100"
          aria-hidden="true"
        >
          <div class="absolute -top-24 -inset-e-24 h-96 w-96 rounded-full border-2 border-primary-400/50 shadow-[0_0_140px_70px_rgba(210,180,140,0.4),0_0_200px_90px_rgba(245,238,228,0.25),0_0_280px_120px_rgba(210,180,140,0.18)] dark:border-2 dark:border-primary-400/70 dark:bg-transparent dark:shadow-[0_0_140px_70px_rgba(210,180,140,0.72),0_0_200px_90px_rgba(245,238,228,0.58),0_0_280px_120px_rgba(210,180,140,0.4)]" />
          <div class="absolute -bottom-24 -inset-s-24 h-80 w-80 rounded-full border-2 border-primary-400/50 shadow-[0_0_120px_55px_rgba(210,180,140,0.38),0_0_160px_70px_rgba(255,250,240,0.22),0_0_240px_100px_rgba(210,180,140,0.18)] dark:border-2 dark:border-primary-400/70 dark:bg-transparent dark:shadow-[0_0_120px_55px_rgba(210,180,140,0.68),0_0_160px_70px_rgba(255,250,240,0.52),0_0_240px_100px_rgba(210,180,140,0.5)]" />
          <div class="absolute inset-s-1/2 top-1/2 h-64 w-64 -translate-x-1/2 -translate-y-1/2 rounded-full border-2 border-primary-400/50 shadow-[0_0_100px_50px_rgba(232,221,200,0.35),0_0_140px_60px_rgba(255,252,245,0.22),0_0_220px_90px_rgba(210,180,140,0.18)] dark:border-2 dark:border-primary-400/70 dark:bg-transparent dark:shadow-[0_0_100px_50px_rgba(232,221,200,0.72),0_0_140px_60px_rgba(255,252,245,0.58),0_0_220px_90px_rgba(210,180,140,0.5)]" />
          <div class="absolute top-1/4 inset-e-1/4 h-72 w-72 rounded-full border-2 border-primary-400/50 shadow-[0_0_90px_45px_rgba(210,180,140,0.35),0_0_180px_80px_rgba(210,180,140,0.18)] dark:border-2 dark:border-primary-400/70 dark:bg-transparent dark:shadow-[0_0_90px_45px_rgba(210,180,140,0.68),0_0_180px_80px_rgba(210,180,140,0.5)]" />
          <div class="absolute bottom-1/3 inset-s-1/3 h-56 w-56 rounded-full border-2 border-primary-400/50 shadow-[0_0_80px_40px_rgba(245,238,228,0.3),0_0_160px_70px_rgba(210,180,140,0.18)] dark:border-2 dark:border-primary-400/70 dark:bg-transparent dark:shadow-[0_0_80px_40px_rgba(245,238,228,0.62),0_0_160px_70px_rgba(210,180,140,0.5)]" />
          <div class="absolute top-1/3 inset-s-1/4 h-40 w-40 rounded-full border-2 border-primary-400/50 shadow-[0_0_70px_35px_rgba(210,180,140,0.35),0_0_150px_60px_rgba(210,180,140,0.2)] dark:border-2 dark:border-primary-400/70 dark:bg-transparent dark:shadow-[0_0_70px_35px_rgba(210,180,140,0.5),0_0_150px_60px_rgba(210,180,140,0.5)]" />
          <div class="absolute bottom-1/4 inset-e-1/3 h-48 w-48 rounded-full border-2 border-primary-400/50 shadow-[0_0_75px_38px_rgba(232,221,200,0.35),0_0_160px_70px_rgba(210,180,140,0.2)] dark:border-2 dark:border-primary-400/70 dark:bg-transparent dark:shadow-[0_0_75px_38px_rgba(232,221,200,0.7),0_0_160px_70px_rgba(210,180,140,0.5)]" />
          <div class="absolute top-1/2 -inset-s-12 h-52 w-52 rounded-full border-2 border-primary-400/50 shadow-[0_0_60px_30px_rgba(210,180,140,0.35),0_0_110px_50px_rgba(210,180,140,0.2)] dark:border-2 dark:border-primary-400/70 dark:bg-transparent dark:shadow-[0_0_60px_30px_rgba(210,180,140,0.5),0_0_110px_50px_rgba(210,180,140,0.4)]" />
          <div class="absolute bottom-1/4 -inset-e-12 h-44 w-44 rounded-full border-2 border-primary-400/50 shadow-[0_0_50px_25px_rgba(245,238,228,0.3),0_0_90px_40px_rgba(210,180,140,0.2)] dark:border-2 dark:border-primary-400/70 dark:bg-transparent dark:shadow-[0_0_50px_25px_rgba(245,238,228,0.6),0_0_90px_40px_rgba(210,180,140,0.5)]" />
          <div class="absolute top-1/3 -inset-e-1/3 h-36 w-36 rounded-full border-2 border-primary-400/50 shadow-[0_0_45px_22px_rgba(232,221,200,0.32)] dark:border-2 dark:border-primary-400/70 dark:bg-transparent dark:shadow-[0_0_45px_22px_rgba(232,221,200,0.58)]" />
          <div class="absolute bottom-1/2 inset-e-1/4 h-48 w-48 rounded-full border-2 border-primary-400/50 shadow-[0_0_55px_28px_rgba(210,180,140,0.35),0_0_100px_45px_rgba(210,180,140,0.2)] dark:border-2 dark:border-primary-400/70 dark:bg-transparent dark:shadow-[0_0_55px_28px_rgba(210,180,140,0.5),0_0_100px_45px_rgba(210,180,140,0.4)]" />
          <div class="absolute top-2/3 inset-s-1/3 h-32 w-32 rounded-full border-2 border-primary-400/50 shadow-[0_0_40px_20px_rgba(245,238,228,0.3)] dark:border-2 dark:border-primary-400/70 dark:bg-transparent dark:shadow-[0_0_40px_20px_rgba(245,238,228,0.5)]" />
          <div class="absolute top-1/6 inset-s-1/4 h-28 w-28 rounded-full border-2 border-primary-400/50 shadow-[0_0_35px_18px_rgba(210,180,140,0.35),0_0_70px_32px_rgba(210,180,140,0.2)] dark:border-2 dark:border-primary-400/70 dark:bg-transparent dark:shadow-[0_0_35px_18px_rgba(210,180,140,0.5),0_0_70px_32px_rgba(210,180,140,0.4)]" />
        </div>
        <!-- طبقة شفافية خفيفة في الوضع الداكن (نفس الهيرو) -->
        <div
          class="pointer-events-none absolute inset-0 bg-gray-900/15 dark:bg-black/80"
          aria-hidden="true"
        />
        <div class="relative mx-auto max-w-7xl px-4 text-center sm:px-6 lg:px-8">
          <h2 class="text-3xl font-bold leading-tight text-gray-900 dark:text-white sm:text-4xl lg:text-5xl">
            شريكك الاستراتيجي للتحول الرقمي المتكامل
          </h2>
          <div class="mx-auto mt-12 max-w-3xl space-y-8 text-center text-base leading-loose text-gray-600 dark:text-gray-300 sm:text-lg">
            <p>
              نحن في <strong class="text-gray-800 dark:text-gray-100">كنديا تيتي للحلول المتكاملة المحدودة</strong> نقدم منظومة تقنية متكاملة لدعم وتمكين الأعمال في السودان والمنطقة. لا نكتفي بتقديم خدمات تقليدية منفصلة، بل نبني لك بيئة عمل رقمية وآمنة تضمن حماية أصولك، نمو مبيعاتك، وتميّزك عن المنافسين. رؤيتنا مستوحاة من ديناميكية التكنولوجيا الحديثة وآفاق الطيران، لنكون شريكك الموثوق في كل مرحلة من مراحل التحول الرقمي.
            </p>
            <p>
              تبدأ رحلتنا معك من تأمين منشآتك عبر <strong class="text-gray-800 dark:text-gray-100">أنظمة المراقبة والإنذار</strong> ضد الحريق والاختراق، مروراً بـ <strong class="text-gray-800 dark:text-gray-100">البنية التحتية والشبكات</strong> ومراكز البيانات التي تدعم أعمالك على مدار الساعة، وصولاً إلى <strong class="text-gray-800 dark:text-gray-100">تصميم وتطوير المواقع والتطبيقات</strong> السريعة والتفاعلية التي تقدم تجربة مستخدم استثنائية. نضيف إلى ذلك حلول <strong class="text-gray-800 dark:text-gray-100">البيت الذكي والتحكم</strong> في الإنارة والإنتركم، و<strong class="text-gray-800 dark:text-gray-100">تتبع المركبات وإدارة الأسطول</strong> بدقة وموثوقية، لتغطية احتياجاتك من الأمان إلى الإنتاجية.
            </p>
            <p>
              ولإدارة أعمالك باحترافية ووصول منتجاتك إلى الجمهور المستهدف، نوفر <strong class="text-gray-800 dark:text-gray-100">حلول الدعاية والإعلان والمطبوعات</strong> وتصميم الهوية البصرية وحملات التسويق الرقمي وتحسين محركات البحث (SEO)، بحيث تصبح علامتك التجارية حاضرة وقوية في السوق. ندمج حيث يلزم أحدث تقنيات الذكاء الاصطناعي والأتمتة لتبسيط العمليات وتقليل التكاليف ورفع الكفاءة.
            </p>
            <p>
              كل ذلك مدعوم بـ <strong class="text-gray-800 dark:text-gray-100">دعم فني متواصل وباقات صيانة</strong> تضمن استمرارية عمل أنظمتك. كنديا تيتي المحدودة — مزودك التقني الأول الموثوق في رحلة التحول الرقمي، من السودان إلى المنطقة.
            </p>
          </div>
        </div>
      </section>
    </div>
  </AppLayout>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import { Link } from '@inertiajs/vue3';
import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import AppLayout from '@/Layouts/AppLayout.vue';

gsap.registerPlugin(ScrollTrigger);

const statsSection = ref(null);
const faqOpenIndex = ref(null);
const csrfToken = ref(typeof document !== 'undefined' ? document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') ?? '' : '');

const faqItems = ref([
  { question: 'ما هي تكلفة المشروع؟', answer: 'نقدم عروض أسعار مخصصة بناءً على متطلبات كل مشروع. تواصل معنا للحصول على عرض سعر مجاني.' },
  { question: 'هل تقدمون الدعم بعد الإطلاق؟', answer: 'نعم، نقدم دعم فني مستمر وباقات صيانة شهرية تشمل التحديثات والنسخ الاحتياطي والأمان.' },
  { question: 'ما التقنيات التي تستخدمونها؟', answer: 'نستخدم أحدث التقنيات مثل Next.js, React, Node.js, Python, و AI/ML للحصول على أفضل النتائج.' },
  { question: 'هل تطورون تطبيقات iOS و Android؟', answer: 'نعم، نطور تطبيقات لكلا النظامين باستخدام React Native أو Flutter مما يوفر الوقت والتكلفة.' },
  { question: 'ما هي طرق الدفع المتاحة؟', answer: 'نقبل التحويل البنكي، مدى، Apple Pay، وبطاقات الائتمان. يمكن الدفع على مراحل حسب حجم المشروع.' },
  { question: 'هل هناك دفعة مقدمة؟', answer: 'نعم، عادة نطلب 30-50% دفعة مقدمة لبدء العمل، والباقي عند التسليم أو على مراحل.' },
  { question: 'كيف يمكنني التواصل معكم؟', answer: 'يمكنك التواصل عبر نموذج الاتصال، البريد الإلكتروني، الواتساب، أو الاتصال المباشر. نرد خلال 24 ساعة.' },
  { question: 'كم تستغرق مدة تطوير الموقع؟', answer: 'تعتمد المدة على حجم وتعقيد المشروع، عادة من 2–8 أسابيع للمواقع المتوسطة.' },
  { question: 'هل تقدمون أنظمة مراقبة وإنذار؟', answer: 'نعم، نقدم أنظمة مراقبة مرئية (CCTV) وأنظمة إنذار ضد الحريق والاختراق مع تركيب وصيانة.' },
  { question: 'هل تقدمون حلول البيت الذكي؟', answer: 'نعم، نقدم حلول إنارة ذكية وتحكم بالمنزل والإنتركم، قابلة للتكامل مع أجهزتك الحالية.' },
  { question: 'هل تقدمون خدمة تتبع المركبات؟', answer: 'نعم، نقدم حلول تتبع وإدارة أسطول المركبات بدقة مع تقارير وخرائط وتنبيهات.' },
]);

const stats = ref([
  { value: 30, display: 0, suffix: ' +', label: 'مشروع' },
  { value: 20, display: 0, suffix: ' +', label: 'عميل' },
  { value: 2, display: 0, suffix: ' +', label: 'سنوات خبرة' },
  { value: 24, display: '24', suffix: ' /7', label: 'دعم' },
]);

const servicesPreview = ref([
  {
    title: 'أنظمة المراقبة والإنذار',
    desc: 'مراقبة مرئية وأنظمة إنذار ضد الحريق والاختراق.',
    icon: '📹',
  },
  {
    title: 'البنية التحتية والشبكات',
    desc: 'تصميم مراكز البيانات والشبكات والكابلات.',
    icon: '🔌',
  },
  {
    title: 'تصميم وتطوير المواقع',
    desc: 'مواقع إلكترونية سريعة واحترافية تناسب أعمالك.',
    icon: '🌐',
  },
  {
    title: 'البيت الذكي والتحكم',
    desc: 'حلول ذكية للإنارة والتحكم والإنتركم.',
    icon: '🏠',
  },
  {
    title: 'تتبع المركبات',
    desc: 'حلول تتبع وإدارة أسطول المركبات بدقة وموثوقية.',
    icon: '🚗',
  },
  {
    title: 'الدعاية والإعلان والمطبوعات',
    desc: 'تصميم هوية بصرية ومطبوعات وحملات إعلانية.',
    icon: '📢',
  },
]);

const testimonials = ref([
  {
    text: 'فريق محترف ومتعاون، أنجزوا مشروعنا في الوقت المحدد وبجودة عالية جداً. التواصل معهم كان سلساً والنتائج فاقت توقعاتنا.',
    name: 'صالح بابكر',
    role: 'مدير تنفيذي',
  },
  {
    text: 'تعاملنا مع كنديا تيتي لتنفيذ أنظمة المراقبة والإنذار. الخدمة ممتازة والدعم الفني متواصل. ننصح بالتعامل معهم.',
    name: 'زينب النور',
    role: 'مديرة عمليات',
  },
  {
    text: 'قدمت الشركة حلول بنية تحتية متكاملة لمركز البيانات لدينا. الاحترافية والالتزام بالمعايير كانا واضحين من اليوم الأول.',
    name: 'مأمون التاج',
    role: 'مدير تقنية المعلومات',
  },
  {
    text: 'تجربة رائعة من ناحية تصميم الموقع والاستجابة. فريق يفهّم احتياجات العميل ويترجمها إلى حلول عملية وأنيقة.',
    name: 'عائشة دفع الله',
    role: 'مالكة مشروع تجاري',
  },
  {
    text: 'أنظمة الحضور والانصراف وتتبع المركبات التي زودتنا بها الشركة تعمل بدقة وتوفر علينا وقتاً وجهداً كبيرين.',
    name: 'عبد الرحمن محمود',
    role: 'مدير موارد بشرية',
  },
  {
    text: 'شريك موثوق في التحول الرقمي. نتعامل معهم منذ سنوات ونوصي بهم لكل من يبحث عن جودة وشفافية في التنفيذ.',
    name: 'مريم عثمان',
    role: 'مديرة تطوير أعمال',
  },
]);

onMounted(() => {
  if (!statsSection.value) return;
  ScrollTrigger.create({
    trigger: statsSection.value,
    start: 'top 85%',
    once: true,
    onEnter: () => {
      stats.value.forEach((stat, i) => {
        if (stat.label === 'دعم') return;
        const obj = { n: 0 };
        gsap.to(obj, {
          n: stat.value,
          duration: 1.5,
          ease: 'power2.out',
          snap: { n: 1 },
          onUpdate: () => {
            stats.value[i].display = Math.round(obj.n);
          },
        });
      });
    },
  });
});
</script>
