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
		reply_to_msg_id : 84,
		top_msg_id : 86,
		reply_to_peer_id : $client->inputPeerEmpty(),
		quote_text : 'gB3nJuxYS5MadEiQ',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 81,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 61,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 68,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 9,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 29,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 40,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 6,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 34,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 17,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 11,
				language : '12cX7j3NqOgrLKtd',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 67,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 25,
				user_id : -311499485680989966,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 51,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 90,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 56,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 46,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 24,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 33,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 87,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 95,
				document_id : -1178714365296096916,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 51,
			),
		),
		quote_offset : 18,
		monoforum_peer_id : $client->inputPeerEmpty(),
		todo_item_id : 30,
	),
	random_id : -5115042509339464794,
);
```