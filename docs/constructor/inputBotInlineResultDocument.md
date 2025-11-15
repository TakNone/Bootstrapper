# inputBotInlineResultDocument

**Description** : *Document \(media of any type except for photos\)*

**Layer** : 218

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
	id : '4CtM9kGdQ3hIvFWa',
	type : '4R5yszVK2qMNiJbd',
	title : 'YneKMS5OAUmGi1gy',
	description : '60C9LqQo8wVTuBNt',
	document : $client->inputDocumentEmpty(),
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : '2cTG4itY7Cn6DHhJ',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 52,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 80,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 26,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 11,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 87,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 9,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 72,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 88,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 24,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 36,
				language : 'gnpD58t6eadhw9Pc',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 11,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 69,
				user_id : 1258556556329819152,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 40,
				user_id : $client->get_input_user(peer : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 37,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 100,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 62,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 2,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 5,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 68,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 26,
				document_id : -2929513326041463674,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 59,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```