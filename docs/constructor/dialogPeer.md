# dialogPeer

**Description** : *Peer*

**Layer** : 216

```tl
dialogPeer#e56dbf05 peer:Peer = DialogPeer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`Peer`](type/Peer) | Peer |

---

## Type

[DialogPeer](type/DialogPeer)

---

## Example

```php
$dialogPeer = $client->dialogPeer(
	peer : $client->peerUser(
		user_id : -847539320320902667,
	),
);
```