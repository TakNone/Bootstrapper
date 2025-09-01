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
	id : 'GJDhV0iU1B7dFnRp',
	short_name : '8KgBkc4ZyepNzGAP',
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'QR6kJjgeUtl9hWmA',
		entities : array(
			$client->messageEntityUnknown(
				offset : 26,
				length : 10,
			),
			$client->messageEntityMention(
				offset : 79,
				length : 44,
			),
			$client->messageEntityHashtag(
				offset : 59,
				length : 87,
			),
			$client->messageEntityBotCommand(
				offset : 95,
				length : 20,
			),
			$client->messageEntityUrl(
				offset : 19,
				length : 41,
			),
			$client->messageEntityEmail(
				offset : 73,
				length : 67,
			),
			$client->messageEntityBold(
				offset : 6,
				length : 56,
			),
			$client->messageEntityItalic(
				offset : 57,
				length : 31,
			),
			$client->messageEntityCode(
				offset : 38,
				length : 30,
			),
			$client->messageEntityPre(
				offset : 96,
				length : 31,
				language : 'TKBQwXcd7qg6rIiY',
			),
			$client->messageEntityTextUrl(
				offset : 18,
				length : 8,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 18,
				length : 96,
				user_id : 7410552693286739629,
			),
			$client->inputMessageEntityMentionName(
				offset : 19,
				length : 27,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 1,
				length : 80,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 19,
			),
			$client->messageEntityUnderline(
				offset : 5,
				length : 7,
			),
			$client->messageEntityStrike(
				offset : 23,
				length : 76,
			),
			$client->messageEntityBankCard(
				offset : 8,
				length : 18,
			),
			$client->messageEntitySpoiler(
				offset : 9,
				length : 3,
			),
			$client->messageEntityCustomEmoji(
				offset : 94,
				length : 5,
				document_id : 9141308522070167764,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 20,
				length : 67,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```