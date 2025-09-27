# myBoost

**Description** : *Contains information about a single boost slot &raquo;*

**Layer** : 214

```tl
myBoost#c448415c flags:# slot:int peer:flags.0?Peer date:int expires:int cooldown_until_date:flags.1?int = MyBoost;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>slot</mark> | [`int`](type/int) | Boost slot ID » |
| **peer** | [`flags.0?Peer`](type/Peer) | If set, indicates this slot is currently occupied, i.e. we are boosting this peer.  Note that we can assign multiple boost slots to the same peer |
| <mark>date</mark> | [`int`](type/int) | When (unixtime) we started boosting the peer, 0 otherwise |
| <mark>expires</mark> | [`int`](type/int) | Indicates the (unixtime) expiration date of the boost in peer (0 if peer is not set) |
| **cooldown_until_date** | [`flags.1?int`](type/int) | If peer is set, indicates the (unixtime) date after which this boost can be reassigned to another channel |

---

## Type

[MyBoost](type/MyBoost)

---

## Example

```php
$myBoost = $client->myBoost(
	slot : 25,
	peer : $client->peerUser(
		user_id : -7237573789257382625,
	),
	date : 5,
	expires : 10,
	cooldown_until_date : 19,
);
```