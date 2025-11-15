# updatePeerLocated

**Description** : *List of peers near you was updated*

**Layer** : 218

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
				user_id : 3100871496211895951,
			),
			expires : 38,
			distance : 94,
		),
		$client->peerSelfLocated(
			expires : 5,
		),
	),
);
```