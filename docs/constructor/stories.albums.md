# stories.albums

**Description** : *Story albums &raquo;*

**Layer** : 227

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
			album_id : 53,
			title : 'y80QK12lbmJxM6SB',
			icon_photo : $client->photoEmpty(
				id : 4239641366417970711,
			),
			icon_video : $client->documentEmpty(
				id : -4941925160074239298,
			),
		),
	),
);
```