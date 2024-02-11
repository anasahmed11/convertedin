<?php
    namespace Tests\Feature;

    use App\Models\Admin;
    use App\Models\User;
    use Illuminate\Foundation\Testing\DatabaseTransactions;
    use Tests\TestCase;

    class StatisticsTest extends TestCase
    {
        use DatabaseTransactions;

        public function testSuccessStatistics()
        {
            $this->beginDatabaseTransaction();
            $admin = Admin::factory()->create();
            $user = User::factory()->create();
            $response = $this->post('/task/store', [
                'title' => 'task 1',
                'description' => 'desc task 1',
                'assigned_by_id' => $admin->id,
                'assigned_to_id' => $user->id,
            ]);
            //test if user task count is incremented
            $task_count = User::where('id', $user->id)->first()->task_count;
            $this->assertEquals(1, $task_count);
        }

    }
