# stories.reorderAlbums

**Layer** : 211

```tl
stories.reorderAlbums#8535fbd9 peer:InputPeer order:Vector<int> = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| <mark>order</mark> | [`Vector<int>`](type/int) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->stories->reorderAlbums(
	peer : $client->inputPeerEmpty(),
	order : array(82),
);
```