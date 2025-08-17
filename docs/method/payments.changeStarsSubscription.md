# payments.changeStarsSubscription

**Description** : *Activate or deactivate a Telegram Star subscription »*

**Layer** : 211

```tl
payments.changeStarsSubscription#c7770878 flags:# peer:InputPeer subscription_id:string canceled:flags.0?Bool = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Always pass inputPeerSelf |
| <mark>subscription_id</mark> | [`string`](type/string) | ID of the subscription |
| **canceled** | [`flags.0?Bool`](type/Bool) | Whether to cancel or reactivate the subscription |

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
$bool = $client->payments->changeStarsSubscription(
	peer : $client->inputPeerEmpty(),
	subscription_id : 'NacOtgS0G7VuzrCP',
	canceled : $client->boolFalse(),
);
```