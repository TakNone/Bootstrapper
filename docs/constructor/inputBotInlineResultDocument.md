# inputBotInlineResultDocument

**Description** : *Document \(media of any type except for photos\)*

**Layer** : 233

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
	id : 'WsDcbRv9ANfSUkgh',
	type : 'Wdma8ST5IF0QXH7Y',
	title : 'UBxu4agwWTJQM9Ao',
	description : '5yTnpgoj86Du2MIZ',
	document : $client->inputDocumentEmpty(),
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'cZ79WgeAvODNCHrF',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 11,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 89,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 92,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 3,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 63,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 31,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 60,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 70,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 77,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 4,
				language : 'DRJdVOslm7IQLaSA',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 45,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 70,
				user_id : -2763559762301094382,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 4,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 45,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 29,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 71,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 4,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 65,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 72,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 29,
				document_id : -5828650961090728136,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 89,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 23,
				date : 10,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 10,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 18,
				old_text : 'KvUArIphy42iH83C',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 97,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 39,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```