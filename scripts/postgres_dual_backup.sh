#!/bin/bash

# Paths
ROOT_DIR="/var/www/html/larasites/admin_visionstreet"
RESTORE_DIR="$ROOT_DIR/backups/postgres/restore"
EXPORT_DIR="$ROOT_DIR/backups/postgres/export"
TIMESTAMP=$(date +%F_%H-%M)

# File names
EXPORT_FILE="$EXPORT_DIR/adminvision_$TIMESTAMP.sql"
RESTORE_FILE="$RESTORE_DIR/pgdata_$TIMESTAMP.tar.gz"

# Make sure folders exist
mkdir -p "$EXPORT_DIR"
mkdir -p "$RESTORE_DIR"

# 1. Export as SQL dump
echo "📤 Exporting database as SQL..."
docker exec -t admin_visionstreet_db \
  pg_dump -U postgres adminvision > "$EXPORT_FILE"

# 2. Snapshot the volume
echo "🗃 Creating restore snapshot..."
docker run --rm \
  -v adminvision_pgdata:/volume \
  -v "$RESTORE_DIR":/backup \
  alpine \
  tar czf "/backup/pgdata_$TIMESTAMP.tar.gz" -C /volume .

# 3. Confirm output
echo "✅ Backups created:"
echo " - SQL Export:  $EXPORT_FILE"
echo " - Restore Image: $RESTORE_FILE"