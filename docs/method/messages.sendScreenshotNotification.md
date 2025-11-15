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
		reply_to_msg_id : 14,
		top_msg_id : 28,
		reply_to_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
		quote_text : 'yAR3GTkSzV2JZaWC',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 77,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 53,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 77,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 19,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 32,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 49,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 78,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 21,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 11,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 13,
				language : 'b7wHoWENJS5BnxKy',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 2,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 15,
				user_id : -782121758679494299,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 4,
				user_id : $client->get_input_user(peer : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 35,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 59,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 3,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 59,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 66,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 50,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 6,
				document_id : 2811705763365731427,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 16,
			),
		),
		quote_offset : 71,
		monoforum_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
		todo_item_id : 35,
	),
	random_id : -5397875671906290398,
);
```