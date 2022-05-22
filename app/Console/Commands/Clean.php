<?php

namespace App\Console\Commands;

use App\Models\Option;
use App\Models\User;
use App\Models\user\Counter;
use App\Models\user\Department;
use Illuminate\Console\Command;

class Clean extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:clean';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear Everything and database Seed Proccess';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $this->call('cache:clear');
        $this->call('config:clear');
        $this->call('view:clear');
        $this->call('route:clear');
        $this->call('clear-compiled');
        $this->call('migrate:refresh');


        // creating a new Department

        $department = new Department();
        $department->name = "Insurance";
        $department->description = "Insurance Department";
        $department->save();

        $counter = new Counter();
        $counter->department_id = $department->id;
        $counter->name = "Counter 1";
        $counter->description = "Counter 1 Description";
        $counter->save();


        $department = new Department();
        $department->name = "HR";
        $department->description = "HR Department";
        $department->save();

        $counter = new Counter();
        $counter->department_id = $department->id;
        $counter->name = "Counter 2";
        $counter->description = "Counter 2 Description";
        $counter->save();

        $department = new Department();
        $department->name = "Finance";
        $department->description = "Finance Department";
        $department->save();

        $counter = new Counter();
        $counter->department_id = $department->id;
        $counter->name = "Counter 3";
        $counter->description = "Counter 3 Description";
        $counter->save();

        $department = new Department();
        $department->name = "IT";
        $department->description = "IT Department";
        $department->save();

        $counter = new Counter();
        $counter->department_id = $department->id;
        $counter->name = "Counter 4";
        $counter->description = "Counter 4 Description";
        $counter->save();

        $department = new Department();
        $department->name = "Marketing";
        $department->description = "Marketing Department";
        $department->save();

        $counter = new Counter();
        $counter->department_id = $department->id;
        $counter->name = "Counter 5";
        $counter->description = "Counter 5 Description";
        $counter->save();

        // creating a user
        $user = new User();
        $user->name = "Shakeel Ahmad";
        $user->email = "shakeel2717@gmail.com";
        $user->password = bcrypt('asdfasdf');
        $user->save();


        // website options

        $option = new Option();
        $option->name = 'token_length';
        $option->value = 0;
        $option->save();

        return 0;
    }
}
