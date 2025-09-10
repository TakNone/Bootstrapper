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
	id : '0v1yxoDBf6KsuEqR',
	type : 'CwctU8ZDW91qxQhm',
	photo : $client->inputPhotoEmpty(),
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'DAw49i7Zr1jy8PVf',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 16,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 31,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 51,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 0,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 44,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 55,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 81,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 46,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 59,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 4,
				language : 'PVOjTlncSGdaLIWX',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 85,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 7,
				user_id : 3457586057668426164,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 19,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 6,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 0,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 1,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 3,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 17,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 89,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 57,
				document_id : -4168030695028935658,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 77,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```