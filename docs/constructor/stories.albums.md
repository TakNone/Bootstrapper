# stories.albums

**Description** : *Story albums &raquo;*

**Layer** : 225

```tl
stories.albums#c3987a3a hash:long albums:Vector<StoryAlbum> = stories.Albums;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash to pass to stories.getAlbums to avoid returning any results if they haven't changed |
| <mark>albums</mark> | [`Vector<StoryAlbum>`](type/StoryAlbum) | The albums |

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
			album_id : 78,
			title : 'ZltoLsW8U26ScEuP',
			icon_photo : $client->photoEmpty(
				id : 5900323455227877424,
			),
			icon_video : $client->documentEmpty(
				id : -2559893766148885040,
			),
		),
	),
);
```