SELECT title, summary, prod_year
FROM film
INNER JOIN genre ON film.id_genre = genre.id_genre
	WHERE genre.name = 'erotic'
ORDER BY prod_year DESC;
