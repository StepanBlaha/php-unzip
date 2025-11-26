# PHP Zip Extractor

A small PHP helper for extracting `.zip` archives on the server using the built-in `ZipArchive` class.  
Includes:

- Basic unzip function
- More robust version that creates the destination folder if missing
- Optional *secure* version that checks for directory traversal (zip-slip) attacks

---

## Requirements

- PHP 7.4+ (or newer)
- `ZipArchive` extension enabled  
  - Usually enabled by default  
  - If not, enable it in `php.ini` (for example: `extension=zip`)

---

## Files

- `unzip.php` – contains functions for extracting zip files:
  - `unzipFile($zipFile, $destination)`
  - `secureUnzip($zipFile, $destination)` (optional, more secure)

---

## Usage (Basic)

### 1. Include the file

```php
<?php
require_once 'unzip.php';

unzipFile("path/to/zip.zip", "path/to/destination");
