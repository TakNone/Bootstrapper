# stories.getAlbums

**Layer** : 216

```tl
stories.getAlbums#25b3eac7 peer:InputPeer hash:long = stories.Albums;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| <mark>hash</mark> | [`long`](type/long) | NOTHING |

---

## Result

[stories.Albums](type/stories.Albums)

---

## Example

```php
$storiesAlbums = $client->stories->getAlbums(
	peer : $client->inputPeerEmpty(),
	hash : 0,
);
```