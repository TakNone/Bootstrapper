# messages.sendScreenshotNotification

**Description** : *Notify the other user in a private chat that a screenshot of the chat was taken*

**Layer** : 214

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
		reply_to_msg_id : 45,
		top_msg_id : 14,
		reply_to_peer_id : $client->inputPeerEmpty(),
		quote_text : 'bPyCIv0NQ2ZHMxoY',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 41,
				length : 76,
			),
			$client->messageEntityMention(
				offset : 43,
				length : 81,
			),
			$client->messageEntityHashtag(
				offset : 64,
				length : 39,
			),
			$client->messageEntityBotCommand(
				offset : 65,
				length : 18,
			),
			$client->messageEntityUrl(
				offset : 50,
				length : 19,
			),
			$client->messageEntityEmail(
				offset : 62,
				length : 15,
			),
			$client->messageEntityBold(
				offset : 62,
				length : 82,
			),
			$client->messageEntityItalic(
				offset : 88,
				length : 18,
			),
			$client->messageEntityCode(
				offset : 85,
				length : 99,
			),
			$client->messageEntityPre(
				offset : 21,
				length : 83,
				language : 'W86nRG342Y0rtSOx',
			),
			$client->messageEntityTextUrl(
				offset : 87,
				length : 100,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 6,
				length : 81,
				user_id : -3421940321167259340,
			),
			$client->inputMessageEntityMentionName(
				offset : 79,
				length : 66,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 16,
				length : 60,
			),
			$client->messageEntityCashtag(
				offset : 64,
				length : 38,
			),
			$client->messageEntityUnderline(
				offset : 58,
				length : 84,
			),
			$client->messageEntityStrike(
				offset : 99,
				length : 68,
			),
			$client->messageEntityBankCard(
				offset : 84,
				length : 85,
			),
			$client->messageEntitySpoiler(
				offset : 99,
				length : 52,
			),
			$client->messageEntityCustomEmoji(
				offset : 47,
				length : 40,
				document_id : -323046760359130034,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 92,
				length : 46,
			),
		),
		quote_offset : 11,
		monoforum_peer_id : $client->inputPeerEmpty(),
		todo_item_id : 37,
	),
	random_id : 26491026033988311,
);
```