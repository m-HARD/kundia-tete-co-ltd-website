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
          <!-- في الوضع الفاتح: دوائر حدود خفيفة -->
          <div class="absolute -top-24 -inset-e-24 h-96 w-96 rounded-full border-2 border-primary-500/30 dark:border-none dark:bg-transparent dark:shadow-[0_0_140px_70px_rgba(210,180,140,0.22),0_0_200px_90px_rgba(245,238,228,0.12)]" />
          <div class="absolute -bottom-24 -inset-s-24 h-80 w-80 rounded-full border-2 border-primary-400/30 dark:border-none dark:bg-transparent dark:shadow-[0_0_120px_55px_rgba(210,180,140,0.2),0_0_160px_70px_rgba(255,250,240,0.08)]" />
          <div class="absolute inset-s-1/2 top-1/2 h-64 w-64 -translate-x-1/2 -translate-y-1/2 rounded-full border-2 border-primary-400/25 dark:border-none dark:bg-transparent dark:shadow-[0_0_100px_50px_rgba(232,221,200,0.25),0_0_140px_60px_rgba(255,252,245,0.1)]" />
          <div class="absolute top-1/4 inset-e-1/4 h-72 w-72 rounded-full border border-primary-300/20 dark:border-none dark:bg-transparent dark:shadow-[0_0_90px_45px_rgba(210,180,140,0.18)]" />
          <div class="absolute bottom-1/3 inset-s-1/3 h-56 w-56 rounded-full border border-primary-500/20 dark:border-none dark:bg-transparent dark:shadow-[0_0_80px_40px_rgba(245,238,228,0.15)]" />
          <div class="absolute top-1/3 inset-s-1/4 h-40 w-40 rounded-full border border-primary-400/25 dark:border-none dark:bg-transparent dark:shadow-[0_0_70px_35px_rgba(210,180,140,0.2)]" />
          <div class="absolute bottom-1/4 inset-e-1/3 h-48 w-48 rounded-full border border-primary-300/20 dark:border-none dark:bg-transparent dark:shadow-[0_0_75px_38px_rgba(232,221,200,0.18)]" />
        </div>

        <!-- طبقة شفافة خفيفة في الوضع الداكن -->
        <div
          class="pointer-events-none absolute inset-0 bg-gray-900/5 dark:bg-black/90"
          aria-hidden="true"
        />

        <div class="relative mx-auto max-w-7xl px-4 text-center sm:px-6 lg:px-8">
          <h1 class="text-5xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-6xl lg:text-6xl">
            شريكك الاستراتيجي في التحول الرقمي
          </h1>
          <p class="mx-auto mt-20 max-w-2xl text-xl leading-relaxed text-gray-600 opacity-90 dark:text-gray-300 sm:text-2xl">
            في عالم تتسارع فيه التغيرات، تنطلق «كنديا تيتي المحدودة» برؤية طموحة مستوحاة من
            ديناميكية التكنولوجيا الحديثة وآفاق الطيران. نحن لا نقدم مجرد برمجيات، بل نكرس جهودنا
            لدمج التكنولوجيا المتقدمة مع الفهم العميق لاحتياجات العمل، لنضع بين يديك حلولاً متكاملة
            تصنع الفارق.
          </p>
          <p class="mt-8 text-2xl font-medium text-primary-600 dark:text-primary-400">
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
        <h2 class="text-center text-3xl font-bold text-gray-900 dark:text-gray-100 sm:text-4xl">
          يثق بنا شركاء رائعون
        </h2>
        <p class="mx-auto mt-3 max-w-xl text-center text-lg text-gray-600 opacity-80 dark:text-gray-400">
          نتعاون مع أفضل الجهات والشركات في مختلف القطاعات.
        </p>
        <div class="mt-12 flex flex-wrap items-center justify-center gap-8 text-gray-500 opacity-70 dark:text-gray-400">
          <span class="text-base font-medium">شركاء وعملاء متميزون</span>
          <span class="hidden sm:inline">•</span>
          <span class="text-base">مجموعة متميزة من العملاء في القطاعين العام والخاص</span>
        </div>
      </section>

      <!-- ─── قسم الإحصائيات (Stats) ───────────────────────────────────────
           ماهية القسم: شريط أرقام (مشاريع، عملاء، سنوات خبرة، دعم 24/7) مع عدّادات
           GSAP تتحرك عند ظهور القسم في الشاشة. الخلفية بلون primary. -->
      <section
        id="stats"
        class="section-bg-transparent relative w-full overflow-hidden bg-primary-600 py-16"
        ref="statsSection"
      >
        <!-- طبقة شفافة خفيفة في الوضع الداكن -->
        <div
          class="pointer-events-none absolute inset-0 dark:bg-black/10"
          aria-hidden="true"
        />
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <div class="grid grid-cols-2 gap-8 sm:grid-cols-4">
            <div v-for="(stat, idx) in stats" :key="stat.label" class="text-center">
              <div class="text-4xl font-bold tabular-nums text-white sm:text-5xl dark:text-gray-100">
                <span>{{ stat.display }}</span>{{ stat.suffix }}
              </div>
              <div class="mt-2 text-base font-medium text-white/90 opacity-90 dark:text-gray-400">
                {{ stat.label }}
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ─── قسم الخدمات المصغّرة (Services Preview) ──────────────────────
           ماهية القسم: شبكة بطاقات خدمات (3×2) — أيقونة بتوهج لون أساسي، عنوان ووصف،
           وزر «عرض الكل» بلون أساسي. -->
      <section
        id="services-preview"
        class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8"
      >
        <h2 class="text-center text-3xl font-bold text-gray-900 dark:text-white sm:text-4xl">
          خدماتنا
        </h2>
        <p class="mx-auto mt-3 max-w-2xl text-center text-lg text-gray-600 dark:text-gray-400">
          نقدم مجموعة متكاملة من الخدمات التقنية.
        </p>
        <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-3" dir="rtl">
          <Link
            v-for="(svc, i) in servicesPreview"
            :key="svc.title"
            href="/services"
            dir="rtl"
            class="card-bg-transparent group flex flex-col rounded-xl border border-gray-200/70 bg-white/80 p-6 transition hover:border-primary-400 hover:bg-white/90 focus:outline-none focus:ring-2 focus:ring-primary-500 dark:border-gray-600/50 dark:hover:border-primary-500/50"
          >
            <!-- أيقونة في الطرف (RTL) مع توهج بلون الأساسي -->
            <span
              class="me-auto flex h-14 w-14 shrink-0 items-center justify-center rounded-xl text-2xl ring-2 ring-primary-400/50 bg-primary-50 text-primary-700 dark:ring-primary-400/60 dark:bg-primary-500/15 dark:text-primary-300 dark:shadow-[0_0_20px_rgba(210,180,140,0.25)]"
            >
              {{ svc.icon }}
            </span>
            <h3 class="mt-4 text-xl font-bold text-gray-900 dark:text-white">
              {{ svc.title }}
            </h3>
            <p class="mt-2 flex-1 text-base leading-relaxed text-gray-600 dark:text-gray-400">
              {{ svc.desc }}
            </p>
          </Link>
        </div>
        <div class="mt-12 text-center">
          <Link
            href="/services"
            class="inline-flex items-center rounded-xl bg-primary-600 px-6 py-3 text-lg font-medium text-white shadow-md transition hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 dark:focus:ring-offset-gray-900"
          >
            عرض الكل
            <span class="me-2" aria-hidden="true">←</span>
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
          <div class="absolute -top-24 -inset-e-24 h-96 w-96 rounded-full border-2 border-primary-500/30 dark:border-none dark:bg-transparent dark:shadow-[0_0_140px_70px_rgba(210,180,140,0.22),0_0_200px_90px_rgba(245,238,228,0.12)]" />
          <div class="absolute -bottom-24 -inset-s-24 h-80 w-80 rounded-full border-2 border-primary-400/30 dark:border-none dark:bg-transparent dark:shadow-[0_0_120px_55px_rgba(210,180,140,0.2),0_0_160px_70px_rgba(255,250,240,0.08)]" />
          <div class="absolute inset-s-1/2 top-1/2 h-64 w-64 -translate-x-1/2 -translate-y-1/2 rounded-full border-2 border-primary-400/25 dark:border-none dark:bg-transparent dark:shadow-[0_0_100px_50px_rgba(232,221,200,0.25),0_0_140px_60px_rgba(255,252,245,0.1)]" />
          <div class="absolute top-1/4 inset-e-1/4 h-72 w-72 rounded-full border border-primary-300/20 dark:border-none dark:bg-transparent dark:shadow-[0_0_90px_45px_rgba(210,180,140,0.18)]" />
          <div class="absolute bottom-1/3 inset-s-1/3 h-56 w-56 rounded-full border border-primary-500/20 dark:border-none dark:bg-transparent dark:shadow-[0_0_80px_40px_rgba(245,238,228,0.15)]" />
          <div class="absolute top-1/3 inset-s-1/4 h-40 w-40 rounded-full border border-primary-400/25 dark:border-none dark:bg-transparent dark:shadow-[0_0_70px_35px_rgba(210,180,140,0.2)]" />
          <div class="absolute bottom-1/4 inset-e-1/3 h-48 w-48 rounded-full border border-primary-300/20 dark:border-none dark:bg-transparent dark:shadow-[0_0_75px_38px_rgba(232,221,200,0.18)]" />
        </div>

        <!-- طبقة شفافية خفيفة (نفس الهيرو) -->
        <div
          class="pointer-events-none absolute inset-0 bg-gray-900/5 dark:bg-black/90"
          aria-hidden="true"
        />

        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <h2 class="text-center text-3xl font-bold text-gray-900 dark:text-gray-100 sm:text-4xl">
            آراء عملائنا
          </h2>
          <p class="mx-auto mt-3 max-w-2xl text-center text-lg text-gray-600 dark:text-gray-400">
            اكتشف ما يقوله عملاؤنا عنا
          </p>
          <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-3" dir="rtl">
            <article
              v-for="(item, i) in testimonials"
              :key="i"
              class="card-bg-transparent relative flex flex-col rounded-xl border border-gray-200/70 bg-white/80 p-6 text-start dark:border-gray-600/50"
              dir="rtl"
            >
              <!-- أيقونة الاقتباس -->
              <span
                class="text-4xl font-serif leading-none text-gray-300 dark:text-gray-600"
                aria-hidden="true"
              >
                "
              </span>
              <p class="mt-2 flex-1 text-base leading-relaxed text-gray-600 dark:text-gray-300">
                {{ item.text }}
              </p>
              <!-- اسم ومنصب صاحب التعليق مع النجوم مقابلهم -->
              <div class="mt-4 flex flex-wrap items-center justify-between gap-3 border-t border-gray-200 pt-4 dark:border-gray-600">
                <div>
                  <p class="font-semibold text-gray-900 dark:text-white">
                    {{ item.name }}
                  </p>
                  <p class="mt-0.5 text-sm text-gray-500 dark:text-gray-400">
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
            </article>
          </div>
        </div>
      </section>

      <!-- ─── قسم الدعوة للإجراء (CTA) ──────────────────────────────────────
           ماهية القسم: بطاقة بارزة بزوايا دائرية — خلفية البطاقة باللون الأساسي،
           خلفية القسم داكنة، عنوان بلون أغمق، زر فاتح مع سهم. -->
      <section
        id="cta"
        class="section-bg-transparent relative w-full overflow-hidden bg-gray-100 py-20"
      >
        <!-- طبقة شفافة خفيفة في الوضع الداكن لمجاراة باقي الأقسام -->
        <div
          class="pointer-events-none absolute inset-0 dark:bg-black/10"
          aria-hidden="true"
        />
        <div class="relative mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
          <!-- البطاقة: خلفية باللون الأساسي، زوايا دائرية كبيرة -->
          <div
            class="relative rounded-[2rem] bg-primary-200/90 px-8 py-12 text-center shadow-xl dark:bg-primary-500 dark:shadow-2xl sm:px-14 sm:py-16"
          >
            <h2 class="text-3xl font-bold text-primary-800 sm:text-4xl dark:text-primary-900">
              جاهز لبناء شيء مميز؟
            </h2>
            <p class="mx-auto mt-4 max-w-xl text-xl text-primary-700 dark:text-primary-800">
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
const stats = ref([
  { value: 50, display: 0, suffix: '+', label: 'مشروع' },
  { value: 20, display: 0, suffix: '+', label: 'عميل' },
  { value: 5, display: 0, suffix: '+', label: 'سنوات خبرة' },
  { value: 24, display: '24', suffix: '/7', label: 'دعم' },
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
    name: 'أحمد الغامدي',
    role: 'مدير تنفيذي — شركة التقنية المتقدمة',
  },
  {
    text: 'تعاملنا مع كنديا تيتي لتنفيذ أنظمة المراقبة والإنذار. الخدمة ممتازة والدعم الفني متواصل. ننصح بالتعامل معهم.',
    name: 'سارة محمد',
    role: 'مديرة العمليات — مجموعة صناعية',
  },
  {
    text: 'قدمت الشركة حلول بنية تحتية متكاملة لمركز البيانات لدينا. الاحترافية والالتزام بالمعايير كانا واضحين من اليوم الأول.',
    name: 'خالد العتيبي',
    role: 'مدير تقنية المعلومات',
  },
  {
    text: 'تجربة رائعة من ناحية تصميم الموقع والاستجابة. فريق يفهّم احتياجات العميل ويترجمها إلى حلول عملية وأنيقة.',
    name: 'نورة الشمري',
    role: 'مالكة مشروع تجاري',
  },
  {
    text: 'أنظمة الحضور والانصراف وتتبع المركبات التي زودتنا بها الشركة تعمل بدقة وتوفر علينا وقتاً وجهداً كبيرين.',
    name: 'عمر حسن',
    role: 'مدير الموارد البشرية — شركة نقل',
  },
  {
    text: 'شريك موثوق في التحول الرقمي. نتعامل معهم منذ سنوات ونوصي بهم لكل من يبحث عن جودة وشفافية في التنفيذ.',
    name: 'فاطمة عبدالله',
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
