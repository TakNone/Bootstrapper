# updatePeerLocated

**Description** : *List of peers near you was updated*

**Layer** : 222

```tl
updatePeerLocated#b4afcfb0 peers:Vector<PeerLocated> = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peers</mark> | [`Vector<PeerLocated>`](type/PeerLocated) | Geolocated peer list update |

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
				user_id : -183006307341311970,
			),
			expires : 3,
			distance : 59,
		),
		$client->peerSelfLocated(
			expires : 44,
		),
	),
);
```