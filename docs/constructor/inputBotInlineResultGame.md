# inputBotInlineResultGame

**Description** : *Game*

**Layer** : 218

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
	id : '3dNqyBDu6SmQlRfg',
	short_name : 'lALroURQIFYd1un8',
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'myUgYN9KD2q4RJhC',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 47,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 67,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 35,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 49,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 1,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 57,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 77,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 99,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 44,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 60,
				language : '2VwySuigraYsX7Px',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 20,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 66,
				user_id : 1338070132622631907,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 100,
				user_id : $client->get_input_user(peer : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 14,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 0,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 11,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 62,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 21,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 77,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 18,
				document_id : -2086575535618009979,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 6,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```