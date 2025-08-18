# payments.getStarsTransactions

**Description** : *Fetch Telegram Stars transactions*

**Layer** : 211

```tl
payments.getStarsTransactions#69da4557 flags:# inbound:flags.0?true outbound:flags.1?true ascending:flags.2?true ton:flags.4?true subscription_id:flags.3?string peer:InputPeer offset:string limit:int = payments.StarsStatus;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **inbound** | [`flags.0?true`](type/true) | If set, fetches only incoming transactions |
| **outbound** | [`flags.1?true`](type/true) | If set, fetches only outgoing transactions |
| **ascending** | [`flags.2?true`](type/true) | Return transactions in ascending order by date (instead of descending order by date) |
| **ton** | [`flags.4?true`](type/true) | NOTHING |
| **subscription_id** | [`flags.3?string`](type/string) | If set, fetches only transactions for the specified Telegram Star subscription » |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Fetch the transaction history of the peer (inputPeerSelf or a bot we own) |
| <mark>offset</mark> | [`string`](type/string) | Offset for pagination, obtained from the returned next_offset, initially an empty string » |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of results to return, see pagination |

---

## Result

[payments.StarsStatus](type/payments.StarsStatus)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$paymentsStarsStatus = $client->payments->getStarsTransactions(
	inbound : true,
	outbound : true,
	ascending : true,
	ton : true,
	subscription_id : '1d6aX4LVyuSc3qNv',
	peer : $client->inputPeerEmpty(),
	offset : '8YxlfnbiOvD05Ice',
	limit : 32,
);
```