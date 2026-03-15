# كنديا تيتي المحدودة — الموقع الرسمي

موقع شركة كنديا تيتي للحلول المتكاملة المحدودة (Kundia Tete Co. Ltd).

## التقنيات

- **Laravel 12** — Backend
- **Inertia.js** — ربط Laravel مع Vue بدون API
- **Vue 3** — واجهة المستخدم
- **Tailwind CSS 4** — التصميم
- **Vite** — تجميع الأصول
- **GSAP** — الحركات (مثبت، جاهز للاستخدام لاحقاً)

## الصفحات

- الرئيسية (`/`)
- من نحن (`/about`)
- خدماتنا (`/services`)
- مشاريعنا (`/projects`)
- تواصل معنا (`/contact`)

## التشغيل المحلي

```bash
# تثبيت الاعتماديات
composer install
cp .env.example .env
php artisan key:generate

npm install
npm run build

# تشغيل الخادم
php artisan serve
```

لتطوير الواجهة مع إعادة تحميل تلقائي:

```bash
npm run dev
```

ثم في طرفية أخرى: `php artisan serve`

## المستودع

- GitHub: [m-HARD/kundia-tete-co-ltd-website](https://github.com/m-HARD/kundia-tete-co-ltd-website)

## ملاحظات

- اللغة الافتراضية: العربية (`config/app.php`: `locale => 'ar'`).
- الثيم الفاتح/الداكن: يعمل من الواجهة ويُحفظ في `localStorage`.
- الشعار: حاليًا placeholder (طائرة في دائرة) — استبداله لاحقاً بملف SVG.
