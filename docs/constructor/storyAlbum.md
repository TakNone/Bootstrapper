# storyAlbum

**Layer** : 211

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
	album_id : 99,
	title : 'fjl7yQNkomn4JKqu',
	icon_photo : $client->photoEmpty(
		id : 3132430507479338087,
	),
	icon_video : $client->documentEmpty(
		id : 6267427385642949602,
	),
);
```