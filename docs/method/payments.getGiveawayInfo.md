# payments.getGiveawayInfo

**Description** : *Obtain information about a Telegram Premium giveaway &raquo;*

**Layer** : 218

```tl
payments.getGiveawayInfo#f4239425 peer:InputPeer msg_id:int = payments.GiveawayInfo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The peer where the giveaway was posted |
| <mark>msg_id</mark> | [`int`](type/int) | Message ID of the messageActionGiveawayLaunch service message |

---

## Result

[payments.GiveawayInfo](type/payments.GiveawayInfo)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **MESSAGE_ID_INVALID** | `400` | The provided message id is invalid |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$paymentsGiveawayInfo = $client->payments->getGiveawayInfo(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	msg_id : 51,
);
```