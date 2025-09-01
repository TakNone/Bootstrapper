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
	id : 'zu7OVSXvpkj4LIyE',
	type : 'zOjG680VrCRx5XYh',
	title : 'SjCapeUYvsm9gZEB',
	description : 'BDbyzCORw6ZnN7rQ',
	document : $client->inputDocumentEmpty(),
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'f5R0sMAHeg8nYk2O',
		entities : array(
			$client->messageEntityUnknown(
				offset : 15,
				length : 26,
			),
			$client->messageEntityMention(
				offset : 65,
				length : 70,
			),
			$client->messageEntityHashtag(
				offset : 42,
				length : 75,
			),
			$client->messageEntityBotCommand(
				offset : 2,
				length : 95,
			),
			$client->messageEntityUrl(
				offset : 48,
				length : 29,
			),
			$client->messageEntityEmail(
				offset : 87,
				length : 94,
			),
			$client->messageEntityBold(
				offset : 81,
				length : 14,
			),
			$client->messageEntityItalic(
				offset : 59,
				length : 26,
			),
			$client->messageEntityCode(
				offset : 43,
				length : 33,
			),
			$client->messageEntityPre(
				offset : 54,
				length : 67,
				language : 'gmtP7TwHZ9dR4zNQ',
			),
			$client->messageEntityTextUrl(
				offset : 82,
				length : 86,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 78,
				length : 49,
				user_id : -8651358934172258169,
			),
			$client->inputMessageEntityMentionName(
				offset : 80,
				length : 26,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 93,
				length : 81,
			),
			$client->messageEntityCashtag(
				offset : 23,
				length : 86,
			),
			$client->messageEntityUnderline(
				offset : 37,
				length : 3,
			),
			$client->messageEntityStrike(
				offset : 86,
				length : 6,
			),
			$client->messageEntityBankCard(
				offset : 61,
				length : 32,
			),
			$client->messageEntitySpoiler(
				offset : 51,
				length : 13,
			),
			$client->messageEntityCustomEmoji(
				offset : 17,
				length : 90,
				document_id : -7684333944226500050,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 74,
				length : 85,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```