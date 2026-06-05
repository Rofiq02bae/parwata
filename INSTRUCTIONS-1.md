# AI Agent Instructions: Revamp Login & Register Pages

## Context & Project Background
We are building a Web Application for a Computer Store named **"TECH-FIX"**. This platform is used by customers to register accounts and submit **laptop repair/service tickets**, as well as monitor the repair progress in real-time.

## Objective
Refactor and redesign the Authentication Pages (`login.blade.php` and `register.blade.php`) using **Laravel Blade** and **Tailwind CSS**. The core goal is to prevent form fatigue (overly long vertical layouts) by adopting a modern 60:40 split-screen layout inspired by iLovePDF's design system.

---

## Technical Architecture Requirements

1. **Modular Code (Blade Partials):**
   - Extract all input fields into a single partial file: `resources/views/auth/partials/fields.blade.php`.
   - This partial must be reusable for both pages if necessary, keeping the main layout files clean and DRY (Don't Repeat Yourself).
   
2. **Responsive Layout Strategy:**
   - **Desktop View (Medium screens and up):** Split-screen layout using a 5-column grid (`grid-cols-5`).
     - **Left Side (60% / 3 Columns):** Contains the actual Form (Logo, Header, Social Buttons, Input Fields, and Submit Button).
     - **Right Side (40% / 2 Columns):** Contains a stylized marketing/educational visual banner with smooth hover animations.
   - **Mobile View:** The right visual side must be hidden (`hidden md:flex`). The form on the left must scale gracefully to full width.

3. **UX Optimization (Anti-Vertical Fatigue):**
   - Do not stack every field vertically on desktop. Use `grid grid-cols-1 sm:grid-cols-2 gap-4` inside the fields partial so related inputs (like Password & Confirm Password) sit side-by-side horizontally.
   - Use clean, minimal designs with placeholders inside the inputs instead of heavy top-aligned labels to save vertical screen real estate.

---

## File Implementation Blueprint

### 1. Input Fields Partial
Create or update `resources/views/auth/partials/fields.blade.php`. It must contain the following fields with proper Tailwind styling, `old()` value retainers, and Blade `@error` directives:
- **Full Name** (Full width)
- **Email Address** (Full width)
- **Password** & **Confirm Password** (Side-by-side grid on desktop)
- **Phone Number** (Full width, placeholder example: 08123...)
- **Complete Address** (Textarea, 2 rows)

### 2. Register Page Layout
Update `resources/views/auth/register.blade.php`:
- Implement the `grid-cols-5` layout.
- **Left Column (60%):** - Brand Logo: `💻 TECH-FIX` (Blue color theme).
  - Title: "Create new account" & Subtitle: "Register to submit laptop service tickets".
  - Social Logins: Facebook and Google buttons placed inline/horizontally.
  - Form tag fetching the `@include('auth.partials.fields')`.
  - Submit Button: A prominent solid red button (`bg-red-600`) labeled **"Sign up"**.
- **Right Column (40%):**
  - Background color: Off-white/slate-50 (`bg-slate-50`).
  - Centered vector/SVG illustration of a laptop or repair icon.
  - Apply Tailwind `group` on parent and `group-hover:-translate-y-2 transition-transform` on the illustration for a interactive hover effect.
  - Text: "Laptop rusak & mengganggu kerja?" with brief copy about how TECH-FIX tracks repairs transparently.

### 3. Login Page Layout
Update `resources/views/auth/login.blade.php`:
- Follow the exact same 60:40 split-screen architecture.
- Adjust the form to only include **Email** and **Password** fields, a "Remember Me" checkbox, and a solid red **"Log in"** submit button.
- Modify the right column's marketing copy to focus on returning users (e.g., "Check your laptop repair status instantly").

---

## Expected Output Quality
- Code must be clean, readable, and strictly standard Laravel Blade syntax.
- All Tailwind classes must prioritize native responsiveness without requiring custom CSS files.
- Form inputs must maintain full usability on standard mobile viewports.