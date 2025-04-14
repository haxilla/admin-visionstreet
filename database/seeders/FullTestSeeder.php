use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Project;

class FullTestSeeder extends Seeder
{
    public function run()
    {
        // Create projects
        $projects = [
            'visionstreet',
            'realtyemails',
            'seo',
            'wordpress'
        ];

        foreach ($projects as $name) {
            Project::firstOrCreate(['name' => $name]);
        }

        // Super user
        $super = User::create([
            'name' => 'Super User',
            'email' => 'super@example.com',
            'password' => Hash::make('password'),
            'role' => 'super',
        ]);

        // Admins
        $admin1 = User::create([
            'name' => 'Admin One',
            'email' => 'admin1@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);
        $admin1->projects()->attach(Project::where('name', 'visionstreet')->first());

        $admin2 = User::create([
            'name' => 'Admin Two',
            'email' => 'admin2@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);
        $admin2->projects()->attach(Project::where('name', 'realtyemails')->first());

        // Members
        $member1 = User::create([
            'name' => 'Member One',
            'email' => 'member1@example.com',
            'password' => Hash::make('password'),
            'role' => 'member',
        ]);
        $member1->projects()->attach(Project::where('name', 'seo')->first());

        $member2 = User::create([
            'name' => 'Member Two',
            'email' => 'member2@example.com',
            'password' => Hash::make('password'),
            'role' => 'member',
        ]);
        $member2->projects()->attach([
            Project::where('name', 'wordpress')->first()->id,
            Project::where('name', 'visionstreet')->first()->id,
        ]);
    }
}
