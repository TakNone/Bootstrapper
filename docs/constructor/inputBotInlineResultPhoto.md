# inputBotInlineResultPhoto

**Description** : *Photo*

**Layer** : 211

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
	id : 'mUkhod30naDV7B9y',
	type : 'IoRD1cJLOlS0dGEu',
	photo : $client->inputPhotoEmpty(),
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'UJQTdihlOknCRE0a',
		entities : array(
			$client->messageEntityUnknown(
				offset : 81,
				length : 26,
			),
			$client->messageEntityMention(
				offset : 36,
				length : 79,
			),
			$client->messageEntityHashtag(
				offset : 53,
				length : 67,
			),
			$client->messageEntityBotCommand(
				offset : 95,
				length : 37,
			),
			$client->messageEntityUrl(
				offset : 27,
				length : 18,
			),
			$client->messageEntityEmail(
				offset : 73,
				length : 81,
			),
			$client->messageEntityBold(
				offset : 41,
				length : 54,
			),
			$client->messageEntityItalic(
				offset : 77,
				length : 10,
			),
			$client->messageEntityCode(
				offset : 11,
				length : 35,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 18,
				language : '24QeKs93v5HW7Xld',
			),
			$client->messageEntityTextUrl(
				offset : 9,
				length : 2,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 69,
				length : 35,
				user_id : 5774854836181280171,
			),
			$client->inputMessageEntityMentionName(
				offset : 39,
				length : 85,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 6,
				length : 2,
			),
			$client->messageEntityCashtag(
				offset : 88,
				length : 57,
			),
			$client->messageEntityUnderline(
				offset : 66,
				length : 28,
			),
			$client->messageEntityStrike(
				offset : 26,
				length : 86,
			),
			$client->messageEntityBankCard(
				offset : 11,
				length : 36,
			),
			$client->messageEntitySpoiler(
				offset : 36,
				length : 60,
			),
			$client->messageEntityCustomEmoji(
				offset : 8,
				length : 33,
				document_id : -2334448294535445317,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 62,
				length : 10,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```