SELECT * FROM events;

INSERT INTO events (name, start, end, status) VALUES ('1', '2018-12-03T09:00:00', '2018-12-07 17:00:00', 'free');

SELECT id, name, start, end FROM events WHERE end;

SELECT id, name, start, end FROM events WHERE id;

SELECT * FROM events WHERE status = 'ledigtid';


SELECT  *
FROM    events
WHERE   TIME(DY_DATE) <> '00:00:00:000';

SELECT *
FROM events
WHERE ActionTimeStamp >= '2012-10-02 07:30:00' AND ActionTimeStamp <= '2012-10-02 08:30:00';

SELECT *
FROM events
WHERE end >= '2018-12-06 11:45:00' AND start <= '2018-12-06 11:50:00';

SELECT *
FROM   events
WHERE  YEARWEEK(`start`, 1) = YEARWEEK(CURDATE(), 1);

INSERT INTO events (name, start, end, status) SELECT 'negleband', '2018-12-03T11:10:00', '2018-12-03T12:00:00', 'aftale indgået' FROM DUAL WHERE NOT EXISTS (SELECT * FROM events);

SELECT id, name, start, end, status FROM events WHERE status = 'free';

UPDATE events SET name = 'facemask igen', status='aftalbooket' WHERE start = '2018-12-03 12:00:00' AND end = '2018-12-03 12:30:00';

SELECT a.end AS free_after
FROM events a
WHERE NOT EXISTS (
  SELECT 3
  FROM events b
  WHERE b.start BETWEEN a.end AND a.end + INTERVAL 90 MINUTE
)
AND a.end BETWEEN '2018-12-10 08:00:00' AND '2018-12-14 18:00:00';



SELECT free_from, free_until FROM ( SELECT a.end AS free_from, (SELECT MIN(c.start) FROM events c WHERE c.start > a.end) as free_until FROM events a WHERE NOT EXISTS ( SELECT 1 FROM events b WHERE b.start BETWEEN a.end AND a.end + INTERVAL 90 MINUTE ) AND a.end BETWEEN '2018-12-10 08:00:00' AND '2018-12-14 20:00:00' ) ORDER BY free_until-free_from LIMIT 0,3;


SELECT distinct all_slots.`datetime`
FROM events AS all_slots
LEFT JOIN (
  SELECT `datetime`
  FROM events AS d
  JOIN events AS b
    ON b.start BETWEEN d.`datetime` AND DATE_ADD(d.`datetime`, INTERVAL 1799 SECOND)
    OR b.end   BETWEEN d.`datetime` AND DATE_ADD(d.`datetime`, INTERVAL 1799 SECOND)
) AS not_available
ON all_slots.`datetime` = not_available.`datetime`
WHERE not_available.`datetime` is null


INSERT INTO time_slots start_time, end_time WHERE start_time BETWEEN '2018-12-17 08:00:00' AND end_time '2018-12-17 18:00:00' ('2018-12-17 18:00:00',INTERVAL 30 MINUTE );

INSERT INTO time_slots (name, start, end, status) VALUES ('neglefcfeeband', '2018-12-03T11:10:00', '2018-12-03T12:00:00', 'aftale indgået');

select * from time_slots;

SELECT timediff(end, start) FROM events;

INSERT INTO events (name, start, end, status, duration) VALUES ('negleband', '2018-12-03T11:10:00', '2018-12-03T12:00:00', 'aftale indgået', TIMEDIFF(end, start));






