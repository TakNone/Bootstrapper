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
	id : 'L18vt36RHNbjszOr',
	type : 'mVuBtRTLiEQKHMAo',
	photo : $client->inputPhotoEmpty(),
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'YMduKTCOA3bs4wyj',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 53,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 2,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 33,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 8,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 97,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 24,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 68,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 100,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 75,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 2,
				language : '9GFCiLJqd2RlkjoK',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 12,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 3,
				user_id : 5888597979646198010,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 84,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 50,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 44,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 65,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 45,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 89,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 57,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 36,
				document_id : 8698806436620882488,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 29,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```