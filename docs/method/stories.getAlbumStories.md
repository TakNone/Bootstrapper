# stories.getAlbumStories

**Description** : *Get stories in a story album &raquo;*

**Layer** : 216

```tl
stories.getAlbumStories#ac806d61 peer:InputPeer album_id:int offset:int limit:int = stories.Stories;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer where the album is posted |
| <mark>album_id</mark> | [`int`](type/int) | ID of the album |
| <mark>offset</mark> | [`int`](type/int) | Offset for pagination |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of results to return, see pagination |

---

## Result

[stories.Stories](type/stories.Stories)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$storiesStories = $client->stories->getAlbumStories(
	peer : $client->inputPeerEmpty(),
	album_id : 76,
	offset : 0,
	limit : 83,
);
```