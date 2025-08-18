# messageReactor

**Description** : *Info about a user in the paid Star reactions leaderboard for a message*

**Layer** : 211

```tl
messageReactor#4ba3a95a flags:# top:flags.0?true my:flags.1?true anonymous:flags.2?true peer_id:flags.3?Peer count:int = MessageReactor;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **top** | [`flags.0?true`](type/true) | If set, the reactor is one of the most active reactors; may be unset if the reactor is the current user |
| **my** | [`flags.1?true`](type/true) | If set, this reactor is the current user |
| **anonymous** | [`flags.2?true`](type/true) | If set, the reactor is anonymous |
| **peer_id** | [`flags.3?Peer`](type/Peer) | Identifier of the peer that reacted: may be unset for anonymous reactors different from the current user (i.e. if the current user sent an anonymous reaction anonymous will be set but this field will also be set) |
| <mark>count</mark> | [`int`](type/int) | The number of sent Telegram Stars |

---

## Type

[MessageReactor](type/MessageReactor)

---

## Example

```php
$messageReactor = $client->messageReactor(
	top : true,
	my : true,
	anonymous : true,
	peer_id : $client->peerUser(
		user_id : 414222037897059428,
	),
	count : 17,
);
```