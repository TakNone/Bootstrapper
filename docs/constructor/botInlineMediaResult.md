# botInlineMediaResult

**Description** : *Media result*

**Layer** : 227

```tl
botInlineMediaResult#17db940b flags:# id:string type:string photo:flags.0?Photo document:flags.1?Document title:flags.2?string description:flags.3?string send_message:BotInlineMessage = BotInlineResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	id : 'GI0V6UPbFmvHcYkT',
	type : 'kqPAexVj5poSYOdh',
	photo : $client->photoEmpty(
		id : 8450067532632865833,
	),
	document : $client->documentEmpty(
		id : 3317129737277164060,
	),
	title : 'VzsPK6yhU8eT0uwd',
	description : '3XBpNgufFbjGLZYy',
	send_message : $client->botInlineMessageMediaAuto(
		invert_media : true,
		message : 'R37w85LOEonAzCvb',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 92,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 74,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 0,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 99,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 54,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 54,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 4,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 11,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 75,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 61,
				language : 'VXz4i7jp8hecLPxy',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 89,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 49,
				user_id : -4176780529029785832,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 59,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 64,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 19,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 6,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 57,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 45,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 41,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 0,
				document_id : 6297929812692499018,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 20,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 79,
				date : 70,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 87,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 42,
				old_text : 'qRBbWKSU5QP1gGup',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 60,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```