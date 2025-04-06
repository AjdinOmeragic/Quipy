<?php
require_once __DIR__ . '/BaseDaov2.php';
require_once __DIR__ . '/UserDao.php';
require_once __DIR__ . '/MoodDao.php';
require_once __DIR__ . '/JournalEntryDao.php';
require_once __DIR__ . '/MeditationAudioDao.php';
require_once __DIR__ . '/QuoteDao.php';

function printDivider($title) {
    echo "\n\n=== $title ===\n";
}

/*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
/* ----------------------- USERS DAO TEST ------------------------------------------------------------------------------------------------------------------------------------*/
/*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/


printDivider('USERS');
$userDao = new UserDao();
$allUsers = $userDao->getAll();
print_r($allUsers);
$user1 = $userDao->getById(1);
print_r($user1);
$newUser = [
    'username' => 'jdoe_test',
    'password' => password_hash('secret123', PASSWORD_DEFAULT),
    'email'    => 'jdoe_test@example.com',
    'role'     => 'user'
];
$insertedUser = $userDao->add($newUser);
echo "Inserted User ID: {$insertedUser['id']}\n";
$userDao->update([
    'username' => 'jdoe_updated',
    'password' => password_hash('newpass456', PASSWORD_DEFAULT),
    'email'    => 'jdoe_updated@example.com',
    'role'     => 'user'
], $insertedUser['id']);
print_r($userDao->getById($insertedUser['id']));
$userDao->delete($insertedUser['id']);
echo "After delete, getById: ";
var_dump($userDao->getById($insertedUser['id']));


/*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
/* ----------------------- MOODS DAO TEST ------------------------------------------------------------------------------------------------------------------------------------*/
/*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
printDivider('MOODS');
$moodDao = new MoodDao();
print_r($moodDao->getAll());
print_r($moodDao->getById(1));
$newMood = [
    'user_id' => 1,
    'mood'    => 'happy'
];
$insertedMood = $moodDao->add($newMood);
echo "Inserted Mood ID: {$insertedMood['id']}\n";
$moodDao->update([
    'user_id' => 1,
    'mood'    => 'neutral'
], $insertedMood['id']);
print_r($moodDao->getById($insertedMood['id']));
$moodDao->delete($insertedMood['id']);
echo "After delete, getById: ";
var_dump($moodDao->getById($insertedMood['id']));


/*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
/* ----------------------- JOURNAL ENTRIES DAO TEST --------------------------------------------------------------------------------------------------------------------------*/
/*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
printDivider('JOURNAL_ENTRIES');
$jeDao = new JournalEntryDao();
print_r($jeDao->getAll());
print_r($jeDao->getById(1));
$newEntry = [
    'user_id'   => 2,
    'content'   => 'This is a test journal entry.'
];
$insertedEntry = $jeDao->add($newEntry);
echo "Inserted Entry ID: {$insertedEntry['id']}\n";
$jeDao->update([
    'user_id' => 2,
    'content' => 'Updated test journal entry.'
], $insertedEntry['id']);
print_r($jeDao->getById($insertedEntry['id']));
$jeDao->delete($insertedEntry['id']);
echo "After delete, getById: ";
var_dump($jeDao->getById($insertedEntry['id']));

/*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
/* ----------------------- MEDITATION  DAO TEST ------------------------------------------------------------------------------------------------------------------------------*/
/*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
printDivider('MEDITATION_AUDIOS');
$audioDao = new MeditationAudioDao();
print_r($audioDao->getAll());
print_r($audioDao->getById(1));
$newAudio = [
    'title'     => 'Test Meditation',
    'file_path' => '/path/to/test.mp3',
    'duration'  => 120
];
$insertedAudio = $audioDao->add($newAudio);
echo "Inserted Audio ID: {$insertedAudio['id']}\n";
$audioDao->update([
    'title'     => 'Updated Meditation',
    'file_path' => '/new/path/to/test.mp3',
    'duration'  => 150
], $insertedAudio['id']);
print_r($audioDao->getById($insertedAudio['id']));
$audioDao->delete($insertedAudio['id']);
echo "After delete, getById: ";
var_dump($audioDao->getById($insertedAudio['id']));


/*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
/* ----------------------- QUOTE DAO TEST ------------------------------------------------------------------------------------------------------------------------------------*/
/*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
printDivider('QUOTES');
$quoteDao = new QuoteDao();
print_r($quoteDao->getAll());
print_r($quoteDao->getById(1));
$newQuote = [
    'text'   => 'Testing is believing.',
    'author' => 'QA Guru'
];
$insertedQuote = $quoteDao->add($newQuote);
echo "Inserted Quote ID: {$insertedQuote['id']}\n";
$quoteDao->update([
    'text'   => 'Testing is believing! (updated)',
    'author' => 'QA Guru 2'
], $insertedQuote['id']);
print_r($quoteDao->getById($insertedQuote['id']));
$quoteDao->delete($insertedQuote['id']);
echo "After delete, getById: ";
var_dump($quoteDao->getById($insertedQuote['id']));
