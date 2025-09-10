# inputBotInlineResultGame

**Description** : *Game*

**Layer** : 214

```tl
inputBotInlineResultGame#4fa417f2 id:string short_name:string send_message:InputBotInlineMessage = InputBotInlineResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`string`](type/string) | Result ID |
| <mark>short_name</mark> | [`string`](type/string) | Game short name |
| <mark>send_message</mark> | [`InputBotInlineMessage`](type/InputBotInlineMessage) | Message to send when the result is selected |

---

## Type

[InputBotInlineResult](type/InputBotInlineResult)

---

## Example

```php
$inputBotInlineResult = $client->inputBotInlineResultGame(
	id : 'HSXFZr72nvyICNdb',
	short_name : 'hJGev5NTSVlapumK',
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : '6HoUvtzIcD1MBL9W',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 44,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 84,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 100,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 31,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 48,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 20,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 86,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 17,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 2,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 38,
				language : 'NhUlnqr6Q4sW1aXk',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 68,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 9,
				user_id : -4983299570380542079,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 30,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 56,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 43,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 33,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 25,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 54,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 11,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 43,
				document_id : 3470301981387682281,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 61,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```