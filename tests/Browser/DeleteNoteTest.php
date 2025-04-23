<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DeleteNoteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group deletenote
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Modul 3')
                    ->clickLink('Log in')
                    ->assertPathIs('/login')
                    ->type('email', 'danuwijayanaufal@gmail.com')
                    ->type('password', 'naufal123')
                    ->press('LOG IN')
                    ->clickLink('Notes')
                    ->assertPathIs('/notes')
                    ->press('Delete');
        });
    }
}
