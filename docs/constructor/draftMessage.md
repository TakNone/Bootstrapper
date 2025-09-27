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
		reply_to_msg_id : 2,
		top_msg_id : 26,
		reply_to_peer_id : $client->inputPeerEmpty(),
		quote_text : 'iP8jdsNWhYnukEGQ',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 5,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 58,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 8,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 38,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 21,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 12,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 24,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 99,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 77,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 1,
				language : 'BlyiVkWXHRcmrsqe',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 59,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 34,
				user_id : -4267296621806952881,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 38,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 51,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 53,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 53,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 82,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 18,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 45,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 50,
				document_id : -6113230403104415439,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 29,
			),
		),
		quote_offset : 94,
		monoforum_peer_id : $client->inputPeerEmpty(),
		todo_item_id : 24,
	),
	message : 'BkEAGP9rWdunoMgs',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 27,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 69,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 48,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 59,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 67,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 28,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 81,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 98,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 88,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 7,
			language : '3xweo5Q7DuShcfbC',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 15,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 8,
			user_id : -299624109663585822,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 42,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 1,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 35,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 8,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 29,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 83,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 13,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 1,
			document_id : 6725511543779691218,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 68,
		),
	),
	media : $client->inputMediaEmpty(),
	date : 32,
	effect : 1735573532667684308,
	suggested_post : $client->suggestedPost(
		accepted : true,
		rejected : true,
		price : $client->starsAmount(
			amount : 8232663717237324080,
			nanos : 5,
		),
		schedule_date : 47,
	),
);
```