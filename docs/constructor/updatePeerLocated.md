# updatePeerLocated

**Description** : *List of peers near you was updated*

**Layer** : 216

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
				user_id : 3804281072588584659,
			),
			expires : 10,
			distance : 21,
		),
		$client->peerSelfLocated(
			expires : 32,
		),
	),
);
```