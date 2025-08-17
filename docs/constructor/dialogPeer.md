# dialogPeer

**Description** : *Peer*

**Layer** : 211

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
		user_id : 2928380847153207687,
	),
);
```