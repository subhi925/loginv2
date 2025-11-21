
# loginv2

✅ **Done** ✅

Small PHP demo showing JWT-based login (functional demo).

## Status
- ✅ Completed: basic login, JWT token stored in secure cookie, login → welcome → logout flow
- ⚠️ Not production-secure — improve before public deployment

## Languages & Tech
- 🐘 PHP
- 🐬 MySQL
- 📦 Composer
- 🔒 Firebase JWT (firebase/php-jwt)
- 🎨 Bootstrap (CDN)
- 🔧 Git

## Quick start
1. Install dependencies:
   ```sh
   composer install
   ```
2. Configure database in `index.php` (DSN, username, password).
3. Start XAMPP and open:
   ```
   http://localhost/loginv2/index.php
   ```

## Database structure

SQL to create the `users` table used by this project:

```sql
CREATE TABLE `users` (
  `user_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_email` VARCHAR(64) NOT NULL,
  `user_password` VARCHAR(256) NOT NULL,
  `user_name` VARCHAR(256) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `uniq_user_email` (`user_email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
```

Example insert (for local testing only — use hashed passwords in real apps):
```sql
INSERT INTO `users` (`user_email`, `user_password`, `user_name`)
VALUES ('test@example.com', 'password123', 'Test User');
```

## Notes
- Functional demo: usable for local testing and learning.
- Recommended improvements before production:
  - Use password_hash() / password_verify()
  - Enforce prepared statements everywhere
  - Store JWT secret securely (env/config, not in code)
  - Serve over HTTPS and set proper cookie flags
 
## Quick start
1. Install dependencies:
   ```sh
   composer install
   ```
2. Configure database in `index.php` (DSN, username, password).
3. Start XAMPP and open:
   ```
   http://localhost/loginv2/index.php
   ```

## Database structure

SQL to create the `users` table used by this project:

```sql
CREATE TABLE `users` (
  `user_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_email` VARCHAR(64) NOT NULL,
  `user_password` VARCHAR(256) NOT NULL,
  `user_name` VARCHAR(256) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `uniq_user_email` (`user_email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
```

Example insert (for local testing only — use hashed passwords in real apps):
```sql
INSERT INTO `users` (`user_email`, `user_password`, `user_name`)
VALUES ('test@example.com', 'password123', 'Test User');
```

