# inputBotInlineResultPhoto

**Description** : *Photo*

**Layer** : 222

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
	id : 'QfsgYUmRPTuqL5kF',
	type : 'AvbcqdznC0PLaNTf',
	photo : $client->inputPhotoEmpty(),
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'BHDmgJdYtrxGyaC5',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 68,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 55,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 85,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 14,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 99,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 48,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 7,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 35,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 17,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 33,
				language : 'o9wXZpvyVNCJYr8S',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 22,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 8,
				user_id : -3157166572479901842,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 27,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 96,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 59,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 31,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 59,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 67,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 94,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 52,
				document_id : 4952247482189212402,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 4,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```