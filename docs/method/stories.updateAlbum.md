# stories.updateAlbum

**Layer** : 214

```tl
stories.updateAlbum#5e5259b6 flags:# peer:InputPeer album_id:int title:flags.0?string delete_stories:flags.1?Vector<int> add_stories:flags.2?Vector<int> order:flags.3?Vector<int> = StoryAlbum;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| <mark>album_id</mark> | [`int`](type/int) | NOTHING |
| **title** | [`flags.0?string`](type/string) | NOTHING |
| **delete_stories** | [`flags.1?Vector<int>`](type/int) | NOTHING |
| **add_stories** | [`flags.2?Vector<int>`](type/int) | NOTHING |
| **order** | [`flags.3?Vector<int>`](type/int) | NOTHING |

---

## Result

[StoryAlbum](type/StoryAlbum)

---

## Example

```php
$storyAlbum = $client->stories->updateAlbum(
	peer : $client->inputPeerEmpty(),
	album_id : 53,
	title : 'XLyPzfDx0jMSY4pO',
	delete_stories : array(24),
	add_stories : array(99),
	order : array(61),
);
```