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
		reply_to_msg_id : 26,
		top_msg_id : 79,
		reply_to_peer_id : $client->inputPeerEmpty(),
		quote_text : 'IatsobKwvrhlyVJ7',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 87,
				length : 6,
			),
			$client->messageEntityMention(
				offset : 9,
				length : 43,
			),
			$client->messageEntityHashtag(
				offset : 55,
				length : 5,
			),
			$client->messageEntityBotCommand(
				offset : 19,
				length : 61,
			),
			$client->messageEntityUrl(
				offset : 32,
				length : 56,
			),
			$client->messageEntityEmail(
				offset : 83,
				length : 91,
			),
			$client->messageEntityBold(
				offset : 84,
				length : 26,
			),
			$client->messageEntityItalic(
				offset : 84,
				length : 65,
			),
			$client->messageEntityCode(
				offset : 22,
				length : 24,
			),
			$client->messageEntityPre(
				offset : 53,
				length : 49,
				language : 'CB0I9inJuQpl1tAZ',
			),
			$client->messageEntityTextUrl(
				offset : 88,
				length : 47,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 24,
				length : 3,
				user_id : 8089715203529826601,
			),
			$client->inputMessageEntityMentionName(
				offset : 21,
				length : 98,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 95,
				length : 4,
			),
			$client->messageEntityCashtag(
				offset : 2,
				length : 35,
			),
			$client->messageEntityUnderline(
				offset : 69,
				length : 52,
			),
			$client->messageEntityStrike(
				offset : 65,
				length : 33,
			),
			$client->messageEntityBankCard(
				offset : 10,
				length : 77,
			),
			$client->messageEntitySpoiler(
				offset : 98,
				length : 71,
			),
			$client->messageEntityCustomEmoji(
				offset : 26,
				length : 79,
				document_id : 45568091598769766,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 62,
				length : 74,
			),
		),
		quote_offset : 24,
		monoforum_peer_id : $client->inputPeerEmpty(),
		todo_item_id : 0,
	),
	random_id : -37931071474913193,
);
```