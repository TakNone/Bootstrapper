# draftMessage

**Description** : *Represents a message draft*

**Layer** : 211

```tl
draftMessage#96eaa5eb flags:# no_webpage:flags.1?true invert_media:flags.6?true reply_to:flags.4?InputReplyTo message:string entities:flags.3?Vector<MessageEntity> media:flags.5?InputMedia date:int effect:flags.7?long suggested_post:flags.8?SuggestedPost = DraftMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **no_webpage** | [`flags.1?true`](type/true) | Whether no webpage preview will be generated |
| **invert_media** | [`flags.6?true`](type/true) | If set, any eventual webpage preview will be shown on top of the message instead of at the bottom |
| **reply_to** | [`flags.4?InputReplyTo`](type/InputReplyTo) | If set, indicates that the message should be sent in reply to the specified message or story |
| <mark>message</mark> | [`string`](type/string) | The draft |
| **entities** | [`flags.3?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |
| **media** | [`flags.5?InputMedia`](type/InputMedia) | Media |
| <mark>date</mark> | [`int`](type/int) | Date of last update of the draft |
| **effect** | [`flags.7?long`](type/long) | A message effect that should be played as specified here » |
| **suggested_post** | [`flags.8?SuggestedPost`](type/SuggestedPost) | NOTHING |

---

## Type

[DraftMessage](type/DraftMessage)

---

## Example

```php
$draftMessage = $client->draftMessage(
	no_webpage : true,
	invert_media : true,
	reply_to : $client->inputReplyToMessage(
		reply_to_msg_id : 3,
		top_msg_id : 8,
		reply_to_peer_id : $client->inputPeerEmpty(),
		quote_text : 'OdzKrlZ0q6ISkycD',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 10,
				length : 16,
			),
			$client->messageEntityMention(
				offset : 11,
				length : 74,
			),
			$client->messageEntityHashtag(
				offset : 44,
				length : 71,
			),
			$client->messageEntityBotCommand(
				offset : 37,
				length : 66,
			),
			$client->messageEntityUrl(
				offset : 43,
				length : 68,
			),
			$client->messageEntityEmail(
				offset : 1,
				length : 44,
			),
			$client->messageEntityBold(
				offset : 100,
				length : 12,
			),
			$client->messageEntityItalic(
				offset : 67,
				length : 15,
			),
			$client->messageEntityCode(
				offset : 56,
				length : 22,
			),
			$client->messageEntityPre(
				offset : 46,
				length : 73,
				language : 'PdR1NskFZAWGiumT',
			),
			$client->messageEntityTextUrl(
				offset : 59,
				length : 79,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 4,
				length : 87,
				user_id : 2421137679054158302,
			),
			$client->inputMessageEntityMentionName(
				offset : 47,
				length : 0,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 97,
				length : 74,
			),
			$client->messageEntityCashtag(
				offset : 55,
				length : 30,
			),
			$client->messageEntityUnderline(
				offset : 6,
				length : 15,
			),
			$client->messageEntityStrike(
				offset : 59,
				length : 31,
			),
			$client->messageEntityBankCard(
				offset : 50,
				length : 17,
			),
			$client->messageEntitySpoiler(
				offset : 7,
				length : 62,
			),
			$client->messageEntityCustomEmoji(
				offset : 58,
				length : 76,
				document_id : -4167593224559128119,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 16,
				length : 16,
			),
		),
		quote_offset : 65,
		monoforum_peer_id : $client->inputPeerEmpty(),
		todo_item_id : 17,
	),
	message : 'qDblFhSkE12mPBra',
	entities : array(
		$client->messageEntityUnknown(
			offset : 95,
			length : 5,
		),
		$client->messageEntityMention(
			offset : 9,
			length : 49,
		),
		$client->messageEntityHashtag(
			offset : 7,
			length : 60,
		),
		$client->messageEntityBotCommand(
			offset : 35,
			length : 56,
		),
		$client->messageEntityUrl(
			offset : 71,
			length : 4,
		),
		$client->messageEntityEmail(
			offset : 26,
			length : 99,
		),
		$client->messageEntityBold(
			offset : 76,
			length : 31,
		),
		$client->messageEntityItalic(
			offset : 14,
			length : 71,
		),
		$client->messageEntityCode(
			offset : 24,
			length : 65,
		),
		$client->messageEntityPre(
			offset : 47,
			length : 96,
			language : 'YHzE6cbA1xMwLp0K',
		),
		$client->messageEntityTextUrl(
			offset : 8,
			length : 58,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 56,
			length : 25,
			user_id : 2670371959524277111,
		),
		$client->inputMessageEntityMentionName(
			offset : 92,
			length : 19,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 75,
			length : 22,
		),
		$client->messageEntityCashtag(
			offset : 32,
			length : 32,
		),
		$client->messageEntityUnderline(
			offset : 29,
			length : 17,
		),
		$client->messageEntityStrike(
			offset : 94,
			length : 0,
		),
		$client->messageEntityBankCard(
			offset : 67,
			length : 54,
		),
		$client->messageEntitySpoiler(
			offset : 63,
			length : 18,
		),
		$client->messageEntityCustomEmoji(
			offset : 100,
			length : 47,
			document_id : 6599818577983349726,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 28,
			length : 32,
		),
	),
	media : $client->inputMediaEmpty(),
	date : 88,
	effect : 1003122686630006735,
	suggested_post : $client->suggestedPost(
		accepted : true,
		rejected : true,
		price : $client->starsAmount(
			amount : 5770517657840544834,
			nanos : 4,
		),
		schedule_date : 1,
	),
);
```