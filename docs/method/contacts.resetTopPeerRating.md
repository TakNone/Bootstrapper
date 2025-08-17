# contacts.resetTopPeerRating

**Description** : *Reset rating of top peer*

**Layer** : 211

```tl
contacts.resetTopPeerRating#1ae373ac category:TopPeerCategory peer:InputPeer = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>category</mark> | [`TopPeerCategory`](type/TopPeerCategory) | Top peer category |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer whose rating should be reset |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$bool = $client->contacts->resetTopPeerRating(
	category : $client->topPeerCategoryBotsPM(),
	peer : $client->inputPeerEmpty(),
);
```