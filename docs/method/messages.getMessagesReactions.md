# messages.getMessagesReactions

**Description** : *Get message reactions &raquo;*

**Layer** : 218

```tl
messages.getMessagesReactions#8bba90e6 peer:InputPeer id:Vector<int> = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer |
| <mark>id</mark> | [`Vector<int>`](type/int) | Message IDs |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |

---

## Example

```php
$updates = $client->messages->getMessagesReactions(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	id : array(77),
);
```