# messages.sendScreenshotNotification

**Description** : *Notify the other user in a private chat that a screenshot of the chat was taken*

**Layer** : 227

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
		reply_to_msg_id : 61,
		top_msg_id : 35,
		reply_to_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
		quote_text : 'fnedAZUH6mPKsuy7',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 39,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 23,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 65,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 4,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 32,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 86,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 83,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 41,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 93,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 27,
				language : 'Y2qsriWc5RyfDphG',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 33,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 22,
				user_id : 5133370421237277724,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 13,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 67,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 9,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 89,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 83,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 15,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 92,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 49,
				document_id : -2092588535589395850,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 26,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 18,
				date : 29,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 84,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 80,
				old_text : 'JSATtm5gyeQhf8uO',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 70,
			),
		),
		quote_offset : 96,
		monoforum_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
		todo_item_id : 31,
		poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	),
	random_id : 2249741584393002110,
);
```