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
        for ($i = 0; $i < 100; $i++) {

            $rdm = rand(0, 10000000);

            Task::create([
                'title' => '打掃家裡',
                'salary' => $rdm,
                'desc' => "幫忙掃個地 $rdm 分鐘",
                'enabled' => true,
            ]);
        }


    }
}
