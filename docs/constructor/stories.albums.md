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
	hash : 0,
	albums : array(
		$client->storyAlbum(
			album_id : 59,
			title : 'QCqV5cx4RaenE1lu',
			icon_photo : $client->photoEmpty(
				id : -2989100210475743085,
			),
			icon_video : $client->documentEmpty(
				id : -2276899094889403825,
			),
		),
	),
);
```