<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $recipes = [
            [
                'name' => 'Vegan tacos',
                'description' => 'Delicious, fast, easy, cheap, and vegan! Everything about these easy TVP tacos speaks to my soul.',
                'difficulty' => 'easy',
                'servings' => 8,
                'category' => 'main course',
                'restrictions' => 'vegan',
                'instructions' => 'Heat the oil in a large skillet or non-stick frying pan. When hot add the onion and garlic and sauté until the onion turns translucent and just begins to brown, about 5 minutes. Mix in the vegetable broth, TVP, chili powder, smoked paprika, cumin, cayenne, and salt. Bring to a simmer and cook for about 5 minutes until the vegetable broth has absorbed and the TVP is tender and chewy. If it gets a bit dry just add a splash more vegetable broth. Or if it is too wet continue to simmer a little longer until the vegetable broth is absorbed. Spoon into tortilla shells, and decorate with your favorite toppings. Enjoy!',
                'prep_time' => 5,
                'cooking_time' => 10,
                'total_time' => 15,
                'image_path' => 'images/recipes/vegantacos.jpg',
            ],
            [
                'name' => 'One-Pan Coconut-Lime Chicken',
                'description' => 'We paired quick-cooking chicken cutlets with a spicy-sweet coconut milk sauce that’s out-of-this-world tasty. Tomatoes (and tomato paste) bring it back down to Earth, so you can make this over and over (and over!) again.',
                'difficulty' => 'easy',
                'servings' => 4,
                'category' => 'main course',
                'restrictions' => 'gluten-free',
                'instructions' => 'Season chicken all over with paprika, salt, and pepper. In a large, high-sided skillet over medium-high heat, heat 1 tablespoon oil. Working in batches, cook chicken, turning halfway through, until golden brown on both sides and just about cooked through, 1 to 2 minutes per side. Transfer to a plate.
                In same skillet over medium-high heat, heat remaining 1 tablespoon oil. Cook onion, stirring occasionally, until slightly tender and just turning golden, about 5 minutes. Add jalapeño, garlic, and ginger and cook, stirring, until fragrant and light golden, about 1 minute more. Add tomatoes and tomato paste and cook, stirring occasionally, until tomato is softened and tomato paste is lightly toasted, about 2 minutes more.
                Add milk and brown sugar and bring to a boil, stirring until sugar is dissolved. Nestle chicken into skillet and return to a boil. Boil until chicken is cooked through, about 1 minute more.
                Remove from heat. Stir in cilantro and lime juice.',
                'prep_time' => 10,
                'cooking_time' => 30,
                'total_time' => 40,
                'image_path' => 'images/recipes/coconutchicken.jpg',
            ],
            [
                'name' => 'The best Veggie Burger!',
                'description' => 'Say hello to the BEST veggie burger recipe! Of course, that’s just my opinion, but once you try it, I think you’ll agree.',
                'difficulty' => 'medium',
                'servings' => 8,
                'category' => 'main course',
                'restrictions' => 'vegetarian',
                'instructions' => "Heat the olive oil in a medium skillet over medium heat. Add the mushrooms and a generous pinch of salt, and sauté until soft and browned, 6 to 9 minutes, turning down the heat slightly, as needed. Stir in the tamari, vinegar, and mirin. Stir, reduce the heat, then add the garlic, smoked paprika, and sriracha. Remove the pan from the heat and let cool slightly. In a food processor, combine the sautéed mushrooms, walnuts, flaxseed, brown rice, and ½ cup of the panko. Pulse until just combined. The mixture should hold together when pinched, but it should still have some texture. Transfer to a large bowl and fold in the remaining panko.Form into 8 patties, place them on a large plate and chill in the fridge for 1 hour. If you're grilling the patties, preheat a grill to medium-high heat. Brush the patties with  olive oil and spray the grill with cooking spray. Place the patties on the grill and use a spatula to press down lightly. Grill for 7 minutes on the first side, flip, and grill for 6 to 7 minutes on the second side, or until well-charred and cooked through. Alternately, cook the patties on the stove. Heat a cast-iron skillet over medium heat. Coat the bottom of the skillet with oil and cook the patties for 5 to 6 minutes per side, or until well-charred and cooked through. Remove from the heat, brush with Worcestershire sauce, and serve with desired fixings.",
                'prep_time' => 50,
                'cooking_time' => 50,
                'total_time' => 100,
                'image_path' => 'images/recipes/veggieburger.jpg',
            ],
            [
                'name' => 'The Best Brownies!',
                'description' => "These amazing homemade brownies boast the same chewiness as boxed ones but deliver an extra punch of intense chocolatey goodness.",
                'difficulty' => 'medium',
                'servings' => 12,
                'category' => 'dessert',
                'restrictions' => 'vegetarian',
                'instructions' => "Grease a 23x33-cm dark metal pan with softened butter, then line with parchment paper, leaving overhang on all sides. Grease the parchment with softened butter. Combine the chopped chocolate, ¼ cup (30 g) of cocoa powder, and espresso powder in a heatproof liquid measuring cup or medium bowl and set aside. Add the butter to a small saucepan over medium heat and cook until the butter just comes to a vigorous simmer, about 5 minutes, swirling the pan occasionally. Immediately pour the hot butter over the chocolate mixture and let sit for 2 minutes. Whisk until the chocolate is completely smooth and melted, then set aside. Combine the granulated sugar, brown sugar, vanilla extract, salt, and eggs in a large bowl. Beat with an electric hand mixer on high speed until light and fluffy, about 10 minutes. It will be similar to the texture of very thick pancake batter. With the mixer on, pour in the slightly cooled chocolate and butter mixture and blend until smooth. Position a rack in the middle of the oven and preheat to 180°C. Sift in the flour and remaining cocoa powder and use a rubber spatula to gently fold until just combined. Pour the batter into the prepared baking pan and smooth the top with a spatula. Bake until lightly puffed on top, about 20 minutes. Remove the baking pan from the oven using oven mitts or kitchen towels, then lightly drop the pan on a flat surface 1-2 times until the brownies deflate slightly. Sprinkle with flaky sea salt. Return the pan to the oven and bake until a wooden skewer inserted into the center of the brownies comes out fudgy but the edges look cooked through, about 20 minutes more. The center of the brownies will seem under-baked, but the brownies will continue to set as they cool. Set the brownies on a cooling rack and cool completely in the pan. Use the parchment paper to lift the cooled brownies out of the pan. Cut into 24 bars and serve immediately. Enjoy!",
                'prep_time' => 15,
                'cooking_time' => 45,
                'total_time' => 60,
                'image_path' => 'images/recipes/bestbrownies.jpg',
            ],
        ];

        foreach($recipes as $recipe)
        {
            $recipeId = DB::table('recipes')->insertGetId([
                'name' => $recipe['name'],
                'description' => $recipe['description'],
                'difficulty' => $recipe['difficulty'],
                'servings' => $recipe['servings'],
                'category' => $recipe['category'],
                'restrictions' => $recipe['restrictions'],
                'instructions' => $recipe['instructions'],
                'prep_time' => $recipe['prep_time'],
                'cooking_time' => $recipe['cooking_time'],
                'total_time' => $recipe['total_time'],
                'image_path' => $recipe['image_path'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        
    }
}
