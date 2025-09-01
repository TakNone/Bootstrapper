# messages.saveDraft

**Description** : *Save a message draft associated to a chat*

**Layer** : 214

```tl
messages.saveDraft#54ae308e flags:# no_webpage:flags.1?true invert_media:flags.6?true reply_to:flags.4?InputReplyTo peer:InputPeer message:string entities:flags.3?Vector<MessageEntity> media:flags.5?InputMedia effect:flags.7?long suggested_post:flags.8?SuggestedPost = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **no_webpage** | [`flags.1?true`](type/true) | Disable generation of the webpage preview |
| **invert_media** | [`flags.6?true`](type/true) | If set, any eventual webpage preview will be shown on top of the message instead of at the bottom |
| **reply_to** | [`flags.4?InputReplyTo`](type/InputReplyTo) | If set, indicates that the message should be sent in reply to the specified message or story |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Destination of the message that should be sent |
| <mark>message</mark> | [`string`](type/string) | The draft |
| **entities** | [`flags.3?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |
| **media** | [`flags.5?InputMedia`](type/InputMedia) | Attached media |
| **effect** | [`flags.7?long`](type/long) | Specifies a message effect » to use for the message |
| **suggested_post** | [`flags.8?SuggestedPost`](type/SuggestedPost) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **ENTITY_BOUNDS_INVALID** | `400` | A specified entity offset or length is invalid, see here » for info on how to properly compute the entity offset/length |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$bool = $client->messages->saveDraft(
	no_webpage : true,
	invert_media : true,
	reply_to : $client->inputReplyToMessage(
		reply_to_msg_id : 21,
		top_msg_id : 88,
		reply_to_peer_id : $client->inputPeerEmpty(),
		quote_text : 'ZIq0c3vr6b2e9UPD',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 29,
				length : 34,
			),
			$client->messageEntityMention(
				offset : 3,
				length : 82,
			),
			$client->messageEntityHashtag(
				offset : 12,
				length : 52,
			),
			$client->messageEntityBotCommand(
				offset : 13,
				length : 7,
			),
			$client->messageEntityUrl(
				offset : 11,
				length : 60,
			),
			$client->messageEntityEmail(
				offset : 12,
				length : 28,
			),
			$client->messageEntityBold(
				offset : 38,
				length : 66,
			),
			$client->messageEntityItalic(
				offset : 68,
				length : 94,
			),
			$client->messageEntityCode(
				offset : 5,
				length : 21,
			),
			$client->messageEntityPre(
				offset : 56,
				length : 32,
				language : 'iU52mTgh7DO0rvtV',
			),
			$client->messageEntityTextUrl(
				offset : 62,
				length : 78,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 89,
				length : 46,
				user_id : 8580949989384177056,
			),
			$client->inputMessageEntityMentionName(
				offset : 95,
				length : 71,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 31,
				length : 72,
			),
			$client->messageEntityCashtag(
				offset : 25,
				length : 21,
			),
			$client->messageEntityUnderline(
				offset : 48,
				length : 83,
			),
			$client->messageEntityStrike(
				offset : 72,
				length : 100,
			),
			$client->messageEntityBankCard(
				offset : 99,
				length : 88,
			),
			$client->messageEntitySpoiler(
				offset : 21,
				length : 64,
			),
			$client->messageEntityCustomEmoji(
				offset : 73,
				length : 89,
				document_id : -6162287925341114433,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 97,
				length : 86,
			),
		),
		quote_offset : 91,
		monoforum_peer_id : $client->inputPeerEmpty(),
		todo_item_id : 85,
	),
	peer : $client->inputPeerEmpty(),
	message : 'FaOGHXqykwebDQpi',
	entities : array(
		$client->messageEntityUnknown(
			offset : 60,
			length : 39,
		),
		$client->messageEntityMention(
			offset : 31,
			length : 39,
		),
		$client->messageEntityHashtag(
			offset : 1,
			length : 30,
		),
		$client->messageEntityBotCommand(
			offset : 13,
			length : 28,
		),
		$client->messageEntityUrl(
			offset : 47,
			length : 94,
		),
		$client->messageEntityEmail(
			offset : 21,
			length : 18,
		),
		$client->messageEntityBold(
			offset : 41,
			length : 95,
		),
		$client->messageEntityItalic(
			offset : 76,
			length : 91,
		),
		$client->messageEntityCode(
			offset : 79,
			length : 59,
		),
		$client->messageEntityPre(
			offset : 76,
			length : 12,
			language : '6e3RDHLa0rxIQKVd',
		),
		$client->messageEntityTextUrl(
			offset : 47,
			length : 99,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 94,
			length : 66,
			user_id : 320788865815061746,
		),
		$client->inputMessageEntityMentionName(
			offset : 22,
			length : 77,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 53,
			length : 90,
		),
		$client->messageEntityCashtag(
			offset : 3,
			length : 96,
		),
		$client->messageEntityUnderline(
			offset : 31,
			length : 93,
		),
		$client->messageEntityStrike(
			offset : 32,
			length : 68,
		),
		$client->messageEntityBankCard(
			offset : 78,
			length : 96,
		),
		$client->messageEntitySpoiler(
			offset : 11,
			length : 42,
		),
		$client->messageEntityCustomEmoji(
			offset : 4,
			length : 63,
			document_id : 1671841915405343999,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 51,
			length : 42,
		),
	),
	media : $client->inputMediaEmpty(),
	effect : 84573115458782900,
	suggested_post : $client->suggestedPost(
		accepted : true,
		rejected : true,
		price : $client->starsAmount(
			amount : -7726060626564529909,
			nanos : 14,
		),
		schedule_date : 29,
	),
);
```