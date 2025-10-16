# inputBotInlineResultDocument

**Description** : *Document \(media of any type except for photos\)*

**Layer** : 216

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
	id : 'oT0XYMKhrOcPLBsI',
	type : 'tFwdmEU8Knfxi7Rb',
	title : 'Y5vqJXhjApgDzLK3',
	description : 'tGdJUIoKujAbqiBm',
	document : $client->inputDocumentEmpty(),
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'NE29owpHLkYOTzaX',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 22,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 90,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 82,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 85,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 19,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 2,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 84,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 50,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 74,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 16,
				language : 'ZB13yArozck6UnGK',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 81,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 16,
				user_id : -8474705899298569430,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 68,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 19,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 82,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 55,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 60,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 45,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 5,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 98,
				document_id : 3721853701603588866,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 52,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```