<?php

use Faker\Factory as Faker;
use App\Models\Tps;
use App\Repositories\TpsRepository;

trait MakeTpsTrait
{
    /**
     * Create fake instance of Tps and save it in database
     *
     * @param array $tpsFields
     * @return Tps
     */
    public function makeTps($tpsFields = [])
    {
        /** @var TpsRepository $tpsRepo */
        $tpsRepo = App::make(TpsRepository::class);
        $theme = $this->fakeTpsData($tpsFields);
        return $tpsRepo->create($theme);
    }

    /**
     * Get fake instance of Tps
     *
     * @param array $tpsFields
     * @return Tps
     */
    public function fakeTps($tpsFields = [])
    {
        return new Tps($this->fakeTpsData($tpsFields));
    }

    /**
     * Get fake data of Tps
     *
     * @param array $postFields
     * @return array
     */
    public function fakeTpsData($tpsFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'province_id' => $fake->randomDigitNotNull,
            'kodepos_id' => $fake->randomDigitNotNull,
            'name' => $fake->word,
            'address' => $fake->word,
            'geo_location' => $fake->word,
            'type' => $fake->word,
            'note' => $fake->word,
            'deleted_at' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $tpsFields);
    }
}
