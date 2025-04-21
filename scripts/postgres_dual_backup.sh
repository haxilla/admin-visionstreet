#!/bin/bash
set -euo pipefail

# ─────────────────────────────────────────────
# CONFIGURATION
# ─────────────────────────────────────────────
ROOT_DIR="/var/www/html/larasites/admin-visionstreet"
RESTORE_DIR="$ROOT_DIR/backups/postgres/restore"
EXPORT_DIR="$ROOT_DIR/backups/postgres/export"
TIMESTAMP=$(date +%F_%H-%M)

EXPORT_FILE="$EXPORT_DIR/adminvision_$TIMESTAMP.sql"
RESTORE_FILE="$RESTORE_DIR/pgdata_$TIMESTAMP.tar.gz"

# ─────────────────────────────────────────────
# PREPARE FOLDERS
# ─────────────────────────────────────────────
echo "📁 Creating backup folders if missing..."
mkdir -p "$EXPORT_DIR" "$RESTORE_DIR"
chmod 770 "$EXPORT_DIR" "$RESTORE_DIR"

# ─────────────────────────────────────────────
# EXPORT POSTGRES DATABASE
# ─────────────────────────────────────────────
echo "📤 Exporting SQL backup..."
docker exec -t admin_visionstreet_db pg_dump -U postgres adminvision > "$EXPORT_FILE"

# ─────────────────────────────────────────────
# SNAPSHOT POSTGRES VOLUME
# ─────────────────────────────────────────────
echo "📦 Creating volume snapshot..."
docker run --rm \
  -v adminvision_pgdata:/volume \
  -v "$RESTORE_DIR":/backup \
  busybox \
  tar czf "/backup/pgdata_$TIMESTAMP.tar.gz" -C /volume .

# ─────────────────────────────────────────────
# FIX FILE OWNERSHIP & PERMISSIONS
# ─────────────────────────────────────────────
echo "🔒 Fixing file permissions..."
sudo chown $(whoami):jammy "$EXPORT_FILE" "$RESTORE_FILE"
chmod 660 "$EXPORT_FILE" "$RESTORE_FILE"

# ─────────────────────────────────────────────
# GIT: COMMIT & PUSH TO BACKUPS BRANCH
# ─────────────────────────────────────────────
echo "🚀 Committing backups to Git (branch: backups)..."
cd "$ROOT_DIR"

# Start from main as a known base
git checkout main || { echo "❌ Failed to switch to main"; exit 1; }

# Create or switch to backups branch
if ! git rev-parse --verify backups >/dev/null 2>&1; then
  echo "🆕 Creating 'backups' branch from main..."
  git checkout -b backups || { echo "❌ Failed to create backups branch"; exit 1; }
else
  git checkout backups || { echo "❌ Failed to switch to backups branch"; exit 1; }
fi

# Add only postgres backup files
git add backups/postgres/

# Commit if needed
git commit -m "Backup created at $TIMESTAMP" 2>/dev/null || echo "🟡 No new backup changes to commit"

# Push to GitHub
git push origin backups || echo "⚠️ Git push failed. Please check remote or resolve manually."

# Return to main
git checkout main || echo "🟡 Warning: could not switch back to main"

echo "✅ Backup process complete."
echo "   - SQL export:   $EXPORT_FILE"
echo "   - Volume image: $RESTORE_FILE"
