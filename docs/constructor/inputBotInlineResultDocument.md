# inputBotInlineResultDocument

**Description** : *Document (media of any type except for photos)*

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
	id : '3mqL1EcQyWPJreug',
	type : 'sN2KQXk8EvYPMLGD',
	title : 'rwuAMRg9KnpoIz2e',
	description : 'CQ9KxwPWYl4HmLMg',
	document : $client->inputDocumentEmpty(),
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'YdJyRbqu0Qcsm29h',
		entities : array(
			$client->messageEntityUnknown(
				offset : 3,
				length : 11,
			),
			$client->messageEntityMention(
				offset : 6,
				length : 62,
			),
			$client->messageEntityHashtag(
				offset : 40,
				length : 65,
			),
			$client->messageEntityBotCommand(
				offset : 20,
				length : 42,
			),
			$client->messageEntityUrl(
				offset : 93,
				length : 57,
			),
			$client->messageEntityEmail(
				offset : 59,
				length : 85,
			),
			$client->messageEntityBold(
				offset : 30,
				length : 47,
			),
			$client->messageEntityItalic(
				offset : 86,
				length : 7,
			),
			$client->messageEntityCode(
				offset : 6,
				length : 64,
			),
			$client->messageEntityPre(
				offset : 71,
				length : 94,
				language : '7WEbaN4kAuts8TcY',
			),
			$client->messageEntityTextUrl(
				offset : 25,
				length : 53,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 42,
				length : 27,
				user_id : -6978040067078011449,
			),
			$client->inputMessageEntityMentionName(
				offset : 79,
				length : 8,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 84,
				length : 76,
			),
			$client->messageEntityCashtag(
				offset : 9,
				length : 15,
			),
			$client->messageEntityUnderline(
				offset : 31,
				length : 78,
			),
			$client->messageEntityStrike(
				offset : 32,
				length : 69,
			),
			$client->messageEntityBankCard(
				offset : 82,
				length : 16,
			),
			$client->messageEntitySpoiler(
				offset : 4,
				length : 47,
			),
			$client->messageEntityCustomEmoji(
				offset : 62,
				length : 70,
				document_id : -591511923841291534,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 18,
				length : 42,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```