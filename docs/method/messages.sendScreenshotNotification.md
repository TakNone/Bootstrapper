# messages.sendScreenshotNotification

**Description** : *Notify the other user in a private chat that a screenshot of the chat was taken*

**Layer** : 216

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
		reply_to_msg_id : 39,
		top_msg_id : 0,
		reply_to_peer_id : $client->inputPeerEmpty(),
		quote_text : 'QtZkCjVRlIopSJOz',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 32,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 90,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 0,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 57,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 41,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 9,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 1,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 16,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 10,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 10,
				language : 'pic7QmgOCIDYW4nN',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 35,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 86,
				user_id : -273359294487885085,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 21,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 36,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 76,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 100,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 62,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 52,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 65,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 48,
				document_id : -1054599923568403737,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 51,
			),
		),
		quote_offset : 92,
		monoforum_peer_id : $client->inputPeerEmpty(),
		todo_item_id : 100,
	),
	random_id : -9143304785100771984,
);
```