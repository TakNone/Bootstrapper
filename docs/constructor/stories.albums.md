# stories.albums

**Layer** : 214

```tl
stories.albums#c3987a3a hash:long albums:Vector<StoryAlbum> = stories.Albums;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | NOTHING |
| <mark>albums</mark> | [`Vector<StoryAlbum>`](type/StoryAlbum) | NOTHING |

---

## Type

[stories.Albums](type/stories.Albums)

---

## Example

```php
$storiesAlbums = $client->stories->albums(
	hash : -2770764241783402826,
	albums : array(
		$client->storyAlbum(
			album_id : 75,
			title : 'XcAziB9DsMGRg4Nj',
			icon_photo : $client->photoEmpty(
				id : 6939959080941155472,
			),
			icon_video : $client->documentEmpty(
				id : 7362296525518233866,
			),
		),
	),
);
```