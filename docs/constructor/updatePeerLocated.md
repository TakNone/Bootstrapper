# updatePeerLocated

**Description** : *List of peers near you was updated*

**Layer** : 214

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
				user_id : 1037862572571226260,
			),
			expires : 85,
			distance : 94,
		),
		$client->peerSelfLocated(
			expires : 57,
		),
	),
);
```