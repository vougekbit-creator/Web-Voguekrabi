# VOGUE Department Store Krabi Website

เว็บไซต์อย่างเป็นทางการของ VOGUE Department Store Krabi เพื่อให้ข้อมูลเกี่ยวกับร้านค้า ร้านอาหาร โปรโมชั่น กิจกรรม และบริการต่าง ๆ ภายในห้าง รองรับทั้งภาษาไทยและภาษาอังกฤษ

## Project Information

- Project Name: VOGUE Department Store Krabi Website
- Website Type: Department Store / Shopping Mall
- Languages: Thai (TH), English (EN) , Chinese (CH)
- Official Website: https://voguekrabi.com
- Location: Krabi, Thailand
- Cloud Environment: Cloudflare
- Cloudflare Dashboard: https://dash.cloudflare.com/823c47351d91fe4bde3c24c3472c1ebf/home
- Production Hosting: Cloudflare Pages / Workers
- Production Database: Cloudflare D1
- Local Development: XAMPP is optional for legacy PHP development only

## Overview

เว็บไซต์นี้ออกแบบเพื่อเป็นแหล่งข้อมูลหลักสำหรับผู้ใช้ทุกกลุ่ม เช่น นักท่องเที่ยว ผู้ซื้อในห้าง และผู้เยี่ยมชมเว็บไซต์ทั่วไป โดยมีเนื้อหาเกี่ยวกับ:

- Directory & Services
- Brands & Shops
- Food & Dining
- Tourist Privilege
- Promotions
- Events
- Getting Here
- About Us
- FAQ
- Contact Us

## Website Structure

```text
Home
├── Directory & Services
│   ├── Mall Directory
│   ├── Store Directory
│   ├── Mall Map
│   ├── Customer Services
│   ├── Facilities
│   └── Opening Hours
├── Brands & Shops
│   ├── Fashion
│   ├── Beauty
│   ├── Lifestyle
│   ├── Electronics
│   ├── Sports
│   └── Supermarket
├── Food
│   ├── Restaurants
│   ├── Café
│   ├── Bakery
│   ├── Dessert
│   └── Food Court
├── Tourist Privilege
│   ├── Tourist Promotions
│   ├── Coupons
│   ├── VAT Refund
│   └── Tourist Information
├── Promotions
├── Events
├── Getting Here
│   ├── Google Map
│   ├── Parking
│   ├── Public Transportation
│   └── Directions
├── About Us
├── FAQ
└── Contact Us
```

## Main Pages

### Home

- Hero Banner
- Latest Promotions
- Featured Brands
- Featured Restaurants
- Events
- Tourist Privilege
- News
- Footer

### Directory & Services

- Mall Map
- Store Directory
- Floor Guide
- Customer Service
- Parking
- ATM
- Restroom
- Baby Room
- Prayer Room
- Wheelchair Service
- Information Counter

### Brands & Shops

Display all shop information with:

- Logo
- Store Name
- Category
- Floor
- Opening Hours
- Phone Number
- Description
- Gallery

Categories:

- Fashion
- Beauty
- Lifestyle
- Electronics
- Sports
- Jewelry
- Watches
- Kids
- Home & Living
- Supermarket

### Food

- Restaurants
- Café
- Bakery
- Dessert
- Food Court
- Beverage

Store details:

- Logo
- Cover Image
- Menu
- Location
- Opening Hours
- Promotion

### Tourist Privilege

- Tourist Promotion
- Discount
- Coupon
- VAT Refund
- Passport Privilege
- Shopping Guide

### Promotions

Promotion information includes:

- Banner
- Promotion Detail
- Valid Date
- Terms & Conditions

### Events

- Upcoming Events
- Current Events
- Exhibition
- Festival

### Getting Here

- Google Maps
- Parking
- Bus
- Taxi
- Airport Route

### About Us

- Company Profile
- History
- Vision
- Mission

### FAQ

Examples:

- Opening Hours
- Parking Fee
- Pet Policy
- Lost & Found
- Payment Methods

### Contact Us

- Address
- Phone
- Email
- Facebook
- Instagram
- Line Official
- Contact Form

## Future Features

- Online Store Directory
- Smart Search
- Event Booking
- Promotion Management
- CMS
- Multi-language
- Google Maps Integration
- QR Code Navigation
- Push Notification
- Newsletter

## Recommended Technology

### Frontend

- HTML5
- CSS3
- JavaScript
- Bootstrap 5
- Cloudflare Pages

### Backend / API

- Cloudflare Workers
- Cloudflare Pages Functions (when appropriate)
- REST API / JSON
- Cloudflare environment variables and secrets

### Database

- Cloudflare D1 (serverless SQL database)
- SQL migrations for version-controlled schema changes
- Cloudflare R2 for large media/assets when needed

### CMS / Admin (Optional)

- Custom admin dashboard on Cloudflare Workers/Pages
- Headless CMS if required
- Avoid depending on a PHP/MySQL server for the Cloudflare-native production architecture

### Hosting / Infrastructure

- Cloudflare Pages
- Cloudflare Workers
- Cloudflare D1
- Cloudflare R2
- Cloudflare CDN / Edge Network
- SSL / HTTPS
- Custom domain: voguekrabi.com

> Note: The original prototype specifies PHP 8 + MySQL + XAMPP. Cloudflare Pages does not run PHP directly. For the Cloudflare-native production version, the application backend should be moved to Workers/Pages Functions and the database should be migrated to D1. Cloudflare Pages can deploy static HTML websites directly, and Workers provide serverless application logic. citeturn0search1turn0search4


## Responsive Design

Website should support:

- Desktop
- Laptop
- Tablet
- Mobile

## SEO

Recommended SEO implementation:

- Meta Title
- Meta Description
- Open Graph
- Sitemap.xml
- robots.txt
- Structured Data
- Google Analytics
- Google Search Console
- Cloudflare Web Analytics (optional)

## Cloudflare Deployment Guide

The production environment for this project is Cloudflare.

### 1. Cloudflare Account

Use the project's Cloudflare account dashboard:

https://dash.cloudflare.com/823c47351d91fe4bde3c24c3472c1ebf/home

### 2. Deploy the Website

For the current HTML/CSS/JavaScript frontend:

1. Put the project in a Git repository (recommended: GitHub).
2. Open Cloudflare Dashboard → Workers & Pages.
3. Create a Pages project.
4. Connect the Git repository or use Direct Upload.
5. Set the production branch to `main`.
6. Set the build command/output according to the project structure.
7. Deploy.

Cloudflare Pages supports static HTML sites and provides a `*.pages.dev` deployment URL. It can also automatically deploy new commits and provide preview deployments. citeturn0search1turn0search6

### 3. Backend API

Dynamic functions such as contact forms, store search, promotion management, event booking, and admin APIs should use Cloudflare Workers or Pages Functions instead of PHP on the production Cloudflare environment. Cloudflare Workers provides a serverless execution environment, while Pages Functions can add server-side functionality to a Pages project. citeturn0search4

### 4. Database

Use Cloudflare D1 for store, restaurant, promotion, event, FAQ, and other structured website data.

Recommended initial tables:

```text
stores
restaurants
categories
promotions
events
tourist_privileges
facilities
faqs
contact_messages
admins
```

D1 can be connected to Workers through bindings and supports SQL migrations for version-controlled database changes. citeturn0search5turn0search0

### 5. Images and Media

Use the website repository for small static assets and Cloudflare R2 when the project requires larger or numerous images, promotional banners, menus, or galleries.

### 6. Domain

Connect:

```text
voguekrabi.com
```

to the Cloudflare-hosted production website and enable HTTPS.

### 7. Local Development

XAMPP is no longer the required production environment.

It may still be used temporarily if existing PHP/MySQL prototype code needs to be reviewed or migrated. The target production architecture is:

```text
User
  ↓
Cloudflare DNS / CDN
  ↓
Cloudflare Pages
  ↓
Cloudflare Workers / Pages Functions
  ↓
Cloudflare D1
  ↓
Cloudflare R2 (media, when needed)
```

## Development Notes

- Use Cloudflare Workers / Pages Functions for backend logic.
- Use Cloudflare D1 for dynamic content and store data.
- Use Cloudflare R2 for large media assets when needed.
- Keep the website multilingual (Thai, English, and Chinese).
- Follow responsive design principles for all devices.
- Add clean SEO metadata for better search visibility.

## Project Goal

Create a professional and modern website for VOGUE Department Store Krabi that helps visitors discover stores, services, promotions, food options, and travel convenience information in a user-friendly layout.
