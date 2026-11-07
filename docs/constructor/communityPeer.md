# communityPeer

**Layer** : 233

```tl
communityPeer#76141ebd flags:# can_view_history:flags.2?true visible:flags.0?Bool peer:Peer = CommunityPeer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **can_view_history** | [`flags.2?true`](type/true) | NOTHING |
| **visible** | [`flags.0?Bool`](type/Bool) | NOTHING |
| <mark>peer</mark> | [`Peer`](type/Peer) | NOTHING |

---

## Type

[CommunityPeer](type/CommunityPeer)

---

## Example

```php
$communityPeer = $client->communityPeer(
	can_view_history : true,
	visible : true,
	peer : $client->peerUser(
		user_id : 3042528451601805341,
	),
);
```