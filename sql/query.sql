CREATE TABLE users (
    id SERIAL PRIMARY KEY,
    user_name VARCHAR(50) NOT NULL,
    user_email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role VARCHAR(10) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)

 --trigger
CREATE
OR REPLACE FUNCTION update_updated_at_column() RETURNS TRIGGER AS $ $ BEGIN NEW.updated_at = NOW();

RETURN NEW;

END;

$ $ LANGUAGE plpgsql;

CREATE TRIGGER set_updated_at BEFORE
UPDATE
    ON users FOR EACH ROW EXECUTE FUNCTION update_updated_at_column()
     
     --question
    CREATE TABLE questions (
        id SERIAL PRIMARY KEY,
        question TEXT NOT NULL,
        option_a TEXT NOT NULL,
        option_b TEXT NOT NULL,
        option_c TEXT NOT NULL,
        option_d TEXT NOT NULL,
        correct_option CHAR(1) NOT NULL
    ) 
    
    --test
    CREATE TABLE tests (
        user_id INT NOT NULL REFERENCES users(id) ON DELETE CASCADE,
        question_id INT NOT NULL REFERENCES questions(id) ON DELETE CASCADE,
        chosen_option CHAR(1) NOT NULL,
        is_correct BOOLEAN NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        CONSTRAINT fk_user FOREIGN KEY (user_id) REFERENCES users(id),
        CONSTRAINT fk_question FOREIGN KEY (question_id) REFERENCES questions(id)
    ) 
   
    --index
    CREATE INDEX idx_user_id ON tests(user_id) CREATE INDEX idx_question_id ON tests(question_id)



-- Insert dummy data into the questions table
INSERT INTO questions (question, option_a, option_b, option_c, option_d, correct_option)
VALUES
    ('What is the capital of France?', 'Berlin', 'Madrid', 'Paris', 'Rome', 'C'),
    ('Who wrote "Romeo and Juliet"?', 'Charles Dickens', 'William Shakespeare', 'Mark Twain', 'J.K. Rowling', 'B'),
    ('What is the largest planet in our Solar System?', 'Earth', 'Jupiter', 'Mars', 'Venus', 'B'),
    ('Which element has the chemical symbol O?', 'Oxygen', 'Gold', 'Silver', 'Carbon', 'A'),
    ('What is the square root of 64?', '6', '7', '8', '9', 'C'),
    ('Who painted the Mona Lisa?', 'Vincent van Gogh', 'Leonardo da Vinci', 'Pablo Picasso', 'Claude Monet', 'B'),
    ('What is the boiling point of water at sea level (in °C)?', '90', '100', '120', '150', 'B'),
    ('In which year did World War II end?', '1942', '1945', '1950', '1939', 'B'),
    ('What is the powerhouse of the cell?', 'Nucleus', 'Ribosome', 'Mitochondria', 'Chloroplast', 'C'),
    ('Which planet is known as the Red Planet?', 'Mars', 'Venus', 'Saturn', 'Mercury', 'A')
