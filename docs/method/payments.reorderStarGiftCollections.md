# payments.reorderStarGiftCollections

**Description** : *Reorder the star gift collections &raquo; on an owned peer&#039;s profile*

**Layer** : 218

```tl
payments.reorderStarGiftCollections#c32af4cc peer:InputPeer order:Vector<int> = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The owned peer |
| <mark>order</mark> | [`Vector<int>`](type/int) | New collection order |

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
$bool = $client->payments->reorderStarGiftCollections(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	order : array(59),
);
```