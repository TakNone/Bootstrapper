# contacts.unblock

**Description** : *Deletes a peer from a blocklist, see here » for more info*

**Layer** : 211

```tl
contacts.unblock#b550d328 flags:# my_stories_from:flags.0?true id:InputPeer = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **my_stories_from** | [`flags.0?true`](type/true) | Whether the peer should be removed from the story blocklist; if not set, the peer will be removed from the main blocklist, see here » for more info |
| <mark>id</mark> | [`InputPeer`](type/InputPeer) | Peer |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **CONTACT_ID_INVALID** | `400` | The provided contact ID is invalid |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$bool = $client->contacts->unblock(
	my_stories_from : true,
	id : $client->inputPeerEmpty(),
);
```