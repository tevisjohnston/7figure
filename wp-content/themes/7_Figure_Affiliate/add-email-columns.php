<?php
/**
 * One-Time Database Migration Script
 * Adds email tracking columns to wp_lead_magnet_subscribers table
 *
 * Access at: http://7figure.affiliatemarketconnect.com/wp-content/themes/7_Figure_Affiliate/add-email-columns.php
 *
 * DELETE THIS FILE AFTER RUNNING SUCCESSFULLY
 */

// Load WordPress
require_once('../../../wp-load.php');

// Security check
if (!current_user_can('manage_options')) {
    wp_die('Access denied. Please log in as an administrator.');
}

global $wpdb;
$table_name = $wpdb->prefix . 'lead_magnet_subscribers';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Database Migration - Add Email Columns</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background: #f5f5f5; }
        .container { max-width: 800px; margin: 0 auto; background: white; padding: 30px; border-radius: 5px; }
        h1 { color: #333; border-bottom: 3px solid #f59e0b; padding-bottom: 10px; }
        .success { background: #d1fae5; border: 2px solid #10b981; padding: 15px; border-radius: 5px; color: #065f46; }
        .error { background: #fee2e2; border: 2px solid #ef4444; padding: 15px; border-radius: 5px; color: #991b1b; }
        .warning { background: #fef3c7; border: 2px solid #f59e0b; padding: 15px; border-radius: 5px; color: #92400e; }
        .info { background: #dbeafe; border: 2px solid #3b82f6; padding: 15px; border-radius: 5px; color: #1e40af; }
        .code { background: #f3f4f6; padding: 15px; border-radius: 5px; font-family: monospace; margin: 15px 0; }
        button { background: #0284c7; color: white; padding: 12px 24px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; }
        button:hover { background: #0369a1; }
        .danger-btn { background: #ef4444; }
        .danger-btn:hover { background: #dc2626; }
        ul { line-height: 1.8; }
    </style>
</head>
<body>
    <div class="container">
        <h1>🔧 Database Migration: Add Email Tracking Columns</h1>

        <?php
        // Check if form was submitted
        if (isset($_POST['run_migration'])) {
            echo "<h2>Migration Results</h2>";

            // First, check if table exists
            $table_exists = $wpdb->get_var("SHOW TABLES LIKE '$table_name'") === $table_name;

            if (!$table_exists) {
                echo "<div class='error'>";
                echo "<strong>❌ Error:</strong> Table <code>$table_name</code> does not exist!<br>";
                echo "Please create the table first before running this migration.";
                echo "</div>";
            } else {
                // Check current table structure
                $columns = $wpdb->get_results("SHOW COLUMNS FROM $table_name");
                $column_names = array_column($columns, 'Field');

                // Check which columns need to be added
                $columns_to_add = [];
                if (!in_array('day_3_sent', $column_names)) $columns_to_add[] = 'day_3_sent';
                if (!in_array('day_3_sent_at', $column_names)) $columns_to_add[] = 'day_3_sent_at';
                if (!in_array('day_7_sent', $column_names)) $columns_to_add[] = 'day_7_sent';
                if (!in_array('day_7_sent_at', $column_names)) $columns_to_add[] = 'day_7_sent_at';

                if (empty($columns_to_add)) {
                    echo "<div class='warning'>";
                    echo "<strong>⚠️ Already Migrated:</strong> All columns already exist in the table!<br>";
                    echo "No changes needed. You can safely delete this file.";
                    echo "</div>";
                } else {
                    // Run the ALTER TABLE query
                    $sql = "ALTER TABLE $table_name
                        ADD COLUMN day_3_sent TINYINT(1) DEFAULT 0,
                        ADD COLUMN day_3_sent_at DATETIME NULL,
                        ADD COLUMN day_7_sent TINYINT(1) DEFAULT 0,
                        ADD COLUMN day_7_sent_at DATETIME NULL";

                    $result = $wpdb->query($sql);

                    if ($result !== false) {
                        echo "<div class='success'>";
                        echo "<strong>✅ Success!</strong> Email tracking columns have been added successfully.<br><br>";
                        echo "<strong>Columns added:</strong>";
                        echo "<ul>";
                        echo "<li><code>day_3_sent</code> - TINYINT(1) DEFAULT 0</li>";
                        echo "<li><code>day_3_sent_at</code> - DATETIME NULL</li>";
                        echo "<li><code>day_7_sent</code> - TINYINT(1) DEFAULT 0</li>";
                        echo "<li><code>day_7_sent_at</code> - DATETIME NULL</li>";
                        echo "</ul>";
                        echo "<strong>⚠️ IMPORTANT:</strong> Delete this file (<code>add-email-columns.php</code>) now that the migration is complete.";
                        echo "</div>";

                        // Show updated table structure
                        echo "<h3>Updated Table Structure</h3>";
                        $updated_columns = $wpdb->get_results("SHOW COLUMNS FROM $table_name");
                        echo "<div class='code'>";
                        echo "<table style='width: 100%;'>";
                        echo "<tr style='background: #e5e7eb;'><th style='text-align: left; padding: 8px;'>Field</th><th style='text-align: left; padding: 8px;'>Type</th><th style='text-align: left; padding: 8px;'>Null</th><th style='text-align: left; padding: 8px;'>Default</th></tr>";
                        foreach ($updated_columns as $col) {
                            $highlight = in_array($col->Field, ['day_3_sent', 'day_3_sent_at', 'day_7_sent', 'day_7_sent_at']) ? 'background: #fef3c7;' : '';
                            echo "<tr style='$highlight'>";
                            echo "<td style='padding: 6px;'>" . esc_html($col->Field) . "</td>";
                            echo "<td style='padding: 6px;'>" . esc_html($col->Type) . "</td>";
                            echo "<td style='padding: 6px;'>" . esc_html($col->Null) . "</td>";
                            echo "<td style='padding: 6px;'>" . esc_html($col->Default ?? 'NULL') . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        echo "</div>";
                    } else {
                        echo "<div class='error'>";
                        echo "<strong>❌ Error:</strong> Failed to add columns.<br>";
                        echo "<strong>Error message:</strong> " . $wpdb->last_error;
                        echo "</div>";
                    }
                }
            }
        } else {
            // Show migration information and confirmation
            ?>
            <div class="info">
                <strong>📋 Migration Details</strong><br><br>
                This script will add the following columns to <code><?php echo esc_html($table_name); ?></code>:
                <ul>
                    <li><code>day_3_sent</code> - TINYINT(1) DEFAULT 0</li>
                    <li><code>day_3_sent_at</code> - DATETIME NULL</li>
                    <li><code>day_7_sent</code> - TINYINT(1) DEFAULT 0</li>
                    <li><code>day_7_sent_at</code> - DATETIME NULL</li>
                </ul>
            </div>

            <h3>Current Table Structure</h3>
            <?php
            // Check if table exists first
            $table_exists = $wpdb->get_var("SHOW TABLES LIKE '$table_name'") === $table_name;

            if ($table_exists) {
                $columns = $wpdb->get_results("SHOW COLUMNS FROM $table_name");
                echo "<div class='code'>";
                echo "<table style='width: 100%;'>";
                echo "<tr style='background: #e5e7eb;'><th style='text-align: left; padding: 8px;'>Field</th><th style='text-align: left; padding: 8px;'>Type</th><th style='text-align: left; padding: 8px;'>Null</th><th style='text-align: left; padding: 8px;'>Default</th></tr>";
                foreach ($columns as $col) {
                    echo "<tr>";
                    echo "<td style='padding: 6px;'>" . esc_html($col->Field) . "</td>";
                    echo "<td style='padding: 6px;'>" . esc_html($col->Type) . "</td>";
                    echo "<td style='padding: 6px;'>" . esc_html($col->Null) . "</td>";
                    echo "<td style='padding: 6px;'>" . esc_html($col->Default ?? 'NULL') . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                echo "</div>";

                // Check if columns already exist
                $column_names = array_column($columns, 'Field');
                $already_exists = in_array('day_3_sent', $column_names);

                if ($already_exists) {
                    echo "<div class='warning' style='margin-top: 20px;'>";
                    echo "<strong>⚠️ Warning:</strong> It appears some or all of these columns may already exist. Running the migration will show you the current status.";
                    echo "</div>";
                }
            } else {
                echo "<div class='error'>";
                echo "<strong>❌ Error:</strong> Table <code>$table_name</code> does not exist!";
                echo "</div>";
            }
            ?>

            <form method="POST" style="margin-top: 30px;">
                <button type="submit" name="run_migration" class="danger-btn">
                    🚀 Run Migration
                </button>
            </form>

            <div class="warning" style="margin-top: 20px;">
                <strong>⚠️ Remember:</strong> Delete this file after successfully running the migration.
            </div>
            <?php
        }
        ?>

    </div>
</body>
</html>
