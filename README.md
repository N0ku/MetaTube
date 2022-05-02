# MetaTube

# DATA FORMAT

To send a video to the Data Base :

Protocole : HTTP
Method : POST
Langage : JSON
Format :
```json
{
  "id":"the unique id of a video",
  "creator":"the id of the creator of the video",
  "title":"the title of the video ...",
  "description":"... and his description.",
  "privacy":"Must be 'public' or 'private'"
}
```
