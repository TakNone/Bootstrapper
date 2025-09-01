# draftMessage

**Description** : *Represents a message draft*

**Layer** : 214

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
		reply_to_msg_id : 52,
		top_msg_id : 54,
		reply_to_peer_id : $client->inputPeerEmpty(),
		quote_text : '5G1Twy3jYdUmgnSQ',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 61,
				length : 66,
			),
			$client->messageEntityMention(
				offset : 7,
				length : 1,
			),
			$client->messageEntityHashtag(
				offset : 91,
				length : 91,
			),
			$client->messageEntityBotCommand(
				offset : 46,
				length : 84,
			),
			$client->messageEntityUrl(
				offset : 47,
				length : 36,
			),
			$client->messageEntityEmail(
				offset : 8,
				length : 98,
			),
			$client->messageEntityBold(
				offset : 41,
				length : 28,
			),
			$client->messageEntityItalic(
				offset : 84,
				length : 37,
			),
			$client->messageEntityCode(
				offset : 56,
				length : 10,
			),
			$client->messageEntityPre(
				offset : 45,
				length : 69,
				language : '8skDV1MGaAWhKnTI',
			),
			$client->messageEntityTextUrl(
				offset : 42,
				length : 94,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 67,
				user_id : 1847613179579294329,
			),
			$client->inputMessageEntityMentionName(
				offset : 99,
				length : 29,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 22,
				length : 7,
			),
			$client->messageEntityCashtag(
				offset : 11,
				length : 20,
			),
			$client->messageEntityUnderline(
				offset : 95,
				length : 43,
			),
			$client->messageEntityStrike(
				offset : 47,
				length : 59,
			),
			$client->messageEntityBankCard(
				offset : 86,
				length : 70,
			),
			$client->messageEntitySpoiler(
				offset : 16,
				length : 78,
			),
			$client->messageEntityCustomEmoji(
				offset : 92,
				length : 46,
				document_id : -7562934046302164401,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 82,
				length : 51,
			),
		),
		quote_offset : 57,
		monoforum_peer_id : $client->inputPeerEmpty(),
		todo_item_id : 49,
	),
	message : 'd4IvATnELw1JqZhg',
	entities : array(
		$client->messageEntityUnknown(
			offset : 61,
			length : 74,
		),
		$client->messageEntityMention(
			offset : 68,
			length : 30,
		),
		$client->messageEntityHashtag(
			offset : 87,
			length : 86,
		),
		$client->messageEntityBotCommand(
			offset : 17,
			length : 85,
		),
		$client->messageEntityUrl(
			offset : 64,
			length : 71,
		),
		$client->messageEntityEmail(
			offset : 11,
			length : 2,
		),
		$client->messageEntityBold(
			offset : 58,
			length : 54,
		),
		$client->messageEntityItalic(
			offset : 34,
			length : 18,
		),
		$client->messageEntityCode(
			offset : 94,
			length : 66,
		),
		$client->messageEntityPre(
			offset : 58,
			length : 18,
			language : 'v2VDFiI5qYt0nE7u',
		),
		$client->messageEntityTextUrl(
			offset : 15,
			length : 21,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 95,
			length : 6,
			user_id : -7149382798867424901,
		),
		$client->inputMessageEntityMentionName(
			offset : 94,
			length : 96,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 30,
			length : 36,
		),
		$client->messageEntityCashtag(
			offset : 78,
			length : 81,
		),
		$client->messageEntityUnderline(
			offset : 56,
			length : 21,
		),
		$client->messageEntityStrike(
			offset : 10,
			length : 53,
		),
		$client->messageEntityBankCard(
			offset : 59,
			length : 60,
		),
		$client->messageEntitySpoiler(
			offset : 28,
			length : 23,
		),
		$client->messageEntityCustomEmoji(
			offset : 96,
			length : 71,
			document_id : 8320959828592469711,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 79,
			length : 19,
		),
	),
	media : $client->inputMediaEmpty(),
	date : 48,
	effect : 6811718305963921496,
	suggested_post : $client->suggestedPost(
		accepted : true,
		rejected : true,
		price : $client->starsAmount(
			amount : 6147208667741904628,
			nanos : 43,
		),
		schedule_date : 89,
	),
);
```