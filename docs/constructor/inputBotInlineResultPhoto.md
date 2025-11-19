# inputBotInlineResultPhoto

**Description** : *Photo*

**Layer** : 218

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
	id : 'XsIanievQjpJNmoB',
	type : 'sZMujNhf075tDaEP',
	photo : $client->inputPhotoEmpty(),
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'TMrcxSqX15dtk60e',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 3,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 41,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 29,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 45,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 48,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 97,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 96,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 82,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 82,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 5,
				language : 'lB0xTfwbnKZhazNo',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 44,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 28,
				user_id : 2995283610109339557,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 59,
				user_id : $client->get_input_user(peer : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 72,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 6,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 10,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 60,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 50,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 99,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 1,
				document_id : 2337766317814685845,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 94,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```