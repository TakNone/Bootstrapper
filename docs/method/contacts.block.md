# contacts.block

**Description** : *Adds a peer to a blocklist, see here » for more info*

**Layer** : 211

```tl
contacts.block#2e2e8734 flags:# my_stories_from:flags.0?true id:InputPeer = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **my_stories_from** | [`flags.0?true`](type/true) | Whether the peer should be added to the story blocklist; if not set, the peer will be added to the main blocklist, see here » for more info |
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
| **INPUT_USER_DEACTIVATED** | `400` | The specified user was deleted |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$bool = $client->contacts->block(
	my_stories_from : true,
	id : $client->inputPeerEmpty(),
);
```