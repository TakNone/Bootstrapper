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
	id : 'poy3GrubMLnUOw5R',
	type : 'o41DtuXSqW2nGTH5',
	title : 'ifCYlNd2ZQIbavpc',
	description : 'CFxWg1rBRtEzIKSe',
	document : $client->inputDocumentEmpty(),
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'LVavTRHky75EZX2M',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 93,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 49,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 71,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 22,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 1,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 21,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 34,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 13,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 3,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 43,
				language : 'oj1zgiPSkBJyl7O8',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 47,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 79,
				user_id : 3472069621292957238,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 16,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 60,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 78,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 67,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 16,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 20,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 48,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 14,
				document_id : -5594350773918409301,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 75,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```