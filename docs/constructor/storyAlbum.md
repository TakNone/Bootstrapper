# storyAlbum

**Layer** : 214

```tl
storyAlbum#9325705a flags:# album_id:int title:string icon_photo:flags.0?Photo icon_video:flags.1?Document = StoryAlbum;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| <mark>album_id</mark> | [`int`](type/int) | NOTHING |
| <mark>title</mark> | [`string`](type/string) | NOTHING |
| **icon_photo** | [`flags.0?Photo`](type/Photo) | NOTHING |
| **icon_video** | [`flags.1?Document`](type/Document) | NOTHING |

---

## Type

[StoryAlbum](type/StoryAlbum)

---

## Example

```php
$storyAlbum = $client->storyAlbum(
	album_id : 16,
	title : '6U3CBN7QJyVzFSHr',
	icon_photo : $client->photoEmpty(
		id : 572530247497731749,
	),
	icon_video : $client->documentEmpty(
		id : 7764470244186019322,
	),
);
```