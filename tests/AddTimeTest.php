<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AddTimeTest extends TestCase
{
    protected $user;

    /**
     * create default user
     *
     */
    public function setUp()
    {
        parent::setUp();
        $this->user = factory(App\User::class)->make();
    }
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testSeeAddTimeButton()
    {
        // $this->user = factory(App\User::class)->make();

        $this->actingAs($this->user)
             ->visit('/home')
             ->see('btnAddTime')
             ->press('btnAddTime')
             ->see('')
    }
}
