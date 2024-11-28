<?php
 
 namespace App\Policies;

use App\Models\Book;
 use App\Models\User;
 
 class PokemonPolicy
 {
     public function create(?User $user): bool
     {
         return !is_null($user);
     }
 
     public function update(?User $user, Book $books): bool
     {
         return $user && $books->coach_id === $user->id;
     }
 
     public function delete(?User $user, Book $books): bool
     {
         return $user && $books->coach_id === $user->id;
     }
 }
 
