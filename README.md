# Kamran Zafar — Portfolio

Dependency-free, multi-page portfolio. Serve the repository root with any static web server.

## Run locally

Open the repository in VS Code, open **Terminal → New Terminal**, and run:

```powershell
python -m http.server 4173
```

Then open `http://localhost:4173/`. You can also use the VS Code Live Server extension. Do not rely on double-clicking `index.html`; a local server correctly handles all page routes.

## Web3Forms

1. Copy `assets/config.example.js` to `assets/config.js`.
2. Set `window.WEB3FORMS_ACCESS_KEY` to the value of your `WEB3FORMS_ACCESS_KEY`.
3. Keep `assets/config.js` private; it is ignored by Git. Restrict the key to the deployed domain in Web3Forms.

No PHP, SMTP server, or Node backend is required.

## Deploy to GitHub Pages

The included `.github/workflows/pages.yml` deploys the site on every push to `main` and safely creates the Web3Forms configuration from a repository secret.

1. On GitHub, open **Settings → Secrets and variables → Actions**.
2. Create a repository secret named `WEB3FORMS_ACCESS_KEY` with your Web3Forms access key.
3. Open **Settings → Pages** and choose **GitHub Actions** as the source.
4. Commit and push the project to `main`.
5. Watch the **Actions** tab. The expected project URL is `https://kamranzafar4343.github.io/portfolio_kz/`.

The paths automatically work both at `/` locally and under GitHub Pages' `/portfolio_kz/` project path.

## Certificates

Place optimized certificate images in `uploads/certificates/`, then add their real metadata to the `certificates` array in `assets/data.js`. The gallery and lightweight native-dialog preview are already implemented.
