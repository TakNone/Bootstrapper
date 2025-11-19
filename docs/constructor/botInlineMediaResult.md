# botInlineMediaResult

**Description** : *Media result*

**Layer** : 218

```tl
botInlineMediaResult#17db940b flags:# id:string type:string photo:flags.0?Photo document:flags.1?Document title:flags.2?string description:flags.3?string send_message:BotInlineMessage = BotInlineResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>id</mark> | [`string`](type/string) | Result ID |
| <mark>type</mark> | [`string`](type/string) | Result type (see bot API docs) |
| **photo** | [`flags.0?Photo`](type/Photo) | If type is photo, the photo to send |
| **document** | [`flags.1?Document`](type/Document) | If type is document, the document to send |
| **title** | [`flags.2?string`](type/string) | Result title |
| **description** | [`flags.3?string`](type/string) | Description |
| <mark>send_message</mark> | [`BotInlineMessage`](type/BotInlineMessage) | Depending on the type and on the constructor, contains the caption of the media or the content of the message to be sent instead of the media |

---

## Type

[BotInlineResult](type/BotInlineResult)

---

## Example

```php
$botInlineResult = $client->botInlineMediaResult(
	id : 'Gg3OruWMxUiD9jbS',
	type : '4JNiF3cqZWrbp59o',
	photo : $client->photoEmpty(
		id : 7539430874905184830,
	),
	document : $client->documentEmpty(
		id : 2991796984881463598,
	),
	title : 'W2SzQ8qhiaJ0KdG4',
	description : 'SFEO82aDMLXPhr39',
	send_message : $client->botInlineMessageMediaAuto(
		invert_media : true,
		message : 'Torj6wLIWNHMPQ8a',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 74,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 44,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 83,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 61,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 46,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 1,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 88,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 17,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 58,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 84,
				language : 'S3RP8FKBXTl197LH',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 59,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 34,
				user_id : 23783471071018669,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 81,
				user_id : $client->get_input_user(peer : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 74,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 4,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 14,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 79,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 6,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 59,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 51,
				document_id : -2584941934215276904,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 63,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```