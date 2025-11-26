<?php
function unzipFile($zipFile, $destination) {
    // Create folder if not exists
    if (!is_dir($destination)) {
        mkdir($destination, 0755, true);
    }

    $zip = new ZipArchive;

    if ($zip->open($zipFile) !== TRUE) {
        throw new Exception("Cannot open zip file: $zipFile");
    }

    $zip->extractTo($destination);
    $zip->close();

    return true;
}

// Usage
try {
    unzipFile("uploads/archive.zip", "extracted/");
    echo "Extracted!";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
