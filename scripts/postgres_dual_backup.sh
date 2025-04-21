#!/bin/bash
set -euo pipefail

# Base project path
ROOT_DIR="/var/www/html/larasites/admin-visionstreet"
RESTORE_DIR="$ROOT_DIR/backups/postgres/restore"
EXPORT_DIR="$ROOT_DIR/backups/postgres/export"
TIMESTAMP=$(date +%F_%H-%M)

# File names
EXPORT_FILE="$EXPORT_DIR/adminvision_$TIMESTAMP.sql"
RESTORE_FILE="$RESTORE_DIR/pgdata_$TIMESTAMP.tar.gz"

echo "🔧 Ensuring backup directories exist..."
mkdir -p "$EXPORT_DIR"
mkdir -p "$RESTORE_DIR"

# Set permissions on folders to allow jammy and www-data full access
chmod 770 "$EXPORT_DIR" "$RESTORE_DIR"

echo "📤 Exporting database as SQL..."
if ! docker exec -t admin_visionstreet_db pg_dump -U postgres adminvision > "$EXPORT_FILE"; then
  echo "❌ SQL export failed!"
  exit 1
fi

echo "🗃 Creating restore snapshot (volume archive)..."
if ! docker run --rm \
  -v adminvision_pgdata:/volume \
  -v "$RESTORE_DIR":/backup \
  busybox \
  tar czf "/backup/pgdata_$TIMESTAMP.tar.gz" -C /volume .; then
  echo "❌ Volume snapshot failed!"
  exit 1
fi

# Fix ownership and permissions for both backup files
echo "🛡 Setting ownership and secure permissions..."
sudo chown $(whoami):jammy "$EXPORT_FILE" "$RESTORE_FILE"
chmod 660 "$EXPORT_FILE" "$RESTORE_FILE"

echo "✅ Backups complete:"
echo " - Export:  $EXPORT_FILE"
echo " - Restore: $RESTORE_FILE"
