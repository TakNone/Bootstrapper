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
	id : '9grIuXUEL35RacMy',
	type : 'ckLR5iUTt70JP8CO',
	title : 'MmWPTfrQbSpRy4A5',
	description : 'eCXATsdMSRnGfq7V',
	document : $client->inputDocumentEmpty(),
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'QmSe4JDHhVEBn8dT',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 8,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 76,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 21,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 33,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 20,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 20,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 37,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 78,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 84,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 31,
				language : 'bEcaomYMiDej2d87',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 34,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 95,
				user_id : -2988979252909765919,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 66,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 20,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 23,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 41,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 37,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 2,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 43,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 47,
				document_id : 3213319945065932264,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 82,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```