# stories.getAlbums

**Description** : *Get story albums created by a peer*

**Layer** : 216

```tl
stories.getAlbums#25b3eac7 peer:InputPeer hash:long = stories.Albums;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The peer |
| <mark>hash</mark> | [`long`](type/long) | The hash from a previously returned stories.albums, to avoid returning any results if they haven't changed |

---

## Result

[stories.Albums](type/stories.Albums)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$storiesAlbums = $client->stories->getAlbums(
	peer : $client->inputPeerEmpty(),
	hash : 0,
);
```