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
		reply_to_msg_id : 81,
		top_msg_id : 4,
		reply_to_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
		quote_text : 'seTcStiK75fzlBuW',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 20,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 12,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 41,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 27,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 82,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 19,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 72,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 38,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 48,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 96,
				language : 'Bnke4LSvFZUmKV90',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 17,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 0,
				user_id : -4503118424073146134,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 10,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 53,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 97,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 5,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 30,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 82,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 33,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 53,
				document_id : -5779014368239822677,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 72,
			),
		),
		quote_offset : 91,
		monoforum_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
		todo_item_id : 78,
	),
	random_id : 6830975286634905828,
);
```