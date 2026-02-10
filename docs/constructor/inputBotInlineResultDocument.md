# inputBotInlineResultDocument

**Description** : *Document \(media of any type except for photos\)*

**Layer** : 222

```tl
inputBotInlineResultDocument#fff8fdc4 flags:# id:string type:string title:flags.1?string description:flags.2?string document:InputDocument send_message:InputBotInlineMessage = InputBotInlineResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	id : 'EdNy0pBfcxL47hj6',
	type : 'GwFLXvNzIfrcC9Ai',
	title : 'rpFxLSBhyJnfv2XZ',
	description : 'AxhD3C1zeVWIfsEX',
	document : $client->inputDocumentEmpty(),
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'nd7LSjpUKAl8Tq4y',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 99,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 40,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 60,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 93,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 74,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 77,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 90,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 24,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 62,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 96,
				language : 'Wrpa7xXy2z9SkbGg',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 50,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 68,
				user_id : -2506047310003296530,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 18,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 72,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 15,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 9,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 24,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 39,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 83,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 65,
				document_id : -2453632738302154426,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 62,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```