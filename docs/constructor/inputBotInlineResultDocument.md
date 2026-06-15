# inputBotInlineResultDocument

**Description** : *Document \(media of any type except for photos\)*

**Layer** : 227

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
	id : 'zACK7txOmgEqkeDF',
	type : '8i3nNeMbGOBukRdD',
	title : 'tuyYSUEeiITJpKVb',
	description : 'Uf1wu3DynVH8iIa7',
	document : $client->inputDocumentEmpty(),
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'eOLNd35cytvAK82k',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 58,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 82,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 83,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 43,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 24,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 76,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 36,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 22,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 33,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 9,
				language : 'WRkoqrE4iMVpFwA1',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 35,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 47,
				user_id : -1376210056523710542,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 9,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 19,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 74,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 28,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 1,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 14,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 51,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 17,
				document_id : 6300051581124537102,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 87,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 1,
				date : 14,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 100,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 84,
				old_text : 'pnRHJBcVIYQu723b',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 41,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```