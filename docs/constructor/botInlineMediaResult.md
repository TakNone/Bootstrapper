# botInlineMediaResult

**Description** : *Media result*

**Layer** : 222

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
	id : '6TpRqvOPrfoFizsY',
	type : 'qAaQrkTWV5uHpYnP',
	photo : $client->photoEmpty(
		id : -3772409267836247821,
	),
	document : $client->documentEmpty(
		id : 3042719996192029796,
	),
	title : '8Kywbv4jEgaB2kXJ',
	description : 'i8Tc2Gxfd765mBIr',
	send_message : $client->botInlineMessageMediaAuto(
		invert_media : true,
		message : 'pYrbTaKC4XxFu7Bz',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 95,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 54,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 93,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 87,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 74,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 41,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 18,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 21,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 54,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 74,
				language : 't67k8YUzoBRMpq3D',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 92,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 78,
				user_id : 8009164842526608235,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 66,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 3,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 87,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 47,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 31,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 13,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 88,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 2,
				document_id : 5309011210934294047,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 97,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```