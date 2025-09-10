# inputBotInlineResultDocument

**Description** : *Document \(media of any type except for photos\)*

**Layer** : 214

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
	id : 'i8xJ3kruaflMosmy',
	type : 'XLWPuZpJ1sAnU42t',
	title : 'DnMRgE4UOp8zjwCm',
	description : 'c7da6Y9uLmyIBCFN',
	document : $client->inputDocumentEmpty(),
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'o6V8i2pYaA7ZlINS',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 6,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 30,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 86,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 89,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 57,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 93,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 55,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 28,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 85,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 52,
				language : 'RuUcqSI8EgQ7rXAM',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 92,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 22,
				user_id : -7390010023079942165,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 49,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 54,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 52,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 6,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 96,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 97,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 2,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 71,
				document_id : 8871633548018174596,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 98,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```