# messages.sendScreenshotNotification

**Description** : *Notify the other user in a private chat that a screenshot of the chat was taken*

**Layer** : 218

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
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	reply_to : $client->inputReplyToMessage(
		reply_to_msg_id : 30,
		top_msg_id : 21,
		reply_to_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
		quote_text : 'Bo298ZCudUf6Xnqv',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 51,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 74,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 99,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 97,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 32,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 0,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 64,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 89,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 50,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 15,
				language : 'Czc9oT7pE8YBJRKI',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 77,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 9,
				user_id : 4013473373979376021,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 12,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 24,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 58,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 45,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 94,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 71,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 43,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 25,
				document_id : -6163849660818468816,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 52,
			),
		),
		quote_offset : 16,
		monoforum_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
		todo_item_id : 39,
	),
	random_id : 143145667997327866,
);
```