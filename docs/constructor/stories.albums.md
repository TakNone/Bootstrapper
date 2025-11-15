# stories.albums

**Description** : *Story albums &raquo;*

**Layer** : 218

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
			album_id : 13,
			title : 'asYdDWz0bw1H59V3',
			icon_photo : $client->photoEmpty(
				id : 7003463046740402529,
			),
			icon_video : $client->documentEmpty(
				id : -2750116823625456935,
			),
		),
	),
);
```