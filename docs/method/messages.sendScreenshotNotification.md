# messages.sendScreenshotNotification

**Description** : *Notify the other user in a private chat that a screenshot of the chat was taken*

**Layer** : 211

```tl
messages.sendScreenshotNotification#a1405817 peer:InputPeer reply_to:InputReplyTo random_id:long = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Other user |
| <mark>reply_to</mark> | [`InputReplyTo`](type/InputReplyTo) | Indicates the message that was screenshotted (the specified message ID can also be 0 to avoid indicating any specific message) |
| <mark>random_id</mark> | [`long`](type/long) | Random ID to avoid message resending |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **INPUT_USER_DEACTIVATED** | `400` | The specified user was deleted |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **REPLY_MESSAGE_ID_INVALID** | `400` | The specified reply-to message ID is invalid |
| **STORY_ID_INVALID** | `400` | The specified story ID is invalid |
| **YOU_BLOCKED_USER** | `400` | You blocked this user |

---

## Example

```php
$updates = $client->messages->sendScreenshotNotification(
	peer : $client->inputPeerEmpty(),
	reply_to : $client->inputReplyToMessage(
		reply_to_msg_id : 75,
		top_msg_id : 44,
		reply_to_peer_id : $client->inputPeerEmpty(),
		quote_text : '6q8wpBC4rjWnHdxM',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 70,
				length : 3,
			),
			$client->messageEntityMention(
				offset : 25,
				length : 47,
			),
			$client->messageEntityHashtag(
				offset : 6,
				length : 75,
			),
			$client->messageEntityBotCommand(
				offset : 2,
				length : 85,
			),
			$client->messageEntityUrl(
				offset : 53,
				length : 20,
			),
			$client->messageEntityEmail(
				offset : 63,
				length : 3,
			),
			$client->messageEntityBold(
				offset : 79,
				length : 18,
			),
			$client->messageEntityItalic(
				offset : 38,
				length : 76,
			),
			$client->messageEntityCode(
				offset : 90,
				length : 67,
			),
			$client->messageEntityPre(
				offset : 3,
				length : 41,
				language : 'Yr9ZxtdkviV7wazy',
			),
			$client->messageEntityTextUrl(
				offset : 12,
				length : 7,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 67,
				length : 6,
				user_id : 7470100360105906220,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 91,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 73,
				length : 30,
			),
			$client->messageEntityCashtag(
				offset : 26,
				length : 47,
			),
			$client->messageEntityUnderline(
				offset : 73,
				length : 90,
			),
			$client->messageEntityStrike(
				offset : 1,
				length : 41,
			),
			$client->messageEntityBankCard(
				offset : 39,
				length : 10,
			),
			$client->messageEntitySpoiler(
				offset : 87,
				length : 45,
			),
			$client->messageEntityCustomEmoji(
				offset : 33,
				length : 28,
				document_id : 2672683740755511886,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 78,
				length : 7,
			),
		),
		quote_offset : 0,
		monoforum_peer_id : $client->inputPeerEmpty(),
		todo_item_id : 46,
	),
	random_id : -2152544077221141021,
);
```