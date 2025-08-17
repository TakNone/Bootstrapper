# botInlineMediaResult

**Description** : *Media result*

**Layer** : 211

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
	id : '8QMOkBevzcdERimf',
	type : 'n7JDhkVcX8lsZt6f',
	photo : $client->photoEmpty(
		id : -5862615077656817062,
	),
	document : $client->documentEmpty(
		id : -2147444980887274110,
	),
	title : 'gpYUxkWnfMyaqrVI',
	description : '4h8nPtgrjZLJUMyB',
	send_message : $client->botInlineMessageMediaAuto(
		invert_media : true,
		message : 'bL9U7pz0rEAflIJH',
		entities : array(
			$client->messageEntityUnknown(
				offset : 85,
				length : 10,
			),
			$client->messageEntityMention(
				offset : 87,
				length : 31,
			),
			$client->messageEntityHashtag(
				offset : 52,
				length : 25,
			),
			$client->messageEntityBotCommand(
				offset : 58,
				length : 67,
			),
			$client->messageEntityUrl(
				offset : 8,
				length : 23,
			),
			$client->messageEntityEmail(
				offset : 64,
				length : 52,
			),
			$client->messageEntityBold(
				offset : 83,
				length : 39,
			),
			$client->messageEntityItalic(
				offset : 62,
				length : 55,
			),
			$client->messageEntityCode(
				offset : 13,
				length : 91,
			),
			$client->messageEntityPre(
				offset : 47,
				length : 47,
				language : 'makMZqIGBhU6x05T',
			),
			$client->messageEntityTextUrl(
				offset : 3,
				length : 37,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 65,
				length : 19,
				user_id : -1030255517869005309,
			),
			$client->inputMessageEntityMentionName(
				offset : 38,
				length : 2,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 82,
				length : 21,
			),
			$client->messageEntityCashtag(
				offset : 91,
				length : 40,
			),
			$client->messageEntityUnderline(
				offset : 73,
				length : 90,
			),
			$client->messageEntityStrike(
				offset : 10,
				length : 7,
			),
			$client->messageEntityBankCard(
				offset : 90,
				length : 47,
			),
			$client->messageEntitySpoiler(
				offset : 4,
				length : 76,
			),
			$client->messageEntityCustomEmoji(
				offset : 11,
				length : 35,
				document_id : 2323466306265896295,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 18,
				length : 96,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```