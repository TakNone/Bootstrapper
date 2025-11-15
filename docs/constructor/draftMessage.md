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
| **suggested_post** | [`flags.8?SuggestedPost`](type/SuggestedPost) | Used to suggest a post to a channel, see here » for more info on the full flow |

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
		reply_to_msg_id : 100,
		top_msg_id : 16,
		reply_to_peer_id : $client->inputPeerEmpty(),
		quote_text : '3p1UE8vyKZinqQo9',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 48,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 49,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 81,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 11,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 0,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 55,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 94,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 67,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 88,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 51,
				language : 'NOHTxoCacW02sGK7',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 7,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 95,
				user_id : 5369603752833812327,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 40,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 62,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 25,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 76,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 12,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 18,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 46,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 100,
				document_id : 4350356845120235809,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 94,
			),
		),
		quote_offset : 86,
		monoforum_peer_id : $client->inputPeerEmpty(),
		todo_item_id : 94,
	),
	message : 'u4yPTwV5JEWafUiX',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 4,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 14,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 13,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 99,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 84,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 4,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 65,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 50,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 93,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 18,
			language : 'VQNlP0EhIsTAUY4G',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 57,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 33,
			user_id : -5828545056802090868,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 43,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 48,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 9,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 23,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 46,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 43,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 74,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 86,
			document_id : -6311043696605172547,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 72,
		),
	),
	media : $client->inputMediaEmpty(),
	date : 23,
	effect : -6620981506209081245,
	suggested_post : $client->suggestedPost(
		accepted : true,
		rejected : true,
		price : $client->starsAmount(
			amount : -334291431752049236,
			nanos : 50,
		),
		schedule_date : 15,
	),
);
```