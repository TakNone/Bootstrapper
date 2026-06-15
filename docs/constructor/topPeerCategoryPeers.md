# topPeerCategoryPeers

**Description** : *Top peer category*

**Layer** : 227

```tl
topPeerCategoryPeers#fb834291 category:TopPeerCategory count:int peers:Vector<TopPeer> = TopPeerCategoryPeers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>category</mark> | [`TopPeerCategory`](type/TopPeerCategory) | Top peer category of peers |
| <mark>count</mark> | [`int`](type/int) | Count of peers |
| <mark>peers</mark> | [`Vector<TopPeer>`](type/TopPeer) | Peers |

---

## Type

[TopPeerCategoryPeers](type/TopPeerCategoryPeers)

---

## Example

```php
$topPeerCategoryPeers = $client->topPeerCategoryPeers(
	category : $client->topPeerCategoryBotsPM(),
	count : 95,
	peers : array(
		$client->topPeer(
			peer : $client->peerUser(
				user_id : 2171853148863485029,
			),
			rating : -628955.1845703125,
		),
	),
);
```