# inputBotInlineResultGame

**Description** : *Game*

**Layer** : 211

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
	id : 'u5VPdajpKAIniEUt',
	short_name : '2Mim4UzrfjIndX5N',
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'e6yH1U7muKWJqv29',
		entities : array(
			$client->messageEntityUnknown(
				offset : 56,
				length : 94,
			),
			$client->messageEntityMention(
				offset : 33,
				length : 43,
			),
			$client->messageEntityHashtag(
				offset : 48,
				length : 85,
			),
			$client->messageEntityBotCommand(
				offset : 88,
				length : 88,
			),
			$client->messageEntityUrl(
				offset : 5,
				length : 85,
			),
			$client->messageEntityEmail(
				offset : 36,
				length : 77,
			),
			$client->messageEntityBold(
				offset : 70,
				length : 64,
			),
			$client->messageEntityItalic(
				offset : 85,
				length : 8,
			),
			$client->messageEntityCode(
				offset : 6,
				length : 21,
			),
			$client->messageEntityPre(
				offset : 80,
				length : 29,
				language : 'HAbSscr6Vke3ajPg',
			),
			$client->messageEntityTextUrl(
				offset : 22,
				length : 3,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 15,
				user_id : -4130544356673053413,
			),
			$client->inputMessageEntityMentionName(
				offset : 79,
				length : 8,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 6,
				length : 66,
			),
			$client->messageEntityCashtag(
				offset : 88,
				length : 45,
			),
			$client->messageEntityUnderline(
				offset : 49,
				length : 9,
			),
			$client->messageEntityStrike(
				offset : 85,
				length : 41,
			),
			$client->messageEntityBankCard(
				offset : 76,
				length : 74,
			),
			$client->messageEntitySpoiler(
				offset : 45,
				length : 86,
			),
			$client->messageEntityCustomEmoji(
				offset : 85,
				length : 23,
				document_id : 2298004251322913936,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 10,
				length : 73,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```