# inputBotInlineResultPhoto

**Description** : *Photo*

**Layer** : 214

```tl
inputBotInlineResultPhoto#a8d864a7 id:string type:string photo:InputPhoto send_message:InputBotInlineMessage = InputBotInlineResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`string`](type/string) | Result ID |
| <mark>type</mark> | [`string`](type/string) | Result type (see bot API docs) |
| <mark>photo</mark> | [`InputPhoto`](type/InputPhoto) | Photo to send |
| <mark>send_message</mark> | [`InputBotInlineMessage`](type/InputBotInlineMessage) | Message to send when the result is selected |

---

## Type

[InputBotInlineResult](type/InputBotInlineResult)

---

## Example

```php
$inputBotInlineResult = $client->inputBotInlineResultPhoto(
	id : 'qtdC4PnFOW8pMZ1i',
	type : '74LM1ST58cnRDNrC',
	photo : $client->inputPhotoEmpty(),
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'OguwNojk6casieH7',
		entities : array(
			$client->messageEntityUnknown(
				offset : 16,
				length : 63,
			),
			$client->messageEntityMention(
				offset : 4,
				length : 98,
			),
			$client->messageEntityHashtag(
				offset : 78,
				length : 85,
			),
			$client->messageEntityBotCommand(
				offset : 56,
				length : 100,
			),
			$client->messageEntityUrl(
				offset : 77,
				length : 73,
			),
			$client->messageEntityEmail(
				offset : 49,
				length : 8,
			),
			$client->messageEntityBold(
				offset : 88,
				length : 94,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 96,
			),
			$client->messageEntityCode(
				offset : 63,
				length : 81,
			),
			$client->messageEntityPre(
				offset : 4,
				length : 18,
				language : 'RH7J6S0PGfznEFAo',
			),
			$client->messageEntityTextUrl(
				offset : 79,
				length : 89,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 74,
				length : 75,
				user_id : -3907545918500589859,
			),
			$client->inputMessageEntityMentionName(
				offset : 25,
				length : 62,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 76,
				length : 26,
			),
			$client->messageEntityCashtag(
				offset : 88,
				length : 57,
			),
			$client->messageEntityUnderline(
				offset : 91,
				length : 77,
			),
			$client->messageEntityStrike(
				offset : 20,
				length : 88,
			),
			$client->messageEntityBankCard(
				offset : 77,
				length : 33,
			),
			$client->messageEntitySpoiler(
				offset : 47,
				length : 97,
			),
			$client->messageEntityCustomEmoji(
				offset : 41,
				length : 27,
				document_id : 9188685159609342580,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 44,
				length : 12,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```