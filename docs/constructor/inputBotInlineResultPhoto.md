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
	id : '1k5X2yZQCtKvVfEF',
	type : 'ZFKWOLBletu46iVP',
	photo : $client->inputPhotoEmpty(),
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'D8Lj39Pi4MKJYhqC',
		entities : array(
			$client->messageEntityUnknown(
				offset : 91,
				length : 26,
			),
			$client->messageEntityMention(
				offset : 37,
				length : 23,
			),
			$client->messageEntityHashtag(
				offset : 48,
				length : 5,
			),
			$client->messageEntityBotCommand(
				offset : 29,
				length : 39,
			),
			$client->messageEntityUrl(
				offset : 80,
				length : 32,
			),
			$client->messageEntityEmail(
				offset : 71,
				length : 37,
			),
			$client->messageEntityBold(
				offset : 58,
				length : 44,
			),
			$client->messageEntityItalic(
				offset : 80,
				length : 86,
			),
			$client->messageEntityCode(
				offset : 85,
				length : 4,
			),
			$client->messageEntityPre(
				offset : 17,
				length : 61,
				language : '2LHhDleaZsczgOkx',
			),
			$client->messageEntityTextUrl(
				offset : 44,
				length : 4,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 69,
				length : 95,
				user_id : -7843725750095782196,
			),
			$client->inputMessageEntityMentionName(
				offset : 16,
				length : 86,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 39,
				length : 52,
			),
			$client->messageEntityCashtag(
				offset : 61,
				length : 33,
			),
			$client->messageEntityUnderline(
				offset : 45,
				length : 29,
			),
			$client->messageEntityStrike(
				offset : 65,
				length : 67,
			),
			$client->messageEntityBankCard(
				offset : 88,
				length : 44,
			),
			$client->messageEntitySpoiler(
				offset : 40,
				length : 61,
			),
			$client->messageEntityCustomEmoji(
				offset : 78,
				length : 58,
				document_id : 3622688090884221278,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 89,
				length : 31,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```