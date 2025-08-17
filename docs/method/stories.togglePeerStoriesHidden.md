# stories.togglePeerStoriesHidden

**Description** : *Hide the active stories of a user, preventing them from being displayed on the action bar on the homescreen, see here » for more info*

**Layer** : 211

```tl
stories.togglePeerStoriesHidden#bd0415c4 peer:InputPeer hidden:Bool = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer whose stories should be (un)hidden |
| <mark>hidden</mark> | [`Bool`](type/Bool) | Whether to hide or unhide stories |

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
$bool = $client->stories->togglePeerStoriesHidden(
	peer : $client->inputPeerEmpty(),
	hidden : $client->boolFalse(),
);
```