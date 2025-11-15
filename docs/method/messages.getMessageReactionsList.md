# messages.getMessageReactionsList

**Description** : *Get message reaction list, along with the sender of each reaction*

**Layer** : 218

```tl
messages.getMessageReactionsList#461b3f48 flags:# peer:InputPeer id:int reaction:flags.0?Reaction offset:flags.1?string limit:int = messages.MessageReactionsList;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer |
| <mark>id</mark> | [`int`](type/int) | Message ID |
| **reaction** | [`flags.0?Reaction`](type/Reaction) | Get only reactions of this type |
| **offset** | [`flags.1?string`](type/string) | Offset for pagination (taken from the next_offset field of the returned messages.MessageReactionsList); empty in the first request |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of results to return, see pagination |

---

## Result

[messages.MessageReactionsList](type/messages.MessageReactionsList)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BROADCAST_FORBIDDEN** | `403` | Channel poll voters and reactions cannot be fetched to prevent deanonymization |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |

---

## Example

```php
$messagesMessageReactionsList = $client->messages->getMessageReactionsList(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	id : 25,
	reaction : $client->reactionEmpty(),
	offset : '4AzpWK6vuShwLEUq',
	limit : 85,
);
```