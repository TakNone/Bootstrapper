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
	id : 'kb0Vt2pKniQPhTqo',
	type : 'Fmha15cTJDsNKb3r',
	title : 'pnWteZ0SqwzJYmgA',
	description : 'diJ8Hfo1hBnFXUDS',
	document : $client->inputDocumentEmpty(),
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'o2GAV8f9XZIRTjuk',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 14,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 14,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 32,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 60,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 9,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 73,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 68,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 80,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 30,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 58,
				language : 'xo276UucMYrsFmDI',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 89,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 86,
				user_id : 4725561644872873909,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 97,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 54,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 23,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 99,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 82,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 58,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 21,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 66,
				document_id : -5197779770587461602,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 55,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```