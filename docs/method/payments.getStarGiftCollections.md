# payments.getStarGiftCollections

**Description** : *Fetches all star gift collections &raquo; of a peer*

**Layer** : 218

```tl
payments.getStarGiftCollections#981b91dd peer:InputPeer hash:long = payments.StarGiftCollections;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The peer |
| <mark>hash</mark> | [`long`](type/long) | Hash (generated as specified here ») using the starGiftCollection.hash field (not the collection_id field) of all collections returned by a previous method call, to avoid refetching the result if it hasn't changed |

---

## Result

[payments.StarGiftCollections](type/payments.StarGiftCollections)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$paymentsStarGiftCollections = $client->payments->getStarGiftCollections(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	hash : 0,
);
```