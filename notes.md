# Queries

## Hämta alla artister

```SELECT * FROM `artists` ORDER BY `name````

## Hämta alla album från en specifik artist

```SELECT * FROM `albums` WHERE `artist_id`=1```

## Hämta alla låtar från ett specifikt album

```SELECT * FROM `tracks` WHERE `album_id`=1```

## Hämta ut alla låtar inkl. album-info från en specifik artist

```SELECT
    albums.id AS album_id,
    albums.name AS album_name,
    albums.genre AS album_genre,
    tracks.id AS track_id,
    tracks.name AS track_name,
    tracks.length AS track_length
FROM albums, tracks
WHERE albums.artist_id = 1 AND tracks.album_id = albums.id
ORDER BY albums.name, tracks.name```
