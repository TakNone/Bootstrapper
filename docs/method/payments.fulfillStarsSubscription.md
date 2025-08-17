# payments.fulfillStarsSubscription

**Description** : *Re-join a private channel associated to an active Telegram Star subscription »*

**Layer** : 211

```tl
payments.fulfillStarsSubscription#cc5bebb3 peer:InputPeer subscription_id:string = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Always pass inputPeerSelf |
| <mark>subscription_id</mark> | [`string`](type/string) | ID of the subscription |

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
$bool = $client->payments->fulfillStarsSubscription(
	peer : $client->inputPeerEmpty(),
	subscription_id : 'bvdwWsnUI1LH04JM',
);
```