


CREATE INDEX author_first_name_last_name ON author (first_name, last_name);

CREATE INDEX book_author_id ON book (author_id);

SELECT author.id, author.first_name, author.last_name, COUNT(book.id) AS book_count

FROM author
         JOIN book ON author.id = book.author_id

WHERE author.first_name = 'Zaria' AND author.last_name = 'Barton'

GROUP BY author.id, author.first_name, author.last_name;

# Новий коміт для переходу в гілку мейн
# Я використав JOIN для з'єднання таблиць 'author' і 'book' за умовою,
# що author.id дорівнює book.author_id. дозволяє отримати всі книги,
# які належать автору з іменем "Zaria Barton" без використання додаткового підзапиту.
