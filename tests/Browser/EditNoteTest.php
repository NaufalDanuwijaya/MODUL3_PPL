<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditNoteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group editnote
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
                    ->clickLink('Edit')
                    ->assertPathIs('/edit-note-page/3')
                    ->type('title', 'Modul 3 - Laravel Dusk (Edit)')
                    ->type('description', 'Ini adalah isi dari note (Edit)')
                    ->press('UPDATE');
        });
    }
}
