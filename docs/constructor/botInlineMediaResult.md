# botInlineMediaResult

**Description** : *Media result*

**Layer** : 214

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
	id : 'WFtxNe89AvJGbPQj',
	type : 'lK5yqweCG7ZJYic2',
	photo : $client->photoEmpty(
		id : 561128319437274816,
	),
	document : $client->documentEmpty(
		id : 3405195318784280406,
	),
	title : 'nAXGHBfb8hWmVJg9',
	description : 'n1u4DfVZb2aCEvlJ',
	send_message : $client->botInlineMessageMediaAuto(
		invert_media : true,
		message : 'NjG2KZ9lbs1XAFvO',
		entities : array(
			$client->messageEntityUnknown(
				offset : 77,
				length : 89,
			),
			$client->messageEntityMention(
				offset : 89,
				length : 15,
			),
			$client->messageEntityHashtag(
				offset : 36,
				length : 97,
			),
			$client->messageEntityBotCommand(
				offset : 95,
				length : 56,
			),
			$client->messageEntityUrl(
				offset : 98,
				length : 37,
			),
			$client->messageEntityEmail(
				offset : 93,
				length : 26,
			),
			$client->messageEntityBold(
				offset : 36,
				length : 18,
			),
			$client->messageEntityItalic(
				offset : 72,
				length : 78,
			),
			$client->messageEntityCode(
				offset : 8,
				length : 20,
			),
			$client->messageEntityPre(
				offset : 96,
				length : 80,
				language : 'QKTAkZhXlHcFmnWL',
			),
			$client->messageEntityTextUrl(
				offset : 88,
				length : 96,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 32,
				length : 43,
				user_id : -6081673548795039868,
			),
			$client->inputMessageEntityMentionName(
				offset : 90,
				length : 88,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 97,
				length : 75,
			),
			$client->messageEntityCashtag(
				offset : 36,
				length : 99,
			),
			$client->messageEntityUnderline(
				offset : 99,
				length : 68,
			),
			$client->messageEntityStrike(
				offset : 63,
				length : 94,
			),
			$client->messageEntityBankCard(
				offset : 17,
				length : 48,
			),
			$client->messageEntitySpoiler(
				offset : 84,
				length : 28,
			),
			$client->messageEntityCustomEmoji(
				offset : 69,
				length : 52,
				document_id : -7840752170120394697,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 50,
				length : 7,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```