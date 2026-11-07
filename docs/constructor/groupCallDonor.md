# groupCallDonor

**Description** : *Describes a live story donor in the donation leaderboard &raquo;*

**Layer** : 229

```tl
groupCallDonor#ee430c85 flags:# top:flags.0?true my:flags.1?true peer_id:flags.3?Peer stars:long = GroupCallDonor;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **top** | [`flags.0?true`](type/true) | Whether this donor is included in the top-donor leaderboard |
| **my** | [`flags.1?true`](type/true) | Whether this entry describes the current user's donations |
| **peer_id** | [`flags.3?Peer`](type/Peer) | Donor displayed in the leaderboard |
| <mark>stars</mark> | [`long`](type/long) | Total Stars donated by this donor |

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
		user_id : 1325179286307599718,
	),
	stars : 340784433745265797,
);
```