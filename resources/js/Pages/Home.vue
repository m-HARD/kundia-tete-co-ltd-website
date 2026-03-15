<template>
  <AppLayout>
    <div class="space-y-0">
      <!-- Hero: عرض كامل مع خلفية (بدون 100vw لتجنب التمرير الأفقي) -->
      <section
        class="relative w-full overflow-hidden bg-gradient-to-b from-gray-50 to-white py-24 dark:bg-gray-900 sm:py-32"
      >
        <!-- دوائر زينة خلفية (مستوحى من الموقع المرجعي) -->
        <div
          class="pointer-events-none absolute inset-0 overflow-hidden opacity-30"
          aria-hidden="true"
        >
          <div
            class="absolute -top-24 -end-24 h-96 w-96 rounded-full border border-primary-500/20"
          />
          <div
            class="absolute -bottom-24 -start-24 h-80 w-80 rounded-full border border-primary-400/20"
          />
          <div
            class="absolute start-1/2 top-1/2 h-64 w-64 -translate-x-1/2 -translate-y-1/2 rounded-full border border-primary-300/20"
          />
        </div>

        <div class="relative mx-auto max-w-7xl px-4 text-center sm:px-6 lg:px-8">
          <h1 class="text-4xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-5xl lg:text-6xl">
            شريكك الاستراتيجي في التحول الرقمي
          </h1>
          <p class="mx-auto mt-6 max-w-2xl text-lg leading-relaxed text-gray-600 opacity-90 dark:text-gray-300 sm:text-xl">
            في عالم تتسارع فيه التغيرات، تنطلق «كنديا تيتي المحدودة» برؤية طموحة مستوحاة من
            ديناميكية التكنولوجيا الحديثة وآفاق الطيران. نحن لا نقدم مجرد برمجيات، بل نكرس جهودنا
            لدمج التكنولوجيا المتقدمة مع الفهم العميق لاحتياجات العمل، لنضع بين يديك حلولاً متكاملة
            تصنع الفارق.
          </p>
          <p class="mt-8 text-xl font-medium text-primary-600 dark:text-primary-400">
            كنديا تيتي المحدودة — دعنا نبدأ الرحلة معاً.
          </p>
          <div class="mt-10 flex flex-wrap items-center justify-center gap-4">
            <Link
              href="/contact"
              class="inline-flex items-center rounded-lg bg-primary-600 px-6 py-3 text-base font-medium text-white shadow transition hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 dark:focus:ring-offset-gray-900"
            >
              تواصل معنا
            </Link>
            <Link
              href="/services"
              class="inline-flex items-center rounded-lg border border-gray-300 bg-white px-6 py-3 text-base font-medium text-gray-700 transition hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-200 dark:hover:bg-gray-700 dark:focus:ring-offset-gray-900"
            >
              خدماتنا
            </Link>
          </div>
        </div>
      </section>

      <!-- شركاء / ثقة العملاء -->
      <section class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">
        <h2 class="text-center text-2xl font-bold text-gray-900 dark:text-gray-100 sm:text-3xl">
          يثق بنا شركاء رائعون
        </h2>
        <p class="mx-auto mt-2 max-w-xl text-center text-gray-600 opacity-80 dark:text-gray-400">
          نتعاون مع أفضل الجهات والشركات في مختلف القطاعات.
        </p>
        <div class="mt-12 flex flex-wrap items-center justify-center gap-8 text-gray-500 opacity-70 dark:text-gray-400">
          <span class="text-sm font-medium">شركاء وعملاء متميزون</span>
          <span class="hidden sm:inline">•</span>
          <span class="text-sm">مجموعة متميزة من العملاء في القطاعين العام والخاص</span>
        </div>
      </section>

      <!-- إحصائيات مع عدّادات (عرض كامل بدون 100vw) -->
      <section
        class="relative w-full overflow-hidden bg-primary-600 py-16 dark:bg-gray-800/80"
        ref="statsSection"
      >
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <div class="grid grid-cols-2 gap-8 sm:grid-cols-4">
            <div v-for="(stat, idx) in stats" :key="stat.label" class="text-center">
              <div class="text-3xl font-bold tabular-nums text-white sm:text-4xl">
                <span>{{ stat.display }}</span>{{ stat.suffix }}
              </div>
              <div class="mt-1 text-sm font-medium text-white/90 opacity-90 dark:text-gray-300">
                {{ stat.label }}
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- خدمات مصغّرة -->
      <section class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8">
        <h2 class="text-center text-2xl font-bold text-gray-900 dark:text-gray-100 sm:text-3xl">
          خدماتنا
        </h2>
        <p class="mx-auto mt-2 max-w-2xl text-center text-gray-600 opacity-80 dark:text-gray-400">
          نقدم حلولاً متكاملة في تقنية المعلومات والهندسة.
        </p>
        <div class="mt-14 grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
          <Link
            v-for="(svc, i) in servicesPreview"
            :key="svc.title"
            href="/services"
            class="group rounded-xl border border-gray-200 bg-white p-6 transition hover:border-primary-500 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-primary-500 dark:border-gray-700 dark:bg-gray-800/50 dark:hover:bg-gray-800"
          >
            <span
              class="inline-flex h-12 w-12 items-center justify-center rounded-lg bg-primary-100 text-2xl text-primary-600 dark:bg-primary-500/20 dark:text-primary-400"
            >
              {{ svc.icon }}
            </span>
            <h3 class="mt-4 text-lg font-semibold text-gray-900 dark:text-gray-100">
              {{ svc.title }}
            </h3>
            <p class="mt-2 text-sm leading-relaxed text-gray-600 opacity-80 dark:text-gray-400">
              {{ svc.desc }}
            </p>
          </Link>
        </div>
        <div class="mt-12 text-center">
          <Link
            href="/services"
            class="inline-flex items-center font-medium text-primary-600 hover:text-primary-700 dark:text-primary-400 dark:hover:text-primary-300"
          >
            عرض كل الخدمات
            <span class="mr-1" aria-hidden="true">←</span>
          </Link>
        </div>
      </section>

      <!-- CTA (عرض كامل بدون 100vw) -->
      <section class="relative w-full overflow-hidden bg-gray-100 py-20 dark:bg-gray-800">
        <div class="mx-auto max-w-3xl px-4 text-center sm:px-6 lg:px-8">
          <h2 class="text-2xl font-bold text-gray-900 dark:text-white sm:text-3xl">
            جاهز لبناء شيء مميز؟
          </h2>
          <p class="mt-4 text-lg text-gray-600 opacity-90 dark:text-gray-300">
            شاركنا تفاصيل مشروعك وسنتواصل معك.
          </p>
          <Link
            href="/contact"
            class="mt-8 inline-flex items-center rounded-lg bg-primary-600 px-8 py-4 text-lg font-medium text-white shadow transition hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800"
          >
            ابدأ مشروعك
          </Link>
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
