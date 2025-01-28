# Contributing to Shopify GraphQL SDK

Thank you for considering contributing to the **Shopify GraphQL SDK**! We appreciate your help in improving this project. Whether you're reporting bugs, suggesting features, or contributing code, your efforts make this project better for everyone.

---

## Getting Started

### Fork and Clone the Repository
1. **Fork** this repository to your GitHub account.
2. **Clone** the repository to your local machine:
   ```bash
   git clone https://github.com/ghazniali95/shopify-graphql-sdk.git
   cd shopify-graphql-sdk
   ```

### Install Dependencies
- For **Node.js**:
   ```bash
   npm install
   ```
- For **PHP**:
   ```bash
   composer install
   ```

---

## Contribution Guidelines

### 🐛 Reporting Bugs
If you find a bug:
1. Navigate to the [Issues](https://github.com/ghazniali95/shopify-graphql-sdk/issues) section.
2. Click **"New Issue"** and select **"Bug Report"**.
3. Provide:
   - A clear and descriptive title.
   - Steps to reproduce the issue.
   - Expected vs actual behavior.
   - Screenshots or logs, if applicable.

---

### 💡 Suggesting Features
Have an idea for a feature? Follow these steps:
1. Open an issue with the `enhancement` label in the [Issues](https://github.com/ghazniali95/shopify-graphql-sdk/issues) section.
2. Include:
   - A detailed description of the feature.
   - How it would improve the project or solve a problem.
   - Any relevant examples or references.

---

### 🛠️ Submitting Code Changes
Follow these steps to submit a pull request (PR):

1. **Create a Branch**:
   ```bash
   git checkout -b your-branch-name
   ```
   Use a descriptive branch name (e.g., `fix-auth-bug` or `add-graphql-support`).

2. **Make Your Changes**:
   - Keep your code clean and follow the coding standards.
   - Add comments to explain complex logic if necessary.

3. **Write Tests**:
   - Add or update unit tests to cover your changes.

4. **Run Tests**:
   - Ensure all tests pass:
     - For **Node.js**:
       ```bash
       npm test
       ```
     - For **PHP**:
       ```bash
       ./vendor/bin/phpunit
       ```

5. **Commit Your Changes**:
   - Write clear and concise commit messages:
     ```bash
     git add .
     git commit -m "Fix: Short description of the fix"
     ```

6. **Push Your Branch**:
   ```bash
   git push origin your-branch-name
   ```

7. **Create a Pull Request**:
   - Go to the repository on GitHub and click **"New Pull Request"**.
   - Link the PR to any related issues.
   - Provide a detailed description of your changes.

---

## Code Style

### For Node.js
- Follow the [ESLint](https://eslint.org/) standards.
- Run the linter before committing:
   ```bash
   npm run lint
   ```

### For PHP
- Follow [PSR-12 coding standards](https://www.php-fig.org/psr/psr-12/).
- Use [PHP CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) to ensure compliance.

---

## Code of Conduct
This project follows the [Code of Conduct](./CODE_OF_CONDUCT.md). Please read it to understand how to engage respectfully with the community.

---

## 🤝 Need Help?
If you have any questions, feel free to:
- Open an issue in the [Issues](https://github.com/ghazniali95/shopify-graphql-sdk/issues) section.
- Tag a maintainer or contributor for assistance.

---

Your contributions are what make this project better. Thank you for being a part of the **Shopify API SDK** community! 🙌
