<template>
  <AppLayout>
    <div class="space-y-0" dir="rtl">
      <!-- هيرو: من نحن -->
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
            من نحن
          </h1>
          <p class="mx-auto mt-6 max-w-2xl text-xl leading-loose text-gray-600 dark:text-gray-300">
            شركة حلول متكاملة — شريكك التقني الموثوق في السودان والمنطقة.
          </p>
        </div>
      </section>

      <!-- رؤيتنا ورسالتنا -->
      <section class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">
        <h2 class="text-center text-3xl font-bold leading-tight text-gray-900 dark:text-white sm:text-4xl">
          رؤيتنا ورسالتنا
        </h2>
        <p class="mx-auto mt-4 max-w-2xl text-center text-lg leading-loose text-gray-600 dark:text-gray-400">
          نسعى لتحقيق التميز في كل ما نقدمه، وتمكين أعمالك بالتقنية المتقدمة.
        </p>
        <div class="mx-auto mt-12 grid max-w-4xl gap-8 sm:grid-cols-2">
          <div class="card-bg-transparent rounded-xl border border-gray-200/70 p-6 dark:border-gray-600/50">
            <h3 class="text-xl font-bold text-primary-600 dark:text-primary-400">رؤيتنا</h3>
            <p class="mt-3 text-base leading-loose text-gray-600 dark:text-gray-300">
              أن نكون الشريك الأول للتحول الرقمي في السودان والمنطقة، من خلال حلول متكاملة تجمع بين الأمان والجودة والابتكار.
            </p>
          </div>
          <div class="card-bg-transparent rounded-xl border border-gray-200/70 p-6 dark:border-gray-600/50">
            <h3 class="text-xl font-bold text-primary-600 dark:text-primary-400">رسالتنا</h3>
            <p class="mt-3 text-base leading-loose text-gray-600 dark:text-gray-300">
              تقديم خدمات تقنية عالية الجودة تدعم نمو أعمال عملائنا، مع التزام بالشفافية والموثوقية والدعم المستمر.
            </p>
          </div>
        </div>
      </section>

      <!-- قيمنا -->
      <section
        class="section-bg-transparent relative w-full overflow-hidden bg-gray-50 py-20 sm:py-24 dark:bg-black/10"
      >
        <div class="pointer-events-none absolute inset-0 dark:bg-black/10" aria-hidden="true" />
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <h2 class="text-center text-3xl font-bold leading-tight text-gray-900 dark:text-white sm:text-4xl">
            قيمنا
          </h2>
          <p class="mx-auto mt-3 max-w-2xl text-center text-lg leading-loose text-gray-600 dark:text-gray-400">
            المبادئ التي نعمل بها في كل مشروع
          </p>
          <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <div
              v-for="(value, i) in values"
              :key="i"
              class="card-bg-transparent flex flex-col rounded-xl border border-gray-200/70 p-6 dark:border-gray-600/50"
            >
              <span class="text-3xl" aria-hidden="true">{{ value.icon }}</span>
              <h3 class="mt-4 text-lg font-bold text-gray-900 dark:text-white">{{ value.title }}</h3>
              <p class="mt-2 text-base leading-loose text-gray-600 dark:text-gray-400">{{ value.desc }}</p>
            </div>
          </div>
        </div>
      </section>

      <!-- نبذة: شريكك الاستراتيجي -->
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
          <h2 class="text-center text-3xl font-bold leading-tight text-gray-900 dark:text-white sm:text-4xl">
            شريكك الاستراتيجي للتحول الرقمي
          </h2>
          <p class="mx-auto mt-8 max-w-3xl text-center text-base leading-loose text-gray-600 dark:text-gray-300 sm:text-lg">
            نحن في <strong class="text-gray-800 dark:text-gray-100">كنديا تيتي للحلول المتكاملة المحدودة</strong> نقدم منظومة تقنية متكاملة لدعم وتمكين الأعمال في السودان والمنطقة. رؤيتنا مستوحاة من ديناميكية التكنولوجيا الحديثة وآفاق الطيران، لنكون شريكك الموثوق في كل مرحلة من مراحل التحول الرقمي.
          </p>
          <div class="mt-10 text-center">
            <Link
              href="/contact"
              class="inline-flex items-center rounded-xl bg-primary-600 px-6 py-3 text-lg font-medium text-white shadow-md transition hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 dark:focus:ring-offset-gray-900"
            >
              تواصل معنا
              <span class="me-2" aria-hidden="true">←</span>
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

const values = ref([
  { icon: '🎯', title: 'الجودة', desc: 'نلتزم بأعلى معايير الجودة في التصميم والتنفيذ والدعم الفني.' },
  { icon: '🤝', title: 'الشفافية', desc: 'تواصل واضح وعروض أسعار شفافة وشراكة قائمة على الثقة.' },
  { icon: '⚡', title: 'الابتكار', desc: 'نستثمر في أحدث التقنيات والحلول لتحقيق أفضل النتائج لعملائنا.' },
  { icon: '🛡️', title: 'الموثوقية', desc: 'دعم فني متواصل وباقات صيانة تضمن استمرارية عمل أنظمتك.' },
  { icon: '🌍', title: 'التغطية', desc: 'خدمة العملاء في السودان والمنطقة بتجربة موحدة واحترافية.' },
  { icon: '📈', title: 'النمو', desc: 'نسعى ليكون نجاحك جزءاً من قصتنا وننمو معاً.' },
]);
</script>
