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
	id : 'RZgWK24FOXHrskvJ',
	type : 'ir1MuxTBK923AncE',
	photo : $client->photoEmpty(
		id : 7045270326255480734,
	),
	document : $client->documentEmpty(
		id : -2259547231708780779,
	),
	title : 'Igb9GE7odx04WizQ',
	description : '6VE4ogDYWnuC7Xxl',
	send_message : $client->botInlineMessageMediaAuto(
		invert_media : true,
		message : '3CxVMcirB2m8ePdI',
		entities : array(
			$client->messageEntityUnknown(
				offset : 22,
				length : 20,
			),
			$client->messageEntityMention(
				offset : 67,
				length : 21,
			),
			$client->messageEntityHashtag(
				offset : 46,
				length : 5,
			),
			$client->messageEntityBotCommand(
				offset : 3,
				length : 80,
			),
			$client->messageEntityUrl(
				offset : 94,
				length : 47,
			),
			$client->messageEntityEmail(
				offset : 11,
				length : 10,
			),
			$client->messageEntityBold(
				offset : 45,
				length : 16,
			),
			$client->messageEntityItalic(
				offset : 54,
				length : 96,
			),
			$client->messageEntityCode(
				offset : 33,
				length : 59,
			),
			$client->messageEntityPre(
				offset : 24,
				length : 71,
				language : 'uZ0UW4tvH5cR1kQe',
			),
			$client->messageEntityTextUrl(
				offset : 3,
				length : 4,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 86,
				length : 35,
				user_id : -8455887518288094877,
			),
			$client->inputMessageEntityMentionName(
				offset : 84,
				length : 9,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 76,
				length : 95,
			),
			$client->messageEntityCashtag(
				offset : 64,
				length : 5,
			),
			$client->messageEntityUnderline(
				offset : 60,
				length : 23,
			),
			$client->messageEntityStrike(
				offset : 38,
				length : 21,
			),
			$client->messageEntityBankCard(
				offset : 79,
				length : 55,
			),
			$client->messageEntitySpoiler(
				offset : 26,
				length : 93,
			),
			$client->messageEntityCustomEmoji(
				offset : 55,
				length : 59,
				document_id : 1293820897153944577,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 29,
				length : 28,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```