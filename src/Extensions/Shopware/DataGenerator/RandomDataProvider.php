<?php

namespace Shopware\DataGenerator;

use Faker\Factory;
use Faker\Generator;

class RandomDataProvider
{
    /**
     * Fake data generator
     * @var Generator
     */
    protected $faker;

    public function __construct()
    {
        $this->faker = Factory::create();
    }

    /**
     * @return string
     */
    public function getRandomCity()
    {
        return $this->faker->city;
    }

    /**
     * @return string
     */
    public function getRandomFirstName()
    {
        return $this->faker->firstName;
    }

    /**
     * @return string
     */
    public function getRandomLastName()
    {
        return $this->faker->lastName;
    }

    /**
     * @return string
     */
    public function getRandomWord()
    {
        return $this->faker->word;
    }

    /**
     * @param int $wordCount
     * @return string
     */
    public function getSentence($wordCount)
    {
        return $this->faker->sentence(max($wordCount, 1));
    }
}
