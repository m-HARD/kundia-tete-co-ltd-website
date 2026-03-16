<template>
  <footer
    dir="rtl"
    class="section-bg-transparent mt-auto w-full overflow-hidden border-t border-gray-200 bg-gray-50 transition-colors duration-300 dark:border-gray-600 dark:bg-gray-900/95"
  >
    <div class="pointer-events-none absolute inset-0 dark:bg-black/10" aria-hidden="true" />
    <div class="relative z-10 mx-auto w-full max-w-7xl px-4 py-12 text-gray-900 dark:text-gray-100 sm:px-6 lg:px-8">
      <!-- شبكة الأعمدة الرئيسية — تغطي كامل العرض 7xl مع توسيع المسافات بين الأعمدة -->
      <div class="grid w-full grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-4 lg:gap-x-16 lg:gap-y-10">
        <!-- العمود الأول: الشعار ومعلومات الاتصال -->
        <div class="sm:col-span-2 lg:col-span-1 lg:min-w-0">
          <Link href="/" class="inline-flex items-center gap-2">
            <LogoPlaceholder />
            <span class="text-xl font-bold">كنديا تيتي</span>
          </Link>
          <p class="mt-3 text-sm leading-relaxed text-gray-600 dark:text-gray-400">
            شركة حلول متكاملة — شريكك التقني الموثوق في السودان والمنطقة.
          </p>
          <div class="mt-4 space-y-3">
            <a href="mailto:info@kundiatete.com" class="flex items-center gap-2 text-sm text-gray-600 hover:text-primary-600 dark:text-gray-400 dark:hover:text-primary-400">
              <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-primary-500/15 text-primary-600 dark:text-primary-400" aria-hidden="true">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
              </span>
              info@kundiatete.com
            </a>
            <a href="tel:+249123456789" class="flex items-center gap-2 text-sm text-gray-600 hover:text-primary-600 dark:text-gray-400 dark:hover:text-primary-400">
              <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-primary-500/15 text-primary-600 dark:text-primary-400" aria-hidden="true">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
              </span>
              +249-XXX-XXX-XXXX
            </a>
            <p class="flex items-center gap-2 text-sm text-gray-600 dark:text-gray-400">
              <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-primary-500/15 text-primary-600 dark:text-primary-400" aria-hidden="true">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
              </span>
              الخرطوم، السودان
            </p>
          </div>
        </div>

        <!-- العمود الثاني: حلولنا وخدماتنا -->
        <div>
          <h3 class="text-base font-semibold text-gray-900 dark:text-white">حلولنا وخدماتنا</h3>
          <ul class="mt-4 space-y-2">
            <li><Link href="/services" class="text-sm text-gray-600 transition hover:text-primary-600 dark:text-gray-400 dark:hover:text-primary-400">أنظمة المراقبة والإنذار</Link></li>
            <li><Link href="/services" class="text-sm text-gray-600 transition hover:text-primary-600 dark:text-gray-400 dark:hover:text-primary-400">البنية التحتية والشبكات</Link></li>
            <li><Link href="/services" class="text-sm text-gray-600 transition hover:text-primary-600 dark:text-gray-400 dark:hover:text-primary-400">تصميم وتطوير المواقع</Link></li>
            <li><Link href="/services" class="text-sm text-gray-600 transition hover:text-primary-600 dark:text-gray-400 dark:hover:text-primary-400">البيت الذكي والتحكم</Link></li>
            <li><Link href="/services" class="text-sm text-gray-600 transition hover:text-primary-600 dark:text-gray-400 dark:hover:text-primary-400">تتبع المركبات والأسطول</Link></li>
            <li><Link href="/services" class="text-sm text-gray-600 transition hover:text-primary-600 dark:text-gray-400 dark:hover:text-primary-400">الدعاية والإعلان والمطبوعات</Link></li>
          </ul>
        </div>

        <!-- العمود الثالث: أنظمة الأعمال -->
        <div>
          <h3 class="text-base font-semibold text-gray-900 dark:text-white">أنظمة الأعمال</h3>
          <ul class="mt-4 space-y-2">
            <li><Link href="/services" class="text-sm text-gray-600 transition hover:text-primary-600 dark:text-gray-400 dark:hover:text-primary-400">الدعم الفني والصيانة</Link></li>
            <li><Link href="/services" class="text-sm text-gray-600 transition hover:text-primary-600 dark:text-gray-400 dark:hover:text-primary-400">الحلول السحابية والبنية التحتية</Link></li>
            <li><Link href="/services" class="text-sm text-gray-600 transition hover:text-primary-600 dark:text-gray-400 dark:hover:text-primary-400">أتمتة العمليات وتقنية المعلومات</Link></li>
            <li><Link href="/contact" class="text-sm text-gray-600 transition hover:text-primary-600 dark:text-gray-400 dark:hover:text-primary-400">اطلب استشارة تقنية</Link></li>
          </ul>
        </div>

        <!-- العمود الرابع: شركتنا + زر المحادثة -->
        <div>
          <h3 class="text-base font-semibold text-gray-900 dark:text-white">شركتنا</h3>
          <ul class="mt-4 space-y-2">
            <li><Link href="/about" class="text-sm text-gray-600 transition hover:text-primary-600 dark:text-gray-400 dark:hover:text-primary-400">من نحن</Link></li>
            <li><Link href="/services" class="text-sm text-gray-600 transition hover:text-primary-600 dark:text-gray-400 dark:hover:text-primary-400">خدماتنا</Link></li>
            <li><Link href="/projects" class="text-sm text-gray-600 transition hover:text-primary-600 dark:text-gray-400 dark:hover:text-primary-400">مشاريعنا</Link></li>
            <li><Link href="/contact" class="text-sm text-gray-600 transition hover:text-primary-600 dark:text-gray-400 dark:hover:text-primary-400">تواصل معنا</Link></li>
          </ul>
          <Link
            href="/contact"
            class="mt-6 inline-flex items-center justify-center gap-2 rounded-xl bg-primary-600 px-5 py-3 text-sm font-medium text-white shadow-md transition hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 dark:focus:ring-offset-gray-900"
          >
            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
            </svg>
            ابدأ محادثة
          </Link>
        </div>
      </div>

      <!-- الشريط السفلي: حقوق النشر وسياسات -->
      <div class="mt-10 flex flex-col items-center justify-between gap-4 border-t border-gray-200 pt-8 dark:border-gray-700 sm:flex-row">
        <p class="text-sm text-gray-600 dark:text-gray-400">
          © {{ currentYear }} كنديا تيتي للحلول المتكاملة المحدودة، جميع الحقوق محفوظة
        </p>
        <div class="flex flex-wrap items-center justify-center gap-6">
          <a href="#" class="text-sm text-gray-600 transition hover:text-primary-600 dark:text-gray-400 dark:hover:text-primary-400">سياسة الخصوصية</a>
          <a href="#" class="text-sm text-gray-600 transition hover:text-primary-600 dark:text-gray-400 dark:hover:text-primary-400">الشروط والأحكام</a>
        </div>
      </div>
    </div>
  </footer>
</template>

<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';
import LogoPlaceholder from '@/Components/LogoPlaceholder.vue';

defineProps({
  dark: { type: Boolean, required: true },
});

const currentYear = computed(() => new Date().getFullYear());
</script>
