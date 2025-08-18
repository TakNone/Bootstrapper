# stories.albums

**Layer** : 211

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
	hash : 880561358628683841,
	albums : array(
		$client->storyAlbum(
			album_id : 87,
			title : 'FqhmwLsZXbxl7uSP',
			icon_photo : $client->photoEmpty(
				id : 2839395692847878232,
			),
			icon_video : $client->documentEmpty(
				id : 4013850579324063296,
			),
		),
	),
);
```