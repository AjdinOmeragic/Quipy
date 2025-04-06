USE quipy;

-- 1 5 RANDOM USERS TO BE INSERTED INTO THE DB SCHEMA
INSERT INTO `users` (`username`, `password`, `email`, `role`) VALUES
  ('alice',    '123456789',    'alice@example.com',    'user'),
  ('bob',      '123456789',      'bob@example.com',      'user'),
  ('carol',    '123456789',    'carol@example.com',    'user'),
  ('dave',     '123456789',     'dave@example.com',     'user'),
  ('eve',      '123456789',      'eve@example.com',      'user');

-- 2 MOOODS: 
INSERT INTO `moods` (`user_id`, `mood`) VALUES
  (1, 'sad'),
  (2, 'happy'),
  (1, 'angry'),
  (4, 'sad'),
  (5, 'happy'),
  (1, 'neutral'),
  (3, 'happy');
  
  
-- 3 JOURNAL ENTRIES OR NOTE ENTRIES:
INSERT INTO `journal_entries` (`user_id`, `content`) VALUES
  (1, 'I went for a walk today I am feeling so lonelly and sad...'),
  (2, 'I am Kind of happy today.'),
  (1, 'What is the point to this meaningless Existance we call life?'),
  (4, 'Meditated for 20 minutes this morning; it helped clear my mind.'),
  (5, 'Started a new hobby learning to code from geeks for geeks');

-- 4 INSPERATIONAL QUOTES FOR THE USER
INSERT INTO `quotes` (`text`, `author`) VALUES
  ('You have power over your mind—not outside events. Realize this, and you will find strength.', 'Marcus Aurelius'),
  ('Impossible is a word to be found only in the dictionary of fools.', 'Napoleon Bonaparte'),
  ('Be the change that you wish to see in the world.', 'Mahatma Gandhi'),
  ('The best way to predict the future is to create it.', 'Peter Drucker'),
  ('What you do not want done to yourself, do not do to others.', 'Confucius'),
  ('I think, therefore I am.', 'René Descartes'),
  ('It always seems impossible until it is done.', 'Nelson Mandela'),
  ('Success is not final, failure is not fatal: It is the courage to continue that counts.', 'Winston Churchill'),
  ('Do not dwell in the past, do not dream of the future, concentrate the mind on the present moment.', 'Buddha'),
  ('Strive not to be a success, but rather to be of value.', 'Albert Einstein'),
  ('In the middle of every difficulty lies opportunity.', 'Albert Einstein'),
  ('Life is what happens when you\'re busy making other plans.', 'John Lennon'),
  ('The best way to predict the future is to invent it.', 'Alan Kay'),
  ('If you want to lift yourself up, lift up someone else.', 'Booker T. Washington'),
  ('The only limit to our realization of tomorrow is our doubts of today.', 'Franklin D. Roosevelt'),
  ('Happiness is not something ready made. It comes from your own actions.', 'Dalai Lama'),
  ('The journey of a thousand miles begins with one step.', 'Lao Tzu'),
  ('What lies behind us and what lies before us are tiny matters compared to what lies within us.', 'Ralph Waldo Emerson'),
  ('Believe you can and you\'re halfway there.', 'Theodore Roosevelt');
