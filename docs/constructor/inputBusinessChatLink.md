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
	message : 'fTo3sUFBXE4yve6r',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 91,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 45,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 32,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 99,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 32,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 24,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 57,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 56,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 55,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 87,
			language : 'qO2QKtcTPU79AsDV',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 0,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 51,
			user_id : -927366417236542422,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 24,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 72,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 9,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 100,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 39,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 30,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 53,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 96,
			document_id : 6343698747735549660,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 73,
		),
	),
	title : 'e1TdutgNhD8CZajI',
);
```