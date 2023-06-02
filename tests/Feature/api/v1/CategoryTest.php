<?php

namespace Tests\Feature;

    use App\Models\Category;
    use Illuminate\Foundation\Testing\RefreshDatabase;
    use Illuminate\Foundation\Testing\WithFaker;
    use Tests\TestCase;

class CategoryTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_return_all_categories()
    {
        Category::factory()->count(5)->create();

        $response = $this->get('api/v1/categories');

        $response->assertStatus(200);
        $response->assertJsonCount(5);
    }

    /** @test */
//    public function it_can_create_a_category()
//    {
//        $category = Category::factory()->make();
//        $data = [
//            'name' => $category->name,
//            'icon' => $category->icon,
//            'order' => $category->order,
//        ];
//
//        $response = $this->post('/categories', $data);
//
//        $response->assertStatus(201);
//        $this->assertDatabaseHas('categories', $data);
//    }
//
//    /** @test */
//    public function it_can_update_a_category()
//    {
//        $category = Category::factory()->create();
//        $data = [
//            'name' => $category->faker()->name,
//            'icon' => $category->icon,
//            'order' => $category->order,
//        ];
//
//        $response = $this->put("/categories/{$category->id}", $data);
//
//        $response->assertStatus(200);
//        $this->assertDatabaseHas('categories', $data);
//    }

    /** @test */
//    public function it_can_delete_a_category()
//    {
//        $category = Category::factory()->create();
//
//        $response = $this->delete("/categories/{$category->id}");
//
//        $response->assertStatus(204);
//        $this->assertDatabaseMissing('categories', ['id' => $category->id]);
//    }
}
