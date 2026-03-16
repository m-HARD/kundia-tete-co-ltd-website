<template>
  <AppLayout>
    <div class="space-y-0" dir="rtl">
      <!-- هيرو: مشاريعنا -->
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
            مشاريعنا
          </h1>
          <p class="mx-auto mt-6 max-w-2xl text-xl leading-loose text-gray-600 dark:text-gray-300">
            نفخر بما أنجزناه من مشاريع ناجحة لعملائنا في مختلف القطاعات.
          </p>
        </div>
      </section>

      <!-- شبكة المشاريع -->
      <section class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8">
        <h2 class="text-center text-3xl font-bold leading-tight text-gray-900 dark:text-white sm:text-4xl">
          أعمالنا الأخيرة
        </h2>
        <p class="mx-auto mt-3 max-w-2xl text-center text-lg leading-loose text-gray-600 dark:text-gray-400">
          مجموعة من المشاريع التي نفذناها لعملاء من القطاعين العام والخاص.
        </p>
        <div class="mt-14 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
          <article
            v-for="(project, i) in projects"
            :key="i"
            class="card-bg-transparent group relative flex flex-col overflow-hidden rounded-xl border border-gray-200/70 bg-linear-to-b from-gray-50 to-white transition hover:border-primary-400 dark:border-gray-600/50 dark:hover:border-primary-500/50"
          >
            <!-- صورة/مكان الصورة -->
            <div class="relative h-48 w-full overflow-hidden bg-gray-200 dark:bg-gray-700">
              <div class="absolute inset-0 flex items-center justify-center text-6xl text-gray-400 dark:text-gray-500">
                {{ project.icon }}
              </div>
            </div>
            <div class="relative flex flex-1 flex-col p-6">
              <span class="text-sm font-medium text-primary-600 dark:text-primary-400">{{ project.sector }}</span>
              <h3 class="mt-2 text-xl font-bold leading-snug text-gray-900 dark:text-white">
                {{ project.title }}
              </h3>
              <p class="mt-2 flex-1 text-base leading-loose text-gray-600 dark:text-gray-400">
                {{ project.desc }}
              </p>
              <div class="mt-4 flex flex-wrap gap-2">
                <span
                  v-for="tag in project.tags"
                  :key="tag"
                  class="rounded-full bg-primary-100 px-3 py-1 text-xs font-medium text-primary-700 dark:bg-primary-500/20 dark:text-primary-300"
                >
                  {{ tag }}
                </span>
              </div>
            </div>
          </article>
        </div>

        <!-- CTA -->
        <div class="mt-16 text-center">
          <p class="text-lg text-gray-600 dark:text-gray-400">هل لديك مشروع في بالك؟</p>
          <Link
            href="/contact"
            class="mt-4 inline-flex items-center rounded-xl bg-primary-600 px-6 py-3 text-lg font-medium text-white shadow-md transition hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 dark:focus:ring-offset-gray-900"
          >
            ناقش مشروعك معنا
            <span class="me-2" aria-hidden="true">←</span>
          </Link>
        </div>
      </section>
    </div>
  </AppLayout>
</template>

<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';

const projects = ref([
  {
    icon: '🏢',
    sector: 'قطاع حكومي',
    title: 'نظام مراقبة وإنذار متكامل',
    desc: 'تركيب وتشغيل أنظمة مراقبة مرئية وإنذار ضد الحريق والاختراق لمبنى إداري.',
    tags: ['مراقبة', 'إنذار', 'أمان'],
  },
  {
    icon: '🌐',
    sector: 'قطاع خاص',
    title: 'منصة تجارة إلكترونية',
    desc: 'تصميم وتطوير منصة بيع أونلاين مع إدارة المخزون والدفع والشحن.',
    tags: ['ويب', 'تجارة إلكترونية'],
  },
  {
    icon: '🚗',
    sector: 'نقل ولوجستيات',
    title: 'تتبع وإدارة أسطول',
    desc: 'حل تتبع مركبات مع خرائط وتقارير وتنبيهات لشركة نقل.',
    tags: ['تتبع', 'أسطول', 'GPS'],
  },
  {
    icon: '🏠',
    sector: 'عقارات',
    title: 'البيت الذكي والتحكم',
    desc: 'تركيب حلول إنارة ذكية وإنتركم وتحكم عن بُعد لمجمع سكني.',
    tags: ['ذكاء منزلي', 'إنارة', 'إنتركم'],
  },
  {
    icon: '🔌',
    sector: 'تقنية',
    title: 'بنية تحتية ومركز بيانات',
    desc: 'تصميم وتنفيذ شبكة ومركز بيانات لشركة خدمات تقنية.',
    tags: ['شبكات', 'مركز بيانات'],
  },
  {
    icon: '📢',
    sector: 'تسويق',
    title: 'هوية بصرية وحملات إعلانية',
    desc: 'تصميم هوية بصرية ومواد مطبوعة وحملات تسويق رقمي لعلامة تجارية.',
    tags: ['هوية بصرية', 'إعلان', 'SEO'],
  },
]);
</script>
