# draftMessage

**Description** : *Represents a message draft*

**Layer** : 216

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
		reply_to_msg_id : 76,
		top_msg_id : 59,
		reply_to_peer_id : $client->inputPeerEmpty(),
		quote_text : 'HIqgMCScT7d408wN',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 47,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 82,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 2,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 20,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 13,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 27,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 79,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 46,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 76,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 31,
				language : '3d90cpJAERGmLMUn',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 29,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 9,
				user_id : 2440753780121987576,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 78,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 37,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 10,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 63,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 45,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 80,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 14,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 69,
				document_id : -7894454979240924239,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 76,
			),
		),
		quote_offset : 11,
		monoforum_peer_id : $client->inputPeerEmpty(),
		todo_item_id : 36,
	),
	message : '9ULXnACQgodMT0rw',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 70,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 43,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 2,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 78,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 91,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 7,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 79,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 68,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 5,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 8,
			language : 'v74LFGTkIK6rO8mw',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 64,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 90,
			user_id : 6572052887206668210,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 27,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 9,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 64,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 7,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 57,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 88,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 14,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 32,
			document_id : -2918844020011311343,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 24,
		),
	),
	media : $client->inputMediaEmpty(),
	date : 78,
	effect : -508476518529445366,
	suggested_post : $client->suggestedPost(
		accepted : true,
		rejected : true,
		price : $client->starsAmount(
			amount : -9104049117389649131,
			nanos : 76,
		),
		schedule_date : 92,
	),
);
```