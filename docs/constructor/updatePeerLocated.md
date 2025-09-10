# updatePeerLocated

**Layer** : 214

```tl
updatePeerLocated#b4afcfb0 peers:Vector<PeerLocated> = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peers</mark> | [`Vector<PeerLocated>`](type/PeerLocated) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updatePeerLocated(
	peers : array(
		$client->peerLocated(
			peer : $client->peerUser(
				user_id : -7643137563251215000,
			),
			expires : 21,
			distance : 72,
		),
		$client->peerSelfLocated(
			expires : 72,
		),
	),
);
```