# account.toggleNoPaidMessagesException

**Layer** : 211

```tl
account.toggleNoPaidMessagesException#fe2eda76 flags:# refund_charged:flags.0?true require_payment:flags.2?true parent_peer:flags.1?InputPeer user_id:InputUser = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **refund_charged** | [`flags.0?true`](type/true) | NOTHING |
| **require_payment** | [`flags.2?true`](type/true) | NOTHING |
| **parent_peer** | [`flags.1?InputPeer`](type/InputPeer) | NOTHING |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->account->toggleNoPaidMessagesException(
	refund_charged : true,
	require_payment : true,
	parent_peer : $client->inputPeerEmpty(),
	user_id : $client->inputUserEmpty(),
);
```