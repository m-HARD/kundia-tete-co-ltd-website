<template>
  <AppLayout>
    <div class="space-y-0" dir="rtl">
      <!-- هيرو: تواصل معنا -->
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
            تواصل معنا
          </h1>
          <p class="mx-auto mt-6 max-w-2xl text-xl leading-loose text-gray-600 dark:text-gray-300">
            نحن هنا لمساعدتك — تواصل معنا اليوم وسنرد في أقرب وقت.
          </p>
        </div>
      </section>

      <!-- معلومات الاتصال + نموذج + خريطة -->
      <section
        id="contact"
        class="section-bg-transparent relative w-full overflow-hidden bg-gray-50 py-20 sm:py-24"
      >
        <div class="pointer-events-none absolute inset-0 dark:bg-black/10" aria-hidden="true" />
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <h2 class="text-center text-3xl font-bold leading-tight text-gray-900 dark:text-white sm:text-4xl">
            نسعد بالرد
          </h2>
          <p class="mx-auto mt-3 max-w-2xl text-center text-lg leading-loose text-gray-600 dark:text-gray-400">
            اختر الطريقة المناسبة للتواصل أو أرسل رسالتك من خلال النموذج.
          </p>

          <div class="mt-14 grid gap-10 lg:grid-cols-2 lg:gap-12">
            <!-- العمود الأول: معلومات الاتصال + الخريطة -->
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
                    <a href="mailto:info@kundiatete.com" class="mt-1 text-base leading-relaxed text-gray-900 hover:text-primary-600 dark:text-gray-100 dark:hover:text-primary-400">info@kundiatete.com</a>
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

            <!-- العمود الثاني: نموذج التواصل -->
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
                <textarea id="contact-message" name="message" rows="4" placeholder="اكتب رسالتك هنا..." required class="w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-base text-gray-900 placeholder-gray-500 transition focus:border-primary-500 focus:outline-none focus:ring-2 focus:ring-primary-500/20 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-100 dark:placeholder-gray-400" />
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
    </div>
  </AppLayout>
</template>

<script setup>
import { ref } from 'vue';
import AppLayout from '@/Layouts/AppLayout.vue';

const csrfToken = ref(typeof document !== 'undefined' ? document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') ?? '' : '');
</script>
