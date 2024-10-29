<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NotulensiTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_user_can_create_notulensi()
{
    $data = [
        'hari_tanggal' => '2024-10-27',
        'ruang_rapat' => 'Aula',
        'waktu' => '10:00',
        'surat_undangan' => 'Undangan Rapat',
        'tipe_rapat' => 'Regular',
    ];

    $response = $this->post('/notulensi', $data);

    $response->assertRedirect('/notulensi');
    $this->assertDatabaseHas('notulensis', $data);
}
}
