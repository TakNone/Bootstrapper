# stories.albums

**Description** : *Story albums &raquo;*

**Layer** : 216

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
			album_id : 97,
			title : '3RK4A5XfBphED7j2',
			icon_photo : $client->photoEmpty(
				id : 1174530758267059209,
			),
			icon_video : $client->documentEmpty(
				id : -683452151557376691,
			),
		),
	),
);
```