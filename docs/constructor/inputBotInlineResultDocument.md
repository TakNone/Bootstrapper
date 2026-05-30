# inputBotInlineResultDocument

**Description** : *Document \(media of any type except for photos\)*

**Layer** : 225

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
	id : '15bRxBAs7oZGardj',
	type : 'tw3qLsUHOY0Fpm4k',
	title : 'MnfjkmRKWrTe2SBY',
	description : 'jsf4IHEeyg5LhQVN',
	document : $client->inputDocumentEmpty(),
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'fmOxMkgrtoHby2cZ',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 95,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 61,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 18,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 90,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 80,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 61,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 52,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 92,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 73,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 0,
				language : 'RvC4IJEG2detzYpi',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 8,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 57,
				user_id : -1960977841212208122,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 76,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 66,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 37,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 4,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 77,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 92,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 66,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 72,
				document_id : 7441346308200030058,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 5,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 28,
				date : 20,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 78,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 64,
				old_text : 'YJ5UrTNo6vKf02Ej',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 5,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```