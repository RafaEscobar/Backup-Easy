<?php

namespace Database\Seeders;

use App\Models\NotificationType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NotificationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NotificationType::create(['notification_type' => 'promotion']); // Discount promotions
        NotificationType::create(['notification_type' => 'info_general']); // Any general information
        NotificationType::create(['notification_type' => 'storage']); // Storage limit reached, soon less storage
        NotificationType::create(['notification_type' => 'news']); // Updates from the system
    }
}
