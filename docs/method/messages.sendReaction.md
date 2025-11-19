# messages.sendReaction

**Description** : *React to message*

**Layer** : 218

```tl
messages.sendReaction#d30d78d4 flags:# big:flags.1?true add_to_recent:flags.2?true peer:InputPeer msg_id:int reaction:flags.0?Vector<Reaction> = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **big** | [`flags.1?true`](type/true) | Whether a bigger and longer reaction should be shown |
| **add_to_recent** | [`flags.2?true`](type/true) | Whether to add this reaction to the recent reactions list » |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer |
| <mark>msg_id</mark> | [`int`](type/int) | Message ID to react to |
| **reaction** | [`flags.0?Vector<Reaction>`](type/Reaction) | A list of reactions (doesn't accept reactionPaid constructors, use messages.sendPaidReaction to send paid reactions, instead) |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **ANONYMOUS_REACTIONS_DISABLED** | `403` | Sorry, anonymous administrators cannot leave reactions or participate in polls |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **CHAT_WRITE_FORBIDDEN** | `403` | You can't write in this chat |
| **CUSTOM_REACTIONS_TOO_MANY** | `400` | Too many custom reactions were specified |
| **DOCUMENT_INVALID** | `400` | The specified document is invalid |
| **MESSAGE_ID_INVALID** | `400` | The provided message id is invalid |
| **MESSAGE_NOT_MODIFIED** | `400` | The provided message data is identical to the previous message data, the message wasn't modified |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **PREMIUM_ACCOUNT_REQUIRED** | `403` | A premium account is required to execute this action |
| **REACTIONS_TOO_MANY** | `400` | The message already has exactly reactions_uniq_max reaction emojis, you can't react with a new emoji, see the docs for more info » |
| **REACTION_EMPTY** | `400` | Empty reaction provided |
| **REACTION_INVALID** | `400` | The specified reaction is invalid |
| **USER_BANNED_IN_CHANNEL** | `400` | You're banned from sending messages in supergroups/channels |

---

## Example

```php
$updates = $client->messages->sendReaction(
	big : true,
	add_to_recent : true,
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	msg_id : 4,
	reaction : array(
		$client->reactionEmpty(),
		$client->reactionEmoji(
			emoticon : 'QUIxgViOSK8Yd0tH',
		),
		$client->reactionCustomEmoji(
			document_id : -6257154365448234597,
		),
		$client->reactionPaid(),
	),
);
```