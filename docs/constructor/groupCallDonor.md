# groupCallDonor

**Layer** : 225

```tl
groupCallDonor#ee430c85 flags:# top:flags.0?true my:flags.1?true peer_id:flags.3?Peer stars:long = GroupCallDonor;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **top** | [`flags.0?true`](type/true) | NOTHING |
| **my** | [`flags.1?true`](type/true) | NOTHING |
| **peer_id** | [`flags.3?Peer`](type/Peer) | NOTHING |
| <mark>stars</mark> | [`long`](type/long) | NOTHING |

---

## Type

[GroupCallDonor](type/GroupCallDonor)

---

## Example

```php
$groupCallDonor = $client->groupCallDonor(
	top : true,
	my : true,
	peer_id : $client->peerUser(
		user_id : 8539623304846142037,
	),
	stars : 5746614870715402828,
);
```