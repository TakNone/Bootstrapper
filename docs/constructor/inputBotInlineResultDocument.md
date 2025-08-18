# inputBotInlineResultDocument

**Description** : *Document \(media of any type except for photos\)*

**Layer** : 211

```tl
inputBotInlineResultDocument#fff8fdc4 flags:# id:string type:string title:flags.1?string description:flags.2?string document:InputDocument send_message:InputBotInlineMessage = InputBotInlineResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>id</mark> | [`string`](type/string) | Result ID |
| <mark>type</mark> | [`string`](type/string) | Result type (see bot API docs) |
| **title** | [`flags.1?string`](type/string) | Result title |
| **description** | [`flags.2?string`](type/string) | Result description |
| <mark>document</mark> | [`InputDocument`](type/InputDocument) | Document to send |
| <mark>send_message</mark> | [`InputBotInlineMessage`](type/InputBotInlineMessage) | Message to send when the result is selected |

---

## Type

[InputBotInlineResult](type/InputBotInlineResult)

---

## Example

```php
$inputBotInlineResult = $client->inputBotInlineResultDocument(
	id : 'qEnYUCxauespiovK',
	type : 'uOTr7sxEgp2WFAJN',
	title : '3AeayNtpxBoV8Zvi',
	description : 'JeFLc8DaAnKMbvYz',
	document : $client->inputDocumentEmpty(),
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'ZlaHwpUVkiy2RDdI',
		entities : array(
			$client->messageEntityUnknown(
				offset : 96,
				length : 90,
			),
			$client->messageEntityMention(
				offset : 68,
				length : 4,
			),
			$client->messageEntityHashtag(
				offset : 62,
				length : 21,
			),
			$client->messageEntityBotCommand(
				offset : 32,
				length : 87,
			),
			$client->messageEntityUrl(
				offset : 86,
				length : 69,
			),
			$client->messageEntityEmail(
				offset : 81,
				length : 12,
			),
			$client->messageEntityBold(
				offset : 95,
				length : 84,
			),
			$client->messageEntityItalic(
				offset : 54,
				length : 29,
			),
			$client->messageEntityCode(
				offset : 54,
				length : 92,
			),
			$client->messageEntityPre(
				offset : 61,
				length : 48,
				language : 'jD2PsU4Spv5aOZ3x',
			),
			$client->messageEntityTextUrl(
				offset : 47,
				length : 83,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 66,
				length : 95,
				user_id : -7125823565604336706,
			),
			$client->inputMessageEntityMentionName(
				offset : 78,
				length : 0,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 59,
				length : 36,
			),
			$client->messageEntityCashtag(
				offset : 44,
				length : 79,
			),
			$client->messageEntityUnderline(
				offset : 21,
				length : 96,
			),
			$client->messageEntityStrike(
				offset : 58,
				length : 87,
			),
			$client->messageEntityBankCard(
				offset : 72,
				length : 0,
			),
			$client->messageEntitySpoiler(
				offset : 89,
				length : 99,
			),
			$client->messageEntityCustomEmoji(
				offset : 87,
				length : 26,
				document_id : -3908643982139740016,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 90,
				length : 7,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```