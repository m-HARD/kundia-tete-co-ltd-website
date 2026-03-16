<template>
  <AppLayout>
    <div class="space-y-0" dir="rtl">
      <!-- هيرو: خدماتنا -->
      <section
        class="section-bg-transparent relative w-full overflow-hidden bg-linear-to-b from-gray-50 to-white py-24 sm:py-32"
      >
        <div
          class="pointer-events-none absolute inset-0 overflow-hidden opacity-100 dark:opacity-100"
          aria-hidden="true"
        >
          <div class="absolute -top-24 -inset-e-24 h-96 w-96 rounded-full border-2 border-primary-400/50 shadow-[0_0_140px_70px_rgba(210,180,140,0.4),0_0_200px_90px_rgba(245,238,228,0.25)] dark:border-primary-400/70 dark:shadow-[0_0_140px_70px_rgba(210,180,140,0.72),0_0_200px_90px_rgba(245,238,228,0.58)]" />
          <div class="absolute -bottom-24 -inset-s-24 h-80 w-80 rounded-full border-2 border-primary-400/50 shadow-[0_0_120px_55px_rgba(210,180,140,0.38),0_0_160px_70px_rgba(255,250,240,0.22)] dark:border-primary-400/70 dark:shadow-[0_0_120px_55px_rgba(210,180,140,0.68),0_0_160px_70px_rgba(255,250,240,0.52)]" />
          <div class="absolute inset-s-1/2 top-1/2 h-64 w-64 -translate-x-1/2 -translate-y-1/2 rounded-full border-2 border-primary-400/50 shadow-[0_0_100px_50px_rgba(232,221,200,0.35)] dark:border-primary-400/70 dark:shadow-[0_0_100px_50px_rgba(232,221,200,0.72)]" />
          <div class="absolute top-1/4 inset-e-1/4 h-72 w-72 rounded-full border-2 border-primary-400/50 shadow-[0_0_90px_45px_rgba(210,180,140,0.35)] dark:border-primary-400/70 dark:shadow-[0_0_90px_45px_rgba(210,180,140,0.68)]" />
          <div class="absolute bottom-1/3 inset-s-1/3 h-56 w-56 rounded-full border-2 border-primary-400/50 shadow-[0_0_80px_40px_rgba(245,238,228,0.3)] dark:border-primary-400/70 dark:shadow-[0_0_80px_40px_rgba(245,238,228,0.62)]" />
        </div>
        <div class="pointer-events-none absolute inset-0 bg-gray-900/15 dark:bg-black/80" aria-hidden="true" />
        <div class="relative mx-auto max-w-7xl px-4 text-center sm:px-6 lg:px-8">
          <h1 class="text-5xl font-bold leading-tight tracking-tight text-gray-900 dark:text-white sm:text-6xl">
            خدماتنا
          </h1>
          <p class="mx-auto mt-6 max-w-2xl text-xl leading-loose text-gray-600 dark:text-gray-300">
            مجموعة متكاملة من الخدمات التقنية لدعم أعمالك من الأمان إلى الإنتاجية.
          </p>
        </div>
      </section>

      <!-- حلولنا وخدماتنا: بطاقات الخدمات -->
      <section class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8">
        <h2 class="text-center text-3xl font-bold leading-tight text-gray-900 dark:text-white sm:text-4xl">
          حلولنا وخدماتنا
        </h2>
        <p class="mx-auto mt-3 max-w-2xl text-center text-lg leading-loose text-gray-600 dark:text-gray-400">
          نقدم مجموعة متكاملة من الخدمات في مجال تقنية المعلومات والحلول الرقمية.
        </p>
        <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
          <div
            v-for="(svc, i) in services"
            :key="svc.title"
            class="card-bg-transparent group relative flex flex-col overflow-hidden rounded-xl border border-gray-200/70 bg-linear-to-b from-gray-50 to-white p-6 transition hover:border-primary-400 dark:border-gray-600/50 dark:hover:border-primary-500/50"
          >
            <div
              class="pointer-events-none absolute inset-0 overflow-hidden opacity-100 dark:opacity-100"
              aria-hidden="true"
            >
              <div class="absolute -top-6 -inset-e-6 h-24 w-24 rounded-full border-2 border-primary-400/50 shadow-[0_0_50px_25px_rgba(210,180,140,0.35)] dark:border-primary-400/70 dark:shadow-[0_0_50px_25px_rgba(210,180,140,0.72)]" />
            </div>
            <div class="pointer-events-none absolute inset-0 bg-gray-900/15 dark:bg-black/85" aria-hidden="true" />
            <div class="relative z-10 flex flex-1 flex-col">
              <span
                class="me-auto flex h-14 w-14 shrink-0 items-center justify-center rounded-xl bg-primary-50 text-2xl ring-2 ring-primary-400/50 text-primary-700 dark:bg-primary-500/15 dark:ring-primary-400/60 dark:text-primary-300"
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
          </div>
        </div>
      </section>

      <!-- أنظمة الأعمال -->
      <section
        class="section-bg-transparent relative w-full overflow-hidden bg-gray-50 py-20 sm:py-24 dark:bg-black/10"
      >
        <div class="pointer-events-none absolute inset-0 dark:bg-black/10" aria-hidden="true" />
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <h2 class="text-center text-3xl font-bold leading-tight text-gray-900 dark:text-white sm:text-4xl">
            أنظمة الأعمال
          </h2>
          <p class="mx-auto mt-3 max-w-2xl text-center text-lg leading-loose text-gray-600 dark:text-gray-400">
            دعم وتشغيل مستمر لأنظمتك وأعمالك.
          </p>
          <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <div
              v-for="(item, i) in businessSystems"
              :key="i"
              class="card-bg-transparent flex flex-col rounded-xl border border-gray-200/70 p-6 dark:border-gray-600/50"
            >
              <span class="text-3xl" aria-hidden="true">{{ item.icon }}</span>
              <h3 class="mt-4 text-lg font-bold text-gray-900 dark:text-white">{{ item.title }}</h3>
              <p class="mt-2 text-base leading-loose text-gray-600 dark:text-gray-400">{{ item.desc }}</p>
              <Link
                v-if="item.link"
                :href="item.link"
                class="mt-4 text-sm font-medium text-primary-600 hover:text-primary-700 dark:text-primary-400 dark:hover:text-primary-300"
              >
                {{ item.linkText }}
                <span aria-hidden="true">←</span>
              </Link>
            </div>
          </div>
        </div>
      </section>

      <!-- CTA -->
      <section
        class="section-bg-transparent relative w-full overflow-hidden bg-linear-to-b from-gray-50 to-white py-20"
      >
        <div
          class="pointer-events-none absolute inset-0 overflow-hidden opacity-100 dark:opacity-100"
          aria-hidden="true"
        >
          <div class="absolute -top-24 -inset-e-24 h-96 w-96 rounded-full border-2 border-primary-400/50 shadow-[0_0_140px_70px_rgba(210,180,140,0.4)] dark:border-primary-400/70 dark:shadow-[0_0_140px_70px_rgba(210,180,140,0.72)]" />
          <div class="absolute -bottom-24 -inset-s-24 h-80 w-80 rounded-full border-2 border-primary-400/50 shadow-[0_0_120px_55px_rgba(210,180,140,0.38)] dark:border-primary-400/70 dark:shadow-[0_0_120px_55px_rgba(210,180,140,0.68)]" />
        </div>
        <div class="pointer-events-none absolute inset-0 bg-gray-900/15 dark:bg-black/80" aria-hidden="true" />
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <div class="relative mx-auto max-w-4xl rounded-4xl bg-primary-200/90 px-8 py-12 text-center shadow-xl dark:bg-primary-500 dark:shadow-2xl sm:px-14 sm:py-16">
            <h2 class="text-3xl font-bold leading-tight text-primary-800 sm:text-4xl dark:text-primary-900">
              جاهز لبدء مشروعك؟
            </h2>
            <p class="mx-auto mt-4 max-w-xl text-xl leading-loose text-primary-700 dark:text-primary-800">
              شاركنا متطلباتك وسنقترح عليك الحل الأنسب.
            </p>
            <Link
              href="/contact"
              class="mt-8 inline-flex items-center gap-2 rounded-2xl bg-white px-8 py-4 text-xl font-medium text-gray-600 shadow-md transition hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-primary-400 focus:ring-offset-2 dark:bg-gray-100 dark:text-gray-700 dark:hover:bg-gray-200 dark:focus:ring-offset-primary-500"
            >
              ابدأ محادثة
              <span class="text-gray-500 dark:text-gray-600" aria-hidden="true">←</span>
            </Link>
          </div>
        </div>
      </section>
    </div>
  </AppLayout>
</template>

<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';

const services = ref([
  { title: 'أنظمة المراقبة والإنذار', desc: 'مراقبة مرئية (CCTV) وأنظمة إنذار ضد الحريق والاختراق، مع تركيب وصيانة واحترافية عالية.', icon: '📹' },
  { title: 'البنية التحتية والشبكات', desc: 'تصميم مراكز البيانات والشبكات والكابلات، وبنية تحتية تدعم أعمالك على مدار الساعة.', icon: '🔌' },
  { title: 'تصميم وتطوير المواقع والتطبيقات', desc: 'مواقع إلكترونية وتطبيقات سريعة واحترافية تناسب أعمالك وتقدم تجربة مستخدم استثنائية.', icon: '🌐' },
  { title: 'البيت الذكي والتحكم', desc: 'حلول ذكية للإنارة والتحكم والإنتركم، قابلة للتكامل مع أجهزتك الحالية.', icon: '🏠' },
  { title: 'تتبع المركبات وإدارة الأسطول', desc: 'حلول تتبع وإدارة أسطول المركبات بدقة وموثوقية، مع تقارير وخرائط وتنبيهات.', icon: '🚗' },
  { title: 'الدعاية والإعلان والمطبوعات', desc: 'تصميم هوية بصرية ومطبوعات وحملات إعلانية وتسويق رقمي وتحسين محركات البحث (SEO).', icon: '📢' },
]);

const businessSystems = ref([
  { icon: '🛠️', title: 'الدعم الفني والصيانة', desc: 'دعم فني متواصل وباقات صيانة شهرية تشمل التحديثات والنسخ الاحتياطي والأمان.', link: '/contact', linkText: 'اطلب استشارة' },
  { icon: '☁️', title: 'الحلول السحابية والبنية التحتية', desc: 'استضافة سحابية وبنية تحتية مرنة وقابلة للتوسع تناسب نمو أعمالك.', link: '/contact', linkText: 'اعرف المزيد' },
  { icon: '⚙️', title: 'أتمتة العمليات وتقنية المعلومات', desc: 'أتمتة العمليات ودمج الأنظمة لتبسيط العمل ورفع الكفاءة وتقليل التكاليف.', link: '/contact', linkText: 'ابدأ محادثة' },
]);
</script>
