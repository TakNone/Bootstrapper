# payments.editConnectedStarRefBot

**Description** : *Leave a bot&#039;s affiliate program &raquo;*

**Layer** : 214

```tl
payments.editConnectedStarRefBot#e4fca4a3 flags:# revoked:flags.0?true peer:InputPeer link:string = payments.ConnectedStarRefBots;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **revoked** | [`flags.0?true`](type/true) | If set, leaves the bot's affiliate program |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The peer that was affiliated |
| <mark>link</mark> | [`string`](type/string) | The affiliate link to revoke |

---

## Result

[payments.ConnectedStarRefBots](type/payments.ConnectedStarRefBots)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **STARREF_HASH_REVOKED** | `400` | The specified affiliate link was already revoked |

---

## Example

```php
$paymentsConnectedStarRefBots = $client->payments->editConnectedStarRefBot(
	revoked : true,
	peer : $client->inputPeerEmpty(),
	link : '0MI6dphjPtRJox4z',
);
```