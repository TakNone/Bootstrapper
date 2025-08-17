# stories.getPeerStories

**Description** : *Fetch the full active story list of a specific peer*

**Layer** : 211

```tl
stories.getPeerStories#2c4ada50 peer:InputPeer = stories.PeerStories;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer whose stories should be fetched |

---

## Result

[stories.PeerStories](type/stories.PeerStories)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$storiesPeerStories = $client->stories->getPeerStories(
	peer : $client->inputPeerEmpty(),
);
```