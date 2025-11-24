# storyAlbum

**Description** : *Represents a story album &raquo;*

**Layer** : 218

```tl
storyAlbum#9325705a flags:# album_id:int title:string icon_photo:flags.0?Photo icon_video:flags.1?Document = StoryAlbum;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>album_id</mark> | [`int`](type/int) | ID of the album |
| <mark>title</mark> | [`string`](type/string) | Name of the album |
| **icon_photo** | [`flags.0?Photo`](type/Photo) | Photo from the first story of the album, if it's a photo |
| **icon_video** | [`flags.1?Document`](type/Document) | Video from the first story of the album, if it's a video |

---

## Type

[StoryAlbum](type/StoryAlbum)

---

## Example

```php
$storyAlbum = $client->storyAlbum(
	album_id : 96,
	title : 'W3ywusUqoZvLgmTj',
	icon_photo : $client->photoEmpty(
		id : 4741731703685355343,
	),
	icon_video : $client->documentEmpty(
		id : -9092594380073783914,
	),
);
```