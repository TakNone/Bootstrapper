# inputBusinessChatLink

**Description** : *Contains info about a business chat deep link &raquo; to be created by the current account*

**Layer** : 218

```tl
inputBusinessChatLink#11679fa7 flags:# message:string entities:flags.0?Vector<MessageEntity> title:flags.1?string = InputBusinessChatLink;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>message</mark> | [`string`](type/string) | Message to pre-fill in the message input field |
| **entities** | [`flags.0?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |
| **title** | [`flags.1?string`](type/string) | Human-readable name of the link, to simplify management in the UI (only visible to the creator of the link) |

---

## Type

[InputBusinessChatLink](type/InputBusinessChatLink)

---

## Example

```php
$inputBusinessChatLink = $client->inputBusinessChatLink(
	message : 'KTFYfiHvUPrxhaSw',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 97,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 76,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 7,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 96,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 70,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 66,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 94,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 38,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 24,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 44,
			language : 'VhxM9apuwjqBi13b',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 21,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 55,
			user_id : 4001995127785325779,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 59,
			user_id : $client->get_input_user(peer : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 1,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 17,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 21,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 74,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 86,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 9,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 65,
			document_id : 581932227200641198,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 43,
		),
	),
	title : '9adijuSJmC5voTbf',
);
```