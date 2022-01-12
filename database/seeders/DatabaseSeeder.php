<?php

namespace Database\Seeders;

use App\Models\Idea;
use App\Models\Category;
use App\Models\User;
use App\Models\Vote;
use App\Models\Status;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        
        User::factory(20)->create();
        
        Category::factory()->create(['name' => 'Kultura']);
        Category::factory()->create(['name' => 'Sport']);
        Category::factory()->create(['name' => 'Infrastruktura']);
        Category::factory()->create(['name' => 'Zdrowie']);

        Status::factory()->create(['name' => 'Nowy']);
        Status::factory()->create(['name' => 'Rozważane']);
        Status::factory()->create(['name' => 'W realizacji']);
        Status::factory()->create(['name' => 'Zrealizowane']);
        Status::factory()->create(['name' => 'Odrzucone']);
        
        Idea::factory(100)->create();

        // Generowanie unikalnych głosów - na pewno dałoby się to zrobić krócej, ale poległem - a obecne rozwiązanie działa jak należy. Kombinowałem z pętlą for, ale bez satysfakcjonującego efektu. Poniższy sposób pozwala zachować kontrolę nad rozłożeniem głosów - więcej jest pomysłów z 1, 2, 3, 4 głosów, niż z 19, czy 20.

        // $k = 11;
        // $m = 20;
        // for ($i=1; $i <= 5; $i++) {
        //     foreach (range(1, $i) as $user_id) {
        //         foreach (range($k, $m) as $idea_id) {
        //             Vote::factory()->create([
        //                 'user_id' => $user_id,
        //                 'idea_id' => $idea_id,
        //                 ]);
        //         }
        //         $k += 10;
        //         $m += 10;
        //     }
        // }

        foreach (range(1, 1) as $user_id) {
            foreach (range(1, 8) as $idea_id) {
                if ($idea_id % 2 === 0) {
                    Vote::factory()->create([
                        'user_id' => $user_id,
                        'idea_id' => $idea_id,
                    ]);
                }
            }
        }
        foreach (range(1, 2) as $user_id) {
            foreach (range(9, 16) as $idea_id) {
                if ($idea_id % 2 === 0) {
                    Vote::factory()->create([
                        'user_id' => $user_id,
                        'idea_id' => $idea_id,
                    ]);
                }
            }
        }
        foreach (range(1, 3) as $user_id) {
            foreach (range(17, 24) as $idea_id) {
                if ($idea_id % 2 === 0) {
                    Vote::factory()->create([
                        'user_id' => $user_id,
                        'idea_id' => $idea_id,
                    ]);
                }
            }
        }

        foreach (range(1, 4) as $user_id) {
            foreach (range(25, 30) as $idea_id) {
                if ($idea_id % 2 === 0) {
                    Vote::factory()->create([
                        'user_id' => $user_id,
                        'idea_id' => $idea_id,
                    ]);
                }
            }
        }

        foreach (range(1, 5) as $user_id) {
            foreach (range(31, 36) as $idea_id) {
                if ($idea_id % 2 === 0) {
                    Vote::factory()->create([
                        'user_id' => $user_id,
                        'idea_id' => $idea_id,
                    ]);
                }
            }
        }

        foreach (range(1, 6) as $user_id) {
            foreach (range(37, 40) as $idea_id) {
                if ($idea_id % 2 === 0) {
                    Vote::factory()->create([
                        'user_id' => $user_id,
                        'idea_id' => $idea_id,
                    ]);
                }
            }
        }

        foreach (range(1, 7) as $user_id) {
            foreach (range(41, 44) as $idea_id) {
                if ($idea_id % 2 === 0) {
                    Vote::factory()->create([
                        'user_id' => $user_id,
                        'idea_id' => $idea_id,
                    ]);
                }
            }
        }

        foreach (range(1, 8) as $user_id) {
            foreach (range(45, 50) as $idea_id) {
                if ($idea_id % 2 === 0) {
                    Vote::factory()->create([
                        'user_id' => $user_id,
                        'idea_id' => $idea_id,
                    ]);
                }
            }
        }

        foreach (range(1, 9) as $user_id) {
            foreach (range(51, 54) as $idea_id) {
                if ($idea_id % 2 === 0) {
                    Vote::factory()->create([
                        'user_id' => $user_id,
                        'idea_id' => $idea_id,
                    ]);
                }
            }
        }

        foreach (range(1, 10) as $user_id) {
            foreach (range(55, 60) as $idea_id) {
                if ($idea_id % 2 === 0) {
                    Vote::factory()->create([
                        'user_id' => $user_id,
                        'idea_id' => $idea_id,
                    ]);
                }
            }
        }

        foreach (range(1, 11) as $user_id) {
            foreach (range(61, 66) as $idea_id) {
                if ($idea_id % 2 === 0) {
                    Vote::factory()->create([
                        'user_id' => $user_id,
                        'idea_id' => $idea_id,
                    ]);
                }
            }
        }

        foreach (range(1, 12) as $user_id) {
            foreach (range(67, 72) as $idea_id) {
                if ($idea_id % 2 === 0) {
                    Vote::factory()->create([
                        'user_id' => $user_id,
                        'idea_id' => $idea_id,
                    ]);
                }
            }
        }

        foreach (range(1, 13) as $user_id) {
            foreach (range(73, 76) as $idea_id) {
                if ($idea_id % 2 === 0) {
                    Vote::factory()->create([
                        'user_id' => $user_id,
                        'idea_id' => $idea_id,
                    ]);
                }
            }
        }

        foreach (range(1, 14) as $user_id) {
            foreach (range(77, 82) as $idea_id) {
                if ($idea_id % 2 === 0) {
                    Vote::factory()->create([
                        'user_id' => $user_id,
                        'idea_id' => $idea_id,
                    ]);
                }
            }
        }

        foreach (range(1, 15) as $user_id) {
            foreach (range(83, 88) as $idea_id) {
                if ($idea_id % 2 === 0) {
                    Vote::factory()->create([
                        'user_id' => $user_id,
                        'idea_id' => $idea_id,
                    ]);
                }
            }
        }

        foreach (range(1, 16) as $user_id) {
            foreach (range(89, 92) as $idea_id) {
                if ($idea_id % 2 === 0) {
                    Vote::factory()->create([
                        'user_id' => $user_id,
                        'idea_id' => $idea_id,
                    ]);
                }
            }
        }

        foreach (range(1, 17) as $user_id) {
            foreach (range(93, 94) as $idea_id) {
                if ($idea_id % 2 === 0) {
                    Vote::factory()->create([
                        'user_id' => $user_id,
                        'idea_id' => $idea_id,
                    ]);
                }
            }
        }

        foreach (range(1, 18) as $user_id) {
            foreach (range(95, 96) as $idea_id) {
                if ($idea_id % 2 === 0) {
                    Vote::factory()->create([
                        'user_id' => $user_id,
                        'idea_id' => $idea_id,
                    ]);
                }
            }
        }

        foreach (range(1, 19) as $user_id) {
            foreach (range(97, 98) as $idea_id) {
                if ($idea_id % 2 === 0) {
                    Vote::factory()->create([
                        'user_id' => $user_id,
                        'idea_id' => $idea_id,
                    ]);
                }
            }
        }

        foreach (range(1, 20) as $user_id) {
            foreach (range(99, 100) as $idea_id) {
                if ($idea_id % 2 === 0) {
                    Vote::factory()->create([
                        'user_id' => $user_id,
                        'idea_id' => $idea_id,
                    ]);
                }
            }
        }
    }
}
