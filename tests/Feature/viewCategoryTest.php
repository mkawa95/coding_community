<?php

namespace Tests\Feature;

use App\Models\Category;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use App\Models\User;

class viewCategoryTest extends TestCase
{
    use WithFaker;
//    use RefreshDatabase;

    /** @test */
    public function a_user_can_read_all_categories(){
        $this->withoutExceptionHandling();
        $this->actingAs(factory(User::class)->create());

        $category = factory(Category::class)->create();

        // when user visit categories page
        $response = $this->get('/categories');

        // User should be able to read category
        $response->assertSee($category->category_name);
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function user_can_read_single_category(){
        $this->actingAs(factory(User::class)->create());

        $category = factory(Category::class)->create();
        $response = $this->get('/categories/'.$category->id);

        // check if user can see category details
        $response->assertSee($category->category_name)
            ->assertSee($category->addedBy->name);
        $response->assertStatus(200);
    }

    /**
     * @test
     * Test if Authenticated user can create category
     * Create new user and make that user to act as Authenticated user
     */
    public function authenticated_user_can_create_category(){
        $this->actingAs(factory(User::class)->create());
        $category = factory(Category::class)->make();
        $response = $this->post('/categories', $category->toArray());
        $response->assertRedirect('/categories');

    }

    /**
     * @test
     * Unauthenticated user can not create category
     *
     */
    public function un_authenticated_user_can_not_create_category(){
        $category = factory(Category::class)->make();
        $response = $this->post('/categories', $category->toArray());
        $response->assertRedirect('/login');
    }
}
