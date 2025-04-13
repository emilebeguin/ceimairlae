# Ceimairlae - Wedding WordPress Theme

A custom WordPress theme created for Emile and Ciara's wedding website. This elegant, responsive theme features a bilingual interface, RSVP functionality, and a gallery showcasing precious moments.

![Wedding Website Preview](https://github.com/emilebeguin/ceimairlae/raw/main/screenshot.png)

## 🎉 Features

- **Multilingual Support**: Switch seamlessly between English and French
- **RSVP System**: Allow guests to confirm their attendance
- **Photo Gallery**: Display wedding moments in an elegant layout
- **Venue Information**: Interactive maps and location details
- **Accommodation Options**: Help guests find places to stay
- **Mobile-Friendly Design**: Perfect viewing experience on all devices

## 📦 Installation

1. Download the theme zip file or clone this repository:
   ```
   git clone https://github.com/emilebeguin/ceimairlae.git
   ```
2. Upload to your WordPress site through the admin dashboard (Appearance > Themes > Add New > Upload Theme)
   - OR copy the theme folder to your WordPress installation: `/wp-content/themes/`
3. Activate the theme through the WordPress admin panel

## 🛠️ Configuration

### Homepage Setup
1. Create a new page and set it as your front page in Settings > Reading
2. Use the provided templates for key wedding pages (Schedule, RSVP, etc.)

### RSVP Form Setup
1. Install the required Contact Form 7 plugin
2. Configure the form using the template in `/templates/rsvp-form.php`

### Translation
1. Edit language files in the `/languages` directory to customize text
2. Use the language switcher widget in a sidebar or menu

## 🧰 Technical Details

- **WordPress Version**: 5.8+
- **PHP Version**: 7.4+
- **Key Dependencies**:
  - Contact Form 7 (for RSVP functionality)
  - Jetpack (for gallery features)

## 🏗️ Theme Structure

```
ceimairlae/
├── assets/
│   ├── css/
│   ├── js/
│   └── images/
├── inc/
│   ├── template-functions.php
│   ├── customizer.php
│   └── rsvp-functions.php
├── languages/
├── template-parts/
│   ├── content-page.php
│   ├── gallery.php
│   └── rsvp.php
├── functions.php
├── index.php
├── style.css
└── README.md
```

## 🎨 Customization

To customize this theme for your own wedding:

1. Update colors and fonts in `style.css`
2. Replace images in `assets/images/`
3. Modify the content blocks in `template-parts/`
4. Update venue and schedule information in the respective templates

## 👥 Credits

- Design & Development: Emile Beguin
- Icons: [Font Awesome](https://fontawesome.com/)
- Fonts: [Google Fonts](https://fonts.google.com/)

## 📄 License

This theme is released under the [MIT License](LICENSE.md).

## 🔗 Demo

Visit our wedding website at [https://emileciara2022.eu/](https://emileciara2022.eu/) to see the theme in action.