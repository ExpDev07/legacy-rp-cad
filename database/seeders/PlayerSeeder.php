<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\Player;
use App\Models\Vehicle;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        // Create players.
        $players = Player::factory()->count(10)->create();

        // For each player, create a character.
        $players->each(static function (Player $player)
        {
            // Create character.
            $character = $player->characters()->save(Character::factory()->make());

            // Create three vehicles for character.
            $character->vehicles()->saveMany(Vehicle::factory()->count(3)->make());
        });
    }

}
