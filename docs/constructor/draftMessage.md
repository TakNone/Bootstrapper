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
		reply_to_msg_id : 82,
		top_msg_id : 5,
		reply_to_peer_id : $client->inputPeerEmpty(),
		quote_text : '1hceCEB5fIT82o0M',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 15,
				length : 3,
			),
			$client->messageEntityMention(
				offset : 7,
				length : 85,
			),
			$client->messageEntityHashtag(
				offset : 99,
				length : 84,
			),
			$client->messageEntityBotCommand(
				offset : 84,
				length : 36,
			),
			$client->messageEntityUrl(
				offset : 46,
				length : 61,
			),
			$client->messageEntityEmail(
				offset : 42,
				length : 29,
			),
			$client->messageEntityBold(
				offset : 73,
				length : 16,
			),
			$client->messageEntityItalic(
				offset : 82,
				length : 32,
			),
			$client->messageEntityCode(
				offset : 97,
				length : 65,
			),
			$client->messageEntityPre(
				offset : 18,
				length : 17,
				language : 'fctLpyboS0wRNvsn',
			),
			$client->messageEntityTextUrl(
				offset : 96,
				length : 85,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 56,
				length : 94,
				user_id : -4603300040003137503,
			),
			$client->inputMessageEntityMentionName(
				offset : 87,
				length : 13,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 95,
				length : 99,
			),
			$client->messageEntityCashtag(
				offset : 19,
				length : 83,
			),
			$client->messageEntityUnderline(
				offset : 69,
				length : 65,
			),
			$client->messageEntityStrike(
				offset : 32,
				length : 72,
			),
			$client->messageEntityBankCard(
				offset : 65,
				length : 18,
			),
			$client->messageEntitySpoiler(
				offset : 34,
				length : 52,
			),
			$client->messageEntityCustomEmoji(
				offset : 40,
				length : 38,
				document_id : -3828608969923146979,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 69,
				length : 28,
			),
		),
		quote_offset : 77,
		monoforum_peer_id : $client->inputPeerEmpty(),
		todo_item_id : 16,
	),
	message : 'lUGcd9ThrVnOJa2b',
	entities : array(
		$client->messageEntityUnknown(
			offset : 60,
			length : 67,
		),
		$client->messageEntityMention(
			offset : 95,
			length : 78,
		),
		$client->messageEntityHashtag(
			offset : 93,
			length : 55,
		),
		$client->messageEntityBotCommand(
			offset : 76,
			length : 76,
		),
		$client->messageEntityUrl(
			offset : 9,
			length : 38,
		),
		$client->messageEntityEmail(
			offset : 31,
			length : 12,
		),
		$client->messageEntityBold(
			offset : 2,
			length : 24,
		),
		$client->messageEntityItalic(
			offset : 73,
			length : 25,
		),
		$client->messageEntityCode(
			offset : 36,
			length : 95,
		),
		$client->messageEntityPre(
			offset : 84,
			length : 84,
			language : 'va6EVYXLKq9Hpbhl',
		),
		$client->messageEntityTextUrl(
			offset : 90,
			length : 17,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 15,
			length : 84,
			user_id : 8894990792763202802,
		),
		$client->inputMessageEntityMentionName(
			offset : 39,
			length : 85,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 42,
			length : 9,
		),
		$client->messageEntityCashtag(
			offset : 13,
			length : 31,
		),
		$client->messageEntityUnderline(
			offset : 50,
			length : 54,
		),
		$client->messageEntityStrike(
			offset : 57,
			length : 55,
		),
		$client->messageEntityBankCard(
			offset : 58,
			length : 40,
		),
		$client->messageEntitySpoiler(
			offset : 55,
			length : 15,
		),
		$client->messageEntityCustomEmoji(
			offset : 13,
			length : 47,
			document_id : -7524763774158185468,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 22,
			length : 87,
		),
	),
	media : $client->inputMediaEmpty(),
	date : 64,
	effect : -7577297033542627019,
	suggested_post : $client->suggestedPost(
		accepted : true,
		rejected : true,
		price : $client->starsAmount(
			amount : -9081998298442927303,
			nanos : 6,
		),
		schedule_date : 17,
	),
);
```