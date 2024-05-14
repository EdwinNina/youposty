require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
  ],
  theme: {
    extend: {
        fontFamily: {
            'sans': ["DM Sans"]
        },
        colors: {
            'gray-title': 'rgba(35, 35, 35, 0.8)',
            'accent-bg': 'rgba(243, 70, 153, 0.06)',
            'accent-heart': 'rgba(243, 70, 153, 0.3)',
            'primary': 'rgba(0, 170, 227, 0.16)',
            'primary-dark': 'rgba(58, 112, 151, 1)',
            'primary-active': '#00aae3',
            'gray-body': 'rgba(35, 35, 35, 0.8)',
            'gray-body-opacity': 'rgba(35, 35, 35, 0.6)',
            'gray-btn': 'rgba(237, 237, 237, 1)',
            'gray-btn-hover': 'rgba(239, 239, 239, 1)',
            'steps-from-gradient': 'rgba(65, 60, 191, 0.105)',
            'steps-to-gradient': 'rgba(0, 170, 227, 0.14)',
            'orange-custom': 'rgba(255, 165, 40, 1)',
            'blue-custom': 'rgba(0, 170, 227, 0.8)',
            'purple-custom': 'rgba(74, 44, 186, 0.6)',
            'blue-custom-bg': 'rgba(0, 170, 227, 0.1)',
            'purple-custom-bg': 'rgba(74, 44, 186, 0.1)',
            'gray-subtitle': 'rgba(119, 119, 119, 1)',
            'gray-subtitle-2': 'rgba(134, 134, 134, 1)',
            'gray-button': 'rgba(106, 106, 106, 1)',
            'orange-custom-btn': 'rgba(255, 165, 40, 0.16)',
            'gray-button-slide': 'rgba(219, 224, 231, 1)',
            'gray-border-card': 'rgba(230, 230, 230, 1)',
            'center-from-gradient': 'rgba(24, 130, 214, 0.14)',
            'center-to-gradient': 'rgba(56, 76, 196, 0.2)',
            'contact-bg': 'rgba(238, 240, 244, 1)',
            'contact-form-bg': 'rgba(255, 255, 255, 0.6)',
            'contact-link-bg': 'rgba(236, 235, 238, 1)',
            'avatar-bg': 'rgba(217, 217, 217, 1)',
            'gray-avatar-opacity': 'rgba(35, 35, 35, 0.1)',
            'profile-blue-bg': 'rgba(237, 246, 249, 1)',
            'plan-from-gradient': 'rgba(0, 170, 227, 0.2)',
            'plan-to-gradient': 'rgba(74, 44, 186, 0.2)',
            'alert-from-gradient': 'rgba(74, 44, 186, 0.15)',
            'alert-to-gradient': 'rgba(0, 170, 227, 0.25)',
        }
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('tailwind-scrollbar-hide')
  ],
}

