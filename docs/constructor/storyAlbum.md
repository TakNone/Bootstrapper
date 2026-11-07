# storyAlbum

**Description** : *Represents a story album &raquo;*

**Layer** : 233

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
	album_id : 8,
	title : 'rL0icxC1psRNjS4w',
	icon_photo : $client->photoEmpty(
		id : 6881305165568656680,
	),
	icon_video : $client->documentEmpty(
		id : 3612119175901945500,
	),
);
```