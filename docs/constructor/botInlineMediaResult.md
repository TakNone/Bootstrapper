# botInlineMediaResult

**Description** : *Media result*

**Layer** : 216

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
	id : 'iUOzMhmCxTwknrG1',
	type : '7WqEfFs6atb1jBMH',
	photo : $client->photoEmpty(
		id : -2336769399290316714,
	),
	document : $client->documentEmpty(
		id : -2005842676622094286,
	),
	title : 'vKq42aconrIzAXiM',
	description : '7z4y6YCm5ORUqnJK',
	send_message : $client->botInlineMessageMediaAuto(
		invert_media : true,
		message : '3SkYRzviOya8A4lw',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 72,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 60,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 30,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 64,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 77,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 22,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 100,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 87,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 42,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 45,
				language : 'YCuGHfp2bFaUlQDw',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 3,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 59,
				user_id : 4490628280200281549,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 70,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 10,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 67,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 98,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 45,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 68,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 17,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 40,
				document_id : 884532956838194078,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 55,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```