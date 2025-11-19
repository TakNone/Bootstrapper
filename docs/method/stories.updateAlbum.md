# stories.updateAlbum

**Description** : *Rename a story albums &raquo;, or add, delete or reorder stories in it*

**Layer** : 218

```tl
stories.updateAlbum#5e5259b6 flags:# peer:InputPeer album_id:int title:flags.0?string delete_stories:flags.1?Vector<int> add_stories:flags.2?Vector<int> order:flags.3?Vector<int> = StoryAlbum;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer where the album is posted |
| <mark>album_id</mark> | [`int`](type/int) | Album ID |
| **title** | [`flags.0?string`](type/string) | New album title |
| **delete_stories** | [`flags.1?Vector<int>`](type/int) | If set, deletes the specified stories from the album |
| **add_stories** | [`flags.2?Vector<int>`](type/int) | If set, adds the specified stories to the album |
| **order** | [`flags.3?Vector<int>`](type/int) | If set, reorders the stories in the album by their IDs |

---

## Result

[StoryAlbum](type/StoryAlbum)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$storyAlbum = $client->stories->updateAlbum(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	album_id : 29,
	title : 'zIWR5liBH6TfeX4n',
	delete_stories : array(23),
	add_stories : array(53),
	order : array(77),
);
```