# payments.reorderStarGiftCollections

**Layer** : 211

```tl
payments.reorderStarGiftCollections#c32af4cc peer:InputPeer order:Vector<int> = Bool;
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
$bool = $client->payments->reorderStarGiftCollections(
	peer : $client->inputPeerEmpty(),
	order : array(91),
);
```