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
	id : '0HIdENDtMwCyljSG',
	type : 'c41FiqdR8vJ60Me9',
	title : 'JimaTVxChLZfPINc',
	description : '4UgHXb8vqxrySNze',
	document : $client->inputDocumentEmpty(),
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'GkYpQtHfSjMiC3c0',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 27,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 41,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 10,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 54,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 15,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 13,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 34,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 78,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 5,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 55,
				language : 'aVsNAO620gLy5r7C',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 19,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 75,
				user_id : -6622026235181056013,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 0,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 22,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 55,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 22,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 52,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 38,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 98,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 90,
				document_id : 1629629523560598230,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 67,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 100,
				date : 75,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 62,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 67,
				old_text : 'IDBSmwZ8hRuWvdHb',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 46,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```