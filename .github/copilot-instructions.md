# Copilot Instructions for 09222025-LOGIN-FORM

## Project Overview
This is a simple login form web application. The main code is in `graphics/index.php`, which contains the HTML structure for the login page. The project is intended for local development, likely using XAMPP on Windows.

## Architecture & Key Files
- `graphics/index.php`: Main entry point. Contains the login form and related HTML. No backend logic is present in this file.
- `graphics/style.css` and `graphics/images/favicon.png` are referenced but not present in the workspace. If you add these, follow the same directory structure.
- No JavaScript, backend PHP logic, or database integration is currently implemented.

## Developer Workflows
- **Local Development**: Place the project in your XAMPP `htdocs` directory. Access via `http://localhost/09222025-LOGIN-FORM/graphics/index.php`.
- **No Build/Test Scripts**: There are no build, test, or CI/CD scripts. All changes are made directly to source files.
- **Debugging**: Use browser developer tools for HTML/CSS debugging. No PHP server-side logic to debug yet.

## Project-Specific Conventions
- All form fields use HTML5 validation (`required`, `minlength`, `maxlength`).
- Form submission is set to POST, but no PHP code processes the form data yet.
- Commented-out sections in `index.php` show planned/optional fields and features (e.g., email, phone, payment, file upload).
- Use semantic HTML and keep form structure clear and accessible.

## Patterns & Examples
- To add new fields, follow the pattern in the commented-out section of `index.php`.
- For styling, add `style.css` in the `graphics` folder and link it in the `<head>`.
- For favicon, place `favicon.png` in `graphics/images/`.

## Integration Points
- No external dependencies or integrations are present.
- If adding backend logic, create a new PHP file (e.g., `process.php`) and update the form's `action` attribute accordingly.

## Recommendations for AI Agents
- Focus on improving the login form, adding backend logic, or enhancing UI/UX.
- Maintain the current directory structure for new assets or scripts.
- Document any new conventions or workflows in this file for future agents.

---
_Last updated: September 22, 2025_
