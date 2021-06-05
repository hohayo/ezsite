<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 刪除己有的資料
        Task::truncate();

        // 生成新生的資料
        Task::factory()->times(100)->create(); // 生成 100 筆資料並寫入資料庫
    }
}
