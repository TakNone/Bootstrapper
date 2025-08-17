# payments.getConnectedStarRefBots

**Description** : *Fetch all affiliations we have created for a certain peer*

**Layer** : 211

```tl
payments.getConnectedStarRefBots#5869a553 flags:# peer:InputPeer offset_date:flags.2?int offset_link:flags.2?string limit:int = payments.ConnectedStarRefBots;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The affiliated peer |
| **offset_date** | [`flags.2?int`](type/int) | If set, returns only results older than the specified unixtime |
| **offset_link** | [`flags.2?string`](type/string) | Offset for pagination, taken from the last returned connectedBotStarRef.url (initially empty) |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of results to return, see pagination |

---

## Result

[payments.ConnectedStarRefBots](type/payments.ConnectedStarRefBots)

---

## Example

```php
$paymentsConnectedStarRefBots = $client->payments->getConnectedStarRefBots(
	peer : $client->inputPeerEmpty(),
	offset_date : 47,
	offset_link : 'lqh31ymvoDAjCatp',
	limit : 0,
);
```