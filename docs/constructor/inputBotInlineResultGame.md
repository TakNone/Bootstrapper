# inputBotInlineResultGame

**Description** : *Game*

**Layer** : 216

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
	id : 'SAozapOurDQmJ5HN',
	short_name : 'kLVs9IdlmBJRHXOU',
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'UAuVNKX9EFwqLghB',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 35,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 99,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 78,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 99,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 31,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 94,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 39,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 14,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 97,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 95,
				language : 'dR63qXIUzJgMmOcx',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 47,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 50,
				user_id : 1623267188780838929,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 64,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 67,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 95,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 82,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 89,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 95,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 80,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 42,
				document_id : -7647111746178929957,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 54,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```