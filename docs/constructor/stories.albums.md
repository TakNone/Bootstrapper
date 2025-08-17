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
	hash : -3303675743457498977,
	albums : array(
		$client->storyAlbum(
			album_id : 32,
			title : 'Ii5pFEz9GjnfNS4Q',
			icon_photo : $client->photoEmpty(
				id : 1305530413144492676,
			),
			icon_video : $client->documentEmpty(
				id : 7751086853238741507,
			),
		),
	),
);
```