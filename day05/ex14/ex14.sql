SELECT floor_number as 'Floor', sum(nb_seats) as 'Seats'
FROM cinema
GROUP BY floor_number
ORDER BY seats DESC;
