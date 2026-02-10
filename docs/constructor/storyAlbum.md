# storyAlbum

**Description** : *Represents a story album &raquo;*

**Layer** : 222

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
	album_id : 89,
	title : 'lHCUn95SfsGmBjXd',
	icon_photo : $client->photoEmpty(
		id : 6594319965162279982,
	),
	icon_video : $client->documentEmpty(
		id : 826780096803182622,
	),
);
```