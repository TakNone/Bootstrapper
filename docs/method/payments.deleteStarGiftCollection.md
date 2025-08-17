# payments.deleteStarGiftCollection

**Layer** : 211

```tl
payments.deleteStarGiftCollection#ad5648e8 peer:InputPeer collection_id:int = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| <mark>collection_id</mark> | [`int`](type/int) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->payments->deleteStarGiftCollection(
	peer : $client->inputPeerEmpty(),
	collection_id : 85,
);
```