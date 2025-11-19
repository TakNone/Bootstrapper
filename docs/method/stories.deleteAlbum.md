# stories.deleteAlbum

**Description** : *Delete a story album*

**Layer** : 218

```tl
stories.deleteAlbum#8d3456d0 peer:InputPeer album_id:int = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Owned peer where the album is located |
| <mark>album_id</mark> | [`int`](type/int) | ID of the album to delete |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$bool = $client->stories->deleteAlbum(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	album_id : 74,
);
```