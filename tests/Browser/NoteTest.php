<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NoteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group note
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
                    ->clickLink('Create Note')
                    ->assertPathIs('/create-note')
                    ->type('title', 'Modul 3 - Laravel Dusk')
                    ->type('description', 'Ini adalah isi dari note')
                    ->press('CREATE');

        });
    }
}
