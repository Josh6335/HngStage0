# HNG12 Stage 0 API

## Description
This API returns basic information such as:
- an email
- Current datetime (ISO 8601 format)
- GitHub URL of the project

## API Endpoint
- `GET /api/HngStage0`

### Response Format (200 OK)
```json
{
  "email": "musedikutemitope@gmail.com",
  "current_datetime": "2025-01-30T09:30:00Z",
  "github_url": "https://github.com/Josh6335/HngStage0"
}
```
**How to Run Locally**
1. Clone the repository:
   ```sh
   git clone https://github.com/Josh6335/HngStage0.git
   cd your-repo
   ```
2. run the composer
   ```sh
   composer install
    ```
4. Generate application key
    ```sh
    php artisan key:generate
    ```
5. Run the application
   ```sh
   php artisan serve
   ```
7. Visit http://127.0.0.1:8000/api/hngstage0 in your browser or use Postman.

**For more information, you can visit https://hng.tech/hire/php-developers**
