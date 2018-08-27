<?php

use Faker\Factory as Faker;
use App\Models\User;
use App\Repositories\UserRepository;

trait MakeUserTrait
{
    /**
     * Create fake instance of User and save it in database
     *
     * @param array $userFields
     * @return User
     */
    public function makeUser($userFields = [])
    {
        /** @var UserRepository $userRepo */
        $userRepo = App::make(UserRepository::class);
        $theme = $this->fakeUserData($userFields);
        return $userRepo->create($theme);
    }

    /**
     * Get fake instance of User
     *
     * @param array $userFields
     * @return User
     */
    public function fakeUser($userFields = [])
    {
        return new User($this->fakeUserData($userFields));
    }

    /**
     * Get fake data of User
     *
     * @param array $postFields
     * @return array
     */
    public function fakeUserData($userFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'name' => $fake->word,
            'email' => $fake->word,
            'password' => $fake->word,
            'type' => $fake->word,
            'nik' => $fake->word,
            'gender' => $fake->word,
            'dob' => $fake->word,
            'pob' => $fake->word,
            'status' => $fake->randomDigitNotNull,
            'phone' => $fake->word,
            'occupation' => $fake->word,
            'address' => $fake->word,
            'tps_id' => $fake->randomDigitNotNull,
            'is_active' => $fake->word,
            'is_admin' => $fake->word,
            'remember_token' => $fake->word,
            'deleted_at' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $userFields);
    }
}
