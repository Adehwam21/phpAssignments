<?php

    class User
    {
        public $name;   // String
        public $email;  // String
    

        public function setName($name){
            $this -> name = $name;
        }

        public function setEmail($email){
            $this -> email = $email;
        }

        public function getName(){
            return $this -> name;
        }

        public function getEmail(){
            return $this -> email;
        }
    }

    class Admin extends User
    {
        public $users = [];     // array of user objects

        public function createUser($name, $email){
            $user = new User();

            $user -> setName($name);
            $user -> setEmail($email);
            $this -> users[] = $user;

        }

        public function deleteUser(User $user){
            $userIndex = array_search($user, $this -> users, true);
            if ($userIndex !== false) {
                unset($this -> users[$userIndex]);
            }
        }

        public function updateUser(User $user, $name, $email){
            $userIndex = array_search($user, $this -> users, true);
            if ($userIndex !== false){
                $this -> users[$userIndex] -> setName($name);
                $this -> users[$userIndex] -> setEmail($email);
            }
        }
    }

    // creating user objects and setting user details using the user object
    $user = new User();
    $user -> setName("Aaron Drew");
    $user -> setEmail("drew.aaron@hook.com");

    $user = new User();
    $user -> setName("Makaila Creppy");
    $user -> setEmail("macreppy@hook.com");

    $user = new User();
    $user -> setName("Brook Prix");
    $user -> setEmail("brook.prix@hook.com");

    // creating users with the admin object using the createUser function
    $admin = new Admin();
    $admin -> createUser("Ethel Woods", "ethel.Wood@hook.com");
    $admin -> createUser("Ray Tagoe", "tagoe.ray@hook.com");
    $admin -> createUser("Kobby Fisher", "fisher.fred@hook.com");

    // checking user details in array before Admin methods are applied
    foreach ($admin->users as $user) {
        echo $user -> getName()."-------". $user -> getEmail(). "<br>";
    }
    echo "<br>";

    // deleting a user object in list using the deleteUser function
    $admin -> deleteUser($user);

    // updating user details using the updateUser function
    $admin -> updateUser($user, "Aaron Katery", "aaron.katey@hook.com");

    // displaying all users in array after Admin methods are applied
    foreach ($admin->users as $user) {
        echo $user -> getName()."-------". $user -> getEmail(). "<br>";
    }

?>