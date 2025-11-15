# inputBotInlineResultPhoto

**Description** : *Photo*

**Layer** : 216

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
	id : 'EpmzM3KAfC8rn2d7',
	type : 'zDpO3bN8uPRxCcwV',
	photo : $client->inputPhotoEmpty(),
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'u43zsyh5Y06VtSeW',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 32,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 81,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 50,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 80,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 61,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 95,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 72,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 92,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 59,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 11,
				language : '30e8lZtGwhEJrCpV',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 12,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 26,
				user_id : 1354755227978511371,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 32,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 9,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 7,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 51,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 12,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 96,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 82,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 52,
				document_id : -1810395458761988172,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 35,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```