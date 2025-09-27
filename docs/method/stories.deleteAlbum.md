# stories.deleteAlbum

**Layer** : 216

```tl
stories.deleteAlbum#8d3456d0 peer:InputPeer album_id:int = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| <mark>album_id</mark> | [`int`](type/int) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->stories->deleteAlbum(
	peer : $client->inputPeerEmpty(),
	album_id : 42,
);
```