# inputBusinessChatLink

**Description** : *Contains info about a business chat deep link &raquo; to be created by the current account*

**Layer** : 222

```tl
inputBusinessChatLink#11679fa7 flags:# message:string entities:flags.0?Vector<MessageEntity> title:flags.1?string = InputBusinessChatLink;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	message : 'MRZxjQCJX9esIKuA',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 98,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 43,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 15,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 99,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 74,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 20,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 57,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 41,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 9,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 58,
			language : 'QhpgkSOFYclGjsZy',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 90,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 17,
			user_id : 6128369699733186758,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 65,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 53,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 11,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 12,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 29,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 42,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 71,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 83,
			document_id : -7186773421072042355,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 91,
		),
	),
	title : 'INgX7GJr9A8RWFbf',
);
```