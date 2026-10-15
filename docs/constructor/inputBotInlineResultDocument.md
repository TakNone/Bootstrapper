# inputBotInlineResultDocument

**Description** : *Document \(media of any type except for photos\)*

**Layer** : 229

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
	id : 'OmAy6ExJIh3XdnUP',
	type : 'up4QDGv5Jrfx1STK',
	title : 'wYK1S09cxjIziRXO',
	description : 'clWuEVyhAaHnC6Jp',
	document : $client->inputDocumentEmpty(),
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'qaQ26Hh3oNDXFpEZ',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 20,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 17,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 26,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 59,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 28,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 100,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 9,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 53,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 94,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 50,
				language : 'mTSpcwW87UaPKkHh',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 19,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 80,
				user_id : 166959789476817493,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 17,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 51,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 48,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 5,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 34,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 67,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 5,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 63,
				document_id : 7955458157738097964,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 0,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 50,
				date : 55,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 5,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 97,
				old_text : 'Qq8yNxC3l47P9u65',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 81,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```